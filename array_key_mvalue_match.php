<?php
$array =  array(
		"State Labor Law Posters" => "Alabama",

        "Alabama" => "Kits",

        "Home" => "Kits Only"
	);
	echo "<pre>";
	print_r($array);
	$keys = array_keys($array); echo "<pre>"; print_r($keys);
	$values = array_values($array); echo "<pre>"; print_r($values);
	$data = NULL;
	foreach($array as $key => $value)
	{
		
		if($data == $key)
		{
			$url = $key."/".$value."/".$key;
		}
		$data = $value;
	}
	print_r($url);
?>
