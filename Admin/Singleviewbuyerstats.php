<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="utf-8" />
        <title>Admin single View buyer Ratings</title>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4>All  buyer</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">iconic Handcrafters</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                        <li class="breadcrumb-item active"> buyer details</li>
                                    </ol>
                                </div>
                            </div>

                        </div>
                        <!-- end page title -->


                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Items purchased by buyer</h4>
                                        <p class="card-title-desc">Here you can view all the items purchased by buyer 
                                        </p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Item ID</th>
                                                    <th>Item Name</th>
                                                    <th>Qty</th>
                                                    <th>Unit price</th>
                                                    <th>Date</th>                                                    
                                                    <th>Time</th>




                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                include '../phpfiles/DB.php';



                                                $buyerz_id_loadingz = $_GET["buyeremailz"];

                                                $sqlzy34 = "SELECT * FROM solitems where buyeremailz ='$buyerz_id_loadingz'";
                                                $query4 = $conn->query($sqlzy34);
                                                $incrementz = 0;
                                                $totalitem = 0;
                                                foreach ($query4 as $value4) {
                                                    $incrementz++;
                                                    $totalitem = $totalitem + 1;
                                                    ?> 
                                                    <tr>

                                                        <td><?php echo $incrementz; ?></td>
                                                        <td><img src="../Phpfiles/<?php echo $value4['thumbimagepathz']; ?>" style="width: 100px;height: 100px;"/></td>
                                                        <td><?php echo $value4['itemidgenarated']; ?></td>
                                                        <td ><?php echo $value4['itemname']; ?></td>
                                                        <td><?php echo $value4['qty']; ?></td>
                                                        <td><?php echo $value4['unitprice']; ?></td>
                                                        <td><?php echo $value4['datez']; ?></td>
                                                        <td><?php echo $value4['timez']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>


                                        </table>
                                        <center>
                                            <p class="card-title-desc" style="font-size: 25px;color: orange;">Total items purchased by this buyer is <?php echo $totalitem; ?> 
                                            </p>
                                        </center>
                                    </div>
                                </div>




                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Reviews posted by this buyer</h4>
                                        <p class="card-title-desc">Here you can view all the reviews posted by this buyer
                                        </p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item ID</th>
                                                    <th>Item Name</th>
                                                    <th>Comment</th>
                                                    <th>Start count</th>
                                                    <th>Posted to seller</th>   
                                                    <th>Date</th>
                                                    <th>Time</th>




                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $sqlzy34z = "SELECT * FROM itemhasreview where posteduseremail ='$buyerz_id_loadingz'";
                                                $query4z = $conn->query($sqlzy34z);
                                                $incrementzz = 0;
                                                $totalitemz = 0;
                                                foreach ($query4z as $value4z) {
                                                    $incrementzz++;
                                                    $totalitemz = $totalitemz + 1;
                                                    ?> 
                                                    <tr>

                                                        <td><?php echo $incrementzz; ?></td>
                                                        <td><?php echo $value4z['itemidz']; ?></td>
                                                        <td ><?php echo $value4z['itemname']; ?></td>
                                                        <td ><?php echo $value4z['commentz']; ?></td>
                                                        <td ><?php echo $value4z['startcount']; ?></td>
                                                        <td ><?php echo $value4z['selleremailz']; ?></td>
                                                        <td ><?php echo $value4z['datez']; ?></td>
                                                        <td ><?php echo $value4z['timez']; ?></td>
                                                        <?php
                                                    }
                                                    ?>
                                            </tbody>


                                        </table>
                                        <center>
                                            <p class="card-title-desc" style="font-size: 25px;color: orange;">Total reviews posted by this buyer is <?php echo $totalitemz; ?> 
                                            </p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
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


    </body>
    <script>

                                    function loadStas(dd) {

                                        var userid = dd;

                                        var emailzofseller = $('#sellerid' + dd).val();
                                        var url = "SingleviewSellerstats.php?selleremailz=" + emailzofseller;


                                    }

    </script>

</html>