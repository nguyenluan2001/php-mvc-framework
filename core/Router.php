<?php

namespace app\Core;

use Closure;

class Router
{
    public $class;
    public $method;
    function __construct()
    {
    }
    function get($url, $fn)
    {
        if ($fn instanceof Closure) {
            $fn();
        } else {
            if(class_exists($fn[0]))
            {
                $this->class = new $fn[0];
                if(method_exists($this->class,$fn[1]))
                {
                    $this->method = $fn[1];

                }
                call_user_func_array([$this->class, $this->method], []);

            }
        }
    }
}
