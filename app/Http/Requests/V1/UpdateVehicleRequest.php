<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateVehicleRequest extends FormRequest
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
                'vehicleCategoryId' => ['required', Rule::in([1, 2, 3, 4, 5])],
                'plateNumber' => ['required'],
                'description' => [],
                'image' => ['required'],
                'vehicleOwnerId' => ['required'], // Need to add unique later
            ];
        } else {
            // PATCH
            return [
                'vehicleCategoryId' => ['sometimes', 'required', Rule::in([1, 2, 3, 4, 5])],
                'plateNumber' => ['sometimes', 'required'],
                'description' => [],
                'image' => ['sometimes', 'required'],
                'vehicleOwnerId' => ['sometimes', 'required'], // Need to add unique later
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->vehicleCategoryId) $this->merge(['vehicle_category_id' => $this->vehicleCategoryId]);
        if ($this->plateNumber) $this->merge(['plate_number' => $this->plateNumber]);
        if ($this->vehicleOwnerId) $this->merge(['vehicle_owner_id' => $this->vehicleOwnerId]);
    }
}
