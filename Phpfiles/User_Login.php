<?php

include './DB.php';



$emailz = $_POST["uname"];
$passwordz = $_POST["passwordz"];

$sqlz = "SELECT * FROM user_details where email='$emailz' and passwordz='$passwordz'";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {

        $usertrypez = $row["usertype"];
        if ($usertrypez == "Buyer") {
            session_start();
            $buyerid = $row["id_user"];
            $buyernameinfull = $row["firstname"];
            $buyernameinfull2 = $row["lastname"];
            $buyeremail = $row["email"];
            $buyercity = $row["city"];
            $buyerstatuz = $row["usertype"];

            $_SESSION["user_id"] = $buyerid;
            $_SESSION["nameinfull"] = $buyernameinfull." ".$buyernameinfull2;
            $_SESSION["emailz"] = $buyeremail;
            $_SESSION["city"] = $buyercity;
            $_SESSION["passz"] = $passwordz;
            $_SESSION["btypez"] = $buyerstatuz;
            echo 'Buyer';
        } else if ($usertrypez == "Seller") {
            session_start();
            $buyerid = $row["id_user"];
            $buyernameinfull = $row["firstname"];
            $buyernameinfull2 = $row["lastname"];
            $buyeremail = $row["email"];
            $buyercity = $row["city"];
            $buyerstatuz = $row["usertype"];

            $_SESSION["user_id"] = $buyerid;
            $_SESSION["nameinfull"] = $buyernameinfull." ".$buyernameinfull2;
            $_SESSION["emailz"] = $buyeremail;
            $_SESSION["city"] = $buyercity;
            $_SESSION["passz"] = $passwordz;
            $_SESSION["btypez"] = $buyerstatuz;

            echo 'Seller';
        }
    }
} else {

    echo "Invalid";
}
