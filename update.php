<?php
include 'dp.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $roll_no = $_POST['roll_no'];

    $sql = "UPDATE info
            SET
                name='$name',
                dept='$dept',
                roll_no='$roll_no'
            WHERE id='$id'";

    if (mysqli_query($con, $sql)) {

        if (mysqli_affected_rows($con) > 0) {
            echo "Student Record Updated Successfully.";
        } else {
            echo "No Record Found With This ID.";
        }

    } else {
        echo "Error: " . mysqli_error($con);
    }

}

mysqli_close($con);
?>