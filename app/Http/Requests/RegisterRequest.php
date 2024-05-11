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
            'fname' => 'required|string',
            'lname' => 'required|string',
            'password' => 'required|confirmed|min:6',
            'email' => 'required|string|email:filter|max:100|unique:users,email',
            'phone_number' => 'string|nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'sex' => 'required',
            'section_id' => 'required|exists:sections,id'
        ];
    }
}
