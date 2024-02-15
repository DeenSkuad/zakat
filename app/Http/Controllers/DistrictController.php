<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class DistrictController extends Controller
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

            $output = District::with(['state', 'city']);

            if (!empty($input['search']['value'])) {
                $output = $output->where('name', 'LIKE', "%{$input['search']['value']}%")->orWhereHas('state', function ($query) use ($input) {
                    $query->where('name', 'LIKE', "%{$input['search']['value']}%");
                })->orWhereHas('city', function ($query) use ($input) {
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

        return view('district.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::get();

        return view('district.create')->with([
            'states' => $states
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $city = District::create($input);

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
        $district = District::find($id);
        $states = State::get();
        $cities = City::where('state_id', $district->state_id)->get();

        return view('district.show')->with([
            'district' => $district,
            'states' => $states,
            'cities' => $cities
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $district = District::find($id);
        $states = State::get();
        $cities = City::where('state_id', $district->state_id)->get();

        return view('district.edit')->with([
            'district' => $district,
            'states' => $states,
            'cities' => $cities
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $city = District::find($id);

        $city->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dikemaskini'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        $district->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dibuang'
        ]);
    }

    public function byCity($cityId)
    {
        $districts = District::where('city_id', $cityId)->get();

        return response()->json([
            'success' => true,
            'data' => $districts
        ]);
    }
}
