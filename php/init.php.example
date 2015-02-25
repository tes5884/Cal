<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=women_calendar', 'women_cal', '#^D2g8za8xMxVp1axWbY');
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

session_start();

$newUser = $db->prepare("
	INSERT INTO users_test (first_name, middle_name, last_name, email, password) 
	VALUES (:fName, :iName, :lName, :email, :password)
");

$checkUser = $db->prepare("
	SELECT id, first_name, middle_name, last_name, email, password, active
	FROM users_test
	WHERE email=:email
");
?>
