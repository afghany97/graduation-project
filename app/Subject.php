<?php

namespace App;

class Subject extends Model
{

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
