<?php

/**
 * Issue : https://github.com/sharminshanta/php8-string/issues/13
 * Splitting Strings into Arrays: explode()
 * The explode() function splits a string into an array, using a specified delimiter.
 */

$str = "This is a string";
$array = explode(" ", $str);

print_r($array);
// Output: Array ( [0] => This [1] => is [2] => a [3] => string)