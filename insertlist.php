<?php
$Product_ID=$_POST['Product_ID'];
$Product_Name=$_POST['Product_Name'];
$Category=$_POST['Category'];
$Company=$_POST['Company'];
$Content=$_POST['Content'];
$Packing=$_POST['Packing'];
$MRP=$_POST['MRP'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q = "insert into product_list values('$Product_ID','$Product_Name','$Category','$Company','$Content','$Packing',$MRP)";
mysqli_query($con,$q);
echo "insertion is successful ";
mysqli_close($con);
?>