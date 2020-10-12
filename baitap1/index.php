<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Circle 01', 3);
$oldArea = $circle->getRadius();
echo 'Circle area: ' . $circle->calArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calPerimeter() . '<br />';

$circle->resize(0.7);

$newArea = $circle->getRadius();


echo 'Circle area new: ' . $circle->calArea() . '<br />';


echo $newArea/$oldArea;

$rectangle =new Rectangle("rectange 01",4,6);
$oldWidth=$rectangle->getWidth();
$oldHeight=$rectangle->getHeight();

$rectangle->resize(0.5);
$newWidth=$rectangle->getWidth();
$newHeight=$rectangle->getHeight();

echo $newWidth/$oldWidth;
echo $newHeight/$oldHeight;

$square=new Square("square 1",4);
$oldWidth=$square->getWidth();
$square->resize(0.5);
$newWidth=$square->getWidth();
echo $newWidth/$oldWidth;