<?php
ob_start();
$page = file_get_contents('https://www.youtube.com/attribution?v=AnUD0gfLevo');
echo $page;
ob_end_flush();
?>