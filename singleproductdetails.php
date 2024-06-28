<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Single product details</title>
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

        <?php
        $itemid = $_GET["itemidz"];
        $relatedpro_cate = "";
        ?>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>

                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <?php
                        include './phpfiles/DB.php';

                        $sqlzy34 = "SELECT * FROM sellerpostitem where itemidsellerpost='$itemid'";
                        $query4 = $conn->query($sqlzy34);
                        $increz = 0;
                        foreach ($query4 as $value4) {

                            $loading_offername = $value4['offername'];

                            $itam_genaratedid = $value4['proidgenarated'];

                            $relatedpro_cate = $value4['category'];
                            ?>

                            <div class="product-detail accordion-detail">
                                <div class="row mb-50">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="detail-gallery">
                                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                            <!-- MAIN SLIDES -->
                                            <div class="product-image-slider" style="width: auto;">
                                                <figure class="border-radius-10">
                                                    <img src="Phpfiles/<?php echo $value4['thumimgz']; ?>" alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="Phpfiles/<?php echo $value4['img2path']; ?>" alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="Phpfiles/<?php echo $value4['img3path']; ?>" alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="Phpfiles/<?php echo $value4['img4pathz']; ?>" alt="product image">
                                                </figure>

                                            </div>
                                            <!-- THUMBNAILS -->
                                            <div class="slider-nav-thumbnails pl-15 pr-15">
                                                <div><img src="Phpfiles/<?php echo $value4['thumimgz']; ?>" alt="product image"></div>
                                                <div><img src="Phpfiles/<?php echo $value4['img2path']; ?>" alt="product image"></div>
                                                <div><img src="Phpfiles/<?php echo $value4['img3path']; ?>" alt="product image"></div>
                                                <div><img src="Phpfiles/<?php echo $value4['img4pathz']; ?>" alt="product image"></div>

                                            </div>
                                        </div>
                                        <!-- End Gallery -->
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="detail-info">
                                            <h2 class="title-detail"><?php echo $value4['titleproduct']; ?> </h2>
                                            <div class="product-detail-rating">
                                                <div class="pro-details-brand">
                                                    <span> Category: <a href=""><?php echo $value4['category']; ?></a></span>
                                                </div>

                                            </div>

                                            <div class="product-detail-rating">
                                                <div class="pro-details-brand">
                                                    <span> Posted by: <span id="selleremailposted"><?php echo $value4['selleremailz']; ?></span></span>
                                                </div>
                                                <div class="pro-details-brand">
                                                    <?php
                                                    if (!(isset($_SESSION["user_id"]))) {
                                                        
                                                    } else {
                                                        ?>
                                                        <button class="button button-add-to-cart" onclick="LoadModelz()">Message Seller</button>
                                                        <?php
                                                    }
                                                    ?>
                                                    <button class="button button-add-to-cart" onclick="laodStoreSeller()"> View store</button>
                                                </div>
                                            </div>

                                            <?php
                                            if ($loading_offername == "") {
                                                ?>

                                                <div class="clearfix product-price-cover">
                                                    <div class="product-price primary-color float-left">
                                                        <ins>LKR <span class="text-brand" id="unitpricez"><?php echo $value4['unitpricez']; ?></span> /=</ins>
                                                    </div>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="clearfix product-price-cover">
                                                    <div class="product-price primary-color float-left">
                                                        <ins>LKR <span class="text-brand" id="unitpricez"><?php echo $value4['afterdiscountprice']; ?></span> /=</ins>
                                                        <ins><span class="old-price font-md ml-15">LKR <?php echo $value4['unitpricez']; ?> /=</span> </ins>
                                                        <span class="save-price  font-md color3 ml-15"><?php echo $value4['offername']; ?></span>
                                                        <span class="save-price  font-md color3 ml-15"><?php echo $value4['discountrange']; ?> % off</span>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>

                                            <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                            <div class="short-desc mb-30">
                                                <p><?php echo $value4['prodescription']; ?></p>
                                            </div>

                                            <div class="product_sort_info font-xs mb-30">
                                                <ul>
                                                    <li class="mb-10"><i class="fi-rs-crown mr-5"></i> Warenty type :<?php echo $value4['warrentytype']; ?></li>
                                                    <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> Return type :<?php echo $value4['returentypez']; ?></li>
                                                    <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>

                                                </ul>
                                            </div>

                                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>

                                            <?php
                                            if (!(isset($_SESSION["user_id"]))) {
                                                
                                            } else {

                                                $stockavil = $value4['stockavailab'];
                                                if ($stockavil == "In Stock") {
                                                    ?>
                                                    <div class="detail-extralink">
                                                        <div class="detail-qty border radius">
                                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                            <span class="qty-val" id="selectedqty">1</span>
                                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                        </div>
                                                        <div class="product-extra-link2">
                                                            <button type="button" class="button button-add-to-cart" onclick="additemtocart()">Add to cart</button>

                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <span class="badge rounded-pill bg-danger" style="font-size: 18px;"><b >Out of stock</b></span>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                            }
                                            ?>


                                            <ul class="product-meta font-xs color-grey mt-50">
                                                <li class="mb-5">Product ID: <a href="#"><?php echo $value4['proidgenarated']; ?></a></li>
                                            </ul>
                                        </div>
                                        <!-- Detail Info -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 m-auto entry-main-content">


                                        <h3 class="section-title style-1 mb-30">Additional info</h3>
                                        <table class="font-md mb-30">
                                            <tbody>
                                                <tr class="stand-up">
                                                    <th>Weight</th>
                                                    <td>
                                                        <p><?php echo $value4['weightz']; ?></p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-wo-wheels">
                                                    <th>Size</th>
                                                    <td>
                                                        <p><?php echo $value4['sizez']; ?></p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-w-wheels">
                                                    <th>Color</th>
                                                    <td>
                                                        <p><?php echo $value4['colors']; ?></p>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="social-icons single-share">
                                            <ul class="text-grey-5 d-inline-block">
                                                <li><strong class="mr-10">View social media links:</strong></li>
                                                <li class="social-facebook"><a href="<?php echo $value4['fblinkz']; ?>"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                                <li class="social-instagram"><a href="<?php echo $value4['inslink']; ?>"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <?php
                                        $sqlzy34revw = "SELECT COUNT(idreview) as x FROM itemhasreview where itemidz='$itam_genaratedid' and status='Active'";
                                        $query4revw = $conn->query($sqlzy34revw);
                                        $countreviz = 0;
                                        foreach ($query4revw as $value4revw) {
                                            $countreviz = $value4revw['x'];
                                        }
                                        ?>
                                        <h3 class="section-title style-1 mb-30 mt-30">Reviews (<?php echo $countreviz; ?>)</h3>
                                        <!--Comments-->
                                        <div class="comments-area style-2">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                    <div class="comment-list">
                                                        <?php
                                                        $sqlzy34rev = "SELECT * FROM itemhasreview where itemidz='$itam_genaratedid' and status='Active' ORDER BY idreview DESC";
                                                        $query4rev = $conn->query($sqlzy34rev);
                                                        foreach ($query4rev as $value4rev) {

                                                            $valofrat = $value4rev['startcount'];
                                                            $starval = (float) $valofrat;
                                                            $starvalfinal = 20 * $starval;
                                                            ?>
                                                            <div class="single-comment justify-content-between d-flex">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="assets/profile.png" alt="">
                                                                        <h6><a href="#"><?php echo $value4rev['postedusername']; ?></a></h6>
                                                                        <p class="font-xxs"><?php echo $value4rev['posteduseremail']; ?></p>
                                                                    </div>
                                                                    <div class="desc">

                                                                        <div class="product-rate d-inline-block">
                                                                            <div class="product-rating" style="width:<?php echo $starvalfinal; ?>%">
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo $value4rev['commentz']; ?></p>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div class="d-flex align-items-center">
                                                                                <p class="font-xs mr-30"><?php echo $value4rev['datez']; ?> <?php echo $value4rev['timez']; ?></p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>




                                                    </div>
                                                </div>
<!--                                                <div class="col-lg-4">
                                                    <h4 class="mb-30">Seller rating</h4>
                                                    <div class="d-flex mb-30">
                                                        <div class="product-rate d-inline-block mr-15">
                                                            <div class="product-rating" style="width:90%">
                                                            </div>
                                                        </div>
                                                        <h6>4.8 out of 5</h6>
                                                    </div>
                                                    <div class="progress">
                                                        <span>5 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>4 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>3 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>2 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                    </div>
                                                    <div class="progress mb-30">
                                                        <span>1 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                    </div>
                                                    <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                </div>-->
                                            </div>
                                        </div>

                                        <?php
                                        if (!(isset($_SESSION["user_id"]))) {
                                            
                                        } else {
                                            ?>



                                            <div class="comment-form">
                                                <h4 class="mb-15">Add a review</h4>

                                                <div class="row">
                                                    <div class="col-lg-8 col-md-12">
                                                        <form class="form-contact comment_form" action="#" id="commentForm">
                                                            <div class="row">


                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control w-100" name="comment" id="reviewz" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="name" id="ratecountz" type="text" placeholder="Rating count out of 5">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <button type="button" class="button button-contactForm" onclick="addNewReviewUser()">Post
                                                                    Review</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>



                                    </div>
                                </div>
                                <div class="row mt-60">
                                    <div class="col-12">
                                        <h3 class="section-title style-1 mb-30">Related products</h3>
                                    </div>
                                    <div class="col-12">
                                        <div class="row related-products">

                                            <?php
                                            include './Phpfiles/DB.php';
                                            $sqlzy34related = "SELECT * FROM sellerpostitem where statusz='Accept' and category = '$relatedpro_cate' LIMIT 4";
                                            $query4related = $conn->query($sqlzy34related);
                                            $increz = 0;

                                            $offername = "";
                                            $offerdiscount = "";
                                            $offerpricezafterdic = "";
                                            foreach ($query4related as $value4related) {
                                                ?>

                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap small hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a>
                                                                    <img class="default-img" src="Phpfiles/<?php echo $value4related['thumimgz']; ?>" alt="">
                                                                    <img class="hover-img" src="Phpfiles/<?php echo $value4related['img2path']; ?>" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="View Item" onclick="singleproductdetail(<?php echo $value4related['itemidsellerpost']; ?>)"><i class="fi-rs-search"></i></a>

                                                            </div>

                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a onclick="singleproductdetail(<?php echo $value4related['itemidsellerpost']; ?>)"><?php echo $value4related['titleproduct']; ?></a></h2>


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
                            <input type="hidden" value="<?php echo $value4['titleproduct']; ?>" id="proname"/>
                            <input type="hidden" value="<?php echo $value4['proidgenarated']; ?>" id="proid"/>
                            <input type="hidden" value="<?php echo $value4['selleremailz']; ?>" id="selleremailz"/>
                            <input type="hidden" value="<?php echo $value4['sellernamez']; ?>" id="sellernamez"/>
                            <input type="hidden" value="<?php echo $value4['thumimgz']; ?>" id="thumbimgz"/>
                            <?php
                        }
                        ?>


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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
                                                         function additemtocart() {

                                                            var itemname = $('#proname').val();
                                                            var itemid = $('#proid').val();
                                                            var seller_emailz = $('#selleremailz').val();
                                                            var itemqty = $('#selectedqty').text();
                                                            var unitpricez = $('#unitpricez').text();
                                                            var thumbimgz = $('#thumbimgz').val();




                                                            swal({
                                                                title: "Are you sure?",
                                                                text: "You want to add " + itemqty + " items from " + itemname + " to your cart?",
                                                                icon: "warning",
                                                                buttons: true,
                                                                dangerMode: true,
                                                            })
                                                                    .then(function(willDelete) {
                                                                        if (willDelete) {

                                                                            $.post("phpfiles/User_add_to_cart.php",
                                                                                    {
                                                                                        itemID: itemid,
                                                                                        pro_namez: itemname,
                                                                                        itemqty: itemqty,
                                                                                        unitpeicez: unitpricez,
                                                                                        selleridz: seller_emailz,
                                                                                        thumbimgz: thumbimgz

                                                                                    },
                                                                            function(data, status) {

                                                                                if (data == "ok") {
                                                                                    swal("Item added to Cart...!", {
                                                                                        icon: "success",
                                                                                    });
                                                                                    
                                                                                    window.location = "shop.php";
//                                                                               

                                                                                }
                                                                                else if (data == "already") {

                                                                                    swal("Error!", "Item already in your cart..!", "error");

                                                                                }
                                                                                else if (data == "seller") {

                                                                                    swal("Error!", "Please register as buyer to purchase items..!", "error");

                                                                                }
                                                                                else {

                                                                                    swal("Error!", "" + data, "error");
                                                                                }

                                                                            });




                                                                        } else {

                                                                        }
                                                                    });

                                                        }
                                                        
                                                        
                                                        



                                                        function addNewReviewUser() {


                                                            var reviewcomment = $('#reviewz').val();
                                                            var ratingz = $('#ratecountz').val();
                                                            var itemname = $('#proname').val();
                                                            var itemid = $('#proid').val();
                                                            var seller_emailz = $('#selleremailz').val();



                                                            if (reviewcomment == "") {

                                                                swal("Error!", "Enter valid review..!", "error");
                                                            } else if (ratingz == "") {
                                                                swal("Error!", "Enter valid number between 0 and 5..!", "error");
                                                            } else {
                                                                var volz = isNumeric(ratingz);

                                                                if (volz == true) {

                                                                    if (ratingz > 5 || ratingz < 0) {
                                                                        swal("Error!", "Enter valid number between 0 and 5..!", "error");
                                                                    } else {


                                                                        $.post("phpfiles/UserAddNewReview.php",
                                                                                {
                                                                                    reviewcomment: reviewcomment,
                                                                                    ratingz: ratingz,
                                                                                    itemname: itemname,
                                                                                    itemid: itemid,
                                                                                    seller_emailz: seller_emailz

                                                                                },
                                                                        function(data, status) {

                                                                            if (data == "ok") {
                                                                                swal("Your review hass been sent to aprroval...!", {
                                                                                    icon: "success",
                                                                                });

                                                                                window.location = "shop.php";
//                                                                               

                                                                            } else {

                                                                                swal("Error!", "" + data, "error");
                                                                            }

                                                                        });





                                                                    }

                                                                } else {
                                                                    swal("Error!", "Please enter valid number under 5..!", "error");
                                                                }
                                                            }

                                                        }




                                                        function isNumeric(str) {
                                                            if (typeof str != "string")
                                                                return false // we only process strings!  
                                                            return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
                                                                    !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
                                                        }

                                                        function laodStoreSeller() {

                                                            var selleremailz = $("#selleremailposted").html();

                                                            var url = "ViewSellerStore.php?selleremailload=" + selleremailz;

                                                            window.open(url);

                                                        }

                                                        function LoadModelz() {

                                                            var seller_emailz = $('#selleremailz').val();
                                                            var seller_namez = $('#sellernamez').val();

                                                            document.getElementById("modelnamez").value = seller_namez;
                                                            document.getElementById("modelemailz").value = seller_emailz;
                                                            $('#exampleModal').modal('show');



                                                        }

                                                        function closemdl() {

                                                            $("#exampleModal").modal('hide');
                                                        }

                                                        function SendMessageToseller() {

                                                            var seller_emailz = $('#selleremailz').val();
                                                            var seller_namez = $('#sellernamez').val();
                                                            var seller_messagez = $('#messagedetailz').val();
                                                            if (seller_messagez == "") {

                                                                swal("Error!", "Please type your message..!", "error");
                                                            } else {
                                                                swal({
                                                                    title: "Are you sure?",
                                                                    text: "You want to send message to " + seller_namez + "?",
                                                                    icon: "warning",
                                                                    buttons: true,
                                                                    dangerMode: true,
                                                                })
                                                                        .then(function(willDelete) {
                                                                            if (willDelete) {

                                                                                $.post("phpfiles/buyersendmessafetoseller.php",
                                                                                        {
                                                                                            seller_emailz: seller_emailz,
                                                                                            seller_namez: seller_namez,
                                                                                            seller_messagez: seller_messagez

                                                                                        },
                                                                                function(data, status) {
                                                                                    if (data == "ok") {


                                                                                        swal("Done!Message Sent to seller..!", {
                                                                                            icon: "success",
                                                                                        });

                                                                                        window.location = "shop.php";


                                                                                    } else {

                                                                                        swal("Error!", "" + data, "error");

                                                                                    }

                                                                                });




                                                                            } else {

                                                                            }
                                                                        });

                                                            }


                                                        }


    </script>
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
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Message details</h5>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Seller name:</label>
                        <input type="text" class="form-control" id="modelnamez"  disabled="" />
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Seller email:</label>
                        <input type="text" class="form-control" id="modelemailz"  disabled="" />
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Your Message:</label>
                        <textarea class="form-control" id="messagedetailz" style="height: 150px;" placeholder="Type your message here"></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" style="background-color: #f44336;" onclick="closemdl()">close</button>
                    <button type="button" class="btn btn-success" style="background-color: #008CBA;" onclick="SendMessageToseller()">Send Message</button>
                </div>
            </div>
        </div>
    </div>
</body>


</html>