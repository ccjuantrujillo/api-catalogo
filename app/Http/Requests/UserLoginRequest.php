<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    public function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(
            response()->json(
                [
                    'status' => false,
                    'message' => 'Validation errors',
                    'errors' => $validator->errors()
                ],
                400
            )
        );
    }

    public function messages()
    {
        return [
            'email.required' => 'Email es requerido',
            'password.required' => 'Code es requerido'
        ];
    }
}
