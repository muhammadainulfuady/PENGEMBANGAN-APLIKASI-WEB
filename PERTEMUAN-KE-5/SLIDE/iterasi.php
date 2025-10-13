<?php

function iteration($start, $totalLoop, $step)
{
    $value = $start;
    for ($i = 1; $i <= $totalLoop; $i++) {
        echo "Iteration number " . $value . "<br>";
        $value += $step;
    }
}

// Contoh pemanggilan:
iteration(1, 10, 3);

?>