<?php

include './DB.php';



$row_id = $_POST["idz"];
$sqlz = "SELECT * FROM cartitems where idcartitems='$row_id'";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {

        $qty_loading = $row["qty"];
        if ($qty_loading == 1) {
            echo 'qtyzero';
        } else {
            $sql = "update cartitems set qty=qty-1 where idcartitems='$row_id'";
            if ($conn->query($sql) === TRUE) {

                echo "ok";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

