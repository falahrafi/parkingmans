<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\ParkingSlotStatus;
use App\Http\Requests\V1\StoreParkingSlotStatusRequest;
use App\Http\Requests\V1\UpdateParkingSlotStatusRequest;
use App\Http\Resources\V1\ParkingSlotStatusCollection;
use App\Http\Resources\V1\ParkingSlotStatusResource;

class ParkingSlotStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ParkingSlotStatusCollection(ParkingSlotStatus::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParkingSlotStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParkingSlotStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParkingSlotStatus  $parkingSlotStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ParkingSlotStatus $parkingSlotStatus)
    {
        return new ParkingSlotStatusResource($parkingSlotStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParkingSlotStatusRequest  $request
     * @param  \App\Models\ParkingSlotStatus  $parkingSlotStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParkingSlotStatusRequest $request, ParkingSlotStatus $parkingSlotStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParkingSlotStatus  $parkingSlotStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParkingSlotStatus $parkingSlotStatus)
    {
        //
    }
}
