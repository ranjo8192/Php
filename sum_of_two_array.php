<?php
// $arr1 = a;
// $arr2 = ab;
// echo $arr1+$arr2; 
 ?>
<?php
$arr1 = array('1'=>'a','2'=>'b','3'=>'c');
$arr2 = array('x','y','z');
$arr3 = array_merge($arr1,$arr2);
echo "<br>";
print_r($arr3);
?>
<br/>
<?php
// Php nesting array
// Create a two dimwnsinal array and find the sum using for loop
error_reporting(1);
$arr = array(
			array(10,10,10),
			array(10,10,10),
			array(10,10,10)
			);
$sum = 0;
for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo $arr[$i][$j]." ";
		$sum = $sum+$arr[$i][$j];
	}
	echo "<br/>";
}
echo "Sum of two dimentional array is =".$sum;
?>