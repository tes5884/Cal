<script src="../js/hebcal.noloc.min.js"></script>
<?php 
  include_once ('../php/init.php');

  $checkFlow-> bindParam(':userId', $_SESSION['userId']);
	$checkFlow-> execute();
	$data = $checkFlow->fetchAll();
?>

  <?php foreach ($data as $row): ?>
    
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
<?php endforeach; ?>
