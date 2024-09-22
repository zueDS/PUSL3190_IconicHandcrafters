<?php

include './DB.php';

$row_selleremail = $_POST["seller_emailz"];
$row_messagez = $_POST["seller_messagez"];

$sellernamez = "";
$sqlzy3455 = "SELECT * FROM user_details where email='$row_selleremail'";
$query455 = $conn->query($sqlzy3455);
foreach ($query455 as $value45) {
    $sellernamez = $value45['firstname']." ".$value45['lastname'];
}


$buyername = "Admin";
$buyeremailz = "admin@iconichandcrafters.com";
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
        '$buyeremailz',
        '$buyername',
        '$sellernamez',
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