<?php

include './DB.php';

$getcity = $_POST['districtname'];




$sqlzy341 = "SELECT * FROM deliveryperson where nameinfull='$getcity'";
$query41 = $conn->query($sqlzy341);
$return_arr = array();

foreach ($query41 as $value41) {

    
    $emai = $value41["emailz"];
    $nic = $value41["nicnumbersz"];
    $connum1 = $value41["contactno1"];
    $connum2 = $value41["contactno2"];
    $cityz = $value41["cityz"];
   

    $return_arr[] = array("emai" => $emai,
                          "nic" => $nic,
                          "connum1" => $connum1,
                          "connum2" => $connum2,
                          "cityz" => $cityz);
}

echo json_encode($return_arr);