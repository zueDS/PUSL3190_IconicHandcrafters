<?php
include './DB.php';

$order_id = $_POST["loadedorderedid"];
$del_person_name = $_POST["delpersonname"];
$del_person_email = $_POST["depersonemail"];
$del_person_nic = $_POST["delpersonnic"];
$del_person_co1 = $_POST["delpersoncontact1"];
$del_person_co2 = $_POST["delpersoncontact2"];



$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');
$prostatus = "Assigned";

$sql_inserted_data = "INSERT INTO `orderassigntodelveryperson`
            (`orderidz`,
             `delverypersonname`,
             `deliverypersonemailz`,
             `personcontactz1`,
             `personcontactz2`,
             `statuszoforderz`,
             `datez`,
             `timez`)
VALUES ('$order_id',
        '$del_person_name',
        '$del_person_email',
        '$del_person_co1',
        '$del_person_co2',
        '$prostatus',
        '$todaydate',
        '$todaytime');";

$sqlz = "Update orderz set statusz='$prostatus' where orderidgenarated='$order_id'";
if ($conn->query($sql_inserted_data) && $conn->query($sqlz)) {

    echo "ok";
} else {
    echo "Error: " . $conn->error;
}
