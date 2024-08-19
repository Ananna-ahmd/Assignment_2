<?php

$strings = ["Hello", "World", "PHP", "Programming"];


function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

   
    $string = strtolower($string);

    
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }

    return $count;
}


foreach ($strings as $string) {
    // Count vowels
    $vowelCount = countVowels($string);
    
    
    $reversedString = strrev($string);
    
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}


