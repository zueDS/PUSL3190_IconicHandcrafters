<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Iconic Handcrafters | checkout</title>
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
        include './Phpfiles/DB.php';


        $item_dis = $_GET["loaddis"];
        $item_city = $_GET["loadcity"];
        $item_sub = $_GET["itemcostz"];
        $item_del = $_GET["shipcost"];
        $item_net = $_GET["netcost"];
        ?>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Billing Details</h4>
                        </div>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="" name="fname" placeholder="Name in full *" id="p1">
                            </div>




                            <div class="form-group">
                                <input required="" type="text" name="city" placeholder="District*" value="<?php echo $item_dis; ?>" disabled id="p2">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="state" placeholder="City*" value="<?php echo $item_city; ?>" disabled="" id="p3">
                            </div>
                            <div class="form-group">
                                <input type="text" name="billing_address" required="" placeholder="Address *" id="p4">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="phone" placeholder="Phone *" id="p5">
                            </div>


                            <div class="mb-20">
                                <h5>Additional information</h5>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" placeholder="Order notes" id="p6"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $buyer_emailz = $_SESSION["emailz"];


                                        $sqlz = "SELECT * FROM cart where emailaddress='$buyer_emailz' and statusz='Active'";
                                        $result = $conn->query($sqlz);
                                        $totalfinalpayment = 0;
                                        if ($result->num_rows > 0) {
                                            if ($row = $result->fetch_assoc()) {


                                                $cart_id = $row['cartidgenarated'];

                                                $sqlzy3455 = "SELECT * FROM cartitems where cartidz='$cart_id'";
                                                $statuzofutem = "";
                                                $query455 = $conn->query($sqlzy3455);
                                                foreach ($query455 as $value4) {

                                                    $qty_laod = $value4['qty'];
                                                    $up_laod = $value4['unitprice'];

                                                    $totalp = $qty_laod * $up_laod;
                                                    $totalfinalpayment = $totalfinalpayment + $totalp;
                                                    ?>
                                                    <tr>
                                                        <td class="image product-thumbnail"><img src="Phpfiles/<?php echo $value4['imgpathz']; ?>" alt="#"></td>
                                                        <td>
                                                            <h5><a><?php echo $value4['itemname']; ?></a></h5> <span class="product-qty">x <?php echo $value4['qty']; ?></span>
                                                        </td>
                                                        <td>LKR <span><?php echo $totalp; ?> </span> /=</td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <th>SubTotal</th>
                                            <td class="product-subtotal" colspan="2">LKR <?php echo $item_sub; ?> /=</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td colspan="2">LKR <?php echo $item_del; ?> /=</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">LKR <?php echo $item_net; ?> /=</span></td>
                                        </tr>

                                    <input type="hidden" id="subtot" value="<?php echo $item_sub; ?>">
                                    <input type="hidden" id="delcost" value="<?php echo $item_del; ?>">
                                    <input type="hidden" id="netcost" value="<?php echo $item_net; ?>">
                                    <input type="hidden" id="couponz" value="00">


                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>

                            <button  class="btn btn-fill-out btn-block mt-30" onclick="placeorderz()">Place Order</button>
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
    <!-- Template  JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/shop.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
                                function placeorderz() {

                                    var naminfull = $('#p1').val();
                                    var dis = $('#p2').val();
                                    var city = $('#p3').val();
                                    var addr = $('#p4').val();
                                    var phone = $('#p5').val();
                                    var orderz = $('#p6').val();

                                    var itcost = $('#subtot').val();
                                    var delcost = $('#delcost').val();
                                    var nettot = $('#netcost').val();
                                    var coupid = $('#couponz').val();



                                    if (naminfull == "" || addr == "" || phone == "" || orderz == "") {

                                        swal("Error!", "Please fill all  mandatory feilds....!", "error");
                                    } else if(phone.length > 10 || phone.length<10){
                                        
                                        swal("Error!", "Please fill enter valid contact number....!", "error");
                                    }else {

                                        swal({
                                            title: "Are you sure?",
                                            text: "You want to place this order for LKR " + nettot + " /= ?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                        })
                                                .then(function(willDelete) {
                                                    if (willDelete) {

                                                        $.post("phpfiles/User_placeorder.php",
                                                                {
                                                                    namez: naminfull,
                                                                    deldis:dis,
                                                                    delcity:city,
                                                                    deladd:addr,
                                                                    delphones:phone,
                                                                    delordernote:orderz,
                                                                    ordersubcost:itcost,
                                                                    orderdelcost:delcost,
                                                                    ordernet:nettot

                                                                },
                                                        function(data, status) {
                                                            if (data == "ok") {


                                                                swal("Done!Order placed...!", {
                                                                    icon: "success",
                                                                });
                                                                window.location = "User_myorders.php";

                                                            }

                                                            else {

                                                                alert(data);
                                                            }

                                                        });




                                                    } else {

                                                    }
                                                });


                                    }

                                }
    </script>


</body>



</html>