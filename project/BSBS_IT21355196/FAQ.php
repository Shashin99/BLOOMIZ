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
                            <h4 class="content-title mb-0 my-auto">FAQ</h4>
                        </div>
                    </div>
                </div>






                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body h-100">
                                <div id="accordion" class="w-100 br-2 overflow-hidden">
                                    <div class="">
                                        <div class="accor bg-primary" id="headingOne1">
                                            <h4 class="m-0">
                                                <a href="#collapseOne1" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                                    <i class="si si-cursor-move mr-2"></i>Ticket Booking
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="border p-3">
                                            <h3> How to book your bus tickets with Bloomz.lk ? </h3>
                                            <p>
                                            	1. Go to ticket booking page <br>
                                            	2. Select relevent route  <br>
                                            	3. Select the vehicle no and click on "book now" button  <br>
                                            	4. Select the seat no  <br>
                                                5. Fill the booking details <br>
                                            	6. Click on "confirm booking" button 
                                            </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="accor  bg-primary" id="headingTwo2">
                                            <h4 class="m-0">
                                                <a href="#collapseTwo2" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="si si-cursor-move mr-2"></i>Payment Method
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo2" class="collapse b-b0" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="border p-3">
                                            <h3> How to make your payment with Bloomiz.lk ? </h3>
                                            <p>
                                            	1. After confirm your booking, you will be redirected to payment page.<br>
                                            	2. Select your payment method  <br>
                                            	3. Fill the relevent payment details <br>
                                            	4. Click on complete payment button <br>
                                                 
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="accor  bg-primary" id="headingThree3">
                                            <h4 class="m-0">
                                                <a href="#collapseThree1" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="si si-cursor-move mr-2"></i>Cancellation
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree1" class="collapse b-b0" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="border p-3">
                                            <h3> How to cancel your bus ticket with Bloomiz.lk ? </h3>
                                            <p>
                                            Call us  0112344561 / 0112344562 from 8 am to 5 pm daily to cancel your tickets. If you could not reach the hotline, Email us to info@bloomiz.lk with the details. Please read the terms and condtions to know about cancellation of booked tickets.
                                            </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="accor  bg-primary" id="headingThree4">
                                            <h4 class="m-0">
                                                <a href="#collapseThree2" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="si si-cursor-move mr-2"></i>Others
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree2" class="collapse b-b0" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="border p-3">
                                            <h3> If you want more details refer to contact us page</h3>
                                            
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