<?php

include './DB.php';

session_start();
$buyer_id = $_SESSION["user_id"];
$buyer_name = $_SESSION["nameinfull"];
$buyer_emailz = $_SESSION["emailz"];



$review_comment = $_POST["reviewcomment"];
$rating_countz = $_POST["ratingz"];
$itemname_re = $_POST["itemname"];
$item_id_type = $_POST["itemid"];
$sellerz_emailzlaod = $_POST["seller_emailz"];


$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');

$statuz = "Pending";


$sqlloadz = "INSERT INTO `itemhasreview`
            (`itemidz`,
             `itemname`,
             `startcount`,
             `selleremailz`,
             `postedusername`,
             `datez`,
             `timez`,
             `posteduseremail`,
             `commentz`,
             `status`)
VALUES ('$item_id_type',
        '$itemname_re',
        '$rating_countz',
        '$sellerz_emailzlaod',
        '$buyer_name',
        '$todaydate',
        '$todaytime',
        '$buyer_emailz',
        '$review_comment',
        '$statuz');";

$intvalofrat = (int) $rating_countz;


if ($conn->query($sqlloadz) === TRUE ) {

    echo "ok";
} else {
    echo "Error: " . $sqlloadz . "<br>" . $conn->error;
}

$conn->close();
