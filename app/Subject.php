<?php

namespace App;

class Subject extends Model
{

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function assistant()
    {
        return $this->belongsToMany(Assistant::class);
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
