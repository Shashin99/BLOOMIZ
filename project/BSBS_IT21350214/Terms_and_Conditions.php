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
                            <h4 class="content-title mb-0 my-auto">Terms and Conditions</h4>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <p>These terms and conditions, as may be amended from time to time, apply to all our services directly or indirectly (through distributors) made available online. By accessing, browsing, and using our website or any of our applications through whatever platform (hereafter collectively referred to as the "website") and/or by completing a reservation, you acknowledge and agree to have read, understood, and agreed to the terms and conditions set out below (including the privacy statement).</p>
                            <br><br>
                            <div class="card-title">Cancellation Policy:</div>
                            <p>The tickets booked through Bloomiz.lk are cancelable. We refund the payment amount to passengers bank account. Kindly note that that it will take few days to complete the refund transaction.</p>

                               
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Scope of our service</div>
                                <p>Through the website, we (Bloomiz.lk) provide an online platform through which bus service providers permitted by National Transport Commission, Sri Lanka, can integrate their buses for reservation, and through which passengers to the website can make such reservations. By making a reservation through Bloomiz.lk, you enter into a direct (legally binding) contractual relationship with our website. From the point at which you make your reservation, we issue a valid ticket with ticket details which can be download to your device.</p>
                                <p>Our services are made available for personal and non-commercial use only. Therefore, you are not allowed to re-sell, deep-link, use, copy, monitor (e.g. spider, scrape), display, download or reproduce any content or information, software, products or services available on our website for any commercial or competitive activity or purpose</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Our Responsibilities Includes: </div>
                                <ul type="disc">
                                    <li>Issuing a valid ticket (a ticket that will be accepted by the bus operator) for its’ network of bus operators.</li>
                                    <li>Providing refund and support in the event of cancellation.</li>   
                                    <li>Providing customer support and information in case of any delays / inconvenience.</li>
                                </ul>

                                <div class="card-title">Our responsibilities do NOT include: </div>
                                <ul type="disc">
                                    <li>The bus operator's bus not departing / reaching on time.</li>
                                    <li>The bus operator's employees being rude.</li>   
                                    <li>The baggage of the customer getting lost / stolen / damaged.</li>
                                </ul>
                                
                                <p>The arrival and departure times mentioned on the ticket are only tentative timings.        However, the bus will not leave the source before the time that is mentioned on the ticket.</p>

                                <div class="card-title">
                                        Passengers are required to furnish the following at the time of boarding the bus: </div>
                                <ul type="disc">
                                    <li>A copy of the ticket (A print out of the ticket or the printout of the ticket e-mail).</li>
                                    <li>Identity proof (National ID card, Driving license, Student ID card, Company ID card, Passport).</li>   
                                    
                                </ul>

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