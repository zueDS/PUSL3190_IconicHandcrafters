<?php

include './DB.php';



$store_name = $_POST["storename"];
$store_desc = $_POST["stordescription"];
$store_latz = $_POST["latz"];
$store_longz = $_POST["longz"];


session_start();
$sellerz_emailz = $_SESSION["emailz"];
$sql = "update sellershopdetails set storename='$store_name',description='$store_desc',latitutez='$store_latz',longtudez='$store_longz' where selelremailz='$sellerz_emailz'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}