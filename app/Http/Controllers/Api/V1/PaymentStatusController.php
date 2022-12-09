<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\PaymentStatus;
use App\Http\Requests\V1\StorePaymentStatusRequest;
use App\Http\Requests\V1\UpdatePaymentStatusRequest;
use App\Http\Resources\V1\PaymentStatusCollection;
use App\Http\Resources\V1\PaymentStatusResource;

class PaymentStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PaymentStatusCollection(PaymentStatus::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentStatus  $paymentStatus
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentStatus $paymentStatus)
    {
        return new PaymentStatusResource($paymentStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentStatusRequest  $request
     * @param  \App\Models\PaymentStatus  $paymentStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentStatusRequest $request, PaymentStatus $paymentStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentStatus  $paymentStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentStatus $paymentStatus)
    {
        //
    }
}
