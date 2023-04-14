<?php
session_start();
include('conn.php');

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$En_password = sha1($Password);


$sql = "SELECT * FROM  users WHERE U_EMAIL='$Email' AND U_PASSWORD='$En_password' LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['U_NAME'] = $row["U_NAME"];
        $_SESSION['U_ID'] = $row["U_ID"];
        $_SESSION['U_EMAIL'] = $row["U_EMAIL"];
        $_SESSION['U_CONTACT'] = $row["U_CONTACT"];
        $_SESSION['U_DOB'] = $row["U_DOB"];
        $_SESSION['U_ADDRESS'] = $row["U_ADDRESS"];
        $_SESSION['U_STATUS'] = $row["U_STATUS"];

        echo "<script>window.location.href = '/project/BSBS_IT21352812/User_account.php';</script>";
    }
} else {
    echo "<script>alert('Login Failed! Try Again.');</script>";
    echo "<script>window.location.href = '/project/BSBS_IT21359460/Login.php';</script>";
}
