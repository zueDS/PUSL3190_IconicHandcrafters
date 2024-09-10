<?php

include '../Phpfiles/DB.php';

$first_name = $_POST["fname"];
$nic = $_POST["nic"];
$emailz = $_POST["email"];
$contcat_number1 = $_POST["contact1"];
$contcat_number2 = $_POST["contact2"];
$district_user = $_POST["district"];
$city_user = $_POST["cityz"];
$password_user = $_POST["passwordz1"];


$statz = "Active";
$sqlz = "SELECT * FROM deliveryperson where emailz='$emailz'";
$result = $conn->query($sqlz);
if ($result->num_rows > 0) {
    echo "Already";
} else {

    $sqldel = "insert into `deliveryperson`
            (
             `nameinfull`,
             `emailz`,
             `passwordz`,
             `nicnumbersz`,
             `contactno1`,
             `contactno2`,
             `district`,
             `cityz`,
             `statusz`)
values (
        '$first_name',
        '$emailz',
        '$password_user',
        '$nic',
        '$contcat_number1',
        '$contcat_number2',
        '$district_user',
        '$city_user',
        '$statz');";
    
    if ($conn->query($sqldel) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}