<?php

include './DB.php';



$row_id = $_POST["userid"];
$sellerstat = "payed";

$sql = "update userhascoupoun set payementstatz='$sellerstat' where id='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
