<?php
	$a = 45;
	$b = 8;
	
	$res = ($a % 3 == 0) && ($b % 2 == 0);
	echo "$res<br>";
	
	$res = ($a % 2 == 0) || ($b % 2 == 0);
	echo "$res<br>";

	$res = !($a % 2 == 0);
	echo "$res";
?>