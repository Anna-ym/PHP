<?php
echo "PROGRESS REPORT<br><br>";
echo "Name of the Student: ".$_GET["name"]."<br><br>";
echo "Class of the Student: ".$_GET["class"]."<br><br><br>";
echo "SUBJECT-WISE MARKS<br><br>";
echo "Data Structures: ".$_GET["m1"]."<br><br>";
echo "Advanced Software Engineering: ".$_GET["m2"]."<br><br>";
echo "Mathematics: ".$_GET["m3"]."<br><br><br>";
echo "GRAND TOTAL<br><br>";
echo "Total Marks Awarded = ".$_GET["xy"];
?>