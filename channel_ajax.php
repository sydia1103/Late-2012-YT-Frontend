<?php
if(isset($_GET["channel_id"])) {
	$id = $_GET["channel_id"];
	if(isset($_GET["action_load_more_videos"]) && isset($_GET["page"])) {
if(!isset($_GET["sort"])) {
	$sort_by = "newest";
} else {
	$sort_by = $_GET["sort"];
}
$videoList = json_decode(file_get_contents("https://vid.puffyan.us/api/v1/channels/".$id."/videos?sort_by=".$sort_by."&page=".$_GET["page"]));   
foreach($videoList as $item){
echo "<li class='channels-content-item'>
   <span class='context-data-item' data-context-item-user='".$item->author."' data-context-item-type='video' data-context-item-id='".$item->videoId."' data-context-item-time='12:03' data-context-item-title='".$item->title."' data-context-item-views='339,590 views'>
   <a href='watch?v=".$item->videoId."' class='ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto spf-link' data-sessionlink='ei=5s8TUZqgFKqihgH7noCQBQ'><span class='video-thumb ux-thumb yt-thumb-default-194 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='Thumbnail' src='".$item->videoThumbnails[0]->url."' width='194'><span class='vertical-align'></span></span></span></span>
   </a>
   <span class='content-item-detail'>
   <a href='watch?v=".$item->videoId."' title='".$item->title."' class='content-item-title spf-link yt-uix-sessionlink yt-uix-contextlink' dir='ltr' data-sessionlink='ei=5s8TUZqgFKqihgH7noCQBQ'>
   ".$item->title."
   </a>
   <span class='content-item-metadata'>
   <span class='content-item-view-count'>
   ".number_format($item->viewCount)." views
   </span>
   <span class='metadata-separator'>|</span>
   <span class='content-item-time-created'>".$item->publishedText."</span>
   </span>
   </span>
   </span>
</li>";
}
	}
}
?>