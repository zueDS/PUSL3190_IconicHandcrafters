<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Seller view Active products </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
        <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
        <!-- END PAGE LEVEL STYLES -->

    </head>
    <body>
        <!-- BEGIN LOADER -->
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Seller</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>My active listings</span></li>
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
                <div class="layout-px-spacing">

                    <div class="row layout-top-spacing">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">


                            <div class="widget-content widget-content-area br-6">

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>My active listings</h4>
                                    </div>                 
                                </div>
                                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Unit Price</th>

                                            <th>Weight</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../Phpfiles/DB.php';
                                        session_start();
                                        $sellerz_emailz = $_SESSION["emailz"];


                                        $sqlzy34ratz = "SELECT * FROM sellerratingz where selleremailz='$sellerz_emailz'";
                                        $query4ratz = $conn->query($sqlzy34ratz);
                                        $isellerrank = 0;
                                        $selleratingz = 0;
                                        foreach ($query4ratz as $value4ratz) {
                                            $selleratingz = $value4ratz['ratingz'];
                                        }
                                        if ($selleratingz >= 0 && $selleratingz < 100) {
                                            $isellerrank = 1;
                                        } else if ($selleratingz >= 100 && $selleratingz < 300) {
                                            $isellerrank = 2;
                                        } else if ($selleratingz >= 300 && $selleratingz < 600) {
                                            $isellerrank = 3;
                                        }


                                        $sqlzy34 = "SELECT * from sellerpostitem where selleremailz='$sellerz_emailz' and statusz='Accept'";
                                        $query4 = $conn->query($sqlzy34);
                                        foreach ($query4 as $value4) {

                                            $loadingstockz = $value4['stockavailab'];
                                            ?>

                                            <tr>
                                                <td><img src="../Phpfiles/<?php echo $value4['thumimgz']; ?>" style="width: 100px;height: 100px;"></td>
                                                <td><?php echo $value4['proidgenarated']; ?></td>
                                                <td><?php echo $value4['titleproduct']; ?></td>
                                                <td><?php echo $value4['unitpricez']; ?></td>
                                                <td><?php echo $value4['weightz']; ?></td>

                                        <input type="hidden" id="itemidz<?php echo $value4['itemidsellerpost']; ?>" value="<?php echo $value4['proidgenarated']; ?>">
                                        <input type="hidden" id="itemnamez<?php echo $value4['itemidsellerpost']; ?>" value="<?php echo $value4['titleproduct']; ?>">
                                        <input type="hidden" id="itemup<?php echo $value4['itemidsellerpost']; ?>" value="<?php echo $value4['unitpricez']; ?>">

                                        <?php
                                        if ($loadingstockz == "In Stock") {
                                            ?>
                                            <td><button class="btn btn-danger" onclick="markqtynot(<?php echo $value4['itemidsellerpost']; ?>)">Mark as out of Qty</button></td>
                                            <?php
                                        } else {
                                            ?>
                                            <td><button class="btn btn-success" onclick="markqtyavailable(<?php echo $value4['itemidsellerpost']; ?>)">Mark as available</button></td>
                                            <?php
                                        }
                                        ?>
                                        <td><button class="btn btn-info" onclick="EditItem(<?php echo $value4['itemidsellerpost']; ?>)">Edit listing</button></td>
                                        <td><button class="btn btn-danger" onclick="removelisting(<?php echo $value4['itemidsellerpost']; ?>)">Remove listing</button></td>
                                        <?php
                                        if ($isellerrank == 2) {

                                            $lodzoff = $value4['offername'];
                                            if ($lodzoff == "") {
                                                ?> 

                                                <td>  <button type="button" class="btn btn-primary" onclick="openmdl(<?php echo $value4['itemidsellerpost']; ?>)">Add offer</button></td>
                                                <?php
                                            }
                                        } if ($isellerrank == 3) {
                                            ?>
                                            <td>  <button type="button" class="btn btn-primary" onclick="openmdl(<?php echo $value4['itemidsellerpost']; ?>)">Add offer</button></td>

                                            <td><button type="button" class="btn btn-primary" onclick="boostthis(<?php echo $value4['itemidsellerpost']; ?>)">Boost product</button></td>
                                            <?php
                                        }
                                        ?>
                                        </tr>
                                        <?php
                                    }
                                    ?>


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Unit Price</th>

                                            <th>Weight</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plugins/table/datatable/datatables.js"></script>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>


                                        function boostthis(dd) {
                                            var idgenarated = $('#itemidz' + dd).val();
                                            var itemname = $('#itemnamez' + dd).val();
                                            swal({
                                                title: "Are you sure?",
                                                text: "You want mark "+idgenarated+" as boosted product?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("../phpfiles/makeitemasboosted.php",
                                                                    {
                                                                        itemid: idgenarated

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done! Item marked as boosted product..!", {
                                                                        icon: "success",
                                                                    });

                                                                    window.location = "SellerMyAdds.php";


                                                                }else if(data == "al"){
                                                                    swal("Error!", "Item Already in boosted products", "error")
                                                                } else {

                                                                    swal("Error!", "" + data, "error");

                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });
                                            
                                        }

                                        function markqtynot(dd) {

                                            var userid = dd;



                                            swal({
                                                title: "Are you sure?",
                                                text: "You want mark this listing as out of qty ?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("../phpfiles/sellermarkitemasnotqty.php",
                                                                    {
                                                                        userid: userid

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done! Item marked as not available..!", {
                                                                        icon: "success",
                                                                    });

                                                                    window.location = "SellerMyAdds.php";


                                                                } else {

                                                                    swal("Error!", "" + data, "error");

                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });


                                        }

                                        function markqtyavailable(dd) {

                                            var userid = dd;



                                            swal({
                                                title: "Are you sure?",
                                                text: "You want mark this listing as available ?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("../phpfiles/sellermarkitemasavailable.php",
                                                                    {
                                                                        userid: userid

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done! Item marked as  available..!", {
                                                                        icon: "success",
                                                                    });

                                                                    window.location = "SellerMyAdds.php";


                                                                } else {

                                                                    swal("Error!", "" + data, "error");

                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });


                                        }
                                        function removelisting(dd) {

                                            var userid = dd;



                                            swal({
                                                title: "Are you sure?",
                                                text: "You want remove this listing...?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("../phpfiles/SellerremoveListing.php",
                                                                    {
                                                                        userid: userid

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done! Listing removed..!", {
                                                                        icon: "success",
                                                                    });

                                                                    window.location = "SellerMyAdds.php";


                                                                } else {

                                                                    swal("Error!", "" + data, "error");

                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });


                                        }

                                        function openmdl(dd) {
                                            var idgenarated = $('#itemidz' + dd).val();
                                            var itemname = $('#itemnamez' + dd).val();
                                            var itemup = $('#itemup' + dd).val();


                                            document.getElementById("modelitemname").value = itemname;
                                            document.getElementById("modelitemID").value = idgenarated;
                                            document.getElementById("modelitemup").value = itemup;
                                            $('#exampleModal').modal('show');
                                        }

                                        function arrangeoffer() {

                                            var itemnamez = $('#modelitemname').val();
                                            var iteidz = $('#modelitemID').val();
                                            var offernamez = $('#offer-name').val();
                                            var offerpercentage = $('#offer-percentage').val();
                                            var offerupz = $('#modelitemup').val();

                                            if (offernamez == "") {

                                                swal("Error!", "Please enter offer name..", "error");
                                            } else {

                                                swal({
                                                    title: "Are you sure?",
                                                    text: "You want add offer to" + itemnamez + " about " + offerpercentage + " % ?",
                                                    icon: "warning",
                                                    buttons: true,
                                                    dangerMode: true,
                                                })
                                                        .then(function(willDelete) {
                                                            if (willDelete) {

                                                                $.post("../phpfiles/SellerAddoffertoitem.php",
                                                                        {
                                                                            itemnamez: itemnamez,
                                                                            iteidz: iteidz,
                                                                            offernamez: offernamez,
                                                                            offerpercentage: offerpercentage,
                                                                            offerupz: offerupz

                                                                        },
                                                                function(data, status) {
                                                                    if (data == "ok") {


                                                                        swal("Done! Offer added..!", {
                                                                            icon: "success",
                                                                        });

                                                                        window.location = "SellerviewOfferItem.php";


                                                                    } else {

                                                                        swal("Error!", "" + data, "error");

                                                                    }

                                                                });




                                                            } else {

                                                            }
                                                        });
                                            }




                                        }

                                        function EditItem(dd) {

                                            window.location = "SellerEditAdd.php?itemidz=" + dd;
                                        }
        </script>


        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Offer Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Item name:</label>
                            <input type="text" class="form-control" id="modelitemname"  disabled="" />
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Item ID:</label>
                            <input type="text" class="form-control" id="modelitemID"  disabled="" />
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Item Unit Price:</label>
                            <input type="text" class="form-control" id="modelitemup"  disabled="" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Offer name:</label>
                            <input type="text" class="form-control" id="offer-name" placeholder="Enter your offer name" />
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Discount percentage:</label>
                            <input type="number" class="form-control" id="offer-percentage" min="1" max="99" value="1" />
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                        <button type="button" class="btn btn-success" onclick="arrangeoffer()">Arrange offer</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>