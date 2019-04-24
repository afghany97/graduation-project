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
}
