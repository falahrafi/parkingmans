<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\VehicleOwner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreVehicleOwnerRequest;
use App\Http\Requests\V1\UpdateVehicleOwnerRequest;
use App\Http\Resources\V1\VehicleOwnerResource;
use App\Http\Resources\V1\VehicleOwnerCollection;
use App\Filters\V1\VehicleOwnerFilter;

class VehicleOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new VehicleOwnerFilter();
        $filterItems = $filter->transform($request); // [['column','operator','value']]

        if (count($filterItems) == 0) {
            return new VehicleOwnerCollection(VehicleOwner::all());
        } else {
            return new VehicleOwnerCollection(VehicleOwner::where($filterItems)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleOwnerRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $createData = VehicleOwner::create($data);

        return $createData->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleOwner  $vehicleOwner
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleOwner $vehicleOwner)
    {
        return new VehicleOwnerResource($vehicleOwner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleOwnerRequest  $request
     * @param  \App\Models\VehicleOwner  $vehicleOwner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleOwnerRequest $request, VehicleOwner $vehicleOwner)
    {
        $oldPw = $vehicleOwner->password;

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $vehicleOwner->update($data);

        if ($vehicleOwner->wasChanged() && !password_verify($request->password, $oldPw)) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleOwner  $vehicleOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleOwner $vehicleOwner)
    {
        $deleteData = $vehicleOwner->delete();

        if ($deleteData) {
            return 1;
        } else {
            return 0;
        }
    }
}
