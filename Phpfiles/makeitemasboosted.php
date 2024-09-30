<?php

include '../Phpfiles/DB.php';
$itemidtoz = $_POST["itemid"];


$sqlz = "SELECT * FROM boostedproducts where itemidtoload='$itemidtoz'";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {
    echo "al";
} else {

    $boo = "insert into `boostedproducts`
            (`itemidtoload`)
values ('$itemidtoz');";
    if ($conn->query($boo) === TRUE) {
        $echdata = "ok";
        echo $echdata;
    } else {
        $echdata = "Error: " . $boo . "<br>" . $conn->error;
        echo $echdata;
    }
}
