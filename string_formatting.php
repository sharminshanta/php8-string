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
echo $formatted;  // Output: His name is Devid and he is 30 years old.
