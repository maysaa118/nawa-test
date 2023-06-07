<?php

class person{
    public  $name;
    public  static $country;//الكل يتشارك نفس اقيمة كنتري ستاتك
    const year = 2023;

}

$person = new person;
$person->name = "Maysaa";
$person::$country= "Palestine";
echo $person::year;

$person2 = new person;
$person2->name = "Azmy";
$person2::$country= "Jordan";

$person3 = new person;
$person3->name = "Saad";

$person4 = $person;
$person5

echo '<per>';

var_dump($person,$person2,$person3);
echo person::$country;