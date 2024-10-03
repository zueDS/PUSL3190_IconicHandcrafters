<?php
include './DB.php';
$item_name_load = $_POST["itemnamez"];
$item_id_load = $_POST["iteidz"];
$offer_name_load = $_POST["offernamez"];
$offer_percentage = $_POST["offerpercentage"];
$offer_unitp = $_POST["offerupz"];



$float_percentage = (float) $offer_percentage;
$float_unitprice = (float) $offer_unitp;


$discpricez = ($float_unitprice * $float_percentage)/100;

$finpricez = $float_unitprice - $discpricez;

$sqlz_det = "update sellerpostitem set offername='$offer_name_load',discountrange='$offer_percentage',afterdiscountprice='$finpricez' where proidgenarated='$item_id_load'";
if ($conn->query($sqlz_det) === TRUE) {

    echo "ok";
} else {
echo "Error: " . $sqlz_det . "<br>" . $conn->error;

}
