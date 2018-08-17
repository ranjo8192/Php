<?php
/* File Handling in php
 * Download Images from the server
 * And save those images in given folder
 */
$images = array('http://www.rensis.in/37-small_default/round-collar-men-s-solid-t-shirt.jpg','http://www.rensis.in/40-small_default/cutaway-men-s-solid-t-shirt.jpg');
echo "<pre>"; print_r($images);
foreach($images as $image)
{
	// Get file
	$content = file_get_contents($image);
	//echo "<pre>"; print_r((basename($image)));
	
	// Store in the filesystem
	$save_path = ('D:/xampp/htdocs/php-learning/images/'.basename($image));
	echo $save_path;
	file_put_contents($save_path,$content);
	echo "<h2>".basename($image). "image downloaded successfully</h2>";
}
?>