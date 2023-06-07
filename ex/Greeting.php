<?php
namespace Test;
trait Greeting
{

    public function hello()
    {
        echo "HEllO : {$this->name}";
    }
}