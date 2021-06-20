

<div class="branded-page-v2-container branded-page-base-bold-titles branded-page-v2-container-flex-width branded-page-v2-secondary-column-hidden">

    <div class="branded-page-v2-col-container">
      <div class="branded-page-v2-col-container-inner">
        <div class="branded-page-v2-primary-col">
          <div class="   yt-card  clearfix">
                <div class="branded-page-v2-primary-col-header-container branded-page-v2-primary-column-content">
      
    </div>
  <div class="branded-page-v2-body branded-page-v2-primary-column-content" id="">
      <div id="feed" class="">
      <div id="feed-main-what_to_watch" class="individual-feed" data-feed-name="what_to_watch" data-feed-type="main">
      
<ol id="section-list-217223" class="section-list">
<li>
<ol id="item-section-862792" class="item-section">
<?php 
	#Header("Content-Type: text/plain");

    $yt_url = "https://www.youtube.com/youtubei/v1/browse?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8";

    $json_data = '{"context":{"client":{"hl":"en","gl":"US","remoteHost":"72.211.166.57","deviceMake":"","deviceModel":"","visitorData":"CgtRUmUwTG1tRUp5WSjay52GBg%3D%3D","userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0,gzip(gfe)","clientName":"WEB","clientVersion":"1.20210519.01.00","osName":"Windows","osVersion":"10.0","originalUrl":"https://www.youtube.com/","platform":"DESKTOP","clientFormFactor":"UNKNOWN_FORM_FACTOR","timeZone":"America/Phoenix","browserName":"Firefox","browserVersion":"89.0","screenWidthPoints":1574,"screenHeightPoints":661,"screenPixelDensity":1,"screenDensityFloat":1,"utcOffsetMinutes":-420,"userInterfaceTheme":"USER_INTERFACE_THEME_LIGHT","mainAppWebInfo":{"graftUrl":"/","webDisplayMode":"WEB_DISPLAY_MODE_BROWSER","isWebNativeShareAvailable":false}},"user":{"lockedSafetyMode":false},"request":{"useSsl":true,"internalExperimentFlags":[],"consistencyTokenJars":[]},"clickTracking":{"clickTrackingParams":"CBkQsV4iEwiowZ6PqZfxAhWHRUwIHVTBCp0="},"adSignalsInfo":{"params":[{"key":"dt","value":"1623680473293"},{"key":"flash","value":"0"},{"key":"frm","value":"0"},{"key":"u_tz","value":"-420"},{"key":"u_his","value":"2"},{"key":"u_java","value":"false"},{"key":"u_h","value":"1440"},{"key":"u_w","value":"2560"},{"key":"u_ah","value":"1400"},{"key":"u_aw","value":"2560"},{"key":"u_cd","value":"24"},{"key":"u_nplug","value":"0"},{"key":"u_nmime","value":"0"},{"key":"bc","value":"31"},{"key":"bih","value":"661"},{"key":"biw","value":"1557"},{"key":"brdim","value":"609,201,609,201,2560,0,1586,1115,1574,661"},{"key":"vis","value":"1"},{"key":"wgl","value":"true"},{"key":"ca_type","value":"image"}]}},"browseId":"FEwhat_to_watch"}';

    $ch = curl_init( $yt_url );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
	
	$ytdata = json_decode($response);
	
	$shelves_list = $ytdata->contents->twoColumnBrowseResultsRenderer->tabs[0]->tabRenderer->content->sectionListRenderer->contents;
	#$shelves_list_decode = json_decode($shelves_list, true);
	$shelvesCount = count($shelves_list);
	
	for ($i = 0; $i < $shelvesCount; $i++) {
		?> <li><div class="feed-item-container browse-list-item-container yt-section-hover-container compact-shelf shelf-item branded-page-box vve-check clearfix " data-visibility-tracking="CIoBENwcGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4="><div class="feed-item-dismissable"><div class="shelf-title-table"><div class="shelf-title-row"><h2 class="branded-page-module-title shelf-title-cell"><?php
		if (isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->endpoint->browseEndpoint->canonicalBaseUrl)) {
		?><a href=<?php echo $shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->endpoint->browseEndpoint->canonicalBaseUrl; ?> class="branded-page-module-title-link yt-uix-sessionlink      spf-link " data-sessionlink="itct=CIoBENwcGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"><?php
		}
		?>
		<?php 
		if(isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->thumbnail->thumbnails[0]->url))
		{
		?>
		<div class="yt-lockup-thumbnail"><div class="yt-thumb video-thumb"><span class="yt-thumb-simple">
  <img data-ytimg="1" data-thumb="<?php echo $shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->thumbnail->thumbnails[0]->url; ?>" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" alt="" width="20" height="20">
</span></div></div>
		<?php
		}
?>
<span class="branded-page-module-title-text">
		<?php 
		if(isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->title->runs[0]->text)) {
			echo $shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->title->runs[0]->text;
		} else if(isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->title->simpleText)) {
			echo $shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->title->simpleText;
		}
		?>
		</span><?php
		if (isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->endpoint->browseEndpoint->canonicalBaseUrl)) {
		echo "</a>";
		}
		
		if(isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->titleAnnotation)) {
		?><span class="shelf-annotation shelf-title-annotation">
		<?php 
		if(isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->titleAnnotation->runs[0])) {
			echo $shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->titleAnnotation->runs[0]->text;
		} else if (isset($shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->titleAnnotation->simpleText)) {
			echo $shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->titleAnnotation->simpleText;
		}
		?></span><?php
		}
		?></h2><div class="menu-container shelf-title-cell"></div></div></div>
		<div class="compact-shelf yt-uix-shelfslider yt-uix-shelfslider-at-head"><div class="yt-uix-shelfslider-body yt-viewport"><ul class="yt-uix-shelfslider-list">
		<?php
		$video_list = $shelves_list[$i]->itemSectionRenderer->contents[0]->shelfRenderer->content->horizontalListRenderer->items;
		$videoCount = count($video_list);
		for ($o = 0; $o < $videoCount; $o++) {
		?>
		<li class="yt-shelf-grid-item yt-uix-shelfslider-item"><div class="yt-lockup yt-lockup-grid yt-lockup-video clearfix" data-context-item-id="MmWWoMcGmo0" data-visibility-tracking="CJsBEJQ1GAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh5AjbWauIzU5bIy"><div class="yt-lockup-dismissable"><div class="yt-lockup-thumbnail contains-addto"><a aria-hidden="true" href="/watch?v=<?php echo $video_list[$o]->gridVideoRenderer->navigationEndpoint->watchEndpoint->videoId; ?>" class=" yt-uix-sessionlink      spf-link " data-sessionlink="itct=CJsBEJQ1GAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4yCmctaGlnaC10cnZaD0ZFd2hhdF90b193YXRjaA"><div class="yt-thumb video-thumb"><span class="yt-thumb-simple">
  <img data-ytimg="1" data-thumb=<?php echo $video_list[$o]->gridVideoRenderer->thumbnail->thumbnails[0]->url; ?> src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" alt="" width="196" height="110">
<span class="video-time" aria-hidden="true"><?php echo $video_list[$o]->gridVideoRenderer->lengthText->simpleText; ?></span></span></div></a>  <span class="thumb-menu dark-overflow-action-menu video-actions">
    <button onclick=";return false;" type="button" aria-haspopup="true" aria-expanded="false" class="yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty"><span class="yt-uix-button-arrow yt-sprite"></span><ul class="watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid"><li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item" data-action="play-next" onclick=";return false;" data-video-ids="<?php echo $video_list[$o]->gridVideoRenderer->navigationEndpoint->watchEndpoint->videoId; ?>"><span class="addto-watch-queue-menu-text">Play next</span></li><li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item" data-action="play-now" onclick=";return false;" data-video-ids="<?php echo $video_list[$o]->gridVideoRenderer->navigationEndpoint->watchEndpoint->videoId; ?>"><span class="addto-watch-queue-menu-text">Play now</span></li></ul></button>
  </span>


  <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" onclick=";return false;" title="Watch Later" role="button" data-video-ids="MmWWoMcGmo0" data-button-menu-id="shared-addto-watch-later-login" data-tooltip-text="Watch Later" aria-labelledby="yt-uix-tooltip108-arialabel"><span class="yt-uix-button-arrow yt-sprite"></span></button>
  <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip" type="button" onclick=";return false;" title="Queue" data-video-ids="MmWWoMcGmo0" data-style="tv-queue"></button>
		</div><div class="yt-lockup-content"><h3 class="yt-lockup-title "><a href="/watch?v=<?php echo $video_list[$o]->gridVideoRenderer->navigationEndpoint->watchEndpoint->videoId; ?>" class=" yt-ui-ellipsis yt-ui-ellipsis-2 yt-uix-sessionlink      spf-link " data-sessionlink="itct=CJsBEJQ1GAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4yCmctaGlnaC10cnZaD0ZFd2hhdF90b193YXRjaA" title="<?php echo $video_list[$o]->gridVideoRenderer->title->runs[0]->text; ?>" aria-describedby="description-id-476565" dir="ltr"><?php echo $video_list[$o]->gridVideoRenderer->title->runs[0]->text; ?></a><span class="accessible-description" id="description-id-476565"> - Duration: 13:07.</span></h3><div class="yt-lockup-byline yt-ui-ellipsis yt-ui-ellipsis-2"><a href="<?php echo $video_list[$o]->gridVideoRenderer->longBylineText->runs[0]->navigationEndpoint->browseEndpoint->canonicalBaseUrl; ?>" class="g-hovercard yt-uix-sessionlink       spf-link " data-ytid="UCa6vGFO9ty8v5KZJXQxdhaw" data-sessionlink="itct=CJsBEJQ1GAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"><?php echo $video_list[$o]->gridVideoRenderer->longBylineText->runs[0]->text; ?></a>&nbsp;<?php if (isset($video_list[$o]->gridVideoRenderer->ownerBadges)) { echo '<span title="Verified" class="yt-uix-tooltip yt-channel-title-icon-verified yt-sprite" data-tooltip-text="Verified" aria-labelledby="yt-uix-tooltip109-arialabel"></span>'; } ?></div><div class="yt-lockup-meta "><ul class="yt-lockup-meta-info"><li><?php if (isset($video_list[$o]->gridVideoRenderer->viewCountText->simpleText)) { echo $video_list[$o]->gridVideoRenderer->viewCountText->simpleText; } ?></li><li><?php if (isset($video_list[$o]->gridVideoRenderer->publishedTimeText->simpleText)) { echo $video_list[$o]->gridVideoRenderer->publishedTimeText->simpleText; } ?></li></ul></div></div></div></div></li>
		<?php }
?>
</ul></div><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-shelf-slider-pager yt-uix-shelfslider-prev" type="button" onclick=";return false;"><span class="yt-uix-button-content"><span aria-label="Previous" class="yt-uix-shelfslider-prev-arrow yt-uix-tooltip yt-sprite" data-tooltip-text="Previous"></span></span></button><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-shelf-slider-pager yt-uix-shelfslider-next" type="button" onclick=";return false;"><span class="yt-uix-button-content"><span aria-label="Next" class="yt-uix-shelfslider-next-arrow yt-uix-tooltip yt-sprite" data-tooltip-text="Next" aria-labelledby="yt-uix-tooltip107-arialabel" title="Next"></span></span></button></div>
</div><div class="feed-item-dismissal-notices"></div></div></li> <?php
	}
	
	
	
    #echo $response;
    curl_close( $ch );

 ?>
</ol>
</li>














</ol>






    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default load-more-button yt-uix-load-more browse-items-load-more-button scrolldetect" type="button" onclick=";return false;" aria-label="Load more
" data-uix-load-more-target-id="section-list-217223" data-uix-load-more-href="/browse_ajax?action_continuation=1&amp;direct_render=1&amp;continuation=4qmFsgJ9Eg9GRXdoYXRfdG9fd2F0Y2gaaENBaDZTa05wYjBGQlIxWjFRVUZHVmxWM1FVSldWazFCUVZGQ1IxSllaRzlaV0ZKbVpFYzVabVF5UmpCWk1tZEJRVkZCUVVGUlJVSkJRVUZDUVVGRlVVRkNhamd4U1ZCTkxVNVVWRUZuQgA%253D&amp;target_id=section-list-217223" data-scrolldetect-offset="600" data-scrolldetect-callback="load-more-auto"><span class="yt-uix-button-content">  <span class="load-more-loading hid">
      <span class="yt-spinner">
      <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

Loading...
  </span>

  </span>
  <span class="load-more-text">
    Load more

  </span>
</span></button>

  </div>

  <div id="feed-error" class="individual-feed  hid">
    <p class="feed-message">
We were unable to complete the request, please try again later.
    </p>
  </div>

  <div id="feed-loading-template" class=" hid">
    <div class="feed-message">
        <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>

  </div>
  <div id="footer-ads">
              


  <div id="ad_creative_3" class="ad-div " style="z-index: 1">
    <div id="ad_creative_div_3"></div>
    <script>(function() {function tagMpuIframe() {var containerEl = document.getElementById('ad_creative_div_3');if (!containerEl) {return;}var iframeEl = document.createElement('iframe');var iframeSrc = "https:\/\/pubads.g.doubleclick.net\/gampad\/ads?ad_rule=0\u0026d_imp=1\u0026gdfp_req=1\u0026iu=%2F6762%2Fmkt.ythome_1x1\u0026pucrd=CgYIABAAGAA\u0026scp=dc_yt%3D1%26kga%3D-1%26kgg%3D-1%26klg%3Den%26kmyd%3Dad_creative_3%26ssl%3D1%26ytexp%3D9406125%252C9419452%252C9422596%252C9431012%252C9434289%252C9439824%252C9446054%252C9451827%252C9456628%252C9456988%252C9458117%252C9459235%252C9459986%252C9460349%252C9464267%252C9464344%252C9465797%252C9465813%252C9466199%252C9466209%252C9466423%252C9466539%252C9466669%252C9466778%252C9467709%252C9467884%252C9468235%252C9469805%252C9471263%252C9471388%252C9471502%252C9471650%252C9471677%252C9472146%252C9472879%252C9474241\u0026sz=1x1" + '&correlator=' +Math.floor(Math.random() * 10000000000000000);iframeEl.id = 'ad_creative_iframe_3';iframeEl.width = '1';iframeEl.height = '1';iframeEl.style.cssText = 'z-index:1;';iframeEl.scrolling = 'no';iframeEl.frameBorder = '0';containerEl.appendChild(iframeEl);iframeEl.src = iframeSrc;}tagMpuIframe();if (window.ytcsi) {window.ytcsi.info("yt_ad", "1", '');}})();</script>
  </div>


  </div>

  </div>

          </div>
        </div>
      </div>
    </div>
  </div>

