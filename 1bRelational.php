<?php
	$a = 5;
	$b = 10;
	
	$res = $a == $b;
	echo "$a == $b: $res<br>";
	$res = $a === $b;
	echo "$a === $b: $res<br>";
	$res = $a > $b;
	$res = $a !== $b;
	echo "$a !== $b: $res<br>";
	echo "$a > $b: $res<br>";
	$res = $a < $b;
	echo "$a < $b: $res<br>";
	$res = $a >= $b;
	echo "$a >= $b: $res<br>";
	$res = $a <= $b;
	echo "$a <= $b: $res<br>";
	$res = $a <=> $b;
	echo "$a <=> $b: $res<br>";
?>