<?php


include './DB.php';



$row_id = $_POST["idgenarated"];
$sellerstat = "removed";


$sql = "update itemhasreview set status='$sellerstat' where idreview='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}