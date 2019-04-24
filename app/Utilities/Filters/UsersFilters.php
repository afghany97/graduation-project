<?php
/**
 * Created by PhpStorm.
 * User: afghany
 * Date: 3/28/2019
 * Time: 4:47 PM
 */

namespace App\Utilities\Filters;

class UsersFilters extends Filters
{
    protected $filters = ['unconfirmed'];

    /**
     * @return \Illuminate\Database\Query\Builder
     */
    
    public function unconfirmed()
    {
        return $this->query->whereConfirmed(false);
    }
}