<?php

class Person
{
    const YEAR = 2023;

    public string $name;
    public static $country;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAge($age)
    {
        // ..
        return $this;
    }
    public function setCity($city)
    {
        // ..
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function name()
    {
        return self::$country;
    }
}

function chng(Person $object) {
    $object->name = 'Name changed!';
}

$person = new Person;
$person->name = 'Mohammed';
$person::$country = 'Palestine';

$person10 = $person;
echo $person10?->name;

// Chain of calls
$person->setName('mohammed')
       ->setAge(20)
       ->setCity('Gaza');

echo $person->getName();
echo $person::name();

echo $person::YEAR;

$person2 = new Person;
$person2->name = 'Ahmed';
$person2::$country = 'Jordan';

echo Person::$country;
echo Person::YEAR;

$person3 = $person;
$person4 = &$person;
$person5 = clone $person;

$person5->name = 'Fatma';
$person3->name = 'Ali';
$person4->name = 'Sara';

$person = null;//قتلت الاوبجكت

// $object = $person5;
chng(clone $person5);

echo '<pre>';
var_dump($person, $person2, $person3, $person4, $person5);