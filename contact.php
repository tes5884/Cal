<?php include ('php/init.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="favicon.ico" />
	<title>Contact</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<?php
	  if (isset($_SESSION['loggedin'])) {
	    $name=$_SESSION['fName'] . " " . $_SESSION['lName'];
	    $email=$_SESSION['email'];
	    
	  } else {
	    $name = "";
	    $email = "";
	  }
	?>
</head>

<body>
	<div class="container">
		<!-- Navbar -->
		<?php include('php/navbar.php');?>
		<!-- end navbar -->
		
		<!-- form start -->
    <div class="panel panel-default contact-form">
      <div class="panel-heading">
        <h3 class="panel-title">Contact Us</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
        <form class="form-horizontal" action="php/sendEmail.php" method="post">
          <div class="form-group">
            <label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="John Smith" value="<?php echo($name); ?>" autofocus="">
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="example@example.org" value="<?php echo($email); ?>">
          </div>
          <div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
          </div>
          <div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" name="message" rows="8"></textarea>
          </div>
          <button class="btn btn-default btn-block" type="submit">Send</button>
        </form>
        </div>
        </div>
      </div>
    </div>
		<!-- end form -->
	</div>
	<!-- js files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!-- end js files -->
</body>

</html>