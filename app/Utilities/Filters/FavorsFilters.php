<?php

namespace App\Utilities\Filters;

use App\Space;

class FavorsFilters extends Filters
{
    protected $filters = ['space'];

    public function space()
    {
        $space = Space::whereName(request('space'))->first();

        return $space ? $this->query->where('space_id',$space->id) : $this->query;
    }
}