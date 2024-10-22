<?php
# Issue Reference: https://github.com/sharminshanta/php8-string/issues/6

/**
 * Finding Substrings: strpos()
 * It returns the index(position) of the first occurrence of the substring.
 * If the substring is not found, it returns false.
 */

$str = "Hello, Programmers!";
$position = strpos($str, "Programmers");

// echo 'Position: ' . $position;  //  Output: Position: 7

// Find the position without built-in function
function findSubstringPosition($string, $substring) {
    $stringLength = 0;

    // Calculate the length of the string manually
    while (isset($string[$stringLength])) {
        $stringLength++;
    }

    $substringLength = 0;

    // Calculate the length of the substring manually
    while (isset($substring[$substringLength])) {
        $substringLength++;
    }

    // Check for the position of the substring
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $match = true;

        for ($j = 0; $j < $substringLength; $j++) {
            if ($string[$i + $j] !== $substring[$j]) {
                $match = false;
                break;
            }
        }

        if ($match) {
            return $i; // Return the position of the substring
        }
    }

    return -1; // Return -1 if the substring is not found
}

// Example usage
$string = "Hello, Programmers!";
$substring = "Programmers";

$position = findSubstringPosition($string, $substring);

echo "Position: " . $position; // Output: Position: 7