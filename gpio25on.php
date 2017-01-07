
<?php
	system ("gpio -g mode 25  out");
	system ("gpio -g write 25 1");
	
	 $_SESSION['10.0.1.2'] = $_SERVER['PHP_SELF']; 
    	header('Location: index.html');
    	exit;
?>
	

