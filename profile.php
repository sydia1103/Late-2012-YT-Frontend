<?php
include("./static/header.php");
if(isset($_GET["id"])) {
	$id = $_GET["id"];
} else {
	die();
}
if(isset($_GET["sort"])) {
	$sort_by = $_GET["sort"];
} else {
	$sort_by = "newest";
}
if(isset($_GET["query"])) {
	$query = $_GET["query"];
} else {
	$query = "";
}
$videoList = json_decode(file_get_contents("https://invidious.zapashcanon.fr/api/v1/channels/".$id)); 
		  
$author = $videoList->author;
$profpic = $videoList->authorThumbnails[2]->url;
$subcount = $videoList->subCount;
$totalviews = $videoList->totalViews;
$joindate = $videoList->joined;
$description = $videoList->descriptionHtml;

if(isset($videoList->error)) {
	die("<br><center>There is no info for this channel.</center><br>");
}
?>
<script>
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};
</script>
<script id="js-2120046522" src="//web.archive.org/web/20130107030743js_/http://s.ytimg.com/yts/jsbin/www-channels3-vflxBNsLu.js" data-loaded="true"></script>
<style>
      #branded-page-body-container {
      background-color: #111111;
      background-image: url(https://media.discordapp.net/attachments/746410769846894714/811944969119596544/channels3_background.png);
      background-repeat: no-repeat;
      background-position: center top;
  }

</style>
<link id="css-3345296040" rel="stylesheet" href="./asset/channels.css">
<div id="content">
          
    <div class="subscription-menu-expandable subscription-menu-expandable-channels3 yt-rounded ytg-wide hid">
    <div class="content" id="recommended-channels-list"></div>
    <button class="close" type="button">close</button>
  </div>

      <div class="hid">
    <div class="yt-alert yt-alert-default yt-alert-success  " id="success-template">  <div class="yt-alert-icon">
    <img src="//web.archive.org/web/20130207160144im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"><button onclick=";return false;" class="close yt-uix-close yt-uix-button yt-uix-button-close" type="button" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert"></div></div>
    <div class="yt-alert yt-alert-default yt-alert-error  " id="error-template">  <div class="yt-alert-icon">
    <img src="//web.archive.org/web/20130207160144im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"><button onclick=";return false;" class="close yt-uix-close yt-uix-button yt-uix-button-close" type="button" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert"></div></div>
    <div class="yt-alert yt-alert-default yt-alert-warn  " id="warn-template">  <div class="yt-alert-icon">
    <img src="//web.archive.org/web/20130207160144im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"><button onclick=";return false;" class="close yt-uix-close yt-uix-button yt-uix-button-close" type="button" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert"></div></div>
    <div class="yt-alert yt-alert-default yt-alert-info  " id="info-template">  <div class="yt-alert-icon">
    <img src="//web.archive.org/web/20130207160144im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"><button onclick=";return false;" class="close yt-uix-close yt-uix-button yt-uix-button-close" type="button" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert"></div></div>
    <div class="yt-alert yt-alert-default yt-alert-status  " id="status-template">  <div class="yt-alert-icon">
    <img src="//web.archive.org/web/20130207160144im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"><button onclick=";return false;" class="close yt-uix-close yt-uix-button yt-uix-button-close" type="button" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert"></div></div>
  </div>

  <div class="hid">
    <div id="message-container-template" class="message-container"></div>
  </div>




  <div id="branded-page-default-bg" class="ytg-base">
    <div id="branded-page-body-container" class="ytg-base clearfix enable-fancy-subscribe-button">

      <div id="branded-page-header-container" class="ytg-wide ">
          <div id="branded-page-header" class="ytg-wide">
    <div id="channel-header-main">
      <div class="upper-section clearfix">
        <a href="profile?id=<?php echo $id; ?>">
          <span class="channel-thumb">
            <span class="video-thumb ux-thumb yt-thumb-square-60 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img alt="<?php echo $author; ?>" src="<?php echo $profpic; ?>" width="60"><span class="vertical-align"></span></span></span></span>
          </span>
        </a>
          <div class="upper-left-section ">

    <h1>
        <span class="qualified-channel-title" title="<?php echo $author; ?>'s channel"><?php echo $author; ?>'s channel</span>

    </h1>

    <div id="context-source-container" data-context-source="<?php echo $author; ?>'s channel" data-context-image="<?php echo $profpic; ?>" style="display:none;"></div>

  </div>

        <div class="upper-left-section">
              <span class="yt-uix-button-subscription-container yt-uix-button-context-light"><span class="yt-subscription-button-disabled-mask"></span></span>
        </div>
        <div class="upper-right-section">
            <div class="header-stats">

    
    <div class="stat-entry">
        <span class="stat-value"><?php echo number_format($subcount); ?></span>
  <span class="stat-name">subscribers</span>

    </div>


      
    <div class="stat-entry">
        <span class="stat-value"><?php echo number_format($totalviews); ?></span>
  <span class="stat-name">video views</span>

    </div>

  </div>

          <span class="valign-shim"></span>
        </div>
      </div>
        <div class="channel-horizontal-menu clearfix">
            <ul role="tablist">
          

          <li role="presentation" class="selected">
    <a href="#" class="gh-tab-101" role="tab" aria-selected="true">
      Browse videos

    </a>
  </li>

  </ul>

              

        </div>
    </div>
  </div>

      </div>

      <div id="branded-page-body">
          <div class="channel-tab-content channel-layout-two-column selected channel-tab-feed-content">
    <div class="tab-content-body">
      <div class="primary-pane">
        <div class="channel-browse">
          <div class="browse-heading channels-browse-gutter-padding">
              <div id="channels-browse-header" class="clearfix">
			  
			  <div id="browse-view-options">
      <button onclick=";return false;" class="flip channels-browse-options yt-uix-button yt-uix-button-hh-text" type="button" data-button-menu-id="browse-view-options-menu" role="button" aria-pressed="false" aria-expanded="false"><span class="yt-uix-button-content">View </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20130107030743im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
        

  <div id="browse-view-options-menu" class="channel-nav-item-dropdown yt-uix-button-menu yt-uix-button-menu-external hid" style="min-width: 61px; left: 611.281px; top: 452px; display: none;">
    <ul>
              <li>
    <a href="profile?id=<?php echo $id; ?>&sort=popular" class="yt-uix-button-menu-item">
      <span class="browse-view-option-check "><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif"></span>
      Most popular
    </a>
  </li>

      <li>
    <a href="profile?id=<?php echo $id; ?>&sort=oldest" class="yt-uix-button-menu-item">
      <span class="browse-view-option-check "><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif"></span>
      Date added (oldest - newest)
    </a>
  </li>

      <li>
    <a href="profile?id=<?php echo $id; ?>&sort=newest" class="yt-uix-button-menu-item">
      <span class="browse-view-option-check"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif"></span>
      Date added (newest - oldest)
    </a>
  </li>


    </ul>
  </div></div>
      

      <ul>

    
      <li class="channels-browse-filter selected">
    <a href="#">
      Uploads
    </a>
  </li>

      



        


      


  </ul>

  </div>

              <hr class="yt-horizontal-rule channel-section-hr">

          </div>
          
    <div class="channels-browse-gutter-padding">
        
  <ul id="channels-browse-content-grid" class="channels-browse-content-grid context-data-container ">
  <?php
$videoList = json_decode(file_get_contents("https://invidious.zapashcanon.fr/api/v1/channels/".$id.'/videos?sort_by='.$sort_by)); 

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
}?>
  </ul>
  
  <script type="text/javascript">
var page = 1;
function loadMore(channel_id, sort_by) {
page++;
document.getElementById("loadMore").disabled = true;
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      if(this.responseText) {
		  document.getElementById("channels-browse-content-grid").innerHTML = document.getElementById("channels-browse-content-grid").innerHTML + this.responseText;
		  document.getElementById("loadMore").disabled = false;
	  }
    }
  }
  xmlhttp.open("GET","channel_ajax?channel_id="+channel_id+"&action_load_more_videos=1&page="+page+"&sort="+sort_by,true);
  xmlhttp.send();
}
</script>
<button id="loadMore" onclick="loadMore('<?php echo $id; ?>', '<?php echo $sort_by; ?>');" class="yt-uix-load-more load-more-button yt-uix-button yt-uix-button-hh-default" type="button" role="button"><span class="yt-uix-button-content">Load More </span></button>
  

    </div>

        </div>
      </div>
      <div class="secondary-pane">
        
        
                <div class="user-profile channel-module yt-uix-c3-module-container ">
    <div class="module-view profile-view-module" data-owner-external-id="gvZXTuGMG7DjMP_9eiWhBQ">
        <h2>
About <?php echo $author; ?>'s channel
        </h2>
      <div class="section first">
        <div class="user-profile-item profile-description">
              <?php echo $description; ?>


        </div>
          
          <hr class="yt-horizontal-rule ">

      </div>
      <div class="section created-by-section">
        <div class="user-profile-item">
by <span class="yt-user-name " dir="ltr"><?php echo $author; ?></span>
        </div>
        <ul>
          
        </ul>
      </div>
        
  <ul class="section">

  </ul>
    <hr class="yt-horizontal-rule ">


    </div>
  </div>


                <div class="channel-module other-channels yt-uix-c3-module-container other-channels-compact">
    <div class="module-view other-channels-view">
	<?php
$videoList = json_decode(file_get_contents("https://invidious.zapashcanon.fr/api/v1/channels/".$id)); 
$count = 0;
foreach($videoList->relatedChannels as $item){
	$count++;
	if($count == 1) {
		echo "<h2>Featured Channels</h2>
        <ul class='channel-summary-list '>";
	} else {
		echo "<ul class='channel-summary-list '>";
	}
	echo "<li class='yt-tile-visible yt-uix-tile'>
   <div class='channel-summary clearfix channel-summary-compact'>
      <div class='channel-summary-thumb'>
         <span class='video-thumb ux-thumb yt-thumb-square-46 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img data-thumb='".$item->authorThumbnails[0]->url."' alt='Thumbnail' src='".$item->authorThumbnails[0]->url."' width='46' data-group-key='thumb-group-0'><span class='vertical-align'></span></span></span></span>
      </div>
      <div class='channel-summary-info'>
         <h3 class='channel-summary-title'>
            <span class='qualified-channel-title' title='".$item->author."'><a href='profile?id=".$item->authorId."' dir='ltr' class='yt-uix-tile-link'>".$item->author."</a></span>
         </h3>
      </div>
   </div>
</li>";
}?>
  </ul>
    </div>
  </div>


        
      </div>
    </div>
  </div>

      </div>


      
    </div>
  </div>



      </div>