<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MaritalStatus;
use Illuminate\Http\Request;

class MaritalStatusAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maritalStatuses = MaritalStatus::all();

        return response()->json([
            'success' => true,
            'data' => $maritalStatuses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $maritalStatus = MaritalStatus::find($id);

        return response()->json([
            'success' => true,
            'data' => $maritalStatus
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaritalStatus $maritalStatus)
    {
        //
    }
}
