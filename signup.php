<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
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
			<div class="panel-heading"><h3 class="panel-title">Signup</h3></div>
			<div class="panel-body">
				<form role="form" action="php/signupScript.php" method="post">
					<div class="form-inline form-signup">
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="fNameInput">First Name</label>
								<input type="text" class="form-control" name="fNameInput" id="fNameInput" placeholder="John" autofocus="">
							</div>
							<div class="col-md-4 form-group">
								<label for="iNameInput">Middle Initial</label>
								<input type="text" class="form-control" name="iNameInput" id="iNameInput" placeholder="T">
							</div>
							<div class="col-md-4 form-group">
								<label for="lNameInput">Last Name</label>
								<input type="text" class="form-control" name="lNameInput" id="lNameInput" placeholder="Smith">
							</div>
						</div>
						<div class="row top-margin">
							<div class="col-md-4 form-group">
								<label for="emailInput">Email Address</label>
								<input type="text" class="form-control" name="emailInput" id="emailInput" placeholder="example@example.com">
							</div>
							<div class="col-md-4 form-group">
								<label for="passwordInput">Password</label>
								<input type="password" class="form-control" name="passwordInput" id="passwordInput">
							</div>
							<div class="col-md-4 form-group">
								<label for="confirmPasswordInput">Confirm Password</label>
								<input type="password" class="form-control" name="confirmPasswordInput" id="confirmPasswordInput">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								<button class="btn btn-default btn-block top-margin" type="submit">Sign up</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- form end -->
	</div>
	<!-- js files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!-- end js files -->
</body>

</html>