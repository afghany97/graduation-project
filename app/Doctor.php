<?php

namespace App;

class Doctor extends Model
{
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
