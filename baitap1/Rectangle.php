<?php
include_once('Shape.php');
include_once "Resizeable.php";

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($rate)
    {
        $this->width = ($this->width) + ($this->width * $rate);
        $this->height = ($this->height) + ($this->height * $rate);
    }

    public function calArea()
    {
        return $this->height * $this->width;
    }

    public function calPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    public function getWidth()
    {
        return $this->width;
    }
    public function getHeight()
    {
        return $this->height;
    }
}