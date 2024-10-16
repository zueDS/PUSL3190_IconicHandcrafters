<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Seller Home</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
        <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    </head>
    <body>
        <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div></div></div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">

                <ul class="navbar-item theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="SellerHome.php">
                            <img src="assets/img/logo.svg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="SellerHome.php" class="nav-link"> Iconic-Handcrafters </a>
                    </li>
                </ul>



                <ul class="navbar-item flex-row ml-md-auto">





                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="assets/img/profile-16.jpg" alt="avatar">
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="">
                                <div class="dropdown-item">
                                    <a class="" href="Seller_Myaccount.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                </div>
                                <div class="dropdown-item">
                                    <a class="" href="SellerInbox.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                                </div>

                                <div class="dropdown-item">
                                    <a onclick="Logzoutzbuyer()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    </li>

                </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->

        <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

                <ul class="navbar-nav flex-row">
                    <li>
                        <div class="page-header">

                            <nav class="breadcrumb-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Analytics</span></li>
                                </ol>
                            </nav>

                        </div>
                    </li>
                </ul>

            </header>
        </div>
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            <div class="sidebar-wrapper sidebar-theme">

                <?php
                include './SellerNavbar.php';
                ?>

            </div>
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="row layout-top-spacing">

                        <?php
                        include '../Phpfiles/DB.php';
                        session_start();

                        $sellerid = $_SESSION["user_id"];
                        $sellernameinfull = $_SESSION["nameinfull"];
                        $selleremail = $_SESSION["emailz"];

                        $sqlz = "SELECT * FROM sellershopdetails where selelremailz='$selleremail'";
                        $result = $conn->query($sqlz);


                        $storename = "";
                        $description = "";
                        $latz = "";
                        $longz = "";

                        if ($result->num_rows > 0) {

                            if ($row = $result->fetch_assoc()) {


                                $storename = $row["storename"];
                                $description = $row["description"];
                                $latz = $row["latitutez"];
                                $longz = $row["longtudez"];
                            }
                        }
                        ?>



                        <div class="col-md-12">

                            <div class="widget widget-activity-four">

                                <div class="widget-heading">
                                    <h5 class="">Recent Notifications</h5>
                                </div>

                                <div class="widget-content">

                                    <div class="mt-container mx-auto">
                                        <div class="timeline-line">


                                            <?php
                                            if ($storename == "" || $description == "" || $latz == "" || $longz == "") {
                                                ?>
                                                <div class="item-timeline timeline-primary">
                                                    <div class="t-dot" data-original-title="" title="">
                                                    </div>
                                                    <div class="t-text">
                                                        <p><span style="font-size: 20px;">Some of your store details are missing.Please update your store details to keep to reach more customers</span></p>
                                                        <a style="float: right;" class="badge btn btn-info" href="Seller_Myaccount.php">Update details</a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>




                                        </div>
                                    </div>

                                    <?php
                                    $sqlzy3455 = "SELECT * FROM messages_buyer_to_seller where selleremail='$selleremail' and statuz='notread'";
                                    $yyy = 0;
                                    $query455 = $conn->query($sqlzy3455);
                                    foreach ($query455 as $value45) {
                                        $yyy ++;
                                    }

                                    if ($yyy > 0) {
                                        ?>
                                        <div class="mt-container mx-auto">
                                            <div class="timeline-line">



                                                <div class="item-timeline timeline-primary">
                                                    <div class="t-dot" data-original-title="" title="">
                                                    </div>
                                                    <div class="t-text">
                                                        <p><span style="font-size: 20px;">You have some unread messages</span></p>
                                                        <a style="float: right;" class="badge btn btn-info" href="SellerInbox.php">Check</a>
                                                    </div>
                                                </div>





                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>


                        <br>
                        <br>
                        <div class="col-md-12">

                            <div class="widget widget-account-invoice-three">

                                <div class="widget-heading">
                                    <div class="wallet-usr-info">
                                        <div class="usr-name">
                                            <span><img src="assets/img/profile-32.jpg" alt="admin-profile" class="img-fluid"> <?php echo $sellernameinfull; ?></span>
                                        </div>
                                        <div class="add">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
                                        </div>
                                    </div>
                                    <?php
                                    $sqlzy34 = "SELECT * FROM sellerratingz where selleremailz='$selleremail'";
                                    $query4 = $conn->query($sqlzy34);
                                    $isellerrank = 0;
                                    $sellerlevelneed = 0;
                                    foreach ($query4 as $value4) {
                                        
                                    }
                                    ?>

                                    <div class="wallet-balance">
                                        <p>Seller Level</p>
                                        <?php
                                        if ($value4['ratingz'] >= 0 && $value4['ratingz'] < 100) {
                                            $sellerlevelneed = 1;
                                            ?>
                                            <h5 class=""><span class="w-currency"></span>1</h5>
                                            <?php
                                        } else if ($value4['ratingz'] >= 100 && $value4['ratingz'] < 300) {
                                            $sellerlevelneed = 2;
                                            ?>
                                            <h5 class=""><span class="w-currency"></span>2</h5>
                                            <?php
                                        } else if ($value4['ratingz'] >= 300 && $value4['ratingz'] < 600) {
                                            $sellerlevelneed = 3;
                                            ?>
                                            <h5 class=""><span class="w-currency"></span>3</h5>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="wallet-balance">
                                        <p>Seller Points</p>
                                        <h5 class=""><span class="w-currency"></span><?php echo $value4['ratingz']; ?></h5>
                                    </div>
                                    <div class="wallet-balance">
                                        <p>Next level gained points at </p>

                                        <?php
                                        if ($sellerlevelneed == 1) {
                                            ?>
                                            <h5 class=""><span class="w-currency"></span>100</h5>
                                            <?php
                                        } else if ($sellerlevelneed == 2) {
                                            ?>
                                            <h5 class=""><span class="w-currency"></span>300</h5>
                                            <?php
                                        } else if ($sellerlevelneed == 3) {
                                            ?>
                                            <h5 class=""><span class="w-currency"></span>600</h5>
                                            <?php
                                        }
                                        ?>
                                    </div>




                                </div>

                                <div class="widget-amount">

                                    <?php
                                    $sqlzorder = "SELECT count(idorderdetails) as x from   orderdetailz where selleridz='$selleremail'";
                                    $resultorder = $conn->query($sqlzorder);


                                    $ordercount = "";

                                    if ($resultorder->num_rows > 0) {

                                        if ($roworder = $resultorder->fetch_assoc()) {


                                            $ordercount = $roworder["x"];
                                        }
                                    } else {
                                        $ordercount = 0;
                                    }
                                    ?>


                                    <div class="w-a-info funds-received">
                                        <span>Order received <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
                                        <p><?php echo $ordercount; ?></p>
                                    </div>
                                    <?php
                                    $sqlzorderitem = "SELECT count(idsld) as x from   solitems where selleremail='$selleremail'";
                                    $resultorderitem = $conn->query($sqlzorderitem);


                                    $ordercountitem = "";

                                    if ($resultorderitem->num_rows > 0) {

                                        if ($roworderitem = $resultorderitem->fetch_assoc()) {


                                            $ordercountitem = $roworderitem["x"];
                                        }
                                    } else {
                                        $ordercountitem = 0;
                                    }
                                    ?>


                                    <div class="w-a-info funds-spent">
                                        <span>Item posted <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                                        <p><?php echo $ordercountitem; ?></p>
                                    </div>
                                </div>

                                <div class="widget-content">



                                    <div class="invoice-list">

                                        <center>
                                            <div class="inv-action">
                                                <a  class="btn btn-outline-primary view-details" href="SellerViewSellerRatingz.php">View my rating </a>
                                            </div>
                                        </center>
                                    </div>
                                </div>

                            </div>
                        </div>



















                    </div>

                </div>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">Nipuna Liyanage</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>
            </div>
            <!--  END CONTENT PART  -->

        </div>
        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script>
                                        $(document).ready(function() {
                                            App.init();
                                        });
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/apex/apexcharts.min.js"></script>
        <script src="assets/js/dashboard/dash_1.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
                                        function Logzoutzbuyer() {
                                            var k = "g";
                                            $.post("../phpfiles/userlogout.php",
                                                    {
                                                        pw: k

                                                    },
                                            function(data, status) {

                                                if (data == "ok") {


                                                    swal("Logout sucess...!", {
                                                        icon: "success",
                                                    });
                                                    window.location = "../register.php";


                                                }

                                            });
                                        }
        </script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    </body>


</html>