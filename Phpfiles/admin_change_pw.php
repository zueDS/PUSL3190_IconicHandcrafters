<?php

include '../phpfiles/DB.php';



$pass_cur = $_POST["currentpassword"];
$pass_1 = $_POST["newpassword"];
$pass_2 = $_POST["newpassword2"];


session_start();

$buyeremail = $_SESSION["adminemailz"];

if (!($pass_1 == $pass_2)) {
    echo 'notm';
} else {

    $sqlz = "SELECT * FROM adminloginz where unamez='$buyeremail'";
    $result = $conn->query($sqlz);

    if ($result->num_rows > 0) {

        if ($row = $result->fetch_assoc()) {

            $current_pw = $row["pwz"];

            if ($pass_cur == $current_pw) {
                $sql = "update adminloginz set pwz='$pass_1' where unamez='$buyeremail'";
                if ($conn->query($sql) == TRUE) {
                    echo "ok";
                }
            } else {
                echo 'chk';
            }
        }
    }
}