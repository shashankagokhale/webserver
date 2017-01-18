
<?php
	system ("gpio -g mode 23  out");
	system ("gpio -g write 23 0");
	
	 $_SESSION['10.0.1.2'] = $_SERVER['PHP_SELF']; 
    	header('Location: index.html');
    	exit;
?>
	

