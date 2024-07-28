<!DOCTYPE html>
<html lang="en">



    <head>

        <meta charset="utf-8" />
        <title>Admin view all sellers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

               <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="AdminHome.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="AdminHome.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>


                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </button>
                        </div>

                        


                    </div>
                </div>
            </header>
            <?php
            include './leftsidebar.php';
            ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->

                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">All sellers</h4>
                                        <p class="card-title-desc"> Here are the all registered sellers.
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                        <th>Address</th>
                                                        <th>District</th>
                                                        <th>City</th>
                                                        <th>User type</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    include '../phpfiles/DB.php';





                                                    $sqlzy34 = "SELECT * FROM user_details where usertype='Seller'";
                                                    $query4 = $conn->query($sqlzy34);

                                                    foreach ($query4 as $value4) {

                                                        $stateofuser = $value4['userstatus'];
                                                        ?>
                                                        <tr>

                                                            <td><?php echo $value4['firstname']; ?> <?php echo $value4['lastname']; ?></td>

                                                            <td ><?php echo $value4['email']; ?></td>
                                                            <td><?php echo $value4['contactnumber']; ?></td>
                                                            <td id="dd"><?php echo $value4['addressz']; ?></td>
                                                            <td><?php echo $value4['district']; ?></td>
                                                            <td><?php echo $value4['city']; ?></td>
                                                            <?php
                                                            if ($stateofuser == "Active") {
                                                                ?>
                                                                <td><span class="badge rounded-pill bg-success"><?php echo $stateofuser; ?> </span></td>
                                                                <td> <button class="btn btn-danger waves-effect waves-light" onclick="RemoveUserz(<?php echo $value4['id_user']; ?>)">Remove user</button></td>
                                                                <?php
                                                            } else if ($stateofuser == "Removed") {
                                                                ?>
                                                                <td><span class="badge rounded-pill bg-danger"><?php echo $stateofuser; ?> </span></td>
                                                                <td> <button class="btn btn-success waves-effect waves-light" onclick="ActiceUserz(<?php echo $value4['id_user']; ?>)">Active user</button></td>
                                                                <?php
                                                            }
                                                            ?>




                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                © <script>document.write(new Date().getFullYear())</script> Iconic handcrafters <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Nipuna Liyanage.</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div> 

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
                                    function RemoveUserz(dd) {

                                        var userid = dd;



                                        swal({
                                            title: "Are you sure?",
                                            text: "You want to remove this seller ?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                        })
                                                .then(function(willDelete) {
                                                    if (willDelete) {

                                                        $.post("../phpfiles/Admin_removeuser.php",
                                                                {
                                                                    userid: userid

                                                                },
                                                        function(data, status) {
                                                            if (data == "ok") {


                                                                swal("Done!User Removed..!", {
                                                                    icon: "success",
                                                                });

                                                                window.location = "Allsellers.php";


                                                            } else {

                                                                swal("Error!", "" + data, "error");

                                                            }

                                                        });




                                                    } else {

                                                    }
                                                });


                                    }
                                    
                                    
                                    function ActiceUserz(dd) {

                                        var userid = dd;



                                        swal({
                                            title: "Are you sure?",
                                            text: "You want to activate this seller ?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                        })
                                                .then(function(willDelete) {
                                                    if (willDelete) {

                                                        $.post("../phpfiles/Admin_activeeuser.php",
                                                                {
                                                                    userid: userid

                                                                },
                                                        function(data, status) {
                                                            if (data == "ok") {


                                                                swal("Done!User Activated..!", {
                                                                    icon: "success",
                                                                });

                                                                window.location = "Allsellers.php";


                                                            } else {

                                                                swal("Error!", "" + data, "error");

                                                            }

                                                        });




                                                    } else {

                                                    }
                                                });


                                    }

        </script>
    </body>


</html>