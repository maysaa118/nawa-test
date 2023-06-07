<?php
namespace A;

//include_once __DIR__ .'/namespace.php';
require_once __DIR__ .'/namespace.php';
require_once __DIR__ .'/namespaceA.php';
require_once __DIR__ .'/namespaceAB.php';
//include __DIR__ .'/namespaceA.php';

use A\B\Emp as EmpAB;
use A\B\Person;

use function A\B\hello as helloAB;

use const A\B\VERSION as V;

class Emp{}

echo \A\B\VERSION; //full name
\A\B\hello();

$e = new EmpAB();
$p = new \A\B\Person();