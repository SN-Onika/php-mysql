<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO info (name, roll_no, dept)
            VALUES ('$name', '$roll_no', '$dept')";

    if (mysqli_query($con, $sql)) {
        echo "Insert Successfully Completed";
    } else {
        echo "Error: " . mysqli_error($con);
    }

} else {
    echo "Please submit the form first.";
}

mysqli_close($con);
?>