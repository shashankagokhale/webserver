<?php
	system ("gpio -g mode 18  out");
	system ("gpio -g write 18 0");
	
	 $_SESSION['10.0.1.2'] = $_SERVER['PHP_SELF']; 
    	header('Location: index.html');
    	exit;
?>
	
