<?php
include_once 'Circle.php';
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

//echo "Shape are";
$shapes[0]= new Circle("Hinh tron",3);
$shapes[1]= new Rectangle("hinh chu nhat",3,4);
$shapes[2]=new Square("hinh vuong",4);


foreach ($shapes as $shape){
    echo $shape->calArea() . '<br>';
    $shape->resize(rand(1,100));
    echo $shape->calArea()."<br>";

//    if(is_subclass_of($shape,'Colorable')){
//        $shape->howToColor();
//    }

//    if($shape instanceof Colorable){
//        $shape->howToColor();
//    }

    if(is_a($shape,'Colorable')){
        $shape->howToColor();
    }
}

