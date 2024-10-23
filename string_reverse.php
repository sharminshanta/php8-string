<?php

/**
 * Issue : https://github.com/sharminshanta/php8-string/issues/15
 * Reversing a String: strrev()
 * The strrev() function reverses the characters in a string.
 */

$str = "Hello, programmers!";
$reversed = strrev($str);

// echo $reversed;  // Output: !sremmargorp ,olleH

// without built-in function
for ($i = strlen($str); $i > 0; $i--) {
    echo $str[$i - 1];
}