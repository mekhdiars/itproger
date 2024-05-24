<?php

namespace App\Models;

class User
{
    private $name;
    private $lastName;

    function setData($name, $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    function getData()
    {
        return [$this->name, $this->lastName];
    }

    function getFalse()
    {
        return true;
    }
}