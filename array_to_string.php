<?php

/**
 * Issue : https://github.com/sharminshanta/php8-string/issues/14
 * The implode() function is the opposite of explode().
 * It joins array elements into a string, with a specified separator.
 */

$array = ["This", "is", "a", "array"];
$str = implode(" ", $array);

// echo $str;  // Output: This is a array

// without built-in function
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . ' ';
}