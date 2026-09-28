<?php
    $str = "This is a String ";
    echo $str ."<br>";
    $str_len =strlen($str);
    echo "The length of the string is " .$str_len . "<br> Thank You <br>";
    // echo $str_len;
    echo "The number of words in this string is " . str_word_count($str) . "<br> Thank You <br>";
    echo "The reversed string is " . strrev($str) . "<br> Thank You <br>";
    echo "The search for is in this string is " . strpos($str ,"is") . "<br> Thank You <br>";
    echo "The replaced string is " . str_replace("is", "at", $str) . "<br> Thank You <br>";
?>