<?php
namespace Test;

include __DIR__ .'/../vendor/autoload.php';

use Msaad\Test\Jawwal\Employee;
use Symfony\Component\Intl\Countries;
$e = new Employee('Maysaa');
$e->hello();
echo Countries::getName('ps','en');
print_r(Countries::getNames('ar'));
print_r(Currencies::getNames('fr'));


/*use Jawwal\Employee as JawwalEmployee;
use Employee;

$em = new JawwalEmployee('Maysaa');
$em->hello();*/
