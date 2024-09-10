<?php

include './DB.php';



$row_id = $_POST["idz"];



$sql = "update cartitems set qty=qty+1 where idcartitems='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}