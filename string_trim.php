<?php

/**
 * Issue : https://github.com/sharminshanta/php8-string/issues/12
 *
 * String Trimming: trim(), ltrim(), rtrim()
 * trim() removes whitespace (or other specified characters) from both ends of a string.
 * ltrim() removes whitespace from the left side.
 * rtrim() removes whitespace from the right side
 */

$str = "   Hello, Programmers!   ";

echo trim($str);   // Output: Hello, Programmers!
echo ltrim($str);  // Output: Hello, Programmers!
echo rtrim($str);  // Output:    Hello, Programmers!