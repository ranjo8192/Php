<?php
/* Array Combine and Array Merge in Php */
?>

<?php
$car = array(1,2,3,4,5,6,7,8);
$arrlength = count($car);
//echo $arrlength;
for($x=0;$x < $arrlength; $x++){
	//echo $car[$x];
	//echo "<br>";
}
?>

<?php
// Array Merge in Php
$num = array(1,2,3);
//print_r(array_push($num,4));
//echo "<pre>";
//print_r($num);
$cars = array("Volvo","BMW","Toyota");
echo "<pre>";
//print_r(array_merge($num,$cars));

// Combine
print_r(array_combine($num,$cars));
$combine = array_combine($num,$cars); // Associative Array
array_push($combine,4);
print_r($combine);

echo array_search("Volvo",$combine); // Array Search Function
//print_r($combine);

// Array Shift
// Array Riverse
//
?>