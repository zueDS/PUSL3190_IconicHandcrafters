<?php
include './DB.php';
session_start();
$bbz2_emailz = $_SESSION["emailz"];
$row_id = $_POST["idz"];



$sql = "delete from cartitems  where idcartitems='$row_id'";
if ($conn->query($sql) === TRUE) {


    $sqlz = "SELECT * FROM cart where emailaddress='$bbz2_emailz' and statusz='Active'";
    $result = $conn->query($sqlz);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $cart_id = $row['cartidgenarated'];
            $sqlzy3455 = "SELECT * FROM cartitems where cartidz='$cart_id'";
            $result2 = $conn->query($sqlzy3455);
            if ($result2->num_rows > 0) {
                if ($row = $result2->fetch_assoc()) {
                    echo "ok";
                }
            } else {

                $sqlremoving = "delete  FROM cart where emailaddress='$bbz2_emailz' and statusz='Active'";
                if ($conn->query($sqlremoving) === TRUE) {

                    echo "ok";
                }
            }
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}