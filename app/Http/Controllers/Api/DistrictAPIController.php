<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::all();

        return response()->json([
            'success' => true,
            'data' => $districts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['created_by'] = auth()->user()->id;

            District::create($input);

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $district = District::find($id);

        return response()->json([
            'success' => true,
            'data' => $district
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['updated_by'] = auth()->user()->id;

            $district = District::find($id);
            $district->update($input);

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $district = District::find($id);

            $district->deleted_by = auth()->user()->id;
            $district->save();

            $district->delete();

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function byStateId($stateId)
    {
        $district = District::where('state_id', $stateId)->get();

        return response()->json([
            'success' => true,
            'data' => $district
        ]);
    }

    public function byCityId($citytId)
    {
        $district = District::where('city_id', $citytId)->get();

        return response()->json([
            'success' => true,
            'data' => $district
        ]);
    }

    public function byPostcode($postcode)
    {
        $district = District::where('postcode', $postcode)->get();

        return response()->json([
            'success' => true,
            'data' => $district
        ]);
    }
}
