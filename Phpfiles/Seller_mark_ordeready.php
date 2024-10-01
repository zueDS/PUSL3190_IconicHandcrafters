<?php

include './DB.php';



$row_id = $_POST["idgenarated"];
$sellerstat = "Ready";
session_start();
$sellerz_emailz = $_SESSION["emailz"];

$sql = "update orderdetailz set sellerstatusz='$sellerstat' where orderidgenarated='$row_id' and selleridz='$sellerz_emailz'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}