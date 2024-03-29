<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\BookingStatus;
use App\Http\Requests\V1\StoreBookingStatusRequest;
use App\Http\Requests\V1\UpdateBookingStatusRequest;
use App\Http\Resources\V1\BookingStatusCollection;
use App\Http\Resources\V1\BookingStatusResource;

class BookingStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new BookingStatusCollection(BookingStatus::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookingStatus  $bookingStatus
     * @return \Illuminate\Http\Response
     */
    public function show(BookingStatus $bookingStatus)
    {
        return new BookingStatusResource($bookingStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingStatusRequest  $request
     * @param  \App\Models\BookingStatus  $bookingStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingStatusRequest $request, BookingStatus $bookingStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingStatus  $bookingStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingStatus $bookingStatus)
    {
        //
    }
}
