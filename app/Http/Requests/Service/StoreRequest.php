<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'service_images' => 'required|array|min:3|max:6',
            'service_images.*' => 'mimes:jpg,jpeg,bmp,png'
        ];
    }

    // public function attributes()
    // {
    //     return [
    //         'service_images.*' => ''
    //     ];
    // }
}
