<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vehicleOwnerId' => ['required'],
            'vehicleId' => ['required'],
            'parkingSlotId' => ['required'],
            'duration' => ['required'],
            'statusId' => ['required', Rule::in([0, 1, 2, 3, 4])],
            'notes' => [],
            'bookedDate' => ['required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'vehicle_owner_id' => $this->vehicleOwnerId,
            'vehicle_id' => $this->vehicleId,
            'parking_slot_id' => $this->parkingSlotId,
            'status_id' => $this->statusId,
            'booked_date' => $this->bookedDate,
        ]);
    }
}
