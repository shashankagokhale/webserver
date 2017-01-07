<?php
	system ("gpio -g mode 27  out");
	system ("gpio -g write 27 1");
	
	 $_SESSION['10.0.1.2'] = $_SERVER['PHP_SELF']; 
    	header('Location: index.html');
    	exit;
?>
	
