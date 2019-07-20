<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class ComplainsRequest extends Request
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
            'department_id' => 'required|numeric',
            'type' => 'required|string',
            'topic' => 'required|string',
            'description' => 'required|string',

        ];
    }
}
