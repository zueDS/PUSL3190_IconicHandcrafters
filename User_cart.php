<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>iconic Handcrafters | Cart</title>
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
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Item ID</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include './Phpfiles/DB.php';

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
                                                    <td class="product-des product-name">
                                                        <h5 class="product-name" id="itname<?php echo $value4['idcartitems']; ?>"><?php echo $value4['itemname']; ?></h5>
                                                        <p class="font-xs">From : <?php echo $value4['selleremailz']; ?>
                                                        </p>

                                                    </td>
                                                    <td class="text-center" id="IDZ<?php echo $value4['idcartitems']; ?>"><?php echo $value4['itemidgenarated']; ?></td>
                                                    <td class="price" data-title="Price">LKR <span><?php echo $value4['unitprice']; ?></span> /=</td>
                                                    <td class="text-center"><?php echo $value4['qty']; ?></td>

                                                    <td class="text-right" data-title="Cart">
                                                        LKR <span><?php echo $totalp; ?> </span> /=
                                                    </td>
                                                    <td class="action"><button  class="btn btn-success" onclick="Addoneitem(<?php echo $value4['idcartitems']; ?>)">Add one item</button></td>
                                                    <td class="action"><button  class="btn btn-danger" onclick="removeoneitem(<?php echo $value4['idcartitems']; ?>)">Remove one item</button></td>
                                                    <td class="action"><button  class="btn btn-danger" onclick="removecartitemoneload(<?php echo $value4['idcartitems']; ?>)">Remove item</button></td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                    }
                                    ?>


                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <a onclick="removeallcart()" class="text-muted"> <i class="fi-rs-cross-small"></i> Clear Cart</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-action text-end">

                            <a class="btn " href="shop.php"><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">
                            <div class="col-lg-6 col-md-12">
                                <div class="heading_s1 mb-3">
                                    <h4>Calculate Shipping</h4>
                                </div>

                                <div class="field_form shipping_calculator">
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <div class="custom_select">
                                                <select class="form-control select-active" onchange="changeaddress()" id="addressz">


                                                    <option value="">Choose a option...</option>
                                                    <option>Use current address</option>
                                                    <option>Add new address</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row row" id="div1" style="display: none;">
                                        <?php
                                        $sqlz2 = "SELECT * FROM user_details where email='$buyer_emailz'";
                                        $result2 = $conn->query($sqlz2);
                                        if ($result2->num_rows > 0) {
                                            if ($row2 = $result2->fetch_assoc()) {

                                                $cart_address = $row2['addressz'];
                                                $cart_dis = $row2['district'];
                                                $cart_city = $row2['city'];
                                                ?>


                                                <div class="form-group col-lg-6">
                                                    <label>Address : </label>
                                                    <input required="required" disabled="true" placeholder="State / Country"  type="text" value="<?php echo $cart_address; ?>">
                                                </div>


                                                <div class="form-group col-lg-6">
                                                    <label>District : </label>
                                                    <input required="required" disabled="true" placeholder="PostCode / ZIP" id="disloadz" type="text" value="<?php echo $cart_dis; ?>">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>City : </label>
                                                    <input required="required" disabled="true" placeholder="PostCode / ZIP" id="cityloadz" type="text" value="<?php echo $cart_city; ?>">
                                                </div>


                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>


                                    <div class="form-row row" id="div2" style="display: none;">
                                        <div class="form-group col-lg-6">
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
                                        <div class="form-group col-lg-6">
                                            <div class="form-group">
                                                <select name="country_id" id="input-city" class="form-control" onchange="loadenw()">
                                                    <option>None</option>


                                                </select>
                                            </div>
                                        </div>


                                    </div>



                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Cart Totals</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="cart_total_label">Cart Subtotal</td>
                                                    <td class="cart_total_amount">LKR <span class="font-lg fw-900 text-brand" id="loadfinalsub"><?php echo $totalfinalpayment; ?></span> /=</td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Shipping</td>
                                                    <td class="cart_total_amount"> LKR <span class="font-lg fw-900 text-brand" id="loaddeluvery"></span> /=</td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Total</td>
                                                    <td class="cart_total_amount">LKR <strong><span class="font-xl fw-900 text-brand" id="loadnettoalz"></span></strong> /=</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button  class="btn " onclick="gotocheckz()"> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</button>
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
    <!-- Template  JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/shop.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>



                                        var districtfinal = "";
                                        var cityfinal = "";

                                        function removeallcart() {

                                            var gg = "ok";
                                            swal({
                                                title: "Are you sure?",
                                                text: "You want to remove all items from cart?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("phpfiles/userclearcart.php",
                                                                    {
                                                                        idz: gg

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done!cart cleared...!", {
                                                                        icon: "success",
                                                                    });
                                                                    window.location = "User_cart.php";

                                                                }
                                                                else {

                                                                    alert(data);
                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });

                                        }

                                        function removecartitemoneload(dd)
                                        {

                                            var userid = dd;

                                            var idgenarated = $('#IDZ' + dd).text();
                                            var itemname = $('#itname' + dd).text();
                                            var itemqty = 1;

                                            swal({
                                                title: "Are you sure?",
                                                text: "You want to remove "  + itemname + " from  your cart?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("phpfiles/removewholeitem.php",
                                                                    {
                                                                        idz: userid

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done!Item removed...!", {
                                                                        icon: "success",
                                                                    });
                                                                    window.location = "User_cart.php";

                                                                }
                                                                else {

                                                                    alert(data);
                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });

                                        }


                                        function Addoneitem(dd) {

                                            var userid = dd;

                                            var idgenarated = $('#IDZ' + dd).text();
                                            var itemname = $('#itname' + dd).text();
                                            var itemqty = 1;

                                            swal({
                                                title: "Are you sure?",
                                                text: "You want to add " + itemqty + " items from " + itemname + " to your cart?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("phpfiles/addoneitemstocart.php",
                                                                    {
                                                                        idz: userid

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done!Item Added...!", {
                                                                        icon: "success",
                                                                    });
                                                                    window.location = "User_cart.php";

                                                                }
                                                                else {

                                                                    alert(data);
                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });







                                        }
                                        function removeoneitem(dd) {

                                            var userid = dd;

                                            var idgenarated = $('#IDZ' + dd).text();
                                            var itemname = $('#itname' + dd).text();
                                            var itemqty = 1;

                                            swal({
                                                title: "Are you sure?",
                                                text: "You want to add " + itemqty + " items from " + itemname + " to your cart?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("phpfiles/removeoneitemcart.php",
                                                                    {
                                                                        idz: userid

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done!Item removed...!", {
                                                                        icon: "success",
                                                                    });
                                                                    window.location = "User_cart.php";

                                                                }
                                                                else if (data == "qtyzero") {
                                                                    swal("Error!", "You need to remove item from cart because qty is 1....!", "error");
                                                                }
                                                                else {

                                                                    alert(data);
                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });







                                        }

                                        function changeaddress() {

                                            var loadingoption = $('#addressz').val();

                                            if (loadingoption == "") {
                                                document.getElementById("div2").style.display = "none";
                                                document.getElementById("div1").style.display = "none";
                                            }
                                            else if (loadingoption == "Use current address") {

                                                document.getElementById("div1").style.display = "block";
                                                document.getElementById("div2").style.display = "none";
                                                var loadingcity = $('#cityloadz').val();
                                                var loadingdis = $('#disloadz').val();
                                                districtfinal = loadingdis;
                                                cityfinal = loadingcity;
                                                $.post("phpfiles/loadcityprice.php",
                                                        {
                                                            loadingcity: loadingcity,
                                                            loadingdis: loadingdis

                                                        },
                                                function(data, status) {

                                                    $("#loaddeluvery").html(data);
                                                    var itemcost = $("#loadfinalsub").html();
                                                    var totz = parseFloat(itemcost) + parseFloat(data);
                                                    $("#loadnettoalz").html(totz);

                                                });






                                            }
                                            else if (loadingoption == "Add new address") {

                                                document.getElementById("div2").style.display = "block";
                                                document.getElementById("div1").style.display = "none";
                                            }

                                        }

                                        function LoadCity() {

                                            var getval = document.getElementById('input-district').value;

                                            $.post("phpfiles/User_register_load_city.php",
                                                    {
                                                        districtname: getval

                                                    },
                                            function(data, status) {


                                                var cities = JSON.parse(data);
                                                $('#input-city').empty();
                                                for (var i = 0; i < cities.length; i++) {
                                                    $('#input-city').append('<option>' + cities[i].city + '</option>');
                                                }



                                            });

                                        }

                                        function loadenw() {

                                            var loaddis = document.getElementById('input-district').value;
                                            var loadcity = document.getElementById('input-city').value;
                                            districtfinal = loaddis;
                                            cityfinal = loadcity;
                                            if (loadcity == "None") {


                                            } else {
                                                $.post("phpfiles/loadcityprice.php",
                                                        {
                                                            loadingcity: loadcity,
                                                            loadingdis: loaddis

                                                        },
                                                function(data, status) {

                                                    $("#loaddeluvery").html(data);
                                                    var itemcost = $("#loadfinalsub").html();
                                                    var totz = parseFloat(itemcost) + parseFloat(data);
                                                    $("#loadnettoalz").html(totz);

                                                });



                                            }


                                        }
                                        function gotocheckz() {

                                            var city_l = cityfinal;
                                            var dis_l = districtfinal;
                                            var itemnetcost = $("#loadfinalsub").html();
                                            var shipingcost = $("#loaddeluvery").html();
                                            var finalcost = $("#loadnettoalz").html();


                                            if (city_l.length > 0) {

                                                var url = "UserCheckout.php?loaddis=" + dis_l + "&loadcity=" + city_l + "&itemcostz=" + itemnetcost + "&shipcost=" + shipingcost + "&netcost=" + finalcost;
                                                window.location = url;

                                            } else {

                                                swal("Error!", "Select valid district and city....!", "error");
                                            }




                                        }



    </script>
</body>


</html>