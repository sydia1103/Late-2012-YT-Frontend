<?php
// for the likes and dislikes ratio, generates the width of the ratio.
function get_percentage($total, $number)
{
  if ( $total > 0 ) {
   return round($number / ($total / 100),2);
  } else {
    return 0;
  }
}

// in case you want to add view count back to recommendations, go knock yourself out.
function getViewCount($video_id) {
global $api_key;
$infoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=statistics&id='.$video_id.'&key='.$api_key));
		  
foreach($infoList->items as $info){
	return $info->statistics->viewCount;
}
}


// in case you want to add the video duration back in recommendations, it is stored in ISO8601, you'll need the ISO8601ToSeconds function.
function getVidDuration($video_id) {
global $api_key;
$infoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&part=contentDetails&key='.$api_key));
		  
foreach($infoList->items as $info){
	return $info->contentDetails->duration;
}
}
//for video duration in-case you'd like to add it back
function ISO8601ToSeconds($ISO8601){
	$interval = new \DateInterval($ISO8601);

	return ($interval->d * 24 * 60 * 60) +
		($interval->h * 60 * 60) +
		($interval->i * 60) +
		$interval->s;
}
//gets recommendations for end screen.
function getEndScreenRecommendations() {
global $id;
$count = 0;
$videoList = json_decode(file_get_contents("https://vid.puffyan.us/api/v1/videos/".$id)); 
		  
foreach($videoList->recommendedVideos as $recom){
		echo "title=".urlencode($recom->title)."\u0026length_seconds=".$recom->lengthSeconds."\u0026author=".$recom->author."\u0026id=".$recom->videoId."\u0026view_count=".number_format($recom->viewCount).",";
		$nextVideoId = $recom->videoId;
	}
$videoList = json_decode(file_get_contents("https://vid.puffyan.us/api/v1/videos/".$nextVideoId)); 
		  
foreach($videoList->recommendedVideos as $recom){
		echo "title=".urlencode($recom->title)."\u0026length_seconds=".$recom->lengthSeconds."\u0026author=".$recom->author."\u0026id=".$recom->videoId."\u0026view_count=".number_format($recom->viewCount).",";
}
}
?>
