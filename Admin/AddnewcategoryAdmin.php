<!doctype html>
<html lang="en">


    <head>

        <meta charset="utf-8" />
        <title>Admin | Add new Category</title>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Iconic handcrafters</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                                        <li class="breadcrumb-item active">Add new category</li>
                                    </ol>
                                </div>
                            </div>

                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Add New Category</h4>
                                        <form class="login-form" method="POST" action="../phpfiles/Admin_add_new_category.php" enctype="multipart/form-data"  id="form">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Category name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"  id="categoryname" name="categoryname">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Image icon of category</label>
                                                <div class="col-md-10">
                                                    <input type='file' onchange="readURL(this);" accept="image/*" name="thumbimage"  placeholder="Thumbnail Image"/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">

                                                <div class="col-md-10">
                                                    <img style="display: none;border: 2px solid black;" id="blah"  alt="Thumbnail Image" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">

                                                <div class="col-md-10">
                                                    <button type="submit" class="form-control btn btn-success">Save Data</button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <!-- end row -->


                        <!-- end row -->


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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                                $('#blah')
                                                        .attr('src', e.target.result)
                                                        .width(500)
                                                        .height(300);
                                            };
                                            reader.readAsDataURL(input.files[0]);
                                            document.getElementById("blah").style.display = "block";
                                        }
                                    }
        </script>

        <script>
            $("#form").on('submit', (function(e) {


                e.preventDefault();
                $.ajax({
                    url: "../phpfiles/adminzaddnewcategory.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function()
                    {
                        //$("#preview").fadeOut();
                        //  $("#err").fadeOut();
                    },
                    success: function(data)
                    {

                        if (data == 'empty') {

                            swal("Error", "Please Fill All feilds to continue...!", "error");
                        }

                        else
                        {
                            swal("Done", "New Category Added....!", "sucess");
                            window.location = "AddnewcategoryAdmin.php";
                        }
                    },
                    error: function(e)
                    {
                        $("#err").html(e).fadeIn();
                    }
                });
            }));
            $("#form").bind('ajax:complete', function() {

                swal("Done", "Your Payment Has send TO Admin Aproovals....!", "sucess");



            });
        </script>

    </body>

</html>