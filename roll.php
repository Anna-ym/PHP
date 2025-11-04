<?php
$con=mysqli_connect('localhost','root','','sqlform');
$sq="Select Rollno from Form";
$result=mysqli_query($con,$sq);
if(mysqli_num_rows($result)>0){
    echo "<label>Rollno</label><Br><br>";
    echo "<select>";

    while($rows=mysqli_fetch_assoc($result))
    {
        echo '<option value='.$rows["Rollno"].'>'.$rows["Rollno"].'</option>';
        
    }
    
    echo "<input type=button value=Search id=m name=search>";
    $res="Select * from Form where "

    echo "</select>";
}
?>