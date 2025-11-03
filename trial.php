<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    echo "Student Details";
    ?>
<body>
    <form action="trial1.php" method="post">
        <br><br><br>
        <center>Roll_no: <input type="text" id="b" name="Roll_no"></center><br><br>
       <center> Name:  <input type="text" id="a" name="Name"></center><br><br>
       <center> Class:  <input type="text" id="c" name="Class"></center><br><br>
       <center> Marks:  <input type="text" id="d" name="Marks"></center><br><br>
        
        <center>&nbsp;&nbsp;<input type="reset" value="Reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Submit"></center>
    </form>
</body>

</html>