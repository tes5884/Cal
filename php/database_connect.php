<?php
$servername = "localhost";
$username = "women_cal";
$password = "#^D2g8za8xMxVp1axWbY";

try {
	//connected to mysql
    $conn = new PDO("mysql:host=$servername;dbname=women_calendar", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>