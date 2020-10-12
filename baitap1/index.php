<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

echo "Shape are";
$shapes[0]= new Circle("Hinh tron",3);
$shapes[1]= new Rectangle("hinh chu nhat",3,4);
$shapes[2]=new Square("hinh vuong",4);
foreach ($shapes as $shape){
    echo $shape->calArea() . '<br>';
    $shape->resize(rand(1,100));
    echo $shape->calArea()."<br>";
}


//$circle = new Circle('Circle 01', 3);
//$oldArea = $circle->getRadius();
//echo 'Circle area: ' . $circle->calArea() . '<br />';
//echo 'Circle perimeter: ' . $circle->calPerimeter() . '<br />';
//$circle->resize(0.7);
//$newArea = $circle->getRadius();
//echo 'Circle area new: ' . $circle->calArea() . '<br />';
//echo $newArea/$oldArea;
//$rectangle =new Rectangle("rectange 01",4,6);
//$oldWidth=$rectangle->getWidth();
//$oldHeight=$rectangle->getHeight();
//$rectangle->resize(0.5);
//$newWidth=$rectangle->getWidth();
//$newHeight=$rectangle->getHeight();
//echo $newWidth/$oldWidth;
//echo $newHeight/$oldHeight;
//$square=new Square("square 1",4);
//$oldWidth=$square->getWidth();
//$square->resize(0.5);
//$newWidth=$square->getWidth();
//echo $newWidth/$oldWidth;