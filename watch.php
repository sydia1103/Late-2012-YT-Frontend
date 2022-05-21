<?php
include("./static/header.php");
$id = $_GET["v"];

// this is the main video information, such as the video url itself, video name, this is api-less.
$vidInfo = json_decode(file_get_contents("https://vid.puffyan.us/api/v1/videos/".$id)); //decode the data
include("./static/guide.php");
$video_title = str_replace("\"", "'", $vidInfo->title);
$video_author = $vidInfo->author;
$channel_id = $vidInfo->authorId;
$description = $vidInfo->descriptionHtml;
$likeCount = $vidInfo->likeCount;
$dislikeCount = $vidInfo->dislikeCount;
$viewCount = $vidInfo->viewCount;
$publishedAt = $vidInfo->publishedText;
$subcount = $vidInfo->subCountText;
$count = 0;
foreach($vidInfo->formatStreams as $formatStreams) {
  if($count < 1) {
    $video = urlencode($formatStreams->url);
  }
  $count = 0;
}
foreach($vidInfo->authorThumbnails as $authorThumbnails) {
  if($count < 1) {
    $authorProfPic = $authorThumbnails->url;
  }
  $count = 0;
}
$vidcount = 0;
$totalCount = $likeCount + $dislikeCount;
?>
<?php
$ch = curl_init("https://returnyoutubedislikeapi.com/votes?videoId=" . $Id);
curl_setopt_array($ch, [
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1
]);
$rydResponse = curl_exec($ch);
curl_close($ch);
$dislikesData = json_decode($rydResponse);
?>

<html lang="en"><head>
<script type="text/javascript" src="/static/js/analytics.js"></script>
<script type="text/javascript">archive_analytics.values.server_name="wwwb-app52.us.archive.org";archive_analytics.values.server_ms=1024;</script>
<link type="text/css" rel="stylesheet" href="/static/css/banner-styles.css"/>


<!-- Start Wayback Rewrite JS Include -->
<script type="text/javascript" src="/static/js/jwplayer/jwplayer.js" ></script>
<script type="text/javascript" src="/static/js/video-embed-rewriter.js"></script>
<script type="text/javascript">
function initYTVideo(id){
    _wmVideos_.init("http://web-old.archive.org/web/", id);
}
</script>
<!-- End Wayback Rewrite JS Include -->

      <script>
var yt = yt || {};yt.timing = yt.timing || {};yt.timing.data_ = yt.timing.data_ || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing.data_['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing.data_['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing.data_['info_args'] || {};info_args[label] = value;yt.timing.data_['info_args'] = info_args;};yt.timing.info('e', "908494,920704,912806,928001,922403,922405,929901,913605,929104,913546,913556,908493,908496,920201,913302,919009,911116,901451,902556");yt.timing.data_['wff'] = true;yt.timing.info('an', "");if (document.webkitVisibilityState == 'prerender') {document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing.data_['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing.data_['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing.data_['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    </script>

<script>var yt = yt || {};yt.preload = {};yt.preload.counter_ = 0;yt.preload.start = function(src) {var img = new Image();var counter = ++yt.preload.counter_;yt.preload[counter] = img;img.onload = img.onerror = function () {delete yt.preload[counter];};img.src = src;img = null;};yt.preload.start("http://web-old.archive.org/web/20121229102009/http://r12---sn-a5m7ln7s.c.youtube.com\/crossdomain.xml");yt.preload.start("http://web-old.archive.org/web/20121229102009/http://r12---sn-a5m7ln7s.c.youtube.com\/generate_204?ip=207.241.226.170\u0026algorithm=throttle-factor\u0026factor=1.25\u0026upn=ZXPRPVT76J4\u0026mt=1356776348\u0026fexp=908494%2C920704%2C912806%2C928001%2C922403%2C922405%2C929901%2C913605%2C929104%2C913546%2C913556%2C908493%2C908496%2C920201%2C913302%2C919009%2C911116%2C901451%2C902556\u0026itag=34\u0026key=yt1\u0026gcr=us\u0026burst=40\u0026sver=3\u0026id=a078394896111c0d\u0026expire=1356799546\u0026sparams=algorithm%2Cburst%2Ccp%2Cfactor%2Cgcr%2Cid%2Cip%2Cipbits%2Citag%2Csource%2Cupn%2Cexpire\u0026source=youtube\u0026signature=BCCB46E29DB583145C8A959BE1040962DA2472F1.3453C7E6BD4D16FBE618210B6E6C6D5177359C1F\u0026mv=m\u0026ipbits=8\u0026cp=U0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx\u0026ms=au");</script><title><?php echo $video_title; ?> - YouTube</title><link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search"><link rel="shortcut icon" href="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">     <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32"><link rel="canonical" href="/watch?v=<?php echo $id; ?>"><link rel="alternate" media="handheld" href="http://m.youtube.com/watch?v=<?php echo $id; ?>"><link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.youtube.com/watch?v=<?php echo $id; ?>"><link rel="shortlink" href="http://youtu.be/<?php echo $id; ?>">    <meta name="title" content="<?php echo $video_title; ?>">

    <meta name="description" content="http://www.facebook.com/rickroll548 http://www.reddit.com/user/Rettocs/ &quot;It&#39;s the end of the world, and we know it!&quot;">

    <meta name="keywords" content="Cotter548, Shawn, Cotter, lol, gamefaqs, CE, reddit, rettocs, no, brb, afk, lawl, pwnt, Rickroll, Rickroll&#39;d, Rick, Roll, Duckroll, Duck, rick, roll, astley,...">

    <link rel="alternate" type="application/json+oembed" href="http://www.youtube.com/oembed?format=json&amp;url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D<?php echo $id; ?>" title="<?php echo $video_title; ?>">
  <link rel="alternate" type="text/xml+oembed" href="http://www.youtube.com/oembed?format=xml&amp;url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D<?php echo $id; ?>" title="<?php echo $video_title; ?>">

      <meta property="og:url" content="http://www.youtube.com/watch?v=<?php echo $id; ?>">
    <meta property="og:title" content="<?php echo $video_title; ?>">
    <meta property="og:description" content="http://www.facebook.com/rickroll548 http://www.reddit.com/user/Rettocs/ &quot;It&#39;s the end of the world, and we know it!&quot;">
    <meta property="og:type" content="video">
    <meta property="og:image" content="http://i4.ytimg.com/vi/<?php echo $id; ?>/mqdefault.jpg">
      <meta property="og:video" content="http://www.youtube.com/v/<?php echo $id; ?>?autohide=1&amp;version=3">
      <meta property="og:video:type" content="application/x-shockwave-flash">
      <meta property="og:video:width" content="480">
      <meta property="og:video:height" content="360">
    <meta property="og:site_name" content="YouTube">
    <meta property="fb:app_id" content="87741124305">
    <meta name="twitter:card" value="player">
    <meta name="twitter:site" value="@youtube">
      <meta name="twitter:player" value="https://www.youtube.com/embed/<?php echo $id; ?>">
      <meta property="twitter:player:width" content="480">
      <meta property="twitter:player:height" content="360">

  
  <link id="css-2783428260" rel="stylesheet" href="./2012l_asset/www-hitchhiker-vfl_sDVM_.css">
    <script>
if (window.yt.timing) {yt.timing.tick("ct");}    </script>
<style></style></head>
<div id="content" >  <div id="watch7-container" class="  transition-content  " itemscope itemid="" itemtype="http://schema.org/VideoObject">
        <link itemprop="url" href="http://www.youtube.com/watch?v=<?php echo $id; ?>">
    <meta itemprop="name" content="<?php echo $video_title; ?>">
    <meta itemprop="description" content="http://www.facebook.com/rickroll548 http://www.reddit.com/user/Rettocs/ &quot;It&#39;s the end of the world, and we know it!&quot;">
    <meta itemprop="duration" content="PT3M32S">
    <meta itemprop="unlisted" content="False">
    <meta itemprop="paid" content="False">
      <span itemprop="author" itemscope itemtype="http://schema.org/Person">
        <link itemprop="url" href="http://www.youtube.com/user/<?php echo $video_author; ?>">
      </span>
    <link itemprop="thumbnailUrl" href="http://i4.ytimg.com/vi/<?php echo $id; ?>/hqdefault.jpg">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="http://i4.ytimg.com/vi/<?php echo $id; ?>/mqdefault.jpg">
      <meta itemprop="width" content="320">
      <meta itemprop="height" content="180">
    </span>
      <link itemprop="embedURL" href="http://www.youtube.com/v/<?php echo $id; ?>?autohide=1&amp;version=3">
      <meta itemprop="playerType" content="Flash">
      <meta itemprop="width" content="480">
      <meta itemprop="height" content="360">
      <meta itemprop="isFamilyFriendly" content="True">
      <meta itemprop="regionsAllowed" content="AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GD,GE,GF,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IN,IO,IQ,IR,IS,IT,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW">




    <div id="watch7-video-container">
      <div id="watch7-video">
            <script>
if (window.yt.timing) {yt.timing.tick("bf");}    </script>

            <div id="watch7-player" class="flash-player"></div>
    <script>
      (function() {
        var swf = "      \u003cembed type=\"application\/x-shockwave-flash\"     s\u0072c=\"http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/watch_as3_hh-vfleHfpd4.swf\"     id=\"movie_player\"    flashvars=\"fexp=908494%2C920704%2C912806%2C928001%2C922403%2C922405%2C929901%2C913605%2C929104%2C913546%2C913556%2C908493%2C908496%2C920201%2C913302%2C919009%2C911116%2C901451%2C902556\u0026amp;sw=1.0\u0026amp;url_encoded_fmt_stream_map=itag%3D43%26type%3Dvideo%252Fwebm%253B%2Bcodecs%253D%2522vp8.0%252C%2Bvorbis%2522%26url%3D<?php echo $video; ?>ip%253D207.241.226.170%2526key%253Dyt1%2526upn%253DZXPRPVT76J4%2526ratebypass%253Dyes%2526itag%253D43%2526gcr%253Dus%2526source%253Dyoutube%2526sver%253D3%2526id%253Da078394896111c0d%2526cp%253DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%2526expire%253D1356799546%2526mt%253D1356776348%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526mv%253Dm%2526ipbits%253D8%2526fexp%253D908494%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908493%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526ms%253Dau%26fallback_host%3Dtc.v3.cache4.c.youtube.com%26sig%3D61A746B85E43029717C5205D6FB25D5023F24BFC.D133836BA0A200CA353DADD6B64B64F1AA4BCD58%26quality%3Dmedium%2Citag%3D34%26type%3Dvideo%252Fx-flv%26url%3D<?php echo $video; ?>ip%253D207.241.226.170%2526algorithm%253Dthrottle-factor%2526factor%253D1.25%2526upn%253DZXPRPVT76J4%2526itag%253D34%2526fexp%253D908494%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908493%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526key%253Dyt1%2526gcr%253Dus%2526burst%253D40%2526sver%253D3%2526id%253Da078394896111c0d%2526cp%253DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%2526expire%253D1356799546%2526mt%253D1356776348%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526mv%253Dm%2526ipbits%253D8%2526source%253Dyoutube%2526ms%253Dau%26fallback_host%3Dtc.v18.cache1.c.youtube.com%26sig%3DBCCB46E29DB583145C8A959BE1040962DA2472F1.3453C7E6BD4D16FBE618210B6E6C6D5177359C1F%26quality%3Dmedium%2Citag%3D18%26type%3Dvideo%252Fmp4%253B%2Bcodecs%253D%2522avc1.42001E%252C%2Bmp4a.40.2%2522%26url%3D<?php echo $video; ?>ip%253D207.241.226.170%2526key%253Dyt1%2526upn%253DZXPRPVT76J4%2526ratebypass%253Dyes%2526itag%253D18%2526gcr%253Dus%2526source%253Dyoutube%2526sver%253D3%2526id%253Da078394896111c0d%2526cp%253DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%2526expire%253D1356799546%2526mt%253D1356776348%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526mv%253Dm%2526ipbits%253D8%2526fexp%253D908494%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908493%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526ms%253Dau%26fallback_host%3Dtc.v5.cache6.c.youtube.com%26sig%3D95A04E234CB166BBA70AE2ADE02E2873DF94A377.15D3F7504443500D812636C69A371CB185758493%26quality%3Dmedium%2Citag%3D5%26type%3Dvideo%252Fx-flv%26url%3D<?php echo $video; ?>ip%253D207.241.226.170%2526algorithm%253Dthrottle-factor%2526factor%253D1.25%2526upn%253DZXPRPVT76J4%2526itag%253D5%2526fexp%253D908494%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908493%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526key%253Dyt1%2526gcr%253Dus%2526burst%253D40%2526sver%253D3%2526id%253Da078394896111c0d%2526cp%253DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%2526expire%253D1356799546%2526mt%253D1356776348%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526mv%253Dm%2526ipbits%253D8%2526source%253Dyoutube%2526ms%253Dau%26fallback_host%3Dtc.v19.cache4.c.youtube.com%26sig%3D7648F02108703F2A035C6E82F7DD002AA968AD72.1A58AF0ACBA222784AFCFCEA10E190DD45036925%26quality%3Dsmall%2Citag%3D36%26type%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522%26url%3D<?php echo $video; ?>ip%253D207.241.226.170%2526algorithm%253Dthrottle-factor%2526factor%253D1.25%2526upn%253DZXPRPVT76J4%2526itag%253D36%2526fexp%253D908494%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908493%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526key%253Dyt1%2526gcr%253Dus%2526burst%253D40%2526sver%253D3%2526id%253Da078394896111c0d%2526cp%253DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%2526expire%253D1356799546%2526mt%253D1356776348%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526mv%253Dm%2526ipbits%253D8%2526source%253Dyoutube%2526ms%253Dau%26fallback_host%3Dtc.v4.cache8.c.youtube.com%26sig%3D0873EEC57E16DB2009AD4B4BAA78559241954BFB.A936A6B59ED86EB2F96EFF9B1D91F8228948A648%26quality%3Dsmall%2Citag%3D17%26type%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522%26url%3D<?php echo $video; ?>ip%253D207.241.226.170%2526algorithm%253Dthrottle-factor%2526factor%253D1.25%2526upn%253DZXPRPVT76J4%2526itag%253D17%2526fexp%253D908494%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908493%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526key%253Dyt1%2526gcr%253Dus%2526burst%253D40%2526sver%253D3%2526id%253Da078394896111c0d%2526cp%253DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%2526expire%253D1356799546%2526mt%253D1356776348%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526mv%253Dm%2526ipbits%253D8%2526source%253Dyoutube%2526ms%253Dau%26fallback_host%3Dtc.v9.cache5.c.youtube.com%26sig%3D7479F10AD37B5C4301DEDCCBF017939381ED78A5.606A359548236DE03E778296041BC52BF513590D%26quality%3Dsmall\u0026amp;iv3_module=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fswfbin%2Fiv3_module-vfl_nqa5q.swf\u0026amp;iv_queue_log_level=0\u0026amp;sdetail=p%3A%2Fembed%2F<?php echo $id; ?>\u0026amp;allow_embed=1\u0026amp;timestamp=1356776409\u0026amp;sourceid=y\u0026amp;autohide=2\u0026amp;fmt_list=43%2F320x240%2F99%2F0%2F0%2C34%2F320x240%2F9%2F0%2F115%2C18%2F320x240%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0%2C36%2F320x240%2F99%2F0%2F0%2C17%2F176x144%2F99%2F0%2F0\u0026amp;st_module=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fswfbin%2Fst_module-vflrZq5S5.swf\u0026amp;hl=en_US\u0026amp;title=RickRoll%27D\u0026amp;is_html5_mobile_device=False\u0026amp;tk=1tc64BEZyTSqm6QCDit94yZDAkecd0nShJ24abhRydhB4ICSSIzCRQ%3D%3D\u0026amp;iv_close_button=0\u0026amp;tmi=1\u0026amp;rvs=title%3D%25E4%25BB%258A%25E6%2597%25A5lollololololo%25EF%25BC%259A%25E7%2594%25B7%25E4%25BA%25BA%25E5%25A6%2582%25E8%25A1%25A3%25E6%259C%258D%2528ft.%25E5%2590%25B3%25E8%258B%25A5%25E5%25B8%258C%2529%26view_count%3D562%252C175%26author%3Dmingjai14%26length_seconds%3D282%26feature_type%3Dfvwp%26id%3DpetKDNDB3DI%26featured%3D1%2Ctitle%3DTop%2B10%2BMinecraft%2Bsongs%26length_seconds%3D2100%26author%3Dmikeyx3000%26id%3DHRkHvaLjT24%26view_count%3D3%252C319%252C560%2Ctitle%3DChuck%2BNorris%2Bhears%2Bhis%2Bown%2Bfacts...%26length_seconds%3D197%26author%3Dlilsportsplaya69%26id%3DWYLvdLWkhk8%26view_count%3D3%252C793%252C579%2Ctitle%3DMulan-A%2Bgirl%2Bworth%2Bfighting%2Bfor%26length_seconds%3D131%26author%3Dgaladriel555%26id%3DHiqmZLOaD8o%26view_count%3D7%252C023%252C576%2Ctitle%3DFunny%2BFamily%2BGuy%2BMoments%26length_seconds%3D243%26author%3DCrAnkyJester%26id%3DfcxsfN4jSV8%26view_count%3D4%252C015%252C616%2Ctitle%3D100%2BGreatest%2BInternet%2BVideos%2BIn%2B3%2BMinutes%26length_seconds%3D204%26author%3Dayazkhatrier%26id%3Dr6VCnYkNYLo%26view_count%3D10%252C549%252C435%2Ctitle%3DDramatic%2BLook%26length_seconds%3D5%26author%3Dmagnets99%26id%3Dy8Kyi0WNg40%26view_count%3D36%252C605%252C248%2Ctitle%3DLuffy%2B-%2Bthe%2Bonly%2Bpirate%2Bking%2521%26length_seconds%3D95%26author%3DLostInAniime%26id%3Db8K0y2PNncw%26view_count%3D833%252C628%2Ctitle%3DMadonna%2B-%2B4%2BMinutes%26length_seconds%3D246%26author%3Dwarnerbrosrecords%26id%3DaAQZPBwz2CI%26view_count%3D12%252C601%252C101%2Ctitle%3DPulseFire%2BEzreal%26length_seconds%3D32%26author%3DHiTruefitt%26id%3DWvlrDXxW504%26view_count%3D1%252C041%252C857%2Ctitle%3DFree%2BFight%253A%2BFrank%2BMir%2Bvs%2BMinotauro%2BNogueira%26length_seconds%3D1330%26author%3DFrank%2BMir%26id%3Drr0bA28m4-c%26view_count%3D560%252C099%2Ctitle%3DRicky%2BGervais%2Bon%2BAtheism%26length_seconds%3D135%26author%3Ddohboy3000%26id%3DI8gsIuEvEs0%26view_count%3D1%252C930%252C041\u0026amp;video_id=<?php echo $id; ?>\u0026amp;t=vjVQa1PpcFPhWgX1t4WlXiO8xFL1sZka3SBKKHCoXSo%3D\u0026amp;enablecsi=1\u0026amp;pltype=contentugc\u0026amp;referrer=http%3A%2F%2Fwww.youtube.com%2Fembed%2F<?php echo $id; ?>%3Frel%3D0%26wmode%3Dopaque\u0026amp;plid=AATR-x_xO21MpC6k\u0026amp;oid=YbGWGCIUCoaUePqGy_acMw\u0026amp;ptk=youtube_multi\u0026amp;csi_page_type=watch7\u0026amp;iv_logging_level=4\u0026amp;no_get_video_log=1\u0026amp;watermark=%2Chttp%3A%2F%2Fs.ytimg.com%2Fyts%2Fimg%2Fwatermark%2Fyoutube_watermark-vflHX6b6E.png%2Chttp%3A%2F%2Fs.ytimg.com%2Fyts%2Fimg%2Fwatermark%2Fyoutube_hd_watermark-vflAzLcD6.png\u0026amp;loudness=-23.6900005341\u0026amp;keywords=Cotter548%2CShawn%2CCotter%2Clol%2Cgamefaqs%2CCE%2Creddit%2Crettocs%2Cno%2Cbrb%2Cafk%2Clawl%2Cpwnt%2CRickroll%2CRickroll%27d%2CRick%2CRoll%2CDuckroll%2CDuck%2Crick%2Croll%2Castley%2Cnever%2Cgonna%2Cgive%2Cyou%2Cup%2Clet%2Cdown%2Crun%2Caround%2Cand%2Churt\u0026amp;showpopout=1\u0026amp;vq=auto\u0026amp;account_playback_token=\u0026amp;advideo=1\u0026amp;length_seconds=212\u0026amp;iv_module=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fswfbin%2Fiv_module-vflBA53yv.swf\u0026amp;iv_read_url=.%2Fannotations_invideo%3Fvideo_id%3D<?php echo $id; ?>%26expire%3D1356820200%26sparams%3Dexpire%252Cvideo_id%26signature%3D3F56493BABA3EB26959545232E26AE3DE3F84625.3EC9A98CEA718C4F46FF296A751A0A81EDEDBD82%26key%3Da1\u0026amp;enablejsapi=1\u0026amp;iv_load_policy=1\u0026amp;endscreen_module=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fswfbin%2Fendscreen-vflW8uRdM.swf\u0026amp;storyboard_spec=\u0026amp;cr=US\u0026amp;sk=DyX2wsym78EuL6hvHnt3bYmCh7X-RqSwC\"     allowscriptaccess=\"always\" allowfullscreen=\"true\" bgcolor=\"#000000\"\u003e\n  \u003cnoembed\u003e\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http://web-old.archive.org/web/20121229102009/http://get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e\u003c\/noembed\u003e\n\n";
        document.getElementById('watch7-player').innerHTML = swf;
      })();
    </script>

        
      </div>
    </div>

    <div id="watch7-main-container">
      <div id="watch7-main" class="clearfix">
        <div id="watch7-content">
            <div class="yt-uix-button-panel">
      <div id="watch7-headline" class="clearfix  yt-uix-expander yt-uix-expander-collapsed">
    <h1 id="watch-headline-title">
      

  


  <span  class=" yt-uix-expander-head" dir="ltr" title="<?php echo $video_title; ?>">
    <?php echo $video_title; ?>
  </span>

    </h1>
  </div>

    <div id="watch7-user-header" ><a href="profile?id=<?php echo $channel_id; ?>?feature=watch" class="yt-user-photo " ><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img alt="<?php echo $video_author; ?>" src="<?php echo $authorProfPic; ?>" width="48" ><span class="vertical-align"></span></span></span></span></a><a href="profile?id=<?php echo $channel_id; ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D&amp;feature=watch" dir="ltr"><?php echo $video_author; ?></a><span class="yt-user-separator">&middot;</span><a class="yt-uix-sessionlink yt-user-videos"href="http://web-old.archive.org/web/20121229102009/http://www.youtube.com/user/<?php echo $video_author; ?>/videos"data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D&amp;feature=watch"></a><br><span class="yt-uix-button-subscription-container yt-uix-button-context-light"><button onclick=";window.location.href=this.getAttribute('href');return false;" href="https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26continue_action%3DdNiOcmmcmMnPg7M4tdtC04V8gaXKr1zKeX38_IaMJ8Ddh7tY7cauHSQhQPtlLaokuJUfH6Lyt89INNmQGWoITgcDoCZvE28mdempoXg_Phs=%26feature%3Dsubscribe%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3" class="yt-subscription-button yt-subscription-button-js-default None  yt-uix-button yt-uix-button-subscribe-branded" type="button" data-subscription-button-type="branded" data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D&amp;feature=watch" data-subscription-value="UCxnNQpMtVrZRZh3aOkmnK4w" data-subscription-type="" data-subscription-feature="watch" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-subscribe-branded" src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content">  <span class="subscribe-hh-label">Subscribe</span>
  <span class="subscribed-hh-label">Subscribed</span>
  <span class="unsubscribe-hh-label">Unsubscribe</span>
 </span></button><span class="yt-subscription-button-subscriber-count-branded-horizontal"><?php echo $subcount; ?></span><span class="yt-subscription-button-disabled-mask"></span></span><div id="watch7-views-info">  <span class="watch-view-count">
      <?php echo number_format($viewCount); ?>
  </span>
    <div class="video-extras-sparkbars">
    <div class="video-extras-sparkbar-likes" style="width: <?php echo get_percentage($totalCount, $likeCount); ?>%"></div>
    <div class="video-extras-sparkbar-dislikes" style="width: <?php echo get_percentage($totalCount, $dislikeCount); ?>%"></div>
  </div>
  <span class="video-extras-likes-dislikes">
      <img class="icon-watch-stats-like" src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Like"> <?php echo number_format($likeCount); ?>
 &nbsp;&nbsp;&nbsp;   <img class="icon-watch-stats-dislike" src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Dislike"> DISLIKE

  </span>

</div></div>
      <div id="watch7-action-buttons" class="clearfix">
    <div id="watch7-sentiment-actions">
      <span id="watch-like-dislike-buttons" class="yt-uix-button-group " data-vote-state="2" data-button-toggle-group="optional"><span class="yt-uix-clickcard"><button title="" onclick=";return false;" id="watch-like" class="yt-uix-clickcard-target yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" type="button" data-position="bottomright" data-like-tooltip="I like this" data-button-toggle="true" data-unlike-tooltip="Unlike" data-orientation="vertical" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content">Like </span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to like <span class="yt-user-name " dir="ltr"><?php echo $video_author; ?></span>'s video.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="I dislike this" onclick=";return false;" id="watch-dislike" class="yt-uix-clickcard-target yt-uix-button yt-uix-button-hh-text yt-uix-tooltip yt-uix-button-empty" type="button" data-position="bottomright" data-button-toggle="true" data-orientation="vertical" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-dislike" src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="I dislike this"><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to dislike <span class="yt-user-name " dir="ltr"><?php echo $video_author; ?></span>'s video.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
    </div>
    <div id="watch7-secondary-actions"  class="yt-uix-button-group" data-button-toggle-group="required">
        <span >
    <button title="" onclick=";return false;" type="button" class="action-panel-trigger  yt-uix-button-toggled yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" data-button-toggle="true" data-trigger-for="action-panel-details" role="button"><span class="yt-uix-button-content">About </span></button>
  </span>

        <span >
    <button title="" onclick=";return false;" type="button" class="action-panel-trigger   yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" data-button-toggle="true" data-trigger-for="action-panel-share" role="button"><span class="yt-uix-button-content">Share </span></button>
  </span>

          <span class="yt-uix-clickcard">
    <button title="" onclick=";return false;" type="button" class="action-panel-trigger   yt-uix-clickcard-target yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" data-position="bottomleft" data-button-toggle="true" data-upsell="playlist" data-orientation="vertical" data-trigger-for="action-panel-none" role="button"><span class="yt-uix-button-content">Add to </span></button>
        <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to add <span class="yt-user-name " dir="ltr"><?php echo $video_author; ?></span>'s video to your playlist.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>

  </span>

        <span >
    <button title="Statistics" onclick=";return false;" type="button" class="action-panel-trigger   yt-uix-button yt-uix-button-hh-text yt-uix-tooltip yt-uix-button-empty" data-button-toggle="true" data-trigger-for="action-panel-stats" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-action-panel-stats" src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Statistics"><span class="yt-uix-button-valign"></span></span></button>
  </span>

        <span >
    <button title="Report" onclick=";return false;" type="button" class="action-panel-trigger   yt-uix-button yt-uix-button-hh-text yt-uix-tooltip yt-uix-button-empty" data-button-toggle="true" data-trigger-for="action-panel-report" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-action-panel-report" src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Report"><span class="yt-uix-button-valign"></span></span></button>
  </span>

    </div>
  </div>

      <div id="watch7-action-panels" class="yt-uix-button-panel">
      <div id="action-panel-details" class="action-panel-content">
    <div id="watch-description" class="yt-uix-expander yt-uix-expander-collapsed yt-uix-button-panel" data-expander-action="yt.www.watch7.handleDescriptionToggle">
      <div id="watch-description-content" >
        <div id="watch-description-clip">
          <p id="watch-uploader-info">
            <strong>Uploaded <span id="eow-date" class="watch-video-date" ><?php echo $publishedAt; ?></span>
</strong>
          </p>
          <div id="watch-description-text">
            <p id="eow-description" >
      <?php echo nl2br($description); ?>
      </p>
          </div>
            <div id="watch-description-extras">
    <ul class="watch-extras-section">
      <li>
        <h4 class="title">
Category
        </h4>
        <div class="content">
              <p id="eow-category"><a href="http://web-old.archive.org/web/20121229102009/http://www.youtube.com/music">Music</a></p>

        </div>
      </li>


        <li>
          <h4 class="title">License</h4>
          <div class="content">
              <p id="eow-reuse">
Standard YouTube License
  </p>

          </li>
        </li>
    </ul>
  </div>

        </div>
        <ul id="watch-description-extra-info">
          
        </ul>
      </div>

      <div id="watch-description-toggle" class="yt-uix-expander-head yt-uix-button-panel">
        <div id="watch-description-expand" class="expand">
          <button onclick=";return false;" type="button" class="metadata-inline yt-uix-button yt-uix-button-hh-text"  role="button"><span class="yt-uix-button-content">Show more </span></button>
        </div>
        <div id="watch-description-collapse" class="collapse">
          <button onclick=";return false;" type="button" class="metadata-inline yt-uix-button yt-uix-button-hh-text"  role="button"><span class="yt-uix-button-content">Show less </span></button>
        </div>
      </div>
    </div>
  </div>

      <div id="action-panel-share" class="action-panel-content hid">
      <div id="watch-actions-share-loading">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>
  <div id="watch-actions-share-panel"></div>

  </div>

      <div id="action-panel-addto" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>

      <div id="action-panel-stats" class="action-panel-content hid">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>

      <div id="action-panel-report" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>

      <div id="action-panel-login" class="action-panel-content hid">
    <div class="action-panel-login">
      <a href="http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-default" data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
      <a href="http://web-old.archive.org/web/20121229102009/http://www.youtube.com/signup?next=%2Fwatch%3Fv%3D<?php echo $id; ?>" class="yt-uix-button-alert-link">Sign up</a>
    </div>
  </div>

  <div id="action-panel-ratings-disabled" class="action-panel-content hid">
      <div id="watch-actions-ratings-disabled" class="watch-actions-panel hid">
    <em>Ratings have been disabled for this video.</em>
  </div>

  </div>

  <div id="action-panel-rental-required" class="action-panel-content hid">
      <div id="watch-actions-rental-required" class="watch-actions-panel hid">
    <strong>Rating is available when the video has been rented.</strong>
  </div>

  </div>

  <div id="action-panel-error" class="action-panel-content hid">
    <div class="action-panel-error">
      This feature is not available right now. Please try again later.
    </div>
  </div>

    <div id="watch7-action-panel-footer">
        <hr class="yt-horizontal-rule ">

    </div>
  </div>

  </div>
    <div id="watch7-discussion">

        
        <div id="comments-view" data-type="highlights" class="">

          <div class="comments-section" >
      <h4>
        <a class="comments-section-see-all" href="http://web-old.archive.org/web/20121229102009/http://www.youtube.com/all_comments?v=<?php echo $id; ?>">
              <strong>All Comments</strong>

        </a>
  </h4>


        <div class="comments-post-container clearfix">
        <div class="comments-post-alert">
          <a href="http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dcomments%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3">Sign in</a> <span class="comments-post-form-rollover-text">now to post a comment!</span>

        </div>
    </div>


        <ul class="comment-list" >
      


  <?php
  ob_start();
      $commentList = json_decode(file_get_contents('https://vid.puffyan.us/api/v1/comments/'.$id));

      foreach($commentList->comments as $item) {
    if(!isset($item->authorThumbnails[0]->url)) {
      $profpic = "http://fulptube.rocks/dynamic/pfp/default.png";
    } else {
      $profpic = $item->authorThumbnails[0]->url;
    }
        echo "<li class='clearfix comment'
   data-author-id='HTKJiRMV0hk9PY0Wv3aepA'
   data-id='h9CSjLt9ZEIT-zAOha0TluW8PrpNyT9KPC0w84grC1w'
   >
   <button onclick=';return false;' type='button' class='flip close yt-uix-button yt-uix-button-link yt-uix-button-empty' data-button-has-sibling-menu='true' role='button' aria-pressed='false' aria-expanded='false' aria-haspopup='true' aria-activedescendant=''>
      <span class='yt-uix-button-icon-wrapper'><img class='yt-uix-button-icon yt-uix-button-icon-comment-close' src='http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt=''><span class='yt-uix-button-valign'></span></span><img class='yt-uix-button-arrow' src='http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt=''>
      <div class=' yt-uix-button-menu yt-uix-button-menu-link' style='display: none;'>
         <ul>
            <li class='comment-action-remove comment-action' data-action='remove'><span class='yt-uix-button-menu-item'>Remove</span></li>
            <li class='comment-action' data-action='flag-profile-pic'><span class='yt-uix-button-menu-item'>Report profile image</span></li>
            <li class='comment-action' data-action='flag'><span class='yt-uix-button-menu-item'>Flag for spam</span></li>
            <li class='comment-action-block comment-action' data-action='block'><span class='yt-uix-button-menu-item'>Block User</span></li>
            <li class='comment-action-unblock comment-action' data-action='unblock'><span class='yt-uix-button-menu-item'>Unblock User</span></li>
         </ul>
      </div>
   </button>
   <a href='profile?id=".$item->authorId."' class='yt-user-photo ' ><span class='video-thumb ux-thumb yt-thumb-square-48 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='RyanDo2000' data-thumb='".$profpic."' src='".$profpic."' width='48' ><span class='vertical-align'></span></span></span></span></a>
   <div class='comment-body'>
      <div class='content-container'>
         <div class='content'>
            <p class='metadata'>
               <span class='author '>
               <a href='profile?id=".$item->authorId."' class='yt-uix-sessionlink yt-user-name ' data-sessionlink='ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D' dir='ltr'>".$item->author."</a>
               </span>
               <span class='time' dir='ltr'>
               <a dir='ltr' href='#'>
               ".$item->publishedText."
               </a>
               </span>
            </p>
            <div class='comment-text' dir='ltr'>
               <p>".$item->contentHtml."</p>
            </div>
         </div>
         <div class='comment-actions'>
            <button onclick=';return false;' type='button' class='start comment-action yt-uix-button yt-uix-button-link' data-action='reply' role='button'><span class='yt-uix-button-content'>Reply </span></button>
            <span class='separator'>&middot;</span><span class='comments-rating-positive'>".number_format($item->likeCount)."</span>
            <span class='yt-uix-button-group'>
               <span class='yt-uix-clickcard'>
                  <button title='' onclick=';return false;' type='button' class='start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty' data-tooltip-show-delay='300' data-action='' role='button'><span class='yt-uix-button-icon-wrapper'><img class='yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up' src='http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt=''><span class='yt-uix-button-valign'></span></span></button>  
                  <div class='watch7-hovercard yt-uix-clickcard-content'>
                     <h3 class='watch7-hovercard-header'>Sign in to YouTube</h3>
                     <div class='watch7-hovercard-message'>
                        Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class='yt-user-name ' dir='ltr'>this</span>'s comment.
                     </div>
                     <ul class='watch7-hovercard-icon-strip clearfix'>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-youtube-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-gplus-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-gmail-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-picasa-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-chrome-icon'></div>
                        </li>
                     </ul>
                     <div class='watch7-hovercard-account-line'>
                        <a href='http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3' class='yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary' data-sessionlink='ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D'><span class='yt-uix-button-content'>Sign in</span></a>
                     </div>
                  </div>
               </span>
               <span class='yt-uix-clickcard'>
                  <button title='' onclick=';return false;' type='button' class='end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty' data-tooltip-show-delay='300' data-action='' role='button'><span class='yt-uix-button-icon-wrapper'><img class='yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down' src='http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt=''><span class='yt-uix-button-valign'></span></span></button>  
                  <div class='watch7-hovercard yt-uix-clickcard-content'>
                     <h3 class='watch7-hovercard-header'>Sign in to YouTube</h3>
                     <div class='watch7-hovercard-message'>
                        Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class='yt-user-name ' dir='ltr'>this</span> comment.
                     </div>
                     <ul class='watch7-hovercard-icon-strip clearfix'>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-youtube-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-gplus-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-gmail-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-picasa-icon'></div>
                        </li>
                        <li class='watch7-hovercard-icon'>
                           <div class='watch7-hovercard-chrome-icon'></div>
                        </li>
                     </ul>
                     <div class='watch7-hovercard-account-line'>
                        <a href='http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3' class='yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary' data-sessionlink='ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D'><span class='yt-uix-button-content'>Sign in</span></a>
                     </div>
                  </div>
               </span>
            </span>
         </div>
      </div>
   </div>
</li>";
}
if(file_get_contents('https://vid.puffyan.us/api/v1/comments/'.$id) == null) {
  ob_end_clean();
  echo "Comments are unavailable.";
}?>

  </ul>

  </div>




          <div class="comments-section">
      <div class="comments-pagination" data-ajax-enabled="true">
          

    <div class="yt-uix-pager" role="navigation">

        
<a href="http://web-old.archive.org/web/20121229102009/http://www.youtube.com/all_comments?v=<?php echo $id; ?>&amp;page=2" class="yt-uix-button  yt-uix-pager-button yt-uix-pager-show-more yt-uix-sessionlink yt-uix-button-hh-default" data-sessionlink="ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D" data-page="2"><span class="yt-uix-button-content">Show more</span></a>
    </div>

      </div>
  </div>



      <ul>
    <li class="hid" id="parent-comment-loading"> Loading comment...</li>
  </ul>

    <div id="comments-loading" class="hid">Loading...</div>
  </div>


  </div>


        </div>
        <div id="watch7-sidebar">
          



      
  <div class="watch-sidebar-section">
    <div class="watch-sidebar-body">
      <ul id="watch-related" class="video-list">
<?php
$count = 0;
$videoList = json_decode(file_get_contents("https://vid.puffyan.us/api/v1/videos/".$id)); 
      
foreach($videoList->recommendedVideos as $recom){
//Embed video
if($count < 22) {
        echo "<li class='video-list-item'>
            <a href='watch?v=".$recom->videoId."' class='related-video yt-uix-contextlink  related-video-featured hid yt-uix-sessionlink' data-sessionlink='ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D&amp;feature=fvwrel&amp;ved=CAMQzRooAA%3D%3D'><span class='ux-thumb-wrap contains-addto '><span class='video-thumb ux-thumb yt-thumb-default-120 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='".$recom->title."' data-thumb='https://i.ytimg.com/vi/".$recom->videoId."/default.jpg' src='https://i.ytimg.com/vi/".$recom->videoId."/default.jpg' width='120' ><span class='vertical-align'></span></span></span></span>
  <button title='Watch Later' onclick=';return false;' class='addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip' type='button' data-video-ids='petKDNDB3DI' data-button-menu-id='shared-addto-watch-later-login' role='button'><span class='yt-uix-button-content'>  <img src='http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt='Watch Later'>
 </span><img class='yt-uix-button-arrow' src='http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt=''></button>
</span><span dir='ltr' class='title' title='".$recom->title."'>".$recom->title."</span><span class='stat attribution'>by <span class='yt-user-name ' dir='ltr'>".$recom->author."</span></span><span class='stat alt badge'></span><span class='stat view-count'></span></a>
          </li>";
      $nextVideoId = $recom->videoId;
}
}

$count = 0;
$videoList = json_decode(file_get_contents("https://vid.puffyan.us/api/v1/videos/".$nextVideoId)); 
      
foreach($videoList->recommendedVideos as $recom){
//Embed video
if($count < 22) {
        echo "<li class='video-list-item'>
            <a href='watch?v=".$recom->videoId."' class='related-video yt-uix-contextlink  related-video-featured hid yt-uix-sessionlink' data-sessionlink='ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D&amp;feature=fvwrel&amp;ved=CAMQzRooAA%3D%3D'><span class='ux-thumb-wrap contains-addto '><span class='video-thumb ux-thumb yt-thumb-default-120 '><span class='yt-thumb-clip'><span class='yt-thumb-clip-inner'><img alt='".$recom->title."' data-thumb='https://i.ytimg.com/vi/".$recom->videoId."/default.jpg' src='https://i.ytimg.com/vi/".$recom->videoId."/default.jpg' width='120' ><span class='vertical-align'></span></span></span></span>
  <button title='Watch Later' onclick=';return false;' class='addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip' type='button' data-video-ids='petKDNDB3DI' data-button-menu-id='shared-addto-watch-later-login' role='button'><span class='yt-uix-button-content'>  <img src='http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt='Watch Later'>
 </span><img class='yt-uix-button-arrow' src='http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif' alt=''></button>
</span><span dir='ltr' class='title' title='".$recom->title."'>".$recom->title."</span><span class='stat attribution'>by <span class='yt-user-name ' dir='ltr'>".$recom->author."</span></span><span class='stat alt badge'></span><span class='stat view-count'></span></a>
          </li>";
}
}?>
      </ul>
        <ul id="watch-more-related" class="video-list hid">
          <li id="watch-more-related-loading">
Loading more suggestions...
          </li>
        </ul>
    </div>       <div class="watch-sidebar-foot">
        <button onclick=";return false;" id="watch-more-related-button" type="button" class=" yt-uix-button yt-uix-button-hh-default" data-button-action="yt.www.watch7.handleLoadMoreRelated" role="button"><span class="yt-uix-button-content">Load more suggestions </span></button>
      </div>
  </div> 

        </div>
      </div>
    </div>

      <div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;">

  </div>

  </div>
</div></div></div></div>

      <div class="yt-dialog hid" id="feed-privacy-lb">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg">
        <div class="yt-dialog-fg-content">
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
    <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Loading...</div>
  </div>

          </div>
          <div class="yt-dialog-content">
              <div id="feed-privacy-dialog">
  </div>

          </div>
          <div class="yt-dialog-working">
              <div id="yt-dialog-working-overlay">
  </div>
  <div id="yt-dialog-working-bubble">
    <div class="yt-dialog-waiting-content">
      <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Working...</div>
    </div>
  </div>

          </div>
        </div>
      </div>
    </div>
  </div>



    <div id="shared-addto-watch-later-login" class="hid">
      <a href="http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3" class="sign-in-link">Sign in</a> to add this to a playlist

    </div>

  <div id="shared-addto-menu" style="display: none;" class="hid sign-in">
      <div class="addto-menu">
        <div id="addto-list-panel" class="menu-panel active-panel">
        <span class="yt-uix-button-menu-item yt-uix-tooltip sign-in"data-possible-tooltip=""data-tooltip-show-delay="750"><a href="http://web-old.archive.org/web/20121229102009/https://accounts.google.com/ServiceLogin?hl=en_US&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1&amp;passive=true&amp;service=youtube&amp;uilel=3" class="sign-in-link">Sign in</a> to add this to a playlist
</span>

  </div>
  <div id="addto-list-saved-panel" class="menu-panel">
    <div class="panel-content">
      <div class="yt-alert yt-alert-naked yt-alert-success  ">  <div class="yt-alert-icon">
    <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
            
  <span class="message">Added to <span class="addto-title yt-uix-tooltip yt-uix-tooltip-reverse" title="More information about this playlist" data-tooltip-show-delay="750"></span></span>

    </div>
</div></div>
    </div>
  </div>
  <div id="addto-list-error-panel" class="menu-panel">
    <div class="panel-content">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span class="error-details"></span>
      <a class="show-menu-link">Back to list</a>
    </div>
  </div>

        <div id="addto-note-input-panel" class="menu-panel">
    <div class="panel-content">
      <div class="yt-alert yt-alert-naked yt-alert-success  ">  <div class="yt-alert-icon">
    <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
              <span class="message">Added to playlist:</span>
  <span class="addto-title yt-uix-tooltip" title="More information about this playlist" data-tooltip-show-delay="750"></span>

    </div>
</div></div>
    </div>
<div class="yt-uix-char-counter" data-char-limit="150"><div class="addto-note-box addto-text-box"><textarea id="addto-note" class="addto-note yt-uix-char-counter-input" maxlength="150"></textarea><label for="addto-note" class="addto-note-label">Add an optional note</label></div><span class="yt-uix-char-counter-remaining">150</span></div>    <button disabled="disabled" type="button" class="playlist-save-note yt-uix-button yt-uix-button-hh-default" onclick=";return false;"  role="button"><span class="yt-uix-button-content">Add note </span></button>
  </div>
  <div id="addto-note-saving-panel" class="menu-panel">
    <div class="panel-content loading-content">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span>Saving note...</span>
    </div>
  </div>
  <div id="addto-note-saved-panel" class="menu-panel">
    <div class="panel-content">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span class="message">Note added to:</span>
    </div>
  </div>
  <div id="addto-note-error-panel" class="menu-panel">
    <div class="panel-content">
      <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span class="message">Error adding note:</span>
      <ul class="error-details"></ul>
      <a class="add-note-link">Click to add a new note</a>
    </div>
  </div>
  <div class="close-note hid">
    <img src="http://web-old.archive.org/web/20121229102009im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="close-button">
  </div>

  </div>

  </div>
    <script>
      <?php
include("./static/footer.php");
      ?>
if (window.yt.timing) {yt.timing.tick("js_head");}    </script>
  
    <script id="js-1886910086" src="./asset/watch.js" data-loaded="true"></script>

  <script>
    yt.setConfig({
      'WATCH_EXTRA_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-watch7-extra-vflyP-4Kk.js",
      'WATCH_GUIDE_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-guidev2-vfl72MaxY.js",
      'WATCH_GUIDE_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-home-c4-vfl7bPgdG.css",
        'WATCH_CONTEXT_CONTAINER_TEMPLATE': "\u003cdiv id=\"context-source-container\"data-context-source=\"__source__\"data-context-image=\"__image__\"style=\"display:none;\"\u003e\u003c\/div\u003e\u003cdiv class=\"__container_classes__\"\u003e\u003cdiv class=\"guide-module-toggle context-header\"\u003e\u003cspan class=\"guide-module-toggle-icon\"\u003e\u003cspan class=\"guide-module-toggle-arrow\"\u003e\u003c\/span\u003e\u003cimg src=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" alt=\"\"\u003e\u003c\/span\u003e\u003ca class=\"context-back-link yt-uix-sessionlink\" href=\"__back_link__\" data-sessionlink=\"ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D\u0026amp;feature=__feature__\"\u003e\u003cspan class=\"guide-context-image-link\"\u003e\u003cspan class=\"thumb guide-context-image\"\u003e\u003cimg id=\"context-image\" src=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" alt=\"\" data-context-image=\"__image__\"\u003e\u003c\/span\u003e\u003c\/span\u003e\u003cdiv class=\"guide-module-toggle-label\"\u003e\u003ch3 class=\"context-title\"\u003e\u003cspan\u003e__headline__\u003cspan class=\"yt-badge-new\"\u003enew\u003c\/span\u003e\u003c\/span\u003e\u003c\/h3\u003e\u003cspan class=\"placeholder\" title=\"__more_from__\" dir=\"__title_dir__\"\u003e__more_from__\u003c\/span\u003e\u003c\/div\u003e\u003c\/a\u003e\u003c\/div\u003e\u003cdiv class=\"guide-module-content  hid\"\u003e\u003chr class=\"guide-section-separator guide-context-separator-top\"\u003e\u003cul id=\"watch-context-item-list\" class=\"guide-context-item-container context-data-container yt-uix-scroller guide-context-body\" data-context-playing=\"__click_index__\" data-context-open=\"true\" data-context-subsource=\"__subsource__\" data-scroll-action=\"yt.www.watch.context.loadThumbnails\"\u003e__item_list__\u003c\/ul\u003e\u003chr class=\"guide-section-separator guide-context-separator-bottom\"\u003e\u003c\/div\u003e\u003c\/div\u003e",
        'WATCH_CONTEXT_VIDEO_TEMPLATE': "\u003cli class=\"guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit __item_classes__\" data-context-item-views=\"__view_count__\" data-context-item-id=\"__video_id__\" data-context-item-title=\"__video_title__\" data-context-item-type=\"video\" data-context-item-time=\"__video_time__\" data-context-item-actionuser=\"__action_username__\" data-context-item-actionverb=\"__action_verb__\" data-context-item-user=\"__user_name__\"\u003e\u003ca href=\"\/watch?v=__video_id__\" class=\"yt-uix-contextlink yt-uix-sessionlink \" data-sessionlink=\"ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D\u0026amp;feature=__feature__\"\u003e\u003cspan class=\"video-thumb ux-thumb yt-thumb-default-40 context-video-thumb\"\u003e\u003cspan class=\"yt-thumb-clip\"\u003e\u003cspan class=\"yt-thumb-clip-inner\"\u003e\u003cimg alt=\"\" data-group-key=\"guide-context-thumbs\" data-thumb-manual=\"1\" src=\"http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" data-thumb=\"\/\/i4.ytimg.com\/vi\/__video_id__\/default.jpg\" width=\"40\" \u003e\u003cspan class=\"vertical-align\"\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e\u003cspan class=\"title\"\u003e__video_title__\u003c\/span\u003e\u003cspan class=\"username\"\u003eby __user_name__\u003c\/span\u003e\u003cspan class=\"viewcount\"\u003e__view_count__\u003c\/span\u003e\u003cspan class=\"action\"\u003e__action_username__ __action_verb__\u003c\/span\u003e\u003c\/a\u003e\u003c\/li\u003e",
        'WATCH_CONTEXT_PLAYLIST_TEMPLATE': "\u003cli class=\"guide-context-item context-data-item context-playlist yt-uix-scroller-scroll-unit __item_classes__\" data-context-item-count-label=\"__video_count_label__\" data-context-item-id=\"__playlist_id__\" data-context-item-title=\"__playlist_title__\" data-context-item-type=\"playlist\" data-context-item-videos=\"[\u0026quot;__playlist_video_id__\u0026quot;]\" data-context-item-count=\"__video_count__\" data-context-item-actionuser=\"__action_username__\" data-context-item-actionverb=\"__action_verb__\" data-context-item-user=\"\u0026quot;__user_name__\u0026quot;\"\u003e\u003ca href=\"\/watch?v=__playlist_video_id__\u0026amp;playnext=1\u0026amp;list=__playlist_id__\" class=\"yt-uix-contextlink yt-uix-sessionlink \" data-sessionlink=\"ei=CJCpxP-xv7QCFQnbRAodKGVivw%3D%3D\u0026amp;feature=__feature__\"\u003e\u003cspan class=\"context-video-thumb yt-pl-thumb\"\u003e\u003cspan class=\"video-thumb ux-thumb yt-thumb-default-40 \"\u003e\u003cspan class=\"yt-thumb-clip\"\u003e\u003cspan class=\"yt-thumb-clip-inner\"\u003e\u003cimg alt=\"\" data-group-key=\"guide-context-thumbs\" data-thumb-manual=\"1\" src=\"http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" data-thumb=\"\/\/i4.ytimg.com\/vi\/__playlist_video_id__\/default.jpg\" width=\"40\" \u003e\u003cspan class=\"vertical-align\"\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e  \u003cspan class=\"video-count-wrapper\"\u003e\n    \u003cspan class=\"video-count-block\"\u003e\n      \u003cspan class=\"count-label\"\u003e__video_count__\u003c\/span\u003e\n      \u003cspan class=\"text-label\"\u003e__video_count_label__\u003c\/span\u003e\n    \u003c\/span\u003e\n  \u003c\/span\u003e\n\u003c\/span\u003e\u003cspan class=\"title\"\u003e__playlist_title__\u003c\/span\u003e\u003cspan class=\"username\"\u003eby __user_name__\u003c\/span\u003e\u003cspan class=\"action\"\u003e__action_username__ __action_verb__\u003c\/span\u003e\u003c\/a\u003e\u003c\/li\u003e",
        'WATCH_CONTEXT_GEN204': true,
      'WATCH7_ENABLED': true,
      'WATCH_PROMO_GUIDE': true,
      'WATCH_PROMO_CONTEXT': true,
      'GUIDE_ENABLED': true,
      'GUIDE_EXPANDS_IF_ROOM': null,
      'CONTEXT_EXPANDS_IF_ROOM': null,
      'GUIDE_EXPANDS_ON_NOTIFICATION': false,
      'GUIDE_OR_CONTEXT_EXPAND_IF_ROOM': false,
      'GUIDE_MODULE_STATE_STICKY': false
    });

    yt.setAjaxToken('promo_ajax_token', "X9me8RLB85H3ZU1rKF43Swb8u7N8MTM1Njg2MjgwOUAxMzU2Nzc2NDA5");

      yt.setMsg({
        'WATCH_CONTEXT_MORE_FROM': "More from",
        'WATCH_CONTEXT_MORE_RESULTS': "More results"
      });

    
  </script>

      <script>
      yt.setAjaxToken('subscription_ajax', "");

  </script>


  <script>
    yt.setConfig({
      'VIDEO_ID': "<?php echo $id; ?>",
      'RADIO_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-radio-vflQwnXYf.js",
      'WATCH_LIVECOMMENTS_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-livecomments-vflciwrOb.js",
      'WATCH_TRANSCRIPT_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-watch-transcript-vflB-GDIu.js",


      'REPORTVIDEO_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-reportvideo-vflik8cLN.js",
      'REPORTVIDEO_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-watch7-reportvideo-vflFgjmTM.css",


      'ENABLE_AUTO_LARGE': true,
      'ENABLE_ASPECT_RATIO': false    });

      yt.setAjaxToken('guide_channels_ajax', "BgZh-vFvg0IfXWZKI6yBrdXcalV8MTM1Njg2MjgwOUAxMzU2Nzc2NDA5");
  </script>

  <script>
    yt = yt || {};
      yt.playerConfig = {"params": {"allowscriptaccess": "always", "allowfullscreen": "true", "bgcolor": "#000000"}, "attrs": {"id": "movie_player"}, "url_v8": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/cps-vflsW5I5F.swf", "args": {"fexp": "908494,920704,912806,928001,922403,922405,929901,913605,929104,913546,913556,908493,908496,920201,913302,919009,911116,901451,902556", "sw": "1.0", "url_encoded_fmt_stream_map": "itag=43\u0026type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22\u0026url=<?php echo $video; ?>\u0026quality=medium,itag=34\u0026type=video%2Fx-flv\u0026url=https%3A%2F%2Ffulptube.rocks%2Fdynamic%2Fvideos%2FMTYxMjExMjUzNDk%3D00.mp4%3Fip%3D207.241.226.170%26algorithm%3Dthrottle-factor%26factor%3D1.25%26upn%3DZXPRPVT76J4%26itag%3D34%26fexp%3D908494%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908493%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26key%3Dyt1%26gcr%3Dus%26burst%3D40%26sver%3D3%26id%3Da078394896111c0d%26cp%3DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%26expire%3D1356799546%26mt%3D1356776348%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26ipbits%3D8%26source%3Dyoutube%26ms%3Dau\u0026fallback_host=tc.v18.cache1.c.youtube.com\u0026sig=BCCB46E29DB583145C8A959BE1040962DA2472F1.3453C7E6BD4D16FBE618210B6E6C6D5177359C1F\u0026quality=medium,itag=18\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.42001E%2C+mp4a.40.2%22\u0026url=https%3A%2F%2Ffulptube.rocks%2Fdynamic%2Fvideos%2FMTYxMjExMjUzNDk%3D00.mp4%3Fip%3D207.241.226.170%26key%3Dyt1%26upn%3DZXPRPVT76J4%26ratebypass%3Dyes%26itag%3D18%26gcr%3Dus%26source%3Dyoutube%26sver%3D3%26id%3Da078394896111c0d%26cp%3DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%26expire%3D1356799546%26mt%3D1356776348%26sparams%3Dcp%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26mv%3Dm%26ipbits%3D8%26fexp%3D908494%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908493%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26ms%3Dau\u0026fallback_host=tc.v5.cache6.c.youtube.com\u0026sig=95A04E234CB166BBA70AE2ADE02E2873DF94A377.15D3F7504443500D812636C69A371CB185758493\u0026quality=medium,itag=5\u0026type=video%2Fx-flv\u0026url=https%3A%2F%2Ffulptube.rocks%2Fdynamic%2Fvideos%2FMTYxMjExMjUzNDk%3D00.mp4%3Fip%3D207.241.226.170%26algorithm%3Dthrottle-factor%26factor%3D1.25%26upn%3DZXPRPVT76J4%26itag%3D5%26fexp%3D908494%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908493%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26key%3Dyt1%26gcr%3Dus%26burst%3D40%26sver%3D3%26id%3Da078394896111c0d%26cp%3DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%26expire%3D1356799546%26mt%3D1356776348%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26ipbits%3D8%26source%3Dyoutube%26ms%3Dau\u0026fallback_host=tc.v19.cache4.c.youtube.com\u0026sig=7648F02108703F2A035C6E82F7DD002AA968AD72.1A58AF0ACBA222784AFCFCEA10E190DD45036925\u0026quality=small,itag=36\u0026type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22\u0026url=https%3A%2F%2Ffulptube.rocks%2Fdynamic%2Fvideos%2FMTYxMjExMjUzNDk%3D00.mp4%3Fip%3D207.241.226.170%26algorithm%3Dthrottle-factor%26factor%3D1.25%26upn%3DZXPRPVT76J4%26itag%3D36%26fexp%3D908494%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908493%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26key%3Dyt1%26gcr%3Dus%26burst%3D40%26sver%3D3%26id%3Da078394896111c0d%26cp%3DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%26expire%3D1356799546%26mt%3D1356776348%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26ipbits%3D8%26source%3Dyoutube%26ms%3Dau\u0026fallback_host=tc.v4.cache8.c.youtube.com\u0026sig=0873EEC57E16DB2009AD4B4BAA78559241954BFB.A936A6B59ED86EB2F96EFF9B1D91F8228948A648\u0026quality=small,itag=17\u0026type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22\u0026url=https%3A%2F%2Ffulptube.rocks%2Fdynamic%2Fvideos%2FMTYxMjExMjUzNDk%3D00.mp4%3Fip%3D207.241.226.170%26algorithm%3Dthrottle-factor%26factor%3D1.25%26upn%3DZXPRPVT76J4%26itag%3D17%26fexp%3D908494%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908493%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26key%3Dyt1%26gcr%3Dus%26burst%3D40%26sver%3D3%26id%3Da078394896111c0d%26cp%3DU0hUS1dUV19JUENONF9PTkFGOmZGSGRiU3R4RUtx%26expire%3D1356799546%26mt%3D1356776348%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26ipbits%3D8%26source%3Dyoutube%26ms%3Dau\u0026fallback_host=tc.v9.cache5.c.youtube.com\u0026sig=7479F10AD37B5C4301DEDCCBF017939381ED78A5.606A359548236DE03E778296041BC52BF513590D\u0026quality=small", "iv3_module": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/iv3_module-vfl_nqa5q.swf", "iv_queue_log_level": 0, "sdetail": "p:\/embed\/<?php echo $id; ?>", "allow_embed": 1, "timestamp": 1356776409, "sourceid": "y", "autohide": "2", "fmt_list": "43\/320x240\/99\/0\/0,34\/320x240\/9\/0\/115,18\/320x240\/9\/0\/115,5\/320x240\/7\/0\/0,36\/320x240\/99\/0\/0,17\/176x144\/99\/0\/0", "st_module": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/st_module-vflrZq5S5.swf", "hl": "en_US", "title": "<?php echo $video_title; ?>", "is_html5_mobile_device": false, "tk": "1tc64BEZyTSqm6QCDit94yZDAkecd0nShJ24abhRydhB4ICSSIzCRQ==", "iv_close_button": 0, "tmi": "1", "rvs": "<?php echo getEndScreenRecommendations(); ?>", "video_id": "<?php echo $id; ?>", "t": "vjVQa1PpcFPhWgX1t4WlXiO8xFL1sZka3SBKKHCoXSo=", "enablecsi": "1", "pltype": "contentugc", "referrer": "http://web-old.archive.org/web/20121229102009/http://www.youtube.com\/embed\/<?php echo $id; ?>?rel=0\u0026wmode=opaque", "plid": "AATR-x_xO21MpC6k", "oid": "YbGWGCIUCoaUePqGy_acMw", "ptk": "youtube_multi", "csi_page_type": "watch7", "iv_logging_level": 4, "no_get_video_log": "1", "watermark": ",http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/img\/watermark\/youtube_watermark-vflHX6b6E.png,http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/img\/watermark\/youtube_hd_watermark-vflAzLcD6.png", "loudness": -23.6900005341, "keywords": "Cotter548,Shawn,Cotter,lol,gamefaqs,CE,reddit,rettocs,no,brb,afk,lawl,pwnt,Rickroll,Rickroll'd,Rick,Roll,Duckroll,Duck,rick,roll,astley,never,gonna,give,you,up,let,down,run,around,and,hurt", "showpopout": 1, "vq": "auto", "account_playback_token": "", "advideo": "1", "length_seconds": 212, "iv_module": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/iv_module-vflBA53yv.swf", "iv_read_url": "./annotations_invideo?video_id=<?php echo $id; ?>\u0026expire=1356820200\u0026sparams=expire%2Cvideo_id\u0026signature=3F56493BABA3EB26959545232E26AE3DE3F84625.3EC9A98CEA718C4F46FF296A751A0A81EDEDBD82\u0026key=a1", "enablejsapi": 1, "iv_load_policy": 1, "endscreen_module": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/endscreen-vflW8uRdM.swf", "storyboard_spec": "https://i.ytimg.com/sb/<?php echo $id; ?>/storyboard3_L$L/$N.jpg?sqp=-oaymwENSDfyq4qpAwVwAcABAaLzl_8DBgjg5fa0BQ==|48#27#100#10#10#0#default#rs$AOn4CLBz9nENfY7seQPIfH0LOo6MPvIryA|80#45#73#10#10#2000#M$M#rs$AOn4CLBuUEJN40mIoSxaag3zIM8HqAzkGg|160#90#73#5#5#2000#M$M#rs$AOn4CLDv-FtbOpc1WBvxCh9w2AhE9czLQg", "cr": "US", "sk": "DyX2wsym78EuL6hvHnt3bYmCh7X-RqSwC"}, "url": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/watch_as3_hh-vfleHfpd4.swf", "assets": {"css_actions": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/cssbin\/www-player-actions-vflBv1HfX.css", "html": "\/html5_player_template_2012L", "css": "./asset/player.css", "js": "./asset/html5player.js"}, "min_version": "8.0.0", "url_v9as2": "http://web-old.archive.org/web/20121229102009/http://s.ytimg.com\/yts\/swfbin\/cps-vflsW5I5F.swf", "html5": false};
      yt.setConfig({
    'EMBED_HTML_TEMPLATE': "\u003ciframe width=\"__width__\" height=\"__height__\" src=\"__url__\" frameborder=\"0\" allowfullscreen\u003e\u003c\/iframe\u003e",
    'EMBED_HTML_URL': "http://web-old.archive.org/web/20121229102009/http://www.youtube.com\/embed\/__videoid__"
  });
    yt.setMsg('FLASH_UPGRADE', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http://web-old.archive.org/web/20121229102009/http://get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
  yt.setMsg('PLAYER_FALLBACK', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            The Adobe Flash Player or an HTML5 supported browser is required for video playback. \u003cbr\u003e \u003ca href=\"http://web-old.archive.org/web/20121229102009/http://get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"\/html5\"\u003eLearn more about upgrading to an HTML5 browser\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
  yt.setMsg('QUICKTIME_FALLBACK', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            The Adobe Flash Player or QuickTime is required for video playback. \u003cbr\u003e \u003ca href=\"http://web-old.archive.org/web/20121229102009/http://get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"http://web-old.archive.org/web/20121229102009/http://www.apple.com\/quicktime\/download\/\"\u003eGet the latest version of QuickTime\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");


  
initYTVideo('id/a078394896111c0d');</script>

  <script>
    yt.setConfig({
      'SUBSCRIBE_AXC': "",
      'IS_OWNER_VIEWING': null,
      'IS_WIDESCREEN': false,
      'PREFER_LOW_QUALITY': false,
      'ALLOW_EMBED': true,
      'ALLOW_RATINGS': true,
      'YPC_CAN_RATE_VIDEO': true,
      'YPC_SHOW_VPPA_CONFIRM_RATING': false,










      'ADS_DATA': {"use_gut": false, "show_companion": false, "show_pyv": false, "show_afv": false, "show_instream": false, "show_afc": false},
      'PLAYBACK_ID': "AATR-x_xO21MpC6k",
      'PLAY_ALL_MAX': 480,
      'IN_SIGNED_OUT_ACTION_PROMO_1': false,
      'IN_SIGNED_OUT_ACTION_PROMO_2': false    });

    yt.setMsg({
      'LOADING': "Loading..."    });

      yt.setMsg({
    'UNBLOCK_USER': "Are you sure you want to unblock this user?",
    'BLOCK_USER': "Are you sure you want to block this user?"
  });
  yt.setConfig('BLOCK_USER_AJAX_XSRF', '');


      
  yt.setConfig({
    'COMMENTS_SIGNIN_URL': "http://web-old.archive.org/web/20121229102009/https://accounts.google.com\/ServiceLogin?hl=en_US\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dcomments%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo $id; ?>%26nomobiletemp%3D1\u0026passive=true\u0026service=youtube\u0026uilel=3",
    'COMMENTS_THRESHHOLD': -5,
    'COMMENTS_PAGE_SIZE': 10,
    'COMMENTS_COUNT': 331864,
    'COMMENTS_YPC_CAN_POST_OR_REACT_TO_COMMENT': true,
    'COMMENT_SOURCE': "w",
    'COMMENT_OPEN_REPLY_BOX' : false  });

  yt.setAjaxToken('link_ajax', "");
  yt.setAjaxToken('comment_servlet', "");
  yt.setAjaxToken('comment_voting', "");

  yt.setMsg({
    'CHARACTERS_REMAINING': {"case0": "No characters remaining", "case1": "1 character remaining", "other": "# characters remaining"},
    'COMMENT_OK': "OK",
    'COMMENT_BLOCKED': "You have been blocked by the owner of this video.",
    'COMMENT_CAPTCHAFAIL': "The response to the letters on the image was not correct, please try again.",
    'COMMENT_PENDING': "Comment Pending Approval!",
    'COMMENT_ERROR_EMAIL': "Error, account unverified (see email)",
    'COMMENT_ERROR': "Error, try again",
    'COMMENT_FAILED_MAINTENANCE': "We're currently performing site maintenace, please try later.",
    'COMMENT_OWNER_LINKING': "Comments can't contain links, please put the link in your video description and refer to it in the comment.",
    'SECONDS_REMAINING': {"case0": "You can post again", "case1": "1 second remaining before you can post", "other": "# seconds remaining before you can post"}
  });





    









    
  </script>


<script>yt.setConfig({'EVENT_ID': "CJCpxP-xv7QCFQnbRAodKGVivw==",'LOGGED_IN': false,'SESSION_INDEX': null,'CURRENT_URL': "http://web-old.archive.org/web/20121229102009/http://www.youtube.com\/watch?v=<?php echo $id; ?>",'WATCH_CONTEXT_CLIENTSIDE': true,'FEEDBACK_BUCKET_ID': "Watch",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"accept_language": null, "experiments": "908494,920704,912806,928001,922403,922405,929901,913605,929104,913546,913556,908493,908496,920201,913302,919009,911116,901451,902556", "logged_in": false, "guide_subs": 8}});yt.setMsg({'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error"});yt.setAjaxToken('addto_ajax_logged_out', "SDOO7R2bHjQytiZGVZv3hTRr1_x8MTM1Njg2MjgwOUAxMzU2Nzc2NDA5");  yt.setConfig('FEED_PRIVACY_CSS_URL', "\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-vfl_3sjoJ.css");
  yt.setAjaxToken('feed_privacy_ajax', "");
    yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflMOcX4x.js",'SBOX_SETTINGS': {"IS_HH": true, "PSUGGEST_TOKEN": null, "CHIP_PARAMETERS": {}, "SHOW_CHIP": false, "SESSION_INDEX": null, "HAS_ON_SCREEN_KEYBOARD": false, "REQUEST_DOMAIN": "us", "REQUEST_LANGUAGE": "en", "EXPERIMENT_ID": -1, "CLOSE_ICON_URL": "\/\/s.ytimg.com\/yts\/img\/icons\/close-vflrEJzIW.png"},'SBOX_LABELS': {"SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed", "SUGGESTION_DISMISS_LABEL": "Dismiss"}});</script>    <script>
if (window.yt.timing) {yt.timing.tick("js_page");}    </script>
    <script>
yt.setConfig('TIMING_ACTION', "watch7");    </script>
<script>yt.setConfig({'XSRF_TOKEN': "vI5U26XWAoB84IzN3tlPmNJ2akJ8MTM1Njg2MjgwOUAxMzU2Nzc2NDA5",'XSRF_REDIRECT_TOKEN': "VDFaolAw1dWnvKZuG1aXp4-N_al8MTM1Njg2MjgwOUAxMzU2Nzc2NDA5",'XSRF_FIELD_NAME': "session_token"});</script><script>yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 0);</script>    <script>
if (window.yt.timing) {yt.timing.tick("js_foot");}    </script>
<div id="debug"></div></body></html>




<!--
     FILE ARCHIVED ON 10:20:09 Dec 29, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 17:28:22 Feb 7, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
