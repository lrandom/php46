<?php

class Human
{
    var $name;
    var $age;
    var $height;
    var $address;
    var $weight;
    var $gender;

    function walk()
    {
        echo $this->name . " walk";
    }

    function eat()
    {
        echo $this->name . " eat";
    }
}