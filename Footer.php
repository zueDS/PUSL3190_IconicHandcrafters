<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email to receive new offers" id="newzletteremailz">
                        <button class="btn bg-dark text-white" type="button" onclick="signupnewzletter()">Subscribe</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.php"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong>51/B1, Hiththatiya central , Matara (Head office)
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>+94 41 22 20281 /+94 71 91 18728
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">About Sales</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From Google Play</p>
                            <div class="download-app wow fadeIn animated">
<!--                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>-->
                                <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; 2021, <strong class="text-brand">Iconic Handcrafters</strong>   </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    Designed by <a href="#" target="_blank">Nipuna Liyanage</a>. All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
                            function signupnewzletter() {

                                var emailz = $('#newzletteremailz').val();


                                if (emailz == "") {

                                    swal("Error!", "Please enter your email....!", "error");
                                } else {

                                    $.post("phpfiles/addsubz.php",
                                            {
                                                uname: emailz

                                            },
                                    function(data, status) {
                                        if (data == "ok") {


                                            swal("Subscription Added...!", {
                                                icon: "success",
                                            });

                                            window.location = "index.php";


                                        } else {

                                            alert(data);
                                        }
                                    });
                                }

                            }



</script>
