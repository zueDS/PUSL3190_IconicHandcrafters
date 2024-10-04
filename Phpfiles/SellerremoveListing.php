<?php

include './DB.php';



$row_id = $_POST["userid"];
$sellerstat = "removed";

$sql = "update sellerpostitem set statusz='$sellerstat' where itemidsellerpost='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;

}