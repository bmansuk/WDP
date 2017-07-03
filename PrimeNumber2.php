

<?php  
/*A PHP program to determine whether a number is prime or not. A prime number is a number divisible by itself and by 1 only.*/

//Initialize values

$A = 35;
$B = $A-1;
$isPrimeNumber = TRUE;

//The while loop
while($B!=1){

	if($A%$B== 0){

		$isPrimeNumber = FALSE;
	}

	$B = $B-1;
}
//The output
if($isPrimeNumber == TRUE){

	echo "Yes! ". $A. " is a Prime Number.". "<br>";
}
else{

	echo "No! ". $A. " is not a Prime Number."."<br>";
}

?>
