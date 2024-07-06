<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Store</title>
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

        <?php
        $sellerzmail = $_GET["selleremailload"];
        ?>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> Seller
                    <span></span> Store
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-header mb-50">
                            <?php
                            include './Phpfiles/DB.php';
                            $sqlzorderitem = "SELECT * from   sellershopdetails where selelremailz='$sellerzmail'";
                            $resultorderitem = $conn->query($sqlzorderitem);


                            $ordercountitem = "";
                            $desz = "";
                            $get_lati = "";
                            $get_longz = "";

                            if ($resultorderitem->num_rows > 0) {

                                if ($roworderitem = $resultorderitem->fetch_assoc()) {


                                    $ordercountitem = $roworderitem["storename"];
                                    $desz = $roworderitem["description"];
                                    $get_lati = $roworderitem["latitutez"];
                                    $get_longz = $roworderitem["longtudez"];
                                }
                            }
                            ?>
                            <?php
                            if ($ordercountitem == "") {
                                ?>
                                <h1 class="font-xxl text-brand"><?php echo $sellerzmail; ?></h1>
                                <?php
                            } else {
                                ?>
                                <h1 class="font-xxl text-brand"><?php echo $ordercountitem; ?></h1>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                <div class="col-12">
                                    <article class="first-post mb-30 wow fadeIn animated hover-up">
                                        <div class="img-hover-slide position-relative overflow-hidden">
                                            <span class="top-right-icon bg-dark"><i class="fi-rs-bookmark"></i></span>
                                            <div class="post-thumb img-hover-scale">
                                                <a href="#">
                                                    <?php
                                                    if ($get_lati == "") {
                                                        
                                                    } else {
                                                        ?>
                                                        <iframe width="100%" height="500px" src="https://maps.google.com/maps?q=<?php echo $get_lati; ?>,<?php echo $get_longz; ?>&output=embed"></iframe>
                                                        <?php
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="entry-content">

                                            <h2 class="post-title mb-20">
                                                <a href="#">Description :</a></h2>
                                            <p class="post-exerpt font-medium text-muted mb-30"><?php echo $desz; ?></p>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-12">
                                    <center>
                                        <h1 class="font-l text-brand">More products from seller</h1>
                                    </center>
                                    <br>
                                    <div class="row product-grid-4">



                                        <?php
                                        include './Phpfiles/DB.php';
                                        $sqlzy34 = "SELECT * FROM sellerpostitem where statusz='Accept' and selleremailz='$sellerzmail' ORDER BY itemidsellerpost DESC";
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
                                </div>

                            </div>
                        </div>
                        <!--post-grid-->

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
    <script src="assets/js/shop.js"></script>
</body>


<script>

                                                            function singleproductdetail(cc) {

                                                                var itemid = cc;

                                                                var url = "singleproductdetails.php?itemidz=" + itemid;

                                                                window.location = url;
                                                            }


</script>
</html>