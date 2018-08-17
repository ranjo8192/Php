<?php
// Find the sum of given array
$sum=0;
$arr = array(10,20,30,40,50);
for($i=0;$i<count($arr);$i++)
{
	$sum = $sum+$arr[$i];
	
}
echo "Sum of given number in a array =".$sum;
echo "<br>";

// show all color name

$col = array('red','green','yellow','pink');
for($i=0;$i<count($col);$i++)
{
	echo  "color=".$col[$i]."<br/>";
}

?>
<?php
// Sum of even and odd number

$arr = array(1,2,3,4,5,6,7,8,9);

for($i=0;$i<count($arr);$i++)
{
	if($arr[$i]%2 == 0)
	{
		@$even=$even+$arr[$i]; 
	}
	else
	{
		@$odd=$odd+$arr[$i];
	}
}
echo "Sum of even numbers is =".$even."<br>";
echo "Sum of odd numbers is =".$odd;
?>

