<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL
    $con = mysqli_connect('localhost', 'root', '', 'register');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // If marks are being submitted
    if (isset($_POST['mark1']) && isset($_POST['mark2'])) {
        $Rollno = $_POST['Rollno'];
        $mark1 = $_POST['mark1'];
        $mark2 = $_POST['mark2'];

        $sql = "INSERT INTO marks (Rollno, mark1, mark2) VALUES ('$Rollno', '$mark1', '$mark2')";
        if (mysqli_query($con, $sql)) {
            echo "<h3>✅ Marks added successfully for Roll No: $Rollno</h3>";
        } else {
            echo "❌ Error: " . mysqli_error($con);
        }
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Marks</title>
</head>
<body style="font-family: Arial;">
    <h2>Enter Student Marks</h2>

    <?php if (isset($_POST['Rollno'])) { ?>
        <form method="post" action="">
            <input type="hidden" name="Rollno" value="<?php echo $_POST['Rollno']; ?>">

            <label>Mark 1:</label><br>
            <input type="number" name="mark1" required><br><br>

            <label>Mark 2:</label><br>
            <input type="number" name="mark2" required><br><br>

            <input type="submit" value="Submit Marks">
        </form>
    <?php } else { ?>
        <p>Error: No student roll number found. Please register first.</p>
    <?php } ?>
</body>
</html>
