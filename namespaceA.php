<?php
 namespace A;

const VERSION = 'A';

define ('VERSION','1');

class Person
{
    function __construct()
    {
        echo __NAMESPACE__;
    }
}

function hello(){
    echo 'Hello from A Namespace!';
}