<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePaymentRequest extends FormRequest
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
                'bookingId' => ['required'],
                'amount' => ['required'],
                'method' => ['required', Rule::in(['Credit Card', 'Bank Transfers', 'Cash'])],
                'statusId' => ['required', Rule::in([0, 1, 2, 3])],
                'notes' => [],
                'paidBy' => ['required'],
                'paidDate' => ['required'],
            ];
        } else {
            // PATCH
            return [
                'bookingId' => ['sometimes', 'required'],
                'amount' => ['sometimes', 'required'],
                'method' => ['sometimes', 'required', Rule::in(['Credit Card', 'Bank Transfers', 'Cash'])],
                'statusId' => ['sometimes', 'required', Rule::in([0, 1, 2, 3])],
                'notes' => [],
                'paidBy' => ['sometimes', 'required'],
                'paidDate' => ['sometimes', 'required'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if (isset($this->bookingId)) $this->merge(['booking_id' => $this->bookingId]);
        if (isset($this->statusId)) $this->merge(['status_id' => $this->statusId]);
        if (isset($this->paidBy)) $this->merge(['paid_by' => $this->paidBy]);
        if (isset($this->paidDate)) $this->merge(['paid_date' => $this->paidDate]);
    }
}
