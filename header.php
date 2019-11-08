<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="html">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( is_home() || is_front_page() ) : ?>
<title>ハウスコム株式会社</title>
<?php else : ?>
<title><?php the_title_attribute(); ?> | ハウスコム株式会社</title>
<?php endif; ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta property="og:url" content="http://recruit.housecom.jp/">
<meta property="og:type" content="website">
<meta property="og:title" content="ハウスコム株式会社">
<meta property="og:description" content="">
<meta property="og:image" content="/img/ogp.jpg">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
<link href="/css/reset.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="/css/animate.css" rel="stylesheet" type="text/css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<!-- ブラウザの横幅が769px以上の場合 -->
<link href="/css/pc.css" rel="stylesheet" type="text/css" media="screen and (min-width: 769px)" />
<!-- ブラウザの横幅が768px以下の場合 -->
<link href="/css/tb.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)" />
<!-- ブラウザの横幅が640px以下の場合 -->
<link href="/css/sp.css" rel="stylesheet" type="text/css" media="screen and (max-width: 640px)" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/bgswitch.js"></script>
<script src="/js/wow.min.js"></script>
<script>
    $(window).on('load', function() {
        $('.main_visual').bgSwitcher({
            images: ['img/home/bg01.jpg','img/home/bg02.jpg'],
        });
    });
    (function(d) {
    var config = {
        kitId: 'eku6aag',
        scriptTimeout: 3000,
        async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    
    wow = new WOW(
        {
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset:180// アニメーションをスタートさせる距離
        }
    );
    wow.init();
</script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.min.js"></script>
<![endif]-->
<meta name="msapplication-square70x70logo" content="/img/favicons/site-tile-70x70.png">
<meta name="msapplication-square150x150logo" content="/img/favicons/site-tile-150x150.png">
<meta name="msapplication-wide310x150logo" content="/img/favicons/site-tile-310x150.png">
<meta name="msapplication-square310x310logo" content="/img/favicons/site-tile-310x310.png">
<meta name="msapplication-TileColor" content="#ffffff">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="/img/favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="36x36" href="/img/favicons/android-chrome-36x36.png">
<link rel="icon" type="image/png" sizes="48x48" href="/img/favicons/android-chrome-48x48.png">
<link rel="icon" type="image/png" sizes="72x72" href="/img/favicons/android-chrome-72x72.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/android-chrome-96x96.png">
<link rel="icon" type="image/png" sizes="128x128" href="/img/favicons/android-chrome-128x128.png">
<link rel="icon" type="image/png" sizes="144x144" href="/img/favicons/android-chrome-144x144.png">
<link rel="icon" type="image/png" sizes="152x152" href="/img/favicons/android-chrome-152x152.png">
<link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="256x256" href="/img/favicons/android-chrome-256x256.png">
<link rel="icon" type="image/png" sizes="384x384" href="/img/favicons/android-chrome-384x384.png">
<link rel="icon" type="image/png" sizes="512x512" href="/img/favicons/android-chrome-512x512.png">
<link rel="icon" type="image/png" sizes="36x36" href="/img/favicons/icon-36x36.png">
<link rel="icon" type="image/png" sizes="48x48" href="/img/favicons/icon-48x48.png">
<link rel="icon" type="image/png" sizes="72x72" href="/img/favicons/icon-72x72.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/icon-96x96.png">
<link rel="icon" type="image/png" sizes="128x128" href="/img/favicons/icon-128x128.png">
<link rel="icon" type="image/png" sizes="144x144" href="/img/favicons/icon-144x144.png">
<link rel="icon" type="image/png" sizes="152x152" href="/img/favicons/icon-152x152.png">
<link rel="icon" type="image/png" sizes="160x160" href="/img/favicons/icon-160x160.png">
<link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/icon-192x192.png">
<link rel="icon" type="image/png" sizes="196x196" href="/img/favicons/icon-196x196.png">
<link rel="icon" type="image/png" sizes="256x256" href="/img/favicons/icon-256x256.png">
<link rel="icon" type="image/png" sizes="384x384" href="/img/favicons/icon-384x384.png">
<link rel="icon" type="image/png" sizes="512x512" href="/img/favicons/icon-512x512.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/icon-16x16.png">
<link rel="icon" type="image/png" sizes="24x24" href="/img/favicons/icon-24x24.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/icon-32x32.png">
<link rel="manifest" href="/img/favicons/manifest.json">
</head>