<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>Chris Knoll</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <meta name="description" content="FlexyCodes - FlexyCard vCard Template. Creating my personal page!"/>

        <!-- CSS | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

        <!-- CSS | font-awesome -->
        <!-- Credits: http://fortawesome.github.io/Font-Awesome/icons/ -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

        <!-- CSS | animate -->
        <!-- Credits: http://daneden.github.io/animate.css/ -->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css" />

        <!-- CSS | Normalize -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css" />

        <!-- CSS | Colors -->
        <link rel="stylesheet" type="text/css" href="css/colors/DarkBlue.css" />

        <!-- CSS | Style -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <link rel="stylesheet" type="text/css" href="css/main.css" />

        <!-- CSS | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>

        <!-- CSS | Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <!-- Favicon
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">-->

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="css/icons/font-awesome-ie7.min.css"/>
        <![endif]-->

        <style>
            @media only screen and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
                }
            }
            @media only screen and (min-width : 800px) and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
                    width:89%;
                }
            }

        </style>

    </head>

    <body>

        <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Laoding page -->
        <div id="preloader"><div id="spinner"></div></div>

        <!-- .slideshow -->
        <!--<ul class="cb-slideshow" id="cb_slideshow">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul> -->
        <!-- /.slideshow -->

        <!-- .wrapper -->
        <div class="wrapper">

            <!--- .Content -->
            <section class="tab-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">


                                <div class="col-md-3 widget-profil">
                                    <div class="row">

                                        <!-- Profile Image -->
                                        <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">

                                            <div class="image-holder one" id="pic_prof_1"  style="display:none">

                                                <img class="head-image up circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image up-left circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image left circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image down-left circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image down circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image down-right circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image right circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image up-right circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image front circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />

                                            </div>

                                            <!-- style for simple image profile -->
                                            <div class="circle-img" id="pic_prof_2"></div>

                                        </div>
                                        <!-- End Profile Image -->

                                        <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">

                                            <!-- Profile info -->
                                            <div id="profile_info">
                                                <h1 id="name" class="transition-02">Chris Knoll</h1>
                                                <h4 class="line">SOFTWARE DEVELOPMENT STUDENT</h4>
	                                                <h6><span class="fa fa-map-marker"></span> Renton, WA</h6>
                                            </div>
                                            <!-- End Profile info -->


                                            <!-- Profile Description -->
                                            <div id="profile_desc">
                                                <p>
                                                    An aspiring software developer currently working towards a BAS in Software Development at Green River College.
                                                </p>
                                                <p>
                                                    Motivated by opportunities to help others via technology.
                                                </p>
                                            </div>
                                            <!-- End Profile Description -->


                                            <!-- Name -->
                                            <div id="profile_social">
                                                <h6>My Social Profiles</h6>
																<a href="https://github.com/cknoll3" target="_blank"><i class="fa fa-github"></i></a>
																<a href="https://www.linkedin.com/in/chrisknoll3" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <div class="clear"></div>
                                            </div>
                                            <!-- End Name -->

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                    <!-- verticalTab menu -->
                                    <div id="verticalTab">

                                        <ul class="resp-tabs-list">
                                            <li class="tabs-profile hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile">
                                                <span class="tite-list">profile</span>
                                                <i class="fa fa-user icon_menu icon_menu_active"></i>
                                            </li>

                                            <li class="tabs-resume hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="resume">
                                                <span class="tite-list">resume</span>
                                                <i class="fa fa-tasks icon_menu"></i>
                                            </li>

                                            <li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="portfolio">
                                                <span class="tite-list">portfolio</span>
                                                <i class="fa fa-briefcase icon_menu"></i>
                                            </li>

                                            <li class="tabs-contact hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="contact" style="margin-bottom: 48px !important;">
                                                <span class="tite-list">contact</span>
                                                <i class="fa fa-envelope icon_menu"></i>
                                            </li>

                                          <!-- Print and download buttons
                                            <a href="#" id="print"><i class="fa fa-print icon_print"></i> </a>
                                            <a href="#" id="downlowd"><i class="fa fa-download icon_print"></i> </a>
                                          -->

                                        </ul>
                                        <!-- /resp-tabs-list -->

                                        <!-- resp-tabs-container -->
                                        <div class="resp-tabs-container">
