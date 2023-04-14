<?php
include('conn.php');

$Name = $_POST['Name'];
$review = $_POST['review'];

$sql = "INSERT INTO  review  (Name, review)
            VALUES ('$Name','$review')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Review Sent.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<script>window.location.href = '/project/BSBS_IT21352812/Reviews.php';</script>";
