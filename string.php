<?php

$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Iterate over each string in the array
foreach ($strings as $str) {
    $vowelCount = countVowels($str);    // Count vowels
    $reversedString = strrev($str);     // Reverse the string
    
    // Print the result
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
