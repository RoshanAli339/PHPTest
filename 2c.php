<?php
	function myStrlen($str)
	{
		$i = 0;
		while ($str != '')
		{
			$str = substr($str, 1);
			$i++;
		}
		return $i;
	} 

	function wordCount($sen)
	{	
		$count = 0;
		for ($i = 0; $i < myStrlen($sen); $i++)
		{
			if ($sen[$i] == ' ' || $i == myStrlen($sen)-1)
				$count++;
		}
		return $count;
	}
	$a = "Hello world Welcome to Skill Oriented Course PHP Personal Home Page";
	$length = myStrlen($a);
	echo "Length of given string: $length<br>";
	$words = wordCount($a);
	echo "No.of words: $words<br>";
?>