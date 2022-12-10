<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePaymentRequest extends FormRequest
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
            'bookingId' => ['required'],
            'amount' => ['required'],
            'method' => ['required', Rule::in(['Credit Card', 'Bank Transfers', 'Cash'])],
            'statusId' => ['required', Rule::in([0, 1, 2, 3])], 
            'notes' => [],
            'paidBy' => ['required'],
            'paidDate' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'booking_id' => $this->bookingId,
            'status_id' => $this->statusId,
            'paid_by' => $this->paidBy,
            'paid_date' => $this->paidDate,
        ]);
    }
}
