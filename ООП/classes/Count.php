<?php

class Count
{
    public static $objectsCount = 0;
    
    
    public function __construct()
    {
        self::$objectsCount++;
    }
    
    public function __destruct()
    {
        self::$objectsCount--;
    }
    
    public function __clone()
    {
        self::$objectsCount++;
    }
    
    
}