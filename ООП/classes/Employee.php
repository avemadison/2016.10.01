<?php

class Employee extends Human
{
    public $post;
    public $office;
    public $salary;
    
    public function __construct(
        $firstName, 
        $lastName, 
        $birthDate, 
        $city,
        $post,
        $office,
        $salary
        )
    {
        parent::__construct($firstName, $lastName, $birthDate, $city);
        $this->post = $post;
        $this->office = $office;
        $this->salary = $salary;
    }
    
    public function test()
    {
        echo 'Two';
    }
    
    public function getEmployeeInfo()
    {
        return "{$this->post} {$this->office} {$this->salary}";
    }
}