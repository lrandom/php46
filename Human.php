<?php

class Human
{
    protected $name;
    var $age;
    var $height;
    var $address;
    var $weight;
    var $gender;

    function __construct($name, $age, $weight, $height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        $this->height = $height;
    }

    //setter
    function setName($name)
    {
        $this->name = $name;
    }

    //getter
    function getName()
    {
        return $this->name;
    }


    function walk()
    {
        echo $this->name . " walk";
    }

     function eat()
    {
        echo $this->name . " eat";
    }
}