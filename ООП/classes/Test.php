<?php

class Test
{
    const MY_CONST = 256;
    
    public static $x;
    
    private $one = 1;
    protected $two = 2;
    public $three = 3;
    
    public function blah()
    {
        // echo self::MY_CONST;
        
        foreach ($this as $property => $value) {
            echo "{$property} {$value}";
        }
        
    }
}