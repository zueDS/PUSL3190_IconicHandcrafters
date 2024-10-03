<?php

include './DB.php';
session_start();

$sellerid = $_SESSION["user_id"];
$sellernameinfull = $_SESSION["nameinfull"];
$selleremail = $_SESSION["emailz"];


$catoname = $_POST["inputcate"];
$productname = $_POST["protitle"];
$prodescription = $_POST["prodes"];
$prodwarrentytype = $_POST["prowaratype"];
$proreturntype = $_POST["proretutypez"];
$profblin = $_POST["profblink"];
$proinslink = $_POST["proinsgramlink"];
$prosizes = $_POST["prosizes"];
$procolors = $_POST["procolorz"];
$proweight = $_POST["proweight"];
$prounitprice = $_POST["proprices"];
$pro_contactz = $_POST["contactz"];



$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');
$date_timez = $todaydate . " " . $todaytime;
$prostatus = "Pending";


$seller_rating = 0;




try {

    if ($catoname == "None") {
        echo 'emptycato';
    } else if ($productname == "") {
        echo 'emptyproname';
    } else if ($prodescription == "") {
        echo 'emptyprodes';
    } else if ($prodwarrentytype == "") {
        echo 'emptyprowarrentytype';
    } else if ($proreturntype == "") {
        echo 'emptyproreturntype';
    } else if ($prosizes == "") {
        echo 'emptyprosize';
    } else if ($procolors == "") {
        echo 'emptyprocolors';
    } else if ($proweight == "") {
        echo 'emptyproweight';
    } 
    else if ($prounitprice == "") {
        echo 'emptyproprice';
    }
    else if ($pro_contactz == "") {
        echo 'emptycontactz';
    }
    else {

        $file_name = $_FILES['thumbimage']['name'];
        $file_name2 = $_FILES['imagez2']['name'];
        $file_name3 = $_FILES['imagez3']['name'];
        $file_name4 = $_FILES['imagez4']['name'];

        if ($file_name == "" || $file_name2 == "" || $file_name3 == "" || $file_name4 == "") {

            echo 'imageone';
        } else {
            
            $digits = 3;
            $numberrand = rand(pow(10, $digits - 1), pow(10, $digits) - 1);

            $file_size = $_FILES['thumbimage']['size'];
            $file_tmp = $_FILES['thumbimage']['tmp_name'];
            $file_type = $_FILES['thumbimage']['type'];
            $filenewz = $sellernameinfull . $numberrand . $file_name;
            move_uploaded_file($file_tmp, "biddingitems/" . $filenewz);
            $fileekepatheka = "biddingitems/" . $filenewz;
            /////////////////////////////////////////////
            $file_size2 = $_FILES['imagez2']['size'];
            $file_tmp2 = $_FILES['imagez2']['tmp_name'];
            $file_type2 = $_FILES['imagez2']['type'];
            $filenewz2 = $sellernameinfull . $numberrand . $file_name2;
            move_uploaded_file($file_tmp2, "biddingitems/" . $filenewz2);
            $fileekepatheka2 = "biddingitems/" . $filenewz2;
            ////////////////////////////////////////////////
            $file_size3 = $_FILES['imagez3']['size'];
            $file_tmp3 = $_FILES['imagez3']['tmp_name'];
            $file_type3 = $_FILES['imagez3']['type'];
            $filenewz3 = $sellernameinfull . $numberrand . $file_name3;
            move_uploaded_file($file_tmp3, "biddingitems/" . $filenewz3);
            $fileekepatheka3 = "biddingitems/" . $filenewz3;
            ////////////////////////////////////////////////////
            $file_size4 = $_FILES['imagez4']['size'];
            $file_tmp4 = $_FILES['imagez4']['tmp_name'];
            $file_type4 = $_FILES['imagez4']['type'];
            $filenewz4 = $sellernameinfull . $numberrand . $file_name4;
            move_uploaded_file($file_tmp4, "biddingitems/" . $filenewz4);
            $fileekepatheka4 = "biddingitems/" . $filenewz4;


            $characters = '123456789';
            $charactersLength = strlen($characters);
            $length = 5;
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }

            $orderidgen = "ITM" . $randomString;
            $sellercurrent_rating = "";

            $sqlz = "SELECT * FROM sellerratingz where selleremailz='$selleremail'";
            $result = $conn->query($sqlz);

            if ($result->num_rows > 0) {

                if ($row = $result->fetch_assoc()) {
                    $sellercurrent_rating = $row["ratingz"];
                }
            }
            
            $stockav = "In Stock";
            
            $sqlll = "INSERT INTO `sellerpostitem`
            (
             `category`,
             `titleproduct`,
             `prodescription`,
             `warrentytype`,
             `returentypez`,
             `fblinkz`,
             `inslink`,
             `sizez`,
             `colors`,
             `weightz`,
             `unitpricez`,
             `datez`,
             `timez`,
             `datetime`,
             `statusz`,
             `proidgenarated`,
             `sellerrating`,
             `thumimgz`,
             `img2path`,
             `img3path`,
             `img4pathz`,
             `contactnumberz`,
             `selleremailz`,
             `sellernamez`,
             `stockavailab`)
             
VALUES (
        '$catoname',
        '$productname',
        '$prodescription',
        '$prodwarrentytype',
        '$proreturntype',
        '$profblin',
        '$proinslink',
        '$prosizes',
        '$procolors',
        '$proweight',
        '$prounitprice',
        '$todaydate',
        '$todaytime',
        '$date_timez',
        '$prostatus',
        '$orderidgen',
        '$sellercurrent_rating',
        '$fileekepatheka',
        '$fileekepatheka2',
        '$fileekepatheka3',
        '$fileekepatheka4',
        '$pro_contactz',
        '$selleremail',
        '$sellernameinfull',
        '$stockav');";

            if ($conn->query($sqlll) === TRUE) {

                echo "ok";
            } else {
                echo "Error: " . $sqlll . "<br>" . $conn->error;
            }
        }
    }
} catch (Exception $exc) {
    
}



