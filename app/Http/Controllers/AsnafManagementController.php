<?php

namespace App\Http\Controllers;

use App\Jobs\ChangePasswordMailJob;
use App\Mail\CreatePasswordEmail;
use App\Models\AsnafProfile;
use App\Models\District;
use App\Models\State;
use App\Models\User;
use App\Models\PasswordResetToken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
use Str;

class AsnafManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->all();

            Paginator::currentPageResolver(function () use ($input) {
                return ($input['start'] / $input['length'] + 1);
            });

            $output = User::role(['Asnaf'])->with(['asnaf', 'asnaf.kariah']);

            if (!empty($input['search']['value'])) {
                $output = $output->where('name', 'LIKE', "%{$input['search']['value']}%")
                    ->orWhereHas('state', function ($query) use ($input) {
                        $query->where('name', 'LIKE', "%{$input['search']['value']}%");
                    });
            }

            $output = $output->paginate($input['length'])->toArray();

            $response = [
                "draw" => $input['draw'],
                "recordsTotal" => intval($output['total']),
                "recordsFiltered" => intval($output['total']),
                "data" => $output['data'],
            ];

            return response()->json($response, 200);
        }

        return view('asnaf-management.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::get();
        $districts = District::get();

        return view('asnaf-management.create')->with([
            'states' => $states,
            'districts' => $districts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $token = Str::random(64);

        $user = User::create([
            'ic_no' => $request->ic_no,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('asdasd')
        ]);

        $user->assignRole('Asnaf');

        $user->asnaf()->create([
            'kariah_id' => $request->kariah_id,
            'phone_no' => $request->phone_no,
            'state_id' => $request->state_id,
            'district_id' => $request->district_id,
            'postcode' => $request->postcode,
        ]);

        PasswordResetToken::create([
            'email' => $user->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send(new CreatePasswordEmail($user, $token));

        // dispatch(new CreatePasswordEmailJob($user, $password));

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya ditambah!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with(['asnaf', 'asnaf.kariah'])->find($id);
        $states = State::get();

        return view('asnaf-management.show')->with([
            'success' => true,
            'user' => $user,
            'states' => $states
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::with(['asnaf', 'asnaf.kariah'])->find($id);
        $states = State::get();

        return view('asnaf-management.edit')->with([
            'success' => true,
            'user' => $user,
            'states' => $states
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $user->update([
            'ic_no' => $request->ic_no,
            'name' => $request->name,
            'email' => $request->email
        ]);

        $user->asnaf()->update([
            'kariah_id' => $request->kariah_id,
            'phone_no' => $request->phone_no
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dikemaskini!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->asnaf()->delete();
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dihapuskan!'
        ]);
    }
}
