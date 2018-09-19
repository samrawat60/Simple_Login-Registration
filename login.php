<html>
<head>
	<title> </title>
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
		<div class="row">
			<!--SignUp Form Code -->
			<div class="col-lg-6">
				<h2> Create Account here </h2>
				<form action="signup.php" method="post">
					<div class="form-group">
						<label> Username </label>
						<input type="text" name="uname" class="form-control">
					</div>
					<div class="form-group">
						<label> Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary"> SignUp</button>
				</form>
			</div>
			
			<!--Login Form Code -->
			<div class="col-lg-6">
				<h2> Login Here </h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label> Username </label>
						<input type="text" name="uname" class="form-control">
					</div>
					<div class="form-group">
						<label> Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary"> Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>