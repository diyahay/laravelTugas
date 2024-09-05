<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Set to true if every user is authorized to make this request.
        // Customize as needed for your application.
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:brands,name',
            'description' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The brand name is required.',
            'name.unique' => 'The brand name has already been taken.',
        ];
    }
}
