<?php
/**
 * Created by PhpStorm.
 * User: afghany
 * Date: 15/01/19
 * Time: 03:36 م
 */

namespace App\utilities\Traits;

use App\Favourite;

trait CanFavourite
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */

    public function favourites()
    {
        return $this->morphMany(Favourite::class , 'owner');
    }

}