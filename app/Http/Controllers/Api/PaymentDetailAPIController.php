<?php

namespace App\Http\Controllers;

use App\Models\PaymentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentDetailAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentDetailDetails = PaymentDetail::all();

        return response()->json([
            'success' => true,
            'data' => $paymentDetailDetails
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

            PaymentDetail::create($input);

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
        $paymentDetail = PaymentDetail::find($id);

        return response()->json([
            'success' => true,
            'data' => $paymentDetail
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

            $paymentDetail = PaymentDetail::find($id);
            $paymentDetail->update($input);

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
            $paymentDetail = PaymentDetail::find($id);

            $paymentDetail->deleted_by = auth()->user()->id;
            $paymentDetail->save();

            $paymentDetail->delete();

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
