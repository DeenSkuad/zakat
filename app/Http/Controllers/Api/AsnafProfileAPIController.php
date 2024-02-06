<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AsnafProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

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
            $input = $request->except(['front_ic', 'back_ic', 'muallaf_card']);
            $input['user_id'] = $id;
            $input['updated_by'] = $id;

            if ($request->hasFile('front_ic')) {
                $frontIc = $request->file('front_ic');

                $uuid = Uuid::uuid4();
                $input['front_ic'] = $frontIc->store($uuid, 'asnaf');
            }

            if ($request->hasFile('back_ic')) {
                $backIc = $request->file('back_ic');

                $uuid = Uuid::uuid4();
                $input['back_ic'] = $backIc->store($uuid, 'asnaf');
            }

            if ($request->hasFile('muallaf_card')) {
                $muallafCard = $request->file('muallaf_card');

                $uuid = Uuid::uuid4();
                $input['muallaf_card'] = $muallafCard->store($uuid, 'asnaf');
            }

            $asnafProfile = AsnafProfile::updateOrCreate([
                'user_id' => $id
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
