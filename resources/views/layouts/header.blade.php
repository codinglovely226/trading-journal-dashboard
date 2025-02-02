<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The only trading journal that helps you find your buddy.">
    <meta name="keywords" content="trading buddy, trading, buy, sell, long, short, web app">
    <meta name="author" content="James">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" type="image/x-icon">
    @yield('title')
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/scrollbar.css') }}">
    @yield('style')
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ url('assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/responsive.css') }}">
    <style>
        .profile-media img{
            width: 37px;
            height: 37px;
            object-fit: cover;
        }
        .profile-vector img{
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 5px solid #fff;
        }
    </style>
</head>

<body onload = "{{ isset($dashboard) ? 'startTime()' : '' }}" class="{{ Auth::user()->darkmode }}">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span>
                                </div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="{{ url('/dashboard') }}"><img class="img-fluid"
                                src="{{ url('assets/images/logo/logo.png') }}" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">
                        {{-- <li class="mega-menu outside"><a class="nav-link" href="#!"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg><span>Switch Accounts</span></a>
                            <div class="mega-menu-container nav-submenu menu-to-be-close header-mega"
                                style="display: none;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col mega-box">
                                            <div class="mobile-title d-none">
                                                <h5>Mega menu</h5><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </div>
                                            <div class="link-section icon">
                                            @php
                                                $subusers1 = DB::table('subusers')->where('user_id', Auth::user()->id)->get();
                                            @endphp
                                                <div>
                                                    <h6>Sub Accounts</h6>
                                                </div>
                                                <ul>
                                                    @foreach($subusers1 as $subuser1)
                                                        <li><a href="{{ url('/change_user/'.$subuser1-> id) }}">{{ $subuser1->username }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        <li class="level-menu outside"><a class="nav-link" href="#!"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg><span>Switch Accounts</span></a>
                            <ul class="header-level-menu menu-to-be-close">
                                @php
                                    $subusers1 = DB::table('subusers')->where('user_id', Auth::user()->id)->get();
                                @endphp
                                @foreach($subusers1 as $subuser1)
                                    <li><a href="{{ url('/change_user/'.$subuser1-> id) }}" data-original-title="" title=""><span>{{ $subuser1->username }}</span></a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="level-menu outside"><a class="nav-link" href="#!"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg><span>Add New</span></a>
                            <ul class="header-level-menu menu-to-be-close">
                                <li><a href="{{ url('new-trade') }}" data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-git-pull-request">
                                            <circle cx="18" cy="18" r="3"></circle>
                                            <circle cx="6" cy="6" r="3"></circle>
                                            <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                            <line x1="6" y1="9" x2="6" y2="21"></line>
                                        </svg><span>Add New Trade </span></a></li>
                                <li><a href="{{ url('/new-account') }}" data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span>Add New Account</span></a>
                                </li>
                                <li><a href="{{ url('/upgrade-subscription') }}" data-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg><span>Upgrade Subscription</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="language-nav">
                            <div class="translate_wrapper">
                                <div class="current_lang">
                                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN
                                        </span></div>
                                </div>
                                <div class="more_lang">
                                    <div class="lang selected" data-value="en"><i
                                            class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span>
                                                (US)</span></span></div>
                                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                                            class="lang-txt">Deutsch</span></div>
                                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                                            class="lang-txt">Español</span></div>
                                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                            class="lang-txt">Français</span></div>
                                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                                            class="lang-txt">Português<span> (BR)</span></span></div>
                                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
                                            class="lang-txt">简体中文</span></div>
                                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                            class="lang-txt">لعربية <span> (ae)</span></span></div>
                                </div>
                            </div>
                        </li>
                        {{-- <li> <span class="header-search"><i data-feather="search"></i></span></li> --}}
                        {{-- <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span
                                    class="badge rounded-pill badge-secondary">4 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                            class="pull-right">10 min.</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <div class="mode"><i class="{{ Auth::user()->darkmode == 'dark-only' ? 'fa fa-lightbulb-o' : 'fa fa-moon-o' }}"></i></div>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10" src="{{ Auth::user()->avatar == '' ? url('assets/images/dashboard/profile.jpg') : url('/').'/'.Auth::user()->avatar }}" alt="profile-image">
                            @php $subscribe = \App\Models\Subscription::find(Auth::user()->id) @endphp
                            @if($subscribe && $subscribe->isActive())
                                @if($subscribe->plan_id < 3)
                                    <span class="badge rounded-pill badge-primary"><i class="icon-star"></i></span>
                                @elseif($subscribe->plan_id < 5)
                                    <span class="badge rounded-pill badge-danger"><i class="icon-star"></i></span>
                                @else
                                    <span class="badge rounded-pill badge-warning"><i class="icon-star"></i></span>
                                @endif
                            @endif
                                <div class="media-body"><span>{{Auth::user()->name}}</span>
                                    <p class="mb-0 font-roboto">{{ Auth::user()->current_user->username }} <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="{{ url('/account-setting') }}"><i
                                            data-feather="user"></i><span>Account</span></a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i data-feather="log-in"> </i><span>{{ __('Logout') }}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{name}</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="{{ url('/dashboard') }}"><img class="img-fluid for-light"
                                src="{{ url('assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                                src="{{ url('assets/images/logo/logo_dark.png') }}" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="{{ url('/dashboard') }}"><img class="img-fluid"
                                src="{{ url('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links pb-5" id="simple-bar">
                                <li class="back-btn"><a href="{{ url('/dashboard') }}"><img class="img-fluid" src="{{ url('assets/images/logo/logo-icon.png') }}" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                {{-- <li class="sidebar-account-balance mb-3">
                                    <div>
                                        <h4 class=""><span id="current_currecny">$</span> <span id="current_balance"> {{ number_format(Auth::user()->current_subsuer->balance) }}</span></h4>
                                        <p class="">ACCOUNT BALANCE</p>
                                    </div>
                                </li> --}}
                                <li class="sidebar-list">
                                    {{-- <label class="badge badge-success">2</label> --}}
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/dashboard') }}"><i data-feather="home"></i><span class="lan-3">Dashboard </span></a></li>
                                <li class="sidebar-main-title"><div><h6 class="lan-10">Analytics</h6><!-- <p class="lan-9">Description</p> --></div></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="pie-chart"></i><span>Analytics</span></a>
                                    <ul class="sidebar-submenu" style="">
                                        <li><a class="" href="{{ url('/analytics') }}" data-bs-original-title="" title="">All</a></li>
                                        <li><a class="" href="{{ url('/analytics-long') }}" data-bs-original-title="" title="">Long</a></li>
                                        <li><a class="" href="{{ url('/analytics-short') }}" data-bs-original-title="" title="">Short</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/symbolanalytics') }}"><i data-feather="bar-chart"></i><span>Symbol Analytics</span></a></li>
                                <li class="sidebar-main-title"><div><h6 class="lan-11">Trades</h6><!-- <p class="lan-9">Description</p> --></div></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/activetrades') }}"><i data-feather="activity"></i><span>Active Trades</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/mytrades') }}"><i data-feather="trending-up"></i><span>My Trades</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/new-trade') }}"><i data-feather="plus"></i><span>Create New Trade</span></a></li>
                                <li class="sidebar-main-title"><div><h6 class="lan-12">Tools</h6><!-- <p class="lan-9">Description</p> --></div></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/notes') }}"><i data-feather="clipboard"></i><span>My Notes</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/ecocal') }}"><i data-feather="calendar"></i><span>Economic News Calendar</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/nationalcal') }}"><i data-feather="command"></i><span>National Holidays Calendar</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/markethour') }}"><i data-feather="clock"></i><span>Market Hours</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/currency') }}"><i data-feather="dollar-sign"></i><span>Currency Indexes</span></a></li>
                                <li class="sidebar-main-title"><div><h6 class="lan-12">Help</h6><!-- <p class="lan-9">Description</p> --></div></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/course') }}"><i data-feather="list"></i><span>Quick Course</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/contactus') }}"><i data-feather="server"></i><span>Contact Us</span></a></li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
