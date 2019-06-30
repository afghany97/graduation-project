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
            'user_id' => 'required|numeric',
            'department' => 'required|string',
            'complain_type' => 'required|string',
            'topic' => 'required|string',
            'description' => 'required|string',

        ];
    }
}
