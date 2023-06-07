<?php

class Str
{
    protected string $value;

    public function __construct(string $string)
    {
        $this->value = $string;
    }

    public function length()
    {
        return strlen($this->value);
    }

    public function equal($string)
    {
        return $this->value == $string;
    }
 //لا يعمل 
    public static function getString()
    {
        return $this->value;
    }
}

$str = new Str('Mohammed');
$str = new st('Maysaa');
echo $str->length();
var_dump($str->equal('Mohammed'));
echo $str::getString();


// كودالسؤال 6
$a = 20;
$b = 30;
if($a >= 20 and $a <= 30 && $b <= 30){
    if ($a >$b){
        echo $a;
    } else{
        echo $b;
    }
} else {
    echo 0;
}



//كود السؤال 9
$string = 'Hello World!';
$rev = '';
for ($i = 1; $i <= strlen($string); $i++) { 
    $char = substr($string, -1 * $i, 1);
    $rev .= $char;
}
echo $rev;