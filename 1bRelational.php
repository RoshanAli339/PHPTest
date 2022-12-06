<?php
	$a = 5;
	$b = 10;
	
	$res = $a == $b;
	echo "$a == $b". var_dump($res)."<br>";
	$res = $a === $b;
	echo "$a === $b". var_dump($res)." <br>";
	$res = $a != $b;
	echo "$a != $b". var_dump($res)."<br>";
	$res = $a !== $b;
	echo "$a !== $b". var_dump($res)."<br>";
	$res = $a > $b;
	echo "$a > $b". var_dump($res)."<br>";
	$res = $a < $b;
	echo "$a < $b". var_dump($res)."<br>";
	$res = $a >= $b;
	echo "$a >= $b". var_dump($res)."<br>";
	$res = $a <= $b;
	echo "$a <= $b". var_dump($res)."<br>";
	$res = $a <=> $b;
	echo "$a <=> $b : $res<br>";
?>