<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdateVehicleOwnerRequest extends FormRequest
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

        if($method == "PUT") {
            return [
                'username' => ['required'],
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
                'avatar' => ['required'],
                'contact' => ['required'],
                'email' => ['required', 'email'],
            ];            
        } else {
            // PATCH
            return [
                'username' => ['sometimes', 'required'],
                'password' => [
                    'sometimes',
                    'required',
                    Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised()
                ],
                'fullname' => ['sometimes', 'required'],
                'avatar' => ['sometimes', 'required'],
                'contact' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
            ];    
        }
    }
}
