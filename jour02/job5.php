<?php

$n=100; 
echo "2<br>";
for($i=2;$i<$n;$i++)
{
	for($j=2;$j<$i;$j++)
	{
		if(($i%$j)==0) break;
		if($j==($i-1)) echo "$i<br>"; 
	}
}
?>