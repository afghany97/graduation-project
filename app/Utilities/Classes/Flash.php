<?php
/**
 * Created by PhpStorm.
 * User: afghany
 * Date: 29/01/19
 * Time: 01:42 م
 */

namespace App\Utilities\Classes;

class Flash
{
    private $message;

    private $class;

    /**
     * Flash constructor.
     * @param string $key
     */

    public function __construct($key = null)
    {
        $this->key = $key ? $key : 'flash';
    }


    /**
     * magic function to handle calling of undefined functions
     * @param $name
     * @param $arguments
     * @return Void
     */

    public function __call($name, $arguments)
    {
        return $this->setMessage($arguments[0])->setClass($name)->execute();
    }

    /**
     * store the message at session as a flash
     * @return Void
     */

    public function execute()
    {
        session()->flash($this->key ,$this->message);

        session()->flash('class',$this->class);
    }

    /**
     * @param string $message
     * @return Flash
     */

    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param string $class
     * @return Flash
     */

    public function setClass(string $class)
    {
        $this->class = $class;

        return $this;
    }
}