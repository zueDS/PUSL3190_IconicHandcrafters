<!DOCTYPE html>
<html lang="en">



    <head>

        <meta charset="utf-8" />
        <title>Admin view  order details </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

               <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="AdminHome.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="AdminHome.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>


                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </button>
                        </div>

                        


                    </div>
                </div>
            </header>
            <?php
            include './leftsidebar.php';
            ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->


            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                        <!-- end row -->
                        <div class="row">


                            <!-- end col -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Details of order</h4>


                                        <table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item Name</th>
                                                    <th>Item ID</th>
                                                    <th>Unit Price</th>
                                                    <th>Qty</th>
                                                    <th>Seller Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                $orderid = $_GET["orderid"];
                                                $loadedid = "";
                                                include '../phpfiles/DB.php';

                                                $sqlz = "SELECT * FROM orderz where idorderz='$orderid'";
                                                $result = $conn->query($sqlz);
                                                if ($result->num_rows > 0) {
                                                    if ($row = $result->fetch_assoc()) {

                                                        $ordered_id = $row['orderidgenarated'];
                                                        $loadedid = $ordered_id;

                                                        $sqlzy3455 = "SELECT * FROM orderdetailz where orderidgenarated='$ordered_id'";
                                                        $statuzofutem = "";
                                                        $query455 = $conn->query($sqlzy3455);
                                                        foreach ($query455 as $value4) {

                                                            $orderstat = $value4['sellerstatusz'];
                                                            ?>
                                                            <tr>
                                                                <td><img src="../Phpfiles/<?php echo $value4['impathz']; ?>" style="width: 100px;height: 100px;"/></td>
                                                                <td><?php echo $value4['itemname']; ?></td>
                                                                <td><?php echo $value4['idgenareted']; ?></td>
                                                                <td><?php echo $value4['unitprice']; ?></td>
                                                                <td><?php echo $value4['qty']; ?></td>
                                                                <td id="selleridz<?php echo $value4['idorderdetails']; ?>"><?php echo $value4['selleridz']; ?></td>


                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>



                                        <h4 class="card-title">Payment info</h4>


                                        <table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Product Sub total</th>
                                                    <th>Delivery Cost</th>
                                                    <th>product Net total</th>
                                                    <th>District</th>
                                                    <th>City</th>
                                                    <th>Address</th>

                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                include '../phpfiles/DB.php';

                                                $sqlz2 = "SELECT * FROM orderz where idorderz='$orderid'";
                                                $result2 = $conn->query($sqlz2);
                                                if ($result2->num_rows > 0) {
                                                    if ($row = $result2->fetch_assoc()) {
                                                        ?>
                                                        <tr>

                                                            <td><?php echo $row['ordersubz']; ?></td>
                                                            <td><?php echo $row['orderdelcost']; ?></td>
                                                            <td><?php echo $row['ordernetcost']; ?></td>
                                                            <td><?php echo $row['districtsz']; ?></td>
                                                            <td><?php echo $row['cityz']; ?></td>
                                                            <td><?php echo $row['addressz']; ?></td>
                                                    <input type="hidden" value="<?php echo $row['orderidgenarated']; ?>" id="orderidload">

                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>

                                        <br>
                                        <br>
                                        <h4 class="card-title">Delivery person details</h4>
                                        <table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Delivery person name</th>
                                                    <th>Delivery person email</th>
                                                    <th>Contact 1</th>
                                                    <th>Contact 2</th>
                                                    <th>Date</th>
                                                    <th>Time</th>

                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                include '../phpfiles/DB.php';

                                                $sqlz2ee = "SELECT * FROM orderassigntodelveryperson where orderidz='$loadedid'";
                                                $result2ee = $conn->query($sqlz2ee);
                                                if ($result2ee->num_rows > 0) {
                                                    if ($rowee = $result2ee->fetch_assoc()) {
                                                        ?>
                                                        <tr>

                                                            <td><?php echo $rowee['delverypersonname']; ?></td>
                                                            <td><?php echo $rowee['deliverypersonemailz']; ?></td>
                                                            <td ><?php echo $rowee['personcontactz1']; ?></td>
                                                            <td><?php echo $rowee['personcontactz2']; ?></td>
                                                            <td id="dd"><?php echo $rowee['datez']; ?></td>
                                                            <td><?php echo $rowee['timez']; ?></td>

                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>


                            <!-- end col -->
                        </div>

                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                © <script>document.write(new Date().getFullYear())</script> Iconic Handcrafters <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Nipuna Liyanage.</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div> 

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script type="text/javascript" src="../ScriptFiles/Admin_pending_orders_controller.js"></script>


        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>

                                    function LoadCityz() {

                                        var getval = document.getElementById('input-district').value;

                                        $.post("../phpfiles/loaddistrictdeliveryperson.php",
                                                {
                                                    districtname: getval

                                                },
                                        function(data, status) {


                                            var cities = JSON.parse(data);
                                            $('#input-city').empty();
                                            $('#input-city').append('<option>None</option>');
                                            for (var i = 0; i < cities.length; i++) {
                                                $('#input-city').append('<option>' + cities[i].city + '</option>');
                                            }



                                        });

                                    }


                                    function Loaddelpersonz() {

                                        var getval = document.getElementById('input-city').value;

                                        $.post("../phpfiles/loaddelpersonz.php",
                                                {
                                                    districtname: getval

                                                },
                                        function(data, status) {


                                            var cities = JSON.parse(data);
                                            for (var i = 0; i < cities.length; i++) {

                                                $("#loadpersonemail").val(cities[i].emai);
                                                $("#loadpersonnic").val(cities[i].nic);
                                                $("#loadpersoncontact").val(cities[i].connum1);
                                                $("#loadpersoncontact2").val(cities[i].connum2);
                                                $("#loadpersoncity").val(cities[i].cityz);

                                            }



                                        });

                                    }


                                    function assignorderz() {

                                        var loadedorderedid = $('#orderidload').val();
                                        var delpersonname = document.getElementById('input-city').value;
                                        var depersonemail = $('#loadpersonemail').val();
                                        var delpersonnic = $('#loadpersonnic').val();
                                        var delpersoncontact1 = $('#loadpersoncontact').val();
                                        var delpersoncontact2 = $('#loadpersoncontact2').val();

                                        var getval = document.getElementById('input-district').value;
                                        var getval2 = document.getElementById('input-city').value;
                                        if (getval == "Select District" || getval2 == "None") {

                                            swal("Error!", "Please select valid district and delivery person....!", "error");
                                        } else {

                                            $.post("../phpfiles/assigndelitemz.php",
                                                    {
                                                        loadedorderedid: loadedorderedid,
                                                        delpersonname: delpersonname,
                                                        depersonemail: depersonemail,
                                                        delpersonnic: delpersonnic,
                                                        delpersoncontact1: delpersoncontact1,
                                                        delpersoncontact2: delpersoncontact2

                                                    },
                                            function(data, status) {
                                                if (data == "ok") {


                                                    swal("Order Assigned...!", {
                                                        icon: "success",
                                                    });

                                                    window.location = "ViewAssignedorder.php";


                                                }
                                                else {

                                                    alert(data);
                                                }

                                            });

                                        }

                                    }

                                    function SendMessageToSellerz(dd) {


                                        var seller_emailz = $('#modelemailz').val();
                                        var seller_messagez = $('#messagedetailz').val();
                                        if (seller_messagez == "") {

                                            swal("Error!", "Please type your message..!", "error");
                                        } else {
                                            swal({
                                                title: "Are you sure?",
                                                text: "You want to send message to " + seller_emailz + "?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                                    .then(function(willDelete) {
                                                        if (willDelete) {

                                                            $.post("../Phpfiles/adminsendmessagetoseller.php",
                                                                    {
                                                                        seller_emailz: seller_emailz,
                                                                        seller_messagez: seller_messagez

                                                                    },
                                                            function(data, status) {
                                                                if (data == "ok") {


                                                                    swal("Done!Message Sent to Seller..!", {
                                                                        icon: "success",
                                                                    });

                                                                    window.location = "AdminSentbox.php";


                                                                } else {

                                                                    swal("Error!", "" + data, "error");

                                                                }

                                                            });




                                                        } else {

                                                        }
                                                    });

                                        }

                                    }


                                    function buyerrmeszz(dd) {

                                        var sellerz = $('#selleridz' + dd).text();

                                        document.getElementById("modelemailz").value = sellerz;
                                        $('#exampleModal').modal('show');

                                    }

                                    function closemdlz() {

                                        $("#exampleModal").modal('hide');
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
                            <label for="message-text" class="col-form-label">Seller email:</label>
                            <input type="text" class="form-control" id="modelemailz"  disabled="" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Your Message:</label>
                            <textarea class="form-control" id="messagedetailz" style="height: 150px;" placeholder="Type your message here"></textarea>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" style="background-color: #f44336;" onclick="closemdlz()">close</button>
                        <button type="button" class="btn btn-success" style="background-color: #008CBA;" onclick="SendMessageToSellerz()">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>