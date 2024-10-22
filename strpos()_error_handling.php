<?php
# Issue Reference: https://github.com/sharminshanta/php8-string/issues/8

/**
 *
 * It can return both a position (0 or higher) or false,
 * so we should use the strict comparison (===) to avoid confusion between 0 and false.
 */
$str = "Hello, Programmers!";

if (strpos($str, "Programmers") === false) {
    echo "Substring not found.";
} else {
    echo "Substring found!";
}