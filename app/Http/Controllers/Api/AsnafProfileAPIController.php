<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AsnafProfile;
use App\Models\AsnafSpouse;
use App\Models\AsnafSpouseDependant;
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
            $input['created_by'] = $id;
            $input['updated_by'] = $id;

            $uuid = Uuid::uuid4();
            if ($request->hasFile('front_ic')) {
                $frontIc = $request->file('front_ic');

                $input['front_ic'] = $frontIc->store($uuid, 'asnaf');
            }

            if ($request->hasFile('back_ic')) {
                $backIc = $request->file('back_ic');

                $input['back_ic'] = $backIc->store($uuid, 'asnaf');
            }

            if ($request->hasFile('muallaf_card')) {
                $muallafCard = $request->file('muallaf_card');

                $input['muallaf_card'] = $muallafCard->store($uuid, 'asnaf');
            }

            if ($request->hasFile('signature')) {
                $signature = $request->file('signature');

                $input['signature'] = $signature->store($uuid, 'asnaf');
            }

            $asnafProfile = AsnafProfile::updateOrCreate([
                'user_id' => $id
            ], $input);

            $asnafSpouse = AsnafSpouse::updateOrCreate([
                'asnaf_profile_id' => $asnafProfile->id,
            ], [
                'name' => $request->spouse_name,
                'ic_no' => $request->spouse_ic_no,
                'dependants' => $request->spouse_dependants
            ]);

            foreach($request->asnaf_spouse_dependants as $asnafSpouseDependant) {
                AsnafSpouseDependant::updateOrCreate([
                    'asnaf_spouse_id' => $asnafSpouse->id,
                    'name' => $asnafSpouseDependant['name'],
                ], [
                    'age' => $asnafSpouseDependant['age'],
                ]);
            }

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
