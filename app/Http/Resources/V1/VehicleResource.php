<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
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
            'vehicleCategoryId' => $this->vehicle_category_id,
            'plateNumber' => $this->plate_number,
            'description' => $this->description,
            'image' => $this->image,
            'vehicleOwnerId' => $this->vehicle_owner_id,
        ];
    }
}
