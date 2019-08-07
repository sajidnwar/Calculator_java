<?php
$Stores_ID=$_POST['Stores_ID'];
$Stores_Name=$_POST['Stores_Name'];
$Owners_Name=$_POST['Owners_Name'];
$City=$_POST['City'];
$State=$_POST['State'];
$Salary=$_POST['Salary'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q = "insert into Ourstores values('$Stores_ID','$Stores_Name','$Owners_Name','$City','$State','$Salary')";
mysqli_query($con,$q);
echo "insertion is successful ";
mysqli_close($con);
?>