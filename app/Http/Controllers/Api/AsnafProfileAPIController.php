<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AsnafProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsnafProfileAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asnafProfile = AsnafProfile::all();

        return response()->json([
            'success' => true,
            'data' => $asnafProfile
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

            AsnafProfile::create($input);

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
        $asnafProfile = AsnafProfile::find($id);

        return response()->json([
            'success' => true,
            'data' => $asnafProfile
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
            $input['user_id'] = $request->user_id;
            $input['updated_by'] = $id;

            $asnafProfile = AsnafProfile::updateOrCreate([
                'user_id' => $request->user_id
            ], [
                $input
            ]);

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
            $asnafProfile = AsnafProfile::find($id);

            $asnafProfile->deleted_by = auth()->user()->id;
            $asnafProfile->save();

            $asnafProfile->delete();

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
