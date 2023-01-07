<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreVehicleRequest;
use App\Http\Requests\V1\UpdateVehicleRequest;
use App\Http\Resources\V1\VehicleResource;
use App\Http\Resources\V1\VehicleCollection;
use App\Filters\V1\VehicleFilter;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new VehicleFilter();
        $filterItems = $filter->transform($request); // [['column','operator','value']]

        if (count($filterItems) == 0) {
            return new VehicleCollection(Vehicle::all());
        } else {
            return new VehicleCollection(Vehicle::where($filterItems)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleRequest $request)
    {
        $data = $request->all();

        // UPLOAD
        if (is_string($request->image)) {
            // do nothing
        } else {
            $imageName = time() . '.' . $request->image->extension();
            $data['image'] = $imageName;
            $request->image->move(public_path('images'), $imageName);
        }

        $createData = Vehicle::create($data);        

        return $createData->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return new VehicleResource($vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleRequest  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $data = $request->all();
        $oldImage = $vehicle->image;

        // UPLOAD
        if (is_string($request->image)) {
            $data['image'] = $oldImage;
        } else {
            $imageName = time() . '.' . $request->image->extension();
            $data['image'] = $imageName;
            $request->image->move(public_path('images'), $imageName);
        }

        $vehicle->update($data);

        if ($vehicle->wasChanged()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $deleteData = $vehicle->delete();

        if ($deleteData) {
            return 1;
        } else {
            return 0;
        }
    }
}
