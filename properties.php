<?php

require_once "data/person.php";

$person = new Person("edy", "saputra");
$person->name = "edi Saputra, A.Md.";
$person->adress = "Punggur Besar Kubu Raya";


var_dump($person);

echo "name : $person->name". PHP_EOL;
echo "name : $person->adress". PHP_EOL;
echo "name : $person->country". PHP_EOL;

$person2 = new Person("eko", null);
$person2->name = "ayane";
$person2->adress = NULL;


$person2->sayHello("Dodoy");

var_dump($person2);