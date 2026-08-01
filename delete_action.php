<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];

    $sql = "DELETE FROM info WHERE id='$id'";

    if (mysqli_query($con, $sql)) {

        if (mysqli_affected_rows($con) > 0) {
            echo "Student Record Deleted Successfully.";
        } else {
            echo "No Record Found With This ID.";
        }

    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>