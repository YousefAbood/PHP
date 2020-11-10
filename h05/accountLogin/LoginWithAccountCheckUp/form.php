<?php


if($_POST['email'] == 'piet@worldonline.nl'){
    if($_POST['password'] == 'doetje123') {
        echo "Welcome to Our Page!";
    } else {
        echo "Wrong Password, <a href='index.html'>Try Again</a>";
    }
}

elseif ($_POST['email'] == 'klaas@carpets.nl'){
    if($_POST['password'] == 'snoepje777') {
        echo "Welcome to Our Page!";
    } else {
        echo "Wrong Password, <a href='index.html'>Try Again</a>";
    }
}

elseif ($_POST['email'] == 'truushendriks@wegweg.nl'){
    if($_POST['password'] == 'arkiearkie201') {
        echo "Welcome to Our Page!";
    } else {
        echo "Wrong Password, <a href='index.html'>Try Again</a>";
    }
} else {
    echo "Wrong Email, <a href='index.html'>Try Again</a>";
}



