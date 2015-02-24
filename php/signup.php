<?php
	include ('database_connect.php');
	
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
	
	try {
		//check if email already in db
		$stmt = $conn->prepare("SELECT email FROM users_test WHERE email='$email'"); 
    	$stmt->execute();
    	$row =$stmt->fetchObject();
    	if (isset($row->email)) {
    		echo("Your email address is already registered. Either login using your email address, or signup using a different address.");
    		exit;
		} else {
		$sql = "INSERT INTO users_test (first_name, middle_name, last_name, email, password) VALUES ('$fName', '$iName', '$lName', '$email', '$passwordHash')";
    	// use exec() because no results are returned
    	$conn->exec($sql);
    	echo("Thank you for signing up! I will now redirect you to the login page.");
    	sleep(5);
    	header('Location: ../login.html');
		}
	}
	catch(PDOException $e)
    {
    	echo $e->getMessage();
    }

	$conn = null;
	

//TO-DO
//confirm signed up 
//sleep before redirect
?>