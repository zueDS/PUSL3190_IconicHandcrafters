<?php

include './DB.php';
session_start();
$buye_emailz = $_SESSION["emailz"];
$buye_currentpw = $_SESSION["passz"];



$current_pw = $_POST["cirpwz"];
$new_pw = $_POST["newpw2"];
if ($buye_currentpw == $current_pw) {

    $sqlo = "update user_details set passwordz='$new_pw' where email='$buye_emailz'";
    if ($conn->query($sqlo) === TRUE) {
        
        session_unset();
        session_destroy();
        echo "ok";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {

    echo 'notm';
}
