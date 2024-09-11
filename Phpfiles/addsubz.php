<?php

include './DB.php';

$emailz = $_POST["uname"];



$sqldata2 = "insert into subscriptions(emailz) values('$emailz') ";



if ($conn->query($sqldata2) === TRUE) {
    $echdata = "ok";
    echo $echdata;
} else {
    echo $echdata;
}

$conn->close();
