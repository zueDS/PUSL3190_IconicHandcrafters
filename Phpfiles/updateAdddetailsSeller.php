<?php

include './DB.php';


$protitle = $_POST["protitle"];
$prodes = $_POST["prodes"];
$wartype = $_POST["wartype"];
$returntype = $_POST["returntype"];
$fblinkze = $_POST["fblinkz"];
$inzlink = $_POST["inzlink"];
$weightz = $_POST["weightz"];
$picez = $_POST["picez"];
$contactz = $_POST["contactz"];
$idorderadz = $_POST["idorderadz"];



$sql_upda = "update sellerpostitem set titleproduct='$protitle',prodescription='$prodes',warrentytype='$wartype',returentypez='$returntype',fblinkz='$fblinkze',inslink='$inzlink',weightz='$weightz',unitpricez='$picez',contactnumberz='$contactz' where itemidsellerpost='$idorderadz'";
if ($conn->query($sql_upda) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql_upda . "<br>" . $conn->error;
}



