<?php
// Create connection with MySQL database
$con = mysqli_connect("localhost", "root", "", "students");

// Check connection
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>