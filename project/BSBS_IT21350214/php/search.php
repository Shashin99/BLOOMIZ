<?php
session_start();
include('conn.php');


$search = $_POST['search'];


$sql2 = "SELECT * FROM  recipes WHERE R_NAME LIKE '$search%' LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $id = $row['R_ID'];
        echo "<script>window.location.href = '/iwt/IT21387012/Download.php?id=$id';</script>";
    }
} else {
    echo "<script>alert('no data! Try Again.');</script>";
    echo "<script>window.location.href = '/iwt/IT21388934/Home.php';</script>";
}
