<?php
//Global Namespace

const VERSION = 'Global';

class Person
{
    function __construct()
    {
        echo __NAMESPACE__;
    }
}

function hello(){
    echo 'Hello from Global Namespace!';
}