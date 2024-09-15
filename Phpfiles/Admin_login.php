<?php

include './DB.php';



$emailz = $_POST["uname"];
$passwordz = $_POST["pw"];

$sqlz = "SELECT * FROM adminloginz where unamez='$emailz' and pwz='$passwordz'";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {



        $usertrypez = $row["typez"];



        if ($usertrypez == "Super admin") {

            session_start();
            $buyerid = $row["id"];
            $buyeremail = $row["unamez"];
            $buy_type = $row["typez"];


            $_SESSION["admin_id"] = $buyerid;
            $_SESSION["adminemailz"] = $buyeremail;
            $_SESSION["adminuse_type"] = $buy_type;
            echo "ok";
        } else {

            echo "acc";
        }
    }
} else {
    echo "Invalid";
}