<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HeadOfFamily;
use Illuminate\Http\Request;

class HeadOfFamilyAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headOfFamilies = HeadOfFamily::all();

        return response()->json([
            'success' => true,
            'data' => $headOfFamilies
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
        $headOfFamily = HeadOfFamily::find($id);

        return response()->json([
            'success' => true,
            'data' => $headOfFamily
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HeadOfFamily $headOfFamily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeadOfFamily $headOfFamily)
    {
        //
    }
}
