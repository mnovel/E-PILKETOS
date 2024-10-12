<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'app_name' => 'required|string|max:100',
            'instansi' => 'required|string|max:50',
            'author' => 'required|string|max:100',
            'description' => 'required|string|max:300',
            'keywords' => 'required|string|max:300',
            'time' => 'required|regex:/^\d{2}\/\d{2}\/\d{4} \d{2}:\d{2} [APM]{2} - \d{2}\/\d{2}\/\d{4} \d{2}:\d{2} [APM]{2}$/',
        ];
    }
}
