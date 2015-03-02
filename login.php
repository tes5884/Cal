<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<link rel="stylesheet" href="css/main.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="container">
		<!-- Navbar -->
		<?php include('php/navbar.php');?>
		<!-- end navbar -->

		<!-- form start -->
		<div class="panel panel-default form-signup">
			<div class="panel-heading"><h3 class="panel-title">Login</h3></div>
			<div class="panel-body">
				<form class="form-horizontal" action="php/loginScript.php" method="post">
					<div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="emailInput" id="inputEmail" placeholder="Email" autofocus="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="passwordInput" id="inputPassword" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
		<!-- form end -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>