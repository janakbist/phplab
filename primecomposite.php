<?php  
$count = 0;  
$num = 107;  
while ($count==0)  
{  
$div_count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
}  
if ($div_count<3)  
{  
echo $num." is prime number";
break;
}
else
{
	echo $num." is composite number ";
	break;
}
}
?>