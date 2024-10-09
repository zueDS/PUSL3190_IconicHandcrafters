<?php

include './DB.php';
session_start();
$buye_emailz = $_SESSION["emailz"];

$row_fname = $_POST["fnamez"];
$row_lname = $_POST["lnamez"];
$row_contactz = $_POST["contactz"];
$row_addressz = $_POST["addressz"];


$sql = "update user_details set firstname='$row_fname',lastname='$row_lname',contactnumber='$row_contactz',addressz='$row_addressz' where email='$buye_emailz'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}