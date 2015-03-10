<script src="../js/hebcal.noloc.min.js"></script>
<?php 
  include_once ('../php/init.php');
  $checkFlowAsc-> bindParam(':userId', $_SESSION['userId']);
	$checkFlowAsc-> execute();
	$data = $checkFlowAsc->fetchAll(); 
	$prev = "";

	  foreach ($data as $row) { 
  	  if (!$prev == "") {
  	    
  	    $last = new DateTime($prev);
  	    $current = new DateTime($row['flow_date']);
  	    $interval = ($last->diff($current));
				$newDay = date_format(date_add($current, $interval), 'Y-m-d H:i:s');  	    
  	    
  	    echo 'previous date: ' . $prev . '<br />';
				echo 'current date: ' . $row['flow_date'] . '<br />';
				echo 'interval: ' . $interval->days . '<br />';
				echo 'haflagah: ' . $newDay . '<br />';
				echo ' - - - - - - - - - ' . '<br />';
				
  	  } else {
  	    echo 'current date: ' . $row['flow_date'] . '<br />';
				echo ' - - - - - - - - - ' . '<br />';
  	  }
  	  $prev = $row['flow_date'];			
	  }  
?>
<?php
/*
	<!--json encoded date -->
  	<?php $date = json_encode($data->flow_date); ?>
  	<script>var hebDate = new Hebcal.HDate(new Date(<?php echo($date); ?>));</script>
  	<script>var engDate = new Date(<?php echo($date)?>);</script>
	
	<li>Hebdate - <script>document.write(hebDate.toString());</script></li>
	<li>Chodedsh - <script>document.write(hebDate.getMonthObject().next().getDay(hebDate.getDate()).toString());</script></li>
	<li> 30 -
		<script>
			engDate.setDate(engDate.getDate() + 29);
			document.write(Hebcal.HDate(engDate));
    </script>
	</li>
	<li> 31 -
	<script>
    		engDate.setDate(engDate.getDate() + 1);
				document.write(Hebcal.HDate(engDate));
			</script>
	</li>
<?php foreach ($data as $row): ?>
    <?php echo('<li>' . $row['flow_date'] . '</li>'); ?>

	<?php endforeach; ?>
	
    <li>
    	<!--json encoded date -->
      <?php $date = json_encode($row['flow_date']); ?>
      <script>var hebDate = new Hebcal.HDate(new Date(<?php echo($date); ?>));</script>
      <script>var engDate = new Date(<?php echo($date)?>);</script>
      
      <!-- date in hebrew -->
    	<script>document.write(hebDate.toString());</script>
  	</li>  	
  	<li>  	
    	<!-- date + 1 month -->
    	<script>document.write(hebDate.getMonthObject().next().getDay(hebDate.getDate()).toString());</script>
    </li>
    <li>
    <!-- 30 and 31 -->
      <script>
				engDate.setDate(engDate.getDate() + 29);
				document.write(Hebcal.HDate(engDate));
      </script>
    </li>
    <li>
    	<script>
    		engDate.setDate(engDate.getDate() + 1);
				document.write(Hebcal.HDate(engDate));
			</script>	
    </li>
*/
?>