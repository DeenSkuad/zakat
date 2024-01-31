<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kariah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KariahAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kariahs = Kariah::all();

        return response()->json([
            'success' => true,
            'data' => $kariahs
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

            Kariah::create($input);

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
        $kariah = Kariah::find($id);

        return response()->json([
            'success' => true,
            'data' => $kariah
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

            $kariah = Kariah::find($id);
            $kariah->update($input);

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
            $kariah = Kariah::find($id);

            $kariah->deleted_by = auth()->user()->id;
            $kariah->save();

            $kariah->delete();

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function byDistrictId($districtId)
    {
        $kariah = Kariah::where('city_id', $districtId)->get();

        return response()->json([
            'success' => true,
            'data' => $kariah
        ]);
    }
}
