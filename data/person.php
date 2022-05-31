<?php

class Person{
    const AUTHOR = "code IT solution";


    var string $name;
    // jika ingin memasukkan data null letakkan tanda ? sebelum tipe data
    var ?string $address = NULL;
    var string $country = "Rusia";

    function sayHello(?string $name)
    {
        if(is_null($name)){
            echo "hi, my name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
        
    }

    function info()
    {
        echo "Author :". self::AUTHOR . PHP_EOL;
    }

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
}