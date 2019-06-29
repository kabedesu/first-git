<?php
    $max = 30;
    
    for($i=1; $i<=$max; $i++) {
        echo $i," : ",FizzBuzz($i),"<br>";
    }

    function FizzBuzz($num) {
       if($num % 15 == 0) {
           return "FizzBuzz";
       } elseif($num % 3 == 0) {
           return "Fizz";
       } elseif($num % 5 == 0) {
           return "Buzz";
       }
       return $num;
    }
?>