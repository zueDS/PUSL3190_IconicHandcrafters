<?php

include './DB.php';

$ech = "";
$characters = '123456789';
$charactersLength = strlen($characters);
$length = 5;
$randomString = '';
for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}

$orderidgen = "ORD" . $randomString;

$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');

$order_name = $_POST["namez"];
$order_district = $_POST["deldis"];
$order_city = $_POST["delcity"];
$order_address = $_POST["deladd"];
$order_phone = $_POST["delphones"];
$order_notes = $_POST["delordernote"];
$order_sub_tot = $_POST["ordersubcost"];
$order_del_cost = $_POST["orderdelcost"];
$order_net_tot = $_POST["ordernet"];

$cart_id_eka_userge = "";
session_start();
$buyer_emailz = $_SESSION["emailz"];
$sqlz = "SELECT * FROM cart where emailaddress='$buyer_emailz' and statusz='Active'";
$result = $conn->query($sqlz);
$totalfinalpayment = 0;
if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {


        $cart_id = $row['cartidgenarated'];
        $cart_id_eka_userge = $cart_id;

        $sqlzy3455 = "SELECT * FROM cartitems where cartidz='$cart_id_eka_userge'";
        $statuzofutem = "";
        $query455 = $conn->query($sqlzy3455);
        foreach ($query455 as $value4) {


            $itemname_loadz = $value4['itemname'];
            $itemid_loadz = $value4['itemidgenarated'];
            $itemimage_loadz = $value4['imgpathz'];
            $up_laodz = $value4['unitprice'];
            $qtyz_laodz = $value4['qty'];
            $seller_emailload = $value4['selleremailz'];
            $status_seller = "Notready";
            $sellerrate = 0;

            if ($qtyz_laodz > 1 && $qtyz_laodz < 20) {
                $sellerrate = 15;
            } else if ($qtyz_laodz > 20) {
                $sellerrate = 20;
            } else if ($qtyz_laodz == 1) {
                $sellerrate = 10;
            }


            $sqal_insertinsideone = "INSERT INTO `orderdetailz`
            (`orderidz`,
             `itemname`,
             `idgenareted`,
             `unitprice`,
             `qty`,
             `orderidgenarated`,
             `impathz`,
             `selleridz`,
             `sellerstatusz`)
VALUES ('$orderidgen',
        '$itemname_loadz',
        '$itemid_loadz',
        '$up_laodz',
        '$qtyz_laodz',
        '$orderidgen',
        '$itemimage_loadz',
        '$seller_emailload',
        '$status_seller');";

            $sqlupdate22insidetwo = "update sellerratingz set ratingz=ratingz+'$sellerrate' where selleremailz='$seller_emailload'";

            $sqlinsert222insidethree = "INSERT INTO `solitems`
            (`itemname`,
             `itemidgenarated`,
             `sellername`,
             `thumbimagepathz`,
             `selleremail`,
             `qty`,
             `unitprice`,
             `datez`,
             `timez`,
             `buyeremailz`)
VALUES ('$itemname_loadz',
        '$itemid_loadz',
        '$seller_emailload',
        '$itemimage_loadz',
        '$seller_emailload',
        '$qtyz_laodz',
        '$up_laodz',
        '$todaydate',
        '$todaytime',
        '$buyer_emailz');";

            if (($conn->query($sqal_insertinsideone)  === TRUE) && ($conn->query($sqlupdate22insidetwo)  === TRUE) && ($conn->query($sqlinsert222insidethree)  === TRUE)) {
                
                $ech = "ok";
            } else {
                $ech  = "Error: " . $sqal_insertinsideone . "<br>" . $conn->error;
                echo $ech;
            }
        }
    }
}

$status_oforders = "Pending";


$sqlinsertedthird = "insert into `orderz`
            (`buyeremailaddressz`,
             `datez`,
             `timez`,
             `nameinfull`,
             `districtsz`,
             `cityz`,
             `addressz`,
             `contactz`,
             `ordernotez`,
             `orderidgenarated`,
             `statusz`,
             `ordersubz`,
             `orderdelcost`,
             `ordernetcost`)
values ('$buyer_emailz',
        '$todaydate',
        '$todaytime',
        '$order_name',
        '$order_district',
        '$order_city',
        '$order_address',
        '$order_phone',
        '$order_notes',
        '$orderidgen',
        '$status_oforders',
        '$order_sub_tot',
        '$order_del_cost',
        '$order_net_tot');";

$buyerrate = 20;

$cartstatus = "ended";
$updatesql = "Update cart set statusz='$cartstatus' where emailaddress='$buyer_emailz'";
$sqlupdate = "update buyerratingz set ratingpoints=ratingpoints+'$buyerrate' where buyeridz='$buyer_emailz'";
if (($conn->query($sqlinsertedthird) === TRUE) && ($conn->query($updatesql) === TRUE) && ($conn->query($sqlupdate) === TRUE)) {

    $ech = "ok";
} else {
    $ech = $conn->error;
}

echo $ech;



