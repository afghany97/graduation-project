<?php

namespace App\Http\Requests\Api;

class QuestionnairesRequest extends ApiRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'subject_id' => 'required|numeric',
            'doctor_id' => 'required|numeric',
            'classroom' => 'required|numeric',
            'doctor' => 'required|numeric',
            'doctor_assistant' => 'required|numeric',
            'material' => 'required|numeric',
            'sections' => 'required|numeric',
            'exams' => 'required|numeric',
            'content' => 'required|numeric',
        ];
    }
}
