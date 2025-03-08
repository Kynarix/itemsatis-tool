<?php
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
session_start();
if(isset($_SESSION['form_data'])) {
    $ilanAdi = $_SESSION['form_data']['ilanAdi'];
    $ilanalani = $_SESSION['form_data']['ilanalani'];
    $ilansaati = $_SESSION['form_data']['ilansaati']; 
    $ilandakikasi = $_SESSION['form_data']['ilandakikasi'];
    $saticiresmi = $_SESSION['form_data']['saticiresmi'];
    $saticiseviyesi = $_SESSION['form_data']['saticiseviyesi'];
    $saticisadi = $_SESSION['form_data']['saticisadi'];
    $ilanresmi = $_SESSION['form_data']['ilanresmi'];
    unset($_SESSION['form_data']);
} else {
    // Form sayfasına yönlendir (ana sayfa)
    header('Location: ../../pages/itemsatis/itemsatis.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <base href="https://www.itemsatis.com/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1, user-scalable=0">
        <title>Bildirimlerim | İtemsatış</title>
        <meta name="description" content="İtemsatis.com bildirim sistemine hoşgeldiniz.">
        <meta name="keywords" content="item satış,metin2 item sat,en ucuz epin,ucuz epin">
        <meta name="yandex-verification" content="d7a7faf1ab1aa65a"/>
        <meta name="google-site-verification" content="jyu0KcJTnkUlEmoomNCa63WB4DL62lCeCD4-VHCLG9w"/>
        <meta name="google-site-verification" content="zIN6_Qfr2MYU9MVLY_uwzTWGKhvXXx1pvnD5zfahWDs"/>
        <meta property="fb:app_id" content="284051765934063"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@itemsatiscom"/>
        <meta name="twitter:creator" content="@itemsatiscom"/>
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.itemsatis.com/bildirimler.html">
        <meta property="og:title" content="Bildirimlerim | İtemsatış">
        <meta property="og:description" content="İtemsatis.com bildirim sistemine hoşgeldiniz.">
        <!--	<meta http-equiv="Content-Security-Policy" content="frame-ancestors 'none';">-->
        <meta property="og:image" content="https://cdn.itemsatis.com/uploads/admin/EYqVfO9cRLayK6TCrU3ekJNBH.png">
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.itemsatis.com/bildirimler.html">
        <meta property="twitter:title" content="Bildirimlerim | İtemsatış">
        <meta property="twitter:description" content="İtemsatis.com bildirim sistemine hoşgeldiniz.">
        <meta property="twitter:image" content="https://cdn.itemsatis.com/global/images/ItemSatisSocialImage.png">
        <link rel="shortcut icon" type="image/ico" href="dist/img/favicon.ico"/>
        <meta name="enot" content="6231674246290v3SctUxluPpRfLKxTNOHcSlrFk22dS8F"/>
        <style type="text/css">
            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 300;
                src: url(/cf-fonts/s/poppins/5.0.11/devanagari/300/normal.woff2);
                unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 300;
                src: url(/cf-fonts/s/poppins/5.0.11/latin-ext/300/normal.woff2);
                unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 300;
                src: url(/cf-fonts/s/poppins/5.0.11/latin/300/normal.woff2);
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 400;
                src: url(/cf-fonts/s/poppins/5.0.11/devanagari/400/normal.woff2);
                unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 400;
                src: url(/cf-fonts/s/poppins/5.0.11/latin/400/normal.woff2);
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 400;
                src: url(/cf-fonts/s/poppins/5.0.11/latin-ext/400/normal.woff2);
                unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 500;
                src: url(/cf-fonts/s/poppins/5.0.11/latin/500/normal.woff2);
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 500;
                src: url(/cf-fonts/s/poppins/5.0.11/latin-ext/500/normal.woff2);
                unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 500;
                src: url(/cf-fonts/s/poppins/5.0.11/devanagari/500/normal.woff2);
                unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 600;
                src: url(/cf-fonts/s/poppins/5.0.11/latin/600/normal.woff2);
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 600;
                src: url(/cf-fonts/s/poppins/5.0.11/latin-ext/600/normal.woff2);
                unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 600;
                src: url(/cf-fonts/s/poppins/5.0.11/devanagari/600/normal.woff2);
                unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 700;
                src: url(/cf-fonts/s/poppins/5.0.11/latin-ext/700/normal.woff2);
                unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 700;
                src: url(/cf-fonts/s/poppins/5.0.11/devanagari/700/normal.woff2);
                unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;
                font-display: swap;
            }

            @font-face {
                font-family: Poppins;
                font-style: normal;
                font-weight: 700;
                src: url(/cf-fonts/s/poppins/5.0.11/latin/700/normal.woff2);
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
                font-display: swap;
            }
        </style>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="semantic/semantic.min.css?ver?=7" rel="stylesheet">
        <link href="dist/css/ItemSatis.css?ver=1216" rel="stylesheet">
        <link href="dist/css/all.min.css?v5" rel="stylesheet" async>
        <link href="dist/css/owl.carousel.min.css" rel="stylesheet" async>
        <link href="dist/css/owl.theme.default.min.css" rel="stylesheet" async>
        <link href="dist/css/ItemSatis-Utils.css?ver=5" rel="stylesheet" async>
        <link href="dist/css/bootstrap-select.min.css" rel="stylesheet" async>
        <link href="dist/css/sweetalert2.min.css" rel="stylesheet" async>
        <link href="dist/css/circle.css" rel="stylesheet" async>
        <link href="dist/css/jquery.fancybox.min.css" rel="stylesheet" async>
        <link href="dist/css/intlTelInput.min.css" rel="stylesheet" async>
        <link href="dist/css/quill.snow.css" rel="stylesheet" async>
        <link href="dist/css/quill.bubble.css" rel="stylesheet" async>
        <link href="dist/css/Chat.css?ver=1216" rel="stylesheet">
        <link href="dist/css/jquery-ui.min.css" rel="stylesheet">
        <link href="dist/css/ItemSatisMobile.css?ver=1216" rel="stylesheet" media="screen and (max-width: 1024px)" async>
        <link href="dist/css/newMenu.css?ver=1216" rel="stylesheet" async>
        <link href="dist/css/Dark-Theme.css?ver=1216" rel="stylesheet" async>
        <link href="dist/css/MobileNavBar.css?ver=1216" rel="stylesheet" media="(max-width: 768px)" async>
        <link href="dist/css/NewChatPanel.css?ver=1216" rel="stylesheet">
        <link rel="stylesheet" href="dist/media_css/mobile.css?ver=1216" media="screen and (max-width: 479px)">
        <link rel="stylesheet" href="dist/media_css/tablet.css?ver=1216" media="screen and (min-width: 480px) and (max-width: 1200px)">
        <link rel="apple-touch-icon" href="dist/img/favicon.ico"/>
        <link rel="android-touch-icon" href="dist/img/favicon.ico"/>
        <link href="dist/page_css/NotificationNew.css?ver=1216" rel="stylesheet">
        <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->
        <!-- Global site tag (gtag.js) - Google Ads: 451520053 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-451520053" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
		window.dataLayer = window.dataLayer || [];

		function gtag()
		{
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'AW-451520053', { 'allow_enhanced_conversions' : true });
		gtag('event', 'conversion', { 'send_to' : 'AW-451520053/OQssCOOZyPABELXMptcB' });
	
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162782217-2" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="https://js.stripe.com/v3/" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=Acw4lONV10FF7V_tSrTQRiQpkzbYm4xJ5DR6ucS8_08__8AN-njj9LeTaOrGqFLWJYXrAJyszuqJGV90&currency=USD" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
		gtag('js', new Date());
		gtag('config', 'UA-162782217-2');
	
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZN0SH1X916" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
		window.dataLayer = window.dataLayer || [];

		function gtag()
		{
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'G-ZN0SH1X916', { 'groups' : 'GA4' });
	
        </script>
        <!-- Google Tag Manager -->
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            (function (w, d, s, l, i)
		{
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start' :
					new Date().getTime(), event : 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5ZVBM9F');
        </script>
        <!-- End Google Tag Manager -->
        <!-- Facebook Pixel Code -->
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
				!function (f, b, e, v, n, t, s)
				{
					if (f.fbq)
					{
						return;
					}
					n = f.fbq = function ()
					{
						n.callMethod ?
							n.callMethod.apply(n, arguments) : n.queue.push(arguments);
					};
					if (!f._fbq)
					{
						f._fbq = n;
					}
					n.push = n;
					n.loaded = !0;
					n.version = '2.0';
					n.queue = [];
					t = b.createElement(e);
					t.async = !0;
					t.src = v;
					s = b.getElementsByTagName(e)[0];
					s.parentNode.insertBefore(t, s);
				}(window, document, 'script',
					'https://connect.facebook.net/en_US/fbevents.js');
				fbq('init', '642911269425071');
				fbq('track', 'PageView');
			
        </script>
        <noscript>
            <img height="1" width="1" Pestyle="display:none" src="https://www.facebook.com/tr?id=642911269425071&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        <!-- Cloudflare Web Analytics -->
        <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "d7027493114546638d03a364ab15606e"}' type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <!-- End Cloudflare Web Analytics -->
        <script src="https://www.google.com/recaptcha/api.js?render=6LfIfZEdAAAAANcxbLH8izj18olFscf20nu_zOju" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            var googleRecaptchaKey = "6LfIfZEdAAAAANcxbLH8izj18olFscf20nu_zOju";
        </script>
    </head>
    <body class="dark-theme" data-page="NotificationNew">
        <a href="https://www.instagram.com/itemsatiscom/" title="Bizi İnstagramdan Takip Edin">
            <div class="itemsatis-header-banner video-element">
                <video playsinline autoplay muted loop style="width: calc(100% + 10px);">
                    <source src="https://cdn.itemsatis.com/uploads/images/bannerinsta-2-268.mp4" type="video/mp4"/>
                </video>
            </div>
        </a>
        <a href="/kimlik-dogrula.html">
            <div class="topMessageBar Identy">
                <div class="container">
                    <img src="https://cdn.itemsatis.com/global/icons/fingerprint.png" alt="Kimlik doğrula"/>
                    <b>Kimlik bilgilerinizi doğrulayın!</b>
                    <span>Kimliğinizi doğrulayarak kendinizi güven altına alın, müşterilerinize güven verin.</span>
                </div>
            </div>
        </a>
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-6 hidden-xs">
                            <div class="header-slick">
                                <ul style="display: inline-block;" class="hidden-xs">
                                    <li>
                                        <a href="https://discord.com/invite/UtjXNfpdG9" target="_blank" class="headerDiscordLink" style="filter: hue-rotate(209deg);">
                                            <i class="fab fa-discord"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/itemsatiscom" target="_blank" class="headerDiscordLink" style="filter: hue-rotate(217deg);">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@itemsatiscom" target="_blank" class="headerDiscordLink" style="filter: hue-rotate(258deg);">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/itemsatiscom" target="_blank" class="headerDiscordLink" style="filter: hue-rotate(266deg);">
                                            <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <span style="padding-left:15px;">
                                    <a href="/ilan-pazari.html" title="Türkiye'nin En Gelişmiş Oyuncu Alışveriş Platformu">
                                        <span>Türkiye'nin En Gelişmiş Oyuncu Alışveriş Platformu</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6 float-right p-0 header-top-menu-mobile">
                            <ul class="header-links">
                                <li class="visible-only-mobile">
                                    <div class="langSwitcher">
                                        <a href="https://en.itemsatis.com" title="ItemSatis - English">
                                            <img src="https://cdn.itemsatis.com/uploads/admin/lang-switch.png" style="border-radius: 50%;">
                                        </a>
                                    </div>
                                </li>
                                <li class="hidden-xs">
                                    <a href="/gunun-firsatlari.html" title="Günün Fırsatları">
                                        <span class="gununFirsatlariText">
                                            <i class="fas fa-percent"></i>
                                            &nbsp;<b>Günün Fırsatları</b>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog" title="Blog">Blog</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
                                        <span class="MenuSpanDiv">
                                            Destek Merkezi <span class="caret"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/destek-sistemi.html" title="Destek Talebi">
                                                <i class="fas fa-ticket-alt"></i>
                                                Destek Talebi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/yardim.html" title="Yardım">
                                                <i class="fas fa-life-ring"></i>
                                                Yardım Merkezi (S.S.S.)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/sozlesme/yeni-kullanici-bilgilendirmesi.html" title="Yardım">
                                                <i class="fas fa-id-card-alt"></i>
                                                Yeni Kullanıcı Metni
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
                                        <span class="MenuSpanDiv">
                                            Kurumsal <span class="caret"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/hakkimizda.html" title="Hakkımızda">
                                                <i class="fas fa-building"></i>
                                                Hakkımızda
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/kurumsal-kimlik.html" title="Kurumsal">
                                                <i class="fas fa-passport"></i>
                                                Kurumsal Kimlik
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/itemsatis-guvenilir-mi.html" title="Güvenilirlik">
                                                <i class="fas fa-user-shield"></i>
                                                Güvenilirlik
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/iletisim.html" title="İletişim">
                                                <i class="fas fa-at"></i>
                                                İletişim
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/itemsatis-sikayetimvar.html" title="İtemSatış Şikayetimvar">
                                                <i class="fas fa-heart-broken"></i>
                                                Şikayetim Var
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/musteri-yorumlari.html" title="İtemSatış Müşteri Yorumları">
                                                <i class="fas fa-feather-alt"></i>
                                                Müşteri Yorumları
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-itemsatis1 navbar-expand-xl">
                <div class="container">
                    <div class="navbar-header col-md-3 col-xs-12">
                        <button type="button" class="navbar-search" style="display: none;">
                            <i class="fa fa-search"></i>
                        </button>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="https://cdn.itemsatis.com/uploads/admin/AzpvNYiH7m3QZyTWnbIfgVarhu.png" class="headerLogo" alt="itemsatış" title="İtemsatış: Valorant VP, Pubg Mobile UC ve Oyun Hesap Satışı" style="height: 50px;position: relative;top: -10px;max-width: 200px;object-fit: contain;">
                        </a>
                        <div class="langSwitcher hidden-mobile notranslate">
                            <a href="https://en.itemsatis.com" title="ItemSatis - English" class="notranslate">
                                <img src="https://cdn.itemsatis.com/uploads/admin/lang-switch.png" style="border-radius: 5px;">EN
                            </a>
                        </div>
                    </div>
                    <div class="MenuSearch col-md-6 col-xs-12">
                        <div class="ui fluid category search top-search-input">
                            <div class="ui icon input">
                                <input class="prompt" id="headerSearchBox" type="text" placeholder="">
                                <i class="search icon"></i>
                            </div>
                          
                        </div>
                    </div>
                    <div class="collapse navbar-collapse UserSection" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu-nav-mobile" style="display: none;">
                            <li>
                                <a href="ilan-pazari.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-shopping-basket"></i>
                                        İlan Pazarı 
                                        <!--<span class="badge-yeni">YENİ</span>-->
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/alim-ilani-pazari.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-shopping-bag"></i>
                                        Alım İlanları <span class="badge-yeni">YENİ</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/ucretsiz-cekilisler.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-gift"></i>
                                        Ücretsiz Çekilişler <span class="badge-yeni">YENİ</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="magazalar.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-store"></i>
                                        Mağazalar 
                                        <!--<span class="badge-yeni">YENİ</span>-->
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="gunun-firsatlari.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-percent"></i>
                                        Günün Fırsatları
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/kategori-listesi/e-pin.html" title="Yazılım">
                                    <i class="fas fa-laptop-code"></i>
                                    Yazılım
                                </a>
                            </li>
                            <li>
                                <a href="/kategori-listesi/top-up.html" title="Top Up">
                                    <i class="fas fa-cart-plus"></i>
                                    Top Up
                                </a>
                            </li>
                            <li>
                                <a href="/kategori-listesi/hediye-kartlari.html" title="Hediye Kartları">
                                    <i class="fas fa-box-open"></i>
                                    Hediye Kartları
                                </a>
                            </li>
                            <li class="">
                                <a href="/ilan-ekle.html">
                                    <img src="https://cdn.itemsatis.com/global/icons/add-outline-white.svg" width="25" height="25" alt="İlan Ekle" style="position: relative;top: -1px;"/>
                                    <span class="top-menu-add-post-span MenuSpanDiv">İlan Ekle</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li class="ui dropdown bakiyeDropdown hidden-sm hidden-xs" data-inverted="" data-tooltip="Bakiye İşlemleri" data-position="bottom left">
                                <span class="Wallet">
                                    <img src="https://cdn.itemsatis.com/global/icons/wallet-outline.svg" width="23" height="23" alt="Cüzdan"/>
                                    <div class="floating ui green label">31.40₺</div>
                                </span>
                                <div class="menu" style="padding-block:5px;">
                                    <div class="item bakiyeItem">
                                        <a href="/bakiye-yukle.html">
                                            <i class="fas fa-coins"></i>
                                            Bakiye Yükle
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/para-cek.html">
                                            <i class="fas fa-wallet"></i>
                                            Para Çek
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li data-inverted="" data-tooltip="Sohbetlerim" data-position="bottom left" class="MessageBtnTopBar hidden-sm hidden-xs">
                                <a href="/mesajlarim.html">
                                    <img src="https://cdn.itemsatis.com/global/icons/chatbubbles-outline-black.svg" width="23" height="23" alt="Sohbetlerim"/>
                                </a>
                            </li>
                            <li data-inverted="" data-tooltip="Bildirimlerim" data-position="top left" class="ui dropdown hidden-sm hidden-xs not-loading my-notification-box-btn">
                                <a>
                                    <span class="Notifications">
                                        <img src="https://cdn.itemsatis.com/global/icons/notifications-outline.svg" width="23" height="23" alt="Bildirimler"/>
                                    </span>
                                </a>
                                <div class="menu left my-notification-box" style="padding-block:5px;">
                                    <div class="item">
                                        <div class="notification-loading">
                                            <div class="ui active inverted dimmer">
                                                <div class="ui text loader">Yükleniyor...</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ui pointing dropdown Hesabim hidden-sm hidden-xs" data-inverted="" data-tooltip="Hesabım" data-position="bottom left">
                                <img src="https://cdn.itemsatis.com/avatar/global/minecraft-erkek.png" width="23" alt="Avatar"/>
                                <div class="menu" style="padding-block:5px;">
                                    <div class="item item-user">
                                        <a href="/profil/dasdemirdenizcan.html" style="	padding: 0px !important;">
                                            <div class="level-badge">3</div>
                                            <div class="user-text">
                                                <b>dasdemirdenizcan</b>
                                                <span>31.40 ₺</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item bakiyeItem">
                                        <a href="/bakiye-yukle.html">
                                            <i class="fas fa-coins"></i>
                                            Bakiye Yükle
                                        </a>
                                    </div>
                                    <div class="item guvenilirItem">
                                        <a href="/guvenli-hesap-yukseltmesi.html">
                                            <i class="fas fa-user-shield"></i>
                                            Güvenli Hesaba Yükselt
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/profil/dasdemirdenizcan.html">
                                            <i class="fas fa-user-circle"></i>
                                            Profilim
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/kontrol-merkezi.html">
                                            <i class="fas fa-user-tie"></i>
                                            Kontrol Merkezi
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/tum-siparislerim.html">
                                            <i class="fas fa-shopping-cart"></i>
                                            Siparişler
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/siparislerim.html">
                                            <i class="fas fa-shopping-basket"></i>
                                            Siparişlerim
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/ilanlarim.html">
                                            <i class="fas fa-store"></i>
                                            İlanlarım
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/favori-ilanlarim.html">
                                            <i class="fas fa-heart"></i>
                                            Favori İlanlarım
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/para-cek.html">
                                            <i class="fas fa-wallet"></i>
                                            Para Çek
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/destek-sistemi.html">
                                            <i class="far fa-life-ring"></i>
                                            Destek Sistemi
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="https://discord.gg/UtjXNfpdG9" target="_blank">
                                            <i class="fab fa-discord"></i>
                                            Discord
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/cikis.html" class="cikisYapBtn">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Çıkış
                                        </a>
                                    </div>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-itemsatis2">
                <div class="container" style="position: relative">
                    <div class="TumKategoriler2">
                        <ul class="nav navbar-nav TumKategoriler">
                            <li class="dropdown TumMenuGetir">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-th-large"></i>
                                        <span class="tum-kategori-text">Kategoriler</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="hidden-xs hidden-sm">
                                <a href="ilan-pazari.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-shopping-basket"></i>
                                        İlan Pazarı
                                    </span>
                                </a>
                            </li>
                            <li class="hidden-xs hidden-sm">
                                <a href="/alim-ilani-pazari.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-shopping-bag"></i>
                                        Alım İlanları
                                    </span>
                                </a>
                            </li>
                            <li class="hidden-xs hidden-sm">
                                <a href="/ucretsiz-cekilisler.html">
                                    <span class="MenuSpanDiv SpecialSpanDiv">
                                        <i class="fas fa-gift"></i>
                                        Çekilişler
                                    </span>
                                </a>
                            </li>
                            <li class="hidden-xs hidden-sm">
                                <a href="/magazalar.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-store"></i>
                                        Mağazalar
                                    </span>
                                </a>
                            </li>
                            <li class="hidden-sm hidden-xs">
                                <span role="button" id="dropdownMenuLink_9" data-toggle="dropdown" aria-expanded="false" title="Yazılım">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-laptop-code"></i>
                                        Yazılım 
							
                                    </span>
                                </span>
                              
                            </li>
                            <li class="hidden-sm hidden-xs">
                                <span role="button" id="dropdownMenuLink_11" data-toggle="dropdown" aria-expanded="false" title="Top Up">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-cart-plus"></i>
                                        Top Up 
							
                                    </span>
                                </span>
                              
                            </li>
                            <li class="hidden-sm hidden-xs">
                                <span role="button" id="dropdownMenuLink_10" data-toggle="dropdown" aria-expanded="false" title="Hediye Kartları">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-box-open"></i>
                                        Hediye Kartları 
							
                                    </span>
                                </span>
                             
                            </li>
                            <li class="hidden-xs hidden-sm">
                                <a href="/cd-keys.html">
                                    <span class="MenuSpanDiv">
                                        <i class="fas fa-key"></i>
                                        CD-Key
                                    </span>
                                </a>
                            </li>
                            <li class="addPostButtonHeader hidden-xs ">
                                <a href="/ilan-ekle.html">
                                    <i class="fas fa-plus"></i>
                                    <span class="top-menu-add-post-span MenuSpanDiv">İlan Ekle</span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
            <div class="tumKategorilerPanel">
                <div class="tumKategorilerDiv">
                    <div class="container">
                        <div class="newPanelHeader">
                            <div class="searchBoxPanel">
                                <input type="search" class="newSearchBoxText" placeholder="Oyun ara"/>
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="PanelAllCategories">
                                <a href="/kategoriler.html" title="Tüm kategoriler">
                                    Tüm kategorileri gör <i class="fas fa-caret-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="notCategoryShowing" style="display: none;">Üzgünüm aradığınız terimlerde kategori bulunamadı.</div>
                        <ul id="fetchCategoryData"></ul>
                    </div>
                </div>
            </div>
        </header>
        <section class="notification">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <a href="/telegram-bildirim-botu.html" target="_blank">
                                <div class="panel-body telegram-body">
                                    <div class="notificaton-icon">
                                        <img src="https://cdn.itemsatis.com/uploads/admin/kiqch7GTvIxVD1Yj4zg8ZeR2J.png"/>
                                    </div>
                                    <div class="notification-text">
                                        <h3>Telegram Bildirimlerini Aktifleştirin!</h3>
                                        <p>
                                            Hesabınızla alakalı tüm bildirimleri telegram üzerinden alabilirsiniz.<br>Telegram hesabınız ile itemsatış üyeliğinizi eşleştirin bildirimleri daha hızlı alın, detaylı bilgi için tıklayınız.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row message-wrapper">
			<div class="col-md-4 message-sideleft">
				<div class="panel">
					<div class="panel-body">
						<div class="searchBoxNotification" style="display: none;">
							<input type="search" class="form-control" name="NotificationSearch" placeholder="Arama yapın">
							<div class="ui checkbox">
								<input type="checkbox" name="oncelikliBildirim" tabindex="0" class="hidden" value="1">
								<label for="oncelikliBildirim">Sadece alışveriş bildirimlerini göster</label>
							</div>
							<div class="markAllAsRead" style="display: none;">
								<button class="btn btn-default btn-block btnMarkAllAsRead"><i class="fas fa-check"></i>&nbsp; Tümünü okundu olarak işaretle</button>
							</div>
						</div>
						<div class="list-group no-margin list-message">
							<ul class="nav nav-tabs chat-nav" role="tablist"><li role="presentation" class="notification-item list-group-item not-seen" data-id="30190098">
<a aria-controls="home" role="tab" data-toggle="tab">
<img src="https://cdn.itemsatis.com/uploads/admin/OnMKghtZYmuQH8G4CbDqVPkEo.png">
<p class="list-group-item-text"><strong>Avatar Çerçeveleri Satışta!</strong><small>5 gün önce</small>
<br><span class="spanMessage">Avatar Çerçevesi üyelik paketimiz satışta! Detayları ve nasıl satın alabileceğinizi öğrenmek için aşağıdaki yardım makalesini inceleyebilirsiniz.https://www.itemsatis.com/yardim/187/avatar-cerceve-paketi-nedir-nasil-satin-alinir.htmlHemen satın almak için ise aşağıdaki bağlantıya tıklayabilirsiniz.https://www.itemsatis.com/paketler/avatar-cercevesi</span></p>
<div class="clearfix"></div>
</a></li><li role="presentation" class="notification-item list-group-item active" data-id="30402414">
<a aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
<img src="https://cdn.itemsatis.com/global/icons/1301405.svg">
<p class="list-group-item-text"><strong>İlan Siparişiniz</strong><small><?= htmlspecialchars($ilandakikasi) ?></small>
<br><span class="spanMessage"><?= htmlspecialchars($saticisadi) ?> adlı satıcının <?= htmlspecialchars($ilanAdi) ?> başlıklı ilan için satın alma işleminiz gerçekleşti.</span></p>
<div class="clearfix"></div>
</a></li><li role="presentation" class="notification-item list-group-item" data-id="29332023">
<a aria-controls="home" role="tab" data-toggle="tab">
<img src="https://cdn.itemsatis.com/global/icons/1301405.svg">
<p class="list-group-item-text"><strong>Satıcı Değerlendirme</strong><small>1 ay önce</small>
<br><span class="spanMessage">İSTEDİĞİNİZ 3 OYUN + SINIRSIZ GARANTİ + DESTEK başlıklı ilan için satıcısı ile yaşadığınız deneyimi lütfen diğer üyelerimizle paylaşın.</span></p>
<div class="clearfix"></div>
</a><i class="fa fa-trash deleteNotification" data-id="29332023"></i></li></ul>
							<center>
								<button class="btn btn-default btnDahaFazlaNotify" style="display:none;">Daha fazla bildirim göster</button>
							</center>
						</div><!-- /.list-group -->
					</div><!-- /.panel-body -->
				</div><!-- /.panel -->
			</div><!-- /.message-sideleft -->
			<div class="col-md-8 message-sideright NotifyPanel">
				<div class="tab-content"><div>
<div class="panel">
<div class="panel-heading">
<div class="media">
<div class="media-body">
<img src="https://cdn.itemsatis.com/global/icons/1301405.svg">
<h4 class="media-heading">İlan Siparişiniz</h4>
<small><?= htmlspecialchars($ilansaati) ?></small>
</div>
</div>
</div>
<div class="panel-body"><div class="notification-item-list">
    <div class="notification-item">
        <div class="notification-item-title">İlan Bilgileri</div>
        <a href="/ilan/1869621/100-tr-10-level-unranked-mail-degisen.html" title="<?= htmlspecialchars($ilanAdi) ?>">
            <div class="d-flex post-box"><img src="<?= htmlspecialchars($ilanresmi) ?>">
            <div class="d-flex flex-column"><div class="item-post-title"><?= htmlspecialchars($ilanAdi) ?></div>
            <div class="item-post-category"><?= htmlspecialchars($ilanalani) ?></div>
        </div> 
    </div>
</a>
</div>
<div class="notification-item">
    <div class="notification-item-title">Satıcı Bilgileri</div>
    <div class="d-flex flex-columnx" style="gap: 10px;">
        <a href="/profil/Sinquary.html" title="Sinquary" style="flex: 2 1 auto;">
            <div class="d-flex post-box">
                <img src="<?= htmlspecialchars($saticiresmi) ?>">
                <div class="d-flex flex-column">
                    <div class="item-post-title"><?= htmlspecialchars($saticisadi) ?></div>
                    <div class="item-post-category"><?= htmlspecialchars($saticiseviyesi) ?>. Seviye</div>
                </div>
            </div>
        </a>
        <a class="btn btn-chat" href="/mesajlarim/Sinquary" target="_blank">
            <i class="fas fa-comments">
            </i><span>Sohbet</span>
        </a>
    </div>
</div>
</div> 
<p class="lead">İlan Siparişiniz</p>
<hr><p><b><?= htmlspecialchars($saticisadi) ?></b> adlı satıcının <b><?= htmlspecialchars($ilanAdi) ?></b> başlıklı ilan için satın alma işleminiz gerçekleşti.<br></p><center><div><b></b></div></center><br><p></p>
<div class="notification-well danger">
<img src="https://cdn.itemsatis.com/uploads/admin/yq7b63QZWv9zkwNFu2UGtYcLX.png">
<div>
<div class="well-header">Teslimatı onaylamadan önce okuyunuz!</div>
<div class="well-content">Aşağıdaki butonlardan teslimatı onayladığınızda ödediğiniz ücret satıcıya aktarılacaktır. 24 Saat herhangi bir işlem gerçekleştirmezseniz sistem tarafından otomatik olarak işlem onaylanacaktır.<br><u>Ürünü teslim almadan lütfen teslimatı onaylamayın</u>, bir sorun yaşarsanız lütfen sayfanın altında yer alan <b>Siparişte sorun yaşıyorum</b> butonuna tıklayınız.</div>
</div>
</div><form action="" method="POST" class="onlySubmitForm" id="OtomatikTeslimAldimAlici_1869621">
<input type="hidden" name="OtomatikTeslimAldimOnay" value="1869621">
<input type="hidden" name="purchaseID" value="5488995">
</form>
<form action="" method="POST" class="onlySubmitForm" id="OtomatikTeslimAlmadimAlici_1869621">
<input type="hidden" name="OtomatikTeslimAlmadimOnay" value="1869621">
<input type="hidden" name="AliciKaniti" value="">
<input type="hidden" name="purchaseID" value="5488995">
</form>
<hr><center>
<button class="btn btn-primary btn-block" onclick="OtomatikTeslimAldim(1869621)" style="height: 45px;font-size: 15px;"><i class="fas fa-check"></i>&nbsp; Teslimatı onayla</button>
<br>
<button class="btn btn-outline-danger btn-block m-t-10" style="border:none;height:40px" onclick="OtomatikTeslimAlmadimFirst(1869621,'Sinquary')"><i class="fas fa - flag"></i>&nbsp; Siparişte sorun yaşıyorum!</button>
</center></div>
</div>
</div></div>
			</div>
		</div>
                <div class="row m-t-20">
                    <div class="col-md-9">
                        <ul class="UrunMenuList">
                            <li class="active">
                                <i class="fas fa-rocket"></i>
                                Sohbet Vitrinleri
                            </li>
                        </ul>
                        <div class="panel">
                            <div class="panel-body TabContentDiv vitrinDiv">
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/steam/dilediginiz-1-oyun-garanti-destek-799084.html" title="Dilediğiniz 1 Oyun + Garanti & Destek">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Steam_2.png')" src="https://cdn.itemsatis.com/uploads/post_images/dilediginiz-1-oyun-garanti-destek-17698517.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="Dilediğiniz 1 Oyun + Garanti & Destek" alt="Dilediğiniz 1 Oyun + Garanti & Destek"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            25.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Steam / " data-position="top left">
                                            <a href="/ilanlar/steam.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/steam-442.png?height=35" alt="Steam"/>
                                            </a>
                                        </div>
                                        <a href="/steam/dilediginiz-1-oyun-garanti-destek-799084.html" title="Dilediğiniz 1 Oyun + Garanti & Destek">
                                            <div class="AdvertBox-Title">Dilediğiniz 1 Oyun + Garanti & Destek</div>
                                            <div class="AdvertBox-ItemDesc">- Merhaba diledi &#287;iniz 1 oyunu bize mesaj yolu ile belirtebilirsiniz.- Oyunlar a &#351;a &#287;&#305;da mevcuttur...&#</div>
                                        </a>
                                        <a href="/profil/RegularShop.html" title="RegularShop">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/351c4aaf581dd2cc3dd51ef15fc04c797944483d.png?height=25" alt="RegularShop" title="RegularShop" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    RegularShop
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/tiktok/tiktok-mega-kesfet-paket-hemen-teslim-1522693.html" title="TİKTOK MEGA KEŞFET PAKET | HEMEN TESLİM">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_posts/ItemSatis.png')" src="https://cdn.itemsatis.com/uploads/post_images/tiktok-mega-kesfet-paket-hemen-teslim-89369293.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="TİKTOK MEGA KEŞFET PAKET | HEMEN TESLİM" alt="TİKTOK MEGA KEŞFET PAKET | HEMEN TESLİM"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            20.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="TikTok / " data-position="top left">
                                            <a href="/ilanlar/tiktok.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/tiktok-779.png?height=35" alt="TikTok"/>
                                            </a>
                                        </div>
                                        <a href="/tiktok/tiktok-mega-kesfet-paket-hemen-teslim-1522693.html" title="TİKTOK MEGA KEŞFET PAKET | HEMEN TESLİM">
                                            <div class="AdvertBox-Title">TİKTOK MEGA KEŞFET PAKET | HEMEN TESLİM</div>
                                            <div class="AdvertBox-ItemDesc">+30.000 BA &#350;ARILI &#304;&#350;LEM &#304;LE SOSYAL MEDYA KATEGOR &#304;S &#304;N &#304;N M &Uuml;&#350;TER &#304;MEMNUN&#</div>
                                        </a>
                                        <a href="/profil/LuneaMedia.html" title="LuneaMedia">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/3869bb227ed2148ba41fe4390c9d4bae46fbb17c.jpg?height=25" alt="LuneaMedia" title="LuneaMedia" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    LuneaMedia
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/steam/kingdom-come-deliverence-2-garanti-706372.html" title="⭐Kingdom Come Deliverence 2⭐+ Garanti">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Steam_3.png')" src="https://cdn.itemsatis.com/uploads/post_images/marvel-spiderman-2-deluxe-garanti-40705986.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="⭐Kingdom Come Deliverence 2⭐+ Garanti" alt="⭐Kingdom Come Deliverence 2⭐+ Garanti"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            50.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Steam / " data-position="top left">
                                            <a href="/ilanlar/steam.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/steam-442.png?height=35" alt="Steam"/>
                                            </a>
                                        </div>
                                        <a href="/steam/kingdom-come-deliverence-2-garanti-706372.html" title="⭐Kingdom Come Deliverence 2⭐+ Garanti">
                                            <div class="AdvertBox-Title">⭐Kingdom Come Deliverence 2⭐+ Garanti</div>
                                            <div class="AdvertBox-ItemDesc">#REGULARSHOP G &Uuml;VENCES &#304;YLE &#10133;Alm &#305;&#351;oldu &#287;unuz &uuml;r &uuml;n &nbsp;-STEAM-&nbsp;hesab &#305;o</div>
                                        </a>
                                        <a href="/profil/RegularShop.html" title="RegularShop">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/351c4aaf581dd2cc3dd51ef15fc04c797944483d.png?height=25" alt="RegularShop" title="RegularShop" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    RegularShop
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/steam-random-key/en-az-199-steam-random-key-garantili-1425874.html" title="⭐EN AZ 199$ STEAM RANDOM KEY [GARANTİLİ]⭐">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_posts/ItemSatis.png')" src="https://cdn.itemsatis.com/uploads/post_images/en-az-199-steam-random-key-otomatik-teslim-8500194.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="⭐EN AZ 199$ STEAM RANDOM KEY [GARANTİLİ]⭐" alt="⭐EN AZ 199$ STEAM RANDOM KEY [GARANTİLİ]⭐"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            23.90 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Steam Random Key / " data-position="top left">
                                            <a href="/ilanlar/steam-random-key.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/steam-random-key-738.png?height=35" alt="Steam Random Key"/>
                                            </a>
                                        </div>
                                        <a href="/steam-random-key/en-az-199-steam-random-key-garantili-1425874.html" title="⭐EN AZ 199$ STEAM RANDOM KEY [GARANTİLİ]⭐">
                                            <div class="AdvertBox-Title">⭐EN AZ 199$ STEAM RANDOM KEY [GARANTİLİ]⭐</div>
                                            <div class="AdvertBox-ItemDesc">Merhabalar; &#304;lan &#305;m &#305;za ho &#351;geldiniz. A &#351;a &#287;&#305;da belirtilen ilan detaylar &#305;n &#305;oku</div>
                                        </a>
                                        <a href="/profil/FurkanMarket.html" title="FurkanMarket">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/24e6cc8449e3fea40d06a0a424ce42a4b4204ec8.png?height=25" alt="FurkanMarket" title="FurkanMarket" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    FurkanMarket
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/valorant/rgx-karambitli-bol-bicakli-efsane-ucuz-hesap-3546893.html" title="RGX KARAMBİTLİ BOL BIÇAKLI EFSANE UCUZ HESAP !!">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Valorant_Hesap_1.png')" src="https://cdn.itemsatis.com/uploads/post_images/rgx-karambitli-bol-bicakli-efsane-ucuz-hesap-54210158.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="RGX KARAMBİTLİ BOL BIÇAKLI EFSANE UCUZ HESAP !!" alt="RGX KARAMBİTLİ BOL BIÇAKLI EFSANE UCUZ HESAP !!"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            4200.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Valorant / " data-position="top left">
                                            <a href="/ilanlar/valorant.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/valorant-831.png?height=35" alt="Valorant"/>
                                            </a>
                                        </div>
                                        <a href="/valorant/rgx-karambitli-bol-bicakli-efsane-ucuz-hesap-3546893.html" title="RGX KARAMBİTLİ BOL BIÇAKLI EFSANE UCUZ HESAP !!">
                                            <div class="AdvertBox-Title">RGX KARAMBİTLİ BOL BIÇAKLI EFSANE UCUZ HESAP !!</div>
                                            <div class="AdvertBox-ItemDesc">merhabalar monitor almak icin sat &#305;yorum 11.500tl sat &#305;n alma gecmisi var y &uuml;ce u &#287;urlu &#287;u var dia2 </div>
                                        </a>
                                        <a href="/profil/Habbo.html" title="Habbo">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/global/woman-17.png?height=25" alt="Habbo" title="Habbo" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    Habbo
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/rust/yeni-twitch-drop-round-38-12-skin-1633621.html" title="⭐️YENİ Twitch Drop Round 38❤️12 Skin❤️">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_posts/ItemSatis.png')" src="https://cdn.itemsatis.com/uploads/post_images/yeni-twitch-drop-round-38-12-skin-10526477.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="⭐️YENİ Twitch Drop Round 38❤️12 Skin❤️" alt="⭐️YENİ Twitch Drop Round 38❤️12 Skin❤️"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            10.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Rust / " data-position="top left">
                                            <a href="/ilanlar/rust.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/5e7f987e91c9d-main-419a96aaa0159b4a8bca76197162c4ac89c07d37.png?height=35" alt="Rust"/>
                                            </a>
                                        </div>
                                        <a href="/rust/yeni-twitch-drop-round-38-12-skin-1633621.html" title="⭐️YENİ Twitch Drop Round 38❤️12 Skin❤️">
                                            <div class="AdvertBox-Title">⭐️YENİ Twitch Drop Round 38❤️12 Skin❤️</div>
                                            <div class="AdvertBox-ItemDesc">HEPS &#304;TAMAMLANMI &#350;TIR. 12 SK &#304;N &#304;N TAMAMI ALINDI.Round 38 &nbsp;=&nbsp;https://www.itemsatis.com/rust/ru</div>
                                        </a>
                                        <a href="/profil/themck.html" title="themck">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/7a866593efb23630dfea4f258aa9d73cf94ffa2c.png?height=25" alt="themck" title="themck" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    themck
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/discord/herseyi-degisen-2020-discord-hesap-2488262.html" title="Herşeyi Değişen 2020 Discord Hesap">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Discord_Sunucu2.png')" src="https://cdn.itemsatis.com/uploads/post_images/herseyi-degisen-2020-discord-hesap-48601199.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="Herşeyi Değişen 2020 Discord Hesap" alt="Herşeyi Değişen 2020 Discord Hesap"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            29.90 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Discord / " data-position="top left">
                                            <a href="/ilanlar/discord.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/discord-760.png?height=35" alt="Discord"/>
                                            </a>
                                        </div>
                                        <a href="/discord/herseyi-degisen-2020-discord-hesap-2488262.html" title="Herşeyi Değişen 2020 Discord Hesap">
                                            <div class="AdvertBox-Title">Herşeyi Değişen 2020 Discord Hesap</div>
                                            <div class="AdvertBox-ItemDesc">7/24 OTOMAT &#304;K TESL &#304;MATTIR!. &Uuml;r &uuml;n Hakk &#305;nda Bilgi ;1 Adet 2020 Discord Hesap Teslim Edilmektedir.</div>
                                        </a>
                                        <a href="/profil/SenTinusStore.html" title="SenTinusStore">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/5a83a755907fde1075230fca773ac14ca3a9ac3e.png?height=25" alt="SenTinusStore" title="SenTinusStore" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    SenTinusStore
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/steam/istediginiz-1-oyun-garanti-1596481.html" title="İstediğiniz 1 Oyun + Garanti">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Steam_1.png')" src="https://cdn.itemsatis.com/uploads/post_images/istediginiz-1-oyun-garanti-55483404.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="İstediğiniz 1 Oyun + Garanti" alt="İstediğiniz 1 Oyun + Garanti"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            25.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Steam / " data-position="top left">
                                            <a href="/ilanlar/steam.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/steam-442.png?height=35" alt="Steam"/>
                                            </a>
                                        </div>
                                        <a href="/steam/istediginiz-1-oyun-garanti-1596481.html" title="İstediğiniz 1 Oyun + Garanti">
                                            <div class="AdvertBox-Title">İstediğiniz 1 Oyun + Garanti</div>
                                            <div class="AdvertBox-ItemDesc">7/24 OTOMAT &#304;K TESL &#304;MATTIR!. OYUNLARI TESLIM ALMAK &#304;&Ccedil;&#304;N VEYA GUARD ALMAK &#304;&Ccedil;&#304;N</div>
                                        </a>
                                        <a href="/profil/SenTinusStore.html" title="SenTinusStore">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/5a83a755907fde1075230fca773ac14ca3a9ac3e.png?height=25" alt="SenTinusStore" title="SenTinusStore" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    SenTinusStore
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/valorant/full-full-3519062.html" title="FULL+FULL">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Valorant_Hesap_1.png')" src="https://cdn.itemsatis.com/uploads/post_images/full-full-92037787.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="FULL+FULL" alt="FULL+FULL"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            30000.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Valorant / " data-position="top left">
                                            <a href="/ilanlar/valorant.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/valorant-831.png?height=35" alt="Valorant"/>
                                            </a>
                                        </div>
                                        <a href="/valorant/full-full-3519062.html" title="FULL+FULL">
                                            <div class="AdvertBox-Title">FULL+FULL</div>
                                            <div class="AdvertBox-ItemDesc">Classic: RGX, BBLGhost: Fatih, Radiant Entertainment SystemSheriff: Y &#305;ld &#305;z Belas &#305;, &#304;yonStinger: Fati</div>
                                        </a>
                                        <a href="/profil/Wypherr.html" title="Wypherr">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/7bbf7567682ac694c1a26321f2a90ad2a55f4af6.jpg?height=25" alt="Wypherr" title="Wypherr" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    Wypherr
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/steam/istediginiz-3-oyun-garanti-613942.html" title="İstediğiniz 3 Oyun + Garanti">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Steam_3.png')" src="https://cdn.itemsatis.com/uploads/post_images/istediginiz-3-oyun-garanti-80554406.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="İstediğiniz 3 Oyun + Garanti" alt="İstediğiniz 3 Oyun + Garanti"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            50.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Steam / " data-position="top left">
                                            <a href="/ilanlar/steam.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/steam-442.png?height=35" alt="Steam"/>
                                            </a>
                                        </div>
                                        <a href="/steam/istediginiz-3-oyun-garanti-613942.html" title="İstediğiniz 3 Oyun + Garanti">
                                            <div class="AdvertBox-Title">İstediğiniz 3 Oyun + Garanti</div>
                                            <div class="AdvertBox-ItemDesc">7/24 OTOMAT &#304;K TESL &#304;MATTIR. OYUNLARI TESL &#304;M ALMAK &#304;&Ccedil;&#304;N B &#304;Z &#304;BEKLEMEN &#304;ZE VE</div>
                                        </a>
                                        <a href="/profil/OpssGamerShop.html" title="OpssGamerShop">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/0f47c490c28eb43cabf6763cfd814c15c0f0bae9.jpg?height=25" alt="OpssGamerShop" title="OpssGamerShop" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    OpssGamerShop
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/roblox/blox-fruit-2x-mastery-gamepass-1267180.html" title="Blox Fruit 2x Mastery GamePass">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_posts/ItemSatis.png')" src="https://cdn.itemsatis.com/uploads/post_images/blox-fruit-2x-mastery-gamepass-68734676.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="Blox Fruit 2x Mastery GamePass" alt="Blox Fruit 2x Mastery GamePass"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            130.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Roblox / " data-position="top left">
                                            <a href="/ilanlar/roblox.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/roblox-504.png?height=35" alt="Roblox"/>
                                            </a>
                                        </div>
                                        <a href="/roblox/blox-fruit-2x-mastery-gamepass-1267180.html" title="Blox Fruit 2x Mastery GamePass">
                                            <div class="AdvertBox-Title">Blox Fruit 2x Mastery GamePass</div>
                                            <div class="AdvertBox-ItemDesc">-OzanMarket--&nbsp;&Uuml;r &uuml;nde Stok S &#305;n &#305;rs &#305;zd &#305;r. &#304;stedi &#287;iniz Vakit Alabilirsiniz.-An&</div>
                                        </a>
                                        <a href="/profil/OzanMarket.html" title="OzanMarket">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/a4ff883ecc0ccfd769cf18f7b54a127d3da79bb4.png?height=25" alt="OzanMarket" title="OzanMarket" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    OzanMarket
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/pubg-mobile-random-hesap-satis/mega-25tl-pubg-random-hesap-3402241.html" title="⭐[MEGA] 25TL PUBG Random Hesap">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_posts/ItemSatis.png')" src="https://cdn.itemsatis.com/uploads/post_images/mega-25tl-pubg-random-hesap-27072724.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="⭐[MEGA] 25TL PUBG Random Hesap" alt="⭐[MEGA] 25TL PUBG Random Hesap"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            25.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="PUBG Mobile Random Hesap Satış / " data-position="top left">
                                            <a href="/ilanlar/pubg-mobile-random-hesap-satis.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/pubg-mobile-random-hesap-satis-165.png?height=35" alt="PUBG Mobile Random Hesap Satış"/>
                                            </a>
                                        </div>
                                        <a href="/pubg-mobile-random-hesap-satis/mega-25tl-pubg-random-hesap-3402241.html" title="⭐[MEGA] 25TL PUBG Random Hesap">
                                            <div class="AdvertBox-Title">⭐[MEGA] 25TL PUBG Random Hesap</div>
                                            <div class="AdvertBox-ItemDesc">PUBG MOBILE RANDOM GENEL DETAY :En Az 10 Kost &uuml;m &nbsp;Garantilidir.Fazladan kost &uuml;m &ccedil;&#305;kabilmektedir.</div>
                                        </a>
                                        <a href="/profil/Sinquary.html" title="Sinquary">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/52abaa5d817da2d75289cb887e603cdce58f4e01.png?height=25" alt="Sinquary" title="Sinquary" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    Dudefor                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/steam/marvel-s-spiderman-remastered-garanti-2747101.html" title="Marvel's Spiderman Remastered + Garanti">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_post_images/Steam_2.png')" src="https://cdn.itemsatis.com/uploads/post_images/marvel-s-spiderman-remastered-garanti-63477970.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="Marvel's Spiderman Remastered + Garanti" alt="Marvel's Spiderman Remastered + Garanti"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            25.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="Steam / " data-position="top left">
                                            <a href="/ilanlar/steam.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/steam-442.png?height=35" alt="Steam"/>
                                            </a>
                                        </div>
                                        <a href="/steam/marvel-s-spiderman-remastered-garanti-2747101.html" title="Marvel's Spiderman Remastered + Garanti">
                                            <div class="AdvertBox-Title">Marvel's Spiderman Remastered + Garanti</div>
                                            <div class="AdvertBox-ItemDesc">7/24 OTOMAT &#304;K TESL &#304;MATTIR!. OYUNLARI TESLIM ALMAK &#304;&Ccedil;&#304;N VEYA GUARD ALMAK &#304;&Ccedil;&#304;N</div>
                                        </a>
                                        <a href="/profil/SenTinusStore.html" title="SenTinusStore">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/5a83a755907fde1075230fca773ac14ca3a9ac3e.png?height=25" alt="SenTinusStore" title="SenTinusStore" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    SenTinusStore
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/pubg-mobile/buz-6-sv-tek-bag-3540926.html" title="Buz 6 sv tek bağ ">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_posts/PUBGMobile3.png')" src="https://cdn.itemsatis.com/uploads/post_images/buz-6-sv-tek-bag-42519909.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="Buz 6 sv tek bağ " alt="Buz 6 sv tek bağ "/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            2500.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="PUBG Mobile / " data-position="top left">
                                            <a href="/ilanlar/pubg-mobile.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/pubg-mobile-9.png?height=35" alt="PUBG Mobile"/>
                                            </a>
                                        </div>
                                        <a href="/pubg-mobile/buz-6-sv-tek-bag-3540926.html" title="Buz 6 sv tek bağ ">
                                            <div class="AdvertBox-Title">Buz 6 sv tek bağ </div>
                                            <div class="AdvertBox-ItemDesc">&#128184;Tekken8 Seti &#128184;&#128184;K &ouml;pek bal &#305;&#287;&#305;seti &#128184;DESTANSI G &Ouml;STER &#304;&#350;&#</div>
                                        </a>
                                        <a href="/profil/tetshoop.html" title="tetshoop">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/global/pubg-kadin.png?height=25" alt="tetshoop" title="tetshoop" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    tetshoop
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 AdvertBox-1 ">
                                    <div class="AdvertBox-Main">
                                        <a href="/tiktok/tiktok-kesfet-paket-hemen-teslim-1503725.html" title="TİKTOK KEŞFET PAKET | HEMEN TESLİM">
                                            <div class="postImageBox">
                                                <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49"></script>
                                                <img onerror="ResimKontrol(this,'https://cdn.itemsatis.com/uploads/default_posts/ItemSatis.png')" src="https://cdn.itemsatis.com/uploads/post_images/tiktok-kesfet-paket-hemen-teslim-49150956.png?height=130" loading="lazy" class="AdvertBox-Image-1" title="TİKTOK KEŞFET PAKET | HEMEN TESLİM" alt="TİKTOK KEŞFET PAKET | HEMEN TESLİM"/>
                                            </div>
                                        </a>
                                        <div class="AdvertBox-Price">
                                            20.00 <small>TL</small>
                                        </div>
                                        <div class="AdvertBox-Category" data-inverted="" data-tooltip="TikTok / " data-position="top left">
                                            <a href="/ilanlar/tiktok.html">
                                                <img src="https://cdn.itemsatis.com/uploads/category_images/tiktok-779.png?height=35" alt="TikTok"/>
                                            </a>
                                        </div>
                                        <a href="/tiktok/tiktok-kesfet-paket-hemen-teslim-1503725.html" title="TİKTOK KEŞFET PAKET | HEMEN TESLİM">
                                            <div class="AdvertBox-Title">TİKTOK KEŞFET PAKET | HEMEN TESLİM</div>
                                            <div class="AdvertBox-ItemDesc">+30.000 BA &#350;ARILI &#304;&#350;LEM &#304;LE SOSYAL MEDYA KATEGOR &#304;S &#304;N &#304;N M &Uuml;&#350;TER &#304;MEMNUN&#</div>
                                        </a>
                                        <a href="/profil/LuneaMedia.html" title="LuneaMedia">
                                            <div class="AdvertBox-Publisher">
                                                <img data-src="https://cdn.itemsatis.com/avatar/user/3869bb227ed2148ba41fe4390c9d4bae46fbb17c.jpg?height=25" alt="LuneaMedia" title="LuneaMedia" src="https://cdn.itemsatis.com/uploads/admin/shadow-lazy-dark.png" loading="lazy" class="lazyload"/>
                                                <span class="PublisherName">
                                                    <small>SATICI</small>
                                                    LuneaMedia
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 firsatlarColDiv">
                        <ul class="UrunMenuList">
                            <li class="active">
                                <i class="fas fa-star"></i>
                                Günün Fırsat Ürünleri
                            </li>
                        </ul>
                        <div class="panel">
                            <div class="panel-body gununFirsatlariDiv">
                                <div class="products-one first-item">
                                    <a href="https://www.itemsatis.com/urunler/identity-v/identity-v-2025-202-echoes.html" title="Identity V 2025+202 Echoes">
                                        <div class="products-image" style="background : url(https://cdn.itemsatis.com/uploads/images/identity-v-2025-202-echoes-653.png)"></div>
                                        <div class="products-title ">Identity V 2025+202 Echoes</div>
                                        <div class="products-desc">Top Up ürünüdür.</div>
                                        <div class="products-discount">%6 İndirim</div>
                                        <div class="products-price">
                                            <h2>
                                                913.93 <span>₺</span>
                                            </h2>
                                            <h3 data-html="Bu ürüne <b>%6 indirim</b> uygulanmıştır.<br>İndirim sayesinde <b>25.3₺</b> kazancınız olacaktır." data-inverted="">
                                                972.27 <span>₺</span>
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-one first-item">
                                    <a href="https://www.itemsatis.com/urunler/cd-key/battlefield-4-premium-edition-ea-cd-key-global.html" title="Battlefield 4 Premium Edition EA CD Key Global">
                                        <div class="products-image" style="background : url(https://cdn.itemsatis.com/uploads/images/battlefield-4-premium-edition-ea-cd-key-global-727.png)"></div>
                                        <div class="products-title ">Battlefield 4 Premium Edition EA CD Key Global</div>
                                        <div class="products-desc"></div>
                                        <div class="products-discount">%70 İndirim</div>
                                        <div class="products-price">
                                            <h2>
                                                396.00 <span>₺</span>
                                            </h2>
                                            <h3 data-html="Bu ürüne <b>%70 indirim</b> uygulanmıştır.<br>İndirim sayesinde <b>25.3₺</b> kazancınız olacaktır." data-inverted="">
                                                1320.00 <span>₺</span>
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-one first-item">
                                    <a href="https://www.itemsatis.com/urunler/cd-key/the-invisible-hand-global-steam-key.html" title="The Invisible Hand Global Steam Key">
                                        <div class="products-image" style="background : url(https://cdn.itemsatis.com/uploads/images/the-invisible-hand-global-steam-key-304.png)"></div>
                                        <div class="products-title ">The Invisible Hand Global Steam Key</div>
                                        <div class="products-desc"></div>
                                        <div class="products-discount">%90 İndirim</div>
                                        <div class="products-price">
                                            <h2>
                                                23.50 <span>₺</span>
                                            </h2>
                                            <h3 data-html="Bu ürüne <b>%90 indirim</b> uygulanmıştır.<br>İndirim sayesinde <b>25.3₺</b> kazancınız olacaktır." data-inverted="">
                                                235.00 <span>₺</span>
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-one first-item">
                                    <a href="https://www.itemsatis.com/urunler/cd-key/figment-2-creed-valley-global-steam-key.html" title="Figment 2: Creed Valley Global Steam Key">
                                        <div class="products-image" style="background : url(https://cdn.itemsatis.com/uploads/images/figment-2-creed-valley-global-steam-key-260.png)"></div>
                                        <div class="products-title ">Figment 2: Creed Valley Global Steam Key</div>
                                        <div class="products-desc"></div>
                                        <div class="products-discount">%95 İndirim</div>
                                        <div class="products-price">
                                            <h2>
                                                20.95 <span>₺</span>
                                            </h2>
                                            <h3 data-html="Bu ürüne <b>%95 indirim</b> uygulanmıştır.<br>İndirim sayesinde <b>25.3₺</b> kazancınız olacaktır." data-inverted="">
                                                419.00 <span>₺</span>
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-one first-item">
                                    <a href="https://www.itemsatis.com/urunler/cd-key/punch-club-steam-key.html" title="Punch Club Global Steam Key">
                                        <div class="products-image" style="background : url(https://cdn.itemsatis.com/uploads/images/punch-club-global-steam-key-292.png)"></div>
                                        <div class="products-title ">Punch Club Global Steam Key</div>
                                        <div class="products-desc"></div>
                                        <div class="products-discount">%77 İndirim</div>
                                        <div class="products-price">
                                            <h2>
                                                49.45 <span>₺</span>
                                            </h2>
                                            <h3 data-html="Bu ürüne <b>%77 indirim</b> uygulanmıştır.<br>İndirim sayesinde <b>25.3₺</b> kazancınız olacaktır." data-inverted="">
                                                215.00 <span>₺</span>
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-one first-item">
                                    <a href="https://www.itemsatis.com/urunler/cd-key/squad-commander-edition-steam-cd-key.html" title="Squad Commander Edition Steam CD Key">
                                        <div class="products-image" style="background : url(https://cdn.itemsatis.com/uploads/images/squad-commander-edition-steam-cd-key-28.png)"></div>
                                        <div class="products-title ">Squad Commander Edition Steam CD Key</div>
                                        <div class="products-desc"></div>
                                        <div class="products-discount">%62 İndirim</div>
                                        <div class="products-price">
                                            <h2>
                                                474.62 <span>₺</span>
                                            </h2>
                                            <h3 data-html="Bu ürüne <b>%62 indirim</b> uygulanmıştır.<br>İndirim sayesinde <b>25.3₺</b> kazancınız olacaktır." data-inverted="">
                                                1249.00 <span>₺</span>
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="fixed-left-menu">
            <a href="https://www.itemsatis.com/l/QY9BpUHF" class="menu-btn" style="color: #f39c12;">
                <i class="fa-solid fa-plus"></i>
                <span>İlan Ver</span>
            </a>
            <a href="https://www.itemsatis.com/l/cmNUf3IK" class="menu-btn" style="color: #27ae60;">
                <i class="fa fa-wallet"></i>
                <span>Bakiye</span>
            </a>
            <a href="https://www.itemsatis.com/l/z27cPU6q" class="menu-btn" style="color: #e74c3c;">
                <i class="fa fa-key"></i>
                <span>CD KEY</span>
            </a>
            <a href="https://www.itemsatis.com/l/ZHIufvKa" class="menu-btn" style="color: #3498db;">
                <i class="fa fa-gift"></i>
                <span>Çekilişler</span>
            </a>
            <a href="https://www.itemsatis.com/l/1PjVOgp9" class="menu-btn" style="color: #f1c40f;">
                <i class="fa fa-percent"></i>
                <span>Fırsatlar</span>
            </a>
            <a href="https://www.itemsatis.com/l/FCYSGIBh" class="menu-btn" style="color: #a333c8;">
                <i class="fa-brands fa-instagram"></i>
                <span>Instagram</span>
            </a>
        </div>
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center footer-text">
                            <div class="ui icon header h2div">
                                <img src="https://cdn.itemsatis.com/uploads/admin/9KJxByk6SfUGI2FVvzAPWcNoe.png" alt="İlan Pazarı"/>
                                <div class="footer-box-div">
                                    <b>İlan Pazarı</b>
                                    <div class="sub header">Binlerce ilan arasından seçimini yap ve hemen satın al.</div>
                                    <a href="/ilan-pazari.html" class="btn btn-primary btn-md">
                                        <i class="fas fa-gem"></i>
                                        İlan Pazarı
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center footer-text">
                            <div class="ui icon header h2div">
                                <img src="https://cdn.itemsatis.com/uploads/admin/NDfKWYL5SpOQM8XeaCzuUgRqG.png" alt="Mağazalar"/>
                                <div class="footer-box-div">
                                    <b>Mağazalar</b>
                                    <div class="sub header">Güvenilir mağazaları incele ve alışverişe başla.</div>
                                    <a href="/magazalar.html" class="btn btn-primary btn-md">
                                        <i class="fas fa-store"></i>
                                        Mağazalar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center footer-text">
                            <div class="ui icon header h2div border-none">
                                <img src="https://cdn.itemsatis.com/uploads/admin/ycNF4x2wUfbSMXOqKE6nItGaY.png" alt="Güvenli Alışveriş"/>
                                <div class="footer-box-div">
                                    <b>Güvenli Alışveriş</b>
                                    <div class="sub header">Güvenli ticaret sistemi ile gönlünüz rahat bir şekilde alışveriş yapın!</div>
                                    <a href="/guvenli-alisveris/alicilar.html" class="btn btn-primary btn-md">
                                        <i class="fas fa-user-shield"></i>
                                        Güvenli Alışveriş
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <b>
                                <i class="fas fa-bolt"></i>
                                Hızlı Erişim
                            </b>
                            <ul>
                                <li>
                                    <a href="/hakkimizda.html">Hakkımızda</a>
                                </li>
                                <li>
                                    <a href="/kategoriler.html">Tüm Kategoriler</a>
                                </li>
                                <li>
                                    <a href="/bakiye-yukle.html">Bakiye Yükle</a>
                                </li>
                                <li>
                                    <a href="/para-cek.html">Para Çek</a>
                                </li>
                                <li>
                                    <a href="/kontrol-merkezi.html">Kontrol Merkezi</a>
                                </li>
                                <li>
                                    <a href="/ilan-ekle.html">İlan Ekle</a>
                                </li>
                                <li>
                                    <a href="/alim-ilani-pazari.html">Alım İlanları</a>
                                </li>
                                <li>
                                    <a href="/cd-keys.html">CD Key</a>
                                </li>
                                <li>
                                    <a href="/yardim.html">Yardım Merkezi</a>
                                </li>
                                <li>
                                    <a href="/sozlesme/yeni-kullanici-bilgilendirmesi.html">Yeni Kullanıcı Bilgilendirmesi</a>
                                </li>
                                <li>
                                    <a href="/hesabimi-sil">Hesap Silme Talebi</a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-2">
                            <b>
                                <i class="fas fa-building"></i>
                                Kurumsal
                            </b>
                            <ul>
                                <li>
                                    <a href="/sozlesme/gizlilik-sozlesmesi.html">Gizlilik Sözleşmesi</a>
                                </li>
                                <li>
                                    <a href="/sozlesme/kisisel-verilerin-korunma-politikasi.html">Kişisel Verilerin Korunma Politikası</a>
                                </li>
                                <li>
                                    <a href="/sozlesme/uyelik-sozlesmesi.html">Üyelik Sözleşmesi</a>
                                </li>
                                <li>
                                    <a href="/sozlesme/kullanim-kosullari.html">Kullanım Koşulları</a>
                                </li>
                                <li>
                                    <a href="/sozlesme/mesafeli-satis-sozlesmesi.html">Mesafeli Satış Sözleşmesi</a>
                                <li>
                                    <a href="/sozlesme/kullanicilar-arasi-mesafeli-satis-sozlesmesi.html">Kullanıcılar Arası Mesafeli Satış Sözleşmesi</a>
                                </li>
                                <li>
                                    <a href="/sozlesme/cerez-politikasi.html">Çerez Politikası</a>
                                </li>
                                <li>
                                    <a href="/sozlesme/iptal-iade.html">İptal & İade</a>
                                </li>
                                <li>
                                    <a href="/itemsatis-sikayetimvar.html">Şikayetim Var</a>
                                </li>
                                <li>
                                    <a href="/musteri-yorumlari.html">Müşteri Yorumları</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <b>
                                <i class="fas fa-fire-alt"></i>
                                Popüler Kategoriler
                            </b>
                            <ul>
                                <li>
                                    <a href="https://www.itemsatis.com/urunler/valorant-points-vp-satin-al.html" title="VALORANT VP Satın Al">VALORANT VP Satın Al</a>
                                </li>
                                <li>
                                    <a href="https://www.itemsatis.com/ilanlar/valorant-hesap-satisi.html" title="VALORANT Hesap Satın Al">VALORANT Hesap Satın Al</a>
                                </li>
                                <li>
                                    <a href="https://www.itemsatis.com/ilanlar/discord.html" title="Discord Nitro, Owo Bot Satın Al">Discord Nitro, Owo Bot Satın Al</a>
                                </li>
                                <li>
                                    <a href="https://www.itemsatis.com/kategoriler/roblox.html" title="Roblox İtem, Roblox Satın Al">Roblox İtem, Roblox Satın Al</a>
                                </li>
                                <li>
                                    <a href="https://www.itemsatis.com/kategoriler/league-of-legends-tr.html" title="LoL RP & LoL Hesap Satış">LoL RP & LoL Hesap Satış</a>
                                </li>
                                <li>
                                    <a href="https://www.itemsatis.com/kategoriler/mobil-oyunlar.html" title="Mobil Oyunlar Hesap Satışı">Mobil Oyunlar Hesap Satışı</a>
                                </li>
                                <li>
                                    <a href="https://www.itemsatis.com/kategoriler/steam.html" title="Steam Hesap & Cüzdan Kodu Satın Al">Steam Hesap & Cüzdan Kodu Satın Al</a>
                                </li>
                                <li>
                                    <a href="https://www.itemsatis.com/kategoriler/pubg-mobile.html" title="PUBG Mobile UC & Hesap Satın Al">PUBG Mobile UC & Hesap Satın Al</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <b>
                                <i class="fas fa-icons"></i>
                                Sosyal Medya
                            </b>
                            <br>
                            <br>
                            <center>
                                <a href="https://discord.gg/UtjXNfpdG9" target="_blank" title="Discord">
                                    <img src="https://discordapp.com/api/guilds/1041092731440738416/widget.png?style=banner3&ver=1739914498" alt="Discord" title="Discord" style="border-radius:5px;"/>
                                </a>
                            </center>
                            <div class="footer-social-boxes" style="margin-top:10px">
                                <a class="footer-soc-box" href="https://www.instagram.com/itemsatiscom/" target="_blank" rel="nofollow">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="footer-soc-box" href="https://www.tiktok.com/@itemsatiscomtr" target="_blank" rel="nofollow">
                                    <img src="https://cdn.itemsatis.com/uploads/admin/tiktok.svg" alt="İtemSatış Tiktok" style="width:14px"/>
                                </a>
                                <a class="footer-soc-box" href="https://www.youtube.com/@itemsatiscom" target="_blank" rel="nofollow">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a class="footer-soc-box" href="https://www.facebook.com/itemsatiscomtr/" target="_blank" rel="nofollow">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="footer-soc-box" href="https://twitter.com/itemsatiscom" target="_blank" rel="nofollow">
                                    <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                    </svg>
                                </a>
                                <a class="footer-soc-box" href="https://www.linkedin.com/company/itemsatis/" target="_blank" rel="nofollow">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 footerCompany">
                            <b>
                                <i class="far fa-address-book"></i>
                                İletişim
                            </b>
                            <br>
                            <br>
                            <a onclick="if (!window.__cfRLUnblockHandlers) return false; maximizeTawk()" title="Canlı Destek" data-cf-modified-93da80b67f3194b9c00d3b01-="">
                                <span class="iletisimBox">
                                    <i class="fas fa-headset"></i>
                                    Canlı Desteğe Bağlan
                                </span>
                            </a>
                            <a href="tel:08503061054">
                                <span class="iletisimBox d-flex">
                                    <i class="fab fa-whatsapp"></i>
                                    <div>
                                        0850 306 10 54<span class="yalnizcaWhatsapp">Yalnızca WhatsApp</span>
                                    </div>
                                </span>
                            </a>
                            <a href="tel:08503090380">
                                <span class="iletisimBox d-flex">
                                    <i class="fab fa-whatsapp"></i>
                                    <div>
                                        0850 309 03 80<span class="yalnizcaWhatsapp-2">Yalnızca Bildirim Gönderimi</span>
                                    </div>
                                </span>
                            </a>
                            <a href="/cdn-cgi/l/email-protection#97f3f2e4e3f2fcd7fee3f2fae4f6e3fee4b9f4f8fab9e3e5">
                                <span class="iletisimBox">
                                    <i class="fas fa-envelope-open-text"></i>
                                    <span class="__cf_email__" data-cfemail="6a0e0f191e0f012a031e0f07190b1e031944090507441e18">[email &#160;protected]</span>
                                </span>
                            </a>
                            <a href="/yardim.html" target="_blank" title="Yardım Merkezi">
                                <span class="iletisimBox">
                                    <i class="fas fa-life-ring"></i>
                                    Yardım Merkezi
                                </span>
                            </a>
                            <a href="/destek-sistemi.html" target="_blank" title="Destek Sistemi">
                                <span class="iletisimBox">
                                    <i class="fas fa-ticket-alt"></i>
                                    Destek Talebi Oluştur
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="row border-top-footer">
                        <div class="payment-methods-row">
                            <img src="https://cdn.itemsatis.com/uploads/admin/odemeyontemlerimiz.png" alt="Ödeme Yöntemleri" style="height: 25px;margin-top:15px;">
                        </div>
                    </div>
                    <div class="row border-top-footer">
                        <div class="legal-company-flex">
                            <div class="legal-item">
                                <a href="#">
                                    <span class="iletisimBox d-flex hukuki-temsilci-box">
                                        <!--								<i class="fas fa-building"></i>-->
                                        <div class="temsilci-inner-box">
                                            <span>Yasal Bilgilendirme</span>
                                            <div class="inner-content-hukuk">
                                                <b class="hukuk-company-name">Yer Sağlayıcı Bilgilendirmesi</b>
                                                <br>
                                                <span>İtemSatış.com sitemiz, ALFATEK Yazılım Danışmanlık firması bünyesinde 5651 Sayılı Kanun'un 5. Maddesine tanımlanan şekliyle “yer sağlayıcı” olarak hizmet vermektedir. </span>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <div class="legal-item">
                                <a href="#">
                                    <span class="iletisimBox d-flex hukuki-temsilci-box">
                                        <!--								<i class="fas fa-building"></i>-->
                                        <div class="temsilci-inner-box">
                                            <span>Yasal & Hukuki Temsilci</span>
                                            <div class="inner-content-hukuk">
                                                <b class="hukuk-company-name">YG Legal Hukuk Bürosu</b>
                                                <br>
                                                <span>
                                                    İstiklal Mah. Muhsin Yazıcıoğlu Bulvarı No : 71 / 203 İç Kapı No : 36 Aşoğlu Plaza Serdivan / Sakarya
										<br>
                                                    KEP Adresi : <span class="__cf_email__" data-cfemail="89fde8e1e8a7eeece7eac9e1fab9b8a7e2ecf9a7fdfb">[email &#160;protected]</span>
                                                </span>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <div class="legal-item">
                                <a href="#">
                                    <span class="iletisimBox d-flex hukuki-temsilci-box">
                                        <!--								<i class="far fa-copyright"></i>-->
                                        <div class="temsilci-inner-box">
                                            <span>Marka & Kişilik Hakları Sahibi</span>
                                            <div class="inner-content-hukuk">
                                                <b class="hukuk-company-name">ALFATEK Yazılım Danışmanlık LTD. ŞTİ.</b>
                                                <br>
                                                <span>
                                                    Esentepe Mah. Akademiyolu Cad.<br>
                                                    Sakarya Üniv. Teknoloji Geliştirme Bölgeleri D Blok<br>Serdivan / Sakarya
										
                                                </span>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <div class="legal-item">
                                <a href="#">
                                    <span class="iletisimBox d-flex hukuki-temsilci-box">
                                        <!--								<i class="far fa-copyright"></i>-->
                                        <div class="temsilci-inner-box">
                                            <span>İşletmeci Şirket</span>
                                            <div class="inner-content-hukuk">
                                                <b class="hukuk-company-name">Alphapins Bilişim Hizmetleri LTD.</b>
                                                <br>
                                                <span>
                                                    Mehmet Akif Cad. No: 25/A Köşklüçiftlik<br>
                                                    Lefkoşa / KKTC<br>
                                                    <br>
                                                    İletişim : <span class="__cf_email__" data-cfemail="8ae3e4ece5caebe6fae2ebfae3e4f9a4e4effe">[email &#160;protected]</span>
                                                </span>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!--
						<div id="ETBIS">
							<div id="5742682124355238">
								<a href="https://etbis.eticaret.gov.tr/sitedogrulama/5742682124355238" target="_blank">
									<img alt="ALPHAPINS BİLİŞİM HİZMETLERİ LTD. Etbis" style='width:100px; height:120px' src="data:image/jpeg;base64, iVBORw0KGgoAAAANSUhEUgAAAQQAAAEsCAYAAAAl981RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAIeDSURBVHhe7V0FgBXV9/7bPwMDpTsFuxs7UGwUW7Gxu7AFxe5GUWwpg1JEJZft3qVDGgGRbs//fDP38d47c2b3zs6+twu8Tz929825MfNmvrlx7rn/x6DqxBNPPJFscdZZZ6l5hOHgwYNN7lG8+OKLqq3krrvuSvPmzTOpKgcrV66k+vXrq+VJ3nfffSZVxXDxxRer+UoeccQRJkUUa9eupcaNG3ts+/btaywSi3fffddT9sEHH2yOlo/LLrvMk/7WW281R8vGhg0bqHnz5p70X331lbGI4uOPP/bYVQNex9wEzaDKmBKEeKQEwQ4pQQjFlCD4MSUIet6xTAlCPFKCkEAGEYQzzzxTzSMMwwjCLrvsQvPnzzepKgerVq2ievXqqeVJJksQDj/8cJMiiq1ZEDZu3JgShEQxiCC0a9dOzSMMf/vtN5N7FC+99JJqq3HZsmUmVeVhjz32UMuSvOeee0yKiqFTp05qvpJt27Y1KaKojoJw2GGHmaPlo2PHjp70N910kzlaPlq2bOlJv8UIAt6Iv/zyS8J57bXXesoOIgjZ2dlqvpKvvfaap5ydd96ZvvvuO49tly5dnK5ILJ944gmPncaBAwfSRRdd5Ekfhh06dKD+/fur5Um+8MILah62rFOnjuc6XXjhhZ5yxo0bZ76BKIIIwo8//qiWL3nOOefQggULTKqyoQlCjRo11Hw1vv32257zfPnll1VbSbRUcT/J8m0FoUmTJp6yE8WGDRt6ymeWLQjp6emm+okFLrgsO4gg2CI/P99Tzu67705r1qwxFlGcdtppHtuHH37YHC0fGEeQ6cPSttXx5ptvqunD0PbcgwjCK6+84rHz47Rp00yqsqEJQhBCdCV69uyp2trSVhAOOuggczTx2G+//TzlM8sWhOHDh5vkicVzzz3nKTsRgjB69GhPOXh7aG8fvJWk7SOPPGKOlo0VK1ZQ3bp1PenDEOMSc+bMMSWUjddff13NIwxtuyFBBAFvY2mncYcddqAZM2aYVGUjrCCgtSjx4Ycfqra2tBWE/fff3xxNPPbdd19P+cyUIKQEwY4pQdDtbZgShICoSkFAlwHTRRLoM0vbqhQEdEG0ro2GRAjCnXfeaXIvH7imMr32UNgKAjh16lSTqmx8/vnnanpb/vDDDyanKD755BPV1pZbtCCMHTvW6fNXlNOnTzc5RWErCHj74A1gk6cGTRB22mknevrppz15tmnTxmNblYKAtyQGNWU9J0+ebEqNIqwgXHDBBfTQQw/F8amnnvKU7UdcJ5m+oKDA1C4KTRBq167tSYv8/vnnH5Mqip9++slTtibktWrV8uTpx27dunnyxP0p7Tp37uwpx49hBQFjGLJOtvz0009NLvGoNEHA4JJma8tBgwaZnKKwFYR///2XttlmG4/tzz//bCzKhiYIQViVguBHrSkeVhC0Kdd33nlHtdW4dOlSk6psaIKgOTv5ASP7Mr1GzV/CD5qg3HjjjeZoFLNmzfLY+TGMIPz333+09957e2xtCYHVUGmC8Mwzz3jsgnDYsGEmpyhsBQE32j777OOxxTSKDbZEQcBbUiKsIGgj7bYzFzvuuCP99ddfJlXZ0AThkEMOMUfLx6WXXupJrzERjkmFhYUeOz+GFYRWrVp5bG2Jlq6GlCAwUoJgx5QgxKdPCYLh5iIIo0aNMhZlIycnx5M2CG3n4pcvX0677babmkdlU7ue7733nmpryzCCAC5cuNCkKhvaQxHEq/Dcc8/1pNeIm98WV199tSd9WEH47LPPTKooUoJgmAhBQP82KyurXGqjxdttt53zBkHftTx27drVk+f48eNN7aLAugP0b2V6W9fjIIT3pawT1jJotra0FQTMfMhzPProo53vWNZJ44MPPujJs3Xr1h47eKJiQFkCLTZZvkaMC8g8/XjGGWd46mQrCBjfOvDAAz3lDxkyxKSKIiUIhokQhDCEH8KSJUtMCWVDW9x05JFHmqPl4/zzz/ekr460FQS/c7ddhBWEtjNJGoqLi9U8bWkrCHi5YLDRBilBMKyOgmDbxNUE4ZhjjjFHy8d5553nSV8daSsIePtJrF+/3s9PvsLEg2brmKQBU55avrYMIgi2wpUSBMPqKAi2C2c0QTjuuOPM0fJh2+etaoYRBD9PxTAM4qmoQVvDEoRBBMHWgSolCIZhBWHPPff02IZhWEFAn9kWZ599tid9dSRWIUpoMwJalwExASpbENA3t22Ka0iEIPi1OqZMmWIsykZKEAzDCgKm87bffvtyue2223ry1OgnCHBnRvM3lhAEWQ5iMdgCHoAyvW09/Yi3UmXn2adPH8+5a1OZcPiRdojs1KhRI4+tbT3x8Es7LCnGm1eWhYfFBokQhKKiIk894fVquyozJQiGYQQBbx/MceOil0e4l8o8NfoJwvXXX0/NmjWL42OPPeYpZ+7cuSZF+UAUJZn+0UcfVetlS9xYMk+4OGu2toR3mzx3zVsOD4C0a9q0qfNwSFtMhcp6wmVc2mFZrrSbNGmSM1Yjy9KiWmlIhCCgayTrifEDCJUNUoJgGEYQgsB2rb2fIISNh2CLN954w1NOEGpOWUHcjJNFzb1cW0Xo54egOXp9++235mjZSIQghEVKEAyTJQiIGiTz1OgnCGGWPwcBFqDIcoIwEZ6KiaDt8mfNU3HdunVONCFpi66NDVKC4EVKEHyYEoTkMCUI8dhiBAEPhWZrS63fV5WCAGpxBk499VSPXSK6DGEDeiRitWMi+PXXX5vaRaGJIcYGJCAImpenNhuiIazLurbaMSyCCAKWb0tbW6KrpaHSBAHTLV988UWFqQ3CJUsQ4BYr69OrVy/nC7/mmmviiIdK2qKe0k7jTTfd5CzVloCbsbRFn1nWs0WLFp6y/ahNx2mCgPDgWnpbXnXVVZ48NWJAEeMiMr3mRwC3b2mHALUSGEyGb4S0heuzvJ69e/c2qaJALAWZFusLtAftjjvu8NjiXpLlwI09DGwFAUDQFlknW2otSKDSBCERSJYgnHLKKeZoPLBCT9r+/vvv5mgUQcKwa+HOcE6areTxxx9vUlQMmiAce+yx5mjFYBtoFNcyESHoNWAaV5aPwCW2gPDK9FoLVlsDg6nVMAgiCIlAShCYJ5xwgjkaBW5eTLNJ20Ts3GTrqRjE2UmDJghB1lxosF3tGGT5c1hoy5/xhrcBpgfRPZHpbWMqYhFTGKQEoQykBCGeKUGwQ0oQKo4KCUJmZqZJnli8+uqrnrI3Z0EAV69ebVJFcfrpp6u2kpuzIIDa+EkioHUZsMGODaqjIFT7fRkwo6ANVFQ2te2zNEHAaPP333/vSa/115MlCBiYkgNO6Meizy3ref/993tstUFFTRBwA2NGQeZpO6ioCQLcs/v16+fJU3vDa4IA70V5Ptddd51zs8s8kzWoiME+aaflmQhBwIzAgAEDPOXDi1FCE4QGDRp40iaKPkvUyxaEqqQmCHjzwCde2mpfeLIEwa8lo23ppQUv1aYdNUFAWDYtT9tpR00QEMgF+z1IW80DUBMEv6Xf2gK0ZE07fvDBBx47uFNLJEIQILA1a9b02GqRjzVBqAbcvATBb/mz5r6bLEHQlj/7xVTUhEt7KDRB8NsO3tYxSRMEdGvwVpK2iVj+nCzHJE1gtZiKiRKE1O7PCWJKEOKREoSUICSB1VcQtIcCXQZtE1Xt4X322Wc9dtpDEUQQsImHtNMW4/gJgua2rS3C0m5gCMJee+3lsdXqqS1u8hMErYmrPWhhBcF2cVNYQdDqiRF1CT9BwBiABJzXpJ1fJGdNYDVnqffff99jVw0YFQRcnOpEhMOWQDRjPIDSduTIkcYiClxwaYdpKokggoD+qcwTA6ISfoIABxe5ZLZHjx6ePLGVvAT6+xBJaYu3j8xTW/6sCQJctrVlxVqLK6wg2C5/DisIGDCT54N1KRJ+goBWi6xn9+7dPXYQGWmH4ChoMcrytbEOjNNIu6pm06ZNo4KAC1SdiOaXBs0Wo7sSGJmWdlqeQQTBNk8/QdCChCBug02egLQDEVFY5qkFHtEEAdDy1K5nWEGwDZASVhBsvyN8jodA5qnVUxvI1gK5ID4EYjfI8lEnCa2eVU3+7qKCYOq51SGIINjCTxA0QhDCwNbZyU8QbBFWEGwZVhBsgQdAE4SwDBP7sarBL4KUIGzugmAb2j0lCPFIhCCgJWEbZLU6IiUIDAiCNnOhba5hCwiCJjIawwqC5q2nMawgvPXWW548NUHAg7Y5CAKa7FqeYZgShC0AEARt9H7o0KHGIjggCLY79oYVBG23Yo1HHXWUSVEx2M5cAGEetGQJAqAFgw3DlCAYYAssjP7bMD093aSKAnOymq0kIhxruyxhQYtmL3nDDTeYFFFgwAkxHhBEI5ZwwdXykEQwVgm8fRC3X+apEf4SWr62tN0eDh6JWnpbapuvaHkeeuih6nJy+FvIc4cYSruwggDXdlknjWjd/Prrr546nXnmmZ5ybJlMQXjyySfV85K8+OKLTYryUWmCAJdcZGFDrSluGyUYo9J///23SRUFnJg0e0lcIFtoe/xp1G7gILANBru5c9CgQeaMo/joo488dmEFIUjQWkTBlrANBKMxmYJgu/N1kLgNlSYIf/zxh1oZjbYxFTXuvvvu6rZr2FhVs5fUPBX9oMVU1Bhk5yYNmqfilsiq9FTUiGlC+A5IaNvB2zKZgoCFXFodJP1iKmpICUIZSAlC5TIlCJWLai0Iubm5amU0jhkzxqSKwlYQQC1CMrztNFtJ9G9tgXBrWh6Sfi6stoAHn5bvlkb01yW0c0dYMw3aGoEwggBOnjzZpIoizHZ7EATbncTD4uabb1brIJlwQcAX+8ADD8RR68/873//cx50BD+JJdary/RwYZV2GjHSDRdeCazp1+wlMYAny/bj888/r+YhCddjmRY7PGH2QgKuy9JWG//AtJ1WVhjec889nnKCEAO6Wr6SiDupzdpg52t57k899ZQnPRaQSbt7773XaR3KPG0FAYvCZDlYAKYFcsFYh7S95JJLPHlqhPciAvbK+mOwUmLcuHEeuyD0CXDiYcIFAaHIYV4esSZeAwKISluMmCYDQVoy6AbZwC/mvxa0BQ+VZisZpGtjC7wNtbJsiS3nbIH4A1oekrfffrtJEQXWA2i2Gm0FAXtQhgHWi8g8g1CLh6B1lxLBhAuC7UYtmA5btGiRSRWFNnqfLEEYPXq0p2w/2noqjh071pO2qmMqakA4PK0sW6KFYYMgnop33XWXSRVFXl6eaqvRVhDCduu0VZlBWJXLn1OCUAZSgqCXZ8OUIMTnGYRbtCDY7laMLgPcWCW0ZnOyBCE7O9tTth/DCMJuu+2mjnVgWbO01Rh2XwYNYQVBe3g1BBEEbUekIN9RsgTBdk8KP2qCkKwNeTF+YosKCQJOrn379nGEWyyyiCXekvAagwtwLG+55RZPegwuSTvNoxECg9Dw0labisT0j7RDX06WjRaL5lkXRhAwoIoYgrJ87TppxFp7mTYIEbxUQhMEOHphNkVeE414EchycO4SfoKAGR6ZJ2JWSOB7k3aYVtbiSSZCENBCkeeJqWFZJ4zzyHL8qAkC8g2TJyI0y/QaMRuhYdSoUZ7zHDJkSHBB0JCRkaFWWuOIESNMqii0aUdtIAijwlhzLm01Lzgt+Iaf732dOnU8tmEEoap52223mdpFoQkChAth6WygDYK1bdvWHI3CTxC07ygItJWJiRAEbfUotuaTgA+DtPOjJggasHRaS69R8+sIAi2yE7NyBOHPP//UMldp65iEroUEbl5t0VCYmIqIwhRm+XN1FIT77rvP1C4KP0HQZkM0aMufNdH2EwRMDVcUaBmGcUwKIgidOnXypNd2fy4qKvLY+dFWEEpKStT0GhEZKgywz6mSb+UIQiI8FatjkFUNm7sgzJ4921iUjbDxEMK80cJ6KgYRBM1TURMELF6Tdn60FYTi4mI1vcawglDuzk3GrkJAvx5Z2FATBK15rw2sISiotmOvtjGrJgja6P2WKAjaAGBYQdAetCDLn223btcAQdA2FtEiJCdLELBCVtr5UaunhgkTJqjpNSZcEBYvXkyS+CJsgOk8RO+NJbzV4LnFWcdREwSs+JPpMZAk64M+ltZlwNtH2sLTUOapBdtMpiDUqFHDUyeNmlceriVmbjR7yccff9zULooggoBulLyemsBi3YG0wwpCbak0tl+Xtho170Hch3io5XlqIpMsQUDzXtYH1OJEYtpSO1dJDKRrecIlWuapCQKC5so8tesJlCsIeIAltQFADejjYQ/+WOLhxclw1nHUBAFvfpke3QBZHzwQmshgmk/awkVa5qm5EydTEBBpV9ZJo7acHKPspaWlqr2kNuUZRBCwcEZeT22UHzeqtMN3tK3yUGDWSdpq1LqKAG5seZ7onkgkSxAQR0PWB343mpem7bljFkrmiYda27ZeEwR8puWpoVxBYHgMtIfXFrgptbe5bZ5YBCXTBiHWE9ggmYKgjXVogO+7TItgJNr0qi2CCIJtnMZEMOwOyMkSBD9oD68t8ZBq0AYANUHQ4kv4LRarkCCE2Q4eih5GELDXgkwbhNVRELSdmzSg6SjTQhBsZwQ0BBEERNmRtsli2IAzVSkIaDVoqzJtqYnhf//9R61atfLYaoKAxXPSzs9TcbMTBDhOyLRBaCsI6C9rA5W2gpCWluZJ68ewgjB37lxjERybiyAEeXg1VKUgIHRemEjOWMEoEVYQgrQ6mNVXEBCnUaYNQtvVebjg6OPJ9NpOzRr8Vjtq1GICaNAEAXW0dSLSsLkIQhDfew3aQxEkdN7VV1/tSR+ky2Abfl+jtkt1EEHQdr72C6FWrmMSw2OQLEGAmy9mFWKJKS2Z1o+YUUD/PJbwbZB5asSCox9++MGTvkuXLqq9JKYyZX3woGEAUeYJD0KZHn7yEpogYADvpJNO8qTXiFFtiUQIAt4y8hzhkah1wTQihLxM/+WXX3rOB7NDWmAcbLEmbeE9KcvB7I6086P2QGuCAE9FmRauwnDXl+dkSy14UBBBwHcp88QMoAZ8Lm35hVU9BAEzAtIuCLULicAlmq1GzHJInHbaaaqtDf0WN2krPe+8805zNApNEIIQYiaRCEHwW5VpGw/hwQcfNCmimDhxomqrhTuzDXMXlpog+K3K1IQrDIIIQlhwWdVDEDRPxSCEuklo8+Ya8fbQvsQwNxua97bLn7V9GcIKQlhPRVtBCLtzk+3y5x122EHdIs028nBYaoKgeSomIqZiShAqwJQgxDMlCJXLlCAYYm16RRFEEGxjLPjx559/NjlFYbvXA6h5ZNruiORHeI1JnH766R47LYxYsgQBzkZad8lWDP0GABMRQk170NBv12wrm1pwGL+Vidj9uTIBQdCeI1t36CAoVxAQuwBrwcujVrkggoARfbwpK0r4gEtgfYNmK4kYkQgMKs8JN7usO7y+tDw0IliozBMuxdJOWxacLEFAKHIIp6wnPpP11IipXZkWYzfwVpRlwdlJpkccDJkeLTtp98gjjzheexIYgJS2GrELl6xPECKqt6wnzlOWg3sJnoU2wFoImWevXr3M0SggCLg/ZVloVcv0WksZ9ZF2oFbPcgXBllp48yCCUNVAk1TWU+Ozzz5rUpQPLW6D7VRmsgTBj7axCxCIRUuvMWwY9jD466+/POWEJRZwhYEWXyJIdCPNXwJLtyX8VlBiLYZEpQkCou5IbC6C4OepqBFvKhv4bQcfxjEpCMMKQv/+/U2qshHEVyTMRi1hEcRXxJYHHnigyb1i0GIqBnHb1jZq0ULS+Ym21qpOCQIjJQhepgShfKYEoQxqsQvg141RbGlru4IyWYD3H9yCZT012goCoK3ft521CRJ8Q6M2WBdEELRBWg1BogZp3RDNzTisp6KGRAhCWBdrxPeUeWIdhC00QdD8T2bOnOmxA2fNmmUsoogTBEwhVZRXXnml87aIJTyh4FknbTFdIm01agoGkcG0lGZvQy3PlStXOg5Dsp7aNuuaIGAthCwH5661jrAzsbTV+Pnnn3vS+rFly5aeumNXIglNELbddlsnWKdMD+9JrV6SCIsm08JNWAtai0FWmR5xMGR6zO5IOz9qA40agggCHkpZJy3gC667rA9m5bTZJThVSVvcC7Ic7G4l7fzy1AQBnp8yPb4jaQfic2nLjAqCKadC0FYmYkpL870/9dRTPbYajz32WJMiCuSnBQ+xZZD9DjSfAU0Qwi7TDkvbRViaIKAFp22vbzvl6te81x4gjZqXZpBWh+3UWxBB0GI/ausj/IhpUwltAPAmJXArXljSDoT3poQmCJXAyhEELcgqHH40Bdfm4jVq8Q8hCFrQFVsG2am5Q4cOnvSaIFR1CDXb5r2fIGgrKG33j9CCrCJYThjHpCAPL9YN2CBsnlqcAY0I3qP5S6AFLW218Oh+QVY134ZqLQhakNUgOzdpDBJk1ZaayPhBc86pjoLw008/mZqUDT9B2Bw8Ff2oBVnVEEQQtFaH7c5Nfp6KV111lcdWEwRtihAis9kJAgYKkUUs4b6rCYJtl0F7eNHfDyMIWjfED5oXHBxCJKq6y2DrM6BFYYIgIAaihG0LwU8QMJ+u2UvecccdJlUUQTbktW0hBOmGYJWqRJCt3LQuw+WXX+6x02YE/OqpdRm0VkclMLggIAgEmoWxxOg5vN5iiUE1TRCwRFTaajz55JM95cC7ShMEKLOWhyQGOW2BAR6ZXgu6ggAp0i5RlOcNDhgwwHOdNGL7cZkWggAXXGmL7c9l2RiAlOn9BAEDczK9Rs0lGG9zzVajNpWp3Z+aGIJanprIaIKAN7dMC2c0bVXmtdde67HVZgTQZZB2cJrDzt0SnTt39tjiObCpJ6jFJmUGFwTE50dUmFjijYILEUvcaPhyJLDoR9pqRERdWQ4Gq7STxqi8lodkkIhDeHPK9Jq7J0aApV0iiJtF22EKn8nrpFF7a+OmQAANadu7d29P+dh/U6bXBOG///5zprpkeo3aCwOCotlqhL+HBGax5PlowUBwH2Ew3CZPTRAQiUimnT59uiNAEhi4lbZafEy/c9fW2mh5YiZH1hOen9IO9An1FlwQ4I8P81gG6ZvbIkhoMgxqbunAg+YT5abSqYU319yMNUGoamgbymjEW9L2BaEJQlg/hEQAYijrqYVlA7S1OszggqBtB695KoZFkCCr2qKOLQ0YP7Htm4el5qlou3NTVUNzdtIIQcCb0gaaIIT1VEwEKjXIqrErFylBqBqkBMEOKUGIr2eVCII2Hx0WQVxtMfW3NUALBpsIajMXtrs/VzVeffVVTz01QhBsPR23SkHAXKkNsQ8jNq+MpbasF280RJqR6TG1IoEgp9IOc9SyHLjUwuGJqxtHTGXK9BqxhlwCAUIQ/FSzr2xiSs0GmLqSaTFSjS9cXhONsJfXSCNGsN955x1P+gceeMBTPsaOpB3GFaQdYg9og4UasCRapkd8TQm4rGNGQtpiEZgEpuhkPbXoWRhQhauvzBOzMRK2goBBdCwsk3kmglrw1EoVBIZm4CEEwQZLlixRpzY0V1tM50k7v+aotoeCLbUvEc5OtvEQwtJ2FaGfb4M2Aq7B1rMO7uUQbgnNS1NzIsLWctIOxGi7DRCoQ6bFrIAERtk1l3U87Dbwi26kETMsEraCAOHC9mnSNhHUonVXa0EIsvxZi6mYLE/FIMufwzJZOzdhcZNMrzGIp6LmM4AFMdIOC5sQkMQGtsufIQja+oiq9FT0E4QwOzcFoRZTMSUIAZkShHimBMHLlCBEoRl4aCsIgPbwav0+TRD8ugxhHl6/HXzC7LYThLaCoAW1SIQggFi+LaF1GbSViX7BN8J0GbTdi6q6y6DNsGg7IiVTELQugzbDAt8VDVq8DmbZgnDmmWc6g0SxhCDAM7A8YlspbFgi88R6AGmLmQtZDt5I0g55aoOKGqHgMs+7777bkyfUX7vZsFGLTI/ZFGkHgZJ2GPTRtk/XBAGDrLJOCD4q04YVBIizrOf111/vjDfI8rGBirTFoKK0w4CktIOPvu2gIgajZXp4RErgQbv//vs9tpiJkoBIyXp269bNcz0wvtWxY0dPntoLC4v3pB2uh0SiBAGewLJ8bWYNU/XSDgPm8nqA+FzaXnPNNWULgnbBtWnHsNRuAq05GoTajIKfT7tGXFwJBLWQdn4LprTWkbYyUXv4NWKaTGvea0DgEZner8WlBTPRllRrb0kECaluQIRiWU8/2k472iIRggDh0mJW2AL3jJav9nIpN4SaFvIrWYIQxDFJo7YQCVM1mi2IBwMjxBFqYx14KGJtQKyKlMDIPfpo0lZzoEI/GmHLYynTgXBK0jZ/0YDpQJkeU7MSWIcB11ZZviYIaJ1Ju0Q4pIUFmtKynvJagBBsdCUqE4kShDB7PVRqTMWtRRC23XZbGjp0qLN4KUJtQQl8FmJtQAx0SmDdAaZdpa1tnhrxNtMWi2kIW08sspGwzbOqYXs9QdvraYstXhC0ZjN2WtZsw1AThIyMDNXWltp28NroPQg/hMrepDOFrROVvQAtrCDAPVvLVxv4jRMEKJsk4sshAkwsMdjH5nHEAJqW3pboR8tyEKhCloM3OUahtTwkMegj80QfXtohP0y/2Y6Mp7DlAv1t21YPWlHy/kLcAkQgl/eYLTFzIe95P0HAC0yWrxErgbWyENRI2k6ZMiUqCGjuSCLcGdaNxxIPJZvHEcFMtPS2xACgTTmYDUCcAi0PSbiryjzh2yDtsC4dqq41obZEbGDO5ht3UmYmTc7OpikxnGo4zXC64YwY/mU403CW4WyHWTQnhnPBrCyaZzjfcAFzUV4eLf3rL6c+1QXt2rVzZp1sgNkheX9hHAqiIO8xW2J7N3nP+wkCZgVk+RoxRqSVhXUo0pafuaggmHLigEEjHCqP2oBVEGh+CBohCOjz2kDzX9eCrMIxaUsXhJXcr84Z/ht91bUrPc8if2fNmnQ7t4ru2mVnupd5P/NB5sPc0nuU+TjzyZ3/R08zn2V2Y77A9j2YL/9vJ3qV+TrzTebbzHd32ok+YH640470MfMTZi9mb+YX/JB8w/x2xx3oe2ZfZn/mD9xNG7jP3jSS7528++6jOcOGVbk4ICo3BmRtoD28YJiBSq2/7ycImNqWthqxc7QGzBAp9mULAubicag8hh1tDiIIWqQZDZogaJ6KGKzbUgVhNneDvu/Rgx456ki6Zvvt6Cq+Btczu/DDeDs/wHfyA3sP8z7mA8yH+MF9lPk480l+aJ9mPsvsxnyB0/RgvrzD9vQq83Xmm8y3me9uvz19wPyQy/iY+QmzF/Nz5hf85vma+c1229J3zD7MfswBzB+4Lj8a/sxMa9+eFqSlmdonH3hhYDbFBonYDj4RQVYr7Klo7OJgKwjJbCGEEQQ0CSXgYr2lCcL8OXOo1xNP0A116tAlfN5XM2/kt/wtu+5CXXbZhW5n3sm8m1sF9zEfYD7EfIRbBo8xn2A+xfbPMJ9jdmeidfAi8xVuEbzGfIP5FvMd5ntO62An+ohFpSfzU+ZnTLQQvvRrITB/ZA5kDmKhGbztNjSI6/kLlzHtk0/MmSQX2OX5/fffN3+VjUQIQiLCsLdu3dqkiAdaDop9ShDgurulCAIm0QZ++ind0KQJXcDnewW/ta9jEbiBeROzOgvCEG5p/AJyvcHpn3hdcxMNbPdv22VIhCDgHpR5gmE2avHbTRsDi4p95QgC3ImxTqCixCwDvAhjCQcTWU5YQYArtSwbsfEwS2IbPae6Aq2Cpy+5hM7l87xk223pql13pWuYm5sg/AryOQznfBcpsQkSCTyQtvdXWEFAtGx5L2K3MPkcgLZbuWHHLZlW2/YdwOfSttyt3GwFISxtXZfDCoIf4RZc2V5ryUQxf5k37NeWzuZz6cQP9hUsBJuzIPzGHMbnknXKKc6IeHVEWEHQgtbirW0LTRC00O5BEOeHYD6LQ1UKguapmChBgGPS5ioIWXydLqlTm87h87h0t13pMuaWIAjDt9uWfuNzmsNv0uqIsIKQrO3ggyAlCIabqyAUZGTQRbVrOy2DS2rstkUJwu/4yeeV1+lS+s+cb3XCVikIWCGHQ4mmJgjYBluztXUxfuutt9T0GjdHQZg9cyZd2bo1ncn1v5jFoCMLwZYmCL/zuY2qU4tWWC77TiZwv2j3kjYjoCGsIGg7dHfq1MkcrRjKFQRslYUothVh9+7dCWv4kXUsb7nlFo8tFkwhsGcssThJ2mH9/apVq0ztosDFlenhcyDL9uPmJgjruF/9CN8QJ3PdL6xRgy5iEdgSBeGP7bdzRGGOst9iIoD7CxsESeAzeX9h4195fyIOBaaxbRBWEIYMGeIpH0FrJfAClXUHtSXV5QpCWGgBUbFoSUKbdgwS2h3zxzJ9EG5ugtD7lVfoMK73qcwzmGcx0W3owDyPiSnHi5jwQejEvIIJp6RrmPyN0w3Mm5i3MG9j3sG8i3kP837mQ8xHmI8xH2c+yXyG+RzzeWYP5kvMV5ivMd9gvsN8l/k+80Pmx8xPmL2YXzC/ZH7N/JYJxyQrQcBPtp+stCATAbj54qGW0GJBIKRbGIQVBFtozk6gNvuQUEFIRExFP2g7NQfh5iQIcLXucfvt9Bi3EJ6+/HJ6hvnc5ZdRN2Z35vOXXUY9mC8yX2a+clkneo35OvNN5lvcrHyb+S7zPeYHzI+YHzN7Mj9lfsb8nPvuvZlfMr9ifnPppfQd83tmX2Y/5gDmD8yfmD8zB156CQ1mDmEOZf7K/O2SS2g48/dLOtKfnM8fF15A/bkVM4Df/raCUHDtNebsEws/T0XbmIpBkCxBqPDyZ/NZpSElCIlBZa/hTzYwQDjmmmuoL193G0H4g+1yjj3WcbpKNFKCkOAuAx40ZB1LbV8GbM4h7Q499FBztHyEFQT4IdhGCk4hPGaPGEH9dtyRfuSug40gZLVtQ+uVoC2VDTzk6B5IJEIQECBW5pkIQcBO3LIcsNwuAyIG2VDbqx7RZ6QddhBGcMj27dvHUdu96JtvvvHYIRirLTRBgJOHzFPj6aef7myRtrl7Km5OWLV0KQ1p2YIG8PdkIwiZbfal9atXm9SJAwK5ai8sW0HgB8qJMyCfBY0I+Cvz9BMETMFredjw66+/Vu/7WbNmmdyjiBMEhqeCGrVIROgGSDvMyWoul4mAJgiYubAB9vNv2LDhFrGWYXMBfA9/O+kka0HIatOGNiShheAHW0GAV2WYbQI0QYDI+IRMt2Ljxo1NTuWjQoKg7cuAMNXSDk5EaDkkA5ogaDEVNSC+QoOtKEBKdYAjCO3aWQtC9lFH0UZ+MKoKQQQBW9FJW1v6CYJP7AIrYpmzLRIqCHvssYd1fP6wCCMIW3I8hOqKpXPn0s916tAP25QvCM4swzXJmWXwQxBB8FlFaEU/QfBZqmxFv3gIGiokCJgRkNDcjLGCEFNkycDZZ5/tKf+JJ54wR8tGShCSC7znx3XpYj3LAEGY8uyzbuIqgrYQSXvzhhWEAw44wOQUD8Q00OxtGGTBVIUE4eGHH44LZQ1iIKZmzZpxhOMG/LqlbSKIeAyyntiWW9ppATRTgpAcQAgW8/0w+vrO1Ie/Hys/hG23cboM84cOdTNJMHB/aONen332mef+1qJvhRUEvM3lPYtWtpYnBsJlnTQiLJwGuAUoZQUXBEQolpte4A2NByuWmMZDf0raJoLa9KZfPSUSJQjrN250Zi5GjxhBPfkN89T999GDt9xCd3Hz99ZOneiWSy6hOy+/nB664Qbqyp8/fsvNDp+82eVTzGeYzxp2Y3a/+SZ6nvnCTTdRD+ZLzJeZrzBfZb7GfJ35BvMt5jvMd2+6kd5jvs/8kPnRjTfSx8yezE+ZvZifMXszv2B+xfyG+e2NN9B3zD7Mvsz+XM8BzB+ZPzEHMgcxBzOHMH9h/nrD9TSMOZz5O/NP5ojrr6fRXPfhF11EfWvVcjwV+7MY2HgqDmfbtP3a0lrLbfDDAl3PXr16mb+igEjI+1t7uYQVBAzEy3sW3FYJOAx/CVknjX5RpI888khPOXvuuWdwQdCoORFhzYHtPozJoqaWuGiVJQjYselXfps9fM89dA6/QQ5u1Iia7LIL1ec3XT0uvyGzKbMZswWzJbMVc19mG+Z+zAOYBzEPYcI9+QjmkcxjmMcyT2CeyMQ6Brgun87EAifNdbkj81KmdF1GXMUbmZrr8n1MP9flZ5kVcV3uzYTr8nfMIGsZEBNhQle7saDKAB4SbJhaUYQVhCDEVH0Y+Ax+Vo4gaEFW/TwVq5KJCrIK548XuJ/b7tBDqe5OO1FNLqseq32TnXemFiyKrXevQW322J322313OoB5IPMg5iHMw5hHMI9km6OZx7L9ccwTmCcyT2aewjy9xm50BvMs5tm77UYdmOcxL2BuiYubsPR5VN26tJyvbbIQJMiqhmQKgrYdfBCUG2SVoRlYcWsVhBXclO3RrRu1bdyYanD+tbbfnhrzw9tsjz2oBbMlsxVzXxaDlCAEEITttnXCqE17+21zpZMDbNwbRhDgVp4sQfjyyy9NqRWDz0BlShAqKgiZGRl0Kr9RduZ8a/PD0Jgf/CbMpsyUIIQThKF8TXM6Xkwbkrxu45BDDnHWGIRBGJ+BIOzTp48psWKAM56Sb1QQ4G1oQy1SSxBBePHFF9V8bQh3aPg3yDwRHUna3nDDDR67yhKEfvxlNORz243zbMD1acRMCUIlCML229FgvqZjjz+OViXJhyUWmZmZTlxC7FgWS219AwaMpR3c4DHdLu87ePfK+9OWiHGA+1PmiSlKWb5GPAcaxo4dq5UVFQRjVy7wQMM8lkEEQQtAEQRajIUxY8aYo1FgXbu0qwxBGNC/P+3FD8+efCM32HPPlCBUkiBgX4aB/B2N5Xtpxdy55monHx07dvTcN3gJSuTl5Xns/IgIy2Hg09+3Yv369U0u5SPOD8F8Vi607eCDCAKUqKLAFAr29Zd5/vLLL8YiCi2mYlhBQCTo+lz+HnwT199rT6rPD3tKEMILAnZtAnNuvonWLF9urnbV4LLLLvPcN7feeqs5GoUWU9GPWNlYUVSZp6L5rFxsrYKAKcXjjzqadt5mG6rHYlBvzz1SghBSELCWARzWvDlNC/HQVCZSgmBgPisXmiBosQuSKQjjlA09evTo4bHTXENtBeH1116jHTmPOvyA12UxSAlCxQShD3cN4KkIDm7ShAqeeIJWKPH9qgoXX3yx577Rohn7BVnVWJWCgNWXtogTBIwN2BCCgACTsfzoo49MllEEEQQMcMhysI5bwk8QMHAi02v11KaUbAQBod/3bdGCavCNXZsf8Dr8cNdl1uMHuT6zIbMRszGzCbMpszmzBbMlE34I+zLb8oO9P/MA5oHMg5mHMg9nHsEP+lHMY/gBP5Z5PLMd8yTmyczT+EE/nXkmsz0/6Ocwz2Wez7yQH/SLmZcwOzEv54f9SubVzGv5Qb+eeSPzZuat/LDfxryDeRc/6Pcy72c+yHyYH/hHmY8zn+IH/Rnmc8zuzB78wL/IfIUf8teYbzDfYr7DfI+vy4fMj/iB78n8lPkZ83MmNnv9ir+jCPvwZ7+dfBIVv/46LZ8/31zh6gFM5SEOh7xvsLOYvL+ef/55jx3S7rnnnp77UxOE/Px8T56fKHta+glChw4dPOVrRPBVW8QJAsNTqEZttaOGIIKAUVhpd9BBB5mjUfgJgkYtboMGG0F46403nDx33X572m2HHajGDtvT7sw9+O89mTWZezP3YcIXoTazLrMesz6z4fbbUSNmE344mjGbM1swWzH3ZbZl7r/dtnTgdtvQwfwGPYS7JYcxj2AexTyaedw23OVhnsiUXortmdioBdu4nc+8kBnxUryMeSUTG75ey+zMjA2yejvzTubdzHuZMsjqE8ynmPBSjA2y+jLzVebrzDeZmqfip0xsB9+PWwLDzjmH8rp3p3kZGbTeXNfqBgRZ1R5KfCbvL78gq9rDqwnC22+/7bFD3AMJP0H44YcfjEXlodoIgm1MxSCCUJnLnwcPGkQfcevi888+o8979Ypj7xh+Ifil4VeGX8fwG8NvDb8z/N6wj2Ffw37M/jEcwPyB+aPDT+kn5s/MgeCnn9Ig5mDDoYa/MH9lDmP+Zvi74R/MP5kjmCOZo5ijDccw0wzHMdOZGcxMZhYzm5nDzP30E8qLsGdPGv/ttzSXBWD54sXVcrMVibAxFf08FTVBsI2p6CcIYT0VNaQEgWE7hpDClo+UIFRAEDB6b4MggvD444977LBrlEQQQbAVrlQItRQigKcidvyS0AQBu4Zr0DwVNUHQYiw0bdrUHI2iygQBK70kEQaND8Xxpptucjy6YolQzxJBBAF9NFk2dniSCCIInTt39tRT4/Dhw52RWNstuFLYcoHZhP79+5u/otAEAQ++vJcw24XWprTVBAFjAPKex5SnRFhBWL16taeeID6XiBME81kc4PqIQ+VRm98PIgi2CCIIQbi5bwefQmKhCUIQaoJgi7CCUFpa6kkLai/xcgUBvtk4VB5PPvlkkyKKzUkQNret3FJILjZnQajUjVpst4Ovak/FsEwJQgplISUIBrYthJNOOsmkiAKxAjRB+P33341FcMB9OCUIKSQbYQXh25C7V2uxCzTHPQ1+XQZtw6U4QVi3bh1JasFLEfcND1AsIRwyLbz7NEHANtbS1pYIOKkJAsYAZJ00wk6mBXGsugoCgm78MXgw/cw3wJDvv9/EocxfDH9lDjP8jTnc8HfmH8w/DUcYjmSOYo7+/jsaYziWmfady3HMdGYGM5OZxcw2zDXMY+YbFjALmUXMYmaJYSlzPHOC4UTmJOZk5hTDqcxpzOmGMwxnxnAWczZzDnOu4bwYzjdcwPybuVBwEXMxfv/oQ1qu7D5eHjRB2GabbTz3F4jPpW3v3r3V+9mGa9euVWcuEPhV2mLaUwItAa2e2BVapueyooIAzytJBCrlQ3G85557nIcnlhgxlWmxY4wWHLJOnToeW1v65YkLLuuksW/fvp60IC4QjldXdL32WifW4vHbbUvt+PxPYp7CPI15BvOsbbehc5jnMs9nXsg35cXMS5idtvk/uoJ5FfMaJn/jZW4HX1ZMxbK2g3+bCW9Fv5iK2BIerssIsurEVmT2Y/7A/JGJ1Y6DmEOYvzARTxFh1BCGHZGXRzBHMkczxzLTmOnMDGYWM5uZw8xl5hsWGhYzi5iTW7agVRWYXtYEAUuS5f2FKOO4R6UtXmLa/WxL3J82eSIiugQedFlPsF27dp70TZs2jQoCw1Ooxu7du5uiohg9erRqmyz++eefpiZlA9MtWvrqLgg5aWl04s7/o1N32rFS1jLczryTeTfneR/zAeZDzEf4BfAY84kKr2XYnnoyP2V+xuzN/JJbZd8wv91+O/qe2ZfpRF1m/sgcyBzErc4hLHa/IHQaEyHUfmf+wRzBHMkczcI3hsUujTmOmc7MZGYxc5i5zDxmPrMQZPEr3paJn/wdTz1gf1pTwe9YEwQ/P4QWLVp4bJNFLW6DH+DzoOQRXBBsd25KJrXlzxr8hKu6CwLw5PWd6Wiua/vdt+CISczYqMvYqGUEcyRzNIvKGBaPNOY4Zjozk5nFzGHmMvOY+cxCkEWkCMLA12zK0UfTamVzU1togpCInZvCUluV6YdKC7KaEoSqwRy+oTu2bk3tuL5n16iREgRmmYLA1wmcdm4HWrs43B6jKUEog1o/BXHfNNtkceDAgaYmZQNdCy09uDlsB587bhx1qFuXTuL6pgTBXxAK+PqAsx95pFICtWJZtLxf4OasIVlBVjVed911phblAys7lTyigoC5UhsWFBSYLKOYP3++xw6LN3bjm5WzLpcXXnihJz32ZpR2CGCJxSfSdq5lDL6///7bkxbEpheYJt0ckJ+ZSZe3aeNs1tKBH9CUIEQFAQOKYGmzprS4gsuD33nnHbrqqqvieNRRR3nuRcQ9kHZXXnml9T0P3x15HyImgmarEcFgtfSyTn7UliUwo4JgrkelwtZnQFswpQWxRMRlTMNt7VjAAtzthhvoDH6QzuDrcgE/lFuzIGCGATMNeVy/GXfcQWvmzzNXKjjOOeccz32XCN51112mxChmz56t2mrUArd+/vnnqm0AJk4Q/DwVNT755JMmVRTajtJQNfg3pOBi3O+/08PndKDz+GE+i6/PBdv8H13KD+gV/LBv6YIwjs8VU46Yeszl+k669BJamp1trkzFocVUTARvvvlmU2IU8A3QbDVqnopaIJeATAnCloDCjAz68NFH6bbDD6NLa9TYtLcjIiZdzozs6yijJXVhSh+EB5nSB+FpJnwQujFfYL7IjPVBeIuJaEnvMT9gfsTsyUTEpM+YXzLhg/ANEz4IiKcIH4T+TPgg/MRECHbsyRDxQ4APAjZ7hQ/Cn0z4IIxijmHCDyF9u+0ob//9aPojj9BSbk1WFlKCYGDyrDQEEQQERJVAyHPNdsGCBcYiBYkVK1dSaW4uDenViz574gl67rzzqOsJx9OTJ7ajp5nPMp9r1466M19g9mC+zHyF+RrzDeabzHeY77Y7gd5nfsj8mPnJCSfQp8zPOL/ezC+YXzG/ZX53/PHUh9mX2Z85gPkj82fmIOYQ5tDjj6NfmMOYw5m/M/9kjmSOOu44GnPcsZRmmM7MYGYys5k5zNxjjqH800+jSffdR7PfeZv+SUujtQkI2a4FWU0Ew3YZNHfo7777TrUNwKggoP9hQ/TtbRBEEM4//3xPOdgtB6OmscRAyrJly0wJUWDBlEyvEW7TEnANxbZYqO+WCDizlkWMyGif21JLH/kMPyuTiQ7DhvsDnrjyvsOej9p9Kwm3ZQiKTK9NRWL9j7w/EbhV2oEXXXSRJ08MIMr02m5lfsRAvszzmmuuiQoCQ00oiciyNggiCBq1iEl+sP3CtLnjxYsX0y7cny4pKTGfpLC1AiHMtCCr2rSjRqzzwf0kEeRBlYTIYHZM4vLLL1ftbYmZQYm4xU0MNaFk2JiKttRiKvrhrLPOUvOQrKy9HVPYMhEkpqJGCALWM0hgmk+ztyEEQYvmpe2xGoTlLn9mqAklU4KQwpaKlCBUQBC6du1qkpeNJUuWOE1xLQ8bwhnEFraCcPTRR5sUUSC2HIQL68a3dqxatYoKhw1zwq5n9+tHi+ZUzqary7h5OmXAAJrA+f71yy+0ppo6gaHr+SnXUUKLkOzHKVOmmFRRXHrppaqtLSdOnGhyiiLsbIh2v5crCNg4AgMisdS2xtaAwb/DDz/ck96W6CPZQhMEeJLJPDF4CQWPJXbQgVBoyr41oXjUKOpx6KH0AL+RMPX4MLM7f/8j3nsv1GBeYc+e9D23wDD1+DUT045DDjyQZoUIlJMooAXZrVs3zz2CSMzyXtKIyEYzZ840uUVx3333qfY2xOrJ6dOnm5yieOCBBzy22s7oWKcj7UDtfi9XEDB6jwUbsQziKSjTBmGQcjRBwDZWMk/4NqBZF0sIh63r85aK8enj6IE9dnd2bnp0p50cx6Qn/8c/+W/4I/zx+mvGMhjyufkNXwSIwbc7bEff77A99dmef/Lf/bmMOZbL1pOFc88914m3Ie8RzG7Je8mPGnAva7a21KDlqbVksIhJ2oEayhUE2zgDVQ1NELDXgwT2kJR26NYgEtPWijVr19JLJ7ZznJM0T8Vntt2GutWoQXMCdqkW8Rvoy5p7OcFRNE9FBEgZdvhhtJa7KdUFEAR5f4DalgDVEb169fLUvW3btuZo+ShXELBnweYATRC0nZu05c81+Gbfmp2dJqSl0d381n6QH1o/12W0FH5TnMfKQjZ3LREx6Ut++DVBGLDdts5W8PNGjTQpqh5+gnCrsh18dYTmqVjh7eAZnswQ52BzQPv27T11DyIIW7M79KivvnTcl52IST6CgM1evw8wpgMMv/IKIwj6WoYB3H2A6/IEbuZWF6QEoRxBGDFihDGt3jj77LM9dQ8iCJh63Fox8ssvnN2fyxWETpeaFHb4je1tBGG8Ms1XVdgSBaFSuwwYNT3ssMPiiDnZygYGQ2Q52DJOAjELEAla2mpru20FAYNGyGNrHVgs/vMPuhMzCzuV3WUY+tRTJoUdMl54wVng5CsIfN3RZZj9228mRdUjiCAgjLm8D/2oucxj+bK0u+SSS8zRikETBARKluWUwbIFQaPtrspBoAVD0VyX4eykRYLWaCsIEW4OEZMSgZUsss8dcrCz2vGRXXbxCMKz229Hz7BYTMvOMSnsML+oiD7nfL5gsdEEAasdh7bZl1YvXWpSVD2CCAKmqzVbjQiZLmG72WsQaIIQkMEFwdZTMQiStR28nyBsDjEVE4mcIYPpbr4G9/O12BR1eeed6KnttnWWQg+ydEaTSOfvFa0EJ/w6dxEw7dgX5L+xBHr6jz8ay+qBIIJQWFio2mpENCMJ2+3ggyAlCGUwJQjBkN6vHz3Jbyj4IsAxCXszPMlv+EFPPE7rfeatywPiGWZ060Zf7bqrsy8DHJOwL8OP9evTJOUhqWqkBKEaCwK8HDVg63Zpq/Huu+82KaJICULZWDhnDo354gsa9OKL9Mf779P0Sgo8sqCggIo+/JCye7xAEz7/nP796y9zpHrhvPPOU+8PLZrxrFmzVFuNmiC8/fbbHrtGjRqZoxXDu+++68kzIKOC8Prrr5MNn3nmGccVM5boD9kCi0dkeoiMLAdBU6Td7bff7gRa5erGEQou048ZM8aUGEVKEFIoCxiwxsCevJfwwpL3YpDFRZogoIUhy3nppZc85fgRAYQkioqKPHk++uijap3Qgpa2zKggmDzLBQQB5rE89NBDzdHyoUWw1UKoZWdne+z8OG7cOJOqbJQlCH9V07dWCskDFjch9oFE2Ka4JggasA5CS68RXQ4bwOlOS6/FWIibdjSflQtNELTt4P1wxhlneNLbxlT0Y2Vs1LI1uy+n4AJRjN7nrpKE7fJnP9oKQtiYihoqdTt4DVuiIGDN+Z133umoblD+9NNPJvfygXpqeUj+mIDRd7wRZDlY6mu7HwWaozI9NvmVwKIb7HMhbcNM6/rlqa3YswXyRFzC2PywshDrASRSglAGtD4Jmlq20MKdaYKQm5vrsfOj7c5NQeaObYmlpLbAMmstD8n69eubFJUHPNBaWZi5sYH2IsBO3hJr1qzx2IHaXHwQQLRlnt9//705Ghzr1693VrrKPAcNGmQsosDDJ+2C0FYQsAmSll5j//79Taqy4ScyCOgqEScIgwcPJknNx//rr792NrOIJUJKy7TY3g0BTCWwClGmf+qppzzpMcDC1Yrj9ttvT6effronfU6O12kGgSpkni+//LInzyDEG0SWjXh5shw/YlBUpteIQSNbYHBJK0vyjTfe8JzPjjvu6Nzs0nbePO9GJ2i1yHoiIKkEHjQE7JS2aJ3ZAAIl6wPBR0AQmSfiFEhbPAA2QD2bNWvmuSZYNi/zROtR2gWhrSBgHEueI7jrrrt68kQ8BFlPDFRKYDZEyxN1kun5OkcFgeEp1LYpri0rhqLbLhrSph01YucmTWQ0YOZCyyMMIVwSECPNViNEsrIBgdTKCkOE864q+A0ma/cSIgdLOwi0DfwEIRG0FQQ/+GzM6iG2krMFpjiVPMoWBNvlz9ruz1hfYDtQZysIQfLE9nBaHmGIt4eEJoZ+tO3aBAGiQGllhaFtczQR0LbwQ8tQmwXSQpPdcccd5mjZ2JwEAWuKtHwlE777cxhBwNs8EYJg2+pICULFWd0Ewc9PZGsQBO7XVx9BsI2Y5CcI2qYqGoIIgu0gWLIEwW/mQqO26i0sEiEIP//8s8k9+cD+GLI+EARtNWrHjh09thinsUEyBQEzJBVFEEEIEtnJ59yjgoDIw5J4o+EtH8uVK1eaLKPw6zIgfLRMrxGCIMtGepknYhcgAq1Mv27dOlOTKDRBwI0ly/EjBtxkek0QMjIy1PQa+/bt66m7LbEBCKbKJDRBwIpQrXyNiCEo02MXIK0Okn67XSG+hLTVxn4Q8Vra4SUk64PvDS0HaYvw5vJ84LIu7RABXMJPEHCPyTy1QT0sm5d2fsQMi6yTRq2eQQTh6quvtsoTwIyXrGfNmjWjgoAvVxKjkXjTx1Lbh1ETBAwq4qGW6TVi2lGWjVFP2zy1ro0mCMccc4ynHD+eeeaZnvSaIODG0tJrxDZfsu62RARsbfRfEwS8JbXyJbF7D/KV6RFnUquD5Mknn2xqEQUe/AMOOMBjq/lWfPTRRx47PJCyPqD2vWPGS54T1ghIO20/Dj9BgB+CzFObodlvv/08dn7ErIusk0bcnxJBBAEvMZnnkUceaXKKB1rvsp4s5FFBMHZxwBeOQ7FE7AIJTRCCUPNDSEtLU201ak1xTRDatWtnjpYPbeWbJghBoEV2siUG1rS5Y00QHnzwQXO0bKDF0bBhQ096Wx588MEmpyggCHXr1vXYaj4D2oMWhP369TM5RaHFGcDDK+EnCFqemuvyQQcdZI6WjyuuuMKTXmPr1q1NiiiCCIJGTJXbgssqWxBOO+00TwHaasdECEJYT0VNELQ3hR/QOpLpwwqC3/JaG+KtPWfOHJNTFJog2PoxoMmOXatkeltqQWwgCI0bN/bYorskoa34C0Js0iuhrfjThMtPELQpV81TUdsn1A+2Ozdpy5/DCkKFYyqaz+KQEoT49A8//LA5WjGEEQSs8tQEQVuye++995qjZQOCAK9Imd6W2hJ1CII2x60JwjvvvOOxC8IwgoC9CRChSNraCgK6RbYIKwgtW7ZU7W2I2QRbVGtBSE9PV201onyJ1157zWOHxSu20NZc2D5oftAcaYJQ6zJo9bQdaYcgoJ8p09tSa4pDEGrWrOmx1dY9YAxB2gWhrSD4rcaF67W01boMPXv29NjhrW0L223X/AQhjGgHibFQJYKAfe2xI1Qsn332WefGjuX111/vsfMjpltkek1V4bsu7fyIt4IsR9t0E9NkWnqN2lZbmEuX5Wj8/fffnXUCEhh9l7baXoAaMIaAlphMj5aUrOdFF13ksYNoSyDPUaNGeWzhHyCvhzYXjj6vTDt06FD14bUVBAxUyrKxlwdaLbKsu+66y2OLMRlphwFNaedHbH8o0+PlIuvpFzEJsT1kelvCT0YDni+lrskXBAwWSmh+CEE2e9UGP8PS1ikrSNdGozZIW9XQ3mhhu0sXXHCBJ0+NfpGytP6+rSD4UYsJgJkgaadFAMdaGWnnR21AFc5K0i5sCLUg0GaXmMkXBKiWhCYIidgOPggx7WmDIJ6KGh966CGTU/WB9lBoC5mCAJGIZJ4aDznkEJMiCviZNGnSxGMbRhAwa6MtydbEcHOJqRgE5XoqGrs4pAShfKQEwQ4pQYjHZikI2rw5lhBLBIldoMU61AQhyDxvIgRBGwTTEGQNu0ZNYKsa2gwLlgCHga0g+M2bI+6EtNVml+BlKe38iM1WJLR7XltFGEQQ4McgoU25ohmfLJQrCBjsk9QG5rDcVtphUE/a7bTTTo4bKebuY9m9e3dPegTfkHYY1LOFJgjw+pJ5atM/8O7CzS5tEWlGAoNosu44H5kWfgCau6tGzHzIPMMSA5ASWAug2WrEuIY8Jyz9lna9e/c2uZcPTRAwXiDL6dq1q6ccTCHvtddenvT4PqWtNlaBSN2yHAQZhTu4BAYLpS12WZLQBAGetGhNyPR4YUrA5V3aIdBpGODlJK8HZkg0lCsIDM2gwsSIvobjjz/eY6tNOwaBJgjdunUzR6PQogbBJdZvv3wJPBQyvTbHDYSZKgpLBKyRCOL5qXWXNJ+BIF5wmiBoA5VBButs6TdQGQaaIGB9g9/agWRA6y5BDDUkXRAwv43FFRKY3pC2iRAE241aMCVlux08FFemP+6448zRKBCnUHPfTRY1T8XMzEzVVqO2/BlTZ9JO81T0gyYImOKT0JY/h6WfaIeBnyCEifMYFpqLtZ+nYkoQGClB0O0lU4JQPlKCEJBBBAH98DDAoiWZJ4LBSmgPBfp9tpGHtcU4fgum/FbtJYO33XabqUUU2LtCs9WozZuHFYQOHTp40mvBTOD8Je3CMsi+IbaojoKATZBknTA7owHbxEtbZnBBwGIYLKmMJVRI2gURBER6wcNaHhG/EItSJPCmkXXCwJhMj7Db0g4PNAbhpK1GLdgmZkOkHVoimLKVZWlRfsMSLrSyHAiXBDwqpZ0fNVfwsIIAgZblYMpVXjvNYScscY1kOX7UBho1hBUEOEXJsjHGFQbYEkBeY6x1keWA2jQuM7ggaIN1WlM8iCDYEjMXmneZBr94CBJwB67sBxVz3NqNlYjoRomIwqQhrCBoCLu4KRG0jW4UVhC0t3mQ9RG2CDhIG1wQMEUooUW5SYQg7LbbbqFiKmKGQwLdBdsdpW2JlYnauITfZqJhmKxwZ4kQhLDLnxNBtCJtEFYQtIVdaMZXNrAhiyynDAYXBFtPxUQIAqYIwwiCtvwZkWNsd5S2JXwQtOhGYZY/+zHIzlFhsLUIgm0I+rCCkCxPRb+dm3xYOYKgLfCBICAsk4QWmsyWYQVB22EqEYKArk2yBEHbaSgR0B7esIIQZCFSsmi7G5QWDBZEE90G2pLqIMFMbFFhQUAgSxtCEOBbHkusT+As4ghBwEMhbbWNRaCsshz0w6WdnyBgoFGWA0GQeWoxAP0EAeXL9KintMMshbTDmESyBAFThPLcNWqDsYBmq1GLL+EnCFp6jdqsjXY9w1K7l0DNFmMIWl0lMT0q0yK4rbY+Ao5vMj26DDI9pkelnR+1gLsa/ARBu7+ZUUFA3HsbYgwBI5Sx1NaqI5ovgjNIW1w0aQsXZ1kOlFra+QnCtdde6ykHW8bJPLWH1E8QEClXpod7qbSDF5y0w6YimvdjIgQBdZfnrhEDmhIYUEX0Xc1eUgt6ogkCblb4Zmh5SGp5IuiKvJ5hiYFXWQ4eCAyGS1vECdDqKokNjmVaUBNeLAyT6TFjJdNiLE7a+dF27ww/QcDMmiyfxSwqCCZ9udA2/QxLLG6S0CIm+QmCFg9Bc0zS4CcIWjwE7S0ZJCxbIgTBltpiMURMQvhtzd6GmiAgYlKYLthhhx1mcqo8aANrEARtrwfbRVhw7LGFtqGMtqlKEB8M281z/QQBAiBRbsQkDYkQBNuYin6CYOupqMFPEDR/fltPRT9UpSBgTloimUFWbaktfw4LbddvCILt8meNYYOsautNNsvt4FOCEG+XEoR4pATBi5QgBCQGACXgTaXZao5JeCilXZCAqJgVkOm1JcTaFvVBbmAsdZbpk0VthgUI42Kt7SMAQYBwa/Y2TKYgYIcpCcSOlLYag9RTW5KNsQoJNOOlnR9txxDQLdLSa+Np5QrC888/72wyEUvMMmAktqKEsqK4WCKktSwHgy4yLYJiaoFGMRgjbXETSEAVZTnXXHON0x+T6TEQJG3RkpF2mDqTdp07d1aXwY4YMcKTHsE35PVAHApphzpqMQFsibECWU9s/YWdimRZaE3I9O3bt/fYaQFKMPqNXZqkLQYvZZ4akyUImM3AQKu8Jq+++qqn7ujvy/SYSZJp0RLQHNKw9FzmiR3QZHrEFZF2iM+gLZSDwMv0GrU1JCBaq9L28ssvL1sQtBsjbIQfLRqPRr8prTDQPCpBvNUkTj31VI+dtn7fb3WetoeCBm0uXvOoBMLssuTH5cuXm9yj4BvDY4cZljDQhE9jsgTBj1owlC+//FK11ahF5tYAIZZpMXugQVsrlCCWLQi2MRWDwNZTMUhMRVsEWf5su3OTFlPRz1NRA0LSyfR4m0pgk93KDrqCKWBtr4fqFlMxLIIIgu1GLRoT4anIzfhQOzcFZEoQUoKQEoRYpgTBwJQfB00QMLAWBrZ9yUR0GTT/8yCCgAFVCb+bzbbLgE1qZFq/bcKwv6O0DUstFoTW7wwbZNW2y4Dxk8pG2C6D7ZJsCII2UKlB6zJgdkaD5viXIAYXBIyY4mTKIy6iNgCIQRuMsJZHzBJo+YYhpiLl+QQRBHwm88SiH1n3Ll26qOs4NMCLTqaH56YsB9FwEMBT2mrEJjey7ljRKe0wWIa3nywLcQqkLeJLSLsghMDLOmF1nywHwiPTIpKyNtaBRXXSFoFgJDRBgCctWi2yfLzwZJ7whJXpNSJPLb1GzKzJshEwRrPF1nzSVqMWrxRLCDRbjZ07dw4uCEGo+QzYIisrS82zshlEEDQmoomrBYMFbSM7aUtr/aYdsaRc2moLphKxMlHbkwKh0TVbzWcAMx/SDjM8EpogYNpRmwmynXYMSzyAEnB512znz59vLMoGujsybZAVlOVOO4YRBL/lz7YIu0WaLcMKQhDHJFtobtt+28FrQDhvmT6IY5JtTMWwtI2piIU3mqut5hKshWXzE4QwjklhaeuYhOlR25mLIDEVNaQEgZkShJQgxCIlCAbmsziEiV2ALzFMlwEbWWj5VjZxY8B9WcI2ulEiFuNoeyjgxrCN96cJgjZzAWi+DVqX4f333/fYhaUmCIibqdlqzWbNX0KbDfFb3KTNBNnOhoSlFggXMxTSDt/7rFmzjEXZqFRBQN9NUnMJ1oiQYRgdjiUi3dpuWoEbXZYNLy2tLFvCq0/WSSM8JzFeIcvXVlBqeXbq1MmcRRTw1ps+fbonT9sxALzRZDnoC0IkbfLUBAGrHWVavJG0Eez33nvPY4tBRWmnETdw06ZNPfXXxio0QSgtLfWkxcpCTO/KOmnbrsH7UtoNHDjQY4cZATiqSdsbbrjBU75GLO2XeQYhWiKybG2ZNq7nb7/95rHVXmKVKggYIZVEZfhQucTDg4dA0hYI3KqVr5VlS0T51eokidkAuIbKsrVzh6eilocEHlL4DMg8g0Q3kmVglB1vc5mnFlNREwRQpgVt7WzvBWyNBzGU9e/YsaPHVhMEQKbFbBW2g7epEz6TdqC0AzU7xFSU5WvUuiFBGLae8J6UqFRBYHgysyXcfMMgEQumECDFBnD4sY0JYLuCEoJQq1YtT/owAVHxUGhvc6wbkPAThGQQgqA5O2n9fT9BkOAbNSFu2xrDhlBLFrV9NauNICB6TBhouz+HZdjlzxpt/fkhCNqCFDRdKwo/T0UtyGpVCwKmzyS0vrmtICAKE/z8ZfpEMEyQ1WRSW/5cbQQBy3rDQPPWC8tECIK2G5QGP0HQYizYAjMCWp5aq0OLVZgsYrBOEwTNHdrW+xGCELbPbsvNRRC0LsOnn37qsasSQfDbzswWiegyJEIQgnQZtIc3zKYqWJGp1VNrdbz11lseu2QRfWNtilBz+IEHng0gCGECuQTh5iIIWBYtgSXy0i7IXg9xgoD534oSo55hgOkfLV9JLE7SdlnCqLi0xX6R8CKMpeYdFkQQ0IeXeV533XUmpyj8BKF58+ae9LaEOzJGxeV54pykrfbwYJZCpg1CeBXKPBEQVdphsE1bTo6BRmlrO52GMQT02WV6baEcRu+lnRaw14+JEATEFZF1smVubq4agQpdKPm9a3ZYwCbtQHwfEnGCYD6r1sDorjZYBycmCQSgkHaaz0AQQdCIiyvhJwhhqU3jalNvGrVt7IJA23rMz7chWUBQD1knLVJWkOCliRCEfv36mVQVg89OzaGI6V2JzU4Qli5dqm67pkXuSdbOTZqnYiIEwc9T0Xa/SM1TMQgSsXNTWITxVPRjIgQBC/0qCrSOErH8udJiKlYlUoKQEoRYpASh4tzqBEHzrNPiDCBPbUcmW/rNsFR2MJPqKAhhuyFhAa9EWacHH3zQHI3CbxWhRm1+XwP69lp6jdVRELRgxXGCcN9991F1IrYKlwgiCIjajPn4WGpOJxgAQ0wAaYvRWVmORjz4su6YTkPUJM2+okyEIGCXIczwyPoXFBQYiyg0QcAgq0yLB1ILEoKYBtLWNnIwdsGCr4pMj6jPsk7YDk3aacIBbz+8NOT3PnHiRFNq2cA6HZkWG/loTm6aICBug6ynFnwoUYKAwXBZ/r333hsVBIaasKqo7TQURBDC4sILL/SUU5VMhCCsWrVK3VoP60gkgqx21EawtYVy2qyPBkw7YlWqTB+G8JewDWITBNrDqwmCFl8CLxeJRAmCD6uvIGgxFZMpCLbLn5PFRAhCIpY/by6ein7Ln8MALRlMLcuyNEGo9jEVGZpBlTElCPFMCUJKEJLAzUsQ0MTDFyltw6wR8IO2205VU3Pk0faP0OjXZdCWJWsj7VUpCIC2U3RYTpkyxeReOQgiCBgjk3Zwz5aoVoIAxxO8KRNNbXBIEwQs8EFQDJkeQTVsgMEurCewoRYUVCNiJMj6+NF2ehPemDItXH+1ACkYbJO22oCoJggYUMXOVTI9Yg9IJEsQ0AqU3wUEHx6Isp4a8ZaV5WBrOWmHADi2sQptEUQQhg4d6qmTFjQliCBAUGSeftsH4nNp26FDh7IFQYtgmwhoeyYmYl8GbKUmywnLIOs4bAcqNd+GINCiG2mCEATJEoTs7GyPHWgbfUtb4JOIqFYaggiCLYIIgiYoaFVqttoSdS6rbEHQNjxNBLTlz4kQBG2jlrAM8vDa7v4c1iUYU2Ayz81FEOC/L+38VlBq0LbGw1RkMlDVgoCw+hJa+DhQm14tVxCGDx9uTBOLlCDEMyUI8XZ+QVY1pAQhHhXeDp7hSbSlCYIWzTgsgzxoZ511lpqH5OGHH25SVAzaHDdWS4aB9qD5EVuQSyD2pLTTBMHPA1DzbdCg1VNbgJYotGjRwlO+bRQmP2hjbBq1lbdYxKTZalvOVUgQMLCH8OoVJaaQJGwFAWqJgTUtXxsipqEsB+v3MYIND7OKEKsNbYHVeVoekpg50OpvS8SolOeJoLearS2xhFfmiaa8rDvWcMDPX6bXpkc1QcAmNVqeM2fONBZlQxMEDDTK+vhR220M07OarSTC+WvTo/CE1extiLETrdWB2SF5nbSI01jpKe1ABBZWygsuCC+++KKz50JFie23JGwFAQuRcHG0fG2oTbHhM8RzwJRmRahtMeYHLHrS8pBE3AOt/rZEFGx5nlivodnaUssTIiPrDh95xEmQ6dHsl+k1QUCzW+YJYum7DTRBCHLumg8GtlPTbDXCJVqWDx8SzdaWWp4QGXmNMI0sgesm7UAMtMpy9txzz+CC8OSTT3rsglBzIrIVBExJYQpJ2oYhXGJtw8UnC34j7dWNft2levXqqfaSmiCERZCujUbNbRsBeDTbqqRWzyDQujbM4IIQNtzZsGHDTE5RBBEEzVMxDP12bqpKJGKsIxHUlj/Dt0GL3KOxOgqC5pRlux18MqkFWQ0Cn6ArKUGAIGhLQasSm7sg2AZETYQghH2ba4KgbZ5b1UwJAiMRgoAuCAZKqxPgKajVtbrRTxBs3YwfeOABk6ryoIUiD0It3BmWbmu2VcmwXYatThDg4oyyYqnNz2OkHG6cCNhZHnGzJQMY9JF19yO2eZfnhJDn0k7znYfPAG4saYvIUtJWoyYIGMQaNWqUJ094dMr0aEnIa9ylSxeTUxSI23DVVVd5bDUi7LgsRyMGGvGWlfVEq0XmaRsbA4N/CLAi87Rlz549PXliFgzRlKUtYkfKemrE1nQatjpBwF4PEprTSxDefffdJqfqA22LNG3/CM1BBTMHmLmRsN0BWRMEP2gBUTVisEsCU9VYM6LZV5R4EWCqTULbP8KWEJkwGxzDoUvmCUHQ1lzYXk8txgKw1QmCtodCWE9F252bkgltfh/RbyQQQUraITiK5tNu+1AEEQTNU1Gj5kSUzOXPYbaDhyBoDj+2CLIdPBalSVuNfhu1pASBkRKEeLuUIKQEQXDzEgT0rXGBpK1GrdkcJDCmRq0bUtXQHrSwgnD66ad7bDVqzXs/YAxAy0PSL084zmj2YahtMGS7z4XGsIIAl2+ZJ+53rWtz8803e2w1Ysm9hi1CEOBWCrdcvP3L49NPP+2EYo+lbVpQc9zA4KPMU5v+wRsN6wmkre0OV4iMJNP6URvwCisIWIyjXRNJzPlLwNMQU3+ynoh4LctHC0PmiV27ZVqwa9euHluNWuxGPBTSDuVowWAxyCptNWIhkSzHTxCwIa92TpIYKJR5QhAwGyNt4SUqbbGIS9YTA+katghBCAJt5yZcRFvYxi6Am64E3Jk1V13bKMNhuzZhBSEMMO1oG3H64YcfNqmiQBQjzRatQxtoU4RhF4tp0OIM+AkCgrFI20RQ25PCD1udIEBFZZ7aRi1+QAQZmV5jkI1abEO9hXVMqmpBCOOpuLksf9Y2avETBNvuUlhqy5/9kBIEZkoQ4u1SglBxpATBAP0SzdaW2pboyeoyBIldYDuw5heeS1vgYysIYT0VtdkQv63HbHdgDgIsr9XKktQEwW9hl617ueapmIgQan7bw2njRMkSBM2pyw8+zlbBBQHeVIjoU1FmZGSYnKIIKwhwusFbNZYYQJRlw5lD2vkRm4jI9BrhESnTYvmy9lDYCgKmn7SyNGoOO9p59unTx5MW3oPag4ZpLpnelhCz9u3be8rS3Jk1QUBoL5kWrTC8SLTyJLFzlCwHEYekHe5DLfYBHmhpq01PYqxD1hNeo1qLK1mCgCloWXc/+kzjBheERCCsIJxyyime9GjJSCBorLTzo+1eD7ixtPQabQUhCGwHP4NEDQo7CDZv3jyTUxTa/L4mCH6wXVIdhFrzXvPB8HP/tUWyBKESuGUIgjbVpAnCmDFjPHZ+1Lo2GtLS0tT0GhMhCLb7RwRxIkLIdy0PG8LhR4tupO3UbCsImMq0HZewJdYdaG9+LdTbLbfcYo5WDClBCIiwgqDFKtQEIch0HvYDsEGQ/n4iBCHMzk1+COPPHzbIqoaq9lS89dZbzdGKYYsRBPSFk4Hu3bt7yk6EIGAVnrTzo60gBGl1VGULIUiQVW3BlC3x5tX60ZrI3H777eZo2UAszaZNm3rSh6FfS0ZbNKTtdxAEV155pSfPasqyBQG7y6xduzbhhFehLDsRgoCHF28wSc0d2lYQ0GWwzdNWEPAAaNdJo21od3QZtPQabcclcI7yvBGjEgNuMk80xaWtNj2qnTumcW27DJj6k+VoTmIQBIQil2VpXZubbrrJYxeEWHcg6xSWWpxFfKbZatTuT2bZggCXT3wRiabmp54IQcCoMpqzsUSYam1GwFYQtDwx61GrVi1PnraCgDUX2nXSqAU/1YibQEuvEUFBtTwksWW/PHeIAbonMk/ECZC2mutwSUmJJy3iJuAB1uogee2113rKwQCxZoulwbIs7dwhctIuCDEzJ+sUllqLC90dzVajFsmZWbYgVCUTIQgaEHyjTp06nvS2gqABQULC+CEEGaisSvp1Q7TrOWDAAHO0bGCfTpk2CLVQ5H6blSSL3377ralJ5aFz586ecoKMdfgEkkkJAgKEaJuwhhGEqvZUTBa1mQs0kfFWlLZ9+/Y1FmUjbBAbzZ/fz4koWQyzc5MftOXPCfdUrEqmBCE+bXVkShDsmBKESiB2L7KFNrCGqUxbaA8vZiTCAP1TmSd2n7aB3/Zb1Y3HHHOMqXE8tBkBDFDbAFOBMm0QaoFbsQ2cZpss/vjjj6YmlQcMdMpybGdtAKzSlemZtzA34YrqxJNOOumK//77z4rcQvCkf/TRR1VbyeXLl1/BLQRP+kGDBqn2NgybJ7cQPGmrIw8//HBP3bmFcEXDhg09ttxC8NhqzM3N9aQNQn4oPHkWFBSotsnil19+6alTWF577bWeclgkVFuNbdq08aRnNmOmkEIKKfiAWxP/Y+6TYoopbr00cvB//8fNiSuZS7cGbty4cel/Gzcs3Yjf8Znztzke+ZliilshjRw4gnA9K0QKKaSwFcPIgSMI15nPtgrM7v8DZZ9/MeXdchutnDHdfJpCCls3jBxsXYKwZMJ4GtmyDRXvXYuydt2DCm65g7irQP/xsQhTSGFrhJEDCMIGRxCcx+I//Fv+Y7HJiu3dvyP/Mt3/A8OkdhD9nf81H0Y+iyXg1sXUpxzMGT2GRtWuR+ObN6fiWnUp49wLacP69bSRj7np/XOJLcH9HYymdBD5lX+6FvzfpmsUczABcPLflDV+cf92axh7LAq3ThFG/o78piTYYuCes3OO7v98ndzzdc/b/T0xiM8bt8emEhNZbDkwchDbQsAl2XT7lE3+B1YbYc9/OBeTf8anDAY3T+SIOnCOzt9uKbH54bfYT/C780fUxBfrV66gnM7XU9o+dWlko2Y08xvX59xNqmfgnJM5tMkClXOORNO4n7j/OHVyjuI/93yAyOeJQLT8SLn8H39gqqog5kAkzX/uPRARsS0ePueZqLOPueIeuJ8nquTyYeSgcroM7u1UyXBuTnvY2/5H88amc/dhovmbwd2GyOMqgVqUlTeOOceNkfs38tJTuccqH2V9Bxu1Gx8isNG/Lq44bLmInPnCwiIq+bgnTf78c5r4yac0ZdBgvl6J+o5cLp0+jcb3/Iym9upNkz7tRRP79qN1q73xHpMJIwdRQcBFWD5nDv07dTItnz6dlnGllzk/I78LTptBy6ZM4TRzNz00K+b/TUsmT6GlU3GcGfmpUdggzb+c39LpM7gZv9apz0a+SCvmzKR/Cwto4chRNHvIEJr+w480rd8Amt7vB5o1cDAtGjvaqcf6detxGmVizfLlfH4zaNWCBbR83hxa9tdfXNY6vxeFA+e85v1Ni9IzaNbPg5yyZw4ZSIvTxtKKWbM33VhOFvyPeyWc9ywtnz3bqTvqOO2nn2np3HlllhUGKHcD/1yx6G/6d9JEvq6T6d/Jk2jF3AWu3gm4tSRavWQxLZk0hf6dNp2WMv+dMIn+mTGd0yC3LReR723KO+/QiJ12pcxadSh9lz1oxNnn0foECgIwd9BA+qNGTcrepw5l7L43jTj4CP4elpijVQMjB7EthA2UcdU1lNa8BWUccADzIMo84EDK3P9A5/eM/Q3593Rm1n4HU1qzVpR1bWc3OSOv6xM0olFzymjDafbjPNoyIz/bctq2nB//DrrH9qd05zjbt92fMlq0oZHHnsg38Wzn4k3p9TmNbdWWslq1ocwmnG/DRpReryFl1GHWbUCZ9RpTZtPmlLnfIZTT4QKa+t57tHbpUrcyCmbzA/1nk5ZO2enNWtIfZ55Dq1csN1+UeUQi3xpjYfo4yr/zLko/4li2b0WZ9VFuPUpv2ICymvJ1OuRwyul0Fc344htHWIDIe3rd8qU06qxzKKtxM8pq0Ih+5/NcygKUKESqnfviizSifmPKarsfjWnQlDIe6mqOwIZvdMfQveHX/vsPpZ93IY1p3prSuH7prdvQsGatacqAH5zjmx/cqxARZRvM/PBjyt2nHpW22JeK+Z7KuqSTI6yJxMJffqHs+o24zFZU2qgpZR1/Iq3ml1VVwshBdFARKL6oIxXWqkvFzZpTSVOubBOwxSaOx8/G+NmcSps2o8LatankkstMaqIJDz5EhXvtw8daMmETZQk/QMWc53h+IEvxezPOxxybwPmWNGtGpQ0aUy4/ZCu4pQJMfO01ymEFLeWHt7h5G7ZpRcX1GlBJ3fpUVI/ZoCHXp7lTr6J6jShr79qUccoZtDgz00kvMW/AT5RZm798rkNJ3YaUftKpLAgr3NsHTWjzZkBTemKPHjSW887dpy6VNG5K47ls1HeCc+6cvnkrKuFy83avSWlntKf1a1fH3YZLJ02ijNb70Xj+wgv4mpbc6oblsrtNgyMiREXdulOO8x20oIK9alH+fe7iH+coZlScX1zbkgceoWy+ZuPZFueWUXMfmtStm3Ns80Lkqkaugou1y/6l+ePSafn8+eaTGJim2l8ffUzZtSAIrfkeakiZl1yaQEFwy1z4y1DK5Hu9hMss5vsj84QTndZrVcLIQfwYQhGrYwFflOKW+1Epv5Xz+IHIqtOAcpjZDhs6P7P4gcziBzNjtz0o5/yOJjVR/t33Utr/ajhpsuvUoyx++PAzm5W3BGrYcl/+2ZZ/tqZ8viDZtRtSTu36lMfMgj3fyKPb7EcrTOy7SW+9RTms3sWcrpjfYgXcMsk7/wLKueRyyu7UifLbn8tvwoMpm+tSige0ZRsWqbo07tAjafk0b8jteT/8TBmszCV4GzRsSuNOPYNWr4y0EKK308QeL1NazTosBC1pfIv9qLAhv+VZQLKa70vZbfanrGb7ckulEeXzjZSzR02a9Fpkg02kd/OYM3gIZXFZ47neWXzd5v78s/N5/C1bedgkCM+/wDc4CxCuMdcv/4GHnM8ByF3Ebua331Ean9MEbhGUtGzrpMm98RZn1sWxSFTfJiFAXV1iGnl6nz5UcPNtlNvuRBrG392sP/1XsladIOA+rNaC8J8RBK4oHqz6TWjCbXfT3H79af4338Vx3jffOJzT+wuaP2z4pv7Y/BEjaca7H9Lsnp86nPXxJzS712c06533qODQI/jNzC0Ffhhz+efkhx6lWZ9/QbN69jT2n9Asbr7N+OIrWrt8hZPfpLfedAShhAUhj0Wm8MabaeOGjYTGOb60DWvW0tKJ46n08Scpq1ELmsgtCdhm85uuuOvjTh6x8AgCtyY2tRDMl7UoM4PSmjRzWjQQrjy2zzr9HPqLz3Vxbh4tHz+BFmZl06z+A2jiAw/TyCOOowXjxjppYx/2yS++xGLHrS0uJ7PdSbSW+4ju0ahNZcJGECIDmkuLi2kcC2lxoyZU0mp/KqrLXa9T29Pqvxc6x528NiNBQE0j41jrVq6hse1Opdzd96LxfA+nM+eOcb8fDakWggsjB7og4OJkcVN52hdfuofKgftVRGRBATfBs086hQpxA3LeafwlzRk5xhz0InIrRloIeMgLuBVReHs0GAZsInZACbdO8rklgr5gUYMm/BCfRetXrzZHXagtBCMIEYx//HHK2bsOtwxYFBs2ppz259GqvxeYo16s+vtvWs/C5F4DNyc8SwVXXMsPGreU+DpOfP559/O4kmxhlyaStyMIXCa+w/xa9angflcQ3OlcovV8vlnnXUAFLLAl3AosadiE0vY/hJYUFjrHdXDe5QoEagCbSE3cvyMiFEkdscB/bp6RIwz+O+YvF2V84KTmf1CCO4zLgrB6FWWffR6VNGjArbOWlN6wBc0ZkwZzPu7NvzxBcMowLBuxVrp15FosHPorC4L7LJQtCNF8nNzNn+55xJfh/BXzUfxRF9pnERg58GshtHZuqukff+oeqgBiC1+/5F/K4rdkUaNmzoVP44sx65dfnWPu16hXdXJMCyGfb+CCLvEBIWIvzKJffuMmemOniV7SuAWNO+oEWrlosXMsAj9BiEjZBgjXxZc64xGwQTdmLrdwALeWdu+OVbPnUOahh1MpNwvHtTmQlk2MTHG6t652tnrObqn61YlHxKb4+R58zbhl0soVhEIjCJFcSp94gjL581JuBWI8J40FYe5PbndGh3/p+hG3JPzrV3Pn+H8bmBFL/Mt3QuSOF8Dnfsc2OOMi0asHq+wOF1CxaZKP5Zbj/Jxc96CCMgWBy9xQRp08QD033U3+WDjkF0cQivk5k4Lg5qCXuRHnyj/9rpX8LPIXpp1BJ7WSDjByoI8h4AF0Wgjc5K8oYovVBcHdOi1yihrKEoRIishDunDwL87DXsr9/BKMsnMLYZ2Y2/UbQ4h8hevWr6O09mfzzYTmHPerazdwujMAbNzHuXzMGfgTZdZrQPn71KHi+x50PsP3EBm0jGDhuEya1ONlKrrlNsq/8hoquv5mGv/sszRv+PAYWyeh+d0fEYuIIOCa5dauR3kPuuUDs38cQOn1WAya7cvfQyvK4K7FpNfedI7pghSt74qZs2gWdx8nPNuNim/l/jnXN++qq6n0zrtoMncJl5SON5aorvtYoE4T+/Snwhd60PjXXqPSl16l8dw13LDW/V6cOuP0Nv1HNOvX36iA7Utfe4NKX36FCj/+iNatcgds56dnUv4LLzrHil/gvL7+3pTzHy3irhyOjX/hJco98lgqasZdvuZtKI/PtfCu+2j866/T+BdfoYLnX6R/2DaCsgQB+eLhnD1qJOVzOpRbxGVM6NePP5WInAHR6mXL6a9v+9KE+x/ka3Qt5V93A0144ila8Lu7EdLiP0ZQVr3GTpl+gjBj6C9OXUv5+yns/hJNHTIs5tuAOGyg8V9+RcV8/xT3eIUmft6bNmxwp97/KSlm4X+SMi/qSHndezh5ujWL/iZh5MBPEJLXQnArqFcyThD44Sy8zRs/D0Dqoi78UPFDOIEf9uya3OR/5ln3YAzK6zKgLrjJi9GcZht0cXJOPZNWmlkPW+Tddjulb7sDpfEbeFlxqfOZc56moGUTxlP+tTdQeqOWzlx0QS0Wjlq1nQFR3JxjuUuVc9lVtNTsLKxfnXhEbCKCgOucx/nlP+AKwvLJE2ncwYdSEZ/3BD7mlHvLnXh9OMf1Uv6jVf8soYIHH6XMAw/kFlN9ymURya9Tl+vakIqZ+Sw6WZwXpofHP9edNqxZY25cN78JfEOP3mEXyuFzzNmzNo3g7+if3BznGAAr9zbl/9ato/T2HSh9lxrOdRi3466UzdcJA4XA1DffodE77ezM/GTsvCuN7HCukx74a+DP9McuuzpTiMXNMIDdht/A3CVi5tdtzPnV5utSh0buthcL408mFaf7UBcEt14uJj7XbdM5ZHKdxlx2xaZjEnP5vs466VSnFZbL+RbWq0cFdes79/FYvLAeepQWfN+XcjFG1byVRxAiD33hnXfTmJ24TD7XsTvuRBl3R6JLuyXjhZHF55+x826UuduelH6sG5N0dv9+NKb1/pS79z6Ut+selNnpKidPv/pGYOTAv8uQuTcLQm+7MQQNsRWoLEEouNMbchvOQSWPPkHZDZrRBG4d5LN92nHtaOVs77bnZXUZIjWY/v77lMmCggFF9LHzWcmzTjqd3/qDHVUuD+tWraTcBx+m4ptvpWnf9DGfAm4JizMyKe2QI7me/NA2bUZ5dRpRBt8caW3aUgYLUIHTymnNX2gdPo8TacV07/ZjGiL1j7YQWjtCU8jXBl6fOZ2ucAYZx/O5Y6A0o/15tGZRZKDTr5FK3O1aRKPR/dlrLyqs1YAfivqUxdcuq0lzyqzbkAoxU9GipTNgnL5nLSp9jMtjRPJbNWc2pR96GHfjmvM1ZbFmQZnyymvOMceG/3HbE0RLx5dS1r77OVOg47kFgy7g/JhNeGd+8CHlOGtR+PuDH0qnyza9zWf/PJjGYMFa7frOlHBxy7YOUWYB51PA517EgpC2+540J6aL5CcIQOQcpnJ9IQa4dhDCnM76ZrCz+fse07C5M3aE61/avKVzfbLRUuPrVsS/59ZnET3mOCraty3fhyxaSgsBmPTQI06dca75XHb+I486n+NopF4l13Z2xoKKucxc7ibN+204jWu9nzOGhnuoqFZDyrv6uk0ig285klbCyIFXEApZEND/LGrclPIv7kilTz5HpY8+SSX8RUdY3PUJ/uwJynv4EVrCX6KG2ILDCgKmHYuatKBcfjBLuOlV2rUrjX+0KxV2vokyDj2KsvlC4ybANGnm2efSv4VFTnqZa9ktBLcmqxcupIyTTuObn28SLhdvmkKubwbfVDkXdKS/en1OK+fNdVLEAqkxcCfdgWPrsGruHEfJC+s0dHwr4GxV+shjtHDsWFpUOoH+/vVXyrviCsrBWAjfUHksTHk33uQ0wSP/mf89iHwW22XI5we4mJv4Mz7/nLL4d3QTSrjMrEMOoxWTJpkUbkotzwgK7rmfxvJbp+Teh2jmF1/Qwt9+o39GjKRZ331PBVddQzkNm7kPAAvbWL5WC8a4A8aRK1Fy30OOUBezwBah9XPuBbRh3VpzNHqbzujdmzJZ+J2Hk8Uxu92ptG7Zsk11++uDj5ypbPfhjReEv3NyKOemW6iEu5UFhxxBJZhxgvjhvrjsSiq6+14qve1OyrmxC/2dlRvNk7sM0Tz9BOFVIxp8L/B3l3N9NNpxxGZJXiGNbbkf31fc3eSfRSz2GU2bUsGV19EkdJW6PU/Z55xHOdxaKWqM58BtwUQEYa1oIUx46GGnhYF6OS29Rx5xPkd5kTLH33ArCxR/x01bUf7xJ1Luuec7YoBZo+y6jWgcv1TGXB5tIbgDy5HU8TByoHcZMFI/Hg8hf9F4k+WyQqGpmMNEcw1/59esRWN235sWDBtmUscjttiwYwgQBMyVF/ENhxsrj+uQxz/zIQR4qDjPfDg3denivKFdePXQbwzBtTIPHOOf/HzHOxHnPoGbn3i4SvktCIWHY1P64UdS6VPP0PIZruchUm3k2+g/MnP4ApHP0I/M3au2c30zGjSmqe+9b45EbTasXkkFRpgnNG1J6dzyWTjOHSWPwltK5JNol4FvXu6y5J59NuXyucCZDA8tnKmy9j+YlhVFujK4/bVau5+C/0yBe7nXrwNAc77w1tv4vuE3M9/gaJYXm25KJNcFI0dTBl/vEgz4woejWWv6Z9NAX1RAC2/uwt0RtAi57793PZrwjOskFbFwBcHtDkUEIXKLR8rC33jwMEOEt2Q6BhW5VSaxKc8KCkLkGIDme8F1N3A+daiI6457Mr11W5rVt9+mvID1K1fShKefcf1TuDy0QssUBHOusYIARMoef+OtTguhqBXfzxg7gyMd3zd5V1/vuAssHjGCFmRlcf1wbyJdbK3jYeTAKwj53KRBU6uE+4SljflhQIuB31ixhMrD0y+Lv7RF3EzREFt0ZQlCIQsCbhTcdPg8j9URbxKnL8YXJI/7yPnXX0dLCtwpNJlr+YIQFZHl3FTPu/4mGsfni2ao462JdPyFo/WUs3ctGstN/5nfu90C98aMfJ1erOCmc+bBRzhvhwLuhuRdEnXoAmLrumD4cBaCJtwFas3nWZsmmfEQ2ETqKhH5ZFMLgW/eIryRWVQm8HUrboIHshULPfrU9Sm74xW00ZkuRVq/WyVeVHUbooUj/qBM3BN8fQobNHIcxjAeEMEG/j0LI/983qgT6oe3ZiycltlRR1NxY+4ywU28SSunewVEytUEIfaBg926NWso6+xz+E3Jgsr5jOXrHfFDwHGX0W+qMgRhCbdIM/ihRAsJ9wgc86a9855zDOVghN99JJHnRsrj7hsE37kPKyAIEZvSW27jLide4K2528YtIXQfHnqMy5P3od/3G4WRA58uA980hc35bXzs8ZSL6EKsuJIF/KWnn3E2f2kZbnKB2ApUSpcB6nd6e5rAX87El16iyS/04CbsA5R5+hn89mnCN1Iz7m/xReHWy9j9D6BFo71+DuV3GdzaRC4nfp877HdHGNL3PYCyuS4l/AUWQ5G5W1XCb/lx/IVM/9SdjdHPwv10Vp8+lFXXvfHQD5/6+hu0Hk5W3CJYt3o1rV+1xplDX7d2LS0tHc9v8YOcG6yQb/yCSy+njRvdBwx1077eyCcRQXDeGvwGgqdlPl/33ONOpDz0W1tCFPalTG7tTeOHAUBav7qjuxILLECb8+NPNO21N6n04Ucp9+67KP/Sy1zXcj433ODZx51EqxbHODkxUFYWrh8/VAX8/Weffb7jWBbBgl+HOd576NYUsgjnnnex061A6sj34ddCACK1XMPXMvvsDlTMZWCWYWyTJjR39GjnmFMX/M/clGfILgMw/eOe3CXjl0bztnwfcpfsyGNpzcK/nWMoy+3yud8cMLP311wmt6jCCsKtt3OLyp0EKOXvOOuYE2hNZP9MlGnOE6VHziXyU8LIgSYIXABXIotvmOn8BTiZreOmMKt8PPmztXyT+iyhjS24UgYVuQ9ccJd3UHEdN8Nmf9eHMg86hB/WFlTUmr80fgOOO/5kWrNokWMTuRzz+EYuSxD86gH8M2ECTeYbI/PY41h0Gjhvb4wvlPA5jeWb+J/8PMfOL4eJzz3ndLnQHC6CcB19LGWddjrlnHQaEz+ZJ/Pvp5xB+SecRIX88BbztYLjUPqpp3E9o4NOkfOJReSTiCA4rTy0qrgvmX7q6bR82jQq6nKHc3MVc+uvhFtWaQceRsumRroC3jxjl03P/3OEM32Wsf8hlM7XEN9LAfdRC7kLVFDH7S7g7Q9hzuQXyQrjzBWpK9zRxx14qOMOjpZKBvfxF2dnO8eAiU89a64PWkX1aPo7bncKqSN3WFktBNiBa1kQss4+d5MgjOPW3BwzphGLTXmGEITI8ZJHHuN7AvVisavTiIo664OOkRSLhkL84h2TKtJlwPRvnnPtucuMVuwd95ojwWHkQB9DwAMDP4Tpn7hOOeVBvkWA2E8qRRAwy+Az7QjMGzzYGa1HP7W0RVvK4G7F9E97OcciFzmMIESwasF8KrnnAcquz01w9AFb8cO9N7+RH+paZg6l99znfmlcNrpjcBsuxU2ENwW+VPSd8ZNvToygF8N9mh+uYm5VjD2+Ha1c5tbTVhDG423F1wMrMhfnuv315RMnUnrbg5180XXAOpICM2ipwfmUm5+TXniRxjTkGx0PLD9gRXXqUhYeHn4Acg4+nHmY0xop4lZTMR+HIKz8231D4tpHci+5606+yd0bGANmk198xfl8PTfzs9t34K5oYypp2pwy2+5Pyya7g55IWzFBwBjCvpTmCILXdbkyBCGCCV1udwb3MH6Qx3Yl3HLSEPneFvG9n8lCgPU9YQUhn+8Zp5uCe6lbd3MkOIwclC0I0xLqhxDeMckhmkbOT6L8cy9wbio06TG+UCwEZN6PP5Y5huBSIPIxM/IoovlXdFVnKuC3bzHy4psv96wOzo3th/F33mO+PH7rc5q8gw51mpbZhx1FmYcfTZlHMPGTmXUY8/CjHKZz12Fcpyv5Ro/09916SEQ+ibYQTKvqfne1I0YDgClvveU03d16tKZ0vsFnlbEP4/SPP6G0mrXcqUDMjLCYFNxwM83s24/+KSyglbNm0YI/f+c+dFvu+7fY1EKICAK+l8hNvmD4b5SOGQkWbYw15HLXE7X6p6SU07OQc/6FLIxF10SnyiLXHKioIGhrGSpTECbe0sX5HN00tHKKH/bbZ9TNcfEvkRZCZQgCZmUwLlOfirkbXVEYOfB2GZInCAFbCH6CYAiUdr6Rvxh+AzlfXBPKu+Iqc8TFvB/LHkOIfh1ROMecQiJW7s+Z335P2fwllHCztIi/VEz74Dz9MPGJJ5ybxVFzbgH8xQ8mujRr5syh1YaR3/EzwtWzZtPahdwf5ze1+3A4lXEzjUHkk02DinzN8DbOeygyf+1aIIwcpmYhZs7MDX8X444+jlbPdx/gWKxZ8DdlHHk8Xyt3IU4Wnye8EiUWTZ1MY1u3ZcHwCgKuKAQUpWNtidsScJeTp3NLYeWMGTTrW+7yOQ8ldyW4RfTXd7Gh7WIe3ooKwlg5S1O5glDMDy8WsuEawTmu8OpN71gBN8f5g4ZyC9MMhocQhBLM7jitTnSzWBC6J0gQ4AyRVasOTTVuuzoityb/G6lhDGI/woOSzf3iEn47YCqoYl2GhkIQ+Dbjh9T10SYnQEneWWdTYSO+EbjpBvuim7s4tpGLHBlUhIOJTZfBbUpHjkZ+d3Ob2fsLvpHQ/GVB4Acmj/v561atco5pmPFJL7aHwwrOhb/EB6JfsB2iddHg1o9beTGrHfP4Ro9d7RhJPv+PP/hB4e5I85bO1JcjIKaZ6+qeazj/9+HO9Kgz5dqgKeWcfgZtXB9pqWx0RrPx+z+lRfxwcwsBsxmcb9YxLAhmUM2B8x25eU59711nQBPfAUbj//rsC5rAb9QCXJvGzSmDW0qRxWSRVG5KVxBwbrGCEPluI/mvxeImiI4jCK1pXKPmNH+UO6gIxMoqUBmCMPWDD5znBd8tHLTGwc9j9hyT3s0Nv0dKnfjqq5u6TiV8H2YiQMqyyBiRiwkPPkzuuIRdlwHPCV4GEhFbYMO69fycRM4uvk5GDnRBQCXwpU39/HP3UAUQW5FYQcDio4oIQgE3fwu7xHcBcDNsetj79KeMRi1Ypd24CBm1atOUt991jkWay/N/wBoDxCjQBQE/V8ycQ8vmzXY+iUDWEPPJeRd1pIIGmKJl8eFrVXjz7XE2EkvGj6f0VvvzQwOvvtbcRD6AFqRFB7vcMiJnE19eWflGEPliy1r+DETyKrr/IW6x1GZBwHRZKxrXsDn9bXztI3nN4Dd1Rh2+0SGgdVn0LrzI+RxHYROxm/nVV44jTDG/8TA+4RGEGCyfOoUyDjjYGSvIb9yCCs+7iApOPNn5O7dWfZoQWfvBxNWIlAFoghC5vSOrORHPIef8C53p8fHceoO79ZxvvnaORXOK3jcVFYTYvBbn51I6xBXOUHw9ET9k/GNPmqPxWDVrDl+f4xzhRLeulO/DrONPojXLlhkLFxOtBSHSZYAgvGCOxICNcV/N+LQXZZx5Lo3jbtrML7928nCvgZubkQP/MYRcPvHJ3bo5Hm3Li4oFi1wWF9GywkI1bFnsBdskCNxliApCsDEEBFEpuOMucyQKxBnA2zp9vwOdWQbH+6txIxq3/4G0fNoMxyZyU6mCEBMgBRj/TDcafeAhNInVdv6osbRizlzagDBra1Y7Uzp/jx7FXZGrHW9C9BnRrx7HN928Ie7259FH2ov8LrdR3t61+HzQVG9GGYcexn3xvrTOzCDEYsOG/2jJxClO3Ef96sQjco5lx0MA3Bqu5DdYxmHH8DVr6ogCZpdyTmtP65ZGPQPnDh7K18vtgsEbLnvf/WnhmHRz1MWicZmUfsQx3PTlGxxTsXyjZ5YhCMi7hK+D40qMGSEWSMephr83jC8sGPHnJruYBpqDsgQhVjiKO19PBSxkmGnJb9iEcjucTyunTKX/WCzW8f2yce3a0IIQi40bNlDulVc7rtHO/cf3eAZfjwnPPEMrZs1yytqwdj1fq3TK6XCe83KDeMIW1z/7WO4yiO5mpQkCY95PA2n0Pg2ca1ZUpx6N5mdgAbcSgUheRg60FkIjKuIL6YwE8xeGCEHZrfeLYxbfGJn7HkBZ3G8cyc28+UPdhyEWMd9jpbQQCpu0oPzj2tGkRx+nSU89Q1Mef5oKb+lCme1OpizUGZ6K/IBiPjaNv7zpn0aXLUeyn89dhlhBSItrIbhfbM5Fl1BhzX347VmPMtCEPfRIyj/1TCo46xzKObadM5ORj3EI/jInNNuXsvesRXm338VdfHelWeyNuQnmo2VTJlPaoYdTEfwRMAjHb2WsesP0Y+mdd9Pkp57j83qKSu68i/L5LTcK5/SUd5GWhvIEAUddC9ye7uPwV++vKZ27VrjpnCY8dx0woxDBqnlzadxhR1Epdxdw0+GtlnHYcTTp2W40/cOejktyZpsD+QavTUXNEVCGb3C+ZuOOOpaWaWHLDOb/OoxbJFiz0Yq/C25VtGjLb3R+U7Y/h9az8G5CtNIOyhaE6L9TXnuTsmqi9cPnxXXKb9SEslh88R2mn3IG/Ts5GnG7LEGIiEZZguB2K7mVkJ1No+GL4YyT7UdF3M3KxqKmQ46i3As7Um77symjZSv+TupQ7v4H0fiDD6divn8wK5N99Am0dnF8kNXKFIT8u+93pojdBV9tKbdmLSpisQIieRk5iG8hFHfs5C7M4EqA8BhDvD3HA0twQpOWNBFOGGy/YPBgk0MUkYIACELe8SfTeL6xIAjp/HaNCAIs3aZybAoXk958k3L3hiBgzp9Fih+Qgn3qOxcKrstFdfim4gcb9Sxu1Jgvyj40lu2mf+g63ADI1XxnLAgDKYebtk7MBH5zIP7iquVRQfiXW0Mj4NGHPj7nOYHf/nD5LWRbECLixnfklgjm97kuuTd3obX//htT+8htpGNRWhqlHX4M5fCXUgzvR7wpGjZ2+oKYsgIxUFQMt+zd96accy9ioSo/onREEEq693CmQeEai1iOkdWOmvBiPCC305V8k9dnexY4PMwsvkti4gdMf/8DSt+rFk1A6875DppyHes417+QH7rcPZgXXEQlp5zqiMH4xi0pnfvQ/850W2ca1q3kfv5ZZpk5l4c3JcRo6rtywDK+vrPe/9BxnXe+P77vsi69fNPDC0SuwYqp02nsAYfyNXQXqaEFhBgZxXyeWU2a0b8l0aXaMz/8yB3sjeTJL8XI1Y6UPvXlV9kGi5tYNPi7ybn+hk3HYms4+8tvKM1Z3ISuJOfH1wtjCvDQLObuZRGXj8VPM7/4isZfeS1/zi8WFtmcI46lNWJQdzILeQGfKwShgMsuMIubomeJQcUufK9gwRq/vNm22ATikSh4pCvl7LW3ex2Y+H3Cy+6Ub+QMjBzECMJ/G52djMbyTZjBFUXMQDDyO35GmF6/gfs7X8A/99yb5g0c6GThh/XcTBvJb5q0PfehTL6gw7iMaYMiTWxneMr5TaKYlXn0jrs5o61Y1gqlxEVCnx2/4/MsfsNlNN2Xm6knUAn3i/8pyDepvZjdvz8Nr7EXpbOqpu+xN/3OyrwyRhDW/LOIJrz0MmWefiZl8UXG+WGuHn1bEL9ncpMrnR/izHMvoL+++dbx5QfKloH4G2fFjBlUxA9qxoGH8rXFajizVoR/OsuE+feMevxW45ZYNneT1q/xH6yUyOHW04j/7cb1rE9/7lKDxnHLoywsycmhkdx/z0CAWr6R0xCK/KwOtPrfpW6dWU0nv/4WpXOLBkvineXP/BMPcDoekHsfoNWLF1JBlzto9M67UcY+tel3Fs8lhQVO/vFnHv1r+htvOW9mdE/xsKbzGzMSSzMe0ZGVyW+9Tb+jDD63tN32ohHYecvnys/9ZSil8ds5k+8brL3JY/HG+ps/+OFcnB+pG+f57ts03MmznpPnn+dcQOudgCuoqVvbCd1e4Gtaw7HBispRl8fPXsVi7q+/Uvrp7Z2VoPge3TVAfM/wCyTj+NNo9k/u0uvsS6+gsbvsSen85h7B13aFcRCLnE3+XXfRyJ135XT1aeT/dqf0e+4zR6KCkHPt9TR6l93d73rnGpTN370GtF7GwNOWhSCbn9exBx5GS2NEETByAEEwUZdZEOaMHE3T+/9IM3762Y4//0zTBvzg7M1QFjauXUczhgyjaX370YwBA2hyv7601CxPxsm5g36R03SBvxaVlND0nj1p6huv04TnnqXSrk9QyaNdqeQx7jY88yzNeONNZ/rv74xMWrM4PjqSO7obf7MsmzmLJvfpR9O5DtP78U/+8tavW+dYRVoRAKau/sktcAKRTnv1NSp+8hkqfuJpmvriyzTry69pcV4ebVgf9TlwR65dxJ9FFPhcHlvO/ctZPw7gJukrfE5PUtHDj9PEp5+jme994OxBsWLGNE4UGRItD24d5hfm0+Tv+/B1/pF/fk9zsjLN9Y2/Fs5jZk569uhRNLVPX5r2ww+c7geayOmWLVgQV+6/E8bTtPffpyJ+22CJ87SPPqTFmx56Ljcni6ZwuhksulP79acVJj6jRKQWEx55jHJZcEu5GZ3Lfe/Srk+ZI15E0iyeMJG/v75OHafiXhoxYlOTPRaRT1bMnUszPvuC836Gih57jCZ170Z/8XeKAbyIzeKJIs8/kadbIq4o7BYWF9GU777n++YnmsK2s0aPjvPidBH9e93K5TTnl8E0mV8uzr3K3bA5P/+0aZwAlnPGpvE178/PWz+aNvBnWmPGbiK5zOOHGGWhXqjfnKzsTccj9ZrDrc2p3/V16oXven5+vvN5LCJ/L8nKcVYpFz79JL803dXA7lH3XI0cxHcZko1IZeVJuNA/LQvuhYq+UYLAKS1gkc6DJtL4ZYHPJW1hd0bIUbdz08sS3VqUVQ/nnud/tNTx0I/65b5g5CindQG/hfHczRjbZj9aumknLZ+SlAcf8C3ZJ5sInCsVE3otFm5S914yf3ggo18BMC37ijL4sJ/Eb/qey6iXWyv+za8Y5cS1+yeyyjVibeQgflDR/B+QeuXjYU6DE2y6uaL/bPrhgXNybqV1E3Mk5iAuNt4a+g3hfhVx9XA/if/NSY9y3c/j4X4WTR+TzgeeY/yBmyb2SOQv94j5n+l+agdj66SNvQnKyGXTAefKuf85585w8okxYXh+j/kAZUbSmhw8+Le0lDK4q1aAgUruYyOgbekTbuvAe9sCkdzc/PBv5IFyP9XLccCHcDRqE7GPfBr5XcvT/dfcMeZ//BO11IBPI0eieUnr2CPuMeQalV6Xkc8B96/I7xF7F/GWCnDDmxRRG/wWYTVpIaSw5SNyC2IGZ/b3/Snt8KOcmSxnxL5+Yxp39PG0au48x8ZF9JZNIXkwcpAShBQSj/nc504/51xKb9CIijBb08rd0Wos/A6GugF2MLDsvONSelAlMHKQEoQUEo85A4fQuJq1qaR5MypFnAZuGYxt0Jym9/7CWEAHWA5SelBlMHKQEoQUEo/VixZS9tFHUUl9N44C1isgaC3gjhu4MpAShKqDkYOUIKSQWEQe8Ixbb6WRhx1BU996l1Z7pohTqFoQ/T/hbLLI3MfhogAAAABJRU5ErkJggg=="/>
								</a>
							</div>
						</div>
						-->
                        <div class="col-md-12 text-center">
                            <ul>
                                <li class="elipsCopy">
                                    Copyright © 2020 - 2025 <b>İtemSatış</b>
                                    , Tüm Hakları Saklıdır
								
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <button id="sayfaninBasinaDon" title="Sayfanın başına dön" style="right: 15px;">
            <i class="fas fa-arrow-up"></i>
        </button>
        <section class="mobile-navbar">
            <div class="mobile-panel mobile-search-menu">
                <div class="mobile-modal-title">
                    <h3>Arama</h3>
                    <button class="btn btn-default btn-search-close-modal">X</button>
                </div>
                <div class="search-mobile-content"></div>
                <div style="clear: both"></div>
            </div>
            <div class="mobile-panel mobile-category-menu">
                <div class="mobile-modal-title">
                    <h3>Hızlı Erişim</h3>
                    <button class="btn btn-default btn-close-modal">X</button>
                </div>
                <ul>
                    <li>
                        <a href="/kategoriler.html">
                            <i class="fas fa-bars"></i>
                            <span>Tüm Kategoriler</span>
                        </a>
                    </li>
                    <li>
                        <a href="/ilan-pazari.html">
                            <i class="fas fa-shopping-basket"></i>
                            <span>İlan Pazarı</span>
                        </a>
                    </li>
                    <li>
                        <a href="/alim-ilani-pazari.html">
                            <i class="fas fa-shopping-bag"></i>
                            <span>Alım İlanları</span>
                        </a>
                    </li>
                    <li>
                        <a href="/ucretsiz-cekilisler.html">
                            <i class="fas fa-gift"></i>
                            <span>Ücretsiz Çekilişler</span>
                        </a>
                    </li>
                    <li>
                        <a href="/magazalar.html">
                            <i class="fas fa-store"></i>
                            <span>Mağazalar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/gunun-firsatlari.html">
                            <i class="fas fa-percent"></i>
                            <span>Günün Fırsatları</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kategori-listesi/e-pin.html">
                            <i class="fas fa-laptop-code"></i>
                            <span>Yazılım</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kategori-listesi/top-up.html">
                            <i class="fas fa-cart-plus"></i>
                            <span>Top Up</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kategori-listesi/hediye-kartlari.html">
                            <i class="fas fa-box-open"></i>
                            <span>Hediye Kartları</span>
                        </a>
                    </li>
                </ul>
                <ul class="mobile-special-area">
                    <li>
                        <a href="/ilan-ekle.html">
                            <i class="fas fa-plus"></i>
                            <span>İlan Ekle</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-panel mobile-account-menu">
                <div class="mobile-modal-title">
                    <h3>Hesabım</h3>
                    <button class="btn btn-default btn-close-modal">X</button>
                </div>
                <div class="search-mobile-content">
                    <div class="item item-user">
                        <a href="/profil/dasdemirdenizcan.html" style="	padding: 0px !important;">
                            <div class="level-badge">3</div>
                            <div class="user-text">
                                <b>dasdemirdenizcan</b>
                                <span>31.40 ₺</span>
                            </div>
                        </a>
                    </div>
                    <div class="item bakiyeItem">
                        <a href="/bakiye-yukle.html">
                            <i class="fas fa-coins"></i>
                            Bakiye Yükle
                        </a>
                    </div>
                    <div class="item guvenilirItem">
                        <a href="/guvenli-hesap-yukseltmesi.html">
                            <i class="fas fa-user-shield"></i>
                            Güvenli Hesaba Yükselt
                        </a>
                    </div>
                    <div class="item">
                        <a href="/bildirimler.html">
                            <i class="fas fa-bell"></i>
                            Bildirimler
                        </a>
                    </div>
                    <div class="item">
                        <a href="/mesajlarim.html">
                            <i class="fas fa-comments"></i>
                            Sohbet
                        </a>
                    </div>
                    <div class="item">
                        <a href="/sepet.html">
                            <i class="fas fa-shopping-cart"></i>
                            Sepetim
                        </a>
                    </div>
                    <div class="item">
                        <a href="/profil/dasdemirdenizcan.html">
                            <i class="fas fa-user-circle"></i>
                            Profilim
                        </a>
                    </div>
                    <div class="item">
                        <a href="/kontrol-merkezi.html">
                            <i class="fas fa-user-tie"></i>
                            Kontrol Merkezi
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tum-siparislerim.html">
                            <i class="fa-solid fa-bag-shopping"></i>
                            Siparişler
                        </a>
                    </div>
                    <div class="item">
                        <a href="/siparislerim.html">
                            <i class="fas fa-shopping-basket"></i>
                            Siparişlerim
                        </a>
                    </div>
                    <div class="item">
                        <a href="/ilanlarim.html">
                            <i class="fas fa-store"></i>
                            İlanlarım
                        </a>
                    </div>
                    <div class="item">
                        <a href="/favori-ilanlarim.html">
                            <i class="fas fa-heart"></i>
                            Favori İlanlarım
                        </a>
                    </div>
                    <div class="item">
                        <a href="/para-cek.html">
                            <i class="fas fa-wallet"></i>
                            Para Çek
                        </a>
                    </div>
                    <div class="item">
                        <a href="/destek-sistemi.html">
                            <i class="far fa-life-ring"></i>
                            Destek Sistemi
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://discord.gg/UtjXNfpdG9" target="_blank">
                            <i class="fab fa-discord"></i>
                            Discord
                        </a>
                    </div>
                    <div class="item">
                        <a href="/cikis.html" class="cikisYapBtn">
                            <i class="fas fa-sign-out-alt"></i>
                            Çıkış
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile-panel mobile-favorite-menu">
                <div class="mobile-modal-title">
                    <h3>İletişim</h3>
                    <button class="btn btn-default btn-close-modal">X</button>
                </div>
                <div class="search-mobile-content">
                    <div class="item">
                        <a href="/bildirimler.html">
                            <i class="fas fa-bell"></i>
                            Bildirimler
                        </a>
                    </div>
                    <div class="item">
                        <a href="/mesajlarim.html">
                            <i class="fas fa-comments"></i>
                            Sohbet
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://tawk.to/chat/5e8e0b2c35bcbb0c9aaf2bd2/default" target="_blank">
                            <i class="fas fa-comments"></i>
                            Canlı Destek
                        </a>
                    </div>
                </div>
            </div>
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script type="93da80b67f3194b9c00d3b01-text/javascript">
                
		var tawkURL = "https://tawk.to/chat/5e8e0b2c35bcbb0c9aaf2bd2/default";
	
            </script>
            <div class="mobile-menu-list">
                <div class="menu-item">
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <span>Anasayfa</span>
                    </a>
                    <a class="mobile-search-button">
                        <i class="fas fa-search"></i>
                        <span>Arama</span>
                    </a>
                    <a class="mobile-menu-button">
                        <i class="fas fa-bars"></i>
                        <span>Menü</span>
                    </a>
                    <a class="mobile-favorite-button" href="https://tawk.to/chat/5e8e0b2c35bcbb0c9aaf2bd2/default" target="_blank">
                        <i class="fas fa-headset"></i>
                        <span>Canlı Destek</span>
                    </a>
                    <a class="mobile-account-button">
                        <img src="https://cdn.itemsatis.com/avatar/global/minecraft-erkek.png"/>
                        <span>Hesabım</span>
                    </a>
                </div>
            </div>
        </section>
        <div class="rightMessages">
            <div class="notShowingChat">
                <img src="https://cdn.itemsatis.com/global/icons/nochat.svg"/>
                <div class="chatText">
                    <h4>Görünüşe göre hiç sohbetiniz yok.</h4>
                    <span>
                        Aşağıda bulunan <b>YENİ SOHBET OLUŞTUR</b>
                        butonuna tıklayarak konuşmak istediğiniz kişinin kullanıcı ismini yazarak anında sohbet oluşturabilirsiniz.
                    </span>
                </div>
            </div>
            <ul class="userListMessage">
                <li class="LoadingChat">
                    <img src="https://cdn.itemsatis.com/global/loading.gif">
                </li>
            </ul>
            <div class="mini-chat-warning-message">
                <i class="fas fa-exclamation-triangle"></i>
                <div>
                    <b>Önemli Uyarı!</b>
                    <div>
                        Site dışı iletişim kurmak alışveriş güvenliğini sağlayamayacağımız için <u>yasaktır</u>
                        .
                    </div>
                </div>
            </div>
            <div class="chatMessagePanel demo">
                <button class="btn btn-chat-sms alfa-sms mobile-chat-sms" data-id="" data-name="dasdemirdenizcan" data-tooltip="2₺ karşılığında kullanıcıya SMS gönder" data-position="bottom center">
                    <i class="fas fa-mobile-alt"></i>
                    <span>SMS</span>
                </button>
                <div class="chatPanelHeader">
                    <img src="https://cdn.itemsatis.com/global/lazy-image.png">
                    <b>Yükleniyor..</b>
                    <a class="ui mini green label">Yükleniyor..</a>
                    <img src="https://cdn.itemsatis.com/global/icons/arrow-back-outline-black.svg" width="20" class="backButtonChat"/>
                    <button class="btn btn-chat-sms alfa-sms" data-id="" data-name="dasdemirdenizcan" data-tooltip="2₺ karşılığında kullanıcıya SMS gönder" data-position="bottom center">
                        <i class="fas fa-mobile-alt"></i>
                        <span>SMS Gönder</span>
                    </button>
                </div>
                <div class="ChatAnnoucment">
                    <div class="text-center" style="width:100%">
                        <i class="fas fa-bullhorn" aria-hidden="true"></i>
                        <span>
                            <a href="/yardim/147/sohbet-icerisinde-uyulmasi-gereken-kurallar.html" target="_blank">Sohbet içerisinde uyulması gereken kurallar</a>
                        </span>
                    </div>
                </div>
                <div class="chatMessageList">
                    <ul id="chatMessageList"></ul>
                </div>
                <div class="chatSendMessageBox" id="chatNotSendMessage" style="display:none;">
                    <div style="text-align:center;font-size: 13px;line-height: 16px;color: #93a2ff;">
                        Sistem üyelerine mesaj gönderemezsiniz.<br>Yöneticiler ile iletişime geçmek için lütfen Canlı Destek sistemini kullanın.
                    </div>
                </div>
                <div class="chatSendMessageBox" id="chatSendMessageBox">
                    <input type="hidden" name="receiverID" value="0"/>
                    <input type="hidden" name="receiverName" value="0"/>
                    <input type="hidden" name="sendMessageChatID" value="0"/>
                    <input type="text" id="ChatMessage" class="inputMessage" placeholder="Bir şeyler yazın..." maxlength="500" autocomplete="off"/>
                    <button class="buttonSendMessage" id="buttonSendMessage">
                        <img src="https://cdn.itemsatis.com/global/icons/paper-plane-outline.svg" width="16" height="16"/>
                    </button>
                </div>
            </div>
            <div class="newChatPanel" style="display: none;">
                <input type="text" class="newChatUserName" name="newChatUserName" placeholder="Lütfen bir üye adı girin.."/>
                <button>Sohbeti başlat</button>
            </div>
            <div class="newMessageBtn">
                <img src="https://cdn.itemsatis.com/global/icons/chatbox-ellipses-outline.svg" width="25"/>Yeni Sohbet Oluştur
			
            </div>
            <button class="btnOpenMessageList" style="display:none;">
                <i class="fas fa-comments"></i>
            </button>
            <span class="messageCount"></span>
        </div>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            var BrowserData = {"isMobile":false,"isTablet":false,"getOperatingSystems":{"AndroidOS":"Android","BlackBerryOS":"blackberry|\\bBB10\\b|rim tablet os","PalmOS":"PalmOS|avantgo|blazer|elaine|hiptop|palm|plucker|xiino","SymbianOS":"Symbian|SymbOS|Series60|Series40|SYB-[0-9]+|\\bS60\\b","WindowsMobileOS":"Windows CE.*(PPC|Smartphone|Mobile|[0-9]{3}x[0-9]{3})|Windows Mobile|Windows Phone [0-9.]+|WCE;","WindowsPhoneOS":"Windows Phone 10.0|Windows Phone 8.1|Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7|Windows NT 6.[23]; ARM;","iOS":"\\biPhone.*Mobile|\\biPod|\\biPad|AppleCoreMedia","iPadOS":"CPU OS 13","MeeGoOS":"MeeGo","MaemoOS":"Maemo","JavaOS":"J2ME\/|\\bMIDP\\b|\\bCLDC\\b","webOS":"webOS|hpwOS","badaOS":"\\bBada\\b","BREWOS":"BREW"}};
        </script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            var myDatasEnc = "IyLQm+Vz2wO6RH/l9mM8cmRhb4A3qqQ6Iv3H1VOsNTy0ZH8ST1lPsyr5PVG577LS14PuR3GwAhFjl1sfVnOzTlo37ruWL8XnLlZB53L3G/BLUPD+KFH5wi8ywvhzP3IIZHPkK2cbnViZltQjXONCbiI/ojAjfpNROUDhAZ3urUaDfqBsiKN3o5DDktDrkqCz9D3NrEpfVXv6AozveUqx4J+pDM2kvUMWGKPj3293sJTScvZrFURSuJ8rYvREKi6x+ZPqJx8SGL9XYOmw16dbga9kFtrYV91jCulZt0SlKALwjqyHbDXYfNBPXRKukXNvg2nfgQy6VdKA3xWHJ3mQH1XHzkKV6Xzm3aNtLKGvqMX13EJFHmhI0dz5PpNjGxSH"; var myDatas = { userID : "1315138", userName : "dasdemirdenizcan", Avatar : "https://cdn.itemsatis.com/avatar/global/minecraft-erkek.png", PhoneVerify : "1",token : "IyLQm+Vz2wO6RH/l9mM8cmRhb4A3qqQ6Iv3H1VOsNTy0ZH8ST1lPsyr5PVG577LSLI3ZO34wy6Odw1fmmrase5rJHkAg2oEnyy6fluMbyJfvirCJ48FL6KLq9YvpRGpwtV3FYr50T3WOQus9jDhmng==", UserType : "1"};
        </script>
        <script src="dist/js/jquery.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/bootstrap.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="semantic/semantic.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/lazysizes.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/push/push.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>

        <script src="dist/js/owl.carousel.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/phoneInput/intlTelInput.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/purify.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script defer src="dist/js/ItemSatis.js?ver=1216" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script defer src="dist/js/ItemSatisUser.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
        var userMailAddress = "dasdemirdenizcan@gmail.com";
        var Tawk_API=Tawk_API||{};
        Tawk_API.visitor = {
        name : "dasdemirdenizcan",
        email : "dasdemirdenizcan@gmail.com",
        hash : "aef5f78e3e98d48dd6a4af4670fd445314221a23530a837b89967a689573d082"
        };
        
        var Tawk_LoadStart=new Date();
        var deviceIsMobile = false;
        
        </script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            var chatList = false;
        </script>
        <script src="dist/js/socket.io4-4-1.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script defer src="dist/components/AlfaSMS/alfa-sms.js?ver=1216" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script defer src="dist/js/SocketChat.js?ver=1216" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/Chat.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/confetti.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
			gtag('set', 'user_data', {
				"email" : "dasdemirdenizcan@gmail.com",
				"address" : {
					"first_name" : "Deniz",
					"last_name" : "Can",
					"country" : "TR",
					"postal_code" : "34030"
				}
			});
		
        </script>
        <script src="dist/js/multirange.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/icheck.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/quill.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/bootstrap-select.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/i18n/defaults-tr_TR.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/iziModal.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/moment-with-locales.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/jquery-ui.min.js?ver=2" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/jquery.fancybox.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script src="dist/js/jquery.inputmask.min.js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <!--<script src="dist/js/snow.js"></script>-->
        <script defer src="dist/js/newMenu.js?ver=1216" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script id="rendered-js" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
			var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
			(function ()
			{
				var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
				s1.async = true;
								s1.src = 'https://embed.tawk.to/5e8e0b2c35bcbb0c9aaf2bd2/default';
								s1.charset = 'UTF-8';
				s1.setAttribute('crossorigin', '*');
				s0.parentNode.insertBefore(s1, s0);

				Tawk_API.customStyle = {
					visibility : {
						mobile : {
							position : 'br',
							xOffset : 0,
							yOffset : '80px'
						}
					}
				};
			})();
		
        </script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
			var enhanced_conversion_data = {
				"email" : "dasdemirdenizcan@gmail.com",
				"phone_number" : "+905336351714",
				"first_name" : "Deniz",
				"last_name" : "Can"
			};
		
        </script>
        <script type="93da80b67f3194b9c00d3b01-module">
            
			// Import the functions you need from the SDKs you need
			import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-app.js";
			import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-analytics.js";
			// TODO: Add SDKs for Firebase products that you want to use
			// https://firebase.google.com/docs/web/setup#available-libraries

			// Your web app's Firebase configuration
			// For Firebase JS SDK v7.20.0 and later, measurementId is optional
			const firebaseConfig = {
				apiKey : "AIzaSyCnSK9D35IB-cSL7ZHqddS86ulJndg7H3A",
				authDomain : "itemsatis-e98e6.firebaseapp.com",
				databaseURL : "https://itemsatis-e98e6.firebaseio.com",
				projectId : "itemsatis-e98e6",
				storageBucket : "itemsatis-e98e6.firebasestorage.app",
				messagingSenderId : "741027425776",
				appId : "1:741027425776:web:d7826566eca0ea269ec135",
				measurementId : "G-ZN0SH1X916"
			};

			// Initialize Firebase
			const app = initializeApp(firebaseConfig);
			const analytics = getAnalytics(app);
		
        </script>
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            
			messaging.subscribeToTopic(currentToken, "itemsatis")
			         .then((response) =>
			         {
				         // See the MessagingTopicManagementResponse reference documentation
				         // for the contents of response.
				         console.log('Successfully subscribed to topic:', response);
			         })
			         .catch((error) =>
			         {
				         console.log('Error subscribing to topic:', error);
			         });

			messaging.getToken().then(function (currentToken)
			{
								var CookieData = getCookie("fcmBlock_" + currentToken);
				if (currentToken != "" && CookieData != "Reddedildi")
				{
					Swal.fire({
						width : '50em',
						allowOutsideClick : false,
						html : '<img src="https://cdn.itemsatis.com/uploads/admin/WkvV7e4zomPQOjaBfgE89N2YH.png" style="width:96px;"/><br>' +
							'<h3 style="color:white;">Bildirim İzni</h3>' +
							'<p>Görünüşe göre yeni bir cihazdan bağlanıyorsunuz.<br>Bu cihazınızdan hesabınız hakkında bildirim almak ister misiniz?</p>',
						showCancelButton : true,
						cancelButtonText : '<i class="fas fa-bell-slash"></i>&nbsp; Hayır, İstemiyorum',
						confirmButtonText : '<i class="fas fa-check"></i>&nbsp; Evet, Bildirim İsterim'
					}).then((result) =>
					{
						if (result.value)
						{
							$.ajax({
								type : "POST",
								url : "api/updateFcmToken",
								data : "Token=" + currentToken,
								success : function (data)
								{
									data = JSON.parse(data);
								}
							});
						}
						else
						{
							$.ajax({
								type : 'POST',
								url : 'api/updateFcmToken',
								data : "Token=" + currentToken + "&Ignore=1"
							});
							setCookie("fcmBlock_" + currentToken, "Reddedildi", 365);
						}
					});
				}
							});

			messaging.onMessage(function (payload)
			{
				var obj = jQuery.parseJSON(payload.data.notification);
				var notification = new Notification(obj.title, {
					icon : obj.icon,
					body : obj.body
				});
			});

			if (!("Notification" in window))
			{
				console.log("This browser does not support desktop notification");
			}

			// Let's check whether notification permissions have already been granted
			else if (Notification.permission === "granted")
			{
				// If it's okay let's create a notification
				// var notification = new Notification("Hi there!");
			}

			else if (Notification.permission !== 'denied' || Notification.permission === "default")
			{
				Notification.requestPermission(function (permission)
				{
					// If the user accepts, let's create a notification
					if (permission === "granted")
					{
						// var notification = new Notification("Hi there!");
					}
				});
			}
		
        </script>
        <script defer src="dist/page_js/NotificationNew.js?ver=1216" type="93da80b67f3194b9c00d3b01-text/javascript"></script>
        <!-- Yandex.Metrika counter -->
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
             (function (m, e, t, r, i, k, a)
			{
				m[i] = m[i] || function ()
				{
					(m[i].a = m[i].a || []).push(arguments);
				};
				m[i].l = 1 * new Date();
				k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a);
			})(window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");
			ym(62694754, "init", { clickmap : true, trackLinks : true, accurateTrackBounce : true }); 
        </script>
        <noscript>
            <div>
                <img src="https://mc.yandex.ru/watch/62694754" style="position:absolute; left:-9999px;" alt=""/>
            </div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
        <script type="93da80b67f3194b9c00d3b01-text/javascript">
            const blackWordsList = ["adlı","tarafından","sürenizden","ilanınız","satın alınmıştır","ananı","başlıklı","orospu","yarrak","amk","sikeyim","sikerim","annen","ananı","başlattık","ilanınızı","sohbetinizi","unutmayınız","güvenliğiniz","mesajıdır","başlattık.","teslimatı","isimli","satın alan","sistem mesajıdır.","sistem mesajıdır","baslıklı","baslıkli","basliklı","başlıkli","başliklı","ilanınızi","Başlıklı","ılanınızı","sohbetinızi","sohbetinızı","sohbetınizi","sohbetınızi","öneririz","baslikli","adlı","adli","baslıklı","başlamıştır","sohbetiniz","allahını","wamew","wamew.com","unalseymenalsat","barış reus","satın alındı","BerkSaygili","5524788654","https://steamcommunity.com/tradeoffer/new/?partner=1425529798&token=4YPIIF33","ManticoreHardness","steamcommunity.com/tradeoffer/new/?partner=1425529798&token=4YPIIF33","/tradeoffer/new/?partner=1425529798&token=4YPIIF33","4YPIIF33","Banane (Seviye 10)","BerkSaygiIi","Lightingbolt0990","bartukuzey2601","darkwys","bartukuzey26 01","bartukuzey 2601","darkwrs","0531 774 41 62","05317744162","5317744162","5 3 1 7 7 4 4 1 6 2","aldığınızın","başllıklı","satıcıya ilet","Sonteklif.com","Sonteklif","%0 komisyon","whatsapp","wp","takas","playsultan","5347981765","534 798 17 65","support-valorant.com","5366202879","0536 620 2879","536 620 2879","5366202879","05366202879","05366202879"]
        </script>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZVBM9F" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93da80b67f3194b9c00d3b01-|49" defer></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"914124ecdaa250f3","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"825e7e8b90174aadbcd70f3025947e4d"}' crossorigin="anonymous"></script>
    </body>
</html>
