<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function assistants()
    {
        return $this->belongsToMany(Assistant::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function manager()
    {
        return $this->hasOne(Manager::class);
    }

    public function complains()
    {
        return $this->hasMany(Complain::class);
    }
}
