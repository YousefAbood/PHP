<?php

function celToFah($cel) {
    $fah = ($cel * 1.8) + 32;
    echo $fah;
}

celToFah(1);

echo '<br>' . '------------------' . '<br>';


function divByThree($num) {
    if($num % 3 == 0) {
        echo 'The Number ' . $num . ' can be divided by Three.';
    }
    else {
        echo 'The Number ' . $num . ' cannot be divided by Three.';
    }
}

divByThree(2);
echo '<br>';
divByThree(3);

echo '<br>' . '------------------' . '<br>';

$string = "hello";

echo strrev($string);