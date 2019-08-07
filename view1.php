<?php
echo "ccc";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q="select * from Ourstores";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
</head>
<body>
<h1>STORES LIST</h1>
<table>
<tr>
<th>Stores_ID</th>
<th>Stores_Name</th>
<th>Owners_Name</th>
<th>City</th>
<th>state</th>
<th>PinCode</th>
</tr>
<?php
for($i=1;$i<=$n;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr>
	<td><?php echo $row['Stores_ID']?></td>
	<td><?php echo $row['Stores_Name']?></td>
	<td><?php echo $row['Owners_Name']?></td>
	<td><?php echo $row['City']?></td>
	<td><?php echo $row['state']?></td>
	<td><?php echo $row['PinCode']?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

 