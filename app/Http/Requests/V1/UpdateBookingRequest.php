<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookingRequest extends FormRequest
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
        $method = $this->method();

        if ($method == "PUT") {
            return [
                'vehicleOwnerId' => ['required'],
                'vehicleId' => ['required'],
                'parkingSlotId' => ['required'],
                'duration' => ['required'],
                'statusId' => ['required', Rule::in([0, 1, 2, 3, 4])],
                'notes' => [],
                'bookedDate' => ['required']
            ];
        } else {
            // PATCH
            return [
                'vehicleOwnerId' => ['sometimes', 'required'],
                'vehicleId' => ['sometimes', 'required'],
                'parkingSlotId' => ['sometimes', 'required'],
                'duration' => ['sometimes', 'required'],
                'statusId' => ['sometimes', 'required', Rule::in([0, 1, 2, 3, 4])],
                'notes' => [],
                'bookedDate' => ['sometimes', 'required']
            ];
        }
    }

    protected function prepareForValidation()
    {
        if (isset($this->vehicleOwnerId)) $this->merge(['vehicle_owner_id' => $this->vehicleId]);
        if (isset($this->vehicleId)) $this->merge(['vehicle_id' => $this->vehicleId]);
        if (isset($this->parkingSlotId)) $this->merge(['parking_slot_id' => $this->parkingSlotId]);
        if (isset($this->statusId)) $this->merge(['status_id' => $this->statusId]);
        if (isset($this->bookedDate)) $this->merge(['booked_date' => $this->bookedDate]);
    }
}
