<?php
function decrypt($text,$key)
	{
		$keylength=strlen($key);
		for($i = 0; $i < strlen($text);$i++) 
		{
			$decalage = ($text{$i} % $keylength) - 97; 
			
			$currentLetter=$text{$i};
			if($currentLetter - $decalage < 97)
			{
				$currentLetter += 26;
			
			$newCharCode = ($currentLetter - 97 - $decalage) % 26 + 97;
			}
			
		}
	
		return $text;
	}
	echo decrypt("osfsffhjiygffliuo",2);
	?>