<?php
	$a = 75;
	echo "Initial value: $a<br>";
	$a = $a & 45;
	echo "Bitwise AND a & 45: $a<br>";
	$a = $a | 32;
	echo "Bitwise OR a | 32: $a<br>";
	$a = $a << 2;
	echo "Bitwise Shift left a << 2: $a<br>";
	$a = $a >> 2;
	echo "Bitwise Shift right a >> 2: $a<br>";
	$a = $a ^ 12;
	echo "Bitwise XOR a ^ 12: $a<br>";
	$a = ~$a;
	echo "Bitwise NOT ~a: $a<br>";
?>