<?php
  include_once ('php/init.php');
	if ($_SESSION['loggedin'] == 0) {
		Header('Location: index.php');
		Exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<title>Calendar</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">

<script src="js/hebcal.noloc.min.js"></script>
</head>

<body>
	<div class="container">
		<!-- Navbar -->
		<?php include('php/navbar.php');?>
		<!-- end navbar -->

		<!-- start grid -->
		<div class="row">
			<!-- -->
			<div class="col-md-3">
				<p class="lead text-center">Hello <?php echo($_SESSION['fName']) ?>!</p>
				<p class="lead text-center">Track your mikvah and flow calculations online. </p>
			</div>
			<!-- -->
			<div class="col-md-6 text-center">
				<div class="panel panel-default">
					<div class="panel-heading">Upcoming Days</div>
					<div class="row">
						<div class="col-md-4"><strong>Chodesh:</strong></div>
						<div class="col-md-4">March 21, 1989</div>
						<div class="col-md-4">Day</div>
					</div>
					<div class="row">
						<div class="col-md-4"><strong>Haflagah:</strong></div>
						<div class="col-md-4">March 21, 1989</div>
						<div class="col-md-4">Day</div>
					</div>
					<div class="row">
						<div class="col-md-4"><strong>Onah Beinoni:</strong></div>
						<div class="col-md-4">March 21, 1989</div>
						<div class="col-md-4">Day</div>
					</div>

				</div>
				<table class="table table-bordered table-hover">
					<tr>
						<th>Flow Date</th>
						<th>Night or Day</th>
						<th>Chodesh</th>
						<th>Haflagah</th>
						<th>Onah Beinoni</th>
					</tr>
					<tr>
						<td>March 21, 1989</td>
						<td>Day</td>
						<td>March 21, 1989</td>
						<td>March 21, 1989</td>
						<td>March 21, 1989</td>
					</tr>
					<tr></tr>
				</table>
			</div>
			<!-- -->
			<div class="col-md-3">
				<form action="" method="post">
					<div class="form-group">
						<label>Day of arrival:</label>
						<input type="date" class="form-control" name="datePicker" id="datePicker" placeholder="date">

						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>Night
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Day
						</label>

						<button type="submit" class="btn btn-block btn-default">Submit</button>
					</div>
				</form>
			</div>
			<!-- -->
		</div>
	</div>
	<!-- end grid -->

	<!-- js files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!-- end js files -->
</body>

</html>