<?php

/**
 * Issue : https://github.com/sharminshanta/php8-string/issues/16
 * Repeating a String: str_repeat()
 * The str_repeat() function repeats a string a specified number of times.
 */
$str = "Hello ";
// echo str_repeat($str, 3);  // Output: Hello Hello Hello

// without built-in function
for($i = 0; $i < 3; $i++) {
    echo $str;
}
