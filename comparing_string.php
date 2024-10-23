<?php

/**
 * Issue : https://github.com/sharminshanta/php8-string/issues/19
 * Comparing Strings: strcmp()
 * The strcmp() function compares two strings and returns:
 *
 * 0 if the strings are equal.
 * A negative number if the first string is less than the second.
 * A positive number if the first string is greater than the second.
 */

$str1 = "hello";
$str2 = "programmers";

$result = strcmp($str1, $str2);
echo $result;  // Output: -8 (because "hello" comes before "programmers")

