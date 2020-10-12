<?php

include "CircleComparator.php";

$circle1= new Circle(6,"cicrcl_1");
$circle2= new Circle(4,"circle_2");

$circleComparator= new CircleComparator();
var_dump($circleComparator->compare($circle1,$circle2));
