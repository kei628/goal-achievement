<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'goal.targetDate' => 'required|max:5',
            'goal.title' => 'required|max:50',
            'goal.body' => 'required|max:200',
            'goal.reward' =>  'required|max:50',
            'goal.penalty' =>  'required|max:50',
        ];
    }
    
}
