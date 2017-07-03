
<?php

/* Calculate the area of a triangle using procedural programming*/

 //Initialize the variables
  $height = 8.5;
  $base = 12.4;
  $area = 0;

  //Do the Calculation
  $area = 1/2*$height*$base;
 
  echo "<b><span style = 'color: red' >Valid output: </style></b>".'<br><br>';
  //Use nested if loops to determine the printed output
  if($area<=20){
     echo "Area of triangle = ".$area.' sq.cm'.'<br>';
     echo "Area is too small per given criteria. Please try again...";
  }
   elseif(($area>=20) && ($area<=40)){
     echo "Area of triangle = ".$area.' sq.cm'.'<br>';
     echo "Area is the perfect size per given criteria. Good to go...";
  }
   elseif(($area>=40 )&& ($area<=60)){
     echo "Area of triangle = ".$area.' sq.cm'.'<br>';
     echo "Area is too big per given criteria. Please try again...";
   }
   else{
      echo "Area of triangle = ".$area.' sq.cm'.'<br>';
   	  echo "Area is outside the given specifications. Please try again...";
  }

?>