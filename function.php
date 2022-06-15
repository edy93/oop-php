<?php


require_once "data/person.php";

$eko = new Person("edy", "saputra");
$eko->name = "gio";
$eko->sayHello("tono bin sulaiman");


$joko = new Person("eko","purwanto");
$joko->name = "joko";
$joko->sayHello(null);

$eko->info();
$joko->info();
