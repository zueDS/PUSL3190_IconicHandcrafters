<?php

include './DB.php';

$first_name = $_POST["fname"];
$last_name = $_POST["lname"];
$emailz = $_POST["email"];
$contcat_number = $_POST["contactz"];
$address_n = $_POST["addresss"];
$district_user = $_POST["district"];
$city_user = $_POST["cityz"];
$password_user = $_POST["passwordz1"];
$type_user = $_POST["usertype"];

$statz = "Active";
$user_level = 10;

$sqlz = "SELECT * FROM user_details where email='$emailz'";
$result = $conn->query($sqlz);

$echdata = "";

if ($result->num_rows > 0) {
    echo "Already";
} else {

    $rating_data = 10;

    if ($type_user == "Buyer") {

        $sqldata1 = "insert into `buyerratingz`
            (`buyeridz`,
             `ratingpoints`)
values ('$emailz',
        '$rating_data');";
        if ($conn->query($sqldata1) === TRUE) {

            $echdata = "ok";
        } else {
            $echdata = "Error: " . $sqldata1 . "<br>" . $conn->error;
        }
    } else if ($type_user == "Seller") {

        $seller_fullname = $first_name . " " . $last_name;
        $shopstatusz = "Active";


        $sqldata2 = "INSERT INTO `sellerratingz`
            (`ratingz`,
             `selleremailz`)
VALUES ('$rating_data',
        '$emailz');";


        $sqldata3 = "INSERT INTO `sellershopdetails`
            (`sellername`,
             `selelremailz`,
             `storename`,
             `statusz`)
VALUES ('$seller_fullname',
        '$emailz',
        '$seller_fullname',
        '$shopstatusz');";
        if ($conn->query($sqldata2) === TRUE && $conn->query($sqldata3)) {

            $echdata = "ok";
        } else {
            $echdata = "Error: " . $sqldata1 . "<br>" . $conn->error;
        }
    }


    $sql = "INSERT INTO `user_details`
            (`firstname`,
             `lastname`,
             `email`,
             `passwordz`,
             `contactnumber`,
             `addressz`,
             `district`,
             `city`,
             `usertype`,
             `userstatus`,
             `userlevels`)
VALUES ('$first_name',
        '$last_name',
        '$emailz',
        '$password_user',
        '$contcat_number',
        '$address_n',
        '$district_user',
        '$city_user',
        '$type_user',
        '$statz',
        '$user_level');";

    //seller buyer rating table dekata data save wenna one


    if ($conn->query($sql) === TRUE) {
        $echdata = "ok";
        echo $echdata;
    } else {
        echo $echdata;
    }

    $conn->close();
}