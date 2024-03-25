<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTopRankerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     *       @return array<String>, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'class' => ['required', 'string'],
            'section' => ['required', 'string'],
            'percentage' => ['required'],
            'year' => ['required', 'string'],
            'display' => ['bool', 'nullable'],
            'photo' => ['nullable', 'image'],
        ];
    }
}
