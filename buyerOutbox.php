<!DOCTYPE html>
<html class="no-js" lang="en">


    <head>
        <meta charset="utf-8">
        <title>Buyer -Sent box</title>
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
                    <span></span> Sent box
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="tab-content dashboard-content">

                                    <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">

                                                <h5 class="mb-0">Your Sentbox</h5>
                                            </div>
                                            <div class="card-body">
                                                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Receiver's name</th>
                                                            <th>Receiver's email</th>
                                                            <th>Sent Message</th>
                                                            <th>Date</th>
                                                            <th>Time</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include 'Phpfiles/DB.php';
                                                        $sellerz_emailz = $_SESSION["emailz"];


                                                        $sqlzy3455 = "SELECT * FROM messages_buyer_to_seller where buyeremail='$sellerz_emailz' ORDER BY id DESC";
                                                        $isellerrank = 0;
                                                        $query455 = $conn->query($sqlzy3455);
                                                        foreach ($query455 as $value45) {
                                                            $isellerrank++;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $isellerrank; ?></td>  
                                                                <td><?php echo $value45['sellername']; ?></td>
                                                                <td><?php echo $value45['selleremail']; ?></td>
                                                                <td><?php echo $value45['messagez']; ?></td>
                                                                <td><?php echo $value45['datez']; ?></td>
                                                                <td><?php echo $value45['timez']; ?></td>


                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>


                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Receiver's name</th>
                                                            <th>Receiver's email</th>
                                                            <th>Sent Message</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
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
        function SendMessageToSeller(dd) {


            var seller_emailz = $('#modelemailz').val();
            var seller_namez = $('#modelnamez').val();
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

                                $.post("Phpfiles/buyersendmessafetoseller.php",
                                        {
                                            seller_emailz: seller_emailz,
                                            seller_namez: seller_namez,
                                            seller_messagez: seller_messagez

                                        },
                                function(data, status) {
                                    if (data == "ok") {


                                        swal("Done!Message Sent to Seller..!", {
                                            icon: "success",
                                        });

                                        window.location = "buyerInbox.php";


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

            var buyeremailz = $('#seleremm' + dd).text();
            var buyerenamez = $('#selernn' + dd).text();

            document.getElementById("modelemailz").value = buyeremailz;
            document.getElementById("modelnamez").value = buyerenamez;
            $('#exampleModal').modal('show');

        }


        function messagemarkasreadbuyer(dd) {

            swal({
                title: "Are you sure?",
                text: "You want to mark this message as read?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                    .then(function(willDelete) {
                        if (willDelete) {

                            $.post("Phpfiles/buyermarkmessageasread.php",
                                    {
                                        rowz: dd

                                    },
                            function(data, status) {
                                if (data == "ok") {


                                    swal("Done!Message mark as read..!", {
                                        icon: "success",
                                    });

                                    window.location = "buyerInbox.php";


                                } else {

                                    swal("Error!", "" + data, "error");

                                }

                            });




                        } else {

                        }
                    });

        }
        function closemdlz() {

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
                    <button type="button" class="btn btn-danger" style="background-color: #f44336;" onclick="closemdlz()">close</button>
                    <button type="button" class="btn btn-success" style="background-color: #008CBA;" onclick="SendMessageToSeller()">Send Message</button>
                </div>
            </div>
        </div>
    </div>

</body>


</html>