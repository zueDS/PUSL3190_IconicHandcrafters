<!doctype html>
<html lang="en">


    <head>

        <meta charset="utf-8" />
        <title>Admin | Add new Delivery person</title>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Delivery person</a></li>
                                        <li class="breadcrumb-item active">Add new person</li>
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

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Person name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"  id="input-firstnamez">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Email </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"   id="input-emailz">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password"   id="input-passwordz" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">NIC </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"   id="input-nicz">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Contact 1 </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"   id="input-telephone1z">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Contact 2 </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"   id="input-telephone2z">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select district </label>
                                            <div class="col-md-10">
                                                <select name="country_id" id="input-districtz" class="form-control" onchange="LoadCityz()" >
                                                    <option>Select District</option>
                                                    <?php
                                                    //Load District
                                                    include '../Phpfiles/DB.php';
                                                    $sqlzy34 = "SELECT * FROM districts where status='Active'";
                                                    $query4 = $conn->query($sqlzy34);
                                                    foreach ($query4 as $value4) {
                                                        ?>
                                                        <option value="<?php echo $value4['disnamez']; ?>"><?php echo $value4['disnamez']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select city </label>
                                            <div class="col-md-10">
                                                <select name="country_id" id="input-cityz" class="form-control">
                                                    <option>None</option>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">

                                            <div class="col-md-10">
                                                <button type="button" class="form-control btn btn-success" onclick="registerdel()">Register</button>

                                            </div>
                                        </div>

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

                                    function LoadCityz() {

                                        var getval = document.getElementById('input-districtz').value;

                                        $.post("../phpfiles/User_register_load_city.php",
                                                {
                                                    districtname: getval

                                                },
                                        function(data, status) {


                                            var cities = JSON.parse(data);
                                            $('#input-city').empty();
                                            for (var i = 0; i < cities.length; i++) {
                                                $('#input-cityz').append('<option>' + cities[i].city + '</option>');
                                            }



                                        });

                                    }

                                    function registerdel() {

                                        var fname = $('#input-firstnamez').val();
                                        var nic = $('#input-nicz').val();
                                        var email = $('#input-emailz').val();
                                        var contact1 = $('#input-telephone1z').val();
                                        var contact2 = $('#input-telephone2z').val();
                                        var district = $('#input-districtz option:selected').text();
                                        var cityz = $('#input-cityz option:selected').text();
                                        var passwordz1 = $('#input-passwordz').val();


                                        if (fname == "" || nic == "" || email == "" || contact1 == "" || contact2 == "" || passwordz1 == "") {

                                            swal("Error!", "Please fill all  mandatory feilds....!", "error");
                                        } else if (district == "Select District") {

                                            swal("Error!", "Please select valid district....!", "error");
                                        } else if (cityz == "None" || cityz == "Select city" || cityz == "") {

                                            swal("Error!", "Please select valid City....!", "error");
                                        } else if ((contact1.length > 10) || (contact1.length < 10)) {

                                            swal("Error!", "Please enter valid contact number 10 digits....!", "error");
                                        } else if ((contact2.length > 10) || (contact2.length < 10)) {

                                            swal("Error!", "Please enter valid contact number 10 digits....!", "error");
                                        } else {

                                            $.post("../phpfiles/addnewdeliveryperson.php",
                                                    {
                                                        fname: fname,
                                                        nic: nic,
                                                        email: email,
                                                        contact1: contact1,
                                                        contact2: contact2,
                                                        district: district,
                                                        cityz: cityz,
                                                        passwordz1: passwordz1

                                                    },
                                            function(data, status) {
                                                if (data == "ok") {


                                                    swal("Done..!Delivery person registered Sucessfully...!", {
                                                        icon: "success",
                                                    });

                                                    window.location = "Deliverypersondetails.php";


                                                }
                                                else if (data == "Already") {
                                                    swal("Error!", "This Email is already taken....!", "error");

                                                } else {

                                                    alert(data);
                                                }

                                            });
                                        }


                                    }

        </script>

    </body>

</html>