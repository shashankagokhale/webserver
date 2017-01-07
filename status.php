<?php

   for (;;)
   {
	   system ("gpio -g read 17",$status);
	   print_r ("the stats of pin 17 is");
	   print_r ($status);
	   
	   
	   system ("gpio -g read 18",$status);
	   print_r ("the stats of pin 18 is");
	   print_r ($status);
	   
	   system ("gpio -g read 22",$status);
	   print_r ("the stats of pin 22 is");
	   print_r ($status);
	   
	   system ("gpio -g read 23",$status);
	   print_r ("the stats of pin 23 is");
	   print_r ($status);
	   
	   system ("gpio -g read 24",$status);
	   print_r ("the stats of pin 24 is");
	   print_r ($status);
	   
	   system ("gpio -g read 25",$status);
	   print_r ("the stats of pin 25 is");
	   print_r ($status);
	   
	   system ("gpio -g read 4",$status);
	   print_r ("the stats of pin 4 is");
	   print_r ($status);
	   
   }