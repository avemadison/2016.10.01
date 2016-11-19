<?php

class Human
{
    public $firstName;
    public $lastName;
    public $birthDate;
    public $city;
    
    private $test = 123;
    
    public function __construct($firstName, $lastName, $birthDate, $city)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->city = $city;
    }
    
    
    public function test()
    {
        echo 'One';
    }
    
    public function __toString()
    {
        return "$this->firstName $this->lastName";
    }
}