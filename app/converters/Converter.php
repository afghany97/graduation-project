<?php

namespace App\converters;

use Illuminate\Support\Collection;

abstract class converter{

    abstract public function convert($object);

    public function convertCollections(Collection $objects){

        $result = [];

        foreach ($objects as $object){

            $result[] = $this->convert($object);
        }

        return $result;
    }


}