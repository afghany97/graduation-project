<?php
/**
 * Created by PhpStorm.
 * User: afghany
 * Date: 3/28/2019
 * Time: 4:46 PM
 */

namespace App\Utilities\Filters;

use DateTime;

abstract class Filters
{
    protected $filters = [], $query;

    /**
     * check if the incoming filter coming in request exists and apply it in case it's exists
     * @param $query
     * @return \Illuminate\Database\Query\Builder
     */

    public function apply($query)
    {
        $this->query = $query;

        foreach ($this->filters as $filter) {

            if (method_exists($this, $filter) && request()->has($filter)) {

                return $this->$filter();
            }
        }

        return $this->query;
    }

    /**
     * a general filter search for resources between to given dates
     * @param $from
     * @param $to |null
     * @return \Illuminate\Database\Query\Builder
     */

    protected function date($from, $to = null)
    {
        $to = request()->filled('to') ? request('to') : (new DateTime(date('Y-m-d')))->modify('+1 day');;

        $from = new DateTime(request('from'));

        return $this->query->where([['created_at', '>=', $from], ['created_at', '<=', $to]]);
    }
}