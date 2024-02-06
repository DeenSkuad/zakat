<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceAPIController extends Controller
{
    /**
     * @OA\Schema(
     *     schema="Service",
     *     type="object",
     *     title="Service",
     *     description="References Service Model",
     *     @OA\Property(
     *         property="name",
     *         type="string",
     *         description="Name of the service",
     *         example="Bantuan Makanan"
     *     ),
     * )
     *
     * @OA\Get(
     *     path="/api/services",
     *     tags={"Services"},
     *     summary="Get list of Services",
     *     description="Retrieves a list of all available services.",
     *     @OA\Response(
     *         response=200,
     *         description="List of services retrieved successfully",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Service")
     *         )
     *     ),
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
     * @OA\Post(
     *     path="/api/services",
     *     tags={"Services"},
     *     summary="Store a Service into database",
     *     description="Create a new service entry in the database.",
     *     @OA\Response(
     *         response=200,
     *         description="Service successfully created",
     *         @OA\JsonContent(ref="#/components/schemas/Service")
     *     ),
     *     security={{"passport": {"*"}}},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Data required to create a new service",
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string", example="Bantuan Makanan")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();

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
     * @OA\Get(
     *     path="/api/services/{id}",
     *     tags={"Services"},
     *     summary="Get a Service by ID",
     *     description="Retrieves detailed information about a specific service using its ID.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Unique identifier of the service",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Service details retrieved successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Service")
     *     ),
     *     security={{"passport": {"*"}}},
     * )
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
     * @OA\Put(
     *     path="/api/services/{id}",
     *     tags={"Services"},
     *     summary="Update a specific service",
     *     description="Updates the details of a specific service by ID.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Service ID",
     *         @OA\Schema(type="integer", format="int64")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         description="Object containing updated service information",
     *         @OA\JsonContent(ref="#/components/schemas/Service")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Service successfully updated",
     *         @OA\JsonContent(ref="#/components/schemas/Service")
     *     ),
     *     security={{"passport": {"*"}}}
     * )
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();

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
     * @OA\Delete(
     *     path="/api/services/{id}",
     *     tags={"Services"},
     *     summary="Delete a Service by ID",
     *     description="Deletes a specific service identified by its ID.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Unique identifier of the service to be deleted",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Service successfully deleted",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Service successfully deleted")
     *         )
     *     ),
     *     security={{"passport": {"*"}}},
     * )
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $service = Service::find($id);

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
