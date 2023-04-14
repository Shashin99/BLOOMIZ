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
                            <h4 class="content-title mb-0 my-auto">About Us</h4>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-3">
                        <img src="assets/img/ecommerce/logo1.png" alt="" class="w-100">
                    </div>
                    <div class="col-9" style="font-size:25px; text-align:Justify;">
                        
                    We have been pioneer is booking online bus tickets in Sri Lanka since 2022.Through this service long distance travelers can book bus seats anywhere in Sri Lanka. We are here to provide you in 24 hours service for the day.
                    </div>

                    <div class="col-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Mission</div>
                                Our Mission is to satisfy the customer with our best service. Become essential to our customers by providing best services to help them achieve their aspirationse.
                            </div>
                        </div>
                    </div>

                    <div class="col-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Vision</div>
                                The main outcome that we expect is to help our customers to save time, improve efficiency and an efficient booking process.
                            </div>
                        </div>
                    </div>


                </div>

                <h3 class="text-center mb-4">Our Team</h3>
                <div class="row row-sm">

                    <div class="col-md-1 col-lg-1">
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <div class="card">
                            <img alt="Image" class="img-fluid card-img-top" src="assets/img/photos/21.png">
                            <div class="card-body ">
                                <p class="card-text">P.M.C. Hiruni Pathiraja</p>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-2 col-lg-2 mg-md-t-0">
                        <div class="card">
                            <img alt="Image" class="img-fluid card-img-top" src="assets/img/photos/21.png">
                            <div class="card-body ">
                                <p class="card-text">Bentotage S. N </p>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-2 col-lg-2 mg-md-t-0">
                        <div class="card">
                            <img alt="Image" class="img-fluid card-img-top" src="assets/img/photos/21.png">
                            <div class="card-body ">
                                <p class="card-text">W.A. Ishini Gunarathna</p>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-2 col-lg-2 mg-md-t-0">
                        <div class="card">
                            <img alt="Image" class="img-fluid card-img-top" src="assets/img/photos/21.png">
                            <div class="card-body ">
                                <p class="card-text">F. A. M. Nuski</p>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-2 col-lg-2 mg-md-t-0">
                        <div class="card">
                            <img alt="Image" class="img-fluid card-img-top" src="assets/img/photos/21.png">
                            <div class="card-body ">
                                <p class="card-text">K.L.Shashin Kalpajith </p>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-1 col-lg-1">
                    </div>
                </div>


                <h3 class="text-center mt-5 mb-5">....Book Your Bus Ticket and Wonder Around....</h3>







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