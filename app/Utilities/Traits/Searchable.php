<?php
/**
 * Created by PhpStorm.
 * User: afghany
 * Date: 04/02/19
 * Time: 12:53 م
 */

namespace App\utilities\Traits;

trait Searchable
{
    /**
     * @param $query
     * @param $filed
     * @param $value
     * @return Illuminate\Database\Query\Builder
     */

    public function scopeSearch($query, $filed, $value)
    {
        return $query->where($filed,'LIKE',"%$value%");
    }
}