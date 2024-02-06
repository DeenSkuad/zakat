<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Adult;
use Illuminate\Http\Request;

class AdultAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adults = Adult::all();

        return response()->json([
            'success' => true,
            'data' => $adults
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
    public function show($id)
    {
        $adult = Adult::find($id);

        return response()->json([
            'success' => true,
            'data' => $adult
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adult $adult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adult $adult)
    {
        //
    }
}
