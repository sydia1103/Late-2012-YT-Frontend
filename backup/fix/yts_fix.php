<?php
function current_url()
{
    $url      = "http://www.youtube.com" . $_SERVER['REQUEST_URI'];
    $validURL = str_replace("&", "&amp", $url);
    return $validURL;
}

$cururl = current_url();

$ext = substr($cururl, -3);

if ($ext == "png") {
	header('Content-Type: image/x-png');
} else if ($ext == "css") {
	header('Content-Type: text/css');
} else if ($ext == ".js") {
	header('Content-Type: text/javascript');
} else if ($ext == "ico") {
	header('Content-Type: image/x-icon');
}
echo file_get_contents($cururl);

#echo $ext;

?>