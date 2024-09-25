<?php

include './DB.php';

$getcity = $_POST['districtname'];




$sqlzy341 = "SELECT * FROM deliveryperson where district='$getcity'";
$query41 = $conn->query($sqlzy341);
$return_arr = array();

foreach ($query41 as $value41) {

    
    $id = $value41["idedel"];
    $city = $value41["nameinfull"];
   

    $return_arr[] = array("id" => $id,
                        "city" => $city);
}

echo json_encode($return_arr);