<?php
	$name = $_POST["Name"];

	$font = "Trebuchet MS";
	echo '<div><img src="flowers.gif" alt="flowers" style="float: left;">';
	echo '<h1 style = " font-family:Trebuchet MS; font-size: 50px;">WELCOME</h1>';
	echo '<h2 style = " font-family:Lucida Console; margin-top: 30px;">'. $name .'</h2>';
	echo '<img src="flowers.gif" alt="flowers" style="float: right;"></div>';
?>