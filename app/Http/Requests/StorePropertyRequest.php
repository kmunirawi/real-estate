<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:15',
            'area' => 'required|numeric|between:1,200',
            'rooms' => 'required|numeric',
            'price' => 'required|numeric',
            'kind' => 'required',
            'city_id' => 'required',
            'type_id' => 'required',
        ];
    }
}
