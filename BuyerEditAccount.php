<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Buyer - My orders</title>
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
    
    <!--============= Header Section Ends Here =============-->
   
        <body>
            <?php
            include './headerandmobileheader.php';
            ?>
             <?php
    if (!(isset($_SESSION["user_id"]))) {
        header('Location:register.php');
    } else {
        ?>
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index.php" rel="nofollow">Home</a>
                        <span></span> Buyer
                        <span></span> My Account
                    </div>
                </div>
            </div>
            <section class="pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="dashboard-menu">
                                        <ul class="nav flex-column" role="tablist">
                                            <li class="nav-item ">
                                                <a class="nav-link" href="User_Myaccount.php"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="User_myorders.php"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="UserTrackorders.php"><i class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="UserOffercoupon.php"><i class="fi-rs-marker mr-10"></i>Offer coupon to friend</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active"  href="BuyerEditAccount.php" ><i class="fi-rs-user mr-10"></i>Account details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <div class="tab-content dashboard-content">

                                        <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Current details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">


                                                        <?php
                                                        include './Phpfiles/DB.php';
                                                        $buye_emailz = $_SESSION["emailz"];



                                                        $sqlzy34 = "SELECT * FROM user_details where email='$buye_emailz'";
                                                        $query4 = $conn->query($sqlzy34);
                                                        $increment = 0;
                                                        foreach ($query4 as $value4) {
                                                            ?>         


                                                            <div class="form-group col-md-6">
                                                                <label>First Name <span class="required">*</span></label>
                                                                <input disabled="" class="form-control square" value="<?php echo $value4['firstname']; ?>">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Last Name <span class="required">*</span></label>
                                                                <input disabled="" class="form-control square" value="<?php echo $value4['lastname']; ?>">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Contact number <span class="required">*</span></label>
                                                                <input disabled="" class="form-control square" value="<?php echo $value4['contactnumber']; ?>">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Address <span class="required">*</span></label>
                                                                <input disabled="" class="form-control square" value="<?php echo $value4['addressz']; ?>">
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="tab-content dashboard-content">

                                        <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">New details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">



                                                        <div class="form-group col-md-6">
                                                            <label>First Name <span class="required">*</span></label>
                                                            <input  class="form-control square"  id="firstnamez">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Last Name <span class="required">*</span></label>
                                                            <input  class="form-control square"  id="lasnamez">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Contact number <span class="required">*</span></label>
                                                            <input  class="form-control square"  id="contactzt">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Address <span class="required">*</span></label>
                                                            <input  class="form-control square"  id="addressze">
                                                        </div>



                                                        <div class="col-md-12">
                                                            <button type="button" class="btn btn-fill-out submit" onclick="updatedetailz()" >update details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="tab-content dashboard-content">

                                        <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Change passwords</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">



                                                        <div class="form-group col-md-6">
                                                            <label>Current password <span class="required">*</span></label>
                                                            <input  class="form-control square"  id="curpw" placeholder="Enter current password" type="password">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>New Password <span class="required">*</span></label>
                                                            <input  class="form-control square"  id="newpw1" placeholder="Enter new password" type="password">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Confirm new password <span class="required">*</span></label>
                                                            <input  class="form-control square"  id="newpw2" placeholder="confirm new password" type="password">
                                                        </div>




                                                        <div class="col-md-12">
                                                            <button type="button" class="btn btn-fill-out submit" onclick="changepasswordz()" >Change password</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

        <script>

                                                                function updatedetailz() {
                                                                    var fnamez = $('#firstnamez').val();
                                                                    var lnamez = $('#lasnamez').val();
                                                                    var contactz = $('#contactzt').val();
                                                                    var addressz = $('#addressze').val();


                                                                    if (fnamez == "" || lnamez == "" || contactz == "" || addressz == "") {

                                                                        swal("Error!", "Please fill feilds....!", "error");
                                                                    } else {

                                                                        swal({
                                                                            title: "Are you sure?",
                                                                            text: "You want  to update details?",
                                                                            icon: "warning",
                                                                            buttons: true,
                                                                            dangerMode: true,
                                                                        })
                                                                                .then(function(willDelete) {
                                                                                    if (willDelete) {

                                                                                        $.post("phpfiles/updatedetailz.php",
                                                                                                {
                                                                                                    fnamez: fnamez,
                                                                                                    lnamez: lnamez,
                                                                                                    contactz: contactz,
                                                                                                    addressz: addressz

                                                                                                },
                                                                                        function(data, status) {
                                                                                            if (data == "ok") {


                                                                                                swal("Done! Details updated..!", {
                                                                                                    icon: "success",
                                                                                                });

                                                                                                window.location = "BuyerEditAccount.php";


                                                                                            } else {

                                                                                                alert(data);

                                                                                            }

                                                                                        });




                                                                                    } else {

                                                                                    }
                                                                                });

                                                                    }

                                                                }


                                                                function changepasswordz() {
                                                                    var cirpwz = $('#curpw').val();
                                                                    var newpwz = $('#newpw1').val();
                                                                    var newpw2 = $('#newpw2').val();


                                                                    if (cirpwz == "" || newpwz == "" || newpw2 == "") {

                                                                        swal("Error!", "Please fill feilds....!", "error");
                                                                    } else if (!(newpwz == newpw2)) {

                                                                        swal("Error!", "new passwords are not matched....!", "error");
                                                                    } else {

                                                                        swal({
                                                                            title: "Are you sure?",
                                                                            text: "You want to update change the passwords?",
                                                                            icon: "warning",
                                                                            buttons: true,
                                                                            dangerMode: true,
                                                                        })
                                                                                .then(function(willDelete) {
                                                                                    if (willDelete) {

                                                                                        $.post("phpfiles/updatepasswordz.php",
                                                                                                {
                                                                                                    cirpwz: cirpwz,
                                                                                                    newpw2: newpw2

                                                                                                },
                                                                                        function(data, status) {
                                                                                            if (data == "ok") {


                                                                                                swal("Done! Details updated..!", {
                                                                                                    icon: "success",
                                                                                                });

                                                                                                window.location = "register.php";


                                                                                            } else if (data == "notm") {

                                                                                                swal("Error!", "Current passwords are not matched...!", "error");

                                                                                            } else {
                                                                                                alert(data);
                                                                                            }

                                                                                        });




                                                                                    } else {

                                                                                    }
                                                                                });

                                                                    }

                                                                }


        </script>
         <?php
}
?>
    </body>

   
</html>