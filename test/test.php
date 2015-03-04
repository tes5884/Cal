<script src="../js/hebcal.noloc.min.js"></script>
<?php 
  include_once ('../php/init.php');
  $latestFlow-> bindParam(':userId', $_SESSION['userId']);
	$latestFlow-> execute();
	$data = $latestFlow->fetchObject();
?>
	
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
  


<?php
/*
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