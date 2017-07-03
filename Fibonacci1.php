
<?php
/*A simple fibonacci generator. F(n) = F(n-1) + F(n-2), where F(1)= F(2)=1.*/

//Declare variables
 $item = 20;

function fibonacci($item){
    $a = 0;
    $b = 1;             //The first fibonacci value

    for($i = 0; $i < $item; $i++){
        yield $b;
        $b = $a + $b;
        $a = $b - $a;   
    }
}

 echo '<br>';
 echo 'The first '. $item. ' fibonacci numbers are:'.'<br><br>';

//Give the fibonacci numbers
 $total = 0;
 $fibo = fibonacci($item);

foreach($fibo as $value){
    $total += $value;
    if(($value%$total)&&($value<=$value)){

    echo ', ';	                      //This line inserts a comma between the fibonacci numbers

    }

    echo $value;                    //This line prints out the fibonacci numbers
} 
 echo '<br><br>';
 $average = $total/$item;
 echo 'The total for the  '.$item.' fibonacci numbers is '.$total.'.  And their Average is ' .$average;

?>
