<?php
  include_once ('php/init.php');
	if (!isset($_SESSION['loggedin'])) {
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
				<div class="panel panel-default">
					<div class="panel-heading">Past Flow Dates</div>
				<table class="table table-bordered table-hover">
					<tr>
						<th>Flow Date</th>
						<th>Night or Day</th>
						<th>Chodesh</th>
						<th>Haflagah</th>
						<th>Onah Beinoni</th>
					</tr>
					<?php
						$checkFlow-> bindParam(':userId', $_SESSION['userId']);
						$checkFlow-> execute();
						$data = $checkFlow->fetchAll();
					?>	
						<?php foreach ($data as $row): ?>
						<tr>
    					<td><script> document.write(Hebcal.HDate(<?php $row['flow_date'] ?>))</script></td>
    					<td><?php echo($row['day_night']) ?></td>
    					<td></td>
    					<td></td>
    					<td></td>
    					<?php endforeach; ?>		
						</tr>
				</table>
				</div>
			</div>
			<!-- -->
      <div class="col-md-3 text-center">
        <div class="panel panel-default">
          <div class="panel-heading">Update Flow Dates</div>
          <form action="php/flowUpdate.php" method="post">
            <br />  
            <div class="form-group update-form">
              <label>Date:</label>
              <input type="date" class="form-control" name="datePicker" id="datePicker" placeholder="date">
            </div>
            <div class="form-group update-form"
              <input type="time" class="form-control" name="datePicker" id="datePicker" placeholder="date">
            </div>
            <div class="form-group">
              <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="night" checked>Night
              </label>
              <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="day">Day
              </label>
            </div>
            <div class="update-form">
              <button type="submit" class="btn btn-block btn-default">Submit</button>
              <br />
            </div>
          </form>
        </div>  
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