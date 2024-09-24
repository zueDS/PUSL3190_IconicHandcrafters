<?php

include './DB.php';
session_start();
$buyer_emailz = $_SESSION["emailz"];
$buyer_nameinfull = $_SESSION["nameinfull"];



$row_sellername = $_POST["seller_namez"];
$row_selleremail = $_POST["seller_emailz"];
$row_messagez = $_POST["seller_messagez"];



$messagestatz = "notread";

$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');


$sqlqq = "INSERT INTO `messages_buyer_to_seller`
            (`buyeremail`,
             `buyername`,
             `sellername`,
             `selleremail`,
             `messagez`,
             `datez`,
             `timez`,
             `statuz`)
VALUES (
        '$buyer_emailz',
        '$buyer_nameinfull',
        '$row_sellername',
        '$row_selleremail',
        '$row_messagez',
        '$todaydate',
        '$todaytime',
        '$messagestatz');";
if ($conn->query($sqlqq) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sqlqq . "<br>" . $conn->error;
}