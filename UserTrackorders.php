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
                        <span></span> Track Orders
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
                                                <a class="nav-link active" href="UserTrackorders.php"><i class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="UserOffercoupon.php"><i class="fi-rs-marker mr-10"></i>Offer coupon to friend</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  href="BuyerEditAccount.php" ><i class="fi-rs-user mr-10"></i>Account details</a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="tab-content dashboard-content">

                                        <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">My Track orders</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Order ID</th>
                                                                    <th>Date</th>
                                                                    <th>Time</th>
                                                                    <th>Status</th>
                                                                    <th>Order Sub total</th>
                                                                    <th>Order delivery cost</th>
                                                                    <th>Order net total</th>
                                                                    <th>Order address</th>
                                                                    <th>Order name</th>
                                                                    <th>Order contact</th>
                                                                    <th>Actions</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                include './Phpfiles/DB.php';
                                                                $buye_emailz = $_SESSION["emailz"];



                                                                $sqlzy34 = "SELECT * FROM orderz where buyeremailaddressz='$buye_emailz' and statusz !='Ready'";
                                                                $query4 = $conn->query($sqlzy34);
                                                                $increment = 0;
                                                                foreach ($query4 as $value4) {
                                                                    $increment++;
                                                                    $orderz = $value4['orderidgenarated'];
                                                                    $orderzstat = $value4['statusz'];
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $increment; ?></td>
                                                                        <td><?php echo $value4['orderidgenarated']; ?></td>
                                                                        <td><?php echo $value4['datez']; ?></td>
                                                                        <td><?php echo $value4['timez']; ?></td>
                                                                        <?php
                                                                        if ($orderzstat == "completed") {
                                                                            ?>
                                                                            <td><span class="badge rounded-pill bg-success"><?php echo $value4['statusz']; ?></span></td>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <td><span class="badge rounded-pill bg-warning"><?php echo $value4['statusz']; ?></span></td>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        <td><?php echo $value4['ordersubz']; ?></td>
                                                                        <td><?php echo $value4['orderdelcost']; ?></td>
                                                                        <td><?php echo $value4['orderdelcost']; ?></td>
                                                                        <td><?php echo $value4['addressz']; ?></td>
                                                                        <td><?php echo $value4['nameinfull']; ?></td>
                                                                        <td><?php echo $value4['contactz']; ?></td>
                                                                <input type="hidden" value="<?php echo $value4['orderidgenarated']; ?>" id="orderzid<?php echo $value4['idorderz']; ?>">
                                                                <input type="hidden" value="<?php echo $orderzstat; ?>" id="orderstat<?php echo $value4['idorderz']; ?>">
                                                                <td><button  class="btn btn-info" onclick="singleorderbuyer(<?php echo $value4['idorderz']; ?>)">View order details</button></td>
                                                                <td><button  class="btn btn-info" onclick="trackorderz(<?php echo $value4['idorderz']; ?>)">Track order</button></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>

                                                            </tbody>



                                                        </table>
                                                        <br>
                                                        <br>
                                                        <label> Your status is <span class="badge rounded-pill bg-warning">Pending</span> means item has not hand over by seller.</label>
                                                        <label> Your status is <span class="badge rounded-pill bg-warning">Ready</span> means item has been packed over by seller.</label>

                                                        <label> Your status is <span class="badge rounded-pill bg-warning">Assigned</span> means item has collected from seller and its on the way.</label>
                                                        <label> Your status is <span class="badge rounded-pill bg-success">completed</span> means you have receive your items.</label>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        <script>

                                                                function singleorderbuyer(cc) {

                                                                    var itemid = cc;
                                                                    var idgenarated = $('#orderzid' + cc).val();
                                                                    var url = "USER_singleorderdetails.php?ordersz=" + idgenarated;

                                                                    window.open(url);
                                                                }

                                                                function trackorderz(cc) {

                                                                    var itemid = cc;
                                                                    var statusz = $('#orderstat' + cc).val();
                                                                    var orderidz = $('#orderzid' + cc).val();
                                                                    if (statusz == "completed") {

                                                                        swal("Error!", "Order alteady delivered...", "warning");
                                                                    } else {
                                                                        $.post("Phpfiles/LoadBuyerMapcordinatesz.php",
                                                                                {
                                                                                    orderidz: orderidz

                                                                                },
                                                                        function(data, status) {
                                                                            if (data == "nocord") {





                                                                                swal("Error!", "Location details not updated...", "warning");

                                                                            } else {

                                                                                var gg = data;

                                                                                var locz = gg.split("###");
                                                                                var latz = locz[0];
                                                                                var longz = locz[1];

                                                                                var url = "buyertrackorderz.php?latitudez=" + latz + "&longz=" + longz;

                                                                                window.open(url);
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