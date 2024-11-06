<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventsUpdateRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:50',
            //'event_date' => 'required',
            'location' => 'required|min:3|max:50',
            'details' => 'required|min:3|max:50',
            'status' => 'required',
            'category' => 'required',
            'event_time' => 'required',
        ];
    }
}
