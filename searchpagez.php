<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Shop - iconic Hand crafters</title>
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
        <!-- Quick view -->

        <?php
        include './headerandmobileheader.php';
        ?>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>

        <?php
        $get_keywrd = $_GET["itemkeywrd"];
        $get_catez = $_GET["catez"];
        ?>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p>Items matches for<b style="color: black;">&nbsp;&nbsp;&nbsp;<?php echo $get_keywrd; ?>&nbsp;&nbsp;&nbsp;</b> in &nbsp;&nbsp;&nbsp;<b style="color: black;"> <?php echo $get_catez; ?></b></p>
                            </div>

                        </div>
                        <div class="row product-grid-3">


                            <?php
                            include './Phpfiles/DB.php';
                            $sqlzy34 = "";
                            if ($get_catez = "All Categories") {
                                $sqlzy34 = "SELECT * FROM sellerpostitem where statusz='Accept' and titleproduct like '%$get_keywrd%'  ORDER BY itemidsellerpost DESC";
                            } else {
                                $sqlzy34 = "SELECT * FROM sellerpostitem where statusz='Accept' and category='$get_catez' and titleproduct like '%$get_keywrd' ORDER BY itemidsellerpost DESC";
                            }

                            $query4 = $conn->query($sqlzy34);
                            $increz = 0;

                            $offername = "";
                            $offerdiscount = "";
                            $offerpricezafterdic = "";
                            foreach ($query4 as $value4) {

                                $offername = $value4['offername'];
                                $offerdiscount = $value4['discountrange'];
                                $offerpricezafterdic = $value4['afterdiscountprice'];
                                ?>


                                <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="#">
                                                    <img class="default-img" src="Phpfiles/<?php echo $value4['thumimgz']; ?>" alt="">
                                                    <img class="hover-img" src="Phpfiles/<?php echo $value4['img2path']; ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">

                                                <button aria-label="Add to faviourites" class="action-btn hover-up"><i class="fi-rs-heart"></i></button>

                                            </div>

                                            <?php
                                            if ($offername == "") {
                                                
                                            } else {
                                                ?>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot"><?php echo $offername; ?> <?php echo $offerdiscount; ?> % off</span>
                                                </div>
                                                <?php
                                            }
                                            ?>


                                        </div>
                                        <div class="product-content-wrap">

                                            <h2><a href="#"><?php echo $value4['titleproduct']; ?></a></h2>
                                            <div class="product-category">
                                                <a href="#"><?php echo $value4['category']; ?></a>
                                            </div>
                                            <?php
                                            if ($offername == "") {
                                                ?>
                                                <div class="product-price">
                                                    <span>LKR <?php echo $value4['unitpricez']; ?> /=</span>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="product-price">
                                                    <span>LKR <?php echo $offerpricezafterdic; ?> /=</span>
                                                    <span class="old-price">LKR <?php echo $value4['unitpricez']; ?> /=</span>
                                                </div>
                                                <?php
                                            }
                                            ?>

                                            <div class="product-action-1 show">
                                                <button aria-label="View details" class="action-btn hover-up" onclick="singleproductdetail(<?php echo $value4['itemidsellerpost']; ?>)"><i class="fi-rs-shopping-bag-add"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>




                        </div>
                        <!--pagination-->

                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">


                            <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none">
                                <img src="assets/imgs/banner/banner-11.jpg" alt="">
                                <div class="banner-text">
                                    <span>Fashion  Zone</span>
                                    <h4>Save 17% on <br>Blanket</h4>
                                    <a href="offerzone.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="widget-category mb-30">
                                <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                                <ul class="categories">
                                     <?php
                                    include './Phpfiles/DB.php';
                                    $sqlzy341 = "SELECT * FROM shopcatos where statusz='Active'";
                                    $query41 = $conn->query($sqlzy341);
                                    foreach ($query41 as $value41) {
                                        ?>
                                        <li><a onclick="searchBycategory(<?php echo $value41['idshopcatos']; ?>)"><?php echo $value41['catoname']; ?></a></li>

                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <!-- Fillter By Price -->

                            <!-- Product sidebar Widget -->

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
    <script src="assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/shop.js"></script>
</body>
<script>

                                                function singleproductdetail(cc) {

                                                    var itemid = cc;

                                                    var url = "singleproductdetails.php?itemidz=" + itemid;

                                                    window.location = url;
                                                }
                                                function searchBycategory(dd) {
                                                    var url = "searchBycatoz.php?caridz=" + dd;
                                                    window.open(url);
                                                }

</script>


</html>