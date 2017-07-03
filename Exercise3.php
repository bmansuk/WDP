
<?php

/* A PHP program which prints out numbers from 8 to 80 in steps of 2 using the for loop */

 echo '<br>';
 echo "The numbers from 8 to 80 in steps of 2 are: ".'<br><br>';

 for ($counter = 8; $counter<= 80; $counter+= 2){                   // $counter+= 2 <==> $counter = $counter + 2
        if($counter>8 && $counter<=80){
       		echo  ', ';              //This line inserts a comma between the numbers
       	}
 	    echo $counter;         //This line prints out the number
 }

?>