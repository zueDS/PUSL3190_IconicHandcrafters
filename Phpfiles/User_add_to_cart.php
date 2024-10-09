<?php

include './DB.php';
session_start();
$item_name = $_POST["pro_namez"];
$item_id = $_POST["itemID"];
$unitpricez = $_POST["unitpeicez"];
$add_qtyz = $_POST["itemqty"];
$seller_emai = $_POST["selleridz"];
$thumb_image = $_POST["thumbimgz"];

$buyer_id = $_SESSION["user_id"];
$buyer_name = $_SESSION["nameinfull"];
$buyer_emailz = $_SESSION["emailz"];
$userz = $_SESSION["btypez"];

if ($userz == "Seller") {
    echo "seller";
} else {


    $sqlz = "SELECT * FROM cart where emailaddress='$buyer_emailz' and statusz='Active'";
    $result = $conn->query($sqlz);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {

            $cart_id = $row['cartidgenarated'];

            $sqlzy3455 = "SELECT * FROM cartitems where cartidz='$cart_id'";
            $statuzofutem = "";
            $query455 = $conn->query($sqlzy3455);
            foreach ($query455 as $value4) {

                $item_genaratedid = $value4['itemidgenarated'];
                if ($item_genaratedid == $item_id) {
                    $statuzofutem = "Available";
                } else {
                    $statuzofutem = "UnAvailable";
                }
            }
            if ($statuzofutem == "Available") {
                echo "already";
            } else {

                $sql_data_insert_one = "INSERT INTO `finalhadcraft`.`cartitems`
            (
             `cartidz`,
             `emailaddress`,
             `itemname`,
             `itemidgenarated`,
             `imgpathz`,
             `unitprice`,
             `qty`,
             `selleremailz`)
VALUES (
        '$cart_id',
        '$buyer_emailz',
        '$item_name',
        '$item_id',
        '$thumb_image',
        '$unitpricez',
        '$add_qtyz',
        '$seller_emai');";
                if ($conn->query($sql_data_insert_one)) {

                    echo "ok";
                } else {
                    echo "Error: " . $conn->error;
                }
            }
        }
    } else {

        $stats_eka = "Active";
        $digits = 4;
        $numberrand = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
        $genarate_cart_id = $numberrand;

        $sql_data_insert_second = "insert into `cart`
            (
             `emailaddress`,
             `statusz`,
             `cartidgenarated`)
values (
        '$buyer_emailz',
        '$stats_eka',
        '$genarate_cart_id');";


        $sql_data_insert_third = "INSERT INTO `finalhadcraft`.`cartitems`
            (
             `cartidz`,
             `emailaddress`,
             `itemname`,
             `itemidgenarated`,
             `imgpathz`,
             `unitprice`,
             `qty`,
             `selleremailz`)
VALUES (
        '$genarate_cart_id',
        '$buyer_emailz',
        '$item_name',
        '$item_id',
        '$thumb_image',
        '$unitpricez',
        '$add_qtyz',
        '$seller_emai');";


        if ($conn->query($sql_data_insert_second) && $conn->query($sql_data_insert_third)) {

            echo "ok";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
