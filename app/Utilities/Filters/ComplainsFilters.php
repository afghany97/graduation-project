<?php

namespace App\Utilities\Filters;

class ComplainsFilters extends Filters
{
    protected $filters = ['type','department'];

    public function type()
    {
        return $this->query->where('type',request('type'));
    }

    public function department()
    {
        return $this->query->where('department_id',request('department'));
    }
}