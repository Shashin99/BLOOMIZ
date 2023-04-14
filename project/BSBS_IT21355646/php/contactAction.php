<?php
include('conn.php');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$message = $_POST['message'];

$sql = "INSERT INTO  messages  (Name, Email, Message)
            VALUES ('$Name','$Email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message Sent.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<script>window.location.href = '/project/BSBS_IT21355646/Contact_Us.php';</script>";
