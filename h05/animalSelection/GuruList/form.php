<?php


foreach($_POST['animals'] as $animal){
    echo "<img src=resources/$animal.jpg alt=''>";
}
