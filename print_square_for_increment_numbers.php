<?php
$row = 4;
$col = 4;
$number =0;
for($i=1;$i<=$row;$i++)
{
	//echo $i."<br>";
	for($j=1;$j<=$col;$j++)
	{
		$number = $j + ($i*$col)-$col;
		if($number >=10 )
		{
			echo $number." ";
		} else
		{
			echo $number." "; 
		}
	}
	echo "<br>";
}

?>

<?php
$k =1;
for($i=1;$i<=$row;$i++)
{
	for($j=1;$j<=$col;$j++)
	{
		echo $k." ";
		$k++;
	}
	echo "<br>";
}
?>