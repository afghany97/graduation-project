<?php

namespace App;

class Questionnaire extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function TeachingAssistant()
    {
        return $this->belongsTo(TeachingAssistant::class);
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
