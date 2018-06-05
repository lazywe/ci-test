<?php

namespace lazywe\citest\Container;

class IocContainer
{
    public $register = [];

    public function __set($key, $val) 
    {
        $this->register[$key] = $val;
    }

    public function __get($key) 
    {
        return $this->register[$key]();
    }
}