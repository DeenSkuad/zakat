<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AmilProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmilProfileAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amilProfiles = AmilProfile::all();

        return response()->json([
            'success' => true,
            'data' => $amilProfiles
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

            AmilProfile::create($input);

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
        $amilProfile = AmilProfile::find($id);

        return response()->json([
            'success' => true,
            'data' => $amilProfile
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

            $amilProfile = AmilProfile::find($id);
            $amilProfile->update($input);

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
            $amilProfile = AmilProfile::find($id);

            $amilProfile->deleted_by = auth()->user()->id;
            $amilProfile->save();

            $amilProfile->delete();

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function byType(string $type)
    {
        $amilProfiles = AmilProfile::where('type', $type)->get();

        return response()->json([
            'success' => true,
            'data' => $amilProfiles
        ]);

    }
}
