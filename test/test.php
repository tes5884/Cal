<?php
	require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
	<?php if($user->active): ?>
		<p>you are active!</p>
	<?php else: ?>
		<p>you are not active</p>	
	<?php endif; ?>
</body>

</html>