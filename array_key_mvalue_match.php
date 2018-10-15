<?php
$array =  array(
		"State Labor Law Posters" => "Alabama",
        "Alabama" => "Kits",
        "Home" => "Kits Only"
	);
	echo "<pre>";
	print_r($array);
	$keys = array_keys($array); 
	$values = array_values($array); 
	$data = NULL;
	foreach($array as $key => $value)
	{
		
		if($data == $key)
		{
			$keys = array_search($key,$array);
			echo $keys;
			$url = $keys."/".$key."/".$array[$key];
			echo $url; 
		}
		$data = $value;
	}
	//print_r($url);
?>