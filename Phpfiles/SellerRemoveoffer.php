<?php

include './DB.php';



$row_id = $_POST["userid"];
$empty_statz = NULL;
$empty_statzdc = 0;

$sql = "update sellerpostitem set discountrange='$empty_statzdc',offername='$empty_statz',afterdiscountprice='$empty_statzdc' where itemidsellerpost='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;

}