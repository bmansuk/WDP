
<?php 	 
/*A PHP program to determine prime numbers between 1 and 100 using a while loop. Prime numbers are numbers divisible by themselves  and by 1 only.*/

//initialize the values
$var = 100;
$number = 1;

echo '<br>';
echo "Prime numbers between 1 and ".$var. " are: ". "<br><br>";

//Using the while loop
while($number<$var){
	 $counter = 0;
	 for($j = 1; $j<= $var; $j++){
	//All divisible factors. If $number%$j== 0, then $number is not a prime number.
		if($number%$j == 0){    
        	 $counter++;
		}
	}
	//Prime numbers require two conditions - divisible by itself and by 1 only.
	if($counter == 2){
        if(($number>2) && ($number<=$var)){
         echo ', ';               //This line inserts a comma between the prime numbers
        }                        
	     echo $number;          // This line outputs the prime number
    } 

     $number++;     
}

?>

