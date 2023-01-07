<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'username' => ['required', 'unique:users'],
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'fullname' => ['required'],
            'avatar' => [''],
            'contact' => ['required'],
            'email' => ['required', 'email'],
            'userLevel' => ['required', Rule::in([1, 2])]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_level' => $this->userLevel
        ]);
    }
}
