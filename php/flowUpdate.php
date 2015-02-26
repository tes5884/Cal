<?php
  include ('init.php');
  
  $date = $_POST['datePicker'];
  $nightOrDay = $_POST['inlineRadioOptions'];
  
  $flowUpdate -> bindParam(':flowDate', $date);
  $flowUpdate -> bindParam(':dayOrNight', $nightOrDay);
  $flowUpdate -> bindParam(':userId', $_SESSION['userId']);
	$flowUpdate -> execute();
?>
<meta http-equiv="refresh" content="0;../main.php">