<?php

function countSmileys($arr) {
    $count = 0;
    // Define the regular expression pattern for a valid smiley face
    $pattern = '/^[:;][-~]?[)D]$/';
    
    // Loop through each element in the array
    foreach ($arr as $face) {
        // Check if the current face matches the pattern
        if (preg_match($pattern, $face)) {
            $count++;
        }
    }
    
    // Return the total count of valid smiley faces
    return $count;
}

// Test cases
echo countSmileys([':)', ';(', ';}', ':-D']) . "\n";       
echo countSmileys([';D', ':-(', ':-)', ';~)']) . "\n";     
echo countSmileys([';]', ':[', ';*', ':$', ';-D']) . "\n"; 

?>