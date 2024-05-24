<?php

namespace App\Core;

class Collection
{
    private $array;

    public function __construct(array $arr = [])
    {
        $this->array = $arr;
    }

    public function get()
    {
        return $this->array;    
    }
    
    public function count()
    {
        return count($this->array);
    }
}