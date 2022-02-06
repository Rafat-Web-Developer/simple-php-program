<?php

// -------All function are start from here------

    // ------Find Sum--------
    function sum($getNum1, $getNum2){
        $sum = $getNum1 + $getNum2;
        return $sum;
    }
    
    

// -------All function are end here------

    $number1 = 5;
    $number2 = 10;
    $getResult = sum($number1, $number2);
    echo "Sum = ".$getResult;
?>