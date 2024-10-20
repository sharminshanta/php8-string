<?php

# Issue Reference: https://github.com/sharminshanta/php8-string/issues/4

/**
 * String Length: strlen() or without built-in function
 * The strlen() function returns the length(number of characters) of a string.
 */
$str = "Hello, Programming!";
$length = strlen($str);

// echo $length;  // Output: 19


// String Length: without built-in function
$i = 0;

while (isset($str[$i])) {
    $i++;
}

echo $i; // Output: 19