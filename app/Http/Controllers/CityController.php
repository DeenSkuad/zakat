<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CityController extends Controller
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

            $output = City::with(['state']);

            if (!empty($input['search']['value'])) {
                $output = $output->where('name', 'LIKE', "%{$input['search']['value']}%")
                    ->orWhereHas('state', function ($query) use ($input) {
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

        return view('city.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::get();

        return view('city.create')->with([
            'states' => $states
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $city = City::create($input);

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
        $city = City::find($id);
        $states = State::get();

        return view('city.show')->with([
            'city' => $city,
            'states' => $states
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::find($id);
        $states = State::get();

        return view('city.edit')->with([
            'city' => $city,
            'states' => $states
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $city = City::find($id);

        $city->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dikemaskini'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berjaya dibuang'
        ]);
    }

    public function byState($stateId)
    {
        $cities = City::where('state_id', $stateId)->get();

        return response()->json([
            'success' => true,
            'data' => $cities
        ]);
    }
}
