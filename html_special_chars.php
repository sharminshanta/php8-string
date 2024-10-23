<?php

/**
 * Issue : https://github.com/sharminshanta/php8-string/issues/18
 * HTML Entities: htmlspecialchars()
 * The htmlspecialchars() function is used to convert special characters (such as <, >, and &)
 * into HTML entities, preventing cross-site scripting (XSS) attacks.
 *
 * This is particularly useful when displaying user input in a web page.
 */
$str = "<h1>Hello, programmers!</h1>";
echo htmlspecialchars($str);
// Output: &lt;h1&gt;Hello, programmers!&lt;/h1&gt;
