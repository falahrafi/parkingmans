<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\BookingFilter;
use App\Http\Controllers\Controller;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreBookingRequest;
use App\Http\Requests\V1\UpdateBookingRequest;
use App\Http\Resources\V1\BookingCollection;
use App\Http\Resources\V1\BookingResource;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new BookingFilter();
        $filterItems = $filter->transform($request); // [['column','operator','value']]

        if (count($filterItems) == 0) {
            return new BookingCollection(Booking::all());
        } else {
            return new BookingCollection(Booking::where($filterItems)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $createData = Booking::create($request->all());

        return $createData->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return new BookingResource($booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->all());

        if ($booking->wasChanged()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $deleteData = $booking->delete();

        if ($deleteData) {
            return 1;
        } else {
            return 0;
        }
    }
}
