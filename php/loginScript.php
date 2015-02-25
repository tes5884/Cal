<?php
	include ('init.php');
	
	//validate email address
 	if (filter_var($_POST['emailInput'], FILTER_VALIDATE_EMAIL) === false) {
	  echo($_POST['emailInput'] . " is not a valid email address, please go back and try again.");
	  exit;
	}
	
	//no blank passwords
 	if ($_POST['passwordInput'] == NULL)
 	{
     	echo("Oops! Password is blank! Go back, and try again.");
     	exit;
 	}
 	
 	$email = $_POST['emailInput'];
 	
 	//test
 	$checkUser -> bindParam(':email', $email);
	$checkUser -> execute();
	$user = $checkUser->fetchObject();
	if (password_verify($_POST['passwordInput'], $user->password)) {
	  $_SESSION['loggedin'] = 1;
	  $_SESSION['userId'] = $user->id;
	  $_SESSION['fName'] = $user->first_name;
	  $_SESSION['lName'] = $user->last_name;
	  $_SESSION['email'] = $user->email;
	  Header('Location: ../main.php');
	} else {
	  echo('Wrong username or password, please go back and try again. Click <a href="../signup.php">here</a> to signup.');
	}
?>	