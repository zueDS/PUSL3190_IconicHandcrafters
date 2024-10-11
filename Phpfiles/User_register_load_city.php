<?php

include './DB.php';

$getcity = $_POST['districtname'];




$sqlzy341 = "SELECT * FROM cities where district='$getcity'";
$query41 = $conn->query($sqlzy341);
$return_arr = array();

foreach ($query41 as $value41) {

    
    $id = $value41["id_city"];
    $city = $value41["city"];
   

    $return_arr[] = array("id" => $id,
                        "city" => $city);
}

echo json_encode($return_arr);