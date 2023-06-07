<?php

trait A 
{
    public function hello()
    {
        echo 'Hello A';
    }
    
}
trait B 
{
    public function hello()
    {
        echo 'Hello B';
    }
}

class hello
{
    use B , A{
        A:: hello insteadof B;
        B:: hello as helloB;

    }
}
$h = new hello(); 
$h->hello();
echo '<pre>';
$h->helloB();

///new code...
trait E 
{
    public function smallTalk()
    {
        echo 'a';
    }
    public function bigTalk()
    {
        echo 'A';
    }
}
trait F 
{
    public function smallTalk()
    {
        echo 'b';
    }
    public function bigTalk()
    {
        echo 'B';
    }
}

class Talker {
    use E,F{
        E::smallTalk insteadof F;
        F::bigTalk insteadof E;
    }
}
