<?php
function generateSquare($n) {
    // Validate the input
    if ($n < 1 || $n > 50) {
        return "Input must be a whole number between 1 and 50.";
    }

    // Initialize an empty string for the shape
    $shape = "";

    // Loop to construct the square
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $shape .= "+";
        }
        // Add a newline character after each row except the last one
        if ($i < $n - 1) {
            $shape .= "\n";
        }
    }

    // Return the constructed shape
    return $shape;
}


$n = 3;
echo generateSquare($n);
?>