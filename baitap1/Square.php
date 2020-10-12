<?php
include_once('Rectangle.php');

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function resize($rate)
    {
        $this->width = ($this->width) + (($this->width) * $rate);
    }

    public function getWidth()
    {
        return $this->width;
    }
}