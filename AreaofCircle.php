
<?php 			         

//A PHP program to calculate the area of a circle

//Initialize the variables					

$pi = 3.14;
$radius = 10;
$Area = 0;                    /*Inputs, No need to prompt for inputs - we have our radius set in the code above */


//Calculation the Area [Area = pi*(R*R])

$Area = $pi*($radius*$radius);

//Output the result
print"<br>";
print("\nThe area of a circle of radius ". $radius. " is ". $Area);

?>

