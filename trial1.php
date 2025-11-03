<?php
echo "Roll no of the Student: ".$_POST["Roll_no"]."<br><br>";
echo "Name of the Student: ".$_POST["Name"]."<br><br>";
echo "Class of the Student: ".$_POST["Class"]."<br><br>";
echo "Mark of the Student: ".$_POST["Marks"]."<br><br>";

$con=mysqli_connect('localhost','root','','Student');
if($con)
    echo "Success";
else
    echo "Cannot be connected";
$Roll_no=$_POST["Roll_no"];
$Name=$_POST["Name"];
$Class=$_POST["Class"];
$Marks=$_POST["Marks"];

$sq="insert into stud values($Roll_no,'$Name','$Class','$Marks')";
if(mysqli_query($con,$sq))
    echo "Inserted";
else
    echo "Error";
?>