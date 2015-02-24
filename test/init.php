<?php

session_start();

$_SESSION['user_id'] = 'tes5884@gmail.com';

$db = new PDO('mysql:host=localhost;dbname=women_calendar', 'women_cal', '#^D2g8za8xMxVp1axWbY');

$userQuery = $db->prepare("
	SELECT id, active, email
	FROM users_test
	WHERE email = :user_id
");

$userQuery->execute(['user_id' => $_SESSION['user_id']]);

$user = $userQuery->fetchObject();
?>