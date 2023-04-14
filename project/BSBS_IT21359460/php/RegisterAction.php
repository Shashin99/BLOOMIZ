<?php
include('conn.php');

$Name = $_POST['Name'];
$Contact = $_POST['Contact'];
$DOB = $_POST['DOB'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Password = $_POST['Password'];
$C_Password = $_POST['C_Password'];

if ($Password != $C_Password) {
    echo "<script>alert('Password Does not match. Try Again!');</script>";
} else if (!is_numeric($Contact)) {
    echo "<script>alert('Invalid Contact Number. Try Again!');</script>";
} else {
    $En_password = sha1($Password);

    $sql = "INSERT INTO  users  (U_NAME, U_CONTACT, U_DOB,U_EMAIL,U_ADDRESS,U_PASSWORD,U_STATUS)
            VALUES ('$Name','$Contact','$DOB','$Email','$Address','$En_password',1)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "<script>window.location.href = '/project/BSBS_IT21359460/Login.php';</script>";
