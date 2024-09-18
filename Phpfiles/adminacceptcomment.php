<?php

include './DB.php';



$row_id = $_POST["idgenarated"];
$sellerstat = "Active";


$intcountz = 0;
$sellerez = "";


$sqlz = "SELECT * FROM itemhasreview where idreview='$row_id' ";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {
        $intvl = $row["startcount"];
        $sellerez = $row["selleremailz"];
        $intcountz = (int) $intvl;
    }
}


$sql = "update itemhasreview set status='$sellerstat' where idreview='$row_id'";
$sqlupdatedz = "update sellerratingz set ratingz=ratingz+'$intcountz' where selleremailz='$sellerez'";
if ($conn->query($sql) === TRUE && $conn->query($sqlupdatedz) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}