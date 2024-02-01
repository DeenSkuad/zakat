<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceAPIController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/services",
     *     tags={"Services"},
     *     summary="Get list of Services",
     *     description="Get Services",
     *     @OA\Response(response=200, description="Service Module"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     *     security={{"passport": {"*"}}},
     * )
     */
    public function index()
    {
        $services = Service::all();

        return response()->json([
            'success' => true,
            'data' => $services
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

            Service::create($input);

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
        $service = Service::find($id);

        return response()->json([
            'success' => true,
            'data' => $service
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

            $service = Service::find($id);
            $service->update($input);

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
            $service = Service::find($id);

            $service->deleted_by = auth()->user()->id;
            $service->save();

            $service->delete();

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
