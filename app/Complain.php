<?php

namespace App;

class Complain extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
