<?php

include './DB.php';



$useid = $_POST["userid"];



$sql = "update sellerpostitem set statusz='Removed' where itemidsellerpost='$useid'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}