<?php

namespace App\Exceptions;

use Exception;

class ApiValidationException extends Exception
{
    public $errors;

    public $status;

    /**
     * ApiValidationException constructor.
     * @param $errors
     * @param $status
     */

    public function __construct($errors,$status = 400)
    {
        $this->errors = $errors;

        $this->status = $status;
    }

    public function errors()
    {
        return $this->errors;
    }
}
