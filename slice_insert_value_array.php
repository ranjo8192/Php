<?php
// You have to push element at 3rd position.
$arr = array(1,2,3,5,6,7,10);
$inserted = 4;
$res = array_merge(array_slice($arr,0,3,true),array(4),array_slice($arr,3)); 
echo  "<pre>";
print_r($res);
?>
<hr>