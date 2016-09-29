<!--{{ use('yii/web/JqueryAsset') }}-->
<!--{{ register_jquery_asset() }}-->
<!--{% set networkData = _Network.getNetworkData() %}-->
<!--{% set blogData = _Blog.getBlog() %}-->
<!--{% set blogSettings = _Blog.getBlogSettings() %}-->
<!--{{ this.beginPage() }}-->
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <title></title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--{% set primaryFont = networkData['styling']['fonts']['primaryFont'] %}-->
    <!--{% set secFont = networkData['styling']['fonts']['secondaryFont'] %}-->

    <!--{% if primaryFont != "" %}-->
    <!--<link href='https://fonts.googleapis.com/css?family={{primaryFont}}:{{networkData['styling']['fonts']['primaryFontVariants']}}' rel='stylesheet' type='text/css'>-->
    <!--{% endif %}-->
    <!--{% if secFont != "" %}-->
    <!--<link href='https://fonts.googleapis.com/css?family={{secFont}}:{{networkData['styling']['fonts']['secondaryFontVariants']}}' rel='stylesheet' type='text/css'>-->
    <!--{% endif %}-->

    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Open+Sans:400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="index.css" type="text/css" media="all">

    <link type="text/css" rel="stylesheet" href="js/plugins/jquery.fancybox/source/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet" href="js/plugins/jquery.noty-2.3.8/demo/animate.css" />
    <link type="text/css" rel="stylesheet" href="js/share/css/social-share.css" />

    <!--{% set themeColors = networkData['styling']['colours'] %}-->
    <style>
        /*{% if primaryFont != "" %}*/
        body, .body, p, a.header__navigation-link {
            font-family: "Open Sans", sans-serif !important;
        }
        /*{% endif %}*/
        /*{% if secFont != "" %}*/
        h1, h2, h3, h4, h5 {
            font-family: "Droid Serif", serif !important;
        }
        /*{% endif %}*/
        /*{% if themeColors.linkColor != "" %}*/
        /*a {*/
        /*color: #4B4B4B !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.linkHoverColor != "" %}*/
        /*a:hover {*/
        /*color: {{themeColors.linkHoverColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.headingColor != "" %}*/
        /*h1, h2, h3, h4, h5 {*/
        /*color: {{themeColors.headingColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.navigationColor != "" %}*/
        /*.header__search-text, a.header__navigation-link {*/
        /*color: {{themeColors.navigationColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.navigationHoverColor != "" %}*/
        /*a.header__navigation-link:hover {*/
        /*color: {{themeColors.navigationHoverColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.navigationActiveColor != "" %}*/
        /*a.header__navigation-link.header__navigation-selected {*/
        /*color: {{themeColors.navigationActiveColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.navigationBgColor != "" %}*/
        /*.header__navigation {*/
        /*background-color: {{themeColors.navigationBgColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.headerBgColor != "" %}*/
        /*.header__heading {*/
        /*background-color: {{themeColors.headerBgColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.footerBgColor != "" %}*/
        /*.footer {*/
        /*background-color: {{themeColors.footerBgColor}} !important;*/
        /*}*/
        /*{% endif %}*/
        /*{% if themeColors.pageBgColor != "" %}*/
        /*.body, .body > .section {*/
        /*background-color: {{themeColors.pageBgColor}} !important;*/
        /*}*/
        /*{% endif %}*/

        /*{% set customCss = networkData['styling']['customStyleSheet'] %}*/
        /*{% if customCss != "" %}*/
        /*{{customCss}}*/
        /*{% endif %}*/
    </style>

    <!--{% if blogSettings.GoogleAnalyticsID != "" %}-->
    <!--&lt;!&ndash; Google Analytics &ndash;&gt;-->
    <!--<script>-->
    <!--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
    <!--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
    <!--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
    <!--})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');-->

    <!--ga('create', '{{blogSettings.GoogleAnalyticsID}}', 'auto');-->
    <!--ga('send', 'pageview');-->
    <!--</script>-->
    <!-- End Google Analytics -->
    <!--{% endif %}-->

    <!--{{ this.head() }}-->
</head>
<body class="body {{_Page.getBodyClass()}}">
<!--{{ this.beginBody() }}-->

<!--&lt;!&ndash; Google Tag Manager &ndash;&gt;-->
<!--{% if networkData.thirdPartyIntegrations['googleTagManager'] | length > 0 %}-->
<!--{{networkData.thirdPartyIntegrations['googleTagManager']['code'] | raw}}-->
<!--{% endif %}-->

<header class="header">
    <div class="header__heading header__container">
        <div class="header__heading-highlight"></div>

        <!--{% if not  _User.isGuest() %}-->
        <!--{% set user = _User.getUser() %}-->
        <div id="header__menu">
            <div class="profile__container">
                <div class="profile__menu">
                    <div class="profile__menu-image" style="background-image:url('https://unsplash.it/80');"></div>
                    <div class="profile__menu-content">
                        <div class="profile__menu-name">Amos Whitewolf</div>
                        <div class="profile__menu-email">amoswhitewolf@gmail.com</div>
                        <a href="{{_AppHelper.buildUrl('user/my-news')}}" class="profile__menu-button">My News</a>
                    </div>
                    <ul class="profile__menu-navigation">
                        <li><a class="profile__menu-navigation-link" href="{{blogData.url}}/profile/{{user.username}}">Profile</a></li>
                        <li><a class="profile__menu-navigation-link" href="http://{{network.defaultDomain['domain']}}/user/edit-profile">Settings</a></li>
                        <li><a class="profile__menu-navigation-link" href="{{_AppHelper.getLogoffUrl()}}">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--{% else %}-->
        <!--<div id="header__menu">-->
        <!--<div class="profile__menu">-->
        <!--<ul class="profile__menu-navigation">-->
        <!--<li><a class="profile__menu-navigation-link" href="{{_AppHelper.getLoginUrl()}}">Sign up/Login</a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>-->
        <!--{% endif %}-->

        <div class="header__heading-container">
            <div class="header__heading--left">
                <!--{% if networkData.logoMedia | length > 0 %}-->
                <a class="header__heading-logo" href=""><img src="https://unsplash.it/225/50" /></a>
                <!--{% endif %}-->
            </div>
            <div class="header__heading--right">
                <div class="header__heading-icons">
                    <!--{% set profileImage = ''%}-->
                    <!--{% if not _User.isGuest()%}-->
                    <!--{% set user = _User.getUser()%}-->
                    <!--{% if user.profileMedia | length > 0 and user.profileMedia.id != '' %}-->
                    <!--{% set profileImage = _Media.getMediaUrl(user.profileMedia, 150, 150, {radius: 'max', gravity: 'face', 'crop': 'thumb'})%}-->
                    <!--{% endif %}-->
                    <!--{% endif %}-->

                    <a href="javascript:void(0)"
                       class="header__heading-link header__heading-link--profile"
                       id="profile">
                        <!--{% if profileImage != ''%} style="background-image:url({{profileImage}})" {% endif %}-->
                        <!--{% if _User.isGuest()%} style="background-image: none;" {% endif %}>-->
                        <!--{% if _User.isGuest()%} Signup / Login {% endif %}-->
                        <!--Signup / Login-->
                    </a>

                    <a href="javascript:void(0)" class="header__heading-link header__heading-link--responsive"></a>
                </div>

                <div class="header__heading--visible_desktop">
                    <a href="#" class="header__heading-link" id="login">Sign In</a>
                    <div class="header__search">
                        <form action="{{blog.url}}/search" method="get">
                            <input type="text" class="header__search-text" placeholder="Search ..." name="s" value="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__navigation-responsive">
        Menu
    </div>
    <div class="header__navigation">
        <div class="container">
            <div class="header__navigation-row">
                <ul class="header__navigation-list">
                    <li class="header__navigation-item"><a href="{{homeUrl}}" class="header__navigation-link header__navigation-selected">Home</a></li>
                    <li class="header__navigation-item">
                        <a href="/" class="header__navigation-link">
                            Experts
                        </a>
                    </li>
                    <li class="header__navigation-item">
                        <a href="/" class="header__navigation-link">
                            Style
                        </a>
                    </li>
                    <li class="header__navigation-item">
                        <a href="/" class="header__navigation-link">
                            Fashion
                        </a>
                    </li>
                    <li class="header__navigation-item">
                        <a href="/" class="header__navigation-link">
                            Beauty
                        </a>
                    </li>
                    <li class="header__navigation-item">
                        <a href="/" class="header__navigation-link">
                            Celebrity
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="side-navigation">
        <form method="get">
            <input type="text" class="side-navigation__search" placeholder="Search" name="s">
        </form>
        <ul class="side-navigation__list">
            <li class="side-navigation__item"><a class="side-navigation__link side-navigation__selected" href="{{blog.url}}">Home</a></li>
            <li class="side-navigation__item">
                <a href="/" class="side-navigation__link">
                    Experts
                </a>
            </li>
            <li class="side-navigation__item">
                <a href="/" class="side-navigation__link">
                    Style
                </a>
            </li>
            <li class="side-navigation__item">
                <a href="/" class="side-navigation__link">
                    Fashion
                </a>
            </li>
            <li class="side-navigation__item">
                <a href="/" class="side-navigation__link">
                    Beauty
                </a>
            </li>
            <li class="side-navigation__item">
                <a href="/" class="side-navigation__link">
                    Celebrity
                </a>
            </li>
        </ul>
    </div>
</header>

<!--{{ set(this, 'title', article.title) }}-->

<!--{{this.registerJs("$('.playVideo').videoPlayer({});")}}-->

<!--{% set status = 'follow' %}-->
<!--{% set text = 'Follow +' %}-->
<!--{% if not _User.isGuset() and _User.isUserFollowing('blog', article.blog['id'])%}-->
<!--{% set status = 'unfollow' %}-->
<!--{% set text = 'Following -' %}-->
<!--{% endif %}-->

<!--{% set userFollowClass = 'card__avatar-follow'%}-->
<!--{% if not _User.isGuset() and _User.isUserFollowing('user', article.createdBy['id'])%}-->
<!--{% set userFollowClass = 'card__avatar-unfollow' %}-->
<!--{% endif %}-->
