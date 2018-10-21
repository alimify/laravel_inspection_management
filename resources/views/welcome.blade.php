<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Nice admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('backend/'.'assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/'.'assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('backend/'.'dist/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('backend/'.'assets/libs/extra/html5shiv.js')}}"></script>
    <script src="{{asset('backend/'.'assets/libs/extra/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <a href="index.html" class="logo">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                    </a>
                    <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto">
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown border-right">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell-outline font-22"></i>
                            <span class="badge badge-pill badge-info noti">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                            <ul class="list-style-none">
                                <li>
                                    <div class="drop-title bg-primary text-white">
                                        <h4 class="mb-0 m-t-5">4 New</h4>
                                        <span class="font-light">Notifications</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center notifications">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Luanch Admin</h5>
                                                <span class="mail-desc">Just see the my new admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle">
                                                    <i class="ti-calendar"></i>
                                                </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Event today</h5>
                                                <span class="mail-desc">Just a reminder that you have event</span>
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle">
                                                    <i class="ti-settings"></i>
                                                </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Settings</h5>
                                                <span class="mail-desc">You can customize this template as you want</span>
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center m-b-5" href="javascript:void(0);">
                                        <strong>Check all notifications</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="40">
                            <span class="m-l-5 font-medium d-none d-sm-inline-block">Jonathan Doe <i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class="">
                                    <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="60">
                                </div>
                                <div class="m-l-10">
                                    <h4 class="mb-0">Jonathan Doe</h4>
                                    <p class=" mb-0">jon@gmail.com</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="p-l-30 p-10">
                                <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                            </div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Dashboard </span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Task </span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Client </span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">User </span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">System Setting </span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <i class="mdi mdi-emoticon font-20 text-info"></i>
                                    <p class="font-16 m-b-5">New Clients</p>
                                </div>
                                <div class="col-5">
                                    <h1 class="font-light text-right mb-0">23</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <i class="mdi mdi-image font-20 text-success"></i>
                                    <p class="font-16 m-b-5">New Projects</p>
                                </div>
                                <div class="col-5">
                                    <h1 class="font-light text-right mb-0">169</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <i class="mdi mdi-currency-eur font-20 text-purple"></i>
                                    <p class="font-16 m-b-5">New Invoices</p>
                                </div>
                                <div class="col-5">
                                    <h1 class="font-light text-right mb-0">157</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <i class="mdi mdi-poll font-20 text-danger"></i>
                                    <p class="font-16 m-b-5">New Sales</p>
                                </div>
                                <div class="col-5">
                                    <h1 class="font-light text-right mb-0">236</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Sales Ratio</h4>
                                </div>
                                <div class="ml-auto">
                                    <div class="dl m-b-10">
                                        <select class="custom-select border-0 text-muted">
                                            <option value="0" selected="">August 2018</option>
                                            <option value="1">May 2018</option>
                                            <option value="2">March 2018</option>
                                            <option value="3">June 2018</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sales5 ct-charts m-t-30"></div>
                            <ul class="list-inline m-t-30 text-center font-12">
                                <li class="list-inline-item text-muted"><i class="fa fa-circle text-info m-r-5"></i> Xtreme Admin</li>
                                <li class="list-inline-item text-muted"><i class="fa fa-circle text-success m-r-5"></i> MaterialPro Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-info">
                        <div class="card-body mb-0">
                            <h4 class="card-title text-white">Thursday <span class="font-14 font-normal text-white op-5">12th April, 2018</span></h4>
                            <div class="d-flex align-items-center flex-row m-t-30">
                                <h1 class="font-light text-white"><i class="wi wi-day-sleet"></i> <span>35<sup>°</sup></span></h1>
                            </div>
                        </div>
                        <div class="weather-report" style="height:78px; width:100%;"></div>
                    </div>
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="card-title text-white">Users</h4>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="font-light text-white">35,658</h2>
                                </div>
                            </div>
                            <div class="m-t-20 m-b-10">
                                <ul class="list-style-none m-t-10">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="mb-0 font-medium text-white">58% <span class="font-normal font-14 text-white op-5 m-l-5">New Users</span></h4>
                                            </div>
                                        </div>
                                        <div class="progress m-t-10 user-progress-bg">
                                            <div class="progress-bar bg-white" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="m-t-30">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="mb-0 font-medium text-white">16% <span class="font-normal font-14 text-white op-5 m-l-5">Repeat Users</span></h4>
                                            </div>
                                        </div>
                                        <div class="progress m-t-10 user-progress-bg">
                                            <div class="progress-bar bg-white" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Ravenue - page-view-bounce rate -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Campaign Status</h4>
                            <div class="status m-t-30" style="height:280px; width:100%"></div>

                            <div class="row">
                                <div class="col-4 border-right">
                                    <i class="fa fa-circle text-primary"></i>
                                    <h4 class="mb-0 font-medium">5489</h4>
                                    <span>Success</span>
                                </div>
                                <div class="col-4 border-right p-l-20">
                                    <i class="fa fa-circle text-info"></i>
                                    <h4 class="mb-0 font-medium">954</h4>
                                    <span>Pending</span>
                                </div>
                                <div class="col-4 p-l-20">
                                    <i class="fa fa-circle text-success"></i>
                                    <h4 class="mb-0 font-medium">736</h4>
                                    <span>Failed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Yearly Comparison</h4>
                                </div>
                                <div class="ml-auto">
                                    <div class="dl m-b-10">
                                        <select class="custom-select border-0 text-muted">
                                            <option value="0" selected="">2018</option>
                                            <option value="1">2015</option>
                                            <option value="2">2016</option>
                                            <option value="3">2017</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chart1 m-t-40" style="position: relative; height:250px;"></div>
                            <ul class="list-inline m-t-30 text-center font-12">
                                <li class="list-inline-item text-muted"><i class="fa fa-circle text-info m-r-5"></i> This Year</li>
                                <li class="list-inline-item text-muted"><i class="fa fa-circle text-light m-r-5"></i> Last Year</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Ravenue - page-view-bounce rate -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and todo -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Comments</h4>
                        </div>
                        <div class="comment-widgets scrollable" style="height:430px;">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2">
                                    <img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <span class="label label-rounded label-primary">Pending</span>
                                        <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2">
                                    <img src="../../assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer ">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <span class="label label-success label-rounded">Approved</span>
                                        <span class="action-icons active">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="icon-close"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart text-danger"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2">
                                    <img src="../../assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Johnathan Doeting</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <span class="label label-rounded label-danger">Rejected</span>
                                        <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2">
                                    <img src="../../assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Steve Jobs</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <span class="label label-rounded label-primary">Pending</span>
                                        <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center p-b-15">
                                <div>
                                    <h4 class="card-title mb-0">To Do List</h4>
                                </div>
                                <div class="ml-auto">
                                    <div class="dl">
                                        <select class="custom-select border-0 text-muted">
                                            <option value="0" selected="">August 2018</option>
                                            <option value="1">May 2018</option>
                                            <option value="2">March 2018</option>
                                            <option value="3">June 2018</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="todo-widget scrollable" style="height:422px;">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label todo-label" for="customCheck">
                                                <span class="todo-desc">Simply dummy text of the printing and typesetting</span> <span class="badge badge-pill badge-success float-right">Project</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label todo-label" for="customCheck1">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</span><span class="badge badge-pill badge-danger float-right">Project</span>
                                            </label>
                                        </div>

                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label todo-label" for="customCheck2">
                                                <span class="todo-desc">Ipsum is simply dummy text of the printing</span> <span class="badge badge-pill badge-info float-right">Project</span>
                                            </label>
                                        </div>

                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label todo-label" for="customCheck3">
                                                <span class="todo-desc">Simply dummy text of the printing and typesetting</span> <span class="badge badge-pill badge-info float-right">Project</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label todo-label" for="customCheck4">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</span> <span class="badge badge-pill badge-purple float-right">Project</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label todo-label" for="customCheck5">
                                                <span class="todo-desc">Ipsum is simply dummy text of the printing</span> <span class="badge badge-pill badge-success float-right">Project</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label todo-label" for="customCheck6">
                                                <span class="todo-desc">Simply dummy text of the printing and typesetting</span> <span class="badge badge-pill badge-primary float-right">Project</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Nice admin. Designed and Developed by
            <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->

<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('backend/'.'assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('backend/'.'assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('backend/'.'assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<script src="{{asset('backend/'.'dist/js/app.min.js')}}"></script>
<script src="{{asset('backend/'.'dist/js/app.init.js')}}"></script>
<script src="{{asset('backend/'.'dist/js/app-style-switcher.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('backend/'.'assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('backend/'.'assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('backend/'.'dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('backend/'.'dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('backend/'.'dist/js/custom.js')}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset('backend/'.'assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('backend/'.'assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!--c3 charts -->
<script src="{{asset('backend/'.'assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('backend/'.'assets/extra-libs/c3/c3.min.js')}}"></script>
<script src="{{asset('backend/'.'dist/js/pages/dashboards/dashboard3.js')}}"></script>
</body>

</html>
