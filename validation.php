<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
	echo "connection Successfull";
}
else
{
	echo "No Connection";
}
mysqli_select_db($con,'loginpractical');

$name = $_POST['uname']; // Access name from login.php
$pass = $_POST['password']; // Access password from login.php

// Check the duplicacy in the tabel
$query = "select * from signup where name = '$name' && password = '$pass'";
$result = mysqli_query($con,$query); // Query Fire
$num = mysqli_num_rows($result); // check the duplicacy in the rows

if($num==1)
{
	$_SESSION['username'] = $name;
	header('location:home.php');
}
else
{
	header('location:login.php');
}
?>
