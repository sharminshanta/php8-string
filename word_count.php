<?php
# Issue Reference: Word Count of the string #5

// Count of words in a string

$str = "  PHP    Programmers are  lazy.  ";

// Using str_word_count() function to count number of words in a string
$len = str_word_count($str);

// echo $len; // Output: 4

// Function to count the words
function get_num_of_words($string) {
    $string = preg_replace('/\s+/', ' ', trim($string));
    $words = explode(" ", $string);

    return count($words);
}

// Function call
$len = get_num_of_words($str);

// Printing the result
echo $len; // Output: 4