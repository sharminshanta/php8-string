<?php
# Issue Reference: https://github.com/sharminshanta/php8-string/issues/2

// Single-quoted string
$singleQuotedStr = 'Hello, Programmers!';

// Double-quoted string
$doubleQuotedStr = "Hello, Programmers!";

/**
 * Difference between Single-quoted string & Double-quoted string
 * a. $singleQuotedStr returns the string as it is
 * b. $doubleQuotedStr perform operations for special characters
 */
$str = "Programmers!";

// Single-quoted string: It returns as it as
echo 'Hello, $str'; // Output: Hello, $str

// Double-quoted string: It can contain another variable and returns the value of it
echo "Hello, $str"; // Output: Hello, Programmers!

