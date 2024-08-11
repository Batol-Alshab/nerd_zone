<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fname' => 'required|regex:/^[\p{Arabic}a-zA-Z]+[\p{Arabic}a-zA-Z0-9\s]*$/u|string',
            'lname' => 'required|regex:/^[\p{Arabic}a-zA-Z]+[\p{Arabic}a-zA-Z0-9\s]*$/u|string',
            'password' => 'required|confirmed|min:6',
            'email' => 'required|string|email:filter|max:100|unique:users,email',
            'phone_number' => 'string|nullable|regex:/^09\d{8}$/|min:10',
            'sex' => 'required',
            'section_id' => 'required|exists:sections,id'
        ];
    }
}
