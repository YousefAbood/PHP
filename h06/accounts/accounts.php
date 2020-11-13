<?php


$link = mysqli_connect("localhost", "203739", "jic1978ramZ", "203739");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$emailPOST = $_POST['email'];
$passwordPOST = $_POST['password'];
$active = False;



// Attempt select query execution
$sql = "SELECT * FROM accounts;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['email'] == $emailPOST && $row['password'] ==  $passwordPOST) {
                echo "Login Successful, Welcome " . $emailPOST;
                $active = True;
                break;

            }
        }
        if(!($active)) {
            echo "Login UnSuccessful, <a href='index.html'>Try Again</a>";
        }

        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);