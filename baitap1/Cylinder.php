<?php
include_once ('Circle.php');

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calArea()
    {
        return parent::calArea() * 2 + parent::calPerimeter() * $this->height;
    }
    public function calculateVolume(){
        return parent::calArea() * $this->height;
    }
}