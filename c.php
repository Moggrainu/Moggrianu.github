<?php
$dir = "banners/";
$files = scandir($dir);
$images = array_diff($files, ['.', '..']);
$name = $images[array_rand($images)];
$fp = fopen($dir . $name, 'rb');

// send the right headers
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1
header('Pragma: no-cache'); // HTTP 1.0
header('Expires: 0'); // Proxies
header('Content-Type: ' . $fp['type']);
header('Content-Length: ' . $fp['bytes']);

// dump the picture and stop the script
//fpassthru($fp);
print($fp['type']);
print('dicks');
exit;
?>