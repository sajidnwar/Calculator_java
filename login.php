<?php
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sajid');
$q="select * from admin where (username='$Username' and password='$Password')";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<style>
body{
	background-color:#C8C3C1;
</style>
</head>
<body>
<?php
if($n==1)
{?>
	<h1 style="color:red;"> MAKE CHANGES </h1>
	<ul>
	<li style="font-size:30px;"><a href="linkproduct1.html">insert into productlist</a></li></br>
	<li style="font-size:30px;"><a href="linkstore.html">insert into storelist</a></li></br>
	<li style="font-size:30px;"><a href="basic1.html">delete any product</a></li></br>
	<li style="font-size:30px;"><a href="basic2.html">delete any store</a></li></br>
	<li style="font-size:30px;"><a href="update1.html">updation into price</a></li></br>
	<li style="font-size:30px;"><a href="update2.html">updation into packing</a></li></br>
	<li style="font-size:30px;"><a href="horizon.html">HOME</a></li></br>
	</ul>
<?php
}
else
	echo "wrong email id or password";
?>
</body>
</html>
