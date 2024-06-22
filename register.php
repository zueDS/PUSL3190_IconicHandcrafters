<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Iconic Hand Crafters | Login/ Register</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/main.css">
    </head>

    <body>
        <?php
        include './headerandmobileheader.php';
        ?>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Login / Register
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Login</h3>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="email"  id="loginz-email" class="form-control" placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"  id="loginz-password" class="form-control" placeholder="Password"/>
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">

                                            </div>
<!--                                            <a class="text-muted" href="#">Forgot password?</a>-->
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up" onclick="Loginuserss()" name="login">Log in</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Create an Account</h3>
                                        </div>
                                        <p class="mb-50 font-sm">
                                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy
                                        </p>

                                        <div class="form-group">
                                            <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="telephone" value="" placeholder="Contact Number" id="input-telephone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address_1" value="" placeholder="Address" id="input-address-1" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <select name="country_id" id="input-district" class="form-control" onchange="LoadCity()" >
                                                <option>Select District</option>
                                                <?php
                                                //Load District
                                                include 'phpfiles/DB.php';
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
                                        <div class="form-group">
                                            <select name="country_id" id="input-city" class="form-control">
                                                <option>None</option>


                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm" value="" placeholder="Confirm Password" id="input-confirm" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <select name="country_id" id="input-usertype" class="form-control">
                                                <option>Registered as</option>


                                                <option>Buyer</option>
                                                <option>Seller</option>

                                            </select>
                                        </div>
                                        <center>
                                            <div class="form-group">
                                                <button type="button" onclick="registeruser()" class="btn btn-fill-out btn-block hover-up" name="login">Submit &amp; Register</button>
                                            </div>
                                        </center>


                                        <div class="text-muted text-center">Already have an account? <a href="#">Sign in now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include './Footer.php';
    ?>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="assets/js/plugins/jquery.theia.sticky.js"></script>
    <!-- Template  JS -->
    <script src="assets/js/main.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="Controllers/User_register_controller.js"></script>
    <script type="text/javascript">
                                                    function Loginuserss() {

                                                        var emailz = $('#loginz-email').val();
                                                        var passwords = $('#loginz-password').val();


                                                        if (emailz == "" || passwords == "") {

                                                            swal("Error!", "Please fill all  mandatory feilds....!", "error");
                                                        } else {

                                                            $.post("phpfiles/User_Login.php",
                                                                    {
                                                                        uname: emailz,
                                                                        passwordz: passwords

                                                                    },
                                                            function(data, status) {
                                                                if (data == "Buyer") {


                                                                    swal("Login Sucessfully...!", {
                                                                        icon: "success",
                                                                    });

                                                                    setTimeout(rideirecttoShop(), 56000);


                                                                }
                                                                else if (data == "Seller") {

                                                                    swal("Login Sucessfully...!", {
                                                                        icon: "success",
                                                                    });

                                                                    setTimeout(sellerDashboard(), 56000);

                                                                }
                                                                else if (data == "Invalid") {
                                                                    swal("Error!", "Invalid Login details....!", "error");

                                                                } else {

                                                                    alert(data);
                                                                }

                                                            });
                                                        }

                                                    }

                                                    function rideirecttoShop() {

                                                         window.location = "shop.php";
                                                    }

                                                    function sellerDashboard() {

                                                        window.location = "Seller/SellerHome.php";
                                                    }

    </script>
</body>


</html>