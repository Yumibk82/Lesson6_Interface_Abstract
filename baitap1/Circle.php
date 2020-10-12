<?php
include_once('Shape.php');
include_once "Resizeable.php";

class Circle extends Shape implements Resizeable
{
    public $radius;


    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function resize($rate)
    {
        $this->radius = ($this->radius) + ($this->radius * $rate);
    }

    public function calArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calPerimeter()
    {
        return pi() * $this->radius * 2;
    }
    public function getRadius()
    {
        return $this->radius;
    }

}