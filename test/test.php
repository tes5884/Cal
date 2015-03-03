<?php 
  include_once ('../php/init.php');

  $checkFlow-> bindParam(':userId', $_SESSION['userId']);
	$checkFlow-> execute();
	$data = $checkFlow->fetchAll();

  foreach ($data as $row) {
    echo('<li>');
    echo($row['flow_date']);
    echo('</li>');
  }
?>

<script src="../js/hebcal.noloc.min.js"></script>
<script>
		document.write(new Hebcal.HDate(new Date('2015-03-27 00:00:00')));
</script>

<!--
document.write(new Hebcal.HDate(<?php $row['flow_date'] ?>));
-->