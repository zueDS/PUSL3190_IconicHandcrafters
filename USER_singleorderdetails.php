<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Buyer - My orders single view</title>
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
                    <span></span> Buyer
                    <span></span> My Orders
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
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">

                                    <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">My Orders</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Item Name</th>
                                                                <th>Item ID</th>
                                                                <th>Unit Price</th>
                                                                <th>Qty</th>
                                                                <th>Seller Email</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include './Phpfiles/DB.php';


                                                            $orderid = $_GET["ordersz"];



                                                            $sqlzy34 = "SELECT * FROM orderdetailz where orderidgenarated='$orderid'";
                                                            $query4 = $conn->query($sqlzy34);
                                                            $increment = 0;
                                                            foreach ($query4 as $value4) {
                                                                $increment++;
                                                                $orderz = $value4['orderidgenarated'];
                                                                ?>
                                                                <tr>
                                                                    <td><img src="./Phpfiles/<?php echo $value4['impathz']; ?>" style="width: 80px;height: 80px;"/></td>
                                                                    <td><?php echo $value4['itemname']; ?></td>
                                                                    <td><?php echo $value4['idgenareted']; ?></td>
                                                                    <td><?php echo $value4['unitprice']; ?></td>
                                                                    <td><?php echo $value4['qty']; ?></td>
                                                                    <td><?php echo $value4['selleridz']; ?></td>
                                                                    <td><span class="badge rounded-pill bg-warning"><?php echo $value4['sellerstatusz']; ?></span></td>


                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>

                                                        </tbody>



                                                    </table>
                                                    <br>
                                                    <br>
                                                    <label> Your status is <span class="badge rounded-pill bg-warning">Not ready</span> means item has not hand over by seller.</label>
                                                    <label> Your status is <span class="badge rounded-pill bg-warning">Pending</span> means item has not hand over by seller.</label>
                                                    <label> Your status is <span class="badge rounded-pill bg-warning">Ready</span> means item has been packed over by seller.</label>

                                                    <label> Your status is <span class="badge rounded-pill bg-warning">collected</span> means item has collected from seller and its on the way.</label>
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


</body>


</html>