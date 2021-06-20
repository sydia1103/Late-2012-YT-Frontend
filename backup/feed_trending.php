<?php
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
        "appbar-content": <?php getContentJson('./yts_pagecontent/appbar_trending.php'); ?>,
        "alerts": "",
        "content": <?php getContentJson('./yts_pagecontent/trending.php'); ?>,
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
            "class": "  feed    not-fixed-width-tab-widescreen"
        },
        "player-playlist": {
            "class": "  hid  "
        }
    },
    "foot": "\u003cscript\u003evar ytspf = ytspf || {};ytspf.enabled = true;ytspf.config = {'reload-identifier': 'spfreload'};ytspf.config['request-headers'] = {'X-YouTube-Identity-Token': null};ytspf.config['experimental-request-headers'] = ytspf.config['request-headers'];ytspf.config['cache-max'] = 50;ytspf.config['navigate-limit'] = 50;ytspf.config['navigate-lifetime'] = 64800000;ytspf.config['animation-duration'] = 0;\u003c\/script\u003e\n  \u003cscript src=\"\/\/s.ytimg.com\/yts\/jsbin\/spf-vflWieI3y\/spf.js\" type=\"text\/javascript\" name=\"spf\/spf\"\u003e\u003c\/script\u003e\n  \u003cscript src=\"\/\/s.ytimg.com\/yts\/jsbin\/www-en_US-vfljtThSU\/base.js\" name=\"www\/base\"\u003e\u003c\/script\u003e\n\u003cscript\u003espf.script.path({'www\/': '\/\/s.ytimg.com\/yts\/jsbin\/www-en_US-vfljtThSU\/'});var ytdepmap = {\"www\/base\": null, \"www\/common\": \"www\/base\", \"www\/angular_base\": \"www\/common\", \"www\/channels_accountupload\": \"www\/common\", \"www\/channels\": \"www\/common\", \"www\/dashboard\": \"www\/common\", \"www\/downloadreports\": \"www\/common\", \"www\/experiments\": \"www\/common\", \"www\/feed\": \"www\/common\", \"www\/instant\": \"www\/common\", \"www\/legomap\": \"www\/common\", \"www\/live_chat\": \"www\/common\", \"www\/live_chat_moderation\": \"www\/common\", \"www\/promo_join_network\": \"www\/common\", \"www\/results_harlemshake\": \"www\/common\", \"www\/results\": \"www\/common\", \"www\/results_starwars\": \"www\/common\", \"www\/subscriptionmanager\": \"www\/common\", \"www\/unlimited\": \"www\/common\", \"www\/watch\": \"www\/common\", \"www\/ypc_bootstrap\": \"www\/common\", \"www\/ypc_core\": \"www\/common\", \"www\/channels_edit\": \"www\/channels\", \"www\/live_dashboard\": \"www\/angular_base\", \"www\/videomanager\": \"www\/angular_base\", \"www\/watch_autoplayrenderer\": \"www\/watch\", \"www\/watch_edit\": \"www\/watch\", \"www\/watch_editor\": \"www\/watch\", \"www\/watch_live\": \"www\/watch\", \"www\/watch_promos\": \"www\/watch\", \"www\/watch_speedyg\": \"www\/watch\", \"www\/watch_transcript\": \"www\/watch\", \"www\/watch_videoshelf\": \"www\/watch\", \"www\/ct_advancedsearch\": \"www\/videomanager\", \"www\/my_videos\": \"www\/videomanager\"};spf.script.declare(ytdepmap);\u003c\/script\u003e\u003cscript\u003eif (window.ytcsi) {window.ytcsi.tick(\"je\", null, '');}\u003c\/script\u003e  \n\n  \u003cscript\u003e\n      yt.setConfig('ANGULAR_JS', \"\\\/\/s.ytimg.com\/yts\\\/jslib\\\/angular.min-vfltsfE-b.js\");\n  yt.setConfig('TRANSLATIONEDITOR_JS', \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-translationeditor-vflr-Wr4P\\\/www-translationeditor.js\");\n  yt.setMsg('UNSAVED_CHANGES_WARNING', \"Some of the changes you have made to channel settings have not been saved and will be lost if you navigate away from this page.\");\n\n    yt.setConfig(\n      'JS_PAGE_MODULES', [\n          'www\/feed',\n        'www\/ypc_bootstrap'\n      ]);\n\n\n\n\n  yt.setConfig('DISMISS_THROUGH_IT', true);\n\n\n      yt.setConfig({\n        'GUIDE_SELECTED_ITEM': \"0qDduQEMEgpGRXRyZW5kaW5n\"\n      });\n\n      yt.setConfig({\n    'GUIDED_HELP_LOCALE': \"en_US\",\n    'GUIDED_HELP_ENVIRONMENT': \"prod\"\n  });\n\n  \u003c\/script\u003e\n  \n\u003cscript\u003eyt.setConfig({INNERTUBE_CONTEXT_CLIENT_VERSION: \"1.20170302\",GAPI_HINT_PARAMS: \"m;\\\/_\\\/scs\\\/abc-static\\\/_\\\/js\\\/k=gapi.gapi.en.JX7Dnsppevc.O\\\/m=__features__\\\/rt=j\\\/d=1\\\/rs=AHpOoo_2RQhtACGmSN-v4soFWASqyZu90A\",APIARY_HOST_FIRSTPARTY: \"\",INNERTUBE_API_VERSION: \"v1\",INNERTUBE_API_KEY: \"AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8\",APIARY_HOST: \"\",INNERTUBE_CONTEXT_CLIENT_NAME: 1,'VISITOR_DATA': \"Cgs0dUxpYXRkTVB1UQ%3D%3D\",'GAPI_HOST': \"https:\\\/\\\/apis.google.com\",'GAPI_LOCALE': \"en_US\",'INNERTUBE_CONTEXT_HL': \"en\",'INNERTUBE_CONTEXT_GL': \"US\",'XHR_APIARY_HOST': \"youtubei.youtube.com\"});yt.setConfig({'ROOT_VE_CHILDREN': [\"CAEQpmEiEwiQuJG2vrnSAhXGsX4KHQDnCA8o6R4\",\"CAIQ7VAiEwiQuJG2vrnSAhXGsX4KHQDnCA8o6R4\",\"CFsQxzEiEwiQuJG2vrnSAhXGsX4KHQDnCA8o6R4\",\"CFwQwy0YACITCJC4kba-udICFcaxfgodAOcIDyjpHg\",\"CF0Qwy0YASITCJC4kba-udICFcaxfgodAOcIDyjpHg\"],'ROOT_VE_TYPE': 3945});yt.setConfig({'EVENT_ID': \"pu-4WJDNFsbj-gOAzqN4\",'PAGE_NAME': \"feed\",'LOGGED_IN': false,'SESSION_INDEX': null,'VALID_SESSION_TEMPDATA_DOMAINS': [\"www.youtube.com\",\"gaming.youtube.com\"],'PARENT_TRACKING_PARAMS': \"\",'FORMATS_FILE_SIZE_JS': [\"%s B\",\"%s KB\",\"%s MB\",\"%s GB\",\"%s TB\"],'DELEGATED_SESSION_ID': null,'ONE_PICK_URL': \"\",'UNIVERSAL_HOVERCARDS': true,'GOOGLEPLUS_HOST': \"https:\\\/\\\/plus.google.com\",'PAGEFRAME_JS': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-pageframe-vfluGCcxn\\\/www-pageframe.js\",'GAPI_LOADER_URL': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-gapi-loader-vfl4k3rU8\\\/www-gapi-loader.js\",'JS_COMMON_MODULE': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-en_US-vfljtThSU\\\/common.js\",'PAGE_FRAME_DELAYLOADED_CSS': \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-pageframedelayloaded-vflyiAVoi.css\",'EXPERIMENT_FLAGS': {\"service_worker_push_ticker_enabled\":true,\"player_swfcfg_cleanup\":true,\"gfeedback_for_signed_out_users_enabled\":true,\"desktop_pyv_on_watch_override_lact\":true,\"comment_deep_link\":true,\"block_spf_search_ads_impressions\":true,\"log_window_onerror_fraction\":0.1,\"navigation_only_csi_reset\":true,\"service_worker_push_enabled\":true,\"service_worker_scope\":\"\\\/\",\"chat_smoothing_animations\":0,\"warm_load_nav_start_web\":true,\"cold_load_nav_start_web\":true,\"enable_more_related_ve_logging\":true,\"service_worker_push_prompt_cap\":-1,\"web_gel_lact\":true,\"autoplay_pause_sampling_fraction\":0.0,\"use_push_for_desktop_live_chat\":true,\"clear_web_implicit_clicktracking\":true,\"enable_server_side_mweb_search_pyv\":true,\"desktop_pyv_on_watch_via_valor\":true,\"autoescape_tempdata_url\":true,\"same_domain_static_resources_desktop\":true,\"web_logging_max_batch\":20,\"service_worker_enabled\":true,\"enable_youtubei_innertube\":true,\"desktop_pyv_on_watch_missing_params\":true,\"enable_server_side_search_pyv\":true,\"service_worker_push_subscriptions_page_only\":true,\"consent_url_override\":\"\"},'GUIDED_HELP_PARAMS': {\"logged_in\":\"0\"},'HIGH_CONTRAST_MODE_CSS': \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-highcontrastmode-vfl2--eA2.css\",'PREFETCH_LINKS': false,'PREFETCH_LINKS_MAX': 1,'PREFETCH_AUTOPLAY': false,'PREFETCH_AUTOPLAY_TIME': 0,'PREFETCH_AUTONAV': false,'PREBUFFER_MAX': 1,'PREBUFFER_LINKS': false,'PREBUFFER_AUTOPLAY': false,'PREBUFFER_AUTONAV': false,'WATCH_LATER_BUTTON': \"\\n\\n  \\u003cbutton class=\\\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip\\\" type=\\\"button\\\" onclick=\\\";return false;\\\" role=\\\"button\\\" title=\\\"Watch Later\\\" data-button-menu-id=\\\"shared-addto-watch-later-login\\\" data-video-ids=\\\"__VIDEO_ID__\\\"\\u003e\\u003cspan class=\\\"yt-uix-button-arrow yt-sprite\\\"\\u003e\\u003c\\\/span\\u003e\\u003c\\\/button\\u003e\\n\",'WATCH_QUEUE_BUTTON': \"  \\u003cbutton class=\\\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip\\\" type=\\\"button\\\" onclick=\\\";return false;\\\" title=\\\"Queue\\\" data-video-ids=\\\"__VIDEO_ID__\\\" data-style=\\\"tv-queue\\\"\\u003e\\u003c\\\/button\\u003e\\n\",'WATCH_QUEUE_MENU': \"  \\u003cspan class=\\\"thumb-menu dark-overflow-action-menu video-actions\\\"\\u003e\\n    \\u003cbutton aria-haspopup=\\\"true\\\" type=\\\"button\\\" class=\\\"yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty\\\" onclick=\\\";return false;\\\" aria-expanded=\\\"false\\\" \\u003e\\u003cspan class=\\\"yt-uix-button-arrow yt-sprite\\\"\\u003e\\u003c\\\/span\\u003e\\u003cul class=\\\"watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid\\\"\\u003e\\u003cli role=\\\"menuitem\\\" class=\\\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item\\\" data-action=\\\"play-next\\\" onclick=\\\";return false;\\\"  data-video-ids=\\\"__VIDEO_ID__\\\"\\u003e\\u003cspan class=\\\"addto-watch-queue-menu-text\\\"\\u003ePlay next\\u003c\\\/span\\u003e\\u003c\\\/li\\u003e\\u003cli role=\\\"menuitem\\\" class=\\\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item\\\" data-action=\\\"play-now\\\" onclick=\\\";return false;\\\"  data-video-ids=\\\"__VIDEO_ID__\\\"\\u003e\\u003cspan class=\\\"addto-watch-queue-menu-text\\\"\\u003ePlay now\\u003c\\\/span\\u003e\\u003c\\\/li\\u003e\\u003c\\\/ul\\u003e\\u003c\\\/button\\u003e\\n  \\u003c\\\/span\\u003e\\n\",'SAFETY_MODE_PENDING': false,'ZWIEBACK_PING_URLS': [\"https:\\\/\\\/www.google.com\\\/pagead\\\/lvz?req_ts=1488514982\\u0026evtid=AKzro8Lw5f7jHgOqEuneW7_9K4_GNlYIM3l2vg0nLecNIHxv1uMXlkg8HQkX5EvlraW_r3iHji-eJpL7Ggh2FAfmAaGirir7KA\\u0026pg=feed\\u0026sigh=AEhY9cTHvxuasxOSmjv-lZzEWhRtDVBvJw\"],'LOCAL_DATE_TIME_CONFIG': {\"formatLongDateOnly\":\"MMMM d, yyyy\",\"firstWeekCutoffDay\":3,\"formatWeekdayShortTime\":\"EE h:mm a\",\"shortWeekdays\":[\"Sun\",\"Mon\",\"Tue\",\"Wed\",\"Thu\",\"Fri\",\"Sat\"],\"formatLongDate\":\"MMMM d, yyyy h:mm a\",\"formatShortTime\":\"h:mm a\",\"shortMonths\":[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\",\"Dec\"],\"weekendRange\":[6,5],\"dateFormats\":[\"MMMM d, yyyy h:mm a\",\"MMMM d, yyyy\",\"MMM d, yyyy\",\"MMM d, yyyy\"],\"amPms\":[\"AM\",\"PM\"],\"firstDayOfWeek\":0,\"weekdays\":[\"Sunday\",\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\"],\"months\":[\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\"],\"formatShortDate\":\"MMM d, yyyy\"},'PAGE_CL': 149006527,'PAGE_BUILD_LABEL': \"youtube_20170302_0_RC2\",'VARIANTS_CHECKSUM': \"26da3c8aea3470afdf3836cc3526ab8e\",'CLIENT_PROTOCOL': \"HTTP\\\/1.1\",'CLIENT_TRANSPORT': \"tcp\",'MDX_ENABLE_CASTV2': true,'MDX_ENABLE_QUEUE': true,'FEEDBACK_BUCKET_ID': \"Other\",'FEEDBACK_LOCALE_LANGUAGE': \"en\",'FEEDBACK_LOCALE_EXTRAS': {\"logged_in\":false,\"accept_language\":\"en-US,en;q=0.5\",\"experiments\":\"9415398,9416475,9417482,9419452,9419979,9420289,9422596,9423555,9428398,9431012,9432565,9432939,9433221,9433839,9433870,9434046,9434289,9434949,9437141,9438309,9439294,9440054,9441194,9441929,9442387,9442746,9443662,9444189,9445139,9445634,9446054,9446364,9447232,9448302,9449034,9449243,9449256,9450059,9450402,9450544,9450641,9451164,9451406,9451783,9451814,9451823,9451937,9452119,9452448,9452833,9452850,9453098,9453167,9453540,9453553,9453682,9454394,9454653,9454793,9454837,9454899,9454909,9454976,9455031,9455068,9455655,9455939,9455982,9456026,9456133,9456249,9456445,9456516,9456628,9456640,9456930,9456955,9457114,9457141,9457169,9457317,9457492,9457591,9457595,9457598,9457968,9458054,9458172,9458230,9458240,9458266,9458668,9458670,9458742,9458881,9458947,9459067,9459075,9459187,9459429,9459605,9459651,9459655,9459762,9459792,9459802,9459959,9460160,9460266,9460295,9460498,9460554,9460594,9460599,9460611,9460727,9460829,9461124,9461159,9461245,9461452,9461560,9461777,9461906,9461984,9462003,9462018,9462032,9462127,9462233,9462359,9462377,9462416,9462474,9462793,9462855,9462948,9463002,9463004,9463175,9463251,9463287,9463322,9463395,9463460,9463471,9463496,9463664,9463784,9463802,9463809,9463910,9464040,9464112,9464121,9464182,9464330,9464625,9464841,9464855,9464889,9465078,9465117,9465275,9465284,9465307,9465366,9465660,9465770\",\"is_partner\":\"\"}});   yt.setConfig({\n    'GUIDED_HELP_LOCALE': \"en_US\",\n    'GUIDED_HELP_ENVIRONMENT': \"prod\"\n  });\nyt.setConfig('SPF_SEARCH_BOX', true);yt.setMsg({'ADDTO_CREATE_NEW_PLAYLIST': \"Create new playlist\\n\",'ADDTO_CREATE_PLAYLIST_DYNAMIC_TITLE': \"  $dynamic_title_placeholder (create new)\\n\",'ADDTO_WATCH_LATER': \"Watch Later\",'ADDTO_WATCH_LATER_ADDED': \"Added\",'ADDTO_WATCH_LATER_ERROR': \"Error\",'ADDTO_WATCH_QUEUE': \"Watch Queue\",'ADDTO_WATCH_QUEUE_ADDED': \"Added\",'ADDTO_WATCH_QUEUE_ERROR': \"Error\",'ADDTO_TV_QUEUE': \"Queue\",'ADS_INSTREAM_FIRST_PLAY': \"A video ad is playing.\",'ADS_INSTREAM_SKIPPABLE': \"Video ad can be skipped.\",'ADS_OVERLAY_IMPRESSION': \"Ad displayed.\",'MASTHEAD_NOTIFICATIONS_LABEL': {\"other\": \"# unread notifications.\", \"case1\": \"1 unread notification.\", \"case0\": \"0 unread notifications.\"},'MASTHEAD_NOTIFICATIONS_COUNT_99PLUS': \"99+\",'MDX_AUTOPLAY_OFF': 'Autoplay is off','MDX_AUTOPLAY_ON': 'Autoplay is on'});  yt.setConfig('FEED_PRIVACY_CSS_URL', \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-feedprivacydialog-vflW29Bds.css\");\n\n  yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);\nyt.setConfig({'SBOX_JS_URL': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-searchbox-legacy-vflOpHwYP\\\/www-searchbox-legacy.js\",'SBOX_SETTINGS': {\"REQUEST_LANGUAGE\":\"en\",\"HAS_ON_SCREEN_KEYBOARD\":false,\"PQ\":\"\",\"REQUEST_DOMAIN\":\"us\",\"SUGG_EXP_ID\":\"\",\"SESSION_INDEX\":null,\"PSUGGEST_TOKEN\":null,\"IS_FUSION\":false},'SBOX_LABELS': {\"SUGGESTION_DISMISSED_LABEL\":\"Suggestion dismissed\",\"SUGGESTION_DISMISS_LABEL\":\"Remove\"}});  yt.setConfig({\n    'YPC_LOADER_JS': \"\\\/\/s.ytimg.com\/yts\\\/jsbin\\\/www-ypc-vfl4M9Nm7\\\/www-ypc.js\",\n    'YPC_LOADER_CSS': \"\\\/\/s.ytimg.com\/yts\\\/cssbin\\\/www-ypc-vflNmwmSI.css\",\n    'YPC_SIGNIN_URL': \"https:\\\/\\\/accounts.google.com\\\/ServiceLogin?uilel=3\\u0026service=youtube\\u0026passive=true\\u0026hl=en\\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26hl%3Den%26next%3D%252F\",\n    'DBLCLK_ADVERTISER_ID': \"2542116\",\n    'DBLCLK_YPC_ACTIVITY_GROUP': \"youtu444\",\n    'SUBSCRIPTION_URL': \"\\\/subscription_ajax\",\n    'YPC_SWITCH_URL': \"\\\/signin?action_handle_signin=true\\u0026skip_identity_prompt=True\\u0026feature=purchases\\u0026next=%2F\",\n    'YPC_GB_LANGUAGE': \"en_US\",\n    'YPC_MB_URL': \"https:\\\/\\\/payments.google.com\\\/payments\\\/v4\\\/js\\\/integrator.js?ss=md\",\n    'YPC_TRANSACTION_URL': \"\\\/transaction_handler\",\n    'YPC_SUBSCRIPTION_URL': \"\\\/ypc_subscription_ajax\",\n    'YPC_POST_PURCHASE_URL': \"\\\/ypc_post_purchase_ajax\",\n    'YTR_FAMILY_CREATION_URL': \"https:\\\/\\\/families.google.com\\\/webcreation?usegapi=1\",\n    'YTO_GTM_DATA': {'event': 'purchased', 'purchaseStatus': 'success'},\n    'YTO_GTM_1_BUTTON_CLICK_DATA': {'event': 'landingButtonClick', 'buttonPosition': '1'},\n    'YTO_GTM_2_BUTTON_CLICK_DATA': {'event': 'landingButtonClick', 'buttonPosition': '2'}\n  });\n  yt.setMsg({\n    'YPC_OFFER_OVERLAY': \"  \\n\",\n    'YPC_UNSUBSCRIBE_OVERLAY': \"  \\n\"\n  });\n  yt.setConfig('GOOGLE_HELP_CONTEXT', \"default\");\nytcsi.info('st', 386);ytcfg.set({\"CSI_VIEWPORT\":true,\"TIMING_ACTION\":\"browse\",\"TIMING_AFT_KEYS\":[\"cpt\"],\"TIMING_INFO\":{\"yt_fn\":\"trending\",\"yt_li\":\"0\",\"yt_ref\":\"\",\"cver\":\"1.20170302\",\"c\":\"WEB\",\"GetBrowse_rid\":\"0x987cee653ed0ba5a\"},\"CSI_SERVICE_NAME\":\"youtube\"});;  yt.setConfig({\n      'XSRF_TOKEN': \"QUFFLUhqa1NFazFueUZXWl9DM1pSWTVSNFlNMDJJbE4zQXxBQ3Jtc0trQmhYaVZScjdJdE0zU3FEU0JUOWlrX0piWVpjNWdBU0hIc2NlVklrRDZmRmVsbHUtNF9Ta0hlSWowaER4ZUVDLU9XMHZhOGd2bzhLbnhvYXZqNFduQmk5cFJrSVIwbURDaGF5WVdJV1BZeXZfczVscDR1WUQtRkxMTWFfanpabjFnU2V4eVFzU2xLRHNZVGl4TzlFUlIxakdzbGc=\",\n      'XSRF_FIELD_NAME': \"session_token\",\n\n      'XSRF_REDIRECT_TOKEN': \"pptJ-AAUI7yck7AOwgzQnvhVLY98MTQ4ODYwMTM4MkAxNDg4NTE0OTgy\"  });\nyt.setConfig('ID_TOKEN', null);window.ytcfg.set('SERVICE_WORKER_KILLSWITCH', false);  yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 0);\nif (window.ytcsi) {window.ytcsi.tick(\"jl\", null, '');}\u003c\/script\u003e",
    "head": "\u003cscript\u003eyt.www.masthead.sizing.runBeforeBodyIsReady(true,true,true);\u003c\/script\u003e\n  \n    \u003clink rel=\"stylesheet\" href=\"\/\/s.ytimg.com\/yts\/cssbin\/www-core-vflRpAQYK.css\" name=\"www-core\"\u003e\n\n\n        \u003clink rel=\"stylesheet\" href=\"\/\/s.ytimg.com\/yts\/cssbin\/www-home-c4-vflTP5Mlh.css\" name=\"www-home-c4\"\u003e",
    "title": "Trending - YouTube",
    "url": "\/feed\/trending"
}
	
	<?php
	} else {
?>

    <!DOCTYPE html><html lang="en" data-cast-api-enabled="true"><head><style name="www-roboto">@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local('Roboto-Medium'),url(//fonts.gstatic.com/s/roboto/v15/RxZJdnzeo3R5zSexge8UUaCWcynf_cDxXwCLxiixG1c.ttf)format('truetype');}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto Regular'),local('Roboto-Regular'),url(//fonts.gstatic.com/s/roboto/v15/zN7GBFwfMP4uA6AR0HCoLQ.ttf)format('truetype');}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local('Roboto-Italic'),url(//fonts.gstatic.com/s/roboto/v15/W4wDsBUluyw0tK3tykhXEfesZW2xOQ-xsNqO47m55DA.ttf)format('truetype');}@font-face{font-family:'Roboto';font-style:italic;font-weight:500;src:local('Roboto Medium Italic'),local('Roboto-MediumItalic'),url(//fonts.gstatic.com/s/roboto/v15/OLffGBTaF0XFOW1gnuHF0Z0EAVxt0G0biEntp43Qt6E.ttf)format('truetype');}</style><script name="www-roboto">if (document.fonts && document.fonts.load) {document.fonts.load("400 10pt Roboto", "E");document.fonts.load("500 10pt Roboto", "E");}</script><script>var ytcsi = {gt: function(n) {n = (n || '') + 'data_';return ytcsi[n] || (ytcsi[n] = {tick: {},info: {}});},now: window.performance && window.performance.timing &&window.performance.now ? function() {return window.performance.timing.navigationStart + window.performance.now();} : function() {return (new Date()).getTime();},tick: function(l, t, n) {ticks = ytcsi.gt(n).tick;var v = t || ytcsi.now();if (ticks[l]) {ticks['_' + l] = (ticks['_' + l] || [ticks[l]]);ticks['_' + l].push(v);}ticks[l] = v;},info: function(k, v, n) {ytcsi.gt(n).info[k] = v;},setStart: function(s, t, n) {ytcsi.info('yt_sts', s, n);ytcsi.tick('_start', t, n);}};(function(w, d) {ytcsi.setStart('dhs', w.performance ? w.performance.timing.responseStart : null);var isPrerender = (d.visibilityState || d.webkitVisibilityState) == 'prerender';var vName = d.webkitVisibilityState ? 'webkitvisibilitychange' : 'visibilitychange';if (isPrerender) {ytcsi.info('prerender', 1);var startTick = function() {ytcsi.setStart('dhs');d.removeEventListener(vName, startTick);};d.addEventListener(vName, startTick, false);}if (d.addEventListener) {d.addEventListener(vName, function() {ytcsi.tick('vc');}, false);}var slt = function(el, t) {setTimeout(function() {var n = ytcsi.now();el.loadTime = n;if (el.slt) {el.slt();}}, t);};w.__ytRIL = function(el) {if (!el.getAttribute('data-thumb')) {if (w.requestAnimationFrame) {w.requestAnimationFrame(function() {slt(el, 0);});} else {slt(el, 16);}}};})(window, document);</script><script>var ytcfg = {d: function() {return (window.yt && yt.config_) || ytcfg.data_ || (ytcfg.data_ = {});},get: function(k, o) {return (k in ytcfg.d()) ? ytcfg.d()[k] : o;},set: function() {var a = arguments;if (a.length > 1) {ytcfg.d()[a[0]] = a[1];} else {for (var k in a[0]) {ytcfg.d()[k] = a[0][k];}}}};</script>  
  




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
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-pageframe-vfl1hU8te.css" name="www-pageframe">
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-guide-vflJFFhnq.css" name="www-guide">

    
<title>  Trending
 - YouTube</title><link rel="alternate" media="handheld" href="https://m.youtube.com/feed/trending"><link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.youtube.com/feed/trending">        <meta name="title" content="Trending">

      <meta name="description" content="The pulse of what&#39;s trending on YouTube. Check out the latest music videos, trailers, comedy clips, and everything else that people are watching right now.">

  <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">
<link rel="manifest" href="/manifest.json"><link rel="search" type="application/opensearchdescription+xml" href="https://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search"><link rel="shortcut icon" href="https://s.ytimg.com//s.ytimg.com/yts/img/favicon-vflz7uhzw.ico" type="image/x-icon">     <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vfl8NGn4k.png" sizes="32x32"><link rel="icon" href="//s.ytimg.com/yts/img/favicon_48-vfl1s0rGh.png" sizes="48x48"><link rel="icon" href="//s.ytimg.com/yts/img/favicon_96-vfldSA3ca.png" sizes="96x96"><link rel="icon" href="//s.ytimg.com/yts/img/favicon_144-vflWmzoXw.png" sizes="144x144"><meta name="theme-color" content="#e62117">    <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-home-c4-vflVmH63h.css" name="www-home-c4">

<style>.yt-uix-button-primary, .yt-uix-button-primary[disabled], .yt-uix-button-primary[disabled]:hover, .yt-uix-button-primary[disabled]:active, .yt-uix-button-primary[disabled]:focus { background-color: #167ac6; }</style></head>

      <body dir="ltr" id="body" class="  ltr    exp-responsive exp-scrollable-guide exp-search-big-thumbs   site-center-aligned site-as-giant-card guide-pinning-enabled    visibility-logging-enabled   not-nirvana-dogfood  not-yt-legacy-css    flex-width-enabled      flex-width-enabled-snap    delayed-frame-styles-not-in  " data-spf-name="other">

  <div id="early-body"></div>
  <div id="body-container"><div id="a11y-announcements-container" role="alert"><div id="a11y-announcements-message"></div></div><form name="logoutForm" method="POST" action="/logout"><input type="hidden" name="action_logout" value="1"></form><div id="masthead-positioner">  <div id="ticker-content">
        

  </div>
  <?php
	include("./yts/htmlbin/hitchhiker-masthead-vfl_BASED.php");
	?>
    <div id="masthead-appbar-container" class="clearfix"><div id="masthead-appbar"><div id="appbar-content" class="">      <?php
	include("./yts_pagecontent/appbar_trending.php");
	?>

</div></div></div>

</div><div id="masthead-positioner-height-offset"></div><div id="page-container"><div id="page" class="  feed    not-fixed-width-tab-widescreen clearfix"><div id="guide" class="yt-scrollbar">      <div id="appbar-guide-menu" class="appbar-menu appbar-guide-menu-layout appbar-guide-clickable-ancestor yt-uix-scroller yt-uix-tdl" role="navigation">
    <div id="guide-container">
        <div class="guide-module-content yt-scrollbar">
    <ul class="guide-toplevel">
            <li class="guide-section vve-check"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
      
      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
            
  <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="what_to_watch-guide-item" 
 data-visibility-tracking="" role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link    "
    href="/"
    title="Home"
    data-external-id="what_to_watch" data-serialized-endpoint="0qDduQEREg9GRXdoYXRfdG9fd2F0Y2g%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-system&amp;ved=CGoQtSwYACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
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
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link  guide-item-selected   "
    href="/feed/trending"
    title="Trending"
    data-external-id="trending" data-serialized-endpoint="0qDduQEMEgpGRXRyZW5kaW5n" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-trending&amp;ved=CGsQtSwYASITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
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
    data-external-id="history" data-serialized-endpoint="0qDduQELEglGRWhpc3Rvcnk%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-personal&amp;ved=CGwQtSwYAiITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
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
    data-external-id="unlimited" data-serialized-endpoint="0qDduQENEgtTUHVubGltaXRlZA%3D%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;ved=CG0QtSwYAyITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
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
    data-external-id="" data-serialized-endpoint="qrnBvQFZCldodHRwczovL3R2LnlvdXR1YmUuY29tLz91dG1fc291cmNlPXlvdXR1YmVfd2ViJnV0bV9tZWRpdW09ZXAmdXRtX2NhbXBhaWduPWhvbWUmdmU9MzQyNzM%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;ved=CG4Q4YsCGAQiEwjVt_aD6NXTAhVmJH4KHTTDCBko6R4"
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
    data-external-id="UC-9-kyTW8ZkZNDHQJ6FgpwQ" data-serialized-endpoint="0qDduQEaEhhVQy05LWt5VFc4WmtaTkRIUUo2Rmdwd1E%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHAQtSwYACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="//i.ytimg.com/i/-9-kyTW8ZkZNDHQJ6FgpwQ/1.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UCEgdi0XIXXZ-qJOFPf4JSKw" data-serialized-endpoint="0qDduQEaEhhVQ0VnZGkwWElYWFotcUpPRlBmNEpTS3c%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHEQtSwYASITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="//i.ytimg.com/i/Egdi0XIXXZ-qJOFPf4JSKw/1.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UCOpNcN46UbXVtpKMrmU4Abg" data-serialized-endpoint="0qDduQEaEhhVQ09wTmNONDZVYlhWdHBLTXJtVTRBYmc%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHIQtSwYAiITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="//i.ytimg.com/i/OpNcN46UbXVtpKMrmU4Abg/1.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UClgRkhTL3_hImCAmdLfDE4g" data-serialized-endpoint="0qDduQEaEhhVQ2xnUmtoVEwzX2hJbUNBbWRMZkRFNGc%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHMQtSwYAyITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="//i.ytimg.com/i/lgRkhTL3_hImCAmdLfDE4g/1.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UCl8dMTqDrJQ0c8y23UBu4kQ" data-serialized-endpoint="0qDduQEaEhhVQ2w4ZE1UcURySlEwYzh5MjNVQnU0a1E%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHQQtSwYBCITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="https://yt3.ggpht.com/-hFxEr8QHrvM/AAAAAAAAAAI/AAAAAAAAAAA/REjjL0X3gIs/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UCYfdidRxbB8Qhf0Nx7ioOYw" data-serialized-endpoint="0qDduQEaEhhVQ1lmZGlkUnhiQjhRaGYwTng3aW9PWXc%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHUQtSwYBSITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="//i.ytimg.com/i/YfdidRxbB8Qhf0Nx7ioOYw/1.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UC4R8DWoMoI7CAwX8_LjQHig" data-serialized-endpoint="0qDduQEaEhhVQzRSOERXb01vSTdDQXdYOF9MalFIaWc%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHYQtSwYBiITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="//i.ytimg.com/i/4R8DWoMoI7CAwX8_LjQHig/1.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UCBR8-60-B28hp2BmDPdntcQ" data-serialized-endpoint="0qDduQEaEhhVQ0JSOC02MC1CMjhocDJCbURQZG50Y1E%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHcQtSwYByITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="https://yt3.ggpht.com/-dL2jeHlm2Ok/AAAAAAAAAAI/AAAAAAAAAAA/ZCMMkRj-hrw/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="UCzuqhhs6NWbgTzMuM09WKDQ" data-serialized-endpoint="0qDduQEaEhhVQ3p1cWhoczZOV2JnVHpNdU0wOVdLRFE%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel&amp;ved=CHgQtSwYCCITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img data-thumb="//i.ytimg.com/i/zuqhhs6NWbgTzMuM09WKDQ/1.jpg" alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" >

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
    data-external-id="guide_builder" data-serialized-endpoint="0qPduQECCAE%3D" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-manage&amp;ved=CHoQtSwYACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"
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
      <a href="https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en&amp;uilel=3&amp;passive=true&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fapp%3Ddesktop%26hl%3Den%26feature%3Dsign_in_promo%26action_handle_signin%3Dtrue%26next%3D%252Ffeed%252Ftrending" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ"><span class="yt-uix-button-content">Sign in</span></a>
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
    data-external-id="__ID__" data-serialized-endpoint="" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-playlists"
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
    data-external-id="__ID__" data-serialized-endpoint="" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-playlists"
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
    data-external-id="__ID__" data-serialized-endpoint="" data-visibility-tracking="" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;feature=g-channel"
  >
    <span class="yt-valign-container">
        <span class="thumb">  <span class="video-thumb  yt-thumb yt-thumb-20"
    >
    <span class="yt-thumb-square">
      <span class="yt-thumb-clip">
        
  <img alt="" aria-hidden="true" width="20" data-ytimg="1" onload=";window.__ytRIL &amp;&amp; __ytRIL(this)" height="20" src="__THUMBNAIL_URL__" >

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
</div></div><div id="header"></div><div id="player" class="  off-screen  " role="complementary"><div id="theater-background" class="player-height"></div>  <div id="player-mole-container">
    <div id="player-unavailable" class="  hid  ">
      
    </div>

    <div id="player-api" class="player-width player-height off-screen-target player-api" tabIndex="-1"></div>
    

    <div id="watch-queue-mole" class="video-mole mole-collapsed hid"><div id="watch-queue" class="watch-playlist player-height"><div class="main-content"><div class="watch-queue-header"><div class="watch-queue-info"><div class="watch-queue-info-icon"><span class="tv-queue-list-icon yt-sprite"></span></div><h3 class="watch-queue-title">Watch Queue</h3><h3 class="tv-queue-title">Queue</h3><span class="tv-queue-details"></span></div><div class="watch-queue-control-bar control-bar-button"><div class="watch-queue-mole-info"><div class="watch-queue-control-bar-icon"><span class="watch-queue-icon yt-sprite"></span></div><div class="watch-queue-title-container"><span class="watch-queue-count"></span><span class="watch-queue-title">Watch Queue</span><span class="tv-queue-title">Queue</span></div></div>  <span class="dark-overflow-action-menu">
    
    
    <button aria-haspopup="true" onclick=";return false;" class="flip control-bar-button yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty" aria-expanded="false" type="button" aria-label="Actions for the queue" ><span class="yt-uix-button-arrow yt-sprite"></span><ul class="watch-queue-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid" role="menu" aria-haspopup="true"><li role="menuitem"><span class="watch-queue-menu-choice overflow-menu-choice yt-uix-button-menu-item" onclick=";return false;" data-action="remove-all" >Remove all</span></li><li role="menuitem"><span class="watch-queue-menu-choice overflow-menu-choice yt-uix-button-menu-item" onclick=";return false;" data-action="disconnect" >Disconnect</span></li></ul></button>
  </span>
  <div class="watch-queue-controls">
    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button prev-watch-queue-button yt-uix-button-opacity yt-uix-tooltip yt-uix-tooltip" type="button" onclick=";return false;" title="Previous video"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-prev yt-sprite"></span></span></button>

    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button play-watch-queue-button yt-uix-button-opacity yt-uix-tooltip yt-uix-tooltip" type="button" onclick=";return false;" title="Play"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-play yt-sprite"></span></span></button>

    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button pause-watch-queue-button yt-uix-button-opacity yt-uix-tooltip hid yt-uix-tooltip" type="button" onclick=";return false;" title="Pause"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-pause yt-sprite"></span></span></button>

    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-empty yt-uix-button-has-icon control-bar-button next-watch-queue-button yt-uix-button-opacity yt-uix-tooltip yt-uix-tooltip" type="button" onclick=";return false;" title="Next video"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-watch-queue-next yt-sprite"></span></span></button>
  </div>
</div><div class="autoplay-dismiss-bar fade-out"><span class="autoplay-dismiss-title-label">The next video is starting</span><span><button class="yt-uix-button yt-uix-button-size-default autoplay-dismiss-button yt-uix-tooltip" type="button" onclick=";return false;" title="stop"><span class="yt-uix-button-content">stop</span></button></span></div></div><div class="watch-queue-items-container yt-scrollbar-dark yt-scrollbar"><div class="yt-uix-scroller playlist-videos-list"><ol class="watch-queue-items-list" data-scroll-action="yt.www.watchqueue.loadThumbnails">  <p class="yt-spinner ">
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

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
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

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
</div><div id="content" class="  content-alignment" role="main"><?php
	include("./yts_pagecontent/trending.php");
	?>
</div></div></div></div>  <div id="footer-container" class="yt-base-gutter force-layer"><div id="footer"><div id="footer-main"><div id="footer-logo"><a href="/" id="footer-logo-link" title="YouTube home" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ&amp;ved=CAEQpmEiEwjVt_aD6NXTAhVmJH4KHTTDCBko6R4" class="yt-uix-sessionlink"><span class="footer-logo-icon yt-sprite"></span></a></div>  <ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon" type="button" onclick=";return false;" id="yt-picker-language-button" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" data-picker-key="language" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-footer-language yt-sprite"></span></span><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Language:
  </span>
  English
</span><span class="yt-uix-button-arrow yt-sprite"></span></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-country-button" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" data-picker-key="country" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Content location:
  </span>
  United States
</span><span class="yt-uix-button-arrow yt-sprite"></span></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-safetymode-button" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" data-picker-key="safetymode" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Restricted Mode:
  </span>
Off
</span><span class="yt-uix-button-arrow yt-sprite"></span></button>


      </li>
  </ul>
<a href="/feed/history" class="yt-uix-button  footer-history yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default yt-uix-button-has-icon" data-sessionlink="ei=PuUKWdWgIebI-AO0hqPIAQ"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-footer-history yt-sprite"></span></span><span class="yt-uix-button-content">History</span></a>    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon yt-uix-button-reverse yt-google-help-link inq-no-click " type="button" onclick=";return false;" id="google-help" data-ghelp-tracking-param="" data-ghelp-anchor="google-help" data-load-chat-support="" data-feedback-product-id="59"><span class="yt-uix-button-icon-wrapper"><span class="yt-uix-button-icon yt-uix-button-icon-questionmark yt-sprite"></span></span><span class="yt-uix-button-content">Help
</span></button>
      <div id="yt-picker-language-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner ">
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-country-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner ">
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-safetymode-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner ">
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

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
  <li></li>
</ul></div></div></div>


      <div class="yt-dialog hid " id="feed-privacy-lb">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg" role="dialog">
        <div class="yt-dialog-fg-content">
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
      <p class="yt-spinner ">
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

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
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

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
      <a class="sign-in-link" href="https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en&amp;uilel=3&amp;passive=true&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fapp%3Ddesktop%26hl%3Den%26feature%3Dplaylist%26action_handle_signin%3Dtrue%26next%3D%252Ffeed%252Ftrending">Sign in</a> to add this to Watch Later

    </div>
<div id="yt-uix-videoactionmenu-menu" class="yt-ui-menu-content">  <div class="hide-on-create-pl-panel">
    <h3>
Add to
    </h3>
  </div>
  <div class="add-to-widget">
      <p class="yt-spinner ">
        <span class="yt-spinner-img  yt-sprite" title="Loading icon"></span>

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
      yt.setConfig('ANGULAR_JS', "\//s.ytimg.com/yts\/jslib\/angular.min-vflNt0vEg.js");
  yt.setConfig('TRANSLATIONEDITOR_JS', "\//s.ytimg.com/yts\/jsbin\/www-translationeditor-vfl0GQhmt\/www-translationeditor.js");
  yt.setMsg('UNSAVED_CHANGES_WARNING', "Some of the changes you have made to channel settings have not been saved and will be lost if you navigate away from this page.");

    yt.setConfig(
      'JS_PAGE_MODULES', [
          'www/feed',
        'www/ypc_bootstrap'
      ]);




  yt.setConfig('DISMISS_THROUGH_IT', true);


      yt.setConfig({
        'GUIDE_SELECTED_ITEM': "0qDduQEMEgpGRXRyZW5kaW5n"
      });

      yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });

  </script>
  
<script>yt.setConfig({APIARY_HOST: "",INNERTUBE_API_KEY: "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",INNERTUBE_CONTEXT_CLIENT_VERSION: "1.20170427",INNERTUBE_CONTEXT_CLIENT_NAME: 1,GAPI_HINT_PARAMS: "m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.DTPeBB_SvOA.O\/m=__features__\/rt=j\/d=1\/rs=AHpOoo-J3J0yqNDMPVrmQT6j-SBFfGx8oA",XHR_APIARY_HOST: "youtubei.youtube.com",APIARY_HOST_FIRSTPARTY: "",INNERTUBE_API_VERSION: "v1",'VISITOR_DATA': "CgtiTmthOHdTU09mVQ%3D%3D",'GAPI_HOST': "https:\/\/apis.google.com",'GAPI_LOCALE': "en_US",'INNERTUBE_CONTEXT_HL': "en",'INNERTUBE_CONTEXT_GL': "US",'XHR_APIARY_HOST': "youtubei.youtube.com"});yt.setConfig({'ROOT_VE_CHILDREN': ["CAEQpmEiEwjVt_aD6NXTAhVmJH4KHTTDCBko6R4","CAIQ7VAiEwjVt_aD6NXTAhVmJH4KHTTDCBko6R4","CGUQxzEiEwjVt_aD6NXTAhVmJH4KHTTDCBko6R4","CGYQwy0YACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CGcQwy0YASITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CGgQ_h4iEwjVt_aD6NXTAhVmJH4KHTTDCBko6R4","CGkQ5isYACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CGoQtSwYACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CGsQtSwYASITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CGwQtSwYAiITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CG0QtSwYAyITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CG4Q4YsCGAQiEwjVt_aD6NXTAhVmJH4KHTTDCBko6R4","CG8Q5isYASITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHAQtSwYACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHEQtSwYASITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHIQtSwYAiITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHMQtSwYAyITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHQQtSwYBCITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHUQtSwYBSITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHYQtSwYBiITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHcQtSwYByITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHgQtSwYCCITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHkQ5isYAiITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHoQtSwYACITCNW39oPo1dMCFWYkfgodNMMIGSjpHg","CHsQ2C4YAyITCNW39oPo1dMCFWYkfgodNMMIGSjpHg"],'ROOT_VE_TYPE': 3945});yt.setConfig({'EVENT_ID': "PuUKWdWgIebI-AO0hqPIAQ",'PAGE_NAME': "feed",'LOGGED_IN': false,'SESSION_INDEX': null,'VALID_SESSION_TEMPDATA_DOMAINS': ["www.youtube.com","gaming.youtube.com"],'PARENT_TRACKING_PARAMS': "",'FORMATS_FILE_SIZE_JS': ["%s B","%s KB","%s MB","%s GB","%s TB"],'DELEGATED_SESSION_ID': null,'ONE_PICK_URL': "",'UNIVERSAL_HOVERCARDS': true,'GOOGLEPLUS_HOST': "https:\/\/plus.google.com",'PAGEFRAME_JS': "\//s.ytimg.com/yts\/jsbin\/www-pageframe-vflj3aNNi\/www-pageframe.js",'GAPI_LOADER_URL': "\//s.ytimg.com/yts\/jsbin\/www-gapi-loader-vflFXorI_\/www-gapi-loader.js",'JS_COMMON_MODULE': "\//s.ytimg.com/yts\/jsbin\/www-en_US-vflPeHMz9\/common.js",'PAGE_FRAME_DELAYLOADED_CSS': "\//s.ytimg.com/yts\/cssbin\/www-pageframedelayloaded-vflo9ddF2.css",'EXPERIMENT_FLAGS': {"use_push_for_desktop_live_chat":true,"gfeedback_for_signed_out_users_enabled":true,"web_logging_max_batch":20,"warm_load_nav_start_web":true,"autoescape_tempdata_url":true,"autoplay_pause_sampling_fraction":0.0,"desktop_pyv_on_watch_override_lact":true,"clear_web_implicit_clicktracking":true,"enable_more_related_ve_logging":true,"service_worker_enabled":true,"enable_server_side_search_pyv":true,"desktop_pyv_on_watch_via_valor":true,"service_worker_push_enabled":true,"player_interaction_logging":true,"comment_deep_link":true,"watch_next_pause_autoplay_lact_sec":0,"app_settings_snapshot_min_time_between_snapshots_hours":24,"block_spf_search_ads_impressions":true,"service_worker_push_prompt_cap":1,"same_domain_static_resources_desktop":true,"consent_url_override":"","enable_youtubei_innertube":true,"player_swfcfg_cleanup":true,"web_gel_lact":true,"service_worker_scope":"\/","log_window_onerror_fraction":0.1,"chat_smoothing_animations":84,"service_worker_push_home_only":true,"navigation_only_csi_reset":true,"cold_load_nav_start_web":true,"youtubei_for_web":true,"desktop_notification_set_title_bar":true,"desktop_pyv_on_watch_missing_params":true},'GUIDED_HELP_PARAMS': {"context":"yt_web_trending","logged_in":"0"},'HIGH_CONTRAST_MODE_CSS': "\//s.ytimg.com/yts\/cssbin\/www-highcontrastmode-vflbPe0Z_.css",'PREFETCH_LINKS': false,'PREFETCH_LINKS_MAX': 1,'PREFETCH_AUTOPLAY': false,'PREFETCH_AUTOPLAY_TIME': 0,'PREFETCH_AUTONAV': false,'PREBUFFER_MAX': 1,'PREBUFFER_LINKS': false,'PREBUFFER_AUTOPLAY': false,'PREBUFFER_AUTONAV': false,'WATCH_LATER_BUTTON': "\n\n  \u003cbutton class=\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip\" type=\"button\" onclick=\";return false;\" role=\"button\" title=\"Watch Later\" data-button-menu-id=\"shared-addto-watch-later-login\" data-video-ids=\"__VIDEO_ID__\"\u003e\u003cspan class=\"yt-uix-button-arrow yt-sprite\"\u003e\u003c\/span\u003e\u003c\/button\u003e\n",'WATCH_QUEUE_BUTTON': "  \u003cbutton class=\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip\" type=\"button\" onclick=\";return false;\" title=\"Queue\" data-style=\"tv-queue\" data-video-ids=\"__VIDEO_ID__\"\u003e\u003c\/button\u003e\n",'WATCH_QUEUE_MENU': "  \u003cspan class=\"thumb-menu dark-overflow-action-menu video-actions\"\u003e\n    \u003cbutton type=\"button\" aria-expanded=\"false\" class=\"yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty\" onclick=\";return false;\" aria-haspopup=\"true\" \u003e\u003cspan class=\"yt-uix-button-arrow yt-sprite\"\u003e\u003c\/span\u003e\u003cul class=\"watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid\"\u003e\u003cli role=\"menuitem\" class=\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item\" data-action=\"play-next\" onclick=\";return false;\"  data-video-ids=\"__VIDEO_ID__\"\u003e\u003cspan class=\"addto-watch-queue-menu-text\"\u003ePlay next\u003c\/span\u003e\u003c\/li\u003e\u003cli role=\"menuitem\" class=\"overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item\" data-action=\"play-now\" onclick=\";return false;\"  data-video-ids=\"__VIDEO_ID__\"\u003e\u003cspan class=\"addto-watch-queue-menu-text\"\u003ePlay now\u003c\/span\u003e\u003c\/li\u003e\u003c\/ul\u003e\u003c\/button\u003e\n  \u003c\/span\u003e\n",'SAFETY_MODE_PENDING': false,'ZWIEBACK_PING_URLS': ["https:\/\/www.google.com\/pagead\/lvz?pg=feed\u0026evtid=ACWVUubjn1bxddrhev2efilMpPtB2JBPRb3Q7c52fKEYNeB8GK1hBHLCxrEluNsA6UGwMwTRY7TPF2g7lWyw4WtjC2yL2DJ_xA\u0026req_ts=1493886270\u0026sigh=AGwc71vwcHkwemDP_7n6UneIQ_6gJKkPPg"],'LOCAL_DATE_TIME_CONFIG': {"formatShortTime":"h:mm a","weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"shortWeekdays":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"amPms":["AM","PM"],"formatLongDate":"MMMM d, yyyy h:mm a","dateFormats":["MMMM d, yyyy h:mm a","MMMM d, yyyy","MMM d, yyyy","MMM d, yyyy"],"weekendRange":[6,5],"firstDayOfWeek":0,"formatWeekdayShortTime":"EE h:mm a","firstWeekCutoffDay":3,"formatLongDateOnly":"MMMM d, yyyy","formatShortDate":"MMM d, yyyy","shortMonths":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},'PAGE_CL': 154470109,'PAGE_BUILD_LABEL': "youtube_20170427_0_RC5",'VARIANTS_CHECKSUM': "7dfff4f2eccbdcbec66b38823e14394b",'CLIENT_PROTOCOL': "HTTP\/1.0",'CLIENT_TRANSPORT': "tcp",'MDX_ENABLE_CASTV2': true,'MDX_ENABLE_QUEUE': true,'FEEDBACK_BUCKET_ID': "Other",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"experiments":"9405987,9415398,9416475,9419452,9419979,9420289,9422596,9423555,9431012,9432939,9433870,9434046,9434289,9434949,9438309,9439294,9440054,9441194,9442387,9442746,9443436,9444189,9444771,9445139,9446054,9446364,9446441,9448302,9449072,9449243,9451814,9451823,9452833,9453167,9453897,9454394,9454653,9454941,9455031,9456445,9456628,9456640,9457114,9457141,9457169,9457317,9457541,9457591,9457595,9457597,9458230,9458265,9458576,9458668,9459075,9459419,9459445,9459793,9459803,9460087,9460098,9460349,9460554,9460829,9460959,9461124,9461777,9462018,9462032,9462127,9463244,9463460,9463583,9463594,9463617,9463808,9463879,9463936,9463963,9463965,9464181,9464207,9464267,9464440,9464823,9464887,9464889,9465513,9465533,9465652,9465666,9465709,9465813,9466778,9466793,9466795,9466797,9466835,9467001,9467217,9467400,9467426,9467508,9467510,9467512,9467535,9467663,9467700,9467711,9467795,9467806,9467820,9467822,9467884,9467896,9468110,9468166,9468195,9468228,9468285,9468550,9468805,9468954,9469041,9469192,9469224,9469606,9469609,9469615,9469734,9469862,9469883,9469887,9469911,9469972,9470169,9470299,9470318,9470434,9470791,9470924,9471112,9471263,9471413,9471472,9471482,9471955,9471993,9472011,9472097,9472169,9472178,9472401,9472416,9472450,9472474,9472485,9472564,9472609,9472711,9472951,9473182,9473375,9473387,9473402,9473456,9473514,9473576,9473926,9473977,9474064,9474066,9474259","logged_in":false,"accept_language":"en-US,en;q=0.8"}});   yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });
yt.setConfig('SPF_SEARCH_BOX', true);yt.setMsg({'ADDTO_CREATE_NEW_PLAYLIST': "Create new playlist\n",'ADDTO_CREATE_PLAYLIST_DYNAMIC_TITLE': "  $dynamic_title_placeholder (create new)\n",'ADDTO_WATCH_LATER': "Watch Later",'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error",'ADDTO_WATCH_QUEUE': "Watch Queue",'ADDTO_WATCH_QUEUE_ADDED': "Added",'ADDTO_WATCH_QUEUE_ERROR': "Error",'ADDTO_TV_QUEUE': "Queue",'ADS_INSTREAM_FIRST_PLAY': "A video ad is playing.",'ADS_INSTREAM_SKIPPABLE': "Video ad can be skipped.",'ADS_OVERLAY_IMPRESSION': "Ad displayed.",'MASTHEAD_NOTIFICATIONS_LABEL': {"other": "# unread notifications.", "case1": "1 unread notification.", "case0": "0 unread notifications."},'MASTHEAD_NOTIFICATIONS_COUNT_99PLUS': "99+",'MDX_AUTOPLAY_OFF': 'Autoplay is off','MDX_AUTOPLAY_ON': 'Autoplay is on'});  yt.setConfig('FEED_PRIVACY_CSS_URL', "\//s.ytimg.com/yts\/cssbin\/www-feedprivacydialog-vflWi26th.css");
  yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\//s.ytimg.com/yts\/jsbin\/www-searchbox-legacy-vflDE45EL\/www-searchbox-legacy.js",'SBOX_SETTINGS': {"HAS_ON_SCREEN_KEYBOARD":false,"REQUEST_DOMAIN":"us","PSUGGEST_TOKEN":null,"PQ":"","REQUEST_LANGUAGE":"en","SESSION_INDEX":null,"SUGG_EXP_ID":"ytd_en_us_arm_1","IS_FUSION":false},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL":"Remove","SUGGESTION_DISMISSED_LABEL":"Suggestion dismissed"}});  yt.setConfig({
    'YPC_LOADER_JS': "\//s.ytimg.com/yts\/jsbin\/www-ypc-vflQCA2fx\/www-ypc.js",
    'YPC_LOADER_CSS': "\//s.ytimg.com/yts\/cssbin\/www-ypc-vfl-AgXO7.css",
    'YPC_SIGNIN_URL': "https:\/\/accounts.google.com\/ServiceLogin?service=youtube\u0026hl=en\u0026uilel=3\u0026passive=true\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fapp%3Ddesktop%26hl%3Den%26action_handle_signin%3Dtrue%26next%3D%252F",
    'DBLCLK_ADVERTISER_ID': "2542116",
    'DBLCLK_YPC_ACTIVITY_GROUP': "youtu444",
    'SUBSCRIPTION_URL': "\/subscription_ajax",
    'YPC_SWITCH_URL': "\/signin?next=%2F\u0026feature=purchases\u0026action_handle_signin=true\u0026skip_identity_prompt=True",
    'YPC_GB_LANGUAGE': "en_US",
    'YPC_MB_URL': "https:\/\/payments.youtube.com\/payments\/v4\/js\/integrator.js?ss=md",
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
  yt.setConfig('GOOGLE_HELP_CONTEXT', "yt_web_trending");
ytcsi.info('st', 478);ytcfg.set({"TIMING_ACTION":"browse","TIMING_INFO":{"yt_lt":"cold","yt_ref":"channel","yt_fn":"trending","c":"WEB","yt_li":"0","GetBrowse_rid":"0x61c536b71e4bb2df","cver":"1.20170427"},"CSI_SERVICE_NAME":"youtube","CSI_VIEWPORT":true,"TIMING_AFT_KEYS":["cpt"]});;  yt.setConfig({
      'XSRF_TOKEN': "QUFFLUhqazhOYkxqSUdxd3JibkVWRWY3LTFPdWpVNEU2Z3xBQ3Jtc0tuZkpFZGtfV3dFbjlCa2JtcU82bXhfcXQzSkdUQUxRUW5xeEVYeG9MN1dOOEtpUWxCYVRGWFYxWWl5ZWVOVkNqZU5nak5kck9CZnJ1dHVRR29mcFItSzFILWpkUmNFbDFHTHIwQkNlOFpCSG11SFBmZ0VuejdxcEN2UnJqdGpKZ2JyWHZmVGtGazRDSzNBWEVrMF9Ta1NCWHBGN0E=",
      'XSRF_FIELD_NAME': "session_token",

      'XSRF_REDIRECT_TOKEN': "b5LVwcWI8ML5PfKaX7KrPwfQ7bt8MTQ5Mzk3MjY3MUAxNDkzODg2Mjcx"  });
yt.setConfig('ID_TOKEN', null);window.ytcfg.set('SERVICE_WORKER_KILLSWITCH', false);  yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 0);
if (window.ytcsi) {window.ytcsi.tick("jl", null, '');}</script>
</body></html>
	<?php
	}
?>

	