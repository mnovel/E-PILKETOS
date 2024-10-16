<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:30',
            'nis' => 'required|numeric|digits:5|unique:users,nis,' . $this->user->uuid . ',uuid',
            'class' => 'required|exists:classes,id',
            'email' => 'required|email|unique:users,email,' . $this->user->uuid . ',uuid',
            'password' => 'nullable|string|min:8',
        ];
    }
}
