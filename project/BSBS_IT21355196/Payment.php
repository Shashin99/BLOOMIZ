<?php
session_start();
include("php/conn.php");
if (!isset($_SESSION['U_ID'])) {
    echo "<script>alert('Please login to account for continue!');</script>";
    echo "<script>window.location.href = '/project/BSBS_IT21359460/Login.php';</script>";
    $SeatNumber = $_POST['SeatNumber'];
    $busID = $_POST['busID'];
}
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
                            <h4 class="content-title mb-0 my-auto">Payment </h4>
                            <a href="php/book.php?seat=<?= $_POST['SeatNumber'] ?>&bus=<?= $_POST['busID'] ?>&method=CashOn" class="btn btn-success ml-4">Cash On</a>
                        </div>
                    </div>
                </div>







                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                                    <div class="card card-body pd-20 pd-md-40 border shadow-none">
                                        <h5 class="card-title mg-b-20">Your Payment Details</h5>
                                        <form action="">
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Name on Card</label> <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Card Number</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" type="text">
                                                    <div class="d-flex pos-absolute t-5 r-10"><img alt="" class="wd-30 mg-r-5" src="assets/img/visa.png"> <img alt="" class="wd-30" src="assets/img/mastercard.png"></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row row-sm">
                                                    <div class="col-sm-9">
                                                        <label class="main-content-label tx-11 tx-medium tx-gray-600">Expiration Date</label>
                                                        <div class="row row-sm">
                                                            <div class="col-sm-7">
                                                                <select class="form-control" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                    <option label="Choose one" data-select2-id="3">
                                                                    </option>
                                                                    <option value="January">
                                                                        January
                                                                    </option>
                                                                    <option value="February">
                                                                        February
                                                                    </option>
                                                                    <option value="March">
                                                                        March
                                                                    </option>
                                                                    <option value="April">
                                                                        April
                                                                    </option>
                                                                    <option value="May">
                                                                        May
                                                                    </option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-6g9x-container"><span class="select2-selection__rendered" id="select2-6g9x-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                            <div class="col-sm-5 mg-t-10 mg-sm-t-0">
                                                                <select class="form-control" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                                    <option label="Choose one" data-select2-id="6">
                                                                    </option>
                                                                    <option value="2018">
                                                                        2018
                                                                    </option>
                                                                    <option value="2019">
                                                                        2019
                                                                    </option>
                                                                    <option value="2020">
                                                                        2020
                                                                    </option>
                                                                    <option value="2021">
                                                                        2021
                                                                    </option>
                                                                    <option value="2022">
                                                                        2022
                                                                    </option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-fnhj-container"><span class="select2-selection__rendered" id="select2-fnhj-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mg-t-20 mg-sm-t-0">
                                                        <label class="main-content-label tx-11 tx-medium tx-gray-600">CVC</label> <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="php/book.php?seat=<?= $_POST['SeatNumber'] ?>&bus=<?= $_POST['busID'] ?>&method=onlinePay" class="btn btn-main-primary btn-block">Complete Payment</a>
                                        </form>
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