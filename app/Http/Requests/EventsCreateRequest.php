<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventsCreateRequest extends FormRequest
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
            'description' => 'required|string',
            //'event_date' => 'required|date',
            'event_time' => 'required',
            'location' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'details' => 'required|string',
            'category' => 'required|string|max:255',
        ];
    }
}
