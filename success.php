<?php
        $Rollno = $_POST["Rollno"];
        $Name = $_POST["Name"];
        $Address = $_POST["Address"];
        $Phone_no = $_POST["Phone_no"];
        $Username = $_POST["Username"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
</head>
<body style="font-family:Arial;">
    <h2>✅ Registration Successful!</h2>

    <h3>Registered Details:</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        
        <tr><th>Roll No</th><td><?php echo htmlspecialchars($_POST['Rollno']); ?></td></tr>
        <tr><th>Name</th><td><?php echo htmlspecialchars($_POST['Name']); ?></td></tr>
        <tr><th>Address</th><td><?php echo htmlspecialchars($_POST['Address']); ?></td></tr>
        <tr><th>Phone No</th><td><?php echo htmlspecialchars($_POST['Phone_no']); ?></td></tr>
        <tr><th>Username</th><td><?php echo htmlspecialchars($_POST['Username']); ?></td></tr>
    </table>

    <br><br>
    <form action="mark.php" method="post">
        <input type="login" value="Login">
    </form>
</body>
</html>
