<?php

// -------All function are start from here------

    // ------Find Sum--------
    function sum($getNum1, $getNum2){
        $sum = $getNum1 + $getNum2;
        return $sum;
    }
    
    // ------Find Subtraction--------
    function subtraction($getNum1, $getNum2){
        $sub = 0;
        if($getNum1 > $getNum2){
            $sub = $getNum1 - $getNum2;
        }else{
            $sub = $getNum2 - $getNum1;
        }
        return $sub;
    }
    
    // ------Find Multiplication--------
    function Multiplication($getNum1, $getNum2){
        $mul = $getNum1 * $getNum2;
        return $mul;
    }
    

// -------All function are end here------

    $number1 = 5;
    $number2 = 10;
    echo "Number1 = ".$number1.', Number2 = '.$number2.'<br/>';
    $getResult = sum($number1, $number2);
    echo "Sum = ".$getResult.'<br/>';
    $getResult = subtraction($number1, $number2);
    echo "Subtraction = ".$getResult.'<br/>';
    $getResult = Multiplication($number1, $number2);
    echo "Multiplication = ".$getResult;
?>