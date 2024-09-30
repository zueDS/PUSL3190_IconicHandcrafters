<?php

include './DB.php';
session_start();
$sellerz_emailz = $_SESSION["emailz"];
$sellerz_nameinfull = $_SESSION["nameinfull"];



$row_offeremailz = $_POST["buyeremailz"];
$row_offername = $_POST["buyerenamez"];
$row_unitpricez = $_POST["coupounpricez"];
$sellerstat = "Notused";
$floatvalz = (float) $row_unitpricez;

$usez = "Seller";
$paymentstatz = "notpayed";

$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');

$characters = '123456789';
$charactersLength = strlen($characters);
$length = 5;
$randomString = '';
for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}

$orderidgen = "COU" . $randomString;


$ssql = "insert into `userhascoupoun`
            (
             `coupounidgenarated`,
             `gotuserz`,
             `gotusernamez`,
             `offersuer`,
             `offerusernamez`,
             `amountzcoupon`,
             `datez`,
             `timez`,
             `statusz`,
             `usttypez`,
             `payementstatz`)
values (
        '$orderidgen',
        '$row_offername',
        '$row_offeremailz',
        '$sellerz_emailz',
        '$sellerz_nameinfull',
        '$floatvalz',
        '$todaydate',
        '$todaytime',
        '$sellerstat',
        '$usez',
        '$paymentstatz');";

$sellerrate = 50;

$sqlupdatezzzz = "update sellerratingz set ratingz=ratingz+'$sellerrate' where selleremailz='$sellerz_emailz'";





$messagestatz = "notread";
$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');

$row_bymesz = "You received a new coupon from " . $sellerz_nameinfull . " for LKR " . $row_unitpricez . " .You can use it on product payments.";
$sqlqqmessage = "INSERT INTO `messages_seller_to_buyer`
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
        '$sellerz_nameinfull',
        '$sellerz_emailz',
        '$row_offername',
        '$row_offeremailz',
        '$row_bymesz',
        '$messagestatz',
        '$todaydate',
        '$todaytime')";

if ($conn->query($ssql) === TRUE && $conn->query($sqlupdatezzzz) === TRUE && $conn->query($sqlqqmessage) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $ssql . "<br>" . $conn->error;
}

