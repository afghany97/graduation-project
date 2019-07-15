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

    public function TeachingAssistant()
    {
        return $this->belongsToMany(TeachingAssistant::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }

    public function isQuestionnaired()
    {
        return $this->questionnaires()->where('user_id', auth()->id())->exists();
    }

}
