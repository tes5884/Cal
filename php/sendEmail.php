<?php
  include ('init.php');
  
  $cntctName = $_POST['name'];
	$cntctEmail = $_POST['email'];
	$cntctSubject = $_POST['subject'];
	$cntctMessage = $_POST['message'];
	
  /* Set e-mail recipient */
  $myemail="tes5884+cal@gmail.com";
  
  /* Let's prepare the message for the e-mail */
  $subject="Someone has sent you a message";
  $message="Someone has sent you a message using your contact form: \r\n \r\nName: $cntctName - $cntctEmail \r\nSubject: $cntctSubject \r\nMessage:$cntctMessage";
  $headers='From: info@mikvahcalendar.org'."\r\n".'Reply-To: info@mikvahcalendar.org'."\r\n".'X-Mailer: PHP/'.phpversion();
  /* Send the message using mail() function */
  mail($myemail,$subject,$message,$headers);
  echo('Thank you for contacting us. If necessary, we will get back to you shortly. <br /> Click <a href="../index.php">here</a> to go back to the main page.');
  exit();
?>