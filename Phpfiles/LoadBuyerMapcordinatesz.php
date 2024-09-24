<?php

include './DB.php';



$od_id = $_POST["orderidz"];

$sqlz = "SELECT * FROM orderassigntodelveryperson where orderidz='$od_id'";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {
        
        
        $lattitudez = $row["curlatz"];
        $longtudez = $row["curlongz"];
        if($lattitudez == ""  && $longtudez == ""){
           echo 'nocord'; 
        }else{
            echo $lattitudez."###".$longtudez;
        }
        
        
    }
} else {

    echo 'nocord';
}
