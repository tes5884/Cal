<?php
	include ('init.php');
	
	//confirm names arent null
	if ($_POST['fNameInput'] == NULL || $_POST['lNameInput'] == NULL)
 	{
     	echo("Oops! First OR last name is empty! Go back, and try again.");
     	exit;
 	}
 	
 	//validate email address
 	if (filter_var($_POST['emailInput'], FILTER_VALIDATE_EMAIL) === false) {
	  echo($_POST['emailInput'] . " is not a valid email address, please go back and try again.");
	  exit;
	}
	
	//compare passwords
	if ($_POST['passwordInput'] != $_POST['confirmPasswordInput'])
 	{
     	echo("Oops! Password did not match! Go back, and try again.");
     	exit;
 	}
 	
 	//no blank passwords
 	if ($_POST['passwordInput'] == NULL || $_POST['confirmPasswordInput'] == NULL)
 	{
     	echo("Oops! Password is blank! Go back, and try again.");
     	exit;
 	}
 	
	
 	//asign values to variables
	$fName = $_POST['fNameInput'];
	$iName = $_POST['iNameInput'];
	$lName = $_POST['lNameInput'];
	
	$email = $_POST['emailInput'];
	$passwordHash = password_hash($_POST['passwordInput'], PASSWORD_DEFAULT);
	
	$checkUser -> bindParam(':email', $email);
	$checkUser -> execute();
	$test = $checkUser->fetchObject();
	if ($test->email == $email) {
	  echo("Your email address is already registered. Either login using your email address, or signup using a different address.");
	  Exit();
	} else {
  	$newUser -> bindParam(':fName', $fName);
    $newUser -> bindParam(':iName', $iName);
    $newUser -> bindParam(':lName', $lName);
    $newUser -> bindParam(':email', $email);
    $newUser -> bindParam(':password', $passwordHash);
    $newUser -> execute();
    Header('Location: ../login.php');
	}

//TO-DO
//confirm signed up 
//sleep before redirect
?>