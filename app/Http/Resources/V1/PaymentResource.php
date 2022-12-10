<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'bookingId' => $this->booking_id,
            'amount' => $this->amount,
            'method' => $this->method,
            'statusId' => $this->status_id,
            'notes' => $this->notes,
            'paidBy' => $this->paid_by,
            'paidDate' => $this->paid_date,
        ];
    }
}