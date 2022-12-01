<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\ParkingSlot;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreParkingSlotRequest;
use App\Http\Requests\V1\UpdateParkingSlotRequest;
use App\Http\Resources\V1\ParkingSlotCollection;
use App\Http\Resources\V1\ParkingSlotResource;
use App\Filters\V1\ParkingSlotFilter;

class ParkingSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new ParkingSlotFilter();
        $filterItems = $filter->transform($request); // [['column','operator','value']]

        if (count($filterItems) == 0) {
            return new ParkingSlotCollection(ParkingSlot::all());
        } else {
            return new ParkingSlotCollection(ParkingSlot::where($filterItems)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParkingSlotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParkingSlotRequest $request)
    {
        $createData = ParkingSlot::create($request->all());

        return $createData->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function show(ParkingSlot $parkingSlot)
    {
        return new ParkingSlotResource($parkingSlot);
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
        $parkingSlot->update($request->all());

        if ($parkingSlot->wasChanged()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParkingSlot $parkingSlot)
    {
        $deleteData = $parkingSlot->delete();

        if ($deleteData) {
            return 1;
        } else {
            return 0;
        }
    }
}
