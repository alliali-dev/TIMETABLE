<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
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
            //start_date 	start_time 	end_date 	end_time 	classe_id 	cour_id 	room_id 	teacher_id 	campus_id
            'start_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_date' => 'required|date',
            'end_time' => 'required|date_format:H:i',
            'classe_id' => 'required|exists:classes,id',
            'cour_id' => 'required|exists:cours,id',
            'room_id' => 'required|exists:rooms,id',
            'teacher_id' => 'required|exists:teachers,id',
            'campus_id' => 'required|exists:campuses,id',
            // 'status' => 'required|in:active,inactive',
        ];
    }
}
