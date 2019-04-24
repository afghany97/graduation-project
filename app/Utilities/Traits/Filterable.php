<?php
/**
 * Created by PhpStorm.
 * User: afghany
 * Date: 04/02/19
 * Time: 12:47 م
 */

namespace App\Utilities\Traits;

use App\Utilities\Filters\Filters;

trait Filterable
{
    /**
     * @param $query
     * @param Filters $filters
     * @return \Illuminate\Database\Query\Builder
     */

    public function scopeFilter($query, Filters $filters)
    {
        return $filters->apply($query);
    }
}