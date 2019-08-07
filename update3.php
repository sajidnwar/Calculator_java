<?php
$Product_Name=$_POST['Product_Name'];
$Inc=$_POST['Increament'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q="UPDATE product_list SET Packing=Packing + '$Inc' where Product_Name='$Product_Name'";
echo "done";
mysqli_query($con,$q); 
mysqli_close($con);

?>