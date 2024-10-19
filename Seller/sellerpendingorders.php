<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Pending order Details </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
        <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
        <!-- END PAGE LEVEL STYLES -->

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Pending order Details</span></li>
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

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="row layout-top-spacing">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">


                            <div class="widget-content widget-content-area br-6">

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Pending orders</h4>
                                    </div>                 
                                </div>
                                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order ID</th>
                                            <th>Item name</th>
                                            <th>Item ID</th>
                                            <th>Unit Price</th>
                                            <th>Qty</th>
                                            <th>ordered date</th>
                                            <th>ordered time</th>
                                            <th class="no-content">Actions</th>
                                            <th class="no-content">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../Phpfiles/DB.php';
                                        session_start();
                                        $sellerz_emailz = $_SESSION["emailz"];



                                        $sqlzy34 = "SELECT * FROM orderdetailz where selleridz='$sellerz_emailz' and sellerstatusz='Notready'";
                                        $query4 = $conn->query($sqlzy34);
                                        foreach ($query4 as $value4) {

                                            $orderz = $value4['orderidgenarated'];
                                            ?>

                                            <tr>
                                                <td><img src="../Phpfiles/<?php echo $value4['impathz']; ?>" style="width: 100px;height: 100px;"></td>
                                                <td><?php echo $value4['orderidgenarated']; ?></td>
                                                <td><?php echo $value4['itemname']; ?></td>
                                                <td><?php echo $value4['idgenareted']; ?></td>
                                                <td><?php echo $value4['unitprice']; ?></td>
                                                <td><?php echo $value4['qty']; ?></td>
                                                <?php
                                                $sqlz = "SELECT * FROM orderz where orderidgenarated='$orderz'";
                                                $result = $conn->query($sqlz);

                                                if ($result->num_rows > 0) {

                                                    if ($row = $result->fetch_assoc()) {
                                                        ?>

                                                        <td><?php echo $row["datez"]; ?></td>
                                                        <td><?php echo $row["timez"]; ?></td>
                                                        <?php
                                                    }
                                                    ?>
                                            <input type="hidden" id="ordidz<?php echo $value4['idorderdetails']; ?>" value="<?php echo $value4['orderidgenarated']; ?>">
                                            <td><button class="btn btn-success" onclick="removeItem(<?php echo $value4['idorderdetails']; ?>)">Make Order ready</button></td>
                                            <td><button class="btn btn-success" onclick="openlinkinnewTab(<?php echo $value4['idorderdetails']; ?>)">View Order</button></td>

                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Order ID</th>
                                            <th>Item name</th>
                                            <th>Item ID</th>
                                            <th>Unit Price</th>
                                            <th>Qty</th>
                                            <th>ordered date</th>
                                            <th>ordered time</th>
                                            <th class="no-content">Actions</th>
                                            <th class="no-content">Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
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
            <!--  END CONTENT AREA  -->
        </div>
        <!-- END MAIN CONTAINER -->



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

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plugins/table/datatable/datatables.js"></script>
        <script>
                                                $('#zero-config').DataTable({
                                                    "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                                                            "<'table-responsive'tr>" +
                                                            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                                                    "oLanguage": {
                                                        "oPaginate": {"sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'},
                                                        "sInfo": "Showing page _PAGE_ of _PAGES_",
                                                        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                                                        "sSearchPlaceholder": "Search...",
                                                        "sLengthMenu": "Results :  _MENU_",
                                                    },
                                                    "stripeClasses": [],
                                                    "lengthMenu": [7, 10, 20, 50],
                                                    "pageLength": 7
                                                });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
                                                function removeItem(dd) {

                                                    var userid = dd;
                                                    var idgenarated = $('#ordidz' + dd).val();



                                                    swal({
                                                        title: "Are you sure?",
                                                        text: "You want to mark this order as ready ?",
                                                        icon: "warning",
                                                        buttons: true,
                                                        dangerMode: true,
                                                    })
                                                            .then(function(willDelete) {
                                                                if (willDelete) {

                                                                    $.post("../phpfiles/Seller_mark_ordeready.php",
                                                                            {
                                                                                idgenarated: idgenarated

                                                                            },
                                                                    function(data, status) {
                                                                        if (data == "ok") {


                                                                            swal("Done!Order Marked as ready!", {
                                                                                icon: "success",
                                                                            });
                                                                            
                                                                            window.location = "sellerpendingorders.php";


                                                                        } else {

                                                                            swal("Error!", "" + data, "error");

                                                                        }

                                                                    });




                                                                } else {

                                                                }
                                                            });


                                                }






        </script>
        <script>
            function openlinkinnewTab(dd) {

                var userid = dd;
                var idgenarated = $('#ordidz' + dd).val();
                var url = "singleviewOrderDetails.php?orderid=" + idgenarated
                window.open(url);
                
                
                
            }

        </script>
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>

</html>