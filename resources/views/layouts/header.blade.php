<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">





<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
<!-- Favicon-->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}" >


<!-- Waves Effect Css -->
<link rel="stylesheet" href="{{ asset('admin/css/waves.css') }}" >


<!-- Animation Css -->
<link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}" >


<!-- Morris Chart Css-->
<link rel="stylesheet" href="{{ asset('admin/css/morris.css') }}" >


<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" >


<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link rel="stylesheet" href="{{ asset('admin/css/all-themes.css') }}" >
<link rel="stylesheet" href="{{ asset('admin/css/sweetalert.css') }}" >


</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
<div class="loader">
<div class="preloader">
<div class="spinner-layer pl-red">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
<p>Please wait...</p>
</div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
<div class="search-icon">
<i class="material-icons">search</i>
</div>
<input type="text" placeholder="START TYPING...">
<div class="close-search">
<i class="material-icons">close</i>
</div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
<div class="container-fluid">
<div class="navbar-header">
<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
<a href="javascript:void(0);" class="bars"></a>
<a class="navbar-brand" href="index.html">{{ Auth::user()->name }}'s Portfolio</a>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<!-- Call Search -->
<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
<!-- #END# Call Search -->
<!-- Notifications -->
<!-- #END# Notifications -->
<!-- Tasks -->
<!-- #END# Tasks -->
<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
</ul>
</div>
</div>
</nav>
<!-- #Top Bar -->
<section>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
<!-- User Info -->
<div class="user-info" >
<div class="image">
<img src="{{ asset('/images/'.Auth::user()->image) }}" width="48" height="48" alt="User" />
</div>
<div class="info-container">
<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} &nbsp{{ Auth::user()->surname }} </div>
<div class="email">{{ Auth::user()->email }}</div>
<div class="btn-group user-helper-dropdown">
<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
<ul class="dropdown-menu pull-right">
<li><a href="{{route('user.edit',['user' =>Auth::user()->id ])}}"><i class="material-icons">person</i>Profile</a></li>
<li role="separator" class="divider"></li>
<li role="separator" class="divider"></li>
<li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
         <button type="submit" class="btn btn-primary m-t-15 waves-effect">Sign out</button>

    </form>
</li>
</ul>
</div>
</div>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
<ul class="list">
<li class="header">MAIN NAVIGATION</li>
<li class="active">
<a href="{{url('/admin/home')}}">
<i class="material-icons">home</i>
<span>Home</span>
</a>
</li>




    <li>
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">view_list</i>
<span>Social</span>
</a>
<ul class="ml-menu">
<li>
<a href="{{ route('social.create') }}">Create</a>
</li>
<li>
<a href="{{ route('social.index') }}">Show</a>
</li>
</ul>
</li>
<li>
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">view_list</i>
<span>Services</span>
</a>
<ul class="ml-menu">
<li>
<a href="{{ route('service.create') }}">Create</a>
</li>
<li>
<a href="{{ route('service.index') }}">Show</a>
</li>
</ul>
</li>
<li>
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">view_list</i>
<span>Portfolios</span>
</a>
<ul class="ml-menu">
    <li>
        <a href="{{ route('portfolio.create') }}">Create</a>
    </li>
    <li>
        <a href="{{ route('portfolio.index') }}">Show</a>
    </li>
</ul>
</li>
<li>
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">view_list</i>
<span>Catagory</span>
</a>
<ul class="ml-menu">
    <li>
        <a href="{{ route('category.create') }}">Create</a>
    </li>
    <li>
        <a href="{{ route('category.index') }}">Show</a>
    </li>
</ul>
</li>
<li>
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">view_list</i>
<span>About</span>
</a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('about.create') }}">Create</a>
        </li>
        <li>
            <a href="{{ route('about.index') }}">Show</a>
        </li>
    </ul>
</li>

    <li>
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">view_list</i>
            <span>News</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="{{ route('news.create') }}">Create</a>
            </li>
            <li>
                <a href="{{ route('news.index') }}">Show</a>
            </li>
        </ul>
    </li>


</ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
<div class="copyright">
&copy; {{ date('Y') }} <a href="javascript:void(0);">{{ Auth::user()->name }}</a>.
</div>
<div class="version">

</div>
</div>
<!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
<ul class="nav nav-tabs tab-nav-right" role="tablist">
<li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
<ul class="demo-choose-skin">
<li data-theme="red" class="active">
<div class="red"></div>
<span>Red</span>
</li>
<li data-theme="pink">
<div class="pink"></div>
<span>Pink</span>
</li>
<li data-theme="purple">
<div class="purple"></div>
<span>Purple</span>
</li>
<li data-theme="deep-purple">
<div class="deep-purple"></div>
<span>Deep Purple</span>
</li>
<li data-theme="indigo">
<div class="indigo"></div>
<span>Indigo</span>
</li>
<li data-theme="blue">
<div class="blue"></div>
<span>Blue</span>
</li>
<li data-theme="light-blue">
<div class="light-blue"></div>
<span>Light Blue</span>
</li>
<li data-theme="cyan">
<div class="cyan"></div>
<span>Cyan</span>
</li>
<li data-theme="teal">
<div class="teal"></div>
<span>Teal</span>
</li>
<li data-theme="green">
<div class="green"></div>
<span>Green</span>
</li>
<li data-theme="light-green">
<div class="light-green"></div>
<span>Light Green</span>
</li>
<li data-theme="lime">
<div class="lime"></div>
<span>Lime</span>
</li>
<li data-theme="yellow">
<div class="yellow"></div>
<span>Yellow</span>
</li>
<li data-theme="amber">
<div class="amber"></div>
<span>Amber</span>
</li>
<li data-theme="orange">
<div class="orange"></div>
<span>Orange</span>
</li>
<li data-theme="deep-orange">
<div class="deep-orange"></div>
<span>Deep Orange</span>
</li>
<li data-theme="brown">
<div class="brown"></div>
<span>Brown</span>
</li>
<li data-theme="grey">
<div class="grey"></div>
<span>Grey</span>
</li>
<li data-theme="blue-grey">
<div class="blue-grey"></div>
<span>Blue Grey</span>
</li>
<li data-theme="black">
<div class="black"></div>
<span>Black</span>
</li>
</ul>
</div>
<div role="tabpanel" class="tab-pane fade" id="settings">
<div class="demo-settings">
<p>GENERAL SETTINGS</p>
<ul class="setting-list">
<li>
<span>Report Panel Usage</span>
<div class="switch">
<label><input type="checkbox" checked><span class="lever"></span></label>
</div>
</li>
<li>
<span>Email Redirect</span>
<div class="switch">
<label><input type="checkbox"><span class="lever"></span></label>
</div>
</li>
</ul>
<p>SYSTEM SETTINGS</p>
<ul class="setting-list">
<li>
<span>Notifications</span>
<div class="switch">
<label><input type="checkbox" checked><span class="lever"></span></label>
</div>
</li>
<li>
<span>Auto Updates</span>
<div class="switch">
<label><input type="checkbox" checked><span class="lever"></span></label>
</div>
</li>
</ul>
<p>ACCOUNT SETTINGS</p>
<ul class="setting-list">
<li>
<span>Offline</span>
<div class="switch">
<label><input type="checkbox"><span class="lever"></span></label>
</div>
</li>
<li>
<span>Location Permission</span>
<div class="switch">
<label><input type="checkbox" checked><span class="lever"></span></label>
</div>
</li>
</ul>
</div>
</div>
</div>
</aside>
<!-- #END# Right Sidebar -->
</section>