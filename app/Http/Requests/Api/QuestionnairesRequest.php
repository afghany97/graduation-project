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
        $roles = [

            'subject_id' => 'required|numeric',

            'doctor_id' => 'required|numeric',

        ];

        foreach (config('questionnaires') as $key => $array)

            foreach ($array as $item){

                if($key == 'others')

                    $roles[$item] = 'string';

                else

                    $roles[$item] = 'required|numeric|min:1|max:5';

            }

        return $roles;
    }
}
