<!-- This program calculates areas of different triangles-->
<?php

include ('Areas.class.php');

//Instantiate or create the objects
$area0 = new area(6,6);
$area1 = new area(7,11);
$area2 = new area(12,9);
$area3 = new area(8,8);
$area4 = new area(15,13);

//Output the contents of the objects  created
 echo "<b><span style = 'color: red' >Valid output conditions per calculated values: </style></b>".'<br><br>';
 echo $area0->getTriangleArea().'<br>';
 echo $area1->getTriangleArea().'<br>';
 echo $area2->getTriangleArea().'<br>';
 echo $area3->getTriangleArea().'<br>';
 echo $area4->getTriangleArea().'<br>';

?>