<?php

namespace App;

use App\Utilities\Traits\Filterable;

class Complain extends Model
{
    use Filterable;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
