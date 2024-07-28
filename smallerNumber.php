<?php

function count_smaller_elements($arr) {
    $result = [];
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i++) {
        $count = 0;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$i]) {
                $count++;
            }
        }
        $result[] = $count;
    }
    
    return $result;
}

// Test cases
print_r(count_smaller_elements([5, 4, 3, 2, 1])); 
print_r(count_smaller_elements([1, 2, 0]));       