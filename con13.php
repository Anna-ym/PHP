<?php
echo "Roll no of the Student: ".$_POST["Rollno"]."<br><br>";
echo "Name of the Student: ".$_POST["Name"]."<br><br>";
echo "Gender of the Student: ".$_POST["Gender"]."<br><br>";
echo "Mark1 of the Student: ".$_POST["Mark1"]."<br><br>";
echo "Mark2 of the Student: ".$_POST["Mark2"]."<br><br>";
$Mark1=$_POST["Mark1"];
$Mark2=$_POST["Mark2"];
$Total=$Mark1+$Mark2;

$con=mysqli_connect('localhost','root','','sqlform');
if($con)
    echo "Success";
else
    echo "Cannot be connected";
$Rollno=$_POST["Rollno"];
$Name=$_POST["Name"];
$Gender=$_POST["Gender"];
$Mark1=$_POST["Mark1"];
$Mark2=$_POST["Mark2"];


$sq="insert into Form values($Rollno,'$Name','$Gender','$Mark1','$Mark2','$Total')";
$sq1="select Rollno from Form";
if(mysqli_query($con,$sq))
    //echo "Inserted";
    echo "<script>alert('Inserted');document.location='sql13.php'</script>";
else
    echo "Error";
$result=mysqli_query($con,$sq1);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
        echo "Rollno".$row["Rollno"];
        
    }
    
}

?>