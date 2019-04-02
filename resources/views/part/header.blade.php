<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 16:03:55 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>MOOCs AFGHANISTAN</title>

    <!-- Favicons-->
    <link rel="icon" href="{!! asset('links/images/favicon/favicon-32x32.png') !!}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{!! asset('links/images/favicon/apple-touch-icon-152x152.png') !!}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{!! asset('links/images/favicon/mstile-144x144.png') !!}">
    <!-- For Windows Phone -->

    <link href="{!! asset('links/css/bootstarp.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- CORE CSS-->    
    <link href="{!! asset('links/css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{!! asset('links/css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="{!! asset('links/css/custom-style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">    
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="{!! asset('links/css/style-horizontal.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{!! asset('links/js/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{!! asset('links/js/plugins/jvectormap/jquery-jvectormap.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{!! asset('links/js/plugins/chartist-js/chartist.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{!! asset('links/css/form_wizard.css')!!}" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
  

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="right">
                      <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li>
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="{!! asset('links/images/materialize-logo.png') !!}" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="left hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- HORIZONTL NAV START-->
             <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="index" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>داشبورډ</span>
                        </a>
                    </li>
                    <li>
                        <a href="app-email" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>ایمیل</span>
                        </a>
                    </li>                    
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="CSSdropdown">
                            <i class="mdi-action-invert-colors"></i>
                            <span>کورسونه<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Formsdropdown">
                            <i class="mdi-editor-insert-comment"></i>
                            <span>کورس اضافه کول<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="eCommersdropdown">
                            <i class="mdi-action-shopping-cart"></i>
                            <span>شهادت نامه<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>                    
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>Users<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    
                    
                  </ul>
                </div>
              </nav>

                <!-- CSSdropdown -->
                <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="css-media" class="cyan-text">Media۱</a></li>                  
                  <li><a href="css-media" class="cyan-text">Media۲</a></li>                  
                  
                </ul>

                <!-- Formsdropdown -->
                <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="course" class="cyan-text">نوی کورس</a></li>
                </ul>


                <!-- eCommers -->
                <ul id="eCommersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="eCommerce-invoice"  class="cyan-text">Invoice</a></li>
                </ul>

                <!-- Usersdropdown -->
                <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="user-profile-page"  class="cyan-text">User Profile</a></li>
                    <li><a href="user-login"  class="cyan-text">Login</a></li>
                    <li><a href="user-register" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password" class="cyan-text">Forgot Password</a></li>                    
                    <li><a href="user-lock-screen" class="cyan-text">Lock Screen</a></li>
                </ul>
            <!-- HORIZONTL NAV END-->

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->
