<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 08:46:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Zay Sa Yinn')</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{asset('assets/images/Shopping_Logos/shopping_logo.avif')}}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.mine209.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backende209.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/%40icon/dripicons/dripicons.css') }}">

    @yield('custom-css')
</head>

<body class="noteplus-layout  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="index.html" class="header-logo">
                            <img src="{{ asset('assets/images/Shopping_Logos/shopping_logo.avif') }}"
                                class="img-fluid rounded-normal light-logo" alt="logo">

                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="h1-dropdownSearch"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                        aria-labelledby="h1-dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                    placeholder="type here to search...">
                                                <a href="#" class="search-link"><i
                                                        class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown mail-content">
                                    <a href="#" class="search-toggle dropdown-toggle nav-icon-1"
                                        id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="">
                                            <svg width="20" class="svg-icon" id="main-n-010"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </i>
                                        <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu"
                                        aria-labelledby="h1-dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="px-3 pt-0 pb-0">
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="{{ asset('assets/images/user/01.jpg') }}"
                                                                    alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Emma Watson</h5>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit
                                                                    amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="{{ asset('assets/images/user/02.jpg') }}"
                                                                    alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Ashlynn Franci</h5>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit
                                                                    amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="{{ asset('assets/images/user/03.jpg') }}"
                                                                    alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Kianna Carder</h5>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit
                                                                    amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="btn btn-block btn-primary position-relative text-center"
                                                    href="#" role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown mail-content">
                                    <a href="#" class="search-toggle dropdown-toggle nav-icon-1"
                                        id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="">
                                            <svg width="20" class="svg-icon" id="main-n-020"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                            </svg>
                                        </i>
                                        <span class="badge badge-primary count-mail rounded-circle">2</span>
                                        <span class="bg-primary "></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu"
                                        aria-labelledby="h1-dropdownMenuButton004">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="px-3 pt-0 pb-0">
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="{{ asset('assets/images/user/01.jpg') }}"
                                                                    alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Emma Watson</h5>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit
                                                                    amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="{{ asset('assets/images/user/02.jpg') }}"
                                                                    alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Ashlynn Franci</h5>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit
                                                                    amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="{{ asset('assets/images/user/03.jpg') }}"
                                                                    alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Kianna Carder</h5>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit
                                                                    amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="btn btn-block btn-primary position-relative text-center"
                                                    href="#" role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="caption-content">
                                    <a href="#"
                                        class="iq-user-toggle d-flex align-items-center justify-content-between"
                                        id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img src="{{ asset('assets/images/UserImages/' . Auth::user()->profile_img) }}"
                                            class="img-fluid rounded avatar-50" alt="user">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2"
                                        aria-labelledby="h-dropdownMenuButton001">
                                        <a class="dropdown-item mb-2"
                                            href="https://cors-anywhere.herokuapp.com/https://templates.iqonic.design/note-plus/html/assets/vendor/line-awesome/dist/line-awesome/fonts/la-solid-900.woff2">
                                            <i class="lar la-user-circle font-size-20 mr-1"></i>
                                            <span class="mt-2">My Profile</span>
                                        </a>
                                        <a class="dropdown-item mb-2" href="">
                                            <i class="las la-user-edit font-size-20 mr-1"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                        <a class="dropdown-item mb-2" href="">
                                            <i class="las la-user-cog font-size-20 mr-1"></i>
                                            <span>Account Settings</span>
                                        </a>
                                        <a class="dropdown-item" href="">
                                            <i class="las la-user-shield font-size-20 mr-1"></i>
                                            <span>Privacy Settings</span>
                                        </a>
                                        <hr class="my-1">
                                        <a class="dropdown-item" href="{{route('logout')}}">
                                            <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="header-logo">
                    <img src="{{ asset('assets/images/Shopping_Logos/shopping_logo.avif') }}"
                        class="img-fluid rounded-normal light-logo" alt="logo">
                    <h4 class="logo-title ml-3">Zay Sa Yinn</h4>
                </a>
                <div class="iq-menu-bt-sidebar">
                    <i class="las la-times wrapper-menu"></i>
                </div>
            </div>
            <div class="sidebar-caption dropdown">
                <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/images/UserImages/' . Auth::user()->profile_img) }}" class="img-fluid rounded avatar-50 mr-3"
                        alt="user">
                    <div class="caption">
                        <h6 class="mb-0 line-height">{{Auth::user()->name}}</h6>
                    </div>
                    <i class="las la-angle-down"></i>
                </a>
                <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item mb-2" href="">
                        <i class="lar la-user-circle font-size-20 mr-1"></i>
                        <span class="mt-2">My Profile</span>
                    </a>
                    <a class="dropdown-item mb-2" href="">
                        <i class="las la-user-edit font-size-20 mr-1"></i>
                        <span>Edit Profile</span>
                    </a>
                    <a class="dropdown-item mb-2" href="">
                        <i class="las la-user-cog font-size-20 mr-1"></i>
                        <span>Account Settings</span>
                    </a>
                    <a class="dropdown-item mb-3" href="">
                        <i class="las la-user-shield font-size-20 mr-1"></i>
                        <span>Privacy Settings</span>
                    </a>
                    <hr class="my-2">
                    <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <div class="iq-search-bar device-search mb-3">
                    <form action="#" class="searchbox">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <input type="text" class="text search-input" placeholder="Search">
                    </form>
                </div>
                <div class="sidebar-btn dropdown mb-3">
                    <a href="#" id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"
                        class="btn btn-primary pr-5 position-relative iq-user-toggle d-flex align-items-center justify-content-between"
                        style="height: 40px;"><span class="btn-title"><i class="ri-add-line mr-3"></i>Add
                            New</span><span class="note-add-btn" style="height: 40px;"><i
                                class="las la-angle-down"></i></span></a>
                    <div class="dropdown-menu w-100 border-0 py-3" aria-labelledby="dropdownMenuButton01">
                        <a class="dropdown-item mb-2" href="page-new-note5d2b.html?type=blank">
                            <span><i class="ri-sticky-note-line mr-3"></i>Blank Notes</span>
                        </a>
                        <a class="dropdown-item mb-2" href="page-new-note8fb2.html?type=todo">
                            <span><i class="ri-todo-line mr-3"></i>To-do</span>
                        </a>
                        <a class="dropdown-item mb-2" href="page-new-notefbee.html?type=essay">
                            <span><i class="ri-booklet-line mr-3"></i>Essay Notes</span>
                        </a>
                        <a class="dropdown-item" href="page-new-note7ce5.html?type=daily">
                            <span><i class="ri-donut-chart-line mr-3"></i>Daily Reflection</span>
                        </a>
                    </div>
                </div>
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="index.html" class="svg-icon">
                                <i>
                                    <svg class="svg-icon" id="iq-main-1" width="20"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </i>
                                <span>Your Notes</span>
                            </a>
                            <ul id="index" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="#notebooks" class="collapsed svg-icon" data-toggle="collapse"
                                aria-expanded="false">
                                <i>
                                    <svg width="20" class="svg-icon" id="iq-main-2"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                    </svg>
                                </i>
                                <span>Notebooks</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="notebooks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="page-project-plans.html" class="svg-icon">
                                        <i>
                                            <svg width="20" class="svg-icon" id="iq-main-3"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                            </svg>
                                        </i>
                                        <span>Project Plans</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="page-routinenotes.html" class="svg-icon">
                                        <i>
                                            <svg width="20" class="svg-icon" id="iq-main-4"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                            </svg>
                                        </i>
                                        <span>Routine Notes</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="page-planning.html" class="svg-icon">
                                        <i>
                                            <svg width="20" class="svg-icon" id="iq-main-5"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                            </svg>
                                        </i>
                                        <span>Planning</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="page-reminder.html" class="svg-icon">
                                <i>
                                    <svg width="20" class="svg-icon" id="iq-main-6"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </i>
                                <span>Reminder</span>
                            </a>
                        </li>
                        <li class="" data-extra-toggle="right-sidebar">
                            <a href="javascript:void(0);" class="svg-icon">
                                <i>
                                    <svg width="20" class="svg-icon" id="iq-main-7"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                </i>
                                <span>Tags</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="page-bin.html" class="svg-icon">
                                <i>
                                    <svg width="20" class="svg-icon" id="iq-main-8"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </i>
                                <span>Bin</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#otherpage" class="collapsed svg-icon" data-toggle="collapse"
                                aria-expanded="false">
                                <i>
                                    <svg width="20" class="svg-icon" id="iq-main-9"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                    </svg>
                                </i>
                                <span>other page</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="#user" class="collapsed svg-icon" data-toggle="collapse"
                                        aria-expanded="false">
                                        <i class="">
                                            <svg class="svg-icon" id="iq-user-1" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </i>
                                        <span>User Details</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-user-1-1"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </i><span class="">User Profile</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-user-1-2"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                    </svg>
                                                </i><span class="">User Add</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-user-1-3"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                    </svg>
                                                </i><span class="">User List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#ui" class="collapsed svg-icon" data-toggle="collapse"
                                        aria-expanded="false">
                                        <i class="">
                                            <svg class="svg-icon" id="iq-ui-1" width="20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                            </svg>
                                        </i>
                                        <span>UI Elements</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="ui-avatars.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-0"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </i><span class="">Avatars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-alerts.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-1"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                    </svg>
                                                </i><span class="">Alerts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-badges.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-2"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                    </svg>
                                                </i><span class="">Badges</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-breadcrumb.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-3"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                    </svg>
                                                </i><span class="">Breadcrumb</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-buttons.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-4"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                                    </svg>
                                                </i><span class="">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-buttons-group.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-5" width="20"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                    </svg>
                                                </i><span class="">Buttons Group</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-boxshadow.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-6" width="20"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                                    </svg>
                                                </i><span class="">Box Shadow</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-colors.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-7"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                                    </svg>
                                                </i><span class="">Colors</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-cards.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-8"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                    </svg>
                                                </i><span class="">Cards</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-carousel.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-9"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                                    </svg>
                                                </i><span class="">Carousel</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-grid.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-10"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                    </svg>
                                                </i><span class="">Grid</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-helper-classes.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-11" width="20"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                </i><span class="">Helper classes</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-images.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-12"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </i><span class="">Images</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-list-group.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon feather feather-list" id="iq-ui-1-13"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <line x1="8" y1="6" x2="21"
                                                            y2="6"></line>
                                                        <line x1="8" y1="12" x2="21"
                                                            y2="12"></line>
                                                        <line x1="8" y1="18" x2="21"
                                                            y2="18"></line>
                                                        <line x1="3" y1="6" x2="3.01"
                                                            y2="6"></line>
                                                        <line x1="3" y1="12" x2="3.01"
                                                            y2="12"></line>
                                                        <line x1="3" y1="18" x2="3.01"
                                                            y2="18"></line>
                                                    </svg>
                                                </i><span class="">list Group</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-media-object.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-14" width="20"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                    </svg>
                                                </i><span class="">Media</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-modal.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon feather feather-columns" id="iq-ui-1-15"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path
                                                            d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                                                        </path>
                                                    </svg>
                                                </i><span class="">Modal</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-notifications.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-16"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                    </svg>
                                                </i><span class="">Notifications</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-pagination.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-17"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </i><span class="">Pagination</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-popovers.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-18"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="7.5" y1="4.21" x2="7.5"
                                                            y2="4.22" />
                                                        <line x1="4.21" y1="7.5" x2="4.21"
                                                            y2="7.51" />
                                                        <line x1="3" y1="12" x2="3"
                                                            y2="12.01" />
                                                        <line x1="4.21" y1="16.5" x2="4.21"
                                                            y2="16.51" />
                                                        <line x1="7.5" y1="19.79" x2="7.5"
                                                            y2="19.8" />
                                                        <line x1="12" y1="21" x2="12"
                                                            y2="21.01" />
                                                        <line x1="16.5" y1="19.79" x2="16.5"
                                                            y2="19.8" />
                                                        <line x1="19.79" y1="16.5" x2="19.79"
                                                            y2="16.51" />
                                                        <line x1="21" y1="12" x2="21"
                                                            y2="12.01" />
                                                        <line x1="19.79" y1="7.5" x2="19.79"
                                                            y2="7.51" />
                                                        <line x1="16.5" y1="4.21" x2="16.5"
                                                            y2="4.22" />
                                                        <line x1="12" y1="3" x2="12"
                                                            y2="3.01" />
                                                    </svg>
                                                </i><span class="">Popovers</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-progressbars.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon feather feather-hard-drive" id="iq-ui-1-19"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <line x1="22" y1="12" x2="2"
                                                            y2="12"></line>
                                                        <path
                                                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                        </path>
                                                        <line x1="6" y1="16" x2="6.01"
                                                            y2="16"></line>
                                                        <line x1="10" y1="16" x2="10.01"
                                                            y2="16"></line>
                                                    </svg>
                                                </i><span class="">Progressbars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-typography.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-20" width="20"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                                    </svg>
                                                </i>
                                                <span class="">Typography</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-tabs.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-21"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                                    </svg>
                                                </i>
                                                <span class="">Tabs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-tooltips.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-22"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M4 13v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a2 2 0 0 0 6 0v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a8 8 0 0 1 -16 0" />
                                                        <line x1="4" y1="8" x2="9"
                                                            y2="8" />
                                                        <line x1="15" y1="8" x2="19"
                                                            y2="8" />
                                                    </svg>
                                                </i>
                                                <span class="">Tooltips</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ui-embed-video.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-ui-1-23"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                    </svg>
                                                </i>
                                                <span class="">Video</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#auth" class="collapsed svg-icon" data-toggle="collapse"
                                        aria-expanded="false">
                                        <i>
                                            <svg class="svg-icon" id="iq-auth-1" width="20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                            </svg>
                                        </i>
                                        <span>Authentication</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="auth-sign-in.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-auth-1-1" width="20"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                    </svg>
                                                </i>
                                                <span class="">Login</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-auth-1-2" width="20"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                    </svg>
                                                </i>
                                                <span class="">Register</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-recoverpw.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-auth-1-3"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                    </svg>
                                                </i>
                                                <span class="">Recover Password</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-confirm-mail.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-auth-1-4"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                    </svg>
                                                </i>
                                                <span class="">Confirm Mail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-lock-screen.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon feather feather-lock" id="iq-auth-1-5"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <rect x="3" y="11" width="18" height="11"
                                                            rx="2" ry="2"></rect>
                                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                    </svg>
                                                </i>
                                                <span class="">Lock Screen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#pricing" class="collapsed svg-icon" data-toggle="collapse"
                                        aria-expanded="false">
                                        <i>
                                            <svg class="svg-icon" id="iq-extra-1-3"
                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1zm7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a0.5 .5 0 0 1 -.5 -.6l.2 -1.4" />
                                            </svg>
                                        </i>
                                        <span>Pricing</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="pricing.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-extra-1-3-1"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <rect x="4" y="4" width="16" height="16"
                                                            rx="2" />
                                                    </svg>
                                                </i>
                                                <span class="">Pricing 1</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="pricing-1.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-extra-1-3-2"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="12" y1="17" x2="12"
                                                            y2="3" />
                                                        <path d="M15 6l-3 -3l-3 3" />
                                                        <circle cx="12" cy="19" r="2" />
                                                    </svg>
                                                </i>
                                                <span class="">Pricing 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#pages-error" class="collapsed svg-icon" data-toggle="collapse"
                                        aria-expanded="false">
                                        <i class="">
                                            <svg class="svg-icon feather feather-alert-triangle" id="iq-extra-1-4"
                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                                </path>
                                                <line x1="12" y1="9" x2="12"
                                                    y2="13"></line>
                                                <line x1="12" y1="17" x2="12.01"
                                                    y2="17"></line>
                                            </svg>
                                        </i>
                                        <span>Error</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="pages-error.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon feather feather-alert-circle"
                                                        id="iq-extra-1-4-1" xmlns="http://www.w3.org/2000/svg"
                                                        width="20" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="8" x2="12"
                                                            y2="12"></line>
                                                        <line x1="12" y1="16" x2="12.01"
                                                            y2="16"></line>
                                                    </svg>
                                                </i>
                                                <span class="">Error 404</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="pages-error-500.html" class="svg-icon">
                                                <i class="">
                                                    <svg class="svg-icon" id="iq-extra-1-4-2"
                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M9 9v-1a3 3 0 0 1 6 0v1" />
                                                        <path
                                                            d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3" />
                                                        <line x1="3" y1="13" x2="7"
                                                            y2="13" />
                                                        <line x1="17" y1="13" x2="21"
                                                            y2="13" />
                                                        <line x1="12" y1="20" x2="12"
                                                            y2="14" />
                                                        <line x1="4" y1="19" x2="7.35"
                                                            y2="17" />
                                                        <line x1="20" y1="19" x2="16.65"
                                                            y2="17" />
                                                        <line x1="4" y1="7" x2="7.75"
                                                            y2="9.4" />
                                                        <line x1="20" y1="7" x2="16.25"
                                                            y2="9.4" />
                                                    </svg>
                                                </i>
                                                <span class="">Error 500</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="pages-blank-page.html" class="svg-icon">
                                        <i class="">
                                            <svg class="svg-icon" id="iq-extra-1-8"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                            </svg>
                                        </i>
                                        <span>Blank Page</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="pages-maintenance.html" class="svg-icon">
                                        <i class="">
                                            <svg class="svg-icon" id="iq-extra-1-9"
                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="12" cy="7" r="3" />
                                                <circle cx="17" cy="16" r="3" />
                                                <circle cx="7" cy="16" r="3" />
                                            </svg>
                                        </i>
                                        <span>Maintenance</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                    <div class="card rounded shadow-none">
                        <div class="card-body">
                            <div class="sidebarbottom-content">
                                <div class="image"><img src="{{ asset('assets/images/layouts/side-bkg.png') }}"
                                        class="img-fluid" alt="side-bkg"></div>
                                <p class="mb-0">Set Buisness Account To Explore Premiun Features</p>
                                <button type="button" class="btn bg-primary mt-3">Upgrade</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3"></div>
            </div>
        </div>

        <div class="content-page">
            <div class="container-fluid note-details">
                {{-- random content --}}

                @yield('contents')
               

                {{-- random content --}}
               
            </div>
           
          
        </div>

    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="text-secondary mr-1">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>©
                    </span> <a href="#" class="">ZaySaYinn</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>

    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>

    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>

    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 08:46:49 GMT -->

</html>
