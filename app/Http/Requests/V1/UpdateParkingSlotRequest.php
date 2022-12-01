<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateParkingSlotRequest extends FormRequest
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
                'slotNumber' => ['required'],
                'statusId' => ['required', Rule::in([0, 1, 2])]
            ];
        } else {
            // PATCH
            return [
                'slotNumber' => ['sometimes', 'required'],
                'statusId' => ['sometimes','required', Rule::in([0, 1, 2])]
            ];
        }
    }

    protected function prepareForValidation()
    {
        if(isset($this->slotNumber)) $this->merge(['slot_number' => $this->slotNumber]);
        if(isset($this->statusId)) $this->merge(['status_id' => $this->statusId]);
    }
}
