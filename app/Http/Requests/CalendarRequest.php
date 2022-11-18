<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalendarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'calendar.day' => 'required|max:50',
            'calendar.stamp' => 'required|max:50',
            'calendar.body'  => 'required|max:200',
            'calendar.memo' => 'required|max:50',
        ];
    }
}
