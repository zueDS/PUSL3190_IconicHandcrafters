<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="utf-8" />
        <title>Login | Admin - Iconic Handcrafters</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico"> 

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">

                                <h3 class="text-center mt-5 mb-4">
                                    <a href="#" class="d-block auth-logo">
                                        <img src="../assets/tstlogz.png" alt="" style="width: 100px;height: 100px;">
                                    </a>
                                </h3>

                                <div class="p-3">
                                    <h4 class="text-muted font-size-18 mb-1 text-center">Welcome Back !</h4>
                                    <p class="text-muted text-center">Sign in to continue to Iconic Hand crafters.</p>
                                    <form class="form-horizontal mt-4" action="#">
                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username-admin" placeholder="Enter username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword-pw" placeholder="Enter password">
                                        </div>
                                        <div class="mb-3 row mt-4">
                                            <div class="col-6">

                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="button" onclick="AdminLogin()">Log In</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            © <script>document.write(new Date().getFullYear())</script> Iconic Handcrafters <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Nipuna Liyanage.</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
                                function AdminLogin() {

                                    var cutomer = document.getElementById("username-admin").value;
                                    var email = document.getElementById("userpassword-pw").value;




                                    if (cutomer == "" || email == "") {

                                        swal("Error!", "Please Fill All Details...!", "error");
                                    } else {

                                        $.post("../phpfiles/Admin_login.php",
                                                {
                                                    uname: cutomer,
                                                    pw: email

                                                },
                                        function(data, status) {

                                            if (data == "ok") {


                                                swal("Login Sucess...!", {
                                                    icon: "success",
                                                });
                                                window.location = "AdminHome.php";


                                            } else if (data == "acc") {


                                                swal("Error!", "Invalid Login Details...!", "error");



                                            }
                                            else if (data == "Invalid") {


                                                swal("Error!", "Invalid Login Details...!", "error");



                                            }

                                        });


                                    }
                                    return false;
                                }



        </script>
    </body>


</html>