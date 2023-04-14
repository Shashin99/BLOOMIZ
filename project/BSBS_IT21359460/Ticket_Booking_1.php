<?php
session_start();
include("php/conn.php");
if (!isset($_SESSION['U_ID'])) {
    echo "<script>alert('Please Login to continue!');</script>";
    echo "<script>window.location.href = '/project/BSBS_IT21359460/Login.php';</script>";
}
?>

<!doctype html>
<html lang="en" dir="ltr">

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
                            <h4 class="content-title mb-0 my-auto">Ticket Booking</h4>
                        </div>
                    </div>
                </div>




                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Bus Schedule</div>
                                <div class="row">
                                    <?php
                                    $sql = "SELECT * FROM schedule  ";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {

                                    ?>
                                        <div class="col-4">
                                            <a href="/project/BSBS_IT21359460/Ticket_Booking_1.php?id=<?= $row['S_ID'] ?>" class="btn btn-primary w-100 mb-2"><?= $row['S_BUS_FROM'] ?> - <?= $row['S_BUS_TO'] ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_GET['id'])) {
                        $ID = $_GET['id'];
                        $sql22 = "SELECT * FROM  schedule WHERE S_ID =  $ID LIMIT 1";
                        $result22 = $conn->query($sql22);
                        while ($row = $result22->fetch_assoc()) {
                            $S_BUS_FROM = $row['S_BUS_FROM'];
                            $$S_BUS_FROM = $row['S_BUS_TO'];
                        }
                    ?>

                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <h4><?= $S_BUS_FROM . "-" . $$S_BUS_FROM ?></h4>
                                    <table class="table table-bordered mg-b-0 text-md-nowrap">
                                        <tr>
                                            <th>Vehicle No.</th>
                                            <th>Departure Time</th>
                                            <th>Arrival Time</th>
                                            <th>Available Seats</th>
                                            <th>Book</th>
                                        </tr>
                                        <?php




                                        $sql = "SELECT * FROM  buses WHERE B_S_ID =  $ID ";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            $count = 0;
                                            $bus = $row['B_ID'];
                                            $sql2 = "SELECT * FROM bus_seat WHERE BS_BUS_ID =  $bus ";
                                            $result2 = $conn->query($sql2);
                                            while ($row2 = $result2->fetch_assoc()) {
                                                $count++;
                                            }

                                        ?>
                                            <tr>
                                                <td><?= $row['B_NUMBER'] ?></td>
                                                <td><?= $row['B_DEPARTURE_TIME'] ?></td>
                                                <td><?= $row['B_ARRIVAL_TIME'] ?></td>
                                                <td><?= 33 - $count ?></td>
                                                <td>
                                                    <div class="hover-war"><a href="Ticket_Booking_2.php?id=<?= $row['B_ID'] ?>" class="btn btn-primary">Book</a></div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>

                        </div>

                    <?php } ?>

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