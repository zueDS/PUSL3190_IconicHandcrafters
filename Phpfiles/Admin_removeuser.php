<?php

include './DB.php';



$row_id = $_POST["userid"];
$sellerstat = "Removed";

$sql = "update user_details set userstatus='$sellerstat' where id_user='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}