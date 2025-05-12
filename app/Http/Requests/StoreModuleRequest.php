<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreModuleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //name 	hour_volum 	period_id
            'name' => 'required|string|max:255',
            'hour_volum' => 'required|numeric|min:0|max:100',
            'period_id' => 'required|exists:periods,id',
        ];
    }
}
