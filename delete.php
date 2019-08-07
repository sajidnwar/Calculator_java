<?php
$Product_Name=$_GET['Product_Name'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q="delete from Product_List where Product_Name='$Product_Name'";
mysqli_query($con,$q);
echo "deleted";
mysqli_close($con);
?>
