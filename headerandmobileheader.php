<?php
session_start();
?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li><i class="fi-rs-smartphone"></i> <a href="#">(+94) 71 911 - 8728</a></li>
                            <li><i class="fi-rs-marker"></i><a  href="Contact.php">Our location</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>

                            <li><i class="fi-rs-user"></i><a href="register.php">Log In / Sign Up</a></li>
                            <?php
                            if (!(isset($_SESSION["user_id"]))) {
                                
                            } else {
                                ?>
                                <li><i class="fi-rs-user"></i><a onclick="Logzoutzbuyer()">Logout</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="index.php"><img src="assets/tstlogz.png" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active" id="catosearchz">
                                <option>All Categories</option>
                                <?php
                                include './Phpfiles/DB.php';
                                $sqlzy34 = "SELECT * FROM shopcatos where statusz='Active'";
                                $query4 = $conn->query($sqlzy34);
                                foreach ($query4 as $value4) {
                                    ?>
                                    <option><?php echo $value4['catoname']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="text" placeholder="Search for items..." id="searchingitemz">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">

                            <?php
                            if (!(isset($_SESSION["user_id"]))) {
                                
                            } else {

                                $buyer_sess_mail = $_SESSION["emailz"];

                                $sqlzy3422 = "SELECT * FROM messages_seller_to_buyer where buyeremail='$buyer_sess_mail' and status='notread'";
                                $query422 = $conn->query($sqlzy3422);
                                $messagecount = 0;
                                foreach ($query422 as $value422) {
                                    $messagecount++;
                                }

                                $cartcountz = 0;
                                $sqlz = "SELECT * FROM cart where emailaddress='$buyer_sess_mail' and statusz='Active'";
                                $result = $conn->query($sqlz);
                                $totalfinalpayment = 0;
                                if ($result->num_rows > 0) {
                                    if ($row = $result->fetch_assoc()) {


                                        $cart_id = $row['cartidgenarated'];

                                        $sqlzy3455 = "SELECT * FROM cartitems where cartidz='$cart_id'";
                                        $query455 = $conn->query($sqlzy3455);
                                        foreach ($query455 as $value4) {
                                            $cartcountz++;
                                        }
                                    }
                                }
                                ?>
                                <div class="header-action-icon-2">
                                    <a href="User_Myaccount.php">
                                        <img class="svgInject" alt="Evara" src="assets/imgs/account.svg">

                                    </a>
                                </div>


                                <div class="header-action-icon-2">
                                    <a href="buyerInbox.php">
                                        <img class="svgInject" alt="Evara" src="assets/imgs/messageiconz.svg">
                                        <span class="pro-count blue"><?php echo $messagecount; ?></span>
                                    </a>
                                </div>

                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="User_cart.php">
                                        <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue"><?php echo $cartcountz; ?></span>
                                    </a>

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
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.php"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <?php
                                include './Phpfiles/DB.php';
                                $sqlzy341 = "SELECT * FROM shopcatos where statusz='Active'";
                                $query41 = $conn->query($sqlzy341);
                                foreach ($query41 as $value41) {
                                    ?>
                                    <li><a onclick="searchBycategory(<?php echo $value41['idshopcatos']; ?>)"><i class="<?php echo $value41['imgiconz']; ?>"></i><?php echo $value41['catoname']; ?></a></li>
                                    <?php
                                }
                                ?>

                            </ul>

                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li class="position-static"><a href="index.php">Home</a>

                                </li>
                                <li><a href="Topsellerbossted.php">Top rated seller</a>

                                </li>

                                <li>
                                    <a href="offerzone.php">Offers</a>
                                </li>

                                <li class="position-static"><a href="shop.php">Shop now</a>

                                </li>
                                <li class="position-static"><a href="ShopTopProducts.php">Top sold </a>

                                </li>
                                <li>
                                    <a href="Purchaseguide.php">About sales and buyings</a>
                                </li>
                                <li>
                                    <a href="Contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-headset"></i><span>Hotline</span> 041 - 22 20281 </p>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">


                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.php"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="button" id="searchingitemz2"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>

                            <?php
                            include './Phpfiles/DB.php';
                            $sqlzy341r = "SELECT * FROM shopcatos where statusz='Active'";
                            $query41r = $conn->query($sqlzy341r);
                            foreach ($query41r as $value41r) {
                                ?>
                                <li><a onclick="searchBycategory(<?php echo $value41r['idshopcatos']; ?>)"><i class="<?php echo $value41r['imgiconz']; ?>"></i><?php echo $value41r['catoname']; ?></a></li>
                                <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item"><span class="menu-expand"></span><a href="index.php">Home</a> </li>                         
                        <li class="menu-item"><span class="menu-expand"></span><a href="Purchaseguide.php">About</a> </li>                         
                        <li class="menu-item"><span class="menu-expand"></span><a href="shop.php">Shop</a> </li>                         
                        <li class="menu-item"><span class="menu-expand"></span><a href="ShopTopProducts.php">Tops products</a> </li>                         
                        <li class="menu-item"><span class="menu-expand"></span><a href="offerzone.php">offer zone</a> </li>                         
                        <li class="menu-item"><span class="menu-expand"></span><a href="Contact.php">Contact</a> </li>                         


                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">

                <div class="single-mobile-header-info">
                    <a href="register.php">Log In / Sign Up </a>
                </div>
                <?php
                if (!(isset($_SESSION["user_id"]))) {
                    
                } else {
                    ?>
                    <div class="single-mobile-header-info">

                        <a onclick="Logzoutzbuyer()">Logout</a>
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
                        $("#searchingitemz").bind("keypress", {}, keypressInBox);

                        function keypressInBox(e) {
                            var code = (e.keyCode ? e.keyCode : e.which);
                            if (code == 13) { //Enter keycode                        
                                e.preventDefault();

                                var keywrd = $('#searchingitemz').val();
                                var catoz = $('#catosearchz').val();
                                var url = "searchpagez.php?itemkeywrd=" + keywrd + "&catez=" + catoz;
                                window.open(url);
                            }
                        }

                        function Logzoutzbuyer() {
                            var k = "g";
                            $.post("phpfiles/userlogout.php",
                                    {
                                        pw: k

                                    },
                            function(data, status) {

                                if (data == "ok") {


                                    swal("Logout sucess...!", {
                                        icon: "success",
                                    });
                                    window.location = "register.php";


                                }

                            });
                        }

                        function searchBycategory(dd) {
                            var url = "searchBycatoz.php?caridz=" + dd;
                            window.open(url);
                        }

</script>

