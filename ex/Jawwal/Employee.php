<?php
namespace Test\Jawwal;

use Test\Greeting;

class Employee {
     use Greeting;
     protected $name;
     public function __construct($name)
     {
        $this->name = $name;
     }

}