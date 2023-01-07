<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVehicleRequest extends FormRequest
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
            'vehicleCategoryId' => ['required', Rule::in([1,2,3,4,5])],
            'plateNumber' => ['required'],
            'description' => [],
            'image' => [''],
            'vehicleOwnerId' => ['required'], // Need to add unique later
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'vehicle_category_id' => $this->vehicleCategoryId,
            'plate_number' => $this->plateNumber,
            'vehicle_owner_id' => $this->vehicleOwnerId
        ]);
    }
}
