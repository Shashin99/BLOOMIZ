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
                            <h4 class="content-title mb-0 my-auto">Booking Details</h4>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-2">

                                        <?php
                                        $ID = $_GET['id'];
                                        $bookedSeat = array();
                                        $sql2 = "SELECT * FROM bus_seat WHERE BS_BUS_ID =  $ID ";
                                        $result2 = $conn->query($sql2);
                                        while ($row2 = $result2->fetch_assoc()) {
                                            array_push($bookedSeat, $row2['BS_NUMBER']);
                                        }
                                        ?>

                                        <?php
                                        if (in_array(29, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">29</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">29</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(25, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">25</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">25</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(21, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">21</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">21</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(17, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">17</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">17</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(13, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">13</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">13</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(9, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">9</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">9</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(5, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">9</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">5</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(1, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">9</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">1</button>';
                                        }
                                        ?>

                                    </div>
                                    <div class="col-2">
                                        <?php
                                        if (in_array(30, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">30</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">30</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(26, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">26</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">26</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(22, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">22</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">22</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(18, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">18</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">18</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(14, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">14</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">14</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(10, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">10</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">10</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(6, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">6</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">6</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(2, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">2</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">2</button>';
                                        }

                                        ?>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-dark">31</button>
                                    </div>
                                    <div class="col-2">

                                        <?php
                                        if (in_array(32, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">32</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">32</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(27, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">27</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">27</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(23, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">23</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">23</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(19, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">19</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">19</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(15, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">15</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">15</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(11, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">11</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">11</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(7, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">7</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">7</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(3, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">3</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">3</button>';
                                        }

                                        ?>

                                    </div>
                                    <div class="col-2">

                                        <?php
                                        if (in_array(33, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">33</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">33</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(28, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">28</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">28</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(24, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">24</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">24</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(20, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">20</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">20</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(16, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">16</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">16</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(12, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">12</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">12</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(8, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">8</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">8</button>';
                                        }
                                        ?>
                                        <?php
                                        if (in_array(4, $bookedSeat)) {
                                            echo '<button class="btn btn-primary mb-4">4</button>';
                                        } else {
                                            echo '<button class="btn btn-dark mb-4">4</button>';
                                        }

                                        ?>

                                    </div>
                                    <div class="col-1"></div>

                                    <div class="col-12 mt-4 text-center">
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-2">
                                                <button class="btn btn-dark mb-4">.</button>
                                            </div>
                                            <div class="col-4">
                                                <h5>Available Seats</h5>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-2">
                                                <button class="btn btn-primary mb-4">.</button>
                                            </div>
                                            <div class="col-4">
                                                <h5>Booked Seats</h5>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                    $ID = $_GET['id'];
                    $sql22 = "SELECT * FROM   buses WHERE B_ID =  $ID LIMIT 1";
                    $result22 = $conn->query($sql22);
                    while ($row = $result22->fetch_assoc()) {
                        $B_NUMBER = $row['B_NUMBER'];
                        $B_DEPARTURE_TIME = $row['B_DEPARTURE_TIME'];
                        $B_ARRIVAL_TIME = $row['B_ARRIVAL_TIME'];
                        $count = 0;
                        $bus = $row['B_ID'];
                        $sql2 = "SELECT * FROM bus_seat WHERE BS_BUS_ID =  $bus ";
                        $result2 = $conn->query($sql2);
                        while ($row2 = $result2->fetch_assoc()) {
                            $count++;
                        }
                    }

                    ?>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center"><?= 33 - $count ?> Seats Available</h5>
                                <form action="/project/BSBS_IT21355196/Payment.php" method="POST">
                                    <div class="form-group">


                                        <label>Bus Number</label>
                                        <input type="text" class="form-control mb-3" disabled value="<?= $B_NUMBER ?>">
                                        <label>Departure Time</label>
                                        <input type="text" class="form-control mb-3" disabled value="<?= $B_DEPARTURE_TIME ?>">
                                        <label>Arrival Time</label>
                                        <input type="text" class="form-control mb-3" disabled value="<?= $B_ARRIVAL_TIME ?>">
                                        <label>Seat Number</label>
                                        <input type="text" class="form-control mb-3" name="SeatNumber">
                                        <label>Date</label>
                                        <input type="date" class="form-control mb-3" value="<?= date('Y-m-d') ?>" disabled>
                                        <input type="hidden" name="busID" value="<?= $_GET['id'] ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary  mb-0 w-100">Book</button>
                                </form>
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