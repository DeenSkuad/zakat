<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Kariah;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KariahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->all();

            Paginator::currentPageResolver(function () use ($input) {
                return ($input['start'] / $input['length'] + 1);
            });

            $output = Kariah::with(['district']);

            if (!empty($input['search']['value'])) {
                $output = $output->where('name', 'LIKE', "%{$input['search']['value']}%")->orWhere('address', 'LIKE', "%{$input['search']['value']}%")
                    ->orWhere('postcode', 'LIKE', "%{$input['search']['value']}%")->orWhereHas('district', function ($query) use ($input) {
                        $query->where('name', 'LIKE', "%{$input['search']['value']}%");
                    });
            }

            // Paginate the results
            $output = $output->paginate($input['length'])->toArray();

            $response = [
                "draw" => $input['draw'],
                "recordsTotal" => intval($output['total']),
                "recordsFiltered" => intval($output['total']),
                "data" => $output['data'],
            ];

            return response()->json($response, 200);
        }

        return view('kariah.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::get();

        return view('kariah.create')->with([
            'states' => $states
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $city = Kariah::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya ditambah'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kariah = Kariah::find($id);
        $states = State::get();
        $districts = District::get();

        return view('kariah.show')->with([
            'kariah' => $kariah,
            'states' => $states,
            'districts' => $districts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kariah = Kariah::find($id);
        $states = State::get();
        $districts = District::get();

        return view('kariah.edit')->with([
            'kariah' => $kariah,
            'states' => $states,
            'districts' => $districts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $city = Kariah::find($id);

        $city->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dikemaskini'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kariah $kariah)
    {
        $kariah->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dibuang'
        ]);
    }

    public function byDistrict($districtId)
    {
        $kariahs = Kariah::where('district_id', $districtId)->get();

        return response()->json([
            'success' => true,
            'data' => $kariahs
        ]);
    }

    public function byPostcode($postcode)
    {
        $kariahs = Kariah::where('postcode', $postcode)->get();

        return response()->json([
            'success' => true,
            'data' => $kariahs
        ]);
    }
}
