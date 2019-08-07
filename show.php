<?php
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
<style>
body{
	background-image:("pill-1884775__340.jpg");
	background-color:grey;
    }
</style>
</head>
<body>
<h1 style="color:red;"><a href="horizon.html">HOME</a></h1>
<h2 style="color:Tomato;">STORES LIST</h2>

<table style="color:black;">
<tr>
<th style="color:#800000;">Stores_ID</th>
<th style="color:#800000;">Stores_Name</th>
<th style="color:#800000;">Owners_Name</th>
<th style="color:#800000;">City</th>
<th style="color:#800000;">State</th>
<th style="color:#800000;">Salary</th>
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
	<td><?php echo $row['State']?></td>
	<td><?php echo $row['Salary']?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

 