<?php
namespace Msaad\Test\Jawwal;

use Msaad\Test\Greeting;

class Employee {
     use Greeting;
     protected $name;
     public function __construct($name)
     {
        $this->name = $name;
     }

}