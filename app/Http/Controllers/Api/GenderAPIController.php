<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genders = Gender::all();

        return response()->json([
            'success' => true,
            'data' => $genders
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
        $gender = Gender::find($id);

        return response()->json([
            'success' => true,
            'data' => $gender
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gender $gender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gender $gender)
    {
        //
    }
}
