<!DOCTYPE html>
<html lang="en-US">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SY6Z6P6V4G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SY6Z6P6V4G');
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "School",
  "name": "Saandipini Hi-Tech School",
  "url": "https://saandipinischools.com/",
  "logo": "https://saandipinischools.com/images/logo.png",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "40 ring road, Nagadevanahalli Post, Gnana Bharathi, Bengaluru, Karnataka",
    "addressLocality": "Bangalore",
    "addressRegion": "Karnataka",
    "postalCode": "560056",
    "addressCountry": "IN"
  },
  "telephone": "+91-9606447701",
  "sameAs": [
    "https://www.facebook.com/saandipini.hitechschool.3",
    "https://www.instagram.com/saan.dipini",
    "https://www.youtube.com/@saandipinischool"
  ]
}
</script>

	<?php
// Include meta configuration (this file stores your SEO titles & descriptions)
include('meta-config.php');

// Detect current page name
$current_page = basename($_SERVER['PHP_SELF']);

// Fetch meta info for this page
$page_title = $meta_data[$current_page]['title'] ?? "Saandipini Hi-Tech School — Best CBSE School in Nagadevanahalli Post, Gnana Bharathi";
$meta_description = $meta_data[$current_page]['description'] ?? "Top CBSE school in Nagarbhavi with modern labs, sports & holistic education.";
$canonical_url = "https://saandipinischools.com/" . $current_page;
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- ✅ Basic SEO -->
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo $canonical_url; ?>">

<!-- ✅ Open Graph (for WhatsApp, Facebook, etc.) -->
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $meta_description; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $canonical_url; ?>">
<meta property="og:image" content="https://saandipinischools.com/assets/images/og-image.jpg">

<!-- ✅ Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $page_title; ?>">
<meta name="twitter:description" content="<?php echo $meta_description; ?>">
<meta name="twitter:image" content="https://saandipinischools.com/assets/images/og-image.jpg">

<!-- ✅ Favicon -->
<link rel="icon" href="https://saandipinischools.com/assets/images/favicon.png" type="image/png">











	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	<link rel="dns-prefetch" href="//use.fontawesome.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="alternate" type="application/rss+xml" title="saandipinischools &raquo; Feed" href="./feed/index.php">
<link rel="alternate" type="application/rss+xml" title="saandipinischools &raquo; Comments Feed" href="./comments/feed/index.php">
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"\/\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.4"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id="classic-theme-styles-inline-css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--medium-black: #131923;--wp--preset--color--light-green: #00fcfa;--wp--preset--color--deep-blue: #003796;--wp--preset--color--light-yellow: #ffe34c;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-family--inter: "Inter", sans-serif;--wp--preset--font-family--cardo: Cardo;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="./wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.6" media="all">
<link rel="stylesheet" id="fa5-css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css?ver=5.13.0" media="all">
<link rel="stylesheet" id="fa5-v4-shims-css" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css?ver=5.13.0" media="all">
<link rel="stylesheet" id="iconfont-css" href="./wp-content/plugins/tronix-core/assets/css/iconfont.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="flaticon-css" href="./wp-content/plugins/tronix-core/assets/css/flaticon.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="icofont-css" href="./wp-content/plugins/tronix-core/assets/css/icofont.min.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="owl-css-css" href="./wp-content/plugins/tronix-core/assets/css/owl.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="backend-css-css" href="./wp-content/plugins/tronix-core/assets/css/backend.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="animate-min-css" href="./wp-content/plugins/tronix-core/assets/css/animate-min.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="tronixcore-custom-widgets-css" href="./wp-content/plugins/tronix-core/assets/css/custom-widgets.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="woocommerce-layout-css" href="./wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=9.7.1" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="./wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=9.7.1" media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="./wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=9.7.1" media="all">
<style id="woocommerce-inline-inline-css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="brands-styles-css" href="./wp-content/plugins/woocommerce/assets/css/brands.css?ver=9.7.1" media="all">
<link rel="stylesheet" id="bootstrap-css" href="./wp-content/themes/tronix/assets/bootstrap/bootstrap-min.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="bootstrap-icons-css" href="./wp-content/themes/tronix/assets/bootstrap/bootstrap-icons.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="magnific-popup-css" href="./wp-content/themes/tronix/assets/popup/magnific-popup.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="slick-css" href="./wp-content/themes/tronix/assets/slick/slick.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="fontawesome-all-css" href="./wp-content/themes/tronix/assets/css/fontawesome-all.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="animation-css" href="./wp-content/themes/tronix/assets/css/animation.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="tronix-typography-css" href="./wp-content/themes/tronix/assets/css/typography.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="tronix-theme-css" href="./wp-content/themes/tronix/assets/css/theme.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="tronix-style-css" href="./wp-content/themes/tronix/style.css?ver=1.1.2" media="all">
<link rel="stylesheet" id="tronix-woocommerce-style-css" href="./wp-content/themes/tronix/woocommerce.css?ver=6.7.4" media="all">
<style id="tronix-woocommerce-style-inline-css">
@font-face {
			font-family: "star";
			src: url("./wp-content/plugins/woocommerce/assets/fonts/star.eot");
			src: url("./wp-content/plugins/woocommerce/assets/fonts/star.eot#iefix") format("embedded-opentype"),
				url("./wp-content/plugins/woocommerce/assets/fonts/star.woff") format("woff"),
				url("./wp-content/plugins/woocommerce/assets/fonts/star.ttf") format("truetype"),
				url("./wp-content/plugins/woocommerce/assets/fonts/star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}
</style>
<link rel="stylesheet" id="elementor-frontend-css" href="./wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.30.3" media="all">
<style id="elementor-frontend-inline-css">

/* ===========================================================
   FIXED ABOUT SECTION IMAGE STYLING – NO CROPPING VERSION
=========================================================== */

/* Wrapper alignment */
.elementor-600 .elementor-element.elementor-element-17db8ca1 .tronix-about_image-one-wrapper {
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow: visible;
}

/* Inner wrapper */
.tronix-about_image-one-wrapper .about-images-wrapper {
  position: relative;
  display: inline-block;
  margin: auto;
}

/* Common image styles */
.tronix-about_image-one-wrapper .about-image {
  border-radius: 22px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(245, 7, 7, 0.18);
  transition: all 0.4s ease;
}

.tronix-about_image-one-wrapper .about-image img {
  width: 100%;
  height: auto;             /* ✅ No fixed height (prevents cropping) */
  border-radius: 22px;
  object-fit: contain;      /* ✅ Shows full image, no cropping */
  display: block;
}

/* BACK IMAGE (slightly larger) */
.tronix-about_image-one-wrapper .about-image-back {
  width: 380px;             /* a bit larger */
  transform: translate(40px, 40px);
  z-index: 1;
}

/* FRONT IMAGE (slightly smaller & shifted left) */
.tronix-about_image-one-wrapper .about-image-front {
  position: absolute;
  top: 0;
  left: -25px;
  width: 320px;
  transform: rotate(-4deg) translate(-25px, -25px);
  z-index: 2;
  border: 8px solid #fff;
}

/* Hover tilt (optional) */
.tronix-about_image-one-wrapper:hover .about-image-front {
  transform: rotate(-2deg) translate(-20px, -25px);
}

/* ===========================================================
   ✅ RESPONSIVE FIX (same layout, smaller scaling)
=========================================================== */
@media (max-width: 991px) {
  .tronix-about_image-one-wrapper .about-image-back {
    width: 330px;
    transform: translate(30px, 30px);
  }

  .tronix-about_image-one-wrapper .about-image-front {
    left: -20px;
    width: 270px;
    transform: rotate(-4deg) translate(-20px, -20px);
    border: 6px solid #fff;
  }
}

@media (max-width: 576px) {
  .tronix-about_image-one-wrapper .about-image-back {
    width: 270px;
    transform: translate(25px, 25px);
  }

  .tronix-about_image-one-wrapper .about-image-front {
    left: -15px;
    width: 230px;
    transform: rotate(-4deg) translate(-15px, -15px);
    border: 5px solid #fff;
  }
}

/* ===========================================================
   Optional Floating Animation for Front Image
=========================================================== */
@keyframes floatyMove {
  0%, 100% { transform: rotate(-4deg) translate(-25px, -25px); }
  50% { transform: rotate(-4deg) translate(-30px, -20px); }
}
.tronix-about_image-one-wrapper .about-image-front.animate {
  animation: floatyMove 6s ease-in-out infinite;
}
</style>




<link rel="stylesheet" id="tronix-el-template-front-css" href="./wp-content/plugins/tronix-core/inc/tronix-elementor-template-library/templates/assets/css/template-frontend.min.css?ver=1.0.0" media="all">
<link rel="stylesheet" id="tronix-inline-css" href="./wp-content/themes/tronix/assets/css/inline-style.css?ver=1.1.2" media="all">
<style id="tronix-inline-inline-css">

				.breadcroumb-area:before, .breadcroumb-area:after {
					content: "";
				}
			
    			.breadcroumn-contnt {
    				text-align: center;
    			}
    		
</style>
<link rel="stylesheet" id="widget-icon-box-css" href="./wp-content/plugins/elementor/assets/css/widget-icon-box.min.css?ver=3.30.3" media="all">

<link rel="stylesheet" id="csf-google-web-fonts-css" href="//fonts.googleapis.com/css?family=Outfit:400,300,500,600,700,800,900&amp;display=swap" media="all">
<link rel="stylesheet" id="um_modal-css" href="./wp-content/plugins/ultimate-member/assets/css/um-modal.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_ui-css" href="./wp-content/plugins/ultimate-member/assets/libs/jquery-ui/jquery-ui.min.css?ver=1.13.2" media="all">
<link rel="stylesheet" id="um_tipsy-css" href="./wp-content/plugins/ultimate-member/assets/libs/tipsy/tipsy.min.css?ver=1.0.0a" media="all">
<link rel="stylesheet" id="um_raty-css" href="./wp-content/plugins/ultimate-member/assets/libs/raty/um-raty.min.css?ver=2.6.0" media="all">
<link rel="stylesheet" id="select2-css" href="./wp-content/plugins/ultimate-member/assets/libs/select2/select2.min.css?ver=4.0.13" media="all">
<link rel="stylesheet" id="um_fileupload-css" href="./wp-content/plugins/ultimate-member/assets/css/um-fileupload.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_confirm-css" href="./wp-content/plugins/ultimate-member/assets/libs/um-confirm/um-confirm.min.css?ver=1.0" media="all">
<link rel="stylesheet" id="um_datetime-css" href="./wp-content/plugins/ultimate-member/assets/libs/pickadate/default.min.css?ver=3.6.2" media="all">
<link rel="stylesheet" id="um_datetime_date-css" href="./wp-content/plugins/ultimate-member/assets/libs/pickadate/default.date.min.css?ver=3.6.2" media="all">
<link rel="stylesheet" id="um_datetime_time-css" href="./wp-content/plugins/ultimate-member/assets/libs/pickadate/default.time.min.css?ver=3.6.2" media="all">
<link rel="stylesheet" id="um_fonticons_ii-css" href="./wp-content/plugins/ultimate-member/assets/libs/legacy/fonticons/fonticons-ii.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_fonticons_fa-css" href="./wp-content/plugins/ultimate-member/assets/libs/legacy/fonticons/fonticons-fa.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_fontawesome-css" href="./wp-content/plugins/ultimate-member/assets/css/um-fontawesome.min.css?ver=6.5.2" media="all">
<link rel="stylesheet" id="um_common-css" href="./wp-content/plugins/ultimate-member/assets/css/common.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_responsive-css" href="./wp-content/plugins/ultimate-member/assets/css/um-responsive.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_styles-css" href="./wp-content/plugins/ultimate-member/assets/css/um-styles.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_crop-css" href="./wp-content/plugins/ultimate-member/assets/libs/cropper/cropper.min.css?ver=1.6.1" media="all">
<link rel="stylesheet" id="um_profile-css" href="./wp-content/plugins/ultimate-member/assets/css/um-profile.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_account-css" href="./wp-content/plugins/ultimate-member/assets/css/um-account.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_misc-css" href="./wp-content/plugins/ultimate-member/assets/css/um-misc.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="um_default_css-css" href="./wp-content/plugins/ultimate-member/assets/css/um-old-default.min.css?ver=2.10.4" media="all">
<link rel="stylesheet" id="elementor-gf-local-roboto-css" href="./wp-content/uploads/elementor/google-fonts/css/roboto.css?ver=1750454502" media="all">
<link rel="stylesheet" id="elementor-gf-local-robotoslab-css" href="./wp-content/uploads/elementor/google-fonts/css/robotoslab.css?ver=1750454503" media="all">
<link rel="stylesheet" id="elementor-gf-local-albertsans-css" href="./wp-content/uploads/elementor/google-fonts/css/albertsans.css?ver=1750462995" media="all">
<script src="./wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="./wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="./wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.7.1" id="jquery-blockui-js" defer data-wp-strategy="defer"></script>
<script id="wc-add-to-cart-js-extra">
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"\/\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
</script>
<script src="./wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.7.1" id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
<script src="./wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.7.1" id="js-cookie-js" defer data-wp-strategy="defer"></script>
<script id="woocommerce-js-extra">
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_password_show":"Show password","i18n_password_hide":"Hide password"};
</script>
<script src="./wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.7.1" id="woocommerce-js" defer data-wp-strategy="defer"></script>
<script src="./wp-content/plugins/ultimate-member/assets/js/um-gdpr.min.js?ver=2.10.4" id="um-gdpr-js"></script>
<link rel="https://api.w.org/" href="./wp-json/index.php"><link rel="alternate" title="JSON" type="application/json" href="./wp-json/wp/v2/pages/600/index.php"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="./xmlrpc.php?rsd">
<meta name="generator" content="WordPress 6.7.4">
<meta name="generator" content="WooCommerce 9.7.1">
<link rel="canonical" href="./index.php">
<link rel="shortlink" href="./index.php">
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="./wp-json/oembed/1.0/embed/index.php?url=https%3A%2F%2F%2F">
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="./wp-json/oembed/1.0/embed/index.php?url=https%3A%2F%2F%2F&amp;format=xml">
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Elementor 3.30.3; features: e_font_icon_svg, additional_custom_breakpoints, e_element_cache; settings: css_print_method-internal, google_font-enabled, font_display-swap">
<style class="wp-fonts-local">
@font-face{font-family:Inter;font-style:normal;font-weight:300 900;font-display:fallback;src:url('./wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Cardo;font-style:normal;font-weight:400;font-display:fallback;src:url('./wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');}
</style>
<style type="text/css">body{font-family:"Outfit";font-weight:normal;font-size:16px;}h1{font-family:"Outfit";font-weight:700;}h2{font-family:"Outfit";font-weight:700;}h3{font-family:"Outfit";font-weight:700;}h4{font-family:"Outfit";font-weight:700;}h5{font-family:"Outfit";font-weight:700;}h6{font-family:"Outfit";font-weight:700;}.breadcroumb-area{background-position:center center;background-repeat:no-repeat;background-size:cover;}.breadcroumb-area{background-repeat:no-repeat;}</style><link rel="icon" href="./wp-content/uploads/2025/02/cropped-logo2-32x32.png" sizes="32x32">



<link rel="icon" href="./wp-content/uploads/2025/02/cropped-logo2-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="./wp-content/uploads/2025/02/cropped-logo2-180x180.png">
<meta name="msapplication-TileImage" content="./wp-content/uploads/2025/02/cropped-logo2-270x270.png">




		<style id="wp-custom-css">
			.d-xxl-block {
    display: none!important;
}
.scroll-message-wrapper {
  width: 100%;
  overflow: hidden;
  background: #ffeeba;
  border-top: 2px solid #f0ad4e;
  border-bottom: 2px solid #f0ad4e;
  padding: 10px 0;
}

.scroll-message {
  display: inline-block;
  white-space: nowrap;
  color: #333;
  font-weight: bold;
  padding-left: 100%;
  animation: scroll-left 15s linear infinite;
}

.scroll-message-wrapper:hover .scroll-message {
  animation-play-state: paused;
}

@keyframes scroll-left {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}
		</style>
		</head>

		<body class="home page-template page-template-template-home page-template-template-home-php page page-id-600 wp-custom-logo wp-embed-responsive theme-tronix woocommerce-no-js tronix-woo-active page-builder-used woocommerce-active elementor-default elementor-kit-10 elementor-page elementor-page-600">
<div id="page" class="site">
    	<a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

			        		<div data-elementor-type="wp-post" data-elementor-id="602" class="elementor elementor-602">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-c61e00a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c61e00a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-472e5cb" data-id="472e5cb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-516cafb elementor-widget elementor-widget-tronix_header_template_one" data-id="516cafb" data-element_type="widget" data-widget_type="tronix_header_template_one.default">
				<div class="elementor-widget-container">
					        <!-- Mobile Menu -->

        <div class="tronix-menu-wrapper">
            <div class="tronix-menu-area text-center">
                <button class="tronix-menu-toggle"><i class="bi bi-x-lg"></i></button>
                <div class="mobile-logo">
                    <a href="./index.php" class="custom-logo-link" rel="home" aria-current="page"><img decoding="async" width="262" height="86" src="./wp-content/uploads/2025/02/cropped-cropped-logo.png" class="custom-logo" alt="saandipinischools"></a>
                </div>
                <div class="tronix-mobile-menu">
                    <ul id="mainmenu" class=""><li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-23"><a href="./index.php">Home</a></li>
<li id="menu-item-5230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5230 no-mega "><a href="about.php">About Us</a>
<ul class="sub-menu">
	<li id="menu-item-5286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5286"><a href="./chairmans-message.php">Chairman&rsquo;s Message</a></li>
	<li id="menu-item-5296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5296"><a href="./school-secretary.php">School Secretary</a></li>
	<li id="menu-item-5303" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5303"><a href="./directors-desk.php">Director&rsquo;s Desk</a></li>
  <li id="menu-item-5304" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5304"><a href="./teachers.php">Teachers</a></li>
</ul>  
</li>
<li id="menu-item-5526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5526"><a href="./public-mandatory-disclosure.php">Public &amp; Mandatory Disclosure</a></li>
<li id="menu-item-5644" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5644"><a href="http://69.62.85.153/Saandipini/ ">Admissions</a></li>
<li id="menu-item-5399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5399"><a href="./careers.php">Careers</a></li>
<li id="menu-item-1023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023"><a href="./contact.php">Contact</a></li>
<li id="menu-item-5646" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5646"><a href="http://69.62.85.153/Saandipini">Login</a></li>
</ul>                </div>
            </div>
        </div>

        <!-- end Mobile menu -->
        <header class="header-area site-header">
            <div class="tronix-header header-template-one">
                                <div class="menu-area" id="no-sticky-menu">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="header-logo col-auto">
                                <a href="./index.php" class="custom-logo-link" rel="home" aria-current="page"><img decoding="async" width="262" height="86" src="./wp-content/uploads/2025/02/cropped-cropped-logo.png" class="custom-logo" alt="saandipinischools"></a>                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul id="mainmenu" class=""><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-23"><a href="./index.php">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5230 no-mega "><a href="about.php">About Us</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5286"><a href="./chairmans-message.php">Chairman&rsquo;s Message</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5296"><a href="./school-secretary.php">School Secretary</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5303"><a href="./directors-desk.php">Director&rsquo;s Desk</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5303"><a href="./teachers.php">Meet Our Faculty</a></li>
 
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5526"><a href="./public-mandatory-disclosure.php">Public &amp; Mandatory Disclosure</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5644"><a href="http://69.62.85.153/Saandipini/PublicAdmission.php">Admissions</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5399"><a href="./careers.php">Careers</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023"><a href="./contact.php">Contact</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5646"><a href="http://69.62.85.153/Saandipini">Login</a></li>
</ul>                                </nav>
                                <button type="button" class="tronix-menu-toggle d-inline-block d-lg-none"><i class="fas fa-bars"></i></button>
                            </div>
                            <div class="col-auto d-none d-xxl-block ">
                                <div class="header-one-button-area">
                                                                            <div class="header-one-call-us-area">
                                                                                            <div class="header-one-call-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>                                                </div>
                                                                                        <div class="header-one-call-text">
                                                                                                    <div class="header-one-call-title">
                                                        Quick Call                                                    </div>
                                                                                                                                                    <div class="header-one-call-number">
                                                        (904) 12-366-25                                                    </div>
                                                                                            </div>
                                        </div>
                                                                                                                <div class="header-one-botton">
                                                                                        <a href="https://wptf.themepul.co/tronix/contactget="_blank" rel="nofollow" class=" theme-btns">
                                                Get Started </a>
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script>
            (function($) {
                "use strict";
                jQuery(".site").addClass("header-template-one-activate");
            })(jQuery);
        </script>
				</div>
				</div>
					</div>
		</div> 
					</div>
		</section>
				</div>


