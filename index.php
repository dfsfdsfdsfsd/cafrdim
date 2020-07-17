<?php
$GLOBALS['_ta_campaign_key'] = '444b212ac0952f218b9c5d2a230088cb';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=444b212ac0952f218b9c5d2a230088cb' parameter

require 'bootloader.php';

$campaign_id = 'k203ih';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    case 'reverse_proxy':
        print reverse_proxy($response['url'], "tarp_9f559e34477537c16b581946598ce17c/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>


<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>xertbaervr</title><meta name="author" content="xertbaervr"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://xertbaervr.appspot.com/"/>
<meta property="og:site_name" content="xertbaervr"/>
<meta property="og:title" content="Dedicated to a Healthy Legacy"/>
<meta property="og:description" content="Subscribe to get news on litters and shows!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/9ObqzB"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="xertbaervr"/>
<meta name="twitter:description" content="Dedicated to a Healthy Legacy"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/9ObqzB"/>
<meta name="twitter:image:alt" content="xertbaervr"/>
<meta name="theme-color" content="#c5d1d7"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CObject.is%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/79fb68164481d54f/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function trackingEnabledForType(t){return!("undefined"!=typeof document&&"click"===t&&!Boolean(window._allowCT))||(window._allowCT=-1!==document.cookie.indexOf("cookie_terms_accepted"),window._allowCT)}function logTcclEvent(){var e=this.getAttribute("data-tccl");if(window._trfq&&e)try{var t=e.split(","),n=t[0],o=t[1];if(!trackingEnabledForType(o))return;for(var d=t.splice(2),r=[],c=0;c<d.length;c+=2)r.push([d[c],d[c+1]]);window._trfq.push(["cmdLogEvent",o,n,r])}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",t.toString()],["data",e]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var n=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(n[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhluylEeQ5J.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQftx9897sxZ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwftx9897g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXiWtFCfQ7A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/8396e10278a51439/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/f192c17eaac5d1b4/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-n{padding-top:32px}}@media (max-width: 767px){.x .c1-o{padding-bottom:32px}}@media (max-width: 767px){.x .c1-2o{width:100%}}@media (max-width: 767px){.x .c1-2p{display:flex}}@media (max-width: 767px){.x .c1-2q{justify-content:center}}@media (max-width: 767px){.x .c1-5y{max-width:100%}}@media (max-width: 767px){.x .c1-5z{margin-bottom:8px}}@media (max-width: 767px){.x .c1-60{word-wrap:break-word}}@media (max-width: 767px){.x .c1-61{overflow-wrap:break-word}}@media (max-width: 767px){.x .c1-6f{margin-bottom:24px}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/bb3c30375e303f68/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/6fec1730fcafd5a/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-1t{width:1160px}}@media (min-width: 1280px){.x .c1-3e{font-size:22px}}@media (min-width: 1280px){.x .c1-3q{font-size:44px}}@media (min-width: 1280px){.x .c1-3v{font-size:32px}}@media (min-width: 1280px){.x .c1-5s{font-size:62px}}@media (min-width: 1280px){.x .c1-9b{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-1u{width:1280px}}@media (min-width: 1536px){.x .c1-3f{font-size:24px}}@media (min-width: 1536px){.x .c1-3r{font-size:48px}}@media (min-width: 1536px){.x .c1-3w{font-size:36px}}@media (min-width: 1536px){.x .c1-5t{font-size:70px}}@media (min-width: 1536px){.x .c1-9c{font-size:16px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(0, 0, 0); min-height: 100vh; }</style></head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-d-6-e-2-bd-93-e-972-4102-bee-6-27-b-7-a-9-fabbce" class="layout layout-layout layout-layout-layout-17 locale-en-US lang-en"><div data-ux="Page" id="page-32400" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div id="e63bdb32-60e4-4372-ba27-8557c5799e49" class="widget widget-header widget-header-header-9"><div data-ux="Header" role="main" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-q c1-e c1-f c1-g"></div><div data-ux="Block" id="header_parallax32403" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div id="bs-1"></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-r c1-s c1-b c1-c c1-d c1-e c1-f c1-g"><div id="guacBg32404" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="category" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-14 c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-15 c1-4 c1-b c1-c c1-d c1-16 c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-18 c1-4 c1-19 c1-b c1-c c1-d c1-1a c1-1b c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-r c1-1d c1-1e c1-1f c1-19 c1-b c1-c c1-d c1-1g c1-1h c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-b c1-c c1-1p c1-d c1-1q c1-1r c1-1s c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-21 c1-22 c1-b c1-c c1-23 c1-24 c1-25 c1-26 c1-d c1-27 c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-29 c1-1m c1-2a c1-2b c1-2c c1-2d c1-y c1-2e c1-2f c1-b c1-c c1-2g c1-2h c1-2i c1-2j c1-d c1-e c1-f c1-g"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2k c1-2l c1-2m c1-2n c1-1m c1-c c1-2o c1-2p c1-2q c1-2r c1-d c1-e c1-f c1-g"><a rel="" role="link" aria-haspopup="menu" data-ux="Link" data-page="f02112a9-070f-472f-ad3b-732500b1a0bb" title="xertbaervr" href="/" data-typography="LinkAlpha" class="x-el x-el-a c1-2s c1-2t c1-2u c1-2v c1-2f c1-2w c1-2x c1-2y c1-2z c1-30 c1-31 c1-1m c1-b c1-32 c1-c c1-33 c1-34 c1-35 c1-d c1-e c1-f c1-g" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.32407.click,click"><div data-ux="Block" id="logo-container-32408" class="x-el x-el-div c1-1 c1-2 c1-2m c1-4 c1-r c1-b c1-c c1-d c1-e c1-f c1-g"><h3 role="heading" aria-level="3" data-ux="LogoHeading" id="logo-text-32409" data-aid="HEADER_LOGO_TEXT_RENDERED" data-typography="HeadingBeta" class="x-el x-el-h3 c1-2k c1-2l c1-2v c1-2f c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-2m c1-2n c1-39 c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f">xertbaervr</h3><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxlarge" data-scaler-id="scaler-logo-container-32408" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-3i c1-3j c1-3k c1-3l c1-3m c1-3n c1-2n c1-3a c1-3b c1-3o c1-3p c1-3q c1-3r">xertbaervr</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xlarge" data-scaler-id="scaler-logo-container-32408" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-3i c1-3j c1-3k c1-3l c1-3m c1-3s c1-2n c1-3a c1-3b c1-3t c1-3u c1-3v c1-3w">xertbaervr</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="large" data-scaler-id="scaler-logo-container-32408" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-3i c1-3j c1-3k c1-3l c1-3m c1-39 c1-2n c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f">xertbaervr</span><div id="bs-2"></div></div></a></div></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-3i c1-1v c1-1w c1-1x c1-1y c1-38 c1-20 c1-37 c1-4 c1-2a c1-2c c1-b c1-c c1-d c1-1r c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-3x c1-1m c1-2a c1-3y c1-2c c1-3z c1-11 c1-y c1-22 c1-b c1-c c1-d c1-40 c1-41 c1-e c1-f c1-g"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" role="navigation" class="x-el x-el-nav c1-1 c1-2 c1-1m c1-42 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" id="n-3240132412-navId-1" class="x-el x-el-div c1-1 c1-2 c1-r c1-y c1-22 c1-2a c1-3y c1-2c c1-3z c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div nav-item c1-1 c1-2 c1-43 c1-37 c1-44 c1-45 c1-r c1-3j c1-2m c1-b c1-c c1-46 c1-d c1-e c1-f c1-g"><div id="bs-3"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script></div></div></div></nav></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-3x c1-1m c1-2a c1-3y c1-2c c1-3z c1-47 c1-2e c1-37 c1-38 c1-48 c1-y c1-22 c1-b c1-c c1-d c1-40 c1-41 c1-e c1-f c1-g"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2k c1-2l c1-2m c1-2n c1-1m c1-2e c1-c c1-2o c1-2p c1-2q c1-2r c1-d c1-e c1-f c1-g"><a rel="" role="link" aria-haspopup="menu" data-ux="Link" data-page="f02112a9-070f-472f-ad3b-732500b1a0bb" title="xertbaervr" href="/" data-typography="LinkAlpha" class="x-el x-el-a c1-2s c1-2t c1-2u c1-2v c1-2f c1-2w c1-2x c1-2y c1-2z c1-30 c1-31 c1-1m c1-b c1-32 c1-c c1-33 c1-34 c1-35 c1-d c1-e c1-f c1-g" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.32415.click,click"><div data-ux="Block" id="logo-container-32416" class="x-el x-el-div c1-1 c1-2 c1-2m c1-4 c1-r c1-b c1-c c1-d c1-e c1-f c1-g"><h3 role="heading" aria-level="3" data-ux="LogoHeading" id="logo-text-32417" data-aid="HEADER_LOGO_TEXT_RENDERED" data-typography="HeadingBeta" class="x-el x-el-h3 c1-2k c1-2l c1-2v c1-2f c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-2m c1-2n c1-39 c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f">xertbaervr</h3><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxlarge" data-scaler-id="scaler-logo-container-32416" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-3i c1-3j c1-3k c1-3l c1-3m c1-3n c1-2n c1-3a c1-3b c1-3o c1-3p c1-3q c1-3r">xertbaervr</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xlarge" data-scaler-id="scaler-logo-container-32416" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-3i c1-3j c1-3k c1-3l c1-3m c1-3s c1-2n c1-3a c1-3b c1-3t c1-3u c1-3v c1-3w">xertbaervr</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="large" data-scaler-id="scaler-logo-container-32416" aria-hidden="true" data-typography="HeadingBeta" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-1m c1-3i c1-3j c1-3k c1-3l c1-3m c1-39 c1-2n c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f">xertbaervr</span><div id="bs-4"></div></div></a></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-3x c1-1m c1-2a c1-3y c1-2c c1-3z c1-49 c1-y c1-22 c1-b c1-c c1-d c1-40 c1-41 c1-e c1-f c1-g"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" role="navigation" class="x-el x-el-nav c1-1 c1-2 c1-1m c1-42 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" id="n-3240132413-navId-2" class="x-el x-el-div c1-1 c1-2 c1-r c1-y c1-22 c1-2a c1-3y c1-2c c1-3z c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div nav-item c1-1 c1-2 c1-43 c1-37 c1-44 c1-45 c1-r c1-3j c1-2m c1-b c1-c c1-46 c1-d c1-e c1-f c1-g"><div id="bs-5"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script><a rel="" role="button" aria-haspopup="menu" data-ux="NavLinkDropdown" data-toggle-ignore="true" id="32419" aria-expanded="false" data-aid="NAV_MORE" ignoreCloseAttr="data-ignore-close" aria-label="Website navigation dropdown menu" data-edit-interactive="true" href="#" data-typography="NavAlpha" class="x-el x-el-a c1-4a c1-2 c1-2u c1-2v c1-2f c1-y c1-2x c1-4b c1-22 c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-b c1-3a c1-c c1-4k c1-4l c1-4m c1-d c1-e c1-f c1-g" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.32420.click,click"><div style="pointer-events:none;display:flex;align-items:center" data-aid="NAV_DROPDOWN"><span style="margin-right:4px">More</span><svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-4n c1-2m c1-4o c1-4p c1-4q c1-r c1-b c1-c c1-d c1-e c1-f c1-g"><path fill-rule="evenodd" d="M18.605 7l-6.793 7.024-6.375-7.002L4 8.467 11.768 17l.485-.501L20 8.489z"></path></svg></div></a></div></div></div></nav></div></div></div></nav></div></div></div><div data-ux="Block" id="header_parallax32421" class="x-el x-el-div c1-1 c1-2 c1-4 c1-s c1-3i c1-4r c1-z c1-47 c1-1y c1-20 c1-2a c1-b c1-c c1-d c1-4s c1-4t c1-1r c1-e c1-f c1-g"><div id="bs-6"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-37 c1-38 c1-1k c1-1l c1-1m c1-b c1-c c1-1p c1-d c1-4u c1-1r c1-4v c1-4w c1-4x c1-4y c1-4z c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-50 c1-b c1-c c1-51 c1-52 c1-53 c1-54 c1-55 c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-56 c1-57 c1-1m c1-r c1-58 c1-4 c1-b c1-c c1-1p c1-51 c1-52 c1-59 c1-53 c1-54 c1-55 c1-5a c1-5b c1-d c1-4u c1-5c c1-5d c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2g c1-2i c1-d c1-1q c1-e c1-f c1-g"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-58 c1-5e c1-5f c1-1f c1-b c1-c c1-5g c1-2i c1-5h c1-5i c1-5j c1-5k c1-5l c1-d c1-4y c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-37 c1-38 c1-3z c1-3y c1-1m c1-5m c1-2a c1-2c c1-1y c1-20 c1-5n c1-b c1-c c1-1p c1-d c1-4u c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Element" id="tagline-container-32422" data-typography="HeadingAlpha" class="x-el x-el-div c1-2k c1-2l c1-2v c1-2f c1-36 c1-p c1-r c1-1m c1-2n c1-5o c1-5p c1-3b c1-5q c1-5r c1-5s c1-5t"><h1 role="heading" aria-level="1" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" id="dynamic-tagline-32423" data-typography="HeadingAlpha" class="x-el x-el-h1 c1-2k c1-2l c1-2v c1-2f c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-2m c1-1m c1-5v c1-5w c1-5x c1-2c c1-2n c1-5o c1-5p c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-5q c1-5r c1-5s c1-5t">Dedicated to a Healthy Legacy</h1><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-32422" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-3i c1-1m c1-5v c1-5w c1-5x c1-2c c1-3j c1-3k c1-3l c1-3m c1-5p c1-2n c1-5o c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-5q c1-5r c1-5s c1-5t">Dedicated to a Healthy Legacy</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxlarge" data-scaler-id="scaler-tagline-container-32422" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-3i c1-1m c1-5v c1-5w c1-5x c1-2c c1-3j c1-3k c1-3l c1-3m c1-3n c1-2n c1-5o c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-3o c1-3p c1-3q c1-3r">Dedicated to a Healthy Legacy</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xlarge" data-scaler-id="scaler-tagline-container-32422" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-3i c1-1m c1-5v c1-5w c1-5x c1-2c c1-3j c1-3k c1-3l c1-3m c1-3s c1-2n c1-5o c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-3t c1-3u c1-3v c1-3w">Dedicated to a Healthy Legacy</span><div id="bs-7"></div></div></div><div data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-typography="BodyBeta" class="x-el x-el-p c1-1 c1-2 c1-2v c1-2f c1-63 c1-1y c1-20 c1-64 c1-65 c1-66 c1-67 c1-b c1-5o c1-39 c1-4k c1-3c c1-3d c1-3e c1-3f x-rt"><p style="margin:0"><span>Subscribe to get news on litters and shows!</span></p></div></div></div></div></div></div></div><div data-ux="Block" id="header_parallax32424" class="x-el x-el-div c1-1 c1-2 c1-4 c1-s c1-y c1-4r c1-z c1-47 c1-1y c1-20 c1-2a c1-b c1-c c1-d c1-4s c1-4t c1-27 c1-e c1-f c1-g"><div id="bs-8"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-37 c1-38 c1-1k c1-1l c1-1m c1-b c1-c c1-1p c1-d c1-4u c1-1r c1-4v c1-4w c1-4x c1-4y c1-4z c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-50 c1-b c1-c c1-51 c1-52 c1-53 c1-54 c1-55 c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-56 c1-57 c1-1m c1-r c1-58 c1-4 c1-b c1-c c1-1p c1-51 c1-52 c1-59 c1-53 c1-54 c1-55 c1-5a c1-5b c1-d c1-4u c1-5c c1-5d c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2g c1-2i c1-d c1-1q c1-e c1-f c1-g"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-58 c1-5e c1-5f c1-1f c1-b c1-c c1-5g c1-2i c1-5h c1-5i c1-5j c1-5k c1-5l c1-d c1-4y c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-37 c1-38 c1-3z c1-3y c1-1m c1-5m c1-2a c1-2c c1-1y c1-20 c1-5n c1-b c1-c c1-1p c1-d c1-4u c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Element" id="tagline-container-32425" data-typography="HeadingAlpha" class="x-el x-el-div c1-2k c1-2l c1-2v c1-2f c1-36 c1-p c1-r c1-1m c1-2n c1-5o c1-5p c1-3b c1-5q c1-5r c1-5s c1-5t"><h1 role="heading" aria-level="1" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" id="dynamic-tagline-32426" data-typography="HeadingAlpha" class="x-el x-el-h1 c1-2k c1-2l c1-2v c1-2f c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-2m c1-1m c1-5v c1-5w c1-5x c1-2c c1-2n c1-5o c1-5p c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-5q c1-5r c1-5s c1-5t">Dedicated to a Healthy Legacy</h1><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-32425" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-3i c1-1m c1-5v c1-5w c1-5x c1-2c c1-3j c1-3k c1-3l c1-3m c1-5p c1-2n c1-5o c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-5q c1-5r c1-5s c1-5t">Dedicated to a Healthy Legacy</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxlarge" data-scaler-id="scaler-tagline-container-32425" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-3i c1-1m c1-5v c1-5w c1-5x c1-2c c1-3j c1-3k c1-3l c1-3m c1-3n c1-2n c1-5o c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-3o c1-3p c1-3q c1-3r">Dedicated to a Healthy Legacy</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xlarge" data-scaler-id="scaler-tagline-container-32425" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-2k c1-2l c1-3g c1-3h c1-36 c1-37 c1-38 c1-1y c1-20 c1-5u c1-3i c1-1m c1-5v c1-5w c1-5x c1-2c c1-3j c1-3k c1-3l c1-3m c1-3s c1-2n c1-5o c1-3b c1-5y c1-5z c1-60 c1-61 c1-62 c1-2i c1-3t c1-3u c1-3v c1-3w">Dedicated to a Healthy Legacy</span><div id="bs-9"></div></div></div><div data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-typography="BodyBeta" class="x-el x-el-p c1-1 c1-2 c1-2v c1-2f c1-63 c1-1y c1-20 c1-64 c1-65 c1-66 c1-67 c1-b c1-5o c1-39 c1-4k c1-3c c1-3d c1-3e c1-3f x-rt"><p style="margin:0"><span>Subscribe to get news on litters and shows!</span></p></div></div></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage("//img1.wsimg.com/isteam/stock/9ObqzB/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc",document.getElementById('guacBg32404'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div><div id="8d3e886a-c481-447a-bb76-8baa1d93b3f6" class="widget widget-gallery widget-gallery-gallery-5"><div data-ux="WidgetBanner" role="region" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-1p c1-d c1-4u c1-e c1-1t c1-f c1-1u c1-g"><h1 role="heading" aria-level="1" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-promoted-from="2" data-order="0" data-typography="HeadingBeta" class="x-el x-el-h1 c1-2k c1-2l c1-2v c1-2f c1-6d c1-37 c1-38 c1-1y c1-6e c1-l c1-58 c1-2n c1-39 c1-3a c1-3b c1-6f c1-3c c1-3d c1-3e c1-3f"><span data-ux="Element" class="x-el x-el-span c1-6g c1-4n c1-6h">Photo Gallery</span><hr aria-hidden="true" role="separator" data-ux="SectionHeadingHR" class="x-el x-el-hr c1-2k c1-2l c1-6i c1-6j c1-6k c1-6l c1-20 c1-4 c1-2n c1-39 c1-3c c1-3d c1-3e c1-3f"/></h1><div id="bs-10"><div style="width:1px;height:1px;visibility:hidden"></div></div></div></section> </div></div></div><div id="4d9b472e-3b72-49ab-b4e4-e248e1d4754c" class="widget widget-contact widget-contact-contact-3"><div data-ux="Widget" role="region" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-j c1-k c1-r c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-1p c1-d c1-4u c1-e c1-1t c1-f c1-1u c1-g"><h2 role="heading" aria-level="2" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-typography="HeadingBeta" class="x-el x-el-h2 c1-2k c1-2l c1-2v c1-2f c1-6d c1-37 c1-38 c1-1y c1-6e c1-l c1-58 c1-2n c1-39 c1-3a c1-3b c1-6f c1-3c c1-3d c1-3e c1-3f"><span data-ux="Element" class="x-el x-el-span c1-6g c1-4n c1-6h">Contact Us</span><hr aria-hidden="true" role="separator" data-ux="SectionHeadingHR" class="x-el x-el-hr c1-2k c1-2l c1-6i c1-6j c1-6k c1-6l c1-20 c1-4 c1-2n c1-39 c1-3c c1-3d c1-3e c1-3f"/></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div><div id="4d9b472e-3b72-49ab-b4e4-e248e1d4754c-bootstrap-container"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1v c1-1w c1-6m c1-1y c1-1z c1-20 c1-21 c1-b c1-c c1-23 c1-24 c1-25 c1-26 c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-3x c1-1m c1-2a c1-2b c1-2c c1-2d c1-b c1-c c1-6n c1-6o c1-6p c1-2g c1-2h c1-2i c1-2j c1-d c1-6q c1-6r c1-6s c1-e c1-f c1-g"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-47 c1-2e c1-b c1-c c1-d c1-e c1-f c1-g"><form aria-live="polite" data-ux="Form" class="x-el x-el-form c1-1 c1-2 c1-20 c1-b c1-c c1-d c1-e c1-f c1-g"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value=""/><h4 role="heading" aria-level="4" data-ux="HeadingMinor" data-aid="CONTACT_FORM_TITLE_REND" data-typography="HeadingDelta" class="x-el x-el-h4 c1-1 c1-2 c1-2v c1-2f c1-6t c1-37 c1-38 c1-1y c1-6u c1-b c1-3a c1-39 c1-4k c1-3c c1-3d c1-3e c1-3f">Litter Inquiries</h4><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g"><input type="text" role="textbox" aria-multiline="false" data-ux="InputFloatLabel" id="input32427" value="" data-aid="CONTACT_FORM_NAME" data-typography="InputAlpha" class="x-el x-el-input c1-1 c1-2 c1-6v c1-6w c1-4 c1-6x c1-6y c1-6j c1-6z c1-70 c1-6k c1-71 c1-72 c1-73 c1-74 c1-b c1-75 c1-c c1-4k c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-d c1-e c1-f c1-g"/><label data-ux="InputFloatLabelLabel" for="input32427" data-typography="InputAlpha" class="x-el x-el-label c1-1 c1-2 c1-2v c1-2f c1-3k c1-7h c1-7i c1-7j c1-7k c1-b c1-75 c1-c c1-4k c1-d c1-e c1-f c1-g">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g"><input type="text" role="textbox" aria-multiline="false" data-ux="InputFloatLabel" id="input32428" value="" data-aid="CONTACT_FORM_EMAIL" data-typography="InputAlpha" class="x-el x-el-input c1-1 c1-2 c1-6v c1-6w c1-4 c1-6x c1-6y c1-6j c1-6z c1-70 c1-6k c1-71 c1-72 c1-73 c1-74 c1-b c1-75 c1-c c1-4k c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-d c1-e c1-f c1-g"/><label data-ux="InputFloatLabelLabel" for="input32428" data-typography="InputAlpha" class="x-el x-el-label c1-1 c1-2 c1-2v c1-2f c1-3k c1-7h c1-7i c1-7j c1-7k c1-b c1-75 c1-c c1-4k c1-d c1-e c1-f c1-g">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="InputFloatLabel" type="text" data-aid="Home Address" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g"><input type="text" role="textbox" aria-multiline="false" data-ux="InputFloatLabel" id="input32429" value="" data-aid="Home Address" data-typography="InputAlpha" class="x-el x-el-input c1-1 c1-2 c1-6v c1-6w c1-4 c1-6x c1-6y c1-6j c1-6z c1-70 c1-6k c1-71 c1-72 c1-73 c1-74 c1-b c1-75 c1-c c1-4k c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-d c1-e c1-f c1-g"/><label data-ux="InputFloatLabelLabel" for="input32429" data-typography="InputAlpha" class="x-el x-el-label c1-1 c1-2 c1-2v c1-2f c1-3k c1-7h c1-7i c1-7j c1-7k c1-b c1-75 c1-c c1-4k c1-d c1-e c1-f c1-g">Home Address*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><textarea role="textbox" aria-multiline="true" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" data-typography="InputAlpha" class="x-el x-el-textarea c1-1 c1-2 c1-6v c1-6w c1-4 c1-6x c1-6y c1-6j c1-6z c1-70 c1-6k c1-7l c1-7m c1-73 c1-74 c1-7n c1-b c1-75 c1-c c1-4k c1-76 c1-77 c1-78 c1-7f c1-7g c1-d c1-e c1-f c1-g"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2e c1-b c1-c c1-d c1-e c1-f c1-g"><button tcclTracking="click" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" data-typography="ButtonAlpha" class="x-el x-el-button c1-4a c1-2 c1-7o c1-7p c1-7q c1-7r c1-7s c1-2x c1-7t c1-7u c1-22 c1-47 c1-2e c1-2u c1-2f c1-2v c1-r c1-1m c1-4 c1-44 c1-7v c1-7w c1-72 c1-7x c1-70 c1-7y c1-b c1-3b c1-x c1-c c1-7z c1-80 c1-d c1-81 c1-e c1-82 c1-83 c1-84 c1-f c1-g">Send</button></div></div></div><div style="width:1px;height:1px;visibility:hidden"></div></form></div></div></div></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-y c1-1v c1-1w c1-6m c1-1y c1-1z c1-85 c1-21 c1-b c1-c c1-23 c1-24 c1-86 c1-26 c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-3x c1-1m c1-2a c1-2b c1-1f c1-2d c1-b c1-c c1-6n c1-6o c1-6p c1-2g c1-2h c1-87 c1-2j c1-d c1-6q c1-6r c1-6s c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-88 c1-2e c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6e c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-typography="HeadingDelta" class="x-el x-el-h4 c1-1 c1-2 c1-2v c1-2f c1-6t c1-37 c1-38 c1-1y c1-6u c1-b c1-3a c1-39 c1-4k c1-3c c1-3d c1-3e c1-3f">Reserve Your New Friend!</h4><div data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-2v c1-2f c1-63 c1-1y c1-6u c1-89 c1-8a c1-8b c1-8c c1-8d c1-8e c1-8f c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-8m c1-8n c1-8o c1-8p c1-8q c1-8r c1-8s c1-8t c1-8u c1-8v c1-8w c1-8x c1-8y c1-8z c1-90 c1-b c1-91 c1-c c1-4k c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>Our babies are adopted quickly, so reach out to reserve your furever friend or to ask any questions.&nbsp;</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-typography="HeadingDelta" class="x-el x-el-h4 c1-1 c1-2 c1-2v c1-2f c1-6t c1-37 c1-38 c1-1y c1-6u c1-b c1-3a c1-39 c1-4k c1-3c c1-3d c1-3e c1-3f">xertbaervr</h4></div></div></div></div></div></div></section> </div></div></div><div id="a78fc7f6-08fc-498c-9969-0b124734e79e" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" role="contentinfo" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-1p c1-d c1-4u c1-e c1-1t c1-f c1-1u c1-g"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-2e c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-1f c1-b c1-c c1-o c1-1p c1-d c1-4u c1-e c1-1t c1-f c1-1u c1-g"><p data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-2v c1-2f c1-63 c1-1y c1-92 c1-3b c1-b c1-3a c1-c c1-d c1-e c1-f c1-g">xertbaervr</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1v c1-1w c1-6m c1-1y c1-38 c1-20 c1-37 c1-22 c1-2e c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-93 c1-1m c1-2a c1-3y c1-2c c1-3z c1-b c1-c c1-d c1-94 c1-95 c1-e c1-f c1-g"><div data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-typography="DetailsAlpha" class="x-el x-el-p c1-1 c1-2 c1-2v c1-2f c1-63 c1-1y c1-20 c1-b c1-96 c1-97 c1-4k c1-98 c1-99 c1-9a c1-9b c1-9c x-rt"><p style="margin:0"><span>Copyright © 2020 xertbaervr - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1v c1-s c1-28 c1-93 c1-1m c1-2a c1-3y c1-2c c1-3z c1-b c1-c c1-d c1-94 c1-95 c1-e c1-f c1-g"><p data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-typography="DetailsAlpha" class="x-el x-el-p c1-1 c1-2 c1-2v c1-2f c1-63 c1-9d c1-20 c1-b c1-96 c1-97 c1-4k c1-98 c1-9e c1-4s c1-9a c1-9b c1-9c"><span>Powered by GoDaddy <a rel="nofollow noopener" role="link" aria-haspopup="true" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" data-typography="LinkAlpha" class="x-el x-el-a c1-2s c1-2t c1-2u c1-2v c1-2f c1-2w c1-2x c1-9d c1-b c1-32 c1-97 c1-33 c1-34 c1-35 c1-98 c1-9e c1-4s c1-9a c1-9b c1-9c" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.32430.click,click">Website Builder</a></span></p></div></div></div></div><div id="bs-11"></div></section> </div></div></div><div id="eb03fc2d-9d19-4358-a1a7-3c7b895a35c6" class="widget widget-messaging widget-messaging-messaging-1"><div id="bs-12"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" data-aid="MESSAGING_FAB" data-edit-interactive="true" data-tccl="ux2.messaging.fab.click,click" class="x-el x-el-div c1-1 c1-2 c1-y c1-22 c1-47 c1-2x c1-4 c1-9l c1-9m c1-7s c1-9n c1-9o c1-b c1-c c1-d c1-e c1-f c1-g"><svg viewBox="0 0 24 24" fill="currentColor" width="44" height="44" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-7y c1-2m c1-4q c1-b c1-c c1-d c1-e c1-f c1-g"><g fill="currentColor"><rect x="4" y="6" width="16" height="10.222" rx="1.129"></rect><path d="M8.977 18.578l.2-2.722a.564.564 0 01.564-.523h3.61c.548 0 .774.705.327 1.024l-3.81 2.721a.564.564 0 01-.89-.5z"></path></g></svg></div></div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.63.17.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/5b75a762d982066f/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/eb031feddb815e74/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1']={"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#c5d1d7"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"f02112a9-070f-472f-ad3b-732500b1a0bb":{"isFlyoutMenu":false,"active":true,"pageId":"f02112a9-070f-472f-ad3b-732500b1a0bb","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"tags":[],"rel":"","type":"page","showInFooter":false}},"theme":"Theme17"};</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-1',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"speed":-1.5,"uniqueId":"header_parallax32403","noTransform":true,"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9b757a1e28962547/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-2',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"text":"xertbaervr","containerId":"logo-container-32408","targetId":"logo-text-32409","fontSizes":["xxlarge","xlarge","large"],"style":{"display":"inline-block","maxWidth":"100%"},"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","section":"alt","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill","themeOverrides":{}});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/992197d1a900c04c/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/8eb62f9276cf135f/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-4',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"text":"xertbaervr","containerId":"logo-container-32416","targetId":"logo-text-32417","fontSizes":["xxlarge","xlarge","large"],"style":{"display":"inline-block","maxWidth":"100%"},"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","section":"alt","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill","themeOverrides":{}});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/ed3991add02ad9c2/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-6',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax32421","widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill","themeOverrides":{}});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/6acafbcc4f560a47/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-8',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax32424","widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e63bdb32-60e4-4372-ba27-8557c5799e49","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill","themeOverrides":{}});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/107cbec7b5ced17a/script.js" crossorigin></script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/5981ff5a5aeafb83/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/2fe96e2189e83aae/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2d3dd1f9020d8d21/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/812e4fcf0585a088/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/fe432c2d11d8087f/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/54669c2ef984e090/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1fe32d6adebf1122/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d6e2bd93-e972-4102-bee6-27b7a9fabbce/gpub/217add5fe237d204/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-32400').addEventListener('click', function() {}, false);</script></body></html>
