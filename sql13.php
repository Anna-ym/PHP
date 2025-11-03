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
    <form action="roll.php" method="post">
        <br><br><br>
        <center>Roll_no: <input type="text" id="b" name="Rollno"></center><br><br>
       <center> Name:  <input type="text" id="a" name="Name"></center><br><br>
       <center> Gender:  <input type="radio" id="c" name="Gender" value="Male">Male
    <input type="radio" id="c" name="Gender" value="Female">Female</center><br><br>

       <center> Mark1:  <input type="text" id="d" name="Mark1"></center><br><br>
       <center> Mark2:  <input type="text" id="e" name="Mark2"></center><br><br>
      
        
        <center>&nbsp;&nbsp;<input type="reset" value="Reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Submit"></center>
 
    
   
    
   </form>
   

</body>

</html>