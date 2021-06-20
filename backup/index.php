<?php
	ob_start();
	if (isset($_GET['spf']))
	{
	$isspf = $_GET['spf'];
	} else {
		$isspf = 0;
	}
	
	if ($isspf == "navigate") {
		header("Content-Type: application/json");
		
		function getContentJson($input) {
			ob_start();
			include $input;
			$include = ob_get_contents();
			ob_end_clean();
			$data = $include;
			$escaped = json_encode($data);
			echo $escaped;
		}
		
	?> {
    "name": "other",
    "body": {
        "player-unavailable": "",
        "debug": "",
        "early-body": "",
        "appbar-content": <?php getContentJson('./yts_pagecontent/appbar_home.php'); ?>,
        "alerts": "",
        "content": <?php getContentJson('./yts_pagecontent/home.php'); ?>,
        "header": "",
        "ticker-content": "",
        "player-playlist": ""
    },
    "attr": {
        "player-unavailable": {
            "class": "  hid  "
        },
        "footer-logo-link": {
            "data-sessionlink": "ei=pu-4WJDNFsbj-gOAzqN4\u0026ved=CAEQpmEiEwiQuJG2vrnSAhXGsX4KHQDnCA8o6R4"
        },
        "logo-container": {
            "data-sessionlink": ""
        },
        "player": {
            "class": "  off-screen  "
        },
        "appbar-content": {
            "class": ""
        },
        "body": {
            "class": "  ltr  gecko gecko-51  exp-responsive exp-scrollable-guide exp-search-big-thumbs exp-search-big-thumbs246 exp-search-font-18 exp-wn-big-thumbs exp-wn-big-thumbs-v3 exp-wn-font-14   site-center-aligned site-as-giant-card guide-pinning-enabled    visibility-logging-enabled   not-nirvana-dogfood  not-yt-legacy-css    flex-width-enabled      flex-width-enabled-snap  "
        },
        "masthead-search": {
            "data-clicktracking": "CAIQ7VAiEwiQuJG2vrnSAhXGsX4KHQDnCA8o6R4",
            "class": "  search-form consolidated-form  vve-check",
            "data-visibility-tracking": "CAIQ7VAiEwiQuJG2vrnSAhXGsX4KHQDnCA8o6R4"
        },
        "content": {
            "class": "  content-alignment"
        },
        "page": {
            "class": "home branded-page-v2-masthead-ad-header clearfix masthead-ad-expanded"
        },
        "player-playlist": {
            "class": "  hid  "
        }
    },
    "foot": "<script>var ytspf = ytspf || {};ytspf.enabled = true;ytspf.config = {'reload-identifier': 'spfreload'};ytspf.config['request-headers'] = {'X-YouTube-Identity-Token': null};ytspf.config['experimental-request-headers'] = ytspf.config['request-headers'];ytspf.config['cache-max'] = 50;ytspf.config['navigate-limit'] = 50;ytspf.config['navigate-lifetime'] = 64800000;ytspf.config['animation-duration'] = 0;<\/script><script src=\"\/\/s.ytimg.com\/yts\/jsbin\/spf-vflz-OhP4\/spf.js\" type=\"text\/javascript\" name=\"spf\/spf\" class=\"js-httpssytimgcomytsjsbinspfvflzOhP4spfjs\"><\/script><script src=\"\/\/s.ytimg.com\/yts\/jsbin\/www-en_US-vflPeHMz9\/base.js\" name=\"www\/base\" class=\"js-httpssytimgcomytsjsbinwwwen_USvflPeHMz9basejs\"><\/script><script>spf.script.path({'www\/': '\/\/s.ytimg.com\/yts\/jsbin\/www-en_US-vflPeHMz9\/'});var ytdepmap = {\"www\/base\": null, \"www\/common\": \"www\/base\", \"www\/angular_base\": \"www\/common\", \"www\/channels_accountupload\": \"www\/common\", \"www\/channels\": \"www\/common\", \"www\/dashboard\": \"www\/common\", \"www\/downloadreports\": \"www\/common\", \"www\/experiments\": \"www\/common\", \"www\/feed\": \"www\/common\", \"www\/instant\": \"www\/common\", \"www\/legomap\": \"www\/common\", \"www\/promo_join_network\": \"www\/common\", \"www\/results_harlemshake\": \"www\/common\", \"www\/results\": \"www\/common\", \"www\/results_starwars\": \"www\/common\", \"www\/subscriptionmanager\": \"www\/common\", \"www\/unlimited\": \"www\/common\", \"www\/watch\": \"www\/common\", \"www\/ypc_bootstrap\": \"www\/common\", \"www\/ypc_core\": \"www\/common\", \"www\/channels_edit\": \"www\/channels\", \"www\/live_dashboard\": \"www\/angular_base\", \"www\/videomanager\": \"www\/angular_base\", \"www\/watch_autoplayrenderer\": \"www\/watch\", \"www\/watch_edit\": \"www\/watch\", \"www\/watch_editor\": \"www\/watch\", \"www\/watch_live\": \"www\/watch\", \"www\/watch_promos\": \"www\/watch\", \"www\/watch_speedyg\": \"www\/watch\", \"www\/watch_transcript\": \"www\/watch\", \"www\/watch_videoshelf\": \"www\/watch\", \"www\/ct_advancedsearch\": \"www\/videomanager\", \"www\/my_videos\": \"www\/videomanager\"};spf.script.declare(ytdepmap);<\/script><script>if (window.ytcsi) {window.ytcsi.tick(\"je\", null, '');}<\/script><script>\r\n    \r\n    yt.setConfig({\r\n      'MASTHEAD_ENCRYPTED_ID': \"z7kbMa3knCY\",\r\n      'MASTHEAD_IS_BRANDED': false\r\n    });\r\n\r\n(function() {var c = document.getElementById('feed-pyv-container');if (c) {var h = \"\\u003cscript\\u003ewindow.yt = window.yt || {};yt.www = yt.www || {};yt.www.feed = yt.www.feed || {};yt.www.feed.ui = yt.www.feed.ui || {};yt.www.feed.ui.ads = yt.www.feed.ui.ads || {};window.renderHomepagePyv = function(pyv) {writePyvAd();};\\u003c\\\/script\\u003e\\u003cscript\\u003evar renderPyvCallback = parent.yt.www.ads.pyv.pyvHomeAfcCallback;window.writePyvAd = function() {window['google_page_url'] = parent.document.location;window['google_language'] = \\\"en\\\";window['google_loeid'] = \\\"__loeid__\\\";window['google_eids'] = \\\"__eids__\\\";window['google_pucrd'] = \\\"__pucrd__\\\";window['google_ad_client'] = \\\"__property_code__\\\";window['google_ad_channel'] = \\\"__channels__\\\";window['google_max_num_ads'] = 1;window['google_ad_output'] = 'js';window['google_ad_type'] = 'text';window['google_only_pyv_ads'] = true;window['google_ad_request_done'] = function(googleAds) {renderPyvCallback(googleAds);};document.write('\\u003cscript s\\u0072c=\\\"\\\/\\\/pagead2.googlesyndication.com\\\/pagead\\\/show_ads.js\\\"\\u003e\\u003c\\\\\\\/script\\u003e');};var pyvCallback = window.renderHomepagePyv;pyvCallback();\\u003c\\\/script\\u003e\";h = h.replace(\/__property_code__\/g, c.getAttribute('data-property-code') || '');h = h.replace(\/__channels__\/g, c.getAttribute('data-channels') || '');h = h.replace(\/__loeid__\/g, c.getAttribute('data-loeid') || '');h = h.replace(\/__pucrd__\/g, c.getAttribute('data-pucrd') || '');var eids = c.getAttribute('data-eids') || '';h = h.replace(\/\\\"__eids__\\\"\/g, JSON.stringify(eids.split(',')));yt.setConfig({'PYV_IFRAME_CONTENT': h,'PYV_IFRAME_ID': 'pyv-iframe'});}})();\r\n  yt.setConfig('JS_PAGE_MODULES', ['www\/feed', 'www\/ypc_bootstrap']);\r\n\r\n    yt.setConfig('DISMISS_THROUGH_IT', true);\r\n\r\n      yt.setConfig({\r\n        'GUIDE_SELECTED_ITEM': \"0qDduQEREg9GRXdoYXRfdG9fd2F0Y2g%3D\"\r\n      });\r\n\r\n      yt.setConfig({\r\n    'GUIDED_HELP_LOCALE': \"en_US\",\r\n    'GUIDED_HELP_ENVIRONMENT': \"prod\"\r\n  });\r\n\r\n  <\/script><script>yt.setConfig({INNERTUBE_API_KEY: \"AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8\",INNERTUBE_API_VERSION: \"v1\",APIARY_HOST_FIRSTPARTY: \"\",APIARY_HOST: \"\",INNERTUBE_CONTEXT_CLIENT_NAME: 1,GAPI_HINT_PARAMS: \"m;\\\/_\\\/scs\\\/abc-static\\\/_\\\/js\\\/k=gapi.gapi.en.DTPeBB_SvOA.O\\\/m=__features__\\\/rt=j\\\/d=1\\\/rs=AHpOoo-J3J0yqNDMPVrmQT6j-SBFfGx8oA\",XHR_APIARY_HOST: \"youtubei.youtube.com\",INNERTUBE_CONTEXT_CLIENT_VERSION: \"1.20170427\",'VISITOR_DATA': \"CgtWMkFpdEVZd1lIQQ%3D%3D\",'GAPI_HOST': \"https:\\\/\\\/apis.google.com\",'GAPI_LOCALE': \"en_US\",'INNERTUBE_CONTEXT_HL': \"en\",'INNERTUBE_CONTEXT_GL': \"US\",'XHR_APIARY_HOST': \"youtubei.youtube.com\"});yt.setConfig({'ROOT_VE_CHILDREN': [\"CAEQpmEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CAIQ7VAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CJwBEP4eIhMIqO_vy_jU0wIVTYZ-Ch0xUA-AKI4e\",\"CJ0BEOYrGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CJ4BELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CJ8BELUsGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKABELUsGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKEBELUsGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKIBEOGLAhgEIhMIqO_vy_jU0wIVTYZ-Ch0xUA-AKI4e\",\"CKMBEOYrGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKQBELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKUBELUsGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKYBELUsGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKcBELUsGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKgBELUsGAQiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKkBELUsGAUiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKoBELUsGAYiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKsBELUsGAciEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CKwBELUsGAgiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CK0BEOYrGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CK4BELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CK8BENguGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CLABEMcxIhMIqO_vy_jU0wIVTYZ-Ch0xUA-AKI4e\",\"CLEBEMMtGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\",\"CLIBEMMtGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4\"],'ROOT_VE_TYPE': 3854});yt.setConfig({'EVENT_ID': \"ZHAKWaitKM2M-gOxoL2ACA\",'PAGE_NAME': \"index\",'LOGGED_IN': false,'SESSION_INDEX': null,'VALID_SESSION_TEMPDATA_DOMAINS': [\"www.youtube.com\",\"gaming.youtube.com\"],'PARENT_TRACKING_PARAMS': \"\",'FORMATS_FILE_SIZE_JS': [\"%s B\",\"%s KB\",\"%s MB\",\"%s GB\",\"%s TB\"],'DELEGATED_SESSION_ID': null,'ONE_PICK_URL': \"\",'UNIVERSAL_HOVERCARDS': true,'GOOGLEPLUS_HOST': \"https:\\\/\\\/plus.google.com\",'PAGEFRAME_JS': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-pageframe-vflj3aNNi\\\/www-pageframe.js\",'GAPI_LOADER_URL': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-gapi-loader-vflFXorI_\\\/www-gapi-loader.js\",'JS_COMMON_MODULE': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-en_US-vflPeHMz9\\\/common.js\",'PAGE_FRAME_DELAYLOADED_CSS': \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-pageframedelayloaded-vflo9ddF2.css\",'EXPERIMENT_FLAGS': {\"web_gel_lact\":true,\"cold_load_nav_start_web\":true,\"chat_smoothing_animations\":84,\"log_window_onerror_fraction\":0.1,\"player_swfcfg_cleanup\":true,\"enable_youtubei_innertube\":true,\"web_logging_max_batch\":20,\"youtubei_for_web\":true,\"autoescape_tempdata_url\":true,\"app_settings_snapshot_min_time_between_snapshots_hours\":24,\"desktop_notification_set_title_bar\":true,\"service_worker_scope\":\"\\\/\",\"desktop_pyv_on_watch_via_valor\":true,\"warm_load_nav_start_web\":true,\"navigation_only_csi_reset\":true,\"service_worker_push_home_only\":true,\"service_worker_push_prompt_cap\":1,\"comment_deep_link\":true,\"desktop_pyv_on_watch_missing_params\":true,\"gfeedback_for_signed_out_users_enabled\":true,\"consent_url_override\":\"\",\"autoplay_pause_sampling_fraction\":0.0,\"service_worker_enabled\":true,\"player_interaction_logging\":true,\"same_domain_static_resources_desktop\":true,\"watch_next_pause_autoplay_lact_sec\":0,\"desktop_pyv_on_watch_override_lact\":true,\"service_worker_push_enabled\":true,\"clear_web_implicit_clicktracking\":true,\"enable_more_related_ve_logging\":true,\"use_push_for_desktop_live_chat\":true,\"block_spf_search_ads_impressions\":true,\"enable_server_side_search_pyv\":true},'GUIDED_HELP_PARAMS': {\"logged_in\":\"0\",\"context\":\"yt_web_w2w\"},'HIGH_CONTRAST_MODE_CSS': \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-highcontrastmode-vflbPe0Z_.css\",'PREFETCH_CSS_RESOURCES' : [\"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/player-vflAZABhd\\\/www-player.css\"],'PREFETCH_JS_RESOURCES': [\"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/player-vflppxuSE\\\/en_US\\\/base.js\"],'PREFETCH_LINKS': false,'PREFETCH_LINKS_MAX': 1,'PREFETCH_AUTOPLAY': false,'PREFETCH_AUTOPLAY_TIME': 0,'PREFETCH_AUTONAV': false,'PREBUFFER_MAX': 1,'PREBUFFER_LINKS': false,'PREBUFFER_AUTOPLAY': false,'PREBUFFER_AUTONAV': false,'WATCH_LATER_BUTTON': \"\\n\\n  \\u003cbutton class=\\\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip\\\" type=\\\"button\\\" onclick=\\\";return false;\\\" title=\\\"Watch Later\\\" role=\\\"button\\\" data-video-ids=\\\"__VIDEO_ID__\\\" data-button-menu-id=\\\"shared-addto-watch-later-login\\\"\\u003e\\u003cspan class=\\\"yt-uix-button-arrow yt-sprite\\\"\\u003e\\u003c\\\/span\\u003e\\u003c\\\/button\\u003e\\n\",'WATCH_QUEUE_BUTTON': \"  \\u003cbutton class=\\\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip\\\" type=\\\"button\\\" onclick=\\\";return false;\\\" title=\\\"Queue\\\" data-video-ids=\\\"__VIDEO_ID__\\\" data-style=\\\"tv-queue\\\"\\u003e\\u003c\\\/button\\u003e\\n\",'WATCH_QUEUE_MENU': \"  \\u003cspan class=\\\"thumb-menu dark-overflow-action-menu video-actions\\\"\\u003e\\n    \\u003cbutton onclick=\\\";return false;\\\" type=\\\"button\\\" aria-haspopup=\\\"true\\\" aria-expanded=\\\"false\\\" class=\\\"yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty\\\" \\u003e\\u003cspan class=\\\"yt-uix-button-arrow yt-sprite\\\"\\u003e\\u003c\\\/span\\u003e\\u003cul class=\\\"watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid\\\"\\u003e\\u003cli role=\\\"menuitem\\\" class=\\\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item\\\" data-action=\\\"play-next\\\" onclick=\\\";return false;\\\"  data-video-ids=\\\"__VIDEO_ID__\\\"\\u003e\\u003cspan class=\\\"addto-watch-queue-menu-text\\\"\\u003ePlay next\\u003c\\\/span\\u003e\\u003c\\\/li\\u003e\\u003cli role=\\\"menuitem\\\" class=\\\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item\\\" data-action=\\\"play-now\\\" onclick=\\\";return false;\\\"  data-video-ids=\\\"__VIDEO_ID__\\\"\\u003e\\u003cspan class=\\\"addto-watch-queue-menu-text\\\"\\u003ePlay now\\u003c\\\/span\\u003e\\u003c\\\/li\\u003e\\u003c\\\/ul\\u003e\\u003c\\\/button\\u003e\\n  \\u003c\\\/span\\u003e\\n\",'SAFETY_MODE_PENDING': false,'ZWIEBACK_PING_URLS': [\"https:\\\/\\\/www.google.com\\\/pagead\\\/lvz?req_ts=1493856356\\u0026pg=index\\u0026evtid=ACWVUuahsCRB2kc8YBhNZTaLbu_O5GMM6Yi5x_7RE08FL8GSLLg77VXef5aalpzaDTcW1rADb5C2O5CwvMgVfFG56sZDkbX77w\\u0026sigh=AGwc71vZ7Lt3lymtTWkSfFiOr3NFnCVIkQ\"],'LOCAL_DATE_TIME_CONFIG': {\"shortMonths\":[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\",\"Dec\"],\"weekdays\":[\"Sunday\",\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\"],\"weekendRange\":[6,5],\"formatLongDateOnly\":\"MMMM d, yyyy\",\"formatWeekdayShortTime\":\"EE h:mm a\",\"dateFormats\":[\"MMMM d, yyyy h:mm a\",\"MMMM d, yyyy\",\"MMM d, yyyy\",\"MMM d, yyyy\"],\"firstWeekCutoffDay\":3,\"shortWeekdays\":[\"Sun\",\"Mon\",\"Tue\",\"Wed\",\"Thu\",\"Fri\",\"Sat\"],\"formatLongDate\":\"MMMM d, yyyy h:mm a\",\"months\":[\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\"],\"formatShortTime\":\"h:mm a\",\"formatShortDate\":\"MMM d, yyyy\",\"firstDayOfWeek\":0,\"amPms\":[\"AM\",\"PM\"]},'PAGE_CL': 154470109,'PAGE_BUILD_LABEL': \"youtube_20170427_0_RC5\",'VARIANTS_CHECKSUM': \"bb02ce2ea39c231878a60b412205e62d\",'CLIENT_PROTOCOL': \"HTTP\\\/1.0\",'CLIENT_TRANSPORT': \"tcp\",'MDX_ENABLE_CASTV2': true,'MDX_ENABLE_QUEUE': true,'SERVICE_WORKER_PROMPT_NOTIFICATIONS': true,'FEEDBACK_BUCKET_ID': \"Home\",'FEEDBACK_LOCALE_LANGUAGE': \"en\",'FEEDBACK_LOCALE_EXTRAS': {\"logged_in\":false,\"accept_language\":\"en-US,en;q=0.8\",\"experiments\":\"9406125,9415398,9416475,9419452,9419979,9420289,9422596,9423555,9431012,9432939,9433870,9434046,9434289,9434949,9438309,9439294,9439824,9440054,9440936,9441194,9442387,9442746,9444189,9444771,9445139,9446054,9446364,9448302,9449072,9449243,9451814,9451827,9452833,9453167,9453897,9454394,9454653,9455031,9456445,9456628,9456640,9456988,9457115,9457141,9457169,9457541,9457592,9457595,9457598,9458117,9458265,9458576,9458668,9459075,9459235,9459445,9459792,9459799,9459986,9460087,9460098,9460349,9460554,9460829,9460959,9461124,9461777,9462018,9462032,9463460,9463594,9463616,9463936,9463963,9463965,9464181,9464207,9464267,9464344,9464440,9464823,9464887,9464889,9465513,9465533,9465652,9465666,9465709,9465797,9465813,9466199,9466209,9466423,9466539,9466669,9466778,9466793,9466795,9466797,9466835,9467001,9467217,9467400,9467426,9467508,9467510,9467512,9467663,9467700,9467709,9467795,9467806,9467820,9467822,9467884,9467895,9468110,9468195,9468228,9468235,9468285,9468553,9468805,9469042,9469192,9469224,9469606,9469609,9469615,9469734,9469805,9469862,9469883,9469887,9469911,9469972,9470299,9470319,9470791,9470924,9471263,9471388,9471413,9471482,9471502,9471650,9471677,9471955,9472010,9472097,9472146,9472150,9472169,9472178,9472401,9472416,9472450,9472485,9472559,9472609,9472711,9472879,9473374,9473387,9473393,9473514,9473576,9473977,9474064,9474099,9474241,9474259\"}});   yt.setConfig({\r\n    'GUIDED_HELP_LOCALE': \"en_US\",\r\n    'GUIDED_HELP_ENVIRONMENT': \"prod\"\r\n  });\r\nyt.setConfig('SPF_SEARCH_BOX', true);yt.setMsg({'ADDTO_CREATE_NEW_PLAYLIST': \"Create new playlist\\n\",'ADDTO_CREATE_PLAYLIST_DYNAMIC_TITLE': \"  $dynamic_title_placeholder (create new)\\n\",'ADDTO_WATCH_LATER': \"Watch Later\",'ADDTO_WATCH_LATER_ADDED': \"Added\",'ADDTO_WATCH_LATER_ERROR': \"Error\",'ADDTO_WATCH_QUEUE': \"Watch Queue\",'ADDTO_WATCH_QUEUE_ADDED': \"Added\",'ADDTO_WATCH_QUEUE_ERROR': \"Error\",'ADDTO_TV_QUEUE': \"Queue\",'ADS_INSTREAM_FIRST_PLAY': \"A video ad is playing.\",'ADS_INSTREAM_SKIPPABLE': \"Video ad can be skipped.\",'ADS_OVERLAY_IMPRESSION': \"Ad displayed.\",'MASTHEAD_NOTIFICATIONS_LABEL': {\"case1\": \"1 unread notification.\", \"case0\": \"0 unread notifications.\", \"other\": \"# unread notifications.\"},'MASTHEAD_NOTIFICATIONS_COUNT_99PLUS': \"99+\",'MDX_AUTOPLAY_OFF': 'Autoplay is off','MDX_AUTOPLAY_ON': 'Autoplay is on'});  yt.setConfig('FEED_PRIVACY_CSS_URL', \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-feedprivacydialog-vflWi26th.css\");\r\n  yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);\r\nyt.setConfig({'SBOX_JS_URL': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-searchbox-legacy-vflDE45EL\\\/www-searchbox-legacy.js\",'SBOX_SETTINGS': {\"SESSION_INDEX\":null,\"PQ\":\"\",\"REQUEST_DOMAIN\":\"us\",\"REQUEST_LANGUAGE\":\"en\",\"PSUGGEST_TOKEN\":null,\"IS_FUSION\":false,\"SUGG_EXP_ID\":\"\",\"HAS_ON_SCREEN_KEYBOARD\":false},'SBOX_LABELS': {\"SUGGESTION_DISMISS_LABEL\":\"Remove\",\"SUGGESTION_DISMISSED_LABEL\":\"Suggestion dismissed\"}});  yt.setConfig({\r\n    'YPC_LOADER_JS': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-ypc-vflQCA2fx\\\/www-ypc.js\",\r\n    'YPC_LOADER_CSS': \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-ypc-vfl-AgXO7.css\",\r\n    'YPC_SIGNIN_URL': \"https:\\\/\\\/accounts.google.com\\\/ServiceLogin?hl=en\\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26app%3Ddesktop%26action_handle_signin%3Dtrue%26next%3D%252F\\u0026service=youtube\\u0026passive=true\\u0026uilel=3\",\r\n    'DBLCLK_ADVERTISER_ID': \"2542116\",\r\n    'DBLCLK_YPC_ACTIVITY_GROUP': \"youtu444\",\r\n    'SUBSCRIPTION_URL': \"\\\/subscription_ajax\",\r\n    'YPC_SWITCH_URL': \"\\\/signin?skip_identity_prompt=True\\u0026next=%2F\\u0026action_handle_signin=true\\u0026feature=purchases\",\r\n    'YPC_GB_LANGUAGE': \"en_US\",\r\n    'YPC_MB_URL': \"https:\\\/\\\/payments.google.com\\\/payments\\\/v4\\\/js\\\/integrator.js?ss=md\",\r\n    'YPC_TRANSACTION_URL': \"\\\/transaction_handler\",\r\n    'YPC_SUBSCRIPTION_URL': \"\\\/ypc_subscription_ajax\",\r\n    'YPC_POST_PURCHASE_URL': \"\\\/ypc_post_purchase_ajax\",\r\n    'YTR_FAMILY_CREATION_URL': \"https:\\\/\\\/families.google.com\\\/webcreation?usegapi=1\",\r\n    'YTO_GTM_DATA': {'event': 'purchased', 'purchaseStatus': 'success'},\r\n    'YTO_GTM_1_BUTTON_CLICK_DATA': {'event': 'landingButtonClick', 'buttonPosition': '1'},\r\n    'YTO_GTM_2_BUTTON_CLICK_DATA': {'event': 'landingButtonClick', 'buttonPosition': '2'}\r\n  });\r\n  yt.setMsg({\r\n    'YPC_OFFER_OVERLAY': \"  \\n\",\r\n    'YPC_UNSUBSCRIBE_OVERLAY': \"  \\n\"\r\n  });\r\n  yt.setConfig('GOOGLE_HELP_CONTEXT', \"homepage\");\r\nytcsi.info('st', 1060);ytcfg.set({\"CSI_SERVICE_NAME\":\"youtube\",\"CSI_VIEWPORT\":true,\"TIMING_AFT_KEYS\":[\"ol\"],\"TIMING_INFO\":{\"GetBrowse_rid\":\"0xfe50f5a5384dd3f8\",\"cver\":\"1.20170427\",\"yt_li\":\"0\",\"yt_fn\":\"what_to_watch\",\"yt_ref\":\"watch\",\"c\":\"WEB\",\"yt_lt\":\"cold\"},\"TIMING_ACTION\":\"home\"});;  yt.setConfig({\r\n      'XSRF_TOKEN': \"QUFFLUhqbk1xZ0VsUnVYelZDc3ZiVzJmR2VOam5hS1Bmd3xBQ3Jtc0trcHpoVm14YTBKZm5JNTdlZVF1RGpOVGl6Ym9Hc0tENmFIZmN6dzZ1Ymx6ZDhiaDVuOV93SVpJY0UzS0RRUG5xX3lWRC1Kc2JhbEFlbXhHVjVMT2EzT2NMblRSOU52ZnFNYzhSanVNekNqTDMtNnhxQXJ6MW5Mc0lNZFo2aVU2a1VXMkRBemdvTXBkalg4ZGJVeHNSQlg3VktnTkE=\",\r\n      'XSRF_FIELD_NAME': \"session_token\",\r\n\r\n      'XSRF_REDIRECT_TOKEN': \"syBjsRClqgZYSmtfldlRMvsH3wR8MTQ5Mzk0Mjc1N0AxNDkzODU2MzU3\"  });\r\nyt.setConfig('ID_TOKEN', null);window.ytcfg.set('SERVICE_WORKER_KILLSWITCH', false);  yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 300);\r\nif (window.ytcsi) {window.ytcsi.tick(\"jl\", null, '');}<\/script>",
    "head": "\u003cscript\u003eyt.www.masthead.sizing.runBeforeBodyIsReady(true,true,true);\u003c\/script\u003e\n  \n    \u003clink rel=\"stylesheet\" href=\"\/\/s.ytimg.com\/yts\/cssbin\/www-core-vflRpAQYK.css\" name=\"www-core\"\u003e\n\n\n        \u003clink rel=\"stylesheet\" href=\"\/\/s.ytimg.com\/yts\/cssbin\/www-home-c4-vflTP5Mlh.css\" name=\"www-home-c4\"\u003e",
    "title": "YouTube",
    "url": "\/"
}
	
	<?php
	} else {
?>
  <!DOCTYPE html><html lang="en" data-cast-api-enabled="true"><head><style name="www-roboto">@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local('Roboto-Italic'),url(//fonts.gstatic.com/s/roboto/v15/W4wDsBUluyw0tK3tykhXEfesZW2xOQ-xsNqO47m55DA.ttf)format('truetype');}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local('Roboto-Medium'),url(//fonts.gstatic.com/s/roboto/v15/RxZJdnzeo3R5zSexge8UUaCWcynf_cDxXwCLxiixG1c.ttf)format('truetype');}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto Regular'),local('Roboto-Regular'),url(//fonts.gstatic.com/s/roboto/v15/zN7GBFwfMP4uA6AR0HCoLQ.ttf)format('truetype');}@font-face{font-family:'Roboto';font-style:italic;font-weight:500;src:local('Roboto Medium Italic'),local('Roboto-MediumItalic'),url(//fonts.gstatic.com/s/roboto/v15/OLffGBTaF0XFOW1gnuHF0Z0EAVxt0G0biEntp43Qt6E.ttf)format('truetype');}</style><script name="www-roboto">if (document.fonts && document.fonts.load) {document.fonts.load("400 10pt Roboto", "E");document.fonts.load("500 10pt Roboto", "E");}</script><script>var ytcsi = {gt: function(n) {n = (n || '') + 'data_';return ytcsi[n] || (ytcsi[n] = {tick: {},info: {}});},now: window.performance && window.performance.timing &&window.performance.now ? function() {return window.performance.timing.navigationStart + window.performance.now();} : function() {return (new Date()).getTime();},tick: function(l, t, n) {ticks = ytcsi.gt(n).tick;var v = t || ytcsi.now();if (ticks[l]) {ticks['_' + l] = (ticks['_' + l] || [ticks[l]]);ticks['_' + l].push(v);}ticks[l] = v;},info: function(k, v, n) {ytcsi.gt(n).info[k] = v;},setStart: function(s, t, n) {ytcsi.info('yt_sts', s, n);ytcsi.tick('_start', t, n);}};(function(w, d) {ytcsi.setStart('dhs', w.performance ? w.performance.timing.responseStart : null);var isPrerender = (d.visibilityState || d.webkitVisibilityState) == 'prerender';var vName = d.webkitVisibilityState ? 'webkitvisibilitychange' : 'visibilitychange';if (isPrerender) {ytcsi.info('prerender', 1);var startTick = function() {ytcsi.setStart('dhs');d.removeEventListener(vName, startTick);};d.addEventListener(vName, startTick, false);}if (d.addEventListener) {d.addEventListener(vName, function() {ytcsi.tick('vc');}, false);}var slt = function(el, t) {setTimeout(function() {var n = ytcsi.now();el.loadTime = n;if (el.slt) {el.slt();}}, t);};w.__ytRIL = function(el) {if (!el.getAttribute('data-thumb')) {if (w.requestAnimationFrame) {w.requestAnimationFrame(function() {slt(el, 0);});} else {slt(el, 16);}}};})(window, document);</script><script>var ytcfg = {d: function() {return (window.yt && yt.config_) || ytcfg.data_ || (ytcfg.data_ = {});},get: function(k, o) {return (k in ytcfg.d()) ? ytcfg.d()[k] : o;},set: function() {var a = arguments;if (a.length > 1) {ytcfg.d()[a[0]] = a[1];} else {for (var k in a[0]) {ytcfg.d()[k] = a[0][k];}}}};</script>  
  




  <script>
        (function(){var b={a:"content-snap-width-1",b:"content-snap-width-2",c:"content-snap-width-3"};function f(){var a=[],c;for(c in b)a.push(b[c]);return a}
function h(a){var c=f().concat(["guide-pinned","show-guide"]),e=c.length,g=[];a.replace(/\S+/g,function(a){for(var d=0;d<e;d++)if(a==c[d])return;g.push(a)});
return g}
;function k(a,c,e){var g=document.getElementsByTagName("html")[0],d=h(g.className);a&&1251<=(window.innerWidth||document.documentElement.clientWidth)&&(d.push("guide-pinned"),c&&d.push("show-guide"));e&&(e=(window.innerWidth||document.documentElement.clientWidth)-21-50,1251<=(window.innerWidth||document.documentElement.clientWidth)&&a&&c&&(e-=230),d.push(1262<=e?"content-snap-width-3":1056<=e?"content-snap-width-2":"content-snap-width-1"));g.className=d.join(" ")}
var l=["yt","www","masthead","sizing","runBeforeBodyIsReady"],m=this;l[0]in m||!m.execScript||m.execScript("var "+l[0]);for(var n;l.length&&(n=l.shift());)l.length||void 0===k?m[n]&&m[n]!==Object.prototype[n]?m=m[n]:m=m[n]={}:m[n]=k;}).call(this);

      try {window.ytbuffer = {};ytbuffer.handleClick = function(e) {var element = e.target || e.srcElement;while (element.parentElement) {if (/(^| )yt-can-buffer( |$)/.test(element.className)) {window.ytbuffer = {bufferedClick: e};element.className += ' yt-is-buffered';break;}element = element.parentElement;}};if (document.addEventListener) {document.addEventListener('click', ytbuffer.handleClick);} else {document.attachEvent('onclick', ytbuffer.handleClick);}} catch(e) {}

    yt.www.masthead.sizing.runBeforeBodyIsReady(true,true,true);
  </script>

      <script src="//s.ytimg.com/yts/jsbin/scheduler-vflP0xYB-/scheduler.js" type="text/javascript" name="scheduler/scheduler"></script>


  
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-core-vflW4fJHd.css" name="www-core">
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-spacecast-vflvydAHe.css" name="www-spacecast">
    <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-home-c4-vflVmH63h.css" name="www-home-c4">

  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-pageframe-vfl1hU8te.css" name="www-pageframe">
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-guide-vflJFFhnq.css" name="www-guide">

    
<title>YouTube</title><link rel="canonical" href="https://www.youtube.com/"><link rel="alternate" media="handheld" href="https://m.youtube.com/"><link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.youtube.com/"><meta name="description" content="Enjoy the videos and music you love, upload original content, and share it all with friends, family, and the world on YouTube."><meta name="keywords" content="video, sharing, camera phone, video phone, free, upload"><link rel="manifest" href="/manifest.json"><link rel="search" type="application/opensearchdescription+xml" href="https://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search"><link rel="shortcut icon" href="https://s.ytimg.com//s.ytimg.com/yts/img/favicon-vflz7uhzw.ico" type="image/x-icon">     <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vfl8NGn4k.png" sizes="32x32"><link rel="icon" href="//s.ytimg.com/yts/img/favicon_48-vfl1s0rGh.png" sizes="48x48"><link rel="icon" href="//s.ytimg.com/yts/img/favicon_96-vfldSA3ca.png" sizes="96x96"><link rel="icon" href="//s.ytimg.com/yts/img/favicon_144-vflWmzoXw.png" sizes="144x144"><meta name="theme-color" content="#e62117">  <meta property="og:image" content="//s.ytimg.com/yts/img/yt_1200-vfl4C3T0K.png">
  <meta property="fb:app_id" content="87741124305">
  <link rel="publisher" href="https://plus.google.com/115229808208707341778">
  <link rel="alternate" href="android-app://com.google.android.youtube/http/www.youtube.com/">
  <link rel="alternate" href="ios-app://544007664/vnd.youtube/www.youtube.com/">
<style>.yt-uix-button-primary, .yt-uix-button-primary[disabled], .yt-uix-button-primary[disabled]:hover, .yt-uix-button-primary[disabled]:active, .yt-uix-button-primary[disabled]:focus { background-color: #167ac6; }</style></head>
    <body dir="ltr" id="body" class="  ltr    exp-responsive exp-scrollable-guide exp-search-big-thumbs   site-center-aligned site-as-giant-card guide-pinning-enabled    visibility-logging-enabled   not-nirvana-dogfood  not-yt-legacy-css    flex-width-enabled      flex-width-enabled-snap    delayed-frame-styles-not-in  " data-spf-name="other">

  <div id="early-body"></div>
  <div id="body-container"><div id="a11y-announcements-container" role="alert"><div id="a11y-announcements-message"></div></div><form name="logoutForm" method="POST" action="/logout"><input type="hidden" name="action_logout" value="1"></form><div id="masthead-positioner">  <div id="ticker-content">
        

  </div>
  <?php
	include("./yts/htmlbin/hitchhiker-masthead-vfl_BASED.php");
	?>
    <div id="masthead-appbar-container" class="clearfix"><div id="masthead-appbar"><div id="appbar-content" class="">      <div id="appbar-nav" class="appbar-content-hidable">
<ul class="appbar-nav-menu"><li>    <h2 class="epic-nav-item-heading " aria-selected="true">
      Home
    </h2>
</li><li>    <a href="/feed/trending" class="yt-uix-button   spf-link yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;ved=CLIBEMMtGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4" aria-selected="false"><span class="yt-uix-button-content">Trending</span></a>
</li></ul>  </div>

</div></div></div>

</div><div id="masthead-positioner-height-offset"></div><div id="page-container"><div id="page" class="  home     branded-page-v2-masthead-ad-header  clearfix"><div id="guide" class="yt-scrollbar">      <div id="appbar-guide-menu" class="appbar-menu appbar-guide-menu-layout appbar-guide-clickable-ancestor yt-uix-scroller yt-uix-tdl" role="navigation">
    <div id="guide-container">
        <div class="guide-module-content yt-scrollbar">
    <ul class="guide-toplevel">
            <li class="guide-section vve-check"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
      
      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="what_to_watch-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link  guide-item-selected   "
    href="/"
    title="Home"
    data-external-id="what_to_watch" data-serialized-endpoint="0qDduQEREg9GRXdoYXRfdG9fd2F0Y2g%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-system&amp;ved=CJ4BELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-what-to-watch-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            Home
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="trending-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/feed/trending"
    title="Trending"
    data-external-id="trending" data-serialized-endpoint="0qDduQEMEgpGRXRyZW5kaW5n" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-trending&amp;ved=CJ8BELUsGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-trending-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            Trending
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="history-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/feed/history"
    title="History"
    data-external-id="history" data-serialized-endpoint="0qDduQELEglGRWhpc3Rvcnk%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-personal&amp;ved=CKABELUsGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-history-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            History
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="unlimited-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/red"
    title="Get YouTube Red"
    data-external-id="unlimited" data-serialized-endpoint="0qDduQENEgtTUHVubGltaXRlZA%3D%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;ved=CKEBELUsGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-video-youtube-red-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            Get YouTube Red
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink    "
    href="https://tv.youtube.com/?utm_source=youtube_web&amp;utm_medium=ep&amp;utm_campaign=home&amp;ve=34273"
    title="Get YouTube TV"
    data-external-id="" data-serialized-endpoint="qrnBvQFZCldodHRwczovL3R2LnlvdXR1YmUuY29tLz91dG1fc291cmNlPXlvdXR1YmVfd2ViJnV0bV9tZWRpdW09ZXAmdXRtX2NhbXBhaWduPWhvbWUmdmU9MzQyNzM%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;ved=CKIBEOGLAhgEIhMIqO_vy_jU0wIVTYZ-Ch0xUA-AKI4e"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-unplugged-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            Get YouTube TV
          </span>
        </span>
    </span>
  </a>

  </li>

      </ul>
    </div>
      <hr class="guide-section-separator">
  </li>

            <li class="guide-section vve-check"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
          <h3>
      Best of YouTube
    </h3>

      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UC-9-kyTW8ZkZNDHQJ6FgpwQ-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UC-9-kyTW8ZkZNDHQJ6FgpwQ"
    title="Music"
    data-external-id="UC-9-kyTW8ZkZNDHQJ6FgpwQ" data-serialized-endpoint="0qDduQEaEhhVQy05LWt5VFc4WmtaTkRIUUo2Rmdwd1E%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKQBELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/-9-kyTW8ZkZNDHQJ6FgpwQ/1.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            Music
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCEgdi0XIXXZ-qJOFPf4JSKw-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UCEgdi0XIXXZ-qJOFPf4JSKw"
    title="Sports"
    data-external-id="UCEgdi0XIXXZ-qJOFPf4JSKw" data-serialized-endpoint="0qDduQEaEhhVQ0VnZGkwWElYWFotcUpPRlBmNEpTS3c%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKUBELUsGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/Egdi0XIXXZ-qJOFPf4JSKw/1.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            Sports
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCOpNcN46UbXVtpKMrmU4Abg-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UCOpNcN46UbXVtpKMrmU4Abg"
    title="Gaming"
    data-external-id="UCOpNcN46UbXVtpKMrmU4Abg" data-serialized-endpoint="0qDduQEaEhhVQ09wTmNONDZVYlhWdHBLTXJtVTRBYmc%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKYBELUsGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/OpNcN46UbXVtpKMrmU4Abg/1.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            Gaming
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UClgRkhTL3_hImCAmdLfDE4g-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UClgRkhTL3_hImCAmdLfDE4g"
    title="Movies"
    data-external-id="UClgRkhTL3_hImCAmdLfDE4g" data-serialized-endpoint="0qDduQEaEhhVQ2xnUmtoVEwzX2hJbUNBbWRMZkRFNGc%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKcBELUsGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/lgRkhTL3_hImCAmdLfDE4g/1.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            Movies
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCl8dMTqDrJQ0c8y23UBu4kQ-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UCl8dMTqDrJQ0c8y23UBu4kQ"
    title="TV Shows"
    data-external-id="UCl8dMTqDrJQ0c8y23UBu4kQ" data-serialized-endpoint="0qDduQEaEhhVQ2w4ZE1UcURySlEwYzh5MjNVQnU0a1E%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKgBELUsGAQiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://yt3.ggpht.com/-hFxEr8QHrvM/AAAAAAAAAAI/AAAAAAAAAAA/REjjL0X3gIs/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            TV Shows
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCYfdidRxbB8Qhf0Nx7ioOYw-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UCYfdidRxbB8Qhf0Nx7ioOYw"
    title="News"
    data-external-id="UCYfdidRxbB8Qhf0Nx7ioOYw" data-serialized-endpoint="0qDduQEaEhhVQ1lmZGlkUnhiQjhRaGYwTng3aW9PWXc%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKkBELUsGAUiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/YfdidRxbB8Qhf0Nx7ioOYw/1.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            News
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UC4R8DWoMoI7CAwX8_LjQHig-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UC4R8DWoMoI7CAwX8_LjQHig"
    title="Live"
    data-external-id="UC4R8DWoMoI7CAwX8_LjQHig" data-serialized-endpoint="0qDduQEaEhhVQzRSOERXb01vSTdDQXdYOF9MalFIaWc%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKoBELUsGAYiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/4R8DWoMoI7CAwX8_LjQHig/1.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            Live
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCBR8-60-B28hp2BmDPdntcQ-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UCBR8-60-B28hp2BmDPdntcQ"
    title="Spotlight"
    data-external-id="UCBR8-60-B28hp2BmDPdntcQ" data-serialized-endpoint="0qDduQEaEhhVQ0JSOC02MC1CMjhocDJCbURQZG50Y1E%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKsBELUsGAciEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://yt3.ggpht.com/-dL2jeHlm2Ok/AAAAAAAAAAI/AAAAAAAAAAA/ZCMMkRj-hrw/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            Spotlight
          </span>
        </span>
    </span>
  </a>

  </li>

            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCzuqhhs6NWbgTzMuM09WKDQ-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/channel/UCzuqhhs6NWbgTzMuM09WKDQ"
    title="360° Video"
    data-external-id="UCzuqhhs6NWbgTzMuM09WKDQ" data-serialized-endpoint="0qDduQEaEhhVQ3p1cWhoczZOV2JnVHpNdU0wOVdLRFE%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel&amp;ved=CKwBELUsGAgiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" aria-hidden="true" data-ytimg="1" width="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/zuqhhs6NWbgTzMuM09WKDQ/1.jpg" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            360° Video
          </span>
        </span>
    </span>
  </a>

  </li>

      </ul>
    </div>
      <hr class="guide-section-separator">
  </li>

            <li class="guide-section vve-check"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
      
      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="guide_builder-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink    "
    href="/channels"
    title="Browse channels"
    data-external-id="guide_builder" data-serialized-endpoint="0qPduQECCAE%3D" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-manage&amp;ved=CK4BELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-builder-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            Browse channels
          </span>
        </span>
    </span>
  </a>

  </li>

      </ul>
    </div>
      <hr class="guide-section-separator">
  </li>

            <li class="guide-section guide-header signup-promo">
    <p>
      Sign in now to see your channels and recommendations!
    </p>
    <div id="guide-builder-promo-buttons" class="signed-out clearfix">
      <a href="https://accounts.google.com/ServiceLogin?hl=en&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26feature%3Dsign_in_promo%26app%3Ddesktop%26action_handle_signin%3Dtrue%26next%3D%252F&amp;service=youtube&amp;passive=true&amp;uilel=3" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </li>

    </ul>
  </div>

    </div>
  </div>
  <div id="appbar-guide-notifications" class="hid">
        <div id="appbar-guide-notification-watch-later-video-added">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Added to Watch Later</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-watch-later-video-removed">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Removed from Watch Later</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-subscription">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Subscription added</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-unsubscription">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Subscription removed</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-like">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Saved to Playlists</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-unlike">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Removed from Playlists</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-video-added">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Added to playlist</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-video-removed">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Removed from playlist</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-video-like">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Added to Liked videos</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-video-unlike">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Removed from Liked videos</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-event-reminder-set">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >You'll be reminded about this event</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-event-reminder-removed">
    <!--
    <div class="appbar-guide-notification " role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" >Event reminder removed</span></span></div>
    -->
  </div>


  </div>
  <div id="appbar-guide-item-templates" class="hid">
        <div id="appbar-guide-item-template-playlist">
      <!--
        
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item show-insertion-notification " id="__ID__-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink    "
    href="__URL__"
    title="__TITLE__"
    data-external-id="__ID__" data-serialized-endpoint="" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-playlists"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-playlists-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification" role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" aria-label="Saved to Playlists">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
  </li>

      -->
    </div>
    <div id="appbar-guide-item-template-mix">
      <!--
        
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item show-insertion-notification " id="__ID__-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink    "
    href="__URL__"
    title="__TITLE__"
    data-external-id="__ID__" data-serialized-endpoint="" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-playlists"
  >
    <span class="yt-valign-container">
        <span class="thumb guide-mix-icon yt-sprite"></span>
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification" role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" aria-label="Saved to Playlists">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
  </li>

      -->
    </div>
    <div id="appbar-guide-item-template-channel">
      <!--
        
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item show-insertion-notification " id="__ID__-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink    "
    href="__URL__"
    title="__TITLE__"
    data-external-id="__ID__" data-serialized-endpoint="" data-visibility-tracking="" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;feature=g-channel"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img aria-hidden="true" data-ytimg="1" width="20" src="__THUMBNAIL_URL__" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" alt="" >

        <span class="vertical-align"></span>
      </span>
    </span>
  </span>
</span>
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification" role="alert"><span class="appbar-guide-notification-content-wrapper yt-valign"><span class="appbar-guide-notification-icon yt-sprite"></span><span class="appbar-guide-notification-text-content" aria-label="Subscription added">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
  </li>

      -->
    </div>

  </div>

</div><div class="alerts-wrapper"><div id="alerts" class="content-alignment">  
</div></div><div id="header">          


    <div id="ad_creative_1" class="ad-div mastad" style="z-index: 1;">
<script>(function() {var loaded = function() {return window.yt && yt.www && yt.www.feed && yt.www.feed.ui && yt.www.feed.ui.ads;};window.masthead_ad_creative_iframe_1_workaround = function() {if (loaded()) {yt.www.feed.ui.ads.workaroundIE(this);}};window.masthead_ad_creative_iframe_1_onload = function() {if (!loaded()) {setTimeout(masthead_ad_creative_iframe_1_onload, 50);return;}yt.www.feed.ui.ads.workaroundLoad();};})();</script>
      <script>(function() {function tagMpuIframe() {var containerEl = document.getElementById('ad_creative_1');if (!containerEl) {return;}var iframeEl = document.createElement('iframe');var iframeSrc = "https:\/\/pubads.g.doubleclick.net\/gampad\/ads?ad_rule=0\u0026d_imp=1\u0026gdfp_req=1\u0026impl=ifr\u0026iu=%2F4061%2Fcom.ythome\u0026pucrd=CgYIABAAGAA\u0026scp=dc_yt%3D1%26kbsg%3DHPUS170503%26kga%3D-1%26kgg%3D-1%26klg%3Den%26kmyd%3Dad_creative_1%26ssl%3D1%26ytdevice%3D1%26ytexp%3D9406125%252C9419452%252C9422596%252C9431012%252C9434289%252C9439824%252C9446054%252C9451827%252C9456628%252C9456988%252C9458117%252C9459235%252C9459986%252C9460349%252C9464267%252C9464344%252C9465797%252C9465813%252C9466199%252C9466209%252C9466423%252C9466539%252C9466669%252C9466778%252C9467709%252C9467884%252C9468235%252C9469805%252C9471263%252C9471388%252C9471502%252C9471650%252C9471677%252C9472146%252C9472879%252C9474241\u0026sz=970x250\u0026ytdevice=1" + '&correlator=' +Math.floor(Math.random() * 10000000000000000);iframeEl.id = 'ad_creative_iframe_1';iframeEl.width = '970';iframeEl.height = '250';iframeEl.style.cssText = 'z-index:1;';iframeEl.onload = window.masthead_ad_creative_iframe_1_onload;iframeEl.onmouseover = window.masthead_ad_creative_iframe_1_workaround;iframeEl.onfocus = window.masthead_ad_creative_iframe_1_workaround;iframeEl.setAttribute('allowFullScreen', '');iframeEl.scrolling = 'no';iframeEl.frameBorder = '0';containerEl.appendChild(iframeEl);iframeEl.src = iframeSrc;}tagMpuIframe();if (window.ytcsi) {window.ytcsi.info("yt_ad", "1", '');}})();</script>
    </div>



      <div id="ad_creative_expand_btn_1" class="masthead-ad-control open content-alignment masthead-ad-control-header hid">
    <a onclick="masthead.expand_ad(); return false;" class="yt-valign">
      <span class="yt-valign-container">Show ad</span>
      <img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" class="yt-valign-container">
    </a>
  </div>

</div><div id="player" class="  off-screen " role="complementary"><div id="theater-background" class="player-height"></div>  <div id="player-mole-container">
    <div id="player-unavailable" class="  hid  ">
      
    </div>

    <div id="player-api" class="player-width player-height off-screen-target player-api" tabIndex="-1"></div>
        <script>if (window.ytcsi) {window.ytcsi.tick("cfg", null, '');}</script>
    <script>var ytplayer = ytplayer || {};ytplayer.config = {"url_v9as2":"","attrs":{"id":"movie_player"},"assets":{"js":"\//s.ytimg.com/yts\/jsbin\/player-vflppxuSE\/en_US\/base.js","css":"\//s.ytimg.com/yts\/cssbin\/player-vflAZABhd\/www-player.css"},"min_version":"8.0.0","url_v8":"https:\/\/s.ytimg.com\//s.ytimg.com/yts\/swfbin\/player-vflQ8jJxo\/cps.swf","url":"https:\/\/s.ytimg.com\//s.ytimg.com/yts\/swfbin\/player-vflQ8jJxo\/watch_as3.swf","args":{"innertube_api_key":"AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8","fflags":"player_destroy_old_version=true\u0026html5_tight_max_buffer_allowed_impaired_time=0.0\u0026live_readahead_seconds_multiplier=0.8\u0026html5_default_quality_cap=0\u0026html5_new_preloading=true\u0026ad_video_end_renderer_duration_milliseconds=7000\u0026yto_enable_watch_offer_module=true\u0026html5_progressive_signature_reload=true\u0026king_crimson_player=false\u0026fixed_padding_skip_button=true\u0026html5_strip_emsg=true\u0026html5_max_av_sync_drift=50\u0026send_api_stats_ads_asr=true\u0026show_countdown_on_bumper=true\u0026html5_reduce_startup_rebuffers=true\u0026html5_suspend_manifest_on_pause=true\u0026enable_playlist_multi_season=true\u0026html5_live_4k_more_buffer=true\u0026html5_repredict_interval_secs=0.0\u0026use_new_style=true\u0026html5_stale_dash_manifest_retry_factor=1.0\u0026html5_min_upgrade_health=0\u0026html5_adjust_effective_request_size=true\u0026html5_deadzone_multiplier=1.1\u0026html5_live_pin_to_tail=true\u0026android_native_live_enablement=true\u0026use_new_skip_icon=true\u0026html5_background_cap_idle_secs=60\u0026use_fast_fade_in_0s=true\u0026html5_throttle_rate=0.0\u0026html5_msi_error_fallback=true\u0026html5_local_max_byterate_lookahead=15\u0026html5_pause_manifest_ended=true\u0026dynamic_ad_break_pause_threshold_sec=0\u0026use_push_for_desktop_live_chat=true\u0026mweb_muted_autoplay_animation=none\u0026html5_suspended_state=true\u0026vss_dni_delayping=0\u0026mweb_blacklist_progressive_chrome_mobile=true\u0026html5_nnr_downgrade_count=16\u0026html5_check_for_reseek=true\u0026html5_retry_media_element_errors_delay=0\u0026dynamic_ad_break_seek_threshold_sec=0\u0026html5_min_byterate_to_time_out=0\u0026html5_clearance_fix=true\u0026chrome_promo_enabled=true\u0026kids_enable_block_servlet=true\u0026enable_red_carpet_p13n_shelves=true\u0026spherical_on_android_iframe=true\u0026autoplay_time=8000\u0026yto_enable_ytr_promo_refresh_assets=true\u0026show_thumbnail_on_standard=true\u0026html5_bandwidth_window_size=0\u0026html5_tight_max_buffer_allowed_bandwidth_stddevs=0.0\u0026html5_spherical_bicubic_mode=0\u0026playready_on_borg=true\u0026html5_live_disable_dg_pacing=true\u0026new_promo_page=true\u0026mobile_disable_ad_mob_on_home=true\u0026html5_max_buffer_duration=0\u0026sdk_wrapper_levels_allowed=0\u0026youtubei_for_web=true\u0026midroll_notify_time_seconds=5\u0026html5_disable_audio_slicing=true\u0026html5_min_vss_watchtime_to_cut_secs=0.0\u0026html5_variability_discount=0.5\u0026html5_elbow_tracking_tweaks=true\u0026ad_duration_threshold_for_showing_endcap_seconds=15\u0026html5_disable_non_contiguous=true\u0026kids_asset_theme=server_side_assets\u0026legacy_autoplay_flag=true\u0026html5_min_readbehind_cap_secs=0\u0026yto_enable_unlimited_landing_page_yto_features=true\u0026html5_serverside_biscotti_id_wait_ms=1000\u0026html5_request_size_min_secs=0.0\u0026polymer_report_missing_web_navigation_endpoint=false\u0026yto_feature_hub_channel=false\u0026uniplayer_dbp=true\u0026html5_min_readbehind_secs=0\u0026disable_search_mpu=true\u0026enable_pla_desktop_shelf=true\u0026mweb_enable_skippables_on_iphone=true\u0026yt_unlimited_pts_skip_ads_promo_desktop_always=true\u0026enable_local_channel=true\u0026html5_variability_no_discount_thresh=1.0\u0026pla_shelf_hovercard=true\u0026android_buy_bucket_buy_flows=true\u0026html5_seeks_are_not_rebuffers=true\u0026signed_out_notifications_inbox=true\u0026live_chunk_readahead=3\u0026html5_timeupdate_readystate_check=true\u0026disable_indisplay_adunit_on_embedded=true\u0026doubleclick_gpt_retagging=true\u0026kids_enable_privacy_notice=true\u0026html5_always_reload_on_403=true\u0026html5_bandwidth_multisample_width=0.1\u0026enable_offer_restricts_for_watch_page_offers=true\u0026lock_fullscreen=false\u0026html5_use_adaptive_live_readahead=true\u0026html5_playing_event_buffer_underrun=true\u0026html5_enable_embedded_player_visibility_signals=true\u0026html5_min_startup_smooth_target=10.0\u0026player_interaction_logging=true\u0026mpu_visible_threshold_count=2\u0026kids_enable_server_side_assets=true\u0026html5_max_buffer_health_for_downgrade=15\u0026lugash_header_warmup=true\u0026postroll_notify_time_seconds=5\u0026desktop_cleanup_companion_on_instream_begin=true\u0026lugash_header_by_service=true\u0026interaction_log_delayed_event_batch_size=200\u0026html5_use_mediastream_timestamp=true\u0026android_enable_thumbnail_overlay_side_panel=false\u0026disable_new_pause_state3=true\u0026html5_max_vss_watchtime_ratio=0.0\u0026html5_min_vss_watchtime_to_cut_secs_redux=0.0\u0026html5_min_secs_between_format_selections=8.0\u0026enable_plus_page_pts=true\u0026html5_ad_no_buffer_abort_after_skippable=true\u0026html5_connect_timeout_secs=7.0\u0026stop_using_ima_sdk_gpt_request_activity=true\u0026html5_vp9_live_whitelist=false\u0026html5_preload_size_excludes_metadata=true\u0026html5_reseek_on_infinite_buffer=true\u0026forced_brand_precap_duration_ms=2000\u0026send_html5_api_stats_ads_abandon=true\u0026ios_enable_mixin_accessibility_custom_actions=true\u0026html5_variability_full_discount_thresh=3.0\u0026html5_idle_preload_secs=1\u0026kids_enable_terms_servlet=true\u0026live_fresca_v2=true\u0026html5_repredict_misses=5\u0026html5_always_enable_timeouts=true\u0026ios_disable_notification_preprompt=true\u0026sidebar_renderers=true\u0026html5_max_readahead_bandwidth_cap=0\u0026signed_out_notification_settings=true\u0026html5_background_quality_cap=360\u0026html5_allowable_liveness_drift_chunks=2\u0026html5_observed_downgrade_prop=0.0\u0026ios_notifications_disabled_subs_tab_promoted_item_promo=true\u0026html5_no_clear_on_quota_exceeded=true\u0026request_mpu_on_unfilled_ad_break=true\u0026mweb_pu_android_chrome_54_above=true\u0026dash_manifest_version=5\u0026html5_get_video_info_timeout_ms=0\u0026enable_live_state_auth=true\u0026website_actions_throttle_percentage=1.0\u0026king_crimson_player_redux=true\u0026html5_long_term_bandwidth_window_size=0\u0026flex_theater_mode=true\u0026html5_min_buffer_to_resume=6\u0026exo_drm_max_keyfetch_delay_ms=0\u0026html5_trust_platform_bitrate_limits=true\u0026disable_client_side_midroll_freq_capping=true\u0026variable_load_timeout_ms=0\u0026max_resolution_for_white_noise=360\u0026html5_post_interrupt_readahead=0\u0026kids_enable_post_onboarding_red_flow=true\u0026html5_get_video_info_promiseajax=true\u0026html5_report_conn=true\u0026fix_gpt_pos_params=true\u0026html5_request_sizing_multiplier=0.8\u0026enable_ccs_buy_flow_for_chirp=true","cver":"1.20170427","autoplay":"0","host_language":"en","innertube_api_version":"v1","apiary_host_firstparty":"","player_error_log_fraction":"1.0","cr":"US","hl":"en_US","ssl":"1","apiary_host":"","c":"WEB","enablejsapi":"1","fexp":"9406125,9419452,9422596,9431012,9434046,9434289,9439824,9446054,9446364,9449243,9453897,9456640,9456988,9457141,9458117,9458576,9459235,9459986,9463594,9463965,9464267,9464344,9465533,9465797,9465813,9466199,9466209,9466423,9466539,9466669,9466778,9466778,9466793,9466795,9466797,9467217,9467709,9467884,9468235,9468805,9469224,9469805,9471388,9471502,9471650,9471677,9472097,9472146,9472879,9474241","gapi_hint_params":"m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.DTPeBB_SvOA.O\/m=__features__\/rt=j\/d=1\/rs=AHpOoo-J3J0yqNDMPVrmQT6j-SBFfGx8oA","xhr_apiary_host":"youtubei.youtube.com","innertube_context_client_version":"1.20170427"},"params":{"allowscriptaccess":"always","allowfullscreen":"true","bgcolor":"#000000"},"html5":true,"sts":17277,"messages":{"player_fallback":["Adobe Flash Player or an HTML5 supported browser is required for video playback.\u003cbr\u003e\u003ca href=\"https:\/\/get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player \u003c\/a\u003e\u003cbr\u003e\u003ca href=\"\/html5\"\u003eLearn more about upgrading to an HTML5 browser\u003c\/a\u003e"]}};ytplayer.load = function() {yt.player.Application.create("player-api", ytplayer.config);ytplayer.config.loaded = true;};</script>


    <div id="watch-queue-mole" class="video-mole mole-collapsed hid"><div id="watch-queue" class="watch-playlist player-height"><div class="main-content"><div class="watch-queue-header"><div class="watch-queue-info"><div class="watch-queue-info-icon"><span class="tv-queue-list-icon yt-sprite"></span></div><h3 class="watch-queue-title">Watch Queue</h3><h3 class="tv-queue-title">Queue</h3><span class="tv-queue-details"></span></div><div class="watch-queue-control-bar control-bar-button"><div class="watch-queue-mole-info"><div class="watch-queue-control-bar-icon"><span class="watch-queue-icon yt-sprite"></span></div><div class="watch-queue-title-container"><span class="watch-queue-count"></span><span class="watch-queue-title">Watch Queue</span><span class="tv-queue-title">Queue</span></div></div>  <span class="dark-overflow-action-menu">
    
    
    <button type="button" aria-haspopup="true" aria-label="Actions for the queue" aria-expanded="false" onclick=";return false;" class="flip control-bar-button yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty" ><span class="yt-uix-button-arrow yt-sprite"></span><ul class="watch-queue-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid" role="menu" aria-haspopup="true"><li role="menuitem"><span onclick=";return false;" data-action="remove-all" class="watch-queue-menu-choice overflow-menu-choice yt-uix-button-menu-item" >Remove all</span></li><li role="menuitem"><span onclick=";return false;" data-action="disconnect" class="watch-queue-menu-choice overflow-menu-choice yt-uix-button-menu-item" >Disconnect</span></li></ul></button>
  </span>
  <div class="watch-queue-controls">
    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button prev-watch-queue-button yt-uix-button-opacity yt-uix-tooltip yt-uix-tooltip" type="button" onclick=";return false;" title="Previous video"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-prev yt-sprite"></span></span></button>

    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button play-watch-queue-button yt-uix-button-opacity yt-uix-tooltip yt-uix-tooltip" type="button" onclick=";return false;" title="Play"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-play yt-sprite"></span></span></button>

    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button pause-watch-queue-button yt-uix-button-opacity yt-uix-tooltip hid yt-uix-tooltip" type="button" onclick=";return false;" title="Pause"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-pause yt-sprite"></span></span></button>

    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button next-watch-queue-button yt-uix-button-opacity yt-uix-tooltip yt-uix-tooltip" type="button" onclick=";return false;" title="Next video"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-next yt-sprite"></span></span></button>
  </div>
</div><div class="autoplay-dismiss-bar fade-out"><span class="autoplay-dismiss-title-label">The next video is starting</span><span><button class="yt-uix-button yt-uix-button-size-default autoplay-dismiss-button yt-uix-tooltip" type="button" onclick=";return false;" title="stop"><span class="yt-uix-button-content">stop</span></button></span></div></div><div class="watch-queue-items-container yt-scrollbar-dark yt-scrollbar"><div class="yt-uix-scroller playlist-videos-list"><ol class="watch-queue-items-list" data-scroll-action="yt.www.watchqueue.loadThumbnails">  <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>
</ol><div class="autoplay-control-container yt-uix-scroller-scroll-unit hid">  <div class="autoplay-control-bar">
    <label class="autoplay-label" for=autoplay-toggle-id></label>
    <label class="yt-uix-form-input-checkbox-container yt-uix-form-input-container yt-uix-form-input-paper-toggle-container "><input class="yt-uix-form-input-checkbox" type="checkbox" id="autoplay-toggle-id"/><div class="yt-uix-form-input-paper-toggle-bg yt-uix-form-input-paper-toggle-bar"></div><div class="yt-uix-form-input-paper-toggle-bg yt-uix-form-input-paper-toggle-button"></div></label>
  </div>
</div><div class="up-next-item-container hid"></div></div></div></div>  <div class="hid">
    <div id="watch-queue-title-msg">
Watch Queue
    </div>

    <div id="tv-queue-title-msg">Queue</div>

    <div id="watch-queue-count-msg">
__count__/__total__
    </div>

    <div id="watch-queue-loading-template">
      <!--
          <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

      -->
    </div>
  </div>
</div></div>

    <div id="player-playlist" class="  hid  ">
      
    </div>

  </div>

  <div class="clear"></div>
</div><div id="content" class="  content-alignment" role="main">
<?php
	include("./yts_pagecontent/home.php");
	?>
</div></div></div></div>  <div id="footer-container" class="yt-base-gutter force-layer"><div id="footer"><div id="footer-main"><div id="footer-logo"><a href="/" id="footer-logo-link" title="YouTube home" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA&amp;ved=CAEQpmEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4" class="yt-uix-sessionlink"><span class="footer-logo-icon yt-sprite"></span></a></div>  <ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon" type="button" onclick=";return false;" id="yt-picker-language-button" data-button-action="yt.www.picker.load" data-picker-key="language" data-picker-position="footer" data-button-menu-id="arrow-display" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-footer-language yt-sprite"></span></span><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Language:
  </span>
  English
</span><span class="yt-uix-button-arrow yt-sprite"></span></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-country-button" data-button-action="yt.www.picker.load" data-picker-key="country" data-picker-position="footer" data-button-menu-id="arrow-display" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Content location:
  </span>
  United States
</span><span class="yt-uix-button-arrow yt-sprite"></span></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-safetymode-button" data-button-action="yt.www.picker.load" data-picker-key="safetymode" data-picker-position="footer" data-button-menu-id="arrow-display" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Restricted Mode:
  </span>
Off
</span><span class="yt-uix-button-arrow yt-sprite"></span></button>


      </li>
  </ul>
<a href="/feed/history" class="yt-uix-button  footer-history yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default yt-uix-button-has-icon" data-sessionlink="ei=ZHAKWaitKM2M-gOxoL2ACA"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-footer-history yt-sprite"></span></span><span class="yt-uix-button-content">History</span></a>    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon yt-uix-button-reverse yt-google-help-link inq-no-click " type="button" onclick=";return false;" data-ghelp-anchor="google-help" data-ghelp-tracking-param="" id="google-help" data-feedback-product-id="59" data-load-chat-support=""><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-questionmark yt-sprite"></span></span><span class="yt-uix-button-content">Help
</span></button>
      <div id="yt-picker-language-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-country-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-safetymode-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

</div><div id="footer-links"><ul id="footer-links-primary">  <li><a href="//www.youtube.com/yt/about/">About</a></li>
  <li><a href="//www.youtube.com/yt/press/">Press</a></li>
  <li><a href="//www.youtube.com/yt/copyright/">Copyright</a></li>
  <li><a href="//www.youtube.com/yt/creators/">Creators</a></li>
  <li><a href="//www.youtube.com/yt/advertise/">Advertise</a></li>
  <li><a href="//www.youtube.com/yt/dev/">Developers</a></li>
  <li><a href="https://plus.google.com/+youtube" dir="ltr">+YouTube</a></li>
</ul><ul id="footer-links-secondary">  <li><a href="/t/terms">Terms</a></li>
  <li><a href="https://www.google.com/intl/en/policies/privacy/">Privacy</a></li>
  <li><a href="//www.youtube.com/yt/policyandsafety/">
Policy &amp; Safety
  </a></li>
  <li><a href="//support.google.com/youtube/?hl=en" onclick="return yt.www.feedback.start(59);" class="reportbug">Send feedback</a></li>
  <li>
    <a href="/testtube">Test new features</a>
  </li>
  <li>  <span class="copyright" dir="ltr">&copy; 2017 YouTube, LLC</span>
</li>
</ul></div></div></div>


      <div class="yt-dialog hid " id="feed-privacy-lb">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg" role="dialog">
        <div class="yt-dialog-fg-content">
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
      <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

          </div>
          <div class="yt-dialog-content">
              <div id="feed-privacy-dialog">
  </div>

          </div>
          <div class="yt-dialog-working">
              <div class="yt-dialog-working-overlay"></div>
  <div class="yt-dialog-working-bubble">
    <div class="yt-dialog-waiting-content">
        <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
        Working...
    </span>
  </p>

      </div>
  </div>

          </div>
        </div>
        <div class="yt-dialog-focus-trap" tabindex="0"></div>
      </div>
    </div>
  </div>


<div id="hidden-component-template-wrapper" class="hid">    <div id="shared-addto-watch-later-login" class="hid">
      <a href="https://accounts.google.com/ServiceLogin?hl=en&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26feature%3Dplaylist%26app%3Ddesktop%26action_handle_signin%3Dtrue%26next%3D%252F&amp;service=youtube&amp;passive=true&amp;uilel=3" class="sign-in-link">Sign in</a> to add this to Watch Later

    </div>
<div id="yt-uix-videoactionmenu-menu" class="yt-ui-menu-content">  <div class="hide-on-create-pl-panel">
    <h3>
Add to
    </h3>
  </div>
  <div class="add-to-widget">
      <p class="yt-spinner ">
        <span title="Loading icon" class="yt-spinner-img  yt-sprite"></span>

    <span class="yt-spinner-message">
        Loading playlists...
    </span>
  </p>

  </div>
</div></div>    <script>var ytspf = ytspf || {};ytspf.enabled = true;ytspf.config = {'reload-identifier': 'spfreload'};ytspf.config['request-headers'] = {'X-YouTube-Identity-Token': null};ytspf.config['experimental-request-headers'] = ytspf.config['request-headers'];ytspf.config['cache-max'] = 50;ytspf.config['navigate-limit'] = 50;ytspf.config['navigate-lifetime'] = 64800000;ytspf.config['animation-duration'] = 0;</script>
  <script src="//s.ytimg.com/yts/jsbin/spf-vflz-OhP4/spf.js" type="text/javascript" name="spf/spf"></script>
  <script src="//s.ytimg.com/yts/jsbin/www-en_US-vflPeHMz9/base.js" name="www/base"></script>
<script>spf.script.path({'www/': '//s.ytimg.com/yts/jsbin/www-en_US-vflPeHMz9/'});var ytdepmap = {"www/base": null, "www/common": "www/base", "www/angular_base": "www/common", "www/channels_accountupload": "www/common", "www/channels": "www/common", "www/dashboard": "www/common", "www/downloadreports": "www/common", "www/experiments": "www/common", "www/feed": "www/common", "www/instant": "www/common", "www/legomap": "www/common", "www/promo_join_network": "www/common", "www/results_harlemshake": "www/common", "www/results": "www/common", "www/results_starwars": "www/common", "www/subscriptionmanager": "www/common", "www/unlimited": "www/common", "www/watch": "www/common", "www/ypc_bootstrap": "www/common", "www/ypc_core": "www/common", "www/channels_edit": "www/channels", "www/live_dashboard": "www/angular_base", "www/videomanager": "www/angular_base", "www/watch_autoplayrenderer": "www/watch", "www/watch_edit": "www/watch", "www/watch_editor": "www/watch", "www/watch_live": "www/watch", "www/watch_promos": "www/watch", "www/watch_speedyg": "www/watch", "www/watch_transcript": "www/watch", "www/watch_videoshelf": "www/watch", "www/ct_advancedsearch": "www/videomanager", "www/my_videos": "www/videomanager"};spf.script.declare(ytdepmap);</script><script>if (window.ytcsi) {window.ytcsi.tick("je", null, '');}</script>  

  <script>
    
    yt.setConfig({
      'MASTHEAD_ENCRYPTED_ID': "z7kbMa3knCY",
      'MASTHEAD_IS_BRANDED': false
    });

(function() {var c = document.getElementById('feed-pyv-container');if (c) {var h = "\u003cscript\u003ewindow.yt = window.yt || {};yt.www = yt.www || {};yt.www.feed = yt.www.feed || {};yt.www.feed.ui = yt.www.feed.ui || {};yt.www.feed.ui.ads = yt.www.feed.ui.ads || {};window.renderHomepagePyv = function(pyv) {writePyvAd();};\u003c\/script\u003e\u003cscript\u003evar renderPyvCallback = parent.yt.www.ads.pyv.pyvHomeAfcCallback;window.writePyvAd = function() {window['google_page_url'] = parent.document.location;window['google_language'] = \"en\";window['google_loeid'] = \"__loeid__\";window['google_eids'] = \"__eids__\";window['google_pucrd'] = \"__pucrd__\";window['google_ad_client'] = \"__property_code__\";window['google_ad_channel'] = \"__channels__\";window['google_max_num_ads'] = 1;window['google_ad_output'] = 'js';window['google_ad_type'] = 'text';window['google_only_pyv_ads'] = true;window['google_ad_request_done'] = function(googleAds) {renderPyvCallback(googleAds);};document.write('\u003cscript s\u0072c=\"\/\/pagead2.googlesyndication.com\/pagead\/show_ads.js\"\u003e\u003c\\\/script\u003e');};var pyvCallback = window.renderHomepagePyv;pyvCallback();\u003c\/script\u003e";h = h.replace(/__property_code__/g, c.getAttribute('data-property-code') || '');h = h.replace(/__channels__/g, c.getAttribute('data-channels') || '');h = h.replace(/__loeid__/g, c.getAttribute('data-loeid') || '');h = h.replace(/__pucrd__/g, c.getAttribute('data-pucrd') || '');var eids = c.getAttribute('data-eids') || '';h = h.replace(/\"__eids__\"/g, JSON.stringify(eids.split(',')));yt.setConfig({'PYV_IFRAME_CONTENT': h,'PYV_IFRAME_ID': 'pyv-iframe'});}})();
  yt.setConfig('JS_PAGE_MODULES', ['www/feed', 'www/ypc_bootstrap']);

    yt.setConfig('DISMISS_THROUGH_IT', true);

      yt.setConfig({
        'GUIDE_SELECTED_ITEM': "0qDduQEREg9GRXdoYXRfdG9fd2F0Y2g%3D"
      });

      yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });

  </script>
  
<script>yt.setConfig({INNERTUBE_API_KEY: "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",INNERTUBE_API_VERSION: "v1",APIARY_HOST_FIRSTPARTY: "",APIARY_HOST: "",INNERTUBE_CONTEXT_CLIENT_NAME: 1,GAPI_HINT_PARAMS: "m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.DTPeBB_SvOA.O\/m=__features__\/rt=j\/d=1\/rs=AHpOoo-J3J0yqNDMPVrmQT6j-SBFfGx8oA",XHR_APIARY_HOST: "youtubei.youtube.com",INNERTUBE_CONTEXT_CLIENT_VERSION: "1.20170427",'VISITOR_DATA': "CgtWMkFpdEVZd1lIQQ%3D%3D",'GAPI_HOST': "https:\/\/apis.google.com",'GAPI_LOCALE': "en_US",'INNERTUBE_CONTEXT_HL': "en",'INNERTUBE_CONTEXT_GL': "US",'XHR_APIARY_HOST': "youtubei.youtube.com"});yt.setConfig({'ROOT_VE_CHILDREN': ["CAEQpmEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CAIQ7VAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CJwBEP4eIhMIqO_vy_jU0wIVTYZ-Ch0xUA-AKI4e","CJ0BEOYrGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CJ4BELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CJ8BELUsGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKABELUsGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKEBELUsGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKIBEOGLAhgEIhMIqO_vy_jU0wIVTYZ-Ch0xUA-AKI4e","CKMBEOYrGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKQBELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKUBELUsGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKYBELUsGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKcBELUsGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKgBELUsGAQiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKkBELUsGAUiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKoBELUsGAYiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKsBELUsGAciEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CKwBELUsGAgiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CK0BEOYrGAIiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CK4BELUsGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CK8BENguGAMiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CLABEMcxIhMIqO_vy_jU0wIVTYZ-Ch0xUA-AKI4e","CLEBEMMtGAAiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4","CLIBEMMtGAEiEwio7-_L-NTTAhVNhn4KHTFQD4Aojh4"],'ROOT_VE_TYPE': 3854});yt.setConfig({'EVENT_ID': "ZHAKWaitKM2M-gOxoL2ACA",'PAGE_NAME': "index",'LOGGED_IN': false,'SESSION_INDEX': null,'VALID_SESSION_TEMPDATA_DOMAINS': ["www.youtube.com","gaming.youtube.com"],'PARENT_TRACKING_PARAMS': "",'FORMATS_FILE_SIZE_JS': ["%s B","%s KB","%s MB","%s GB","%s TB"],'DELEGATED_SESSION_ID': null,'ONE_PICK_URL': "",'UNIVERSAL_HOVERCARDS': true,'GOOGLEPLUS_HOST': "https:\/\/plus.google.com",'PAGEFRAME_JS': "\//s.ytimg.com/yts\/jsbin\/www-pageframe-vflj3aNNi\/www-pageframe.js",'GAPI_LOADER_URL': "\//s.ytimg.com/yts\/jsbin\/www-gapi-loader-vflFXorI_\/www-gapi-loader.js",'JS_COMMON_MODULE': "\//s.ytimg.com/yts\/jsbin\/www-en_US-vflPeHMz9\/common.js",'PAGE_FRAME_DELAYLOADED_CSS': "\//s.ytimg.com/yts\/cssbin\/www-pageframedelayloaded-vflo9ddF2.css",'EXPERIMENT_FLAGS': {"web_gel_lact":true,"cold_load_nav_start_web":true,"chat_smoothing_animations":84,"log_window_onerror_fraction":0.1,"player_swfcfg_cleanup":true,"enable_youtubei_innertube":true,"web_logging_max_batch":20,"youtubei_for_web":true,"autoescape_tempdata_url":true,"app_settings_snapshot_min_time_between_snapshots_hours":24,"desktop_notification_set_title_bar":true,"service_worker_scope":"\/","desktop_pyv_on_watch_via_valor":true,"warm_load_nav_start_web":true,"navigation_only_csi_reset":true,"service_worker_push_home_only":true,"service_worker_push_prompt_cap":1,"comment_deep_link":true,"desktop_pyv_on_watch_missing_params":true,"gfeedback_for_signed_out_users_enabled":true,"consent_url_override":"","autoplay_pause_sampling_fraction":0.0,"service_worker_enabled":true,"player_interaction_logging":true,"same_domain_static_resources_desktop":true,"watch_next_pause_autoplay_lact_sec":0,"desktop_pyv_on_watch_override_lact":true,"service_worker_push_enabled":true,"clear_web_implicit_clicktracking":true,"enable_more_related_ve_logging":true,"use_push_for_desktop_live_chat":true,"block_spf_search_ads_impressions":true,"enable_server_side_search_pyv":true},'GUIDED_HELP_PARAMS': {"logged_in":"0","context":"yt_web_w2w"},'HIGH_CONTRAST_MODE_CSS': "\//s.ytimg.com/yts\/cssbin\/www-highcontrastmode-vflbPe0Z_.css",'PREFETCH_CSS_RESOURCES' : ["\//s.ytimg.com/yts\/cssbin\/player-vflAZABhd\/www-player.css"],'PREFETCH_JS_RESOURCES': ["\//s.ytimg.com/yts\/jsbin\/player-vflppxuSE\/en_US\/base.js"],'PREFETCH_LINKS': false,'PREFETCH_LINKS_MAX': 1,'PREFETCH_AUTOPLAY': false,'PREFETCH_AUTOPLAY_TIME': 0,'PREFETCH_AUTONAV': false,'PREBUFFER_MAX': 1,'PREBUFFER_LINKS': false,'PREBUFFER_AUTOPLAY': false,'PREBUFFER_AUTONAV': false,'WATCH_LATER_BUTTON': "\n\n  \u003cbutton class=\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip\" type=\"button\" onclick=\";return false;\" title=\"Watch Later\" role=\"button\" data-video-ids=\"__VIDEO_ID__\" data-button-menu-id=\"shared-addto-watch-later-login\"\u003e\u003cspan class=\"yt-uix-button-arrow yt-sprite\"\u003e\u003c\/span\u003e\u003c\/button\u003e\n",'WATCH_QUEUE_BUTTON': "  \u003cbutton class=\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip\" type=\"button\" onclick=\";return false;\" title=\"Queue\" data-video-ids=\"__VIDEO_ID__\" data-style=\"tv-queue\"\u003e\u003c\/button\u003e\n",'WATCH_QUEUE_MENU': "  \u003cspan class=\"thumb-menu dark-overflow-action-menu video-actions\"\u003e\n    \u003cbutton onclick=\";return false;\" type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty\" \u003e\u003cspan class=\"yt-uix-button-arrow yt-sprite\"\u003e\u003c\/span\u003e\u003cul class=\"watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid\"\u003e\u003cli role=\"menuitem\" class=\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item\" data-action=\"play-next\" onclick=\";return false;\"  data-video-ids=\"__VIDEO_ID__\"\u003e\u003cspan class=\"addto-watch-queue-menu-text\"\u003ePlay next\u003c\/span\u003e\u003c\/li\u003e\u003cli role=\"menuitem\" class=\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item\" data-action=\"play-now\" onclick=\";return false;\"  data-video-ids=\"__VIDEO_ID__\"\u003e\u003cspan class=\"addto-watch-queue-menu-text\"\u003ePlay now\u003c\/span\u003e\u003c\/li\u003e\u003c\/ul\u003e\u003c\/button\u003e\n  \u003c\/span\u003e\n",'SAFETY_MODE_PENDING': false,'ZWIEBACK_PING_URLS': ["https:\/\/www.google.com\/pagead\/lvz?req_ts=1493856356\u0026pg=index\u0026evtid=ACWVUuahsCRB2kc8YBhNZTaLbu_O5GMM6Yi5x_7RE08FL8GSLLg77VXef5aalpzaDTcW1rADb5C2O5CwvMgVfFG56sZDkbX77w\u0026sigh=AGwc71vZ7Lt3lymtTWkSfFiOr3NFnCVIkQ"],'LOCAL_DATE_TIME_CONFIG': {"shortMonths":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekendRange":[6,5],"formatLongDateOnly":"MMMM d, yyyy","formatWeekdayShortTime":"EE h:mm a","dateFormats":["MMMM d, yyyy h:mm a","MMMM d, yyyy","MMM d, yyyy","MMM d, yyyy"],"firstWeekCutoffDay":3,"shortWeekdays":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"formatLongDate":"MMMM d, yyyy h:mm a","months":["January","February","March","April","May","June","July","August","September","October","November","December"],"formatShortTime":"h:mm a","formatShortDate":"MMM d, yyyy","firstDayOfWeek":0,"amPms":["AM","PM"]},'PAGE_CL': 154470109,'PAGE_BUILD_LABEL': "youtube_20170427_0_RC5",'VARIANTS_CHECKSUM': "bb02ce2ea39c231878a60b412205e62d",'CLIENT_PROTOCOL': "HTTP\/1.0",'CLIENT_TRANSPORT': "tcp",'MDX_ENABLE_CASTV2': true,'MDX_ENABLE_QUEUE': true,'SERVICE_WORKER_PROMPT_NOTIFICATIONS': true,'FEEDBACK_BUCKET_ID': "Home",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"logged_in":false,"accept_language":"en-US,en;q=0.8","experiments":"9406125,9415398,9416475,9419452,9419979,9420289,9422596,9423555,9431012,9432939,9433870,9434046,9434289,9434949,9438309,9439294,9439824,9440054,9440936,9441194,9442387,9442746,9444189,9444771,9445139,9446054,9446364,9448302,9449072,9449243,9451814,9451827,9452833,9453167,9453897,9454394,9454653,9455031,9456445,9456628,9456640,9456988,9457115,9457141,9457169,9457541,9457592,9457595,9457598,9458117,9458265,9458576,9458668,9459075,9459235,9459445,9459792,9459799,9459986,9460087,9460098,9460349,9460554,9460829,9460959,9461124,9461777,9462018,9462032,9463460,9463594,9463616,9463936,9463963,9463965,9464181,9464207,9464267,9464344,9464440,9464823,9464887,9464889,9465513,9465533,9465652,9465666,9465709,9465797,9465813,9466199,9466209,9466423,9466539,9466669,9466778,9466793,9466795,9466797,9466835,9467001,9467217,9467400,9467426,9467508,9467510,9467512,9467663,9467700,9467709,9467795,9467806,9467820,9467822,9467884,9467895,9468110,9468195,9468228,9468235,9468285,9468553,9468805,9469042,9469192,9469224,9469606,9469609,9469615,9469734,9469805,9469862,9469883,9469887,9469911,9469972,9470299,9470319,9470791,9470924,9471263,9471388,9471413,9471482,9471502,9471650,9471677,9471955,9472010,9472097,9472146,9472150,9472169,9472178,9472401,9472416,9472450,9472485,9472559,9472609,9472711,9472879,9473374,9473387,9473393,9473514,9473576,9473977,9474064,9474099,9474241,9474259"}});   yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });
yt.setConfig('SPF_SEARCH_BOX', true);yt.setMsg({'ADDTO_CREATE_NEW_PLAYLIST': "Create new playlist\n",'ADDTO_CREATE_PLAYLIST_DYNAMIC_TITLE': "  $dynamic_title_placeholder (create new)\n",'ADDTO_WATCH_LATER': "Watch Later",'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error",'ADDTO_WATCH_QUEUE': "Watch Queue",'ADDTO_WATCH_QUEUE_ADDED': "Added",'ADDTO_WATCH_QUEUE_ERROR': "Error",'ADDTO_TV_QUEUE': "Queue",'ADS_INSTREAM_FIRST_PLAY': "A video ad is playing.",'ADS_INSTREAM_SKIPPABLE': "Video ad can be skipped.",'ADS_OVERLAY_IMPRESSION': "Ad displayed.",'MASTHEAD_NOTIFICATIONS_LABEL': {"case1": "1 unread notification.", "case0": "0 unread notifications.", "other": "# unread notifications."},'MASTHEAD_NOTIFICATIONS_COUNT_99PLUS': "99+",'MDX_AUTOPLAY_OFF': 'Autoplay is off','MDX_AUTOPLAY_ON': 'Autoplay is on'});  yt.setConfig('FEED_PRIVACY_CSS_URL', "\//s.ytimg.com/yts\/cssbin\/www-feedprivacydialog-vflWi26th.css");
  yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\//s.ytimg.com/yts\/jsbin\/www-searchbox-legacy-vflDE45EL\/www-searchbox-legacy.js",'SBOX_SETTINGS': {"SESSION_INDEX":null,"PQ":"","REQUEST_DOMAIN":"us","REQUEST_LANGUAGE":"en","PSUGGEST_TOKEN":null,"IS_FUSION":false,"SUGG_EXP_ID":"","HAS_ON_SCREEN_KEYBOARD":false},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL":"Remove","SUGGESTION_DISMISSED_LABEL":"Suggestion dismissed"}});  yt.setConfig({
    'YPC_LOADER_JS': "\//s.ytimg.com/yts\/jsbin\/www-ypc-vflQCA2fx\/www-ypc.js",
    'YPC_LOADER_CSS': "\//s.ytimg.com/yts\/cssbin\/www-ypc-vfl-AgXO7.css",
    'YPC_SIGNIN_URL': "https:\/\/accounts.google.com\/ServiceLogin?hl=en\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26app%3Ddesktop%26action_handle_signin%3Dtrue%26next%3D%252F\u0026service=youtube\u0026passive=true\u0026uilel=3",
    'DBLCLK_ADVERTISER_ID': "2542116",
    'DBLCLK_YPC_ACTIVITY_GROUP': "youtu444",
    'SUBSCRIPTION_URL': "\/subscription_ajax",
    'YPC_SWITCH_URL': "\/signin?skip_identity_prompt=True\u0026next=%2F\u0026action_handle_signin=true\u0026feature=purchases",
    'YPC_GB_LANGUAGE': "en_US",
    'YPC_MB_URL': "https:\/\/payments.google.com\/payments\/v4\/js\/integrator.js?ss=md",
    'YPC_TRANSACTION_URL': "\/transaction_handler",
    'YPC_SUBSCRIPTION_URL': "\/ypc_subscription_ajax",
    'YPC_POST_PURCHASE_URL': "\/ypc_post_purchase_ajax",
    'YTR_FAMILY_CREATION_URL': "https:\/\/families.google.com\/webcreation?usegapi=1",
    'YTO_GTM_DATA': {'event': 'purchased', 'purchaseStatus': 'success'},
    'YTO_GTM_1_BUTTON_CLICK_DATA': {'event': 'landingButtonClick', 'buttonPosition': '1'},
    'YTO_GTM_2_BUTTON_CLICK_DATA': {'event': 'landingButtonClick', 'buttonPosition': '2'}
  });
  yt.setMsg({
    'YPC_OFFER_OVERLAY': "  \n",
    'YPC_UNSUBSCRIBE_OVERLAY': "  \n"
  });
  yt.setConfig('GOOGLE_HELP_CONTEXT', "homepage");
ytcsi.info('st', 1060);ytcfg.set({"CSI_SERVICE_NAME":"youtube","CSI_VIEWPORT":true,"TIMING_AFT_KEYS":["ol"],"TIMING_INFO":{"GetBrowse_rid":"0xfe50f5a5384dd3f8","cver":"1.20170427","yt_li":"0","yt_fn":"what_to_watch","yt_ref":"watch","c":"WEB","yt_lt":"cold"},"TIMING_ACTION":"home"});;  yt.setConfig({
      'XSRF_TOKEN': "QUFFLUhqbk1xZ0VsUnVYelZDc3ZiVzJmR2VOam5hS1Bmd3xBQ3Jtc0trcHpoVm14YTBKZm5JNTdlZVF1RGpOVGl6Ym9Hc0tENmFIZmN6dzZ1Ymx6ZDhiaDVuOV93SVpJY0UzS0RRUG5xX3lWRC1Kc2JhbEFlbXhHVjVMT2EzT2NMblRSOU52ZnFNYzhSanVNekNqTDMtNnhxQXJ6MW5Mc0lNZFo2aVU2a1VXMkRBemdvTXBkalg4ZGJVeHNSQlg3VktnTkE=",
      'XSRF_FIELD_NAME': "session_token",

      'XSRF_REDIRECT_TOKEN': "syBjsRClqgZYSmtfldlRMvsH3wR8MTQ5Mzk0Mjc1N0AxNDkzODU2MzU3"  });
yt.setConfig('ID_TOKEN', null);window.ytcfg.set('SERVICE_WORKER_KILLSWITCH', false);  yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 300);
if (window.ytcsi) {window.ytcsi.tick("jl", null, '');}</script>
</body></html>
	<?php
	}
	ob_end_flush();
?>

