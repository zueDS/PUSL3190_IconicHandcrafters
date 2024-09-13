<?php

include './DB.php';



$useid = $_POST["userid"];



$sql = "update shopcatos set statusz='Active' where idshopcatos='$useid'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
