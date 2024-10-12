<?php

include './DB.php';
session_start();
$bbz_emailz = $_SESSION["emailz"];


$sqlz = "delete  FROM cart where emailaddress='$bbz_emailz' and statusz='Active'";

if ($conn->query($sqlz) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $ssql . "<br>" . $conn->error;
}
