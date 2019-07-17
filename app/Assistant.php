<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
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

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
