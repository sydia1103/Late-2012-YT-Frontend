<?php
include("./static/header.php");
include("./static/guide.php");
// everything here is just calling for most popular videos on youtube and echoing it with the original html.
// i recommend you don't bother much with this.
$count = 0;
?>
<div id="content">



  <div class="branded-page-v2-container enable-fancy-subscribe-button  branded-page-v2-secondary-column-hidden">
    <div class="branded-page-v2-col-container clearfix">
      <div class="branded-page-v2-primary-col">
            <div class="branded-page-v2-primary-col-header-container">
      

  <div id="context-source-container" data-context-source="Popular on YouTube" style="display:none;"></div>

    </div>
  <div class="branded-page-v2-body" id="gh-activityfeed">
        
  <div id="ad_creative_expand_btn_1" class="masthead-ad-control open hid">
    <a onclick="masthead.expand_ad(); return false;">
      <span>Show ad</span>
      <img src="//web.archive.org/web/20121230023058im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="">
    </a>
  </div>


    <div class="context-data-container">
                  
  <div class="lohp-newspaper-shelf">
    
    <div class="lohp-large-shelf-container">
        <?php
$videoList = json_decode(file_get_contents('https://vid.puffyan.us/api/v1/trending?type=Movies&region=US'));
		  
foreach($videoList as $videoList){
//Embed video
if(isset($videoList->videoId)){
if($count < 1) {
			echo "<div class='context-data-item'>
    
    <a href='watch?v=".$videoList->videoId."' class='ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CAMQ0h4oAA%3D%3D'><span class='video-thumb ux-thumb yt-thumb-default-370 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='Thumbnail' src='https://i.ytimg.com/vi/".$videoList->videoId."/hq720.jpg' onerror=\"this.src='./img/default.png'\" width='370'><span class='vertical-align'></span></span></span></span></a>
      <a class='lohp-video-link max-line-2 yt-uix-sessionlink' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CAMQ0h4oAA%3D%3D' href='watch?v=".$videoList->videoId."' title='".$videoList->title."'>".$videoList->title."</a>


      <div class='lohp-video-metadata'>
          <span class='content-uploader'>
<span class='username-prepend'>by</span> <a href='profile?id=".$videoList->authorId."' class='yt-uix-sessionlink yt-user-name ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D' dir='ltr'>".$videoList->author."</a>
  </span>

          <span class='view-count'>
    ".number_format($videoList->viewCount)." views
  </span>

          <span class='content-item-time-created'>
    ".$videoList->publishedText."
  </span>

      </div>
  </div>
";
$count++;
}
}
}
$count = 0; //reset count, invidious does not seem to have limit filter
		?>
    </div>
    <div class="lohp-medium-shelves-container">
<?php
$videoList = json_decode(file_get_contents('https://vid.puffyan.us/api/v1/trending?type=Movies&region=US'));
		  
foreach($videoList as $videoList){
//Embed video
if(isset($videoList->videoId)){
if($count < 3) {
			echo "<div class='lohp-medium-shelf context-data-item'>
    
    <div class='lohp-media-object'>
      <a href='watch?v=".$videoList->videoId."' class='ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CAYQ0h4oAw%3D%3D'><span class='video-thumb ux-thumb yt-thumb-default-128 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='Thumbnail' src='https://i.ytimg.com/vi/".$videoList->videoId."/default.jpg' onerror=\"this.src='./img/default.png'\" width='128'><span class='vertical-align'></span></span></span></span>
</a>
    </div>
    <div class='lohp-media-object-content lohp-medium-shelf-content'>
        <a class='lohp-video-link max-line-2 yt-uix-sessionlink' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CAYQ0h4oAw%3D%3D' href='watch?v=".$videoList->videoId."' title='".$videoList->title."'>".$videoList->title."</a>

      <div class='lohp-video-metadata attached'>
          <span class='content-uploader'>
<span class='username-prepend'>by</span> <a href='profile?id=".$videoList->authorId."' class='yt-uix-sessionlink yt-user-name ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D' dir='ltr'>".$videoList->author."</a>
  </span>

      </div>
        <div class='lohp-video-metadata'>
            <span class='view-count'>
    ".number_format($videoList->viewCount)." views
  </span>

            <span class='content-item-time-created' title='2 days ago'>
    ".$videoList->publishedText."
  </span>

        </div>
    </div>
  </div>";
$count++;
}
}
}
$count = 0; //reset count, invidious does not seem to have limit filter
		?>
            </div>
  </div>



            <div class="lohp-vbox-list lohp-left-vbox-list">

          <div>
          <?php
$videoList = json_decode(file_get_contents('https://vid.puffyan.us/api/v1/popular'));
		  
foreach($videoList as $videoList){
//Embed video
if(isset($videoList->videoId)){
if($count < 15) {
	echo "<div class='lohp-shelf-cell-container lohp-category-shelf '>
   <div class='lohp-category-shelf-item-list lohp-shelf-size-1'>
      <h2 class='branded-page-module-title'>
         <a class='spf-link' href='profile?id=".$videoList->authorId."' title='profile?id=".$videoList->authorId."' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;ved=CBIQzh4%3D'>
         ".$videoList->author."
         </a>
      </h2>
      <div class='lohp-category-shelf-item context-data-item first-shelf-item last-shelf-item'>
         <a href='watch?v=".$videoList->videoId."' class='ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CBMQzx4oAA%3D%3D'><span class='video-thumb ux-thumb yt-thumb-default-165 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img data-thumb='https://i.ytimg.com/vi/".$videoList->videoId."/default.jpg' onerror=\"this.src='./img/default.png'\" alt='Thumbnail' src='https://i.ytimg.com/vi/".$videoList->videoId."/default.jpg' onerror=\"this.src='./img/default.png'\" width='165' data-group-key='thumb-group-0'><span class='vertical-align'></span></span></span></span></a>
         <a class='lohp-video-link max-line-2 yt-uix-sessionlink' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CBMQzx4oAA%3D%3D' href='watch?v=".$videoList->videoId."' title='".$videoList->title."'>".$videoList->title."</a>
         <div class='lohp-video-metadata'>
            <span class='view-count'>
            ".number_format($videoList->viewCount)." views
            </span>
            <span class='content-item-time-created'>
            ".$videoList->publishedText."
            </span>
         </div>
      </div>
   </div>
</div>";
$count++;
}
}
}
$count = 0; //reset count, invidious does not seem to have limit filter
		  ?>
  </div>

  </div>



            <div class="lohp-vbox-list lohp-right-vbox-list">
          <div class="lohp-vertical-shelf">
    
        <h2 class="branded-page-module-title">
      <a class="spf-link" href="/web/20121230023058/http://www.youtube.com/channel/HCp-Rdqh3z4Uc?feature=g-logo" title="Music" data-sessionlink="ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;ved=CEoQzh4%3D">
        Music
      </a>
    </h2>
<?php
$videoList = json_decode(file_get_contents('https://vid.puffyan.us/api/v1/trending?type=Music&region=US'));
		  
foreach($videoList as $videoList){
//Embed video
if(isset($videoList->videoId)){
if($count < 3) {
			echo "<div class='lohp-vertical-shelf-item context-data-item'>
        <div class='lohp-media-object'>
          <a href='watch?v=".$videoList->videoId."' class='ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CFEQzx4oAA%3D%3D'><span class='video-thumb ux-thumb yt-thumb-default-64 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='Thumbnail' src='https://i.ytimg.com/vi/".$videoList->videoId."/default.jpg' onerror=\"this.src='./img/default.png'\" width='64' data-group-key='thumb-group-1'><span class='vertical-align'></span></span></span></span></a>
        </div>
        <div class='lohp-vertical-shelf-item-content lohp-media-object-content'>
            <a class='lohp-video-link max-line-3 yt-uix-sessionlink' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CFEQzx4oAA%3D%3D' href='watch?v=".$videoList->videoId."' title='".$videoList->title."'>".$videoList->title."</a>

          <div class='lohp-video-metadata attached'>
              <span class='content-uploader'>
<span class='username-prepend'>by</span> <a href='profile?id=".$videoList->authorId."' class='yt-uix-sessionlink yt-user-name ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D' dir='ltr'>".$videoList->author."</a>
  </span>

          </div>
        </div>
      </div>";
$count++;
}
}
}
$count = 0; //reset count, invidious does not seem to have limit filter
	?>
  </div>

          <div class="lohp-vertical-shelf">
    
        <h2 class="branded-page-module-title">
      <a class="spf-link" href="/web/20121230023058/http://www.youtube.com/channel/HC4qRk91tndwg?feature=g-logo" title="Most Popular" data-sessionlink="ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;ved=CFAQzh4%3D">
        Gaming
      </a>
    </h2>

      <?php
$videoList = json_decode(file_get_contents('https://vid.puffyan.us/api/v1/trending?type=Gaming&region=US'));
		  
foreach($videoList as $videoList){
//Embed video
if(isset($videoList->videoId)){
if($count < 3) {
			echo "<div class='lohp-vertical-shelf-item context-data-item'>
        <div class='lohp-media-object'>
          <a href='watch?v=".$videoList->videoId."' class='ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CFEQzx4oAA%3D%3D'><span class='video-thumb ux-thumb yt-thumb-default-64 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='Thumbnail' src='https://i.ytimg.com/vi/".$videoList->videoId."/default.jpg' onerror=\"this.src='./img/default.png'\" width='64' data-group-key='thumb-group-1'><span class='vertical-align'></span></span></span></span></a>
        </div>
        <div class='lohp-vertical-shelf-item-content lohp-media-object-content'>
            <a class='lohp-video-link max-line-3 yt-uix-sessionlink' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D&amp;feature=g-logo&amp;ved=CFEQzx4oAA%3D%3D' href='watch?v=".$videoList->videoId."' title='".$videoList->title."'>".$videoList->title."</a>

          <div class='lohp-video-metadata attached'>
              <span class='content-uploader'>
<span class='username-prepend'>by</span> <a href='profile?id=".$videoList->authorId."' class='yt-uix-sessionlink yt-user-name ' data-sessionlink='ei=CPyeyIWLwbQCFZkQIQodPx8kow%3D%3D' dir='ltr'>".$videoList->author."</a>
  </span>

          </div>
        </div>
      </div>";
$count++;
}
}
}
$count = 0; //reset count, invidious does not seem to have limit filter
	?>
      </div>
  </div>

  </div>

  <div style="clear:both;"></div>



    </div>

  </div>

      </div>
    </div>
    <hr class="branded-page-v2-col-container-bottom-border">
  </div>
</div>