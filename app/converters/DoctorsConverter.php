<?php

namespace App\converters;

class DoctorsConverter extends Converter
{

    public function convert($object)
    {
        return [
            'name' => $object->name,
            'id' => $object->id,
            'avg' => $object->getAverageEvaluation(),
        ];
    }
}