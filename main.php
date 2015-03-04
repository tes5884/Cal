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
				<!-- upcoming days -->
				<?php
				  $latestFlow-> bindParam(':userId', $_SESSION['userId']);
					$latestFlow-> execute();
					$data = $latestFlow->fetchObject();
			
			  	if (isset($data->flow_date)) {
			  		$date = json_encode($data->flow_date);
				  } else {
				  	$date = json_encode('');
				  }
			  ?>
			  <script>
			  	if(!<?php echo($date)?> == '') {
			  		var hebDate = new Hebcal.HDate(new Date(<?php echo($date); ?>));
			  		var engDate = new Date(<?php echo($date)?>);
			  	} else {
			  		document.write('<div class="panel panel-default">Add a flow date, and your data will start showing up.</div>')
			  	}
			  </script>
			  
				<div class="panel panel-default">
					<div class="panel-heading">Upcoming Days</div>
					<div class="row">
						<div class="col-md-4"><strong>Chodesh:</strong></div>
						<div class="col-md-4"><script>if(!<?php echo($date)?> == '') {document.write(hebDate.getMonthObject().next().getDay(hebDate.getDate()).toString());}</script></div>
						<div class="col-md-4"></div>
					</div>
					<div class="row">
						<div class="col-md-4"><strong>Haflagah:</strong></div>
						<div class="col-md-4"></div>
						<div class="col-md-4"></div>
					</div>
					<div class="row">
						<div class="col-md-4"><strong>Onah Beinoni:</strong></div>
						<div class="col-md-4">
							<script>
								if(!<?php echo($date)?> == '') {
								engDate.setDate(engDate.getDate() + 29);
								document.write(Hebcal.HDate(engDate));
								}
							</script>
							  
							<script>
							if(!<?php echo($date)?> == '') {
								document.write(' - ')
								engDate.setDate(engDate.getDate() + 1);
								document.write(Hebcal.HDate(engDate));
							}
					    </script>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
				<!-- end upcoming days -->
				<!-- past flow dates -->
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
							<?php $date = json_encode($row['flow_date']); ?>
							<script>var hebDate = new Hebcal.HDate(new Date(<?php echo($date); ?>));</script>
	      			<script>var engDate = new Date(<?php echo($date)?>);</script>
	      			
							<tr>
	    					<td><script>document.write(new Hebcal.HDate(new Date(<?php echo($date) ?>)));</script></td>
	    					<td><?php echo($row['day_night']) ?></td>
	    					<td><script>document.write(hebDate.getMonthObject().next().getDay(hebDate.getDate()).toString());</script></td>
	    					<td>
	    					</td>
	    					<td>
		    					<script>
										engDate.setDate(engDate.getDate() + 29);
										document.write(Hebcal.HDate(engDate));
										document.write(' - ');
										engDate.setDate(engDate.getDate() + 1);
										document.write(Hebcal.HDate(engDate));
		      				</script>
	    					</td>
	    					<?php endforeach; ?>		
							</tr>
					</table>
				</div>
				<!-- end past flow dates -->
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