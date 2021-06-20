<?php 

    Header("Content-Type: text/plain");
    
    $yt_url = "https://www.youtube.com/watch?v=IcrbM1l_BoI&pbj=1";

    $json_data = '{}';

    $ch = curl_init( $yt_url );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
    'Cookie: GPS=1; YSC=hG4Cfmhvql0; VISITOR_INFO1_LIVE=KfcydxQpl3w; PREF=tz=Asia.Tokyo',
    'Content-type: application/json',
    'X-YOUTUBE-CLIENT-NAME: 1',
    'X-YOUTUBE-CLIENT-VERSION: 2.20200101.01.01',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, 0);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, true);

    $response = curl_exec( $ch );
    
    $json = json_decode($response);
    
    if(!isset($json[3]->response->contents->twoColumnWatchNextResults->results->results->contents[2]->itemSectionRenderer)) {
    $continuation = $json[3]->response->contents->twoColumnWatchNextResults->results->results->contents[3]->itemSectionRenderer->continuations[0]->nextContinuationData->continuation;
    $tracking = $json[3]->response->contents->twoColumnWatchNextResults->results->results->contents[3]->itemSectionRenderer->continuations[0]->nextContinuationData->clickTrackingParams;
    } else {
    $continuation = $json[3]->response->contents->twoColumnWatchNextResults->results->results->contents[2]->itemSectionRenderer->continuations[0]->nextContinuationData->continuation;
    $tracking = $json[3]->response->contents->twoColumnWatchNextResults->results->results->contents[2]->itemSectionRenderer->continuations[0]->nextContinuationData->clickTrackingParams;
    }
    $session = urlencode($json[3]->xsrf_token);
    
    echo $session;
    
    // comment service ajax
    
    $yt_url = "https://www.youtube.com/comment_service_ajax?action_get_comments=1&pbj=1&ctoken=".$continuation."&continuation=".$continuation."&type=next&itct=".$tracking;
    
    $data = "session_token=".$session;
    
    echo $data;
    
    $ch = curl_init( $yt_url );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
    'Content-type: application/x-www-form-urlencoded',
    'Cookie: GPS=1; YSC=hG4Cfmhvql0; VISITOR_INFO1_LIVE=KfcydxQpl3w; PREF=tz=Asia.Tokyo',
    'Referrer-Policy: strict-origin-when-cross-origin',
    'X-YOUTUBE-CLIENT-NAME: 1',
    'X-YOUTUBE-CLIENT-VERSION: 1.20200101.01.01',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
    
    echo $response;
    
    curl_close( $ch );

 ?>