<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body style="font-family:Arial;">
    <h2>Student Registration Form</h2>
    <form action="reg.php" method="post">
        <label>Roll No:</label><br>
        <input type="number" name="Rollno" required><br><br>

        <label>Name:</label><br>
        <input type="text" name="Name" required><br><br>

        <label>Address:</label><br>
        <input type="text" name="Address" required><br><br>

        <label>Phone No:</label><br>
        <input type="text" name="Phone_no" required><br><br>

        <label>Username:</label><br>
        <input type="text" name="Username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="Password" required><br><br>

        <label>Retype Password:</label><br>
        <input type="password" name="Retype_password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
