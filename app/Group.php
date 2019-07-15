<?php

namespace App;

class Group extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function subjects()
    {
        return $this->belongsToMany(Subject::class,'registrations');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function students()
    {
        return $this->belongsToMany(User::class,'registrations','user_id','user_id');
    }
}
