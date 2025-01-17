<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationAttachment;
use App\Models\Disease;
use App\Models\ApplicationDisease;
use App\Models\ApplicationPrescription;
use App\Models\Kariah;
use App\Models\Prescription;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->all();

            $output = Application::with([
                'asnaf',
                'service',
                'attachments',
                'diseases',
                'prescriptions',
                'status'
            ]);

            $output = $output->paginate($input['length'])->toArray();

            $response = [
                "draw" => $input['draw'],
                "recordsTotal" => intval($output['total']),
                "recordsFiltered" => intval($output['total']),
                "data" => $output['data'],
            ];

            return response()->json($response, 200);
        }

        return view('application.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::get();
        $diseases = Disease::get();
        $prescriptions = Prescription::get();
        $kariahs = Kariah::get();
        $asnafs = User::role('Asnaf')->get();

        return view('application.create')->with([
            'services' => $services,
            'asnafs' => $asnafs,
            'kariahs' => $kariahs,
            'diseases' => $diseases,
            'prescriptions' => $prescriptions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $user = User::find($request->user_id);
        $input['asnaf_profile_id'] = $user->asnaf->id;

        $application = Application::create($input);

        $uuid = Uuid::uuid4();
        if (!empty($request->attachment)) {
            $attachment = $request->file('attachment');

            $uuid = Uuid::uuid4();
            $filePath = $attachment->store($uuid, 'application-attachments');

            ApplicationAttachment::create([
                'application_id' => $application->id,
                'file' => $filePath,
            ]);
        }

        $applicationDisease = ApplicationDisease::create([
            'application_id' => $application->id,
            'disease_id' => $request->disease_id,
        ]);

        $applicationPrescription = ApplicationPrescription::create([
            'application_id' => $application->id,
            'prescription_id' => $request->prescription_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya ditambah!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::get();
        $diseases = Disease::get();
        $prescriptions = Prescription::get();
        $kariahs = Kariah::get();
        $asnafs = User::role('Asnaf')->get();
        $application = Application::find($id);

        return view('application.edit')->with([
            'services' => $services,
            'asnafs' => $asnafs,
            'kariahs' => $kariahs,
            'diseases' => $diseases,
            'prescriptions' => $prescriptions,
            'application' => $application
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $user = User::find($request->user_id);

        $input['asnaf_profile_id'] = $user->asnaf->id;

        $application = Application::find($id);

        $application->update($input);

        $uuid = Uuid::uuid4();
        if ($request->hasFile('attachments')) {
            $attachment = $request->file('attachment');

            $uuid = Uuid::uuid4();
            
            $filePath = $attachment->store($uuid, 'application-attachments');

            $application->attachments()->delete();

            ApplicationAttachment::create([
                'application_id' => $application->id,
                'file' => $filePath,
            ]);
        }

        $applicationDisease = ApplicationDisease::where('application_id', $application->id)->first();
        $applicationDisease->update([
            'disease_id' => $request->disease_id,
        ]);

        $applicationPrescription = ApplicationPrescription::where('application_id', $application->id)->first();
        $applicationPrescription->update([
            'prescription_id' => $request->prescription_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya ditambah!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $application = Application::find($id);

        $application->delete();

        return response()->json([
            'success' => true,
        ]);
    }
}
