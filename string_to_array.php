<?php

# Issue: https://github.com/sharminshanta/php8-string/issues/7

/**
 * Explode the string without built-in function in php
 * Actually, we tried to explode the string into array
 */
$str = "This is a string";
$array = [];
$word = "";

for($i = 0; $i< strlen($str); $i++) {
    if ($str[$i] == " ") {
        $array[] = $word;
        $word = "";
    } else {
        $word .= $str[$i];
    }
}

// for last word
if($word != '') { // cause there is no space after last word of string.
    $array[] = $word;
}

print_r($array);