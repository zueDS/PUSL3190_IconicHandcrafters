<?php

include './DB.php';



$useid = $_POST["userid"];



$sql = "update deliveryperson set statusz='Removed' where idedel='$useid'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
