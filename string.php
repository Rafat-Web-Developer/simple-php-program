<?php
    $string = "Hello World";
    $length = strlen($string);
    $countWord = str_word_count($string);
    $reverseString = strrev($string);
    $stringPOS = strpos($string, 'World');
    $stringReplace = str_replace('World', 'Rafat', $string);
    echo "String = ".$string.'<br/>';
    echo "Length = ".$length.'<br/>';
    echo "Total Word = ".$countWord.'<br/>';
    echo "Reverse String = ".$reverseString.'<br/>';
    echo "Position of 'World' is = ".$stringPOS.'<br/>';
    echo "After Replace = ".$stringReplace.'<br/>';
?>