<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\ParkingSlot;
use App\Http\Requests\V1\StoreParkingSlotRequest;
use App\Http\Requests\V1\UpdateParkingSlotRequest;

class ParkingSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParkingSlotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParkingSlotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function show(ParkingSlot $parkingSlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function edit(ParkingSlot $parkingSlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParkingSlotRequest  $request
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParkingSlotRequest $request, ParkingSlot $parkingSlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParkingSlot $parkingSlot)
    {
        //
    }
}
