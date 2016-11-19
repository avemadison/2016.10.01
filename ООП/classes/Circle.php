<?php

class Circle extends Figure
{
    public $radius = 10;
    
    public function getArea() 
    {
        return M_PI * $radius * $radius;
    }
}