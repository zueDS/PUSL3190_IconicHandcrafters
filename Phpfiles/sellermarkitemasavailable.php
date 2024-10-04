<?php

include './DB.php';



$row_id = $_POST["userid"];
$sellerstat = "In Stock";

$sql = "update sellerpostitem set stockavailab='$sellerstat' where itemidsellerpost='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;

}