<?php
header("Content-type: text/xml");
$id = $_GET["video_id"];
$annodata = file_get_contents("https://invidious.zee.li/api/v1/annotations/".$id);
echo $annodata;
?>