<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'vehicleOwnerId' => $this->vehicle_owner_id,
            'vehicleId' => $this->vehicle_id,
            'parkingSlotId' => $this->parking_slot_id,
            'duration' => $this->duration,
            'statusId' => $this->status_id,
            'notes' => $this->notes,
            'bookedDate' => $this->booked_date
        ];
    }
}
