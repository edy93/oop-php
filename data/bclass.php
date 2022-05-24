<?php

class Person{
    var string $name;
    // jika ingin memasukkan data null letakkan tanda ? sebelum tipe data
    var ?string $adress = NULL;
    var string $country = "Rusia";

    function sayHello(string $name){
        echo "hello $name" . PHP_EOL;
    }
}