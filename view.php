<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q="select * from Product_List";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<style>
 body{
	 background-image:("capsule-1079838_960_720.jpg");
	 background-color: hsla(9, 100%, 64%, 0.4);
	}
</style> 
</head>
<body>
<h1 style="color:red;"><a href="horizon.html">HOME</a></h1>
<h2 style="color:Blue;">PRODUCT LIST</h2>
<table style="color:brown;">
<tr>
<th style="color:#FF5733;">Product_ID</th>
<th style="color:#FF5733;">Product_Name</th>
<th style="color:#FF5733;">Category</th>
<th style="color:#FF5733;">Company</th>
<th style="color:#FF5733;">Content</th>
<th style="color:#FF5733;">Packing</th>
<th style="color:#FF5733;">MRP</th>
</tr>
<?php
for($i=1;$i<=$n;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr>
	<td><?php echo $row['Product_ID']?></td>
	<td><?php echo $row['Product_Name']?></td>
	<td><?php echo $row['Category']?></td>
	<td><?php echo $row['Company']?></td>
	<td><?php echo $row['Content']?></td>
	<td><?php echo $row['Packing']?></td>
	<td><?php echo $row['MRP']?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
 