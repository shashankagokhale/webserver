
<?php
	system ("gpio -g mode 24  out");
	system ("gpio -g write 24 1");
	
	 $_SESSION['10.0.1.2'] = $_SERVER['PHP_SELF']; 
    	header('Location: index.html');
    	exit;
?>
	

