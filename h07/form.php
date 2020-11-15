<?php

session_start();

$users = array(
    "Yousef" => array ("password" => "jic1978ramZ", "roll" => "Administrator"),
    "Joey" => array ("password" => "123456", "roll" => "User"),
    "Rick" => array ("password" => "12345", "roll" => "User"),
);

if(isset($_GET["logOut"])) {
    $_SESSION = array();
    session_destroy();
}

if(isset($_POST['submit'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]] ["password"] == $_POST['pwd']) {

    $_SESSION["user"] = array("name" => $_POST['login'],
        "password" => $users[$_POST["login"]] ['password'],
        "roll" => $users[$_POST["login"]] ['roll']);

    $message = "Welkom ".$_SESSION["user"] ["name"]." met de rol ".$_SESSION["user"]["roll"];
} else {
    $message = "Log In";
}

print_r($_SESSION);

?>

<html>
<body>
<h1><?php echo $message; ?></h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Login >> <input type="text" name="login" value="">

    Password >> <input type="password" name="pwd" value="">

    <input type="submit" name="submit">

</form>

<p><a href="form.php?logOut">Log Out</a></p>

</body>
</html>