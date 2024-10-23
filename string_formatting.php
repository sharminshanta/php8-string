<?php

/**
 * Formatting Strings: sprintf()
 * The sprintf() function allows you to format strings with variables, similar to
 * how you might use placeholders in templates. It returns a formatted string,
 * replacing placeholders with actual values.
 * Common placeholders:
 *
 * %s for strings.
 * %d for integers.
 * %f for floating-point numbers.
 */
$name = "Devid";
$age = 30;

$formatted = sprintf("His name is %s and he is %d years old.", $name, $age);
// echo $formatted;  // Output: His name is Devid and he is 30 years old.

// We can also control the number of decimal places in floats using %.2f.
$price = 99.99;
echo sprintf("The price is %.2f", $price);  // Output: The price is 99.99

