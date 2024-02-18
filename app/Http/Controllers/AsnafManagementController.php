<?php

namespace App\Http\Controllers;

use App\Models\AsnafProfile;
use App\Models\District;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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

            $output = User::role(['asnaf'])->with(['asnaf']);

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
        $user = User::create([

        ]);

        $userAsnaf = $user->asnaf()->create([

        ]);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
