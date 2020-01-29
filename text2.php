<?php
echo "<ul>";
for ($i=1; $i<=10; $i++) { 
	echo "<ul>";
	 for ($j=1; $j<=10 ; $j++) { 
	 	echo "<ul><ul>$i *".$j.'= '. $i * $j."</ul></ul>";
	 }
	 echo "</ul";	
}
echo "</ul>";
?>
