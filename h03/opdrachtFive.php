<?php

$age = 7;
$price = 10;

if($age > 65) {
    echo $price * 0.5;
} else if($age < 3) {
    echo $price = 0;
} else if($age <= 12) {
    echo $price * 0.5;
} else {
    echo $price = 10;
}
