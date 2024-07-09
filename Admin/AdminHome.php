<!doctype html>
<html lang="en">


    <head>

        <meta charset="utf-8" />
        <title>Admin Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body data-sidebar="dark">

        <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="AdminHome.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../assets/tstlogz.png" alt="" style="width: 70px;height: 70px;">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/tstlogz.png" alt="" style="width: 70px;height: 70px;">
                                </span>
                            </a>

                            <a href="AdminHome.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/tstlogz.png" alt="" style="width: 70px;height: 70px;">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/tstlogz.png" alt="" style="width: 70px;height: 70px;"> 
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
            <!-- ========== Left Sidebar Start ========== -->
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
                                    <h4>Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Iconic Handcrafters</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>

                        </div>
                        <!-- end page title -->

                        <div class="row">


                            <?php
                            include '../phpfiles/DB.php';





                            $sqlzy34 = "SELECT COUNT(idorderz) as x FROM orderz ";
                            $query4 = $conn->query($sqlzy34);
                            $ordercount_loading = 0;
                            foreach ($query4 as $value4) {
                                $ordercount_loading = $value4['x'];
                            }
                            ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Orders</h6>

                                            <span class="badge bg-info"> <h2 class="mb-4 text-white"><?php echo $ordercount_loading; ?></h2> </span> 
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <?php
                            $sqlzy3422 = "SELECT * FROM orderz where statusz='completed' ORDER BY idorderz DESC";
                            $query422 = $conn->query($sqlzy3422);
                            $increz = 0;
                            $nettotalloadz = 0;
                            foreach ($query422 as $value422) {


                                $v2 = $value422['ordernetcost'];
                                $flo2 = (float) $v2;


                                $nettotalloadz = $nettotalloadz + $v2;
                            }
                            ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Order Total</h6>

                                            <span class="badge bg-danger"><h2 class="mb-4 text-white">LKR <?php echo $nettotalloadz; ?> /=</h2></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $sqlzy34cc = "SELECT * FROM userhascoupoun ORDER BY id DESC";
                            $query4cc = $conn->query($sqlzy34cc);
                            $coupnettotal = 0;
                            foreach ($query4cc as $value4cc) {
                                $cz = $value4cc['amountzcoupon'];
                                $cz2 = (float) $cz;
                                if ($value4cc['payementstatz'] == "notpayed") {
                                    
                                } else {
                                    $coupnettotal = $coupnettotal + $cz2;
                                }
                            }
                            ?>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Coupon Total</h6>

                                            <span class="badge bg-warning"> <h2 class="mb-4 text-white">LKR <?php echo $coupnettotal; ?> /=</h2> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <?php
                            $sqlzy341 = "SELECT COUNT(idsld) as xy FROM solitems";
                            $query41 = $conn->query($sqlzy341);
                            $ordercount_loadingyy = 0;
                            foreach ($query41 as $value41) {
                                $ordercount_loadingyy = $value41['xy'];
                            }
                            ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Product Sold</h6>

                                            <span class="badge bg-info">  <h2 class="mb-4 text-white"><?php echo $ordercount_loadingyy; ?></h2></span>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                        <!-- end row -->


                        <!-- end row -->

                        <div class="row">


                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Orders</h4>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-centered table-vertical table-nowrap mb-1">

                                                <tbody>


                                                    <?php
                                                    $sqlzy34 = "SELECT * FROM orderz  ORDER BY idorderz DESC";
                                                    $query4 = $conn->query($sqlzy34);
                                                    $increz = 0;
                                                    foreach ($query4 as $value4) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value4['orderidgenarated']; ?></td>
                                                            <td>
                                                                <img src="assets/buyer.png" alt="user-image" class="avatar-xs me-2 rounded-circle" /> <?php echo $value4['nameinfull']; ?>
                                                            </td>
                                                            <?php
                                                            if($value4['statusz'] =="completed"){
                                                            ?>
                                                            <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                                            <?php
                                                            }else if($value4['statusz'] =="Pending"){
                                                            ?>
                                                             <td><span class="badge rounded-pill bg-warning">Pending</span></td>
                                                             <?php
                                                            }else{
                                                             ?>
                                                             <td><span class="badge rounded-pill bg-warning">Assigned</span></td>
                                                             <?php
                                                            }
                                                             ?>
                                                            <td>
                                                                LKR <?php echo $value4['ordernetcost']; ?> /=
                                                            </td>
                                                            <td>
                                                               <?php echo $value4['datez']; ?>
                                                            </td>
                                                            <td>
                                                               <?php echo $value4['timez']; ?>
                                                            </td>

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
                        </div>
                        <!-- end row -->


                    </div>
                    <!-- container-fluid -->
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

        <!--Morris Chart-->
        <script src="assets/libs/morris.js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>



</html>