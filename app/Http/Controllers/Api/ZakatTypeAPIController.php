<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ZakatType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZakatTypeAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zakatTyps = ZakatType::all();

        return response()->json([
            'success' => true,
            'data' => $zakatTyps
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

            ZakatType::create($input);

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
        $zakatType = ZakatType::find($id);

        return response()->json([
            'success' => true,
            'data' => $zakatType
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

            $zakatType = ZakatType::find($id);
            $zakatType->update($input);

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
            $zakatType = ZakatType::find($id);

            $zakatType->deleted_by = auth()->user()->id;
            $zakatType->save();

            $zakatType->delete();

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
