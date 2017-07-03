
<?php 	 

/*A PHP program to determine prime numbers between 1 and a given upper limit! Prime numbers are numbers divisible by themselves  and by 1 only*/

//initialize the variable value

$var = 100;

echo '<br>';
echo "Prime numbers between 1 and ".$var. " are: ". "<br><br>";

//Using the for loop
for($i = 1; $i<= $var; $i++){

	$counter = 0;

	for($j = 1; $j<= $i; $j++){

		//All divisible factors - if $i%$j == 0, then $i is not prime

		if($i%$j == 0){

			$counter++;
		}
	}
	
	//Prime numbers require two conditions - divisible by itself and also by 1.
	
	if($counter == 2){

        if($i>2 && $i<=$var){

         echo ', ';              //This line inserts a comma between the prime numbers
       	}

	    echo $i;   // This line outputs the prime number	 
	}

}

?>