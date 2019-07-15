<?php

namespace App;

class Questionnaire extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function assistant()
    {
        return $this->belongsTo(Assistant::class);
    }

    public static function attributes()
    {
        $attributes = [];

        foreach (config('questionnaires') as $key => $array)

            foreach ($array as $item)

                array_push($attributes,$item);

            return $attributes;
    }
}
