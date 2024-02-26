<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(auth()->user()->hasRole('Admin')) {
            if ($request->ajax()) {
                $input = $request->all();

                Paginator::currentPageResolver(function () use ($input) {
                    return ($input['start'] / $input['length'] + 1);
                });

                $output = User::role('Penyewa');

                if (!empty($input['search']['value'])) {
                    $output = $output->where('name', 'LIKE', "%{$input['search']['value']}%");
                }

                // Paginate the results
                $output = $output->paginate($input['length'])->toArray();

                $response = [
                    "draw" => $input['draw'],
                    "recordsTotal" => intval($output['total']),
                    "recordsFiltered" => intval($output['total']),
                    "data" => $output['data'],
                ];

                return response()->json($response, 200);
            }

            return view('tenant.index');
        }

        if(auth()->user()->hasRole('Penyewa')) {
            if ($request->ajax()) {
                $user = User::find(auth()->user()->no_ic);

                $output = Http::withoutVerifying()->get("https://demo.rsakhidmat.com.my/ehartanah/api/customerinfo/get/{$user->ic_no}");

                $responseData = $output->json();

                $data = $responseData;

                return response()->json(['data' => $data], 200);
            }

            return view('tenant.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $state = User::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya ditambah'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return view('tenant.show')->with([
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('tenant.edit')->with([
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $state = User::find($id);

        $state->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dikemaskini'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dibuang'
        ]);
    }

    public function details($id)
    {
        $user = User::find($id);

        $output = Http::withoutVerifying()->get("https://demo.rsakhidmat.com.my/ehartanah/api/customerinfo/get/{$user->ic_no}");

        $responseData = $output->json();

        $data = $responseData;

        return response()->json(['data' => $data], 200);
    }
}
