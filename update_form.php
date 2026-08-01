<!DOCTYPE html>
<html>
<head>
    <title>Update Student Record</title>
</head>
<body>

<h2>Update Student Information</h2>

<form action="update.php" method="POST">

    ID:<br>
    <input type="number" name="id" required><br><br>

    Name:<br>
    <input type="text" name="name" required><br><br>

    Dept:<br>
    <input type="text" name="dept" required><br><br>

    Roll Number:<br>
    <input type="text" name="roll_no" required><br><br>

    <input type="submit" value="Update">

</form>

</body>
</html>