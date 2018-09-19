<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php'); 	
}
?>

<html>
<head>
	<title> Homepage </title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="container">
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?></h2>
	<a href="logout.php"> LOGOUT </a>
</div>
</body>
</html>