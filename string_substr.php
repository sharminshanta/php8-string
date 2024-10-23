<?php

# Issue: https://github.com/sharminshanta/php8-string/issues/9

/**
 * The substr() function extracts a portion of a string, starting from a specified position.
 * substr($string, $start, $length);
 *
 * $string: The input string.
 * $start: The starting position (index).
 * $length: (Optional) The number of characters to extract.
 * If the $length parameter is omitted, substr() will return all characters from the $start position to the end of the string.
 */

$str = "Hello, Programmers!";

// Extract "Programmers!"
$substring = substr($str, 7, 12);

echo $substring;  // Output: Programmers!