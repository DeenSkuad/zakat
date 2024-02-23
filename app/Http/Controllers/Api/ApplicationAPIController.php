<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ApplicationAttachment;
use App\Models\ApplicationDisease;
use App\Models\ApplicationPrescription;
use App\Models\Disease;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class ApplicationAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::with([
            'prescriptions',
            'diseases',
            'attachments'
        ])->get();

        return response()->json([
            'success' => true,
            'data' => $applications
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->except(['attachments', 'diseases', 'prescriptions']);
            $input['created_by'] = auth()->user()->id;

            $application = Application::create($input);

            if ($request->hasFile('attachments')) {
                $attachments = $request->file('attachments');

                $uuid = Uuid::uuid4();
                foreach ($attachments as $attachment) {
                    $filePath = $attachment->store($uuid, 'application-attachments');

                    ApplicationAttachment::create([
                        'application_id' => $application->id,
                        'file' => $filePath,
                    ]);
                }
            }

            $data = Disease::where('id', $request->diseases)->first();

            if (empty($data)) {
                $data = Disease::create(['name' => $data->name]);
            }

            ApplicationDisease::create([
                'application_id' => $application->id,
                'disease_id' => $data->id
            ]);

            $data = Prescription::where('id', $request->prescriptions)->first();

            if (empty($data)) {
                $data = Prescription::create(['name' => $request->name]);
            }

            ApplicationPrescription::create([
                'application_id' => $application->id,
                'prescription_id' => $data->id
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $application = Application::with([
            'prescriptions',
            'diseases',
            'attachments'
        ])->find($id);

        return response()->json([
            'success' => true,
            'data' => $application
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

            $application = Application::find($id);
            $application->update($input);

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
            $application = Application::find($id);

            $application->deleted_by = auth()->user()->id;
            $application->save();

            $application->delete();

            DB::commit();
            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function byUserId($id = null)
    {
        $applications = Application::where('created_by', $id ?? auth()->user()->id)->get();

        return response()->json([
            'success' => true,
            'data' => $applications
        ]);
    }
}
