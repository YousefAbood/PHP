<?php

for($index = 1; $index < 10; $index++) {
    if($index % 2 == 0) {
        echo "<img src='apen/aap$index.jpg' alt='' style='width: 200px; height: 200px; border: 5px solid red'>";
    }
    else {
        echo "<img src='apen/aap$index.jpg' alt='' style='width: 200px; height: 200px; border: 5px solid green'>";
    }
}
