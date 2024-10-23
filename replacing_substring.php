<?php

# Issue : https://github.com/sharminshanta/php8-string/issues/10

/**
 * The str_replace() function replaces all occurrences of a search string with a replacement string.
 */

$str = "They are brainrot!";
$newStr = str_replace("brainrot", "intellectual", $str);

// echo $newStr;  // Output: They are intellectual!

// without built-in function
function stringToArray($str)
{
    $array = [];
    $word = "";

    for($i = 0; $i< strlen($str); $i++) {
        if ($str[$i] == " ") {
            $array[] = $word;
            $word = "";
        } else {
            $word .= $str[$i];
        }
    }

// for last word
    if($word != '') { // cause there is no space after last word of string.
        $array[] = $word;
    }

    return $array;
}

$str = "This is a string.";
$array = stringToArray($str);
$newArray = [];

foreach ($array as $key => $item) {
    if ($item == 'string') {
        $item = 'laptop';
    }

    $newArray[$key] = $item;
}

for($i = 0; $i < count($newArray); $i++) {
    echo $newArray[$i] . ' ';
}
