<?php
	$sum = 0;
	for ($i = 1; $i <= 20; $i++)
	{
		$sum += $i;
	}
	echo "Sum of first 20 natural numbers is: $sum<br>";

	$fact = 1;
	$i = 1;
	while ($i <= 5)
	{
		$fact *= $i;
		$i++;
	}
	echo "Factorial of 5 is: $fact<br>";

	$a = 500;
	do
	{
		echo "$a<br>";
		$a = intdiv($a, 2);
	}
	while($a > 0);
?>