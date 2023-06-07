<?php


namespace A\B;

const VERSION = 'AB';

class Person
{
    function __construct()
    {
        echo __NAMESPACE__;
    }
}
class Emp
{
    function __construct()
    {
        echo __Class__;
    }
}

function hello(){
    echo 'Hello from A\B Namespace';
}