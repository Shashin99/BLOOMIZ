<?php
session_start();
include("php/conn.php");
?>

<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from codeigniter.spruko.com/valex/ltr/public/pages/horizontal-light by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 14:27:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="dashboard, admin, bootstrap admin template, codeigniter, php, php framework, codeigniter 4, php mvc, php codeigniter, best php framework, codeigniter admin, codeigniter dashboard, admin panel template, bootstrap 4 admin template, bootstrap dashboard template" />

    <!-- Title -->
    <title> BLOOMIZ </title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Bootstrap css-->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-dark.css" rel="stylesheet">


    <!-- Maps css -->
    <link href="assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">


    <!-- Skinmodes css -->
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animations css -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!---Switcher css-->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="main-body">


    <!-- Loader -->
    <div id="global-loader">
        <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-header -->
        <?php include("header.php") ?>
        <!-- /main-header -->
        <!--Horizontal-main -->
        <?php include("nav.php") ?>
        <!--Horizontal-main -->



        <!-- main-content opened -->
        <div class="main-content horizontal-content">
            <!-- container opened -->
            <div class="container">

                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Services</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h3>Support Service</h3>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Customer Support</h6>
                                <div class="row">
                                    <div class="col-2">
                                        <img src="assets/img/ecommerce/coustomer1.jpeg">
                                    </div>
                                    <div class="col-10">
                                        <p><B>We offer a reliable support untill the trip finishes and after that also we will help !</B> <br><br> Bloomiz.lk offer coustomers with coustomer support with regurd to any inqury or support. We provide range of services to help our coustomers to get the most out of our service and resolve their problems. <br><br> During the peak travel season as well as in the festival season our team has allocated many staff members to help our coustomers with their problems. 
                                    
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h3>Online Service</h3>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="card-title">SMS Service</h6>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="assets/img/ecommerce/sms1.png">
                                            </div>
                                            <div class="col-10">
                                                <p>Ticket will be sent to your email with the conformation message of the trip. You can also activate the SMS service which would help you more.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <h6 class="card-title">Booking Report</h6>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="assets/img/ecommerce/booking1.jpg">
                                            </div>
                                            <div class="col-10">
                                                <ul type="disc">
                                                    <li>All the booking details will be sent to the Email on the moment booking.</li>
                                                    <li>All the details of the booking will be stored in our system to give you a better service next time.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <h6 class="card-title">Bus Routes</h6>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="assets/img/ecommerce/route1.jpg">
                                            </div>
                                            <div class="col-10">
                                                <p>The location will be updated every time.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <h6 class="card-title">Bus Service</h6>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="assets/img/ecommerce/service1.png">
                                            </div>
                                            <div class="col-10">
                                                <p>Comfortable seats are provided with a water bottle for each seat. A/C is provided with a LED TV.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>










            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->



        <!-- Footer opened -->
        <?php include("footer.php"); ?>
        <!-- Footer closed -->
    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Ionicons js -->
    <script src="assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="assets/plugins/moment/moment.js"></script>

    <!-- P-scroll js -->
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- eva-icons js -->
    <script src="assets/js/eva-icons.min.js"></script>

    <!-- Rating js-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="assets/plugins/rating/jquery.barrating.js"></script>

    <!-- Horizontalmenu js-->
    <script src="assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- Right-sidebar js -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>
    <script src="assets/plugins/sidebar/sidebar-custom.js"></script>


    <!--Internal  Chart.bundle js -->
    <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>

    <!--Internal Sparkline js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Raphael js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>

    <!--Internal Apexchart js-->
    <script src="assets/js/apexcharts.js"></script>

    <!-- Internal Map -->
    <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!--Internal  index js -->
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery.vmap.sampledata.js"></script>


    <!-- custom js -->
    <script src="assets/js/custom.js"></script>

    <!-- Switcher js -->
    <script src="assets/switcher/js/switcher.js"></script>

    <!--- Jquery.Coutdown js --->
    <script src="assets/plugins/jquery-countdown/jquery.lwtCountdown-1.0.js"></script>
    <script src="assets/plugins/jquery-countdown/count-down.js"></script>
</body>

</html>