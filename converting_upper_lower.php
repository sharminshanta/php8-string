<?php

# Issue : https://github.com/sharminshanta/php8-string/issues/11

/**
 * Converting to Upper or Lower Case: strtoupper() and strtolower()
 * strtoupper() converts all characters in a string to uppercase.
 * strtolower() converts all characters in a string to lowercase.
 *
 * These functions are useful for case-insensitive comparisons or formatting strings.
 */
$str = "Hello, Programmer!";

echo strtoupper($str);  // Output: HELLO, PROGRAMMERS!
echo strtolower($str);  // Output: hello, Programmer!
