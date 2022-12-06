<?php
	function mySort(&$a)
	{
		$n = count($a);
		for ($i = 0; $i < $n-1; ++$i)
		{
			$least = $i;
			for ($j = $i+1; $j < $n; ++$j)
			{
				if ($a[$j] < $a[$least])
					$least = $j;
			}
			$temp = $a[$least];
			$a[$least] = $a[$i];
			$a[$i] = $temp;
		}		
	}
	$a1 = array(12, 234, 56, 345, 65, 23);	
	echo "Before sorting: ";
	foreach ($a1 as $v)	echo "$v, ";
	echo "<br>";
	mySort($a1);
	echo "After sorting: ";
	foreach ($a1 as $v)	echo "$v, ";
	
	echo "<br>";	
	$a2 = array(
		"Names" => array("Roshan", "Karthik", "Tayyab", "Neeraj"),
		"Roll" => array("Y21CS160", "Y21CS169", "Y21CS172", "Y21CS185"),
		"Attendance" => array(92.21, 98.54, 91.23, 98.43));

	for ($i = 0; $i < 4; ++$i)
	{
		if ($a2["Attendance"][$i] > 95.0)
		{
			echo $a2["Names"][$i]." : ".$a2["Roll"][$i]."<br>";
		}
	}
?>