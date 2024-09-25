<?php

include './DB.php';



$load_dis = $_POST["loadingdis"];
$load_cit = $_POST["loadingcity"];

$sqlzy34 = "SELECT * FROM cities where district='$load_dis' and city='$load_cit' ";
$query4 = $conn->query($sqlzy34);
foreach ($query4 as $value4) {

    $delcost = $value4['diliverycost'];
    echo $delcost;
}
