<?php

namespace App\converters;

class SubjectsConverter extends Converter
{

    public function convert($object)
    {
        return [
            'name' => $object->name,
            'id' => $object->id,
            'code' => $object->code,
            'units' => $object->units,
            'department_id' => $object->department->id,
            'department_name' => $object->department->name,
            'doctor_id' => $object->doctor->id,
            'doctor_name' => $object->doctor->name,
            'assistant_id' => $object->assistant->id,
            'assistant_name' => $object->assistant->name,
        ];
    }
}