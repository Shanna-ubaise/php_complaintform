<?php
$conn = mysqli_connect("localhost", "root", "", "complaint_system");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
