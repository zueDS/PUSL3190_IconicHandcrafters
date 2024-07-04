<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Buyer - Offered coupon</title>
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
        <link rel="stylesheet" type="text/css" href="Seller/plugins/table/datatable/datatables.css">
        <link rel="stylesheet" type="text/css" href="Seller/plugins/table/datatable/dt-global_style.css">
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
                    <span></span> Buyer
                    <span></span> offered coupon
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="tab-content dashboard-content">

                                    <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">

                                                <h5 class="mb-0">Gifts sent by you</h5>
                                            </div>
                                            <div class="card-body">
                                                 <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Customer email</th>
                                            <th>Customer name</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Coupon Status</th>
                                            <th>Payment Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'Phpfiles/DB.php';
                                        $sellerz_emailz = $_SESSION["emailz"];


                                        $sqlzy3455 = "SELECT * FROM userhascoupoun where offersuer='$sellerz_emailz'";
                                        $statuzofutem = "";
                                        $isellerrank = 0;
                                        $query455 = $conn->query($sqlzy3455);
                                        foreach ($query455 as $value45) {
                                            $isellerrank++;
                                            ?>
                                            <tr>
                                                <td><?php echo $isellerrank; ?></td>  
                                                <td><?php echo $value45['coupounidgenarated']; ?></td>
                                                <td><?php echo $value45['gotuserz']; ?></td>
                                                <td><?php echo $value45['gotusernamez']; ?></td>
                                                <td>LKR <?php echo $value45['amountzcoupon']; ?> /=</td>
                                                <td><?php echo $value45['datez']; ?></td>
                                                <td><?php echo $value45['timez']; ?></td>
                                                <?php
                                                if ($value45['statusz'] == "Notused") {
                                                    ?>
                                                    <td><span class="badge rounded-pill bg-warning"><b>Not used yet</b></span></td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td><span class="badge rounded-pill bg-success"><b>Used</b></span></td>
                                                    <?php
                                                }if ($value45['payementstatz'] == "notpayed") {
                                                    ?>
                                                    <td><span class="badge rounded-pill bg-danger"><b>Not payed</b></span></td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td><span class="badge rounded-pill bg-success"><b>Payed</b></span></td>
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
                                            <th>Customer email</th>
                                            <th>Customer name</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="Seller/bootstrap/js/popper.min.js"></script>
    <script src="Seller/bootstrap/js/bootstrap.min.js"></script>
    <script src="Seller/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="Seller/assets/js/app.js"></script>

    <script>
                                                                $(document).ready(function() {
                                                                    App.init();
                                                                });
    </script>
    <script src="Seller/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="Seller/plugins/table/datatable/datatables.js"></script>
    <script>
                                                                $('#zero-config').DataTable({
                                                                    "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                                                                            "<'table-responsive'tr>" +
                                                                            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                                                                    "oLanguage": {
                                                                        "oPaginate": {"sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'},
                                                                        "sInfo": "Showing page _PAGE_ of _PAGES_",
                                                                        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                                                                        "sSearchPlaceholder": "Search...",
                                                                        "sLengthMenu": "Results :  _MENU_",
                                                                    },
                                                                    "stripeClasses": [],
                                                                    "lengthMenu": [7, 10, 20, 50],
                                                                    "pageLength": 7
                                                                });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
                                                                function buyepaycoup(dd) {

                                                                    var buyeremailz = $('#modelemailz').val();
                                                                    var buyerenamez = $('#modelnamez').val();
                                                                    var coupounpricez = $('#coupounpercentage').val();



                                                                    if (coupounpricez == "") {

                                                                        swal("Error!", "Enter valid coupon amount..", "error");
                                                                    } else {



                                                                        swal({
                                                                            title: "Are you sure?",
                                                                            text: "You want to gift to " + buyerenamez + " for  LKR " + coupounpricez + "/= ?",
                                                                            icon: "warning",
                                                                            buttons: true,
                                                                            dangerMode: true,
                                                                        })
                                                                                .then(function(willDelete) {
                                                                                    if (willDelete) {

                                                                                        $.post("phpfiles/buyeroffercoup.php",
                                                                                                {
                                                                                                    buyeremailz: buyeremailz,
                                                                                                    buyerenamez: buyerenamez,
                                                                                                    coupounpricez: coupounpricez

                                                                                                },
                                                                                        function(data, status) {
                                                                                            if (data == "ok") {


                                                                                                swal("Done!Gift sent to friend..Your friend will appriciate your support...!", {
                                                                                                    icon: "success",
                                                                                                });

                                                                                                window.location = "UserOffercoupon.php";


                                                                                            } else {

                                                                                                swal("Error!", "" + data, "error");

                                                                                            }

                                                                                        });




                                                                                    } else {

                                                                                    }
                                                                                });

                                                                    }
                                                                }


                                                                function buyerzoffercoupon(dd) {

                                                                    var buyeremailz = $('#buyeremlz' + dd).text();
                                                                    var buyerenamez = $('#buyernamez' + dd).text();

                                                                    document.getElementById("modelemailz").value = buyeremailz;
                                                                    document.getElementById("modelnamez").value = buyerenamez;
                                                                    $('#exampleModal').modal('show');

                                                                }

                                                                function closemdl() {

                                                                    $("#exampleModal").modal('hide');
                                                                }




    </script>
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
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Coupon Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Offering email:</label>
                        <input type="text" class="form-control" id="modelemailz"  disabled="" />
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Offering name:</label>
                        <input type="text" class="form-control" id="modelnamez"  disabled="" />
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Coupon value:</label>
                        <input type="number" class="form-control" id="coupounpercentage" min="1" max="100000" value="1" />
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="closemdl()">close</button>
                    <button type="button" class="btn btn-success" onclick="buyepaycoup()">Pay for coupon</button>
                </div>
            </div>
        </div>
    </div>

</body>


</html>