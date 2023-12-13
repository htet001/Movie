<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}">
    <link href="{{asset('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">


    <link rel='dns-prefetch' href="{{asset('http://fonts.googleapis.com/')}}" />
    <link rel='dns-prefetch' href="{{asset('http://s.w.org/')}}" />
    <link rel="alternate" type="application/rss+xml" title="Elementor Movie News &raquo; Feed"
        href="{{asset('feed/index.html')}}" />
    <link rel="alternate" type="application/rss+xml" title="Elementor Movie News &raquo; Comments Feed"
        href="{{asset('comments/feed/index.html')}}" />
    <script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-movie-news\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.8"
        }
    };
    /*! This file is auto-generated */
    ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode;
            p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (!p || !p.fillText) return !1;
            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                        55356, 56826, 55356, 56819
                    ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                        56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                    ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                        56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                    ]);
                case "emoji":
                    return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
            .readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
                .wpemoji)))
    }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
    img.wp-smiley,
    img.emoji {
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
    <link rel='stylesheet' id='wp-block-library-css'
        href="{{asset('wp-includes/css/dist/block-library/style.mine2db.css?ver=5.9.8')}}" type='text/css'
        media='all' />
    <style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }
    </style>
    <link rel='stylesheet' id='elementor-icons-css'
        href="{{asset('wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0')}}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="{{asset('wp-content/plugins/elementor/assets/css/frontend-lite.min3ab2.css?ver=3.6.5')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-436-css'
        href="{{asset('wp-content/uploads/sites/8/elementor/css/post-436c10b.css?ver=1651886238')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href="{{asset('wp-content/uploads/sites/8/elementor/css/globalc10b.css?ver=1651886238')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-84-css'
        href="{{asset('wp-content/uploads/sites/8/elementor/css/post-8428a3.css?ver=1651894628')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href="{{asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0')}}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='slick-style-css'
        href="{{asset('wp-content/themes/amy-movie/css/vendor/slicke2db.css?ver=5.9.8')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='slick-theme-css'
        href="{{asset('wp-content/themes/amy-movie/css/vendor/slick-themee2db.css?ver=5.9.8')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='fancybox-css'
        href="{{asset('wp-content/themes/amy-movie/css/vendor/jquery.fancyboxf8ee.css?ver=3.5.7')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='tooltipster-css'
        href="{{asset('wp-content/themes/amy-movie/css/vendor/tooltipster.bundle8a54.css?ver=1.0.0')}}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='mCustomScrollbar-css'
        href="{{asset('wp-content/themes/amy-movie/css/vendor/jquery.mCustomScrollbar8a54.css?ver=1.0.0')}}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='plyr-css'
        href="{{asset('wp-content/themes/amy-movie/css/vendor/plyr8a54.css?ver=1.0.0')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='amy-movie-style-css'
        href="{{asset('wp-content/themes/amy-movie/css/style8a54.css?ver=1.0.0')}}" type='text/css' media='all' />
    <style id='amy-movie-style-inline-css' type='text/css'>
    .amy-primary-navigation ul.nav-menu>li>a::after {
        top: 70%;
    }
    </style>
    <link rel='stylesheet' id='csf-google-web-fonts-css'
        href="{{asset('http://fonts.googleapis.com/css?family=Roboto%20Condensed:400,700&amp;display=swap')}}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href="{{asset('https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.8')}}"
        type='text/css' media='all' />
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0')}}"
        id='jquery-core-js'></script>
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2')}}"
        id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="{{asset('wp-json/index.html')}}" />
    <link rel="alternate" type="application/json" href="{{asset('wp-json/wp/v2/pages/84.json')}}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{asset('xmlrpc0db0.php?rsd')}}" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset('wp-includes/wlwmanifest.xml')}}" />
    <meta name="generator" content="WordPress 5.9.8" />
    <link rel="canonical" href="{{asset('index.html')}}" />
    <link rel='shortlink' href="{{asset('index.html')}}" />
    <link rel="alternate" type="application/json+oembed"
        href="{{asset('wp-json/oembed/1.0/embedc340.json?url=http%3A%2F%2Fdemo.amytheme.com%2Fmovie%2Fdemo%2Felementor-movie-news%2F')}}" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{asset('wp-json/oembed/1.0/embed0ee4?url=http%3A%2F%2Fdemo.amytheme.com%2Fmovie%2Fdemo%2Felementor-movie-news%2F&amp;format=xml')}}" />
    <style type="text/css">
    body {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 400;
        font-size: 14px;
    }

    #amy-site-nav .sub-menu .menu-item a {
        font-family: "Roboto Condensed";
        font-weight: 700;
        font-size: 15px;
    }

    h1 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 36px;
    }

    h2 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 30px;
    }

    h3 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 24px;
    }

    h4 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 18px;
    }

    h5 {
        font-family: "Roboto Condensed";
        color: #333;
        font-weight: 700;
        font-size: 14px;
    }

    #amy-page-header {
        background-image: url(wp-content/uploads/sites/8/2022/05/img_47.jpg);
    }
    </style>
</head>


</head>

<body>
    @include('layout.nav')
    @yield('content')

    <script src="{{asset('https://code.jquery.com/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>

    <style>
    .wp-container-1 .alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-container-1 .alignright {
        float: right;
        margin-left: 2em;
    }
    </style>
    <style>
    .wp-container-2 .alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-container-2 .alignright {
        float: right;
        margin-left: 2em;
    }
    </style>
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1')}}"
        id='jquery-ui-core-js'>
    </script>
    <script type='text/javascript' src="{{asset('wp-content/themes/amy-movie/js/vendor/slick.minaff7.js?ver=1.6.0')}}"
        id='slick-js'>
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/isotope.pkgd41fe.js?ver=3.0.1')}}" id='isotope-pkd-js'>
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/masonry-horizontal001e.js?ver=2.0.0')}}"
        id='masonry-horizontal-js'></script>
    <script type='text/javascript' src="{{asset('wp-content/themes/amy-movie/js/vendor/kinetic7406.js?ver=2.0.1')}}"
        id='kinetic-js'>
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/smoothdivscroll4e44.js?ver=1.3')}}" id='smooth-scroll-js'>
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/jquery.mousewheel.min2d73.js?ver=3.1.11')}}"
        id='mousewheel-js'></script>
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/ui/datepicker.min0028.js?ver=1.13.1')}}"
        id='jquery-ui-datepicker-js'></script>
    <script type='text/javascript' id='jquery-ui-datepicker-js-after'>
    jQuery(function(jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                "Nov", "Dec"
            ],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/jquery.fancyboxf8ee.js?ver=3.5.7')}}" id='fancybox-js'>
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/bootstrap-tabe485.js?ver=3.3.6')}}" id='bootstrap-tab-js'>
    </script>
    <script type='text/javascript' src="{{asset('wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4')}}"
        id='imagesloaded-js'></script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/tooltipster.bundle8a54.js?ver=1.0.0')}}"
        id='tooltipster-js'></script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/jquery.waterwheelCarousela1ec.js?ver=2.3.0')}}"
        id='waterwheelCarousel-js'></script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/TweenMax.min24fc.js?ver=1.15.1')}}" id='TweenMax-js'>
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/themes/amy-movie/js/vendor/jquery.mCustomScrollbarc6bd.js?ver=3.1.5')}}"
        id='mCustomScrollbar-js'></script>
    <script type='text/javascript' src="{{asset('wp-content/themes/amy-movie/js/vendor/plyr8a54.js?ver=1.0.0')}}"
        id='plyr-js'>
    </script>
    <script type='text/javascript' src="{{asset('wp-content/themes/amy-movie/js/vendor/reflectiona4e6.js?ver=1.11.0')}}"
        id='reflection-js'></script>
    <script type='text/javascript' id='amy-movie-script-js-extra'>
    /* <![CDATA[ */
    var amy_script = {
        "ajax_url": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-movie-news\/wp-admin\/admin-ajax.php",
        "viewport": "992",
        "site_url": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-movie-news\/",
        "theme_url": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-movie-news\/wp-content\/themes\/amy-movie",
        "enable_fb_login": null,
        "fb_app_id": null,
        "enable_google_login": null,
        "gg_app_id": null,
        "gg_client_id": null,
        "amy_rtl": "",
        "amy_rate_already": "You already rate a movie",
        "amy_rate_done": "You vote done"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src="{{asset('wp-content/themes/amy-movie/js/script8a54.js?ver=1.0.0')}}"
        id='amy-movie-script-js'></script>
    <script type='text/javascript'
        src="{{asset('wp-content/plugins/elementor/assets/js/webpack.runtime.min3ab2.js?ver=3.6.5')}}"
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript'
        src="{{asset('wp-content/plugins/elementor/assets/js/frontend-modules.min3ab2.js?ver=3.6.5')}}"
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript'
        src="{{asset('wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}"
        id='elementor-waypoints-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.6.5",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "e_import_export": true,
            "additional_custom_breakpoints": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-movie-news\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 84,
            "title": "Elementor%20Movie%20News%20%E2%80%93%20Just%20another%20Amy%20Movie%20Sites%20site",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script type='text/javascript'
        src="{{asset('wp-content/plugins/elementor/assets/js/frontend.min3ab2.js?ver=3.6.5')}}"
        id='elementor-frontend-js'></script>
    <script src="{{asset('custom.js')}}"></script>
    <script src="{{asset('adminjs')}}"></script>

</body>
<footer>
    @include('layout.footer')
</footer>

</html>