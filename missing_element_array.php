<?php
// Find missing values in a array
//mjf766zzm3
$arr = array(1,2,3,5,6,7,10);
$missing = array();
for($i=1;$i<max($arr);$i++)
{
	if(!in_array($i, $arr))
	{
		$missing[] = $i;
	}
}
echo "<pre>";
print_r($missing);
?>
<hr>
<?php
// Push element in array
$arr = array(1,2,3,5,6,7,10);
$a = 3;
$arr1 = array_push($arr, $a);
echo "<pre>";
print_r($arr);
?>
<hr>
<h3>Push an element in an aaray at 4th position</h3>
<?php
// You have to push element at 3rd position.
$arr = array(1,2,3,5,6,7,10);
$inserted = 4;
$res = array_merge(array_slice($arr,0,3,true),array(4),array_slice($arr,3)); 
echo  "<pre>";
print_r($res);
?>
<hr>