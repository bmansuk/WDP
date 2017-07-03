
<?php 		

//A PHP program to compare three numbers

//Initialize the variables

$A = 1111;
$B = 1011;
$C = 1119;

//Check which number is greater and output the greatest

if($A>$B){

     if($A>$C){
        
        echo 'For the three given numbers '.$A.', '.$B.' & ' .$C.', '.' the largest number is '.$A .'.'.'<br>';
    }
     else{

	   echo 'For the three given numbers '.$A.', '.$B .' & ' .$C.', '.'the largest number is '.$C .'.'.'<br>';
    }
}
else{
	  if($B>$C){

	  	echo 'For the three given numbers '.$A.', '.$B .' & ' .$C.', '.'the largest number is '.$B .'.'.'<br>';

	  }else{

	  	echo 'For the three given numbers '.$A.', '.$B .' & ' .$C.', '.'the largest number is '.$C.'.' .'<br>';
	  }
}

?>
