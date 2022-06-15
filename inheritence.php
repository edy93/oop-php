<?php

require_once "data/manager.php";

$manager = new Manager();
$manager->name = "budi";
$manager->sayHello("joko");

$vs = new VicePresident();
$vs->name = "edy";
$vs->sayHello("putra");