<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Seller | Add New Item </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
        <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
    </head>
    <body data-spy="scroll" data-target="#navSection" data-offset="100">

        <!--  BEGIN NAVBAR  -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div></div></div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">

                <ul class="navbar-item theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="SellerHome.php">
                            <img src="assets/img/logo.svg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="SellerHome.php" class="nav-link"> Iconic-Handcrafters </a>
                    </li>
                </ul>



                <ul class="navbar-item flex-row ml-md-auto">





                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="assets/img/profile-16.jpg" alt="avatar">
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="">
                                <div class="dropdown-item">
                                    <a class="" href="Seller_Myaccount.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                </div>
                                <div class="dropdown-item">
                                    <a class="" href="SellerInbox.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                                </div>

                                <div class="dropdown-item">
                                    <a onclick="Logzoutzbuyer()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    </li>

                </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->

        <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

                <ul class="navbar-nav flex-row">
                    <li>
                        <div class="page-header">

                            <nav class="breadcrumb-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Item</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>New Listing</span></li>
                                </ol>
                            </nav>

                        </div>
                    </li>
                </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            <div class="sidebar-wrapper sidebar-theme">

                <?php
                include './SellerNavbar.php';
                ?>

            </div>
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">

                <form class="login-form" method="POST" action="../Phpfiles/Seller_post_item.php" enctype="multipart/form-data"  id="form">

                    <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Main Information</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Select product category</label>
                                            <select id="inputcate" class="form-control" name="inputcate">
                                                <option selected>None</option>
                                                <?php
                                                include '../Phpfiles/DB.php';


                                                $sqlzy34 = "SELECT * FROM shopcatos where statusz='Active'";
                                                $query4 = $conn->query($sqlzy34);

                                                foreach ($query4 as $value4) {
                                                    ?>
                                                    <option value="<?php echo $value4['catoname']; ?>"><?php echo $value4['catoname']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Product title to display</label>
                                            <input type="text" class="form-control" id="protitle" name="protitle" placeholder="Product title">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="inputAddress">Product description</label>
                                        <input type="text" class="form-control" id="prodes" name="prodes" placeholder="Product Description" style="height: 250px;">
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Warranty time and type</label>
                                            <input type="text" class="form-control" id="prowaratype" name="prowaratype" placeholder="Eg: 1 year Seller warrenty">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Return Policy</label>
                                            <input type="text" class="form-control" id="proretutypez" name="proretutypez" placeholder="30 Day Return Policy">
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Facebook Link of Product if has</label>
                                            <input type="text" class="form-control" id="profblink" name="profblink" placeholder="Link Social Media page">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Instagram Link of Product if has</label>
                                            <input type="text" class="form-control" id="proinsgramlink" name="proinsgramlink" placeholder="Link Social Media page">
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Sizes Available</label>
                                            <select id="inputcate" class="form-control" id="prosizes" name="prosizes">


                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                                <option>XXL</option>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Colors Available</label>


                                            <select id="inputcate" class="form-control" id="procolorz" name="procolorz">

                                                <option>Red</option>
                                                <option>Blue</option>
                                                <option>Black</option>
                                                <option>Green</option>
                                                <option>Yellow</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Weight</label>
                                            <input type="text" class="form-control" id="proweight" name="proweight" placeholder="Your product weight ; 150g,1 KG">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Product Price</label>
                                            <input type="text" class="form-control" id="proprices" name="proprices" placeholder="Your product Unit Price">
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Contact</label>
                                            <input type="text" class="form-control" id="contactz" name="contactz" placeholder="Contact Number">
                                        </div>


                                    </div>






                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">


                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Product Images</h4>
                        </div>                                                                        




                        <div id="fuSingleFile" class="col-lg-6 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Thumbnail Image</h4>
                                        </div>      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="thumbimage">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div id="fuSingleFile" class="col-lg-6 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Second Image</h4>
                                        </div>      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Upload (Second Image) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="imagez2">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div id="fuSingleFile" class="col-lg-6 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Third Image</h4>
                                        </div>      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="mythirdImage">
                                        <label>Upload (Third Image) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="imagez3">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div id="fuSingleFile" class="col-lg-6 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Fourth Image</h4>
                                        </div>      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="myfourthImage">
                                        <label>Upload (fourth image) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="imagez4">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>


                                </div>
                            </div>
                        </div>



                    </div>


                    <center>
                        <button type="submit" class="btn btn-success mt-3">Add New Item</button>
                    </center>

                </form>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">Nipuna Liyanage</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>
            </div>
            <!--  END CONTENT AREA  -->
        </div>
        <!-- END MAIN CONTAINER -->



        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="plugins/blockui/jquery.blockUI.min.js"></script>
        <script src="assets/js/app.js"></script>

        <script>
                                        $(document).ready(function() {
                                            App.init();
                                        });
        </script>
        <script src="plugins/highlight/highlight.pack.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/js/scrollspyNav.js"></script>
        <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>

        <script>
                                        //First upload
                                        var firstUpload = new FileUploadWithPreview('myFirstImage')
                                        //Second upload
                                        var secondUpload = new FileUploadWithPreview('mySecondImage')

                                        var ThirdUpload = new FileUploadWithPreview('mythirdImage')

                                        var FoutrthUpload = new FileUploadWithPreview('myfourthImage')
        </script>
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/app.js"></script>

        <script>
                                        $(document).ready(function() {
                                            App.init();
                                        });
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/apex/apexcharts.min.js"></script>
        <script src="assets/js/widgets/modules-widgets.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
                                        $("#form").on('submit', (function(e) {


                                            e.preventDefault();
                                            $.ajax({
                                                url: "../Phpfiles/Seller_post_item.php",
                                                type: "POST",
                                                data: new FormData(this),
                                                contentType: false,
                                                cache: false,
                                                processData: false,
                                                beforeSend: function()
                                                {
                                                    //$("#preview").fadeOut();
                                                    //  $("#err").fadeOut();
                                                },
                                                success: function(data)
                                                {

                                                    if (data == 'emptycato') {

                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please Select valid category!'
                                                        });
                                                    }
                                                    else if (data == 'emptyproname') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid title...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyprodes') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid description...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyprowarrentytype') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid warrenty type...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyproreturntype') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid product return option...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyprosize') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid Size...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyprocolors') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid color...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyproweight') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid weight...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyproprice') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid price...!'
                                                        });
                                                    }
                                                    else if (data == 'emptyprosearchz') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter at least one search tag...!'
                                                        });
                                                    }
                                                    else if (data == 'imageone') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please Select valid image...!'
                                                        });
                                                    }
                                                    else if (data == 'emptycontactz') {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Please enter valid contact number...!'
                                                        });
                                                    }
                                                    else if (data == 'ok') {
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Your product has send to admin aproovals....!',
                                                            showConfirmButton: true,
                                                            timer: 1500
                                                        });
                                                        window.location = "mypendingadds.php";
                                                    }

                                                    else
                                                    {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: 'Some thing went wrong pleast complete all the requirements!'
                                                        });
                                                    }
                                                },
                                                error: function(e)
                                                {
                                                    $("#err").html(e).fadeIn();
                                                }
                                            });
                                        }));
                                        $("#form").bind('ajax:complete', function() {

                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Your product has send to admin aproovals....!',
                                                showConfirmButton: true,
                                                timer: 1500
                                            });
                                        });
        </script>
        <!-- END PAGE LEVEL PLUGINS -->    
    </body>


</html>