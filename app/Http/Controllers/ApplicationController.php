<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->all();

            $output = Application::with([
                'service',
                'name',
                'ic_no',
                'status',
            ]);

            $output = $output->paginate($input['length'])->toArray();

            $response = [
                "draw" => $input['draw'],
                "recordsTotal" => intval($output['total']),
                "recordsFiltered" => intval($output['total']),
                "data" => $output['data'],
            ];

            return response()->json($response, 200);
        }

        return view('application.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::get();
        $asnafs = User::role('Asnaf')->get();

        return view('application.create')->with([
            'services' => $services,
            'asnafs' => $asnafs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        dd($input);

        $user = User::find($request->user_id);
        $input['asnaf_profile_id'] = $user->asnaf->id;

        Application::create($input);

        return response()->json([
            'success' => true,
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
