<?php
$arr = array(1,2,3,4,7,9,11);
$slice = array_slice($arr,0,4);
echo "<pre>"; print_r($slice);
$slice1 = array_slice($arr,4);//+array('3'=>'4')+array($arr,4);
echo "<pre>"; print_r($slice1);
$arr1 = array(5);
echo "<pre>"; print_r($arr1);
$merge = array_merge($slice,$arr1,$slice1);
echo "<pre>"; print_r($merge);
?>

<?php
$merge1 = array_merge(array_slice($arr,0,4),$arr1,array_slice($arr,4));
echo "<pre>"; print_r($merge1);
// Missing values in the array
$missing = array();
for($i=1;$i<max($merge1);$i++)
{
		if(!in_array($i,$merge1))
		{
			$missing[]=$i;
		}
}
echo "<pre>"; print_r($missing);
// Now find the complete array
$complete = array_merge($merge1,$missing);
echo "<pre>"; print_r($complete);
sort($complete);
echo "<pre>"; print_r($complete);
?>