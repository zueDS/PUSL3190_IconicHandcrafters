<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="AdminHome.php" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-box"></i>
                        <span> User </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="AllBuyers.php">All buyers</a></li>
                        <li><a href="Allsellers.php">All sellers</a></li>
                        <li><a href="rejectedbuyers.php">Rejected buyers</a></li>
                        <li><a href="rejectedsellers.php">Rejected sellers</a></li>
                        <li><a href="ViewAllusers.php">All users</a></li>
                        <li><a href=SellerRatings.php"">Seller ratings</a></li>
                        <li><a href="buyerrating.php">Buyer ratings</a></li>
                        <li><a href="AdminSentbox.php">Messages to seller</a></li>
                        <li><a href="Adminsubzusers.php">Subscribed users</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-ab-testing"></i>
                        <span> Category </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="AddnewcategoryAdmin.php">Add New Category</a></li>
                        <li><a href="AdminViewCategory.php">View Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-briefcase-outline"></i>
                        <span>  Items on listing </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="AdminViewPostedBids.php">New Item Requests</a></li>
                        <li><a href="AdminViewOngoingListing.php">On going Listings</a></li>
                        <li><a href="AdminviewOngoingofferitems.php">Items on offers</a></li>
                        <li><a href="AdminViewpendingcoments.php">Pending reviews</a></li>
                        <li><a href="viewItemstoviewreview.php">All reviews</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-storefront-outline"></i>
                        <span> Order Details </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="AdminViewPendingOrders.php">Pending orders</a></li>
                        <li><a href="AdminViewAssignedordes.php">Assigned orders</a></li>
                        <li><a href="AdminViewCompletedOrders.php">Completed Orders</a></li>
                        <li><a href="">Manage Delivery Cost</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-cash"></i>
                        <span> Payments </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Adminviewcoupons.php">View coupon payments</a></li>
                        <li><a href="AdminViewOrderPayments.php">Order payments</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-cash-outline"></i>
                        <span> Delivery details </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="AddnewDeleiveryPerson.php">Add delivery person</a></li>
                        <li><a href="Deliverypersondetails.php">Delivery person details</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-cursor-pointer"></i>
                        <span> Account Details </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Editaccountz.php">Change Account Details</a></li>
                        <li><a  onclick="logout()">Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
                            function logout() {
                                var k = "g";
                                $.post("../phpfiles/logoutAdmin.php",
                                        {
                                            pw: k

                                        },
                                function(data, status) {
                                    if (data == "ok") {


                                        swal("Logout...!", {
                                            icon: "success",
                                        });
                                        window.location = "AdminLogin.php";


                                    }

                                });

                            }
</script>