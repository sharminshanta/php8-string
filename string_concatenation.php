<?php

# Issue Reference: https://github.com/sharminshanta/php8-string/issues/3

/**
 * Concatenation: Joining/Combination Strings
 * PHP uses the dot (.) operator to concatenate(join) strings together.
 */

$firstName = "David";
$lastName = "Gilmour";

$fullName = $firstName . " " . $lastName;
echo $fullName;  // Output: David Gilmour
