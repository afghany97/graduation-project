<?php

namespace App\Utilities\Filters;

class DoctorsFilters extends Filters
{
    protected  $filters = ['name'];

    public function name()
    {
        $value = request('name');

        return $this->query->where('name','LIKE',"%$value%");
    }

}