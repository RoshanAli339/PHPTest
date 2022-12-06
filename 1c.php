<?php
 
	$i=43;
	$j=12;
	if($i>$j)
		echo"$i is greater than $j<br>";
	else if($i<$j)
		echo "$j is greater than $i<br>";
	else
		echo "$i and $j are equal<br>";

	$c = 5;
	switch($c)
	{
		case 1:
			echo "This is case 1<br>";
			break;
		case 2:
			echo "This is case 2<br>";
			break;
		case 3:
			echo "This is case 3<br>";
			break;
		case 5:
			echo "This is case 5<br>";
			break;
		default:
			echo "This is the default case<br>";
	}
?>
