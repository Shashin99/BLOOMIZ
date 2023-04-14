<?php
session_start();
include('conn.php');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Address = $_POST['Address'];
$Old_Password = $_POST['Old_Password'];
$Password = $_POST['Password'];
$C_Password = $_POST['C_Password'];

$U_ID = $_SESSION['U_ID'];
$En_Old_Password = sha1($Old_Password);

$sql = "SELECT * FROM users  WHERE U_ID =  $U_ID AND U_ADDRESS = '$En_Old_Password' LIMIT 1 ";
$result = $conn->query($sql);

if ($result->num_rows < 0) {
    echo "<script>alert('Invalid Password. Try Again!');</script>";
} else if ($Password != $C_Password) {
    echo "<script>alert('Password Does not match. Try Again!');</script>";
} else if (!is_numeric($Contact)) {
    echo "<script>alert('Invalid Contact Number. Try Again!');</script>";
} else {

    $En_password = sha1($Password);

    $sql = "UPDATE  users SET U_NAME='PUBLISHER',U_NAME='$Name',U_CONTACT='$Contact',U_EMAIL='$Email',U_ADDRESS='$Address',U_PASSWORD='$En_password' WHERE U_ID=$U_ID";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['U_NAME'] = $Name;
        $_SESSION['U_EMAIL'] = $Email;
        $_SESSION['U_CONTACT'] = $Contact;
        $_SESSION['U_ADDRESS'] = $Address;
        echo "<script>alert('Successfully Changed.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "<script>window.location.href = '/project/BSBS_IT21352812/User_account.php';</script>";
