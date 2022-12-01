<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreParkingSlotRequest extends FormRequest
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
            'slotNumber' => ['required'],
            'statusId' => ['required', Rule::in([0,1,2])]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slot_number' => $this->slotNumber,
            'status_id' => $this->statusId
        ]);
    }
}
