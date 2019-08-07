<?php
$Store_Name=$_GET['Store_Name'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q="delete from Ourstores where Product_Name='$Store_Name'";
mysqli_query($con,$q);
echo "deleted";
mysqli_close($con);
?>
