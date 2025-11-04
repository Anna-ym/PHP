<?php
// Get form data
$Rollno = $_POST["Rollno"];
$Name = $_POST["Name"];
$Address = $_POST["Address"];
$Phone_no = $_POST["Phone_no"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Retype_password = $_POST["Retype_password"];

// Check if passwords match
if ($Password != $Retype_password) {
    die("Error: Passwords do not match!");
}

// Connect to MySQL
$con = mysqli_connect('localhost', 'root', '', 'register');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Hash the password before storing
$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

// Insert query
$sql = "INSERT INTO student (Rollno, Name, Address, Phone_no, Username, Password, Retype_password)
        VALUES ('$Rollno', '$Name', '$Address', '$Phone_no', '$Username', '$Password','$hashedPassword')";

if (mysqli_query($con, $sql)) {
    echo "✅ Registration Successful!";
} else {
    echo "❌ Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="mark.php" method="post">
        <input type="button" value="Login">
</form>
</body>
</html>
