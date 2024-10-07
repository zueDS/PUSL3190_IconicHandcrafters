<?php


include './DB.php';
session_start();
$se_emailz = $_SESSION["emailz"];
$se_nameinfull = $_SESSION["nameinfull"];



$row_bynme = $_POST["seller_namez"];
$row_bemilz = $_POST["seller_emailz"];
$row_bymesz = $_POST["seller_messagez"];



$messagestatz = "notread";

$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');


$sqlqq = "INSERT INTO `messages_seller_to_buyer`
            (
             `sellername`,
             `selleremail`,
             `buyername`,
             `buyeremail`,
             `messagez`,
             `status`,
             `datez`,
             `timez`)
VALUES (
        '$se_nameinfull',
        '$se_emailz',
        '$row_bynme',
        '$row_bemilz',
        '$row_bymesz',
        '$messagestatz',
        '$todaydate',
        '$todaytime')";
if ($conn->query($sqlqq) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sqlqq . "<br>" . $conn->error;
}