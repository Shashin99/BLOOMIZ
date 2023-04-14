<?php
session_start();
include('conn.php');

$SeatNo = $_GET['seat'];
$BusID = $_GET['bus'];
$method = $_GET['method'];
$U_ID = $_SESSION['U_ID'];


$sql = "INSERT INTO  bus_seat  (BS_BUS_ID, BS_USER_ID, BS_NUMBER)
            VALUES ('$BusID','$U_ID','$SeatNo')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Booking Process Successfully Completed.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<script>window.location.href = '/project/BSBS_IT21355646/Home.php';</script>";
