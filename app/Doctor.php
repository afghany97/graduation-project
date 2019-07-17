<?php

namespace App;

class Doctor extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'registrations');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function assistants()
    {
        return $this->belongsToMany(Assistant::class, 'registrations');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

}
