<?php

if($_POST['loginName'] == "") {
    echo "Login Name Needed<br>";
    echo "<a href='index.html'>Go Back</a>";
} elseif ($_POST['password'] == "") {
    echo "Password Needed<br>";
    echo "<a href='index.html'>Go Back</a>";
} else {
    print_r($_POST);
}