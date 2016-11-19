<?php

class Book
{
    public $title;
    public $author;
    private $price;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $price
     */
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
    
    public function setPrice($price)
    {
        if (!is_numeric($price)) {
            die('Invalid price');
        }
        
        $this->price = $price;
    }
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function getFormattedPrice()
    {
        return number_format($this->price, 2, ', ', ' ');
    }
    
}