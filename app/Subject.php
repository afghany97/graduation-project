<?php

namespace App;

class Subject extends Model
{
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }
}
