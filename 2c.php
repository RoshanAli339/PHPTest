<?php
	function wordCount($sen)
	{	
		$count = 0;
		for ($i = 0; $i < strlen($sen); $i++)
		{
			if ($sen[$i] == ' ' || $i == strlen($sen)-1)
				$count++;
		}
		return $count;
	}
	$a = "Hello world Welcome to Skill Oriented Course PHP Personal Home Page";
	$words = wordCount($a);
	echo "No.of words: $words<br>";
?>