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
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">
        <!-- This page plugin CSS -->
        <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
        <style>
        td.details-control {
        background: url('dist/js/pages/datatable/details_open.png') no-repeat center center;
        cursor: pointer;
        }
        tr.shown td.details-control {
        background: url('dist/js/pages/datatable/details_close.png') no-repeat center center;
        }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
                        <a class="navbar-brand" href="index.php">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
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
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                    <i class="sl-icon-menu font-20"></i>
                                </a>
                            </li>
                            <!-- ============================================================== -->
                            <!-- mega menu -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-gift font-20"></i>
                                </a>
                                <div class="dropdown-menu animated bounceInDown">
                                    <div class="mega-dropdown-menu row">
                                        <div class="col-lg-3 col-xlg-2 m-b-30">
                                            <h5 class="m-b-20">Carousel</h5>
                                            <!-- CAROUSEL -->
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <div class="container p-0">
                                                            <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide">
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="container p-0">
                                                            <img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide">
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="container p-0">
                                                            <img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide">
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                            <!-- End CAROUSEL -->
                                        </div>
                                        <div class="col-lg-3 m-b-30">
                                            <h5 class="m-b-20">Accordion</h5>
                                            <!-- Accordian -->
                                            <div id="accordion">
                                                <div class="card m-b-5">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                        </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card m-b-5">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                        </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card m-b-5">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                        </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3  m-b-30">
                                            <h5 class="m-b-20">Contact Us</h5>
                                            <!-- Contact -->
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Enter email"> </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-info">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-3 col-xlg-4 m-b-30">
                                                    <h5 class="m-b-20">List style</h5>
                                                    <!-- List style -->
                                                    <ul class="list-style-none">
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                            <i class="fa fa-check text-success"></i> You can give link</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                            <i class="fa fa-check text-success"></i> Give link</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                            <i class="fa fa-check text-success"></i> Another Give link</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                            <i class="fa fa-check text-success"></i> Forth link</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                            <i class="fa fa-check text-success"></i> Another fifth link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- End mega menu -->
                                    <!-- ============================================================== -->
                                    <!-- ============================================================== -->
                                    <!-- Comment -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-bell font-20"></i>
                                        </a>
                                        <div class="dropdown-menu mailbox animated bounceInDown">
                                            <span class="with-arrow">
                                                <span class="bg-primary"></span>
                                            </span>
                                            <ul class="list-style-none">
                                                <li>
                                                    <div class="drop-title bg-primary text-white">
                                                        <h4 class="m-b-0 m-t-5">4 New</h4>
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
                                    <!-- Messages -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="font-20 ti-email"></i>
                                        </a>
                                        <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                            <span class="with-arrow">
                                                <span class="bg-danger"></span>
                                            </span>
                                            <ul class="list-style-none">
                                                <li>
                                                    <div class="drop-title bg-danger text-white">
                                                        <h4 class="m-b-0 m-t-5">5 New</h4>
                                                        <span class="font-light">Messages</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="message-center message-body">
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="message-item">
                                                            <span class="user-img">
                                                                <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                                                <span class="profile-status online pull-right"></span>
                                                            </span>
                                                            <div class="mail-contnet">
                                                                <h5 class="message-title">Pavan kumar</h5>
                                                                <span class="mail-desc">Just see the my admin!</span>
                                                                <span class="time">9:30 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="message-item">
                                                            <span class="user-img">
                                                                <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                                                <span class="profile-status busy pull-right"></span>
                                                            </span>
                                                            <div class="mail-contnet">
                                                                <h5 class="message-title">Sonu Nigam</h5>
                                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                                <span class="time">9:10 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="message-item">
                                                            <span class="user-img">
                                                                <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                                                <span class="profile-status away pull-right"></span>
                                                            </span>
                                                            <div class="mail-contnet">
                                                                <h5 class="message-title">Arijit Sinh</h5>
                                                                <span class="mail-desc">I am a singer!</span>
                                                                <span class="time">9:08 AM</span>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="message-item">
                                                            <span class="user-img">
                                                                <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                                                <span class="profile-status offline pull-right"></span>
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
                                                    <a class="nav-link text-center link" href="javascript:void(0);">
                                                        <b>See all e-Mails</b>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- End Messages -->
                                    <!-- ============================================================== -->
                                </ul>
                                <!-- ============================================================== -->
                                <!-- Right side toggle and nav items -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav float-right">
                                    <!-- ============================================================== -->
                                    <!-- Search -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item search-box">
                                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                            <i class="ti-search font-16"></i>
                                        </a>
                                        <form class="app-search position-absolute">
                                            <input type="text" class="form-control" placeholder="Search &amp; enter">
                                            <a class="srh-btn">
                                                <i class="ti-close"></i>
                                            </a>
                                        </form>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- create new -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="flag-icon flag-icon-us font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                                            <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-us"></i> English</a>
                                            <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-fr"></i> French</a>
                                            <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-es"></i> Spanish</a>
                                            <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-de"></i> German</a>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- User profile and search -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                            <span class="with-arrow">
                                                <span class="bg-primary"></span>
                                            </span>
                                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                                <div class="">
                                                    <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" width="60">
                                                </div>
                                                <div class="m-l-10">
                                                    <h4 class="m-b-0">Steave Jobs</h4>
                                                    <p class=" m-b-0">varun@gmail.com</p>
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
                                    <!-- User Profile-->
                                    <li>
                                        <!-- User Profile-->
                                        <div class="user-profile dropdown m-t-20">
                                            <div class="user-pic">
                                                <img src="../assets/images/users/1.jpg" alt="users" class="rounded-circle img-fluid" />
                                            </div>
                                            <div class="user-content hide-menu m-t-10">
                                                <h5 class="m-b-10 user-name font-medium">Steave Jobs</h5>
                                                <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ti-settings"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm">
                                                    <i class="ti-power-off"></i>
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
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
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End User Profile-->
                                    </li>
                                    <!-- User Profile-->
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">Personal</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Car-Wheel"></i>
                                            <span class="hide-menu">Dashboards </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="index.php" class="sidebar-link">
                                                    <i class="icon-Record"></i>
                                                    <span class="hide-menu"> Dashboard 1 </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="index2.php" class="sidebar-link">
                                                    <i class="icon-Record"></i>
                                                    <span class="hide-menu"> Dashboard 2 </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="index3.php" class="sidebar-link">
                                                    <i class="icon-Record"></i>
                                                    <span class="hide-menu"> Dashboard 3 </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">Apps</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Mailbox-Empty"></i>
                                            <span class="hide-menu">Inbox </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="inbox-email.php" class="sidebar-link">
                                                    <i class="mdi mdi-email"></i>
                                                    <span class="hide-menu"> Email </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="inbox-email-detail.php" class="sidebar-link">
                                                    <i class="mdi mdi-email-alert"></i>
                                                    <span class="hide-menu"> Email Detail </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="inbox-email-compose.php" class="sidebar-link">
                                                    <i class="mdi mdi-email-secure"></i>
                                                    <span class="hide-menu"> Email Compose </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Ticket"></i>
                                            <span class="hide-menu">Ticket </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="ticket-list.php" class="sidebar-link">
                                                    <i class="mdi mdi-book-multiple"></i>
                                                    <span class="hide-menu"> Ticket List </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ticket-detail.php" class="sidebar-link">
                                                    <i class="mdi mdi-book-plus"></i>
                                                    <span class="hide-menu"> Ticket Detail </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Sunglasses-Smiley"></i>
                                            <span class="hide-menu">Extra </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="app-chats.php" class="sidebar-link">
                                                    <i class="mdi mdi-comment-processing-outline"></i>
                                                    <span class="hide-menu"> Chats Apps </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="app-calendar.php" class="sidebar-link">
                                                    <i class="mdi mdi-calendar"></i>
                                                    <span class="hide-menu"> Calender </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="app-taskboard.php" class="sidebar-link">
                                                    <i class="mdi mdi-bulletin-board"></i>
                                                    <span class="hide-menu"> Taskboard </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">UI</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Paint-Brush"></i>
                                            <span class="hide-menu">Ui Elements </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="ui-buttons.php" class="sidebar-link">
                                                    <i class="mdi mdi-toggle-switch"></i>
                                                    <span class="hide-menu"> Buttons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-modals.php" class="sidebar-link">
                                                    <i class="mdi mdi-tablet"></i>
                                                    <span class="hide-menu"> Modals</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-tab.php" class="sidebar-link">
                                                    <i class="mdi mdi-sort-variant"></i>
                                                    <span class="hide-menu"> Tab</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-tooltip-popover.php" class="sidebar-link">
                                                    <i class="mdi mdi-image-filter-vintage"></i>
                                                    <span class="hide-menu"> Tooltip &amp; Popover</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-notification.php" class="sidebar-link">
                                                    <i class="mdi mdi-message-bulleted"></i>
                                                    <span class="hide-menu"> Notification</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-progressbar.php" class="sidebar-link">
                                                    <i class="mdi mdi-poll"></i>
                                                    <span class="hide-menu"> Progressbar</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-typography.php" class="sidebar-link">
                                                    <i class="mdi mdi-format-line-spacing"></i>
                                                    <span class="hide-menu"> Typography</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-bootstrap.php" class="sidebar-link">
                                                    <i class="mdi mdi-bootstrap"></i>
                                                    <span class="hide-menu"> Bootstrap Ui</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-breadcrumb.php" class="sidebar-link">
                                                    <i class="mdi mdi-equal"></i>
                                                    <span class="hide-menu"> Breadcrumb</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-list-media.php" class="sidebar-link">
                                                    <i class="mdi mdi-file-video"></i>
                                                    <span class="hide-menu"> List Media</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-grid.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-module"></i>
                                                    <span class="hide-menu"> Grid</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-carousel.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-carousel"></i>
                                                    <span class="hide-menu"> Carousel</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-scrollspy.php" class="sidebar-link">
                                                    <i class="mdi mdi-application"></i>
                                                    <span class="hide-menu"> Scrollspy</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-toasts.php" class="sidebar-link">
                                                    <i class="mdi mdi-application"></i>
                                                    <span class="hide-menu"> Toasts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-spinner.php" class="sidebar-link">
                                                    <i class="mdi mdi-apple-safari"></i>
                                                    <span class="hide-menu"> Spinner</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Folder-Add"></i>
                                            <span class="hide-menu">Cards</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="ui-cards.php" class="sidebar-link">
                                                    <i class="mdi mdi-layers"></i>
                                                    <span class="hide-menu"> Basic Cards</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-card-customs.php" class="sidebar-link">
                                                    <i class="mdi mdi-credit-card-scan"></i>
                                                    <span class="hide-menu">Custom Cards</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-card-weather.php" class="sidebar-link">
                                                    <i class="mdi mdi-weather-fog"></i>
                                                    <span class="hide-menu">Weather Cards</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-card-draggable.php" class="sidebar-link">
                                                    <i class="mdi mdi-bandcamp"></i>
                                                    <span class="hide-menu">Draggable Cards</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Idea-5"></i>
                                            <span class="hide-menu">Components</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="component-sweetalert.php" class="sidebar-link">
                                                    <i class="mdi mdi-layers"></i>
                                                    <span class="hide-menu"> Sweet Alert</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="component-nestable.php" class="sidebar-link">
                                                    <i class="mdi mdi-credit-card-scan"></i>
                                                    <span class="hide-menu">Nestable</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="component-noui-slider.php" class="sidebar-link">
                                                    <i class="mdi mdi-weather-fog"></i>
                                                    <span class="hide-menu">Noui slider</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="component-rating.php" class="sidebar-link">
                                                    <i class="mdi mdi-bandcamp"></i>
                                                    <span class="hide-menu">Rating</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="component-toastr.php" class="sidebar-link">
                                                    <i class="mdi mdi-poll"></i>
                                                    <span class="hide-menu">Toastr</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Wrench"></i>
                                            <span class="hide-menu">Widgets </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="widgets-apps.php" class="sidebar-link">
                                                    <i class="mdi mdi-comment-processing-outline"></i>
                                                    <span class="hide-menu"> Apps Widgets </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="widgets-data.php" class="sidebar-link">
                                                    <i class="mdi mdi-calendar"></i>
                                                    <span class="hide-menu"> Data Widgets </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="widgets-charts.php" class="sidebar-link">
                                                    <i class="mdi mdi-bulletin-board"></i>
                                                    <span class="hide-menu"> Charts Widgets</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Sidebar-Window"></i>
                                            <span class="hide-menu">Sidebar Type </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="sidebar-type-minisidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-quilt"></i>
                                                    <span class="hide-menu"> Minisidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="sidebar-type-iconsidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-parallel"></i>
                                                    <span class="hide-menu"> Icon Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="sidebar-type-overlaysidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-day"></i>
                                                    <span class="hide-menu"> Overlay Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="sidebar-type-fullsidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-array"></i>
                                                    <span class="hide-menu"> Full Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="sidebar-type-horizontalsidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-module"></i>
                                                    <span class="hide-menu"> Horizontal Sidebar </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Files"></i>
                                            <span class="hide-menu">Page Layouts </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse  first-level">
                                            <li class="sidebar-item">
                                                <a href="layout-inner-fixed-left-sidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-format-align-left"></i>
                                                    <span class="hide-menu"> Inner Fixed Left Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="layout-inner-fixed-right-sidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-format-align-right"></i>
                                                    <span class="hide-menu"> Inner Fixed Right Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="layout-inner-left-sidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-format-float-left"></i>
                                                    <span class="hide-menu"> Inner Left Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="layout-inner-right-sidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-format-float-right"></i>
                                                    <span class="hide-menu"> Inner Right Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="page-layout-fixed-header.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-quilt"></i>
                                                    <span class="hide-menu"> Fixed Header </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="page-layout-fixed-sidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-parallel"></i>
                                                    <span class="hide-menu"> Fixed Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="page-layout-fixed-header-sidebar.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-column"></i>
                                                    <span class="hide-menu"> Fixed Header &amp; Sidebar </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="page-layout-boxed-layout.php" class="sidebar-link">
                                                    <i class="mdi mdi-view-carousel"></i>
                                                    <span class="hide-menu"> Box Layout </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">Forms</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                            <i class="icon-Receipt-4"></i>
                                            <span class="hide-menu">Form Elements</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="form-inputs.php" class="sidebar-link">
                                                    <i class="mdi mdi-priority-low"></i>
                                                    <span class="hide-menu"> Forms Input</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-input-groups.php" class="sidebar-link">
                                                    <i class="mdi mdi-rounded-corner"></i>
                                                    <span class="hide-menu"> Input Groups</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-input-grid.php" class="sidebar-link">
                                                    <i class="mdi mdi-select-all"></i>
                                                    <span class="hide-menu"> Input Grid</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-checkbox-radio.php" class="sidebar-link">
                                                    <i class="mdi mdi-shape-plus"></i>
                                                    <span class="hide-menu"> Checkboxes &amp; Radios</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-bootstrap-touchspin.php" class="sidebar-link">
                                                    <i class="mdi mdi-switch"></i>
                                                    <span class="hide-menu"> Bootstrap Touchspin</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-bootstrap-switch.php" class="sidebar-link">
                                                    <i class="mdi mdi-toggle-switch-off"></i>
                                                    <span class="hide-menu"> Bootstrap Switch</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-select2.php" class="sidebar-link">
                                                    <i class="mdi mdi-relative-scale"></i>
                                                    <span class="hide-menu"> Select2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-dual-listbox.php" class="sidebar-link">
                                                    <i class="mdi mdi-tab-unselected"></i>
                                                    <span class="hide-menu"> Dual Listbox</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Receipt-2"></i>
                                            <span class="hide-menu">Form Layouts</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="form-basic.php" class="sidebar-link">
                                                    <i class="mdi mdi-vector-difference-ba"></i>
                                                    <span class="hide-menu"> Basic Forms</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-horizontal.php" class="sidebar-link">
                                                    <i class="mdi mdi-file-document-box"></i>
                                                    <span class="hide-menu"> Form Horizontal</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-actions.php" class="sidebar-link">
                                                    <i class="mdi mdi-code-greater-than"></i>
                                                    <span class="hide-menu"> Form Actions</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-row-separator.php" class="sidebar-link">
                                                    <i class="mdi mdi-code-equal"></i>
                                                    <span class="hide-menu"> Row Separator</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-bordered.php" class="sidebar-link">
                                                    <i class="mdi mdi-flip-to-front"></i>
                                                    <span class="hide-menu"> Form Bordered</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-striped-row.php" class="sidebar-link">
                                                    <i class="mdi mdi-content-duplicate"></i>
                                                    <span class="hide-menu"> Striped Rows</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-detail.php" class="sidebar-link">
                                                    <i class="mdi mdi-cards-outline"></i>
                                                    <span class="hide-menu"> Form Detail</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Add"></i>
                                            <span class="hide-menu">Form Addons</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="form-paginator.php" class="sidebar-link">
                                                    <i class="mdi mdi-export"></i>
                                                    <span class="hide-menu"> Paginator</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-img-cropper.php" class="sidebar-link">
                                                    <i class="mdi mdi-crop"></i>
                                                    <span class="hide-menu"> Image Cropper</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-dropzone.php" class="sidebar-link">
                                                    <i class="mdi mdi-crosshairs-gps"></i>
                                                    <span class="hide-menu"> Dropzone</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-mask.php" class="sidebar-link">
                                                    <i class="mdi mdi-box-shadow"></i>
                                                    <span class="hide-menu"> Form Mask</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-typeahead.php" class="sidebar-link">
                                                    <i class="mdi mdi-cards-variant"></i>
                                                    <span class="hide-menu"> Form Typehead</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Security-Check"></i>
                                            <span class="hide-menu">Form Validation</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="form-bootstrap-validation.php" class="sidebar-link">
                                                    <i class="mdi mdi-credit-card-scan"></i>
                                                    <span class="hide-menu"> Bootstrap Validation</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-custom-validation.php" class="sidebar-link">
                                                    <i class="mdi mdi-credit-card-plus"></i>
                                                    <span class="hide-menu"> Custom Validation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-File-Edit"></i>
                                            <span class="hide-menu">Form Pickers</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="form-picker-colorpicker.php" class="sidebar-link">
                                                    <i class="mdi mdi-calendar-plus"></i>
                                                    <span class="hide-menu"> Form Colorpicker</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-picker-datetimepicker.php" class="sidebar-link">
                                                    <i class="mdi mdi-calendar-clock"></i>
                                                    <span class="hide-menu"> Form Datetimepicker</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-picker-bootstrap-rangepicker.php" class="sidebar-link">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                    <span class="hide-menu"> Form Bootstrap Rangepicker</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-picker-bootstrap-datepicker.php" class="sidebar-link">
                                                    <i class="mdi mdi-calendar-check"></i>
                                                    <span class="hide-menu"> Form Bootstrap Datepicker</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-picker-material-datepicker.php" class="sidebar-link">
                                                    <i class="mdi mdi-calendar-text"></i>
                                                    <span class="hide-menu"> Form Material Datepicker</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Marker"></i>
                                            <span class="hide-menu">Form Editor</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="form-editor-ckeditor.php" class="sidebar-link">
                                                    <i class="mdi mdi-drawing"></i>
                                                    <span class="hide-menu">Ck Editor</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-editor-quill.php" class="sidebar-link">
                                                    <i class="mdi mdi-drupal"></i>
                                                    <span class="hide-menu">Quill Editor</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-editor-summernote.php" class="sidebar-link">
                                                    <i class="mdi mdi-brightness-6"></i>
                                                    <span class="hide-menu">Summernote Editor</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="form-editor-tinymce.php" class="sidebar-link">
                                                    <i class="mdi mdi-bowling"></i>
                                                    <span class="hide-menu">Tinymce Edtor</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-wizard.php
                                            " aria-expanded="false">
                                            <i class="icon-Receipt"></i>
                                            <span class="hide-menu">Form Wizard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-repeater.php
                                            " aria-expanded="false">
                                            <i class="mdi mdi-creation"></i>
                                            <span class="hide-menu">Form Repeater</span>
                                        </a>
                                    </li>
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">Tables</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="mdi mdi-border-none"></i>
                                            <span class="hide-menu">Bootstrap Tables</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="table-basic.php" class="sidebar-link">
                                                    <i class="mdi mdi-border-all"></i>
                                                    <span class="hide-menu">Basic Table </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="table-dark-basic.php" class="sidebar-link">
                                                    <i class="mdi mdi-border-left"></i>
                                                    <span class="hide-menu">Dark Basic Table </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="table-sizing.php" class="sidebar-link">
                                                    <i class="mdi mdi-border-outside"></i>
                                                    <span class="hide-menu">Sizing Table </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="table-layout-coloured.php" class="sidebar-link">
                                                    <i class="mdi mdi-border-bottom"></i>
                                                    <span class="hide-menu">Coloured Table Layout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="mdi mdi-border-inside"></i>
                                            <span class="hide-menu">Datatables</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="table-datatable-basic.php" class="sidebar-link">
                                                    <i class="mdi mdi-border-vertical"></i>
                                                    <span class="hide-menu"> Basic Initialisation</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="table-datatable-api.php" class="sidebar-link">
                                                    <i class="mdi mdi-blur-linear"></i>
                                                    <span class="hide-menu"> API</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="table-datatable-advanced.php" class="sidebar-link">
                                                    <i class="mdi mdi-border-style"></i>
                                                    <span class="hide-menu"> Advanced Initialisation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.php
                                            " aria-expanded="false">
                                            <i class="mdi mdi-border-top"></i>
                                            <span class="hide-menu">Table Jsgrid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.php
                                            " aria-expanded="false">
                                            <i class="mdi mdi-border-style"></i>
                                            <span class="hide-menu">Table Responsive</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.php
                                            " aria-expanded="false">
                                            <i class="mdi mdi-tab-unselected"></i>
                                            <span class="hide-menu">Table Footable</span>
                                        </a>
                                    </li>
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">Charts</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-morris.php
                                            " aria-expanded="false">
                                            <i class="icon-Bar-Chart2"></i>
                                            <span class="hide-menu"> Morris Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chart-js.php
                                            " aria-expanded="false">
                                            <i class="icon-Bar-Chart5"></i>
                                            <span class="hide-menu">Chartjs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-sparkline.php
                                            " aria-expanded="false">
                                            <i class="icon-Line-Chart3"></i>
                                            <span class="hide-menu">Sparkline Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chartist.php
                                            " aria-expanded="false">
                                            <i class="icon-Pie-Chart"></i>
                                            <span class="hide-menu">Chartis Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Bar-Chart4"></i>
                                            <span class="hide-menu">C3 Charts</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="chart-c3-axis.php" class="sidebar-link">
                                                    <i class="mdi mdi-arrange-bring-to-front"></i>
                                                    <span class="hide-menu">Axis Chart</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="chart-c3-bar.php" class="sidebar-link">
                                                    <i class="mdi mdi-arrange-send-to-back"></i>
                                                    <span class="hide-menu">Bar Chart</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="chart-c3-data.php" class="sidebar-link">
                                                    <i class="mdi mdi-backup-restore"></i>
                                                    <span class="hide-menu">Data Chart</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="chart-c3-line.php" class="sidebar-link">
                                                    <i class="mdi mdi-backburger"></i>
                                                    <span class="hide-menu">Line Chart</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="mdi mdi-chart-areaspline"></i>
                                            <span class="hide-menu">Echarts</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="chart-echart-basic.php" class="sidebar-link">
                                                    <i class="mdi mdi-chart-line"></i>
                                                    <span class="hide-menu">Basic Charts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="chart-echart-bar.php" class="sidebar-link">
                                                    <i class="mdi mdi-chart-scatterplot-hexbin"></i>
                                                    <span class="hide-menu">Bar Chart</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="chart-echart-pie-doughnut.php" class="sidebar-link">
                                                    <i class="mdi mdi-chart-pie"></i>
                                                    <span class="hide-menu">Pie &amp; Doughnut Chart</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">Sample Pages</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Shopping-Bag"></i>
                                            <span class="hide-menu">Ecommerce Pages</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="eco-products.php" class="sidebar-link">
                                                    <i class="mdi mdi-cards-variant"></i>
                                                    <span class="hide-menu">Products</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="eco-products-cart.php" class="sidebar-link">
                                                    <i class="mdi mdi-cart"></i>
                                                    <span class="hide-menu">Products Cart</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="eco-products-edit.php" class="sidebar-link">
                                                    <i class="mdi mdi-cart-plus"></i>
                                                    <span class="hide-menu">Products Edit</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="eco-products-detail.php" class="sidebar-link">
                                                    <i class="mdi mdi-camera-burst"></i>
                                                    <span class="hide-menu">Product Details</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="eco-products-orders.php" class="sidebar-link">
                                                    <i class="mdi mdi-chart-pie"></i>
                                                    <span class="hide-menu">Product Orders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="eco-products-checkout.php" class="sidebar-link">
                                                    <i class="mdi mdi-clipboard-check"></i>
                                                    <span class="hide-menu">Products Checkout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Files"></i>
                                            <span class="hide-menu">Sample Pages </span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="starter-kit.php" class="sidebar-link">
                                                    <i class="mdi mdi-crop-free"></i>
                                                    <span class="hide-menu">Starter Kit</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-animation.php" class="sidebar-link">
                                                    <i class="mdi mdi-debug-step-over"></i>
                                                    <span class="hide-menu">Animation</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-search-result.php" class="sidebar-link">
                                                    <i class="mdi mdi-search-web"></i>
                                                    <span class="hide-menu">Search Result</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-gallery.php" class="sidebar-link">
                                                    <i class="mdi mdi-camera-iris"></i>
                                                    <span class="hide-menu">Gallery</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-treeview.php" class="sidebar-link">
                                                    <i class="mdi mdi-file-tree"></i>
                                                    <span class="hide-menu">Treeview</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-block-ui.php" class="sidebar-link">
                                                    <i class="mdi mdi-codepen"></i>
                                                    <span class="hide-menu">Block UI</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-session-timeout.php" class="sidebar-link">
                                                    <i class="mdi mdi-timer-off"></i>
                                                    <span class="hide-menu">Session Timeout</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-session-idle-timeout.php" class="sidebar-link">
                                                    <i class="mdi mdi-timer-sand-empty"></i>
                                                    <span class="hide-menu">Session Idle Timeout</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-utility-classes.php" class="sidebar-link">
                                                    <i class="mdi mdi-tune"></i>
                                                    <span class="hide-menu">Helper Classes</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-maintenance.php" class="sidebar-link">
                                                    <i class="mdi mdi-camera-iris"></i>
                                                    <span class="hide-menu">Maintenance Page</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Administrator"></i>
                                            <span class="hide-menu">Authentication</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="authentication-login1.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-key"></i>
                                                    <span class="hide-menu"> Login </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="authentication-login2.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-key"></i>
                                                    <span class="hide-menu"> Login 2 </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="authentication-register1.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-plus"></i>
                                                    <span class="hide-menu"> Register</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="authentication-register2.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-plus"></i>
                                                    <span class="hide-menu"> Register 2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="authentication-lockscreen.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-off"></i>
                                                    <span class="hide-menu"> Lockscreen</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="authentication-recover-password.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-convert"></i>
                                                    <span class="hide-menu"> Recover password</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Add-User"></i>
                                            <span class="hide-menu">Users</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="ui-user-card.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-box"></i>
                                                    <span class="hide-menu"> User Card </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-profile.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-network"></i>
                                                    <span class="hide-menu"> User Profile</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="ui-user-contacts.php" class="sidebar-link">
                                                    <i class="mdi mdi-account-star-variant"></i>
                                                    <span class="hide-menu"> User Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Receipt-3"></i>
                                            <span class="hide-menu">Invoice</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="pages-invoice.php" class="sidebar-link">
                                                    <i class="mdi mdi-vector-triangle"></i>
                                                    <span class="hide-menu"> Invoice Layout </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="pages-invoice-list.php" class="sidebar-link">
                                                    <i class="mdi mdi-vector-rectangle"></i>
                                                    <span class="hide-menu"> Invoice List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Location-2"></i>
                                            <span class="hide-menu">Maps</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="map-google.php" class="sidebar-link">
                                                    <i class="mdi mdi-google-maps"></i>
                                                    <span class="hide-menu"> Google Map </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="map-vector.php" class="sidebar-link">
                                                    <i class="mdi mdi-map-marker-radius"></i>
                                                    <span class="hide-menu"> Vector Map</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Eyeglasses-Smiley"></i>
                                            <span class="hide-menu">Icons</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="icon-material.php" class="sidebar-link">
                                                    <i class="mdi mdi-emoticon"></i>
                                                    <span class="hide-menu"> Material Icons </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="icon-fontawesome.php" class="sidebar-link">
                                                    <i class="mdi mdi-emoticon-cool"></i>
                                                    <span class="hide-menu"> Fontawesome Icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="icon-themify.php" class="sidebar-link">
                                                    <i class="mdi mdi-chart-bubble"></i>
                                                    <span class="hide-menu"> Themify Icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="icon-weather.php" class="sidebar-link">
                                                    <i class="mdi mdi-weather-cloudy"></i>
                                                    <span class="hide-menu"> Weather Icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="icon-simple-lineicon.php" class="sidebar-link">
                                                    <i class="mdi mdi mdi-image-broken-variant"></i>
                                                    <span class="hide-menu"> Simple Line icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="icon-iconmind.php" class="sidebar-link">
                                                    <i class="mdi mdi mdi-image-broken-variant"></i>
                                                    <span class="hide-menu"> Iconmind icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="icon-flag.php" class="sidebar-link">
                                                    <i class="mdi mdi-flag-triangle"></i>
                                                    <span class="hide-menu"> Flag Icons</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="mdi mdi-apple-safari"></i>
                                            <span class="hide-menu">Timeline</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="timeline-center.php" class="sidebar-link">
                                                    <i class="mdi mdi-clock-fast"></i>
                                                    <span class="hide-menu"> Center Timeline </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="timeline-horizontal.php" class="sidebar-link">
                                                    <i class="mdi mdi-clock-end"></i>
                                                    <span class="hide-menu"> Horizontal Timeline</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="timeline-left.php" class="sidebar-link">
                                                    <i class="mdi mdi-clock-in"></i>
                                                    <span class="hide-menu"> Left Timeline</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="timeline-right.php" class="sidebar-link">
                                                    <i class="mdi mdi-clock-start"></i>
                                                    <span class="hide-menu"> Right Timeline</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Mail-Read"></i>
                                            <span class="hide-menu">Email Template</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="email-templete-alert.php" class="sidebar-link">
                                                    <i class="mdi mdi-message-alert"></i>
                                                    <span class="hide-menu"> Alert </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="email-templete-basic.php" class="sidebar-link">
                                                    <i class="mdi mdi-message-bulleted"></i>
                                                    <span class="hide-menu"> Basic</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="email-templete-billing.php" class="sidebar-link">
                                                    <i class="mdi mdi-message-draw"></i>
                                                    <span class="hide-menu"> Billing</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="email-templete-password-reset.php" class="sidebar-link">
                                                    <i class="mdi mdi-message-bulleted-off"></i>
                                                    <span class="hide-menu"> Password-Reset</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="icon-Error-404Window"></i>
                                            <span class="hide-menu">Error Pages</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="error-400.php" class="sidebar-link">
                                                    <i class="mdi mdi-alert-outline"></i>
                                                    <span class="hide-menu"> Error 400 </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="error-403.php" class="sidebar-link">
                                                    <i class="mdi mdi-alert-outline"></i>
                                                    <span class="hide-menu"> Error 403</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="error-404.php" class="sidebar-link">
                                                    <i class="mdi mdi-alert-outline"></i>
                                                    <span class="hide-menu"> Error 404</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="error-500.php" class="sidebar-link">
                                                    <i class="mdi mdi-alert-outline"></i>
                                                    <span class="hide-menu"> Error 500</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="error-503.php" class="sidebar-link">
                                                    <i class="mdi mdi-alert-outline"></i>
                                                    <span class="hide-menu"> Error 503</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)
                                            " aria-expanded="false">
                                            <i class="mdi mdi-notification-clear-all"></i>
                                            <span class="hide-menu">Multi level dd</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level">
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="mdi mdi-octagram"></i>
                                                    <span class="hide-menu"> item 1.1</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="mdi mdi-octagram"></i>
                                                    <span class="hide-menu"> item 1.2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                                    <i class="mdi mdi-playlist-plus"></i>
                                                    <span class="hide-menu">Menu 1.3</span>
                                                </a>
                                                <ul aria-expanded="false" class="collapse second-level">
                                                    <li class="sidebar-item">
                                                        <a href="javascript:void(0)" class="sidebar-link">
                                                            <i class="mdi mdi-octagram"></i>
                                                            <span class="hide-menu"> item 1.3.1</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-item">
                                                        <a href="javascript:void(0)" class="sidebar-link">
                                                            <i class="mdi mdi-octagram"></i>
                                                            <span class="hide-menu"> item 1.3.2</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-item">
                                                        <a href="javascript:void(0)" class="sidebar-link">
                                                            <i class="mdi mdi-octagram"></i>
                                                            <span class="hide-menu"> item 1.3.3</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-item">
                                                        <a href="javascript:void(0)" class="sidebar-link">
                                                            <i class="mdi mdi-octagram"></i>
                                                            <span class="hide-menu"> item 1.3.4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="mdi mdi-playlist-check"></i>
                                                    <span class="hide-menu"> item 1.4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-small-cap">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                        <span class="hide-menu">Extra</span>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../docs/documentation.php
                                            " aria-expanded="false">
                                            <i class="mdi mdi-content-paste"></i>
                                            <span class="hide-menu">Documentation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.php
                                            " aria-expanded="false">
                                            <i class="mdi mdi-directions"></i>
                                            <span class="hide-menu">Log Out</span>
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
                                    <h4 class="page-title">API</h4>
                                    <div class="d-flex align-items-center">
                                    </div>
                                </div>
                                <div class="col-7 align-self-center">
                                    <div class="d-flex no-block justify-content-end align-items-center">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="#">Home</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                            <!-- Start Page Content -->
                            <!-- ============================================================== -->
                            <!-- add row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Add Row</h4>
                                            <h6 class="card-subtitle m-t-15">New rows can be added to a DataTable using the <code> row.add()</code> API method. Simply call the API function with the data for the new row (be it an array or object). Multiple rows can be added using the <code> rows.add()</code> method (note the plural). Data can likewise be updated with the <code>row().data()</code> and <code> row().remove()</code> methods. You can refer full documentation from here <a href="https://datatables.net/">Datatables</a></h6>
                                            <button id="addRow" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>&nbsp; Add new row</button>
                                            <div class="table-responsive">
                                                <table id="t_add_row" class="table table-striped table-bordered display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Column 1</th>
                                                            <th>Column 2</th>
                                                            <th>Column 3</th>
                                                            <th>Column 4</th>
                                                            <th>Column 5</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Column 1</th>
                                                        <th>Column 2</th>
                                                        <th>Column 3</th>
                                                        <th>Column 4</th>
                                                        <th>Column 5</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Individual column searching (select inputs) -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Individual column searching (select inputs)</h4>
                                            <h6 class="card-subtitle">After the table is initialised, the API is used to build the select inputs through the use of the <code> column().data()</code> method to get the data for each column in turn. The helper methods <code>unique()</code> and <code> sort()</code> are also used to reduce the data for set input to unique and ordered elements. Finally the change event from the select input is used to trigger a column search using the <code>column().search()</code> method.</h6>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered datatable-select-inputs">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Individual column searching (text inputs) -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Individual column searching (text inputs)</h4>
                                            <h6 class="card-subtitle">DataTables has the ability to apply searching to a specific column through the <code> column().search()</code> method (note that the name of the method is search not filter, since <code> filter()</code> is used to apply a filter to a result set).</h6>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered text-inputs-searching">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Child rows (show extra / detailed information) -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Child rows (show extra / detailed information)</h4>
                                            <h6 class="card-subtitle">The DataTables API has a number of methods for attaching child rows to a parent row in the DataTable. This can be used to show additional information about a row, useful for cases where you wish to convey more information about a row than there is space for in the host table.</h6>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered show-child-rows">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row selection (multiple rows) -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Row selection (multiple rows)</h4>
                                            <h6 class="card-subtitle">It can be useful to provide the user with the option to select rows in a DataTable. This can be done by using a click event to add / remove a class on the table rows. The <code> rows().data()</code> method can then be used to get the data for the selected rows. In this case it is simply counting the number of selected rows, but much more complex interactions can easily be developed.</h6>
                                            <button id="button" class="btn btn-primary mb-2"><i class="mdi mdi-filter"></i> Row count</button>
                                            <div class="table-responsive">
                                                <table id="row_select" class="table table-striped table-bordered display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form inputs -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Form Inputs</h4>
                                            <h6 class="card-subtitle">In order to perform paging, ordering, searching etc, DataTables can remove rows and cells from the document (i.e. those rows / cells which are not needed are not inserted into the document). This increases performance and compatibility, however, it means that submitting forms which span multiple pages requires a little bit of additional work to get the information that is not in the document any longer.</h6>
                                            <button class="btn btn-primary mr-1 inputs-submit"><i class="fas fa-file"></i> Submit form</button>
                                            <div class="table-responsive m-t-15">
                                                <table id="form_inputs" class="table table-striped table-bordered display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Age</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>
                                                                <input type="text" id="row-1-age" name="row-1-age" value="61">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-1-position" name="row-1-position" value="System Architect">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-1-office" name="row-1-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>
                                                                <input type="text" id="row-2-age" name="row-2-age" value="63">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-2-position" name="row-2-position" value="Accountant">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-2-office" name="row-2-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo" selected="selected">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>
                                                                <input type="text" id="row-3-age" name="row-3-age" value="66">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-3-position" name="row-3-position" value="Junior Technical Author">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-3-office" name="row-3-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>
                                                                <input type="text" id="row-4-age" name="row-4-age" value="22">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-4-position" name="row-4-position" value="Senior Javascript Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-4-office" name="row-4-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>
                                                                <input type="text" id="row-5-age" name="row-5-age" value="33">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-5-position" name="row-5-position" value="Accountant">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-5-office" name="row-5-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo" selected="selected">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>
                                                                <input type="text" id="row-6-age" name="row-6-age" value="61">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-6-position" name="row-6-position" value="Integration Specialist">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-6-office" name="row-6-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>
                                                                <input type="text" id="row-7-age" name="row-7-age" value="59">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-7-position" name="row-7-position" value="Sales Assistant">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-7-office" name="row-7-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>
                                                                <input type="text" id="row-8-age" name="row-8-age" value="55">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-8-position" name="row-8-position" value="Integration Specialist">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-8-office" name="row-8-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo" selected="selected">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>
                                                                <input type="text" id="row-9-age" name="row-9-age" value="39">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-9-position" name="row-9-position" value="Javascript Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-9-office" name="row-9-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>
                                                                <input type="text" id="row-10-age" name="row-10-age" value="23">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-10-position" name="row-10-position" value="Software Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-10-office" name="row-10-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>
                                                                <input type="text" id="row-11-age" name="row-11-age" value="30">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-11-position" name="row-11-position" value="Office Manager">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-11-office" name="row-11-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>
                                                                <input type="text" id="row-12-age" name="row-12-age" value="22">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-12-position" name="row-12-position" value="Support Lead">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-12-office" name="row-12-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>
                                                                <input type="text" id="row-13-age" name="row-13-age" value="36">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-13-position" name="row-13-position" value="Regional Director">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-13-office" name="row-13-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>
                                                                <input type="text" id="row-14-age" name="row-14-age" value="43">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-14-position" name="row-14-position" value="Senior Marketing Designer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-14-office" name="row-14-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>
                                                                <input type="text" id="row-15-age" name="row-15-age" value="19">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-15-position" name="row-15-position" value="Regional Director">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-15-office" name="row-15-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>
                                                                <input type="text" id="row-16-age" name="row-16-age" value="66">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-16-position" name="row-16-position" value="Marketing Designer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-16-office" name="row-16-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>
                                                                <input type="text" id="row-17-age" name="row-17-age" value="64">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-17-office" name="row-17-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>
                                                                <input type="text" id="row-18-age" name="row-18-age" value="59">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-18-position" name="row-18-position" value="Systems Administrator">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-18-office" name="row-18-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>
                                                                <input type="text" id="row-19-age" name="row-19-age" value="41">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-19-position" name="row-19-position" value="Software Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-19-office" name="row-19-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>
                                                                <input type="text" id="row-20-age" name="row-20-age" value="35">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-20-position" name="row-20-position" value="Personnel Lead">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-20-office" name="row-20-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>
                                                                <input type="text" id="row-21-age" name="row-21-age" value="30">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-21-position" name="row-21-position" value="Development Lead">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-21-office" name="row-21-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>
                                                                <input type="text" id="row-22-age" name="row-22-age" value="40">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-22-office" name="row-22-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>
                                                                <input type="text" id="row-23-age" name="row-23-age" value="21">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-23-office" name="row-23-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>
                                                                <input type="text" id="row-24-age" name="row-24-age" value="23">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-24-position" name="row-24-position" value="Sales Assistant">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-24-office" name="row-24-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>
                                                                <input type="text" id="row-25-age" name="row-25-age" value="47">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-25-office" name="row-25-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>
                                                                <input type="text" id="row-26-age" name="row-26-age" value="42">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-26-position" name="row-26-position" value="Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-26-office" name="row-26-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>
                                                                <input type="text" id="row-27-age" name="row-27-age" value="28">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-27-position" name="row-27-position" value="Regional Director">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-27-office" name="row-27-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>
                                                                <input type="text" id="row-28-age" name="row-28-age" value="28">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-28-position" name="row-28-position" value="Software Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-28-office" name="row-28-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>
                                                                <input type="text" id="row-29-age" name="row-29-age" value="48">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-29-office" name="row-29-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>
                                                                <input type="text" id="row-30-age" name="row-30-age" value="20">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-30-position" name="row-30-position" value="Regional Marketing">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-30-office" name="row-30-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo" selected="selected">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>
                                                                <input type="text" id="row-31-age" name="row-31-age" value="37">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-31-position" name="row-31-position" value="Integration Specialist">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-31-office" name="row-31-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>
                                                                <input type="text" id="row-32-age" name="row-32-age" value="53">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-32-position" name="row-32-position" value="Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-32-office" name="row-32-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>
                                                                <input type="text" id="row-33-age" name="row-33-age" value="27">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-33-position" name="row-33-position" value="Technical Author">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-33-office" name="row-33-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>
                                                                <input type="text" id="row-34-age" name="row-34-age" value="22">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-34-position" name="row-34-position" value="Team Leader">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-34-office" name="row-34-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>
                                                                <input type="text" id="row-35-age" name="row-35-age" value="46">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-35-position" name="row-35-position" value="Post-Sales support">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-35-office" name="row-35-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>
                                                                <input type="text" id="row-36-age" name="row-36-age" value="47">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-36-position" name="row-36-position" value="Marketing Designer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-36-office" name="row-36-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>
                                                                <input type="text" id="row-37-age" name="row-37-age" value="51">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-37-position" name="row-37-position" value="Office Manager">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-37-office" name="row-37-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>
                                                                <input type="text" id="row-38-age" name="row-38-age" value="41">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-38-position" name="row-38-position" value="Secretary">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-38-office" name="row-38-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>
                                                                <input type="text" id="row-39-age" name="row-39-age" value="62">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-39-position" name="row-39-position" value="Financial Controller">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-39-office" name="row-39-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>
                                                                <input type="text" id="row-40-age" name="row-40-age" value="37">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-40-position" name="row-40-position" value="Office Manager">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-40-office" name="row-40-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>
                                                                <input type="text" id="row-41-age" name="row-41-age" value="65">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-41-position" name="row-41-position" value="Director">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-41-office" name="row-41-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>
                                                                <input type="text" id="row-42-age" name="row-42-age" value="64">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-42-position" name="row-42-position" value="Support Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-42-office" name="row-42-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>
                                                                <input type="text" id="row-43-age" name="row-43-age" value="38">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-43-position" name="row-43-position" value="Software Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-43-office" name="row-43-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>
                                                                <input type="text" id="row-44-age" name="row-44-age" value="37">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-44-position" name="row-44-position" value="Support Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-44-office" name="row-44-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo" selected="selected">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>
                                                                <input type="text" id="row-45-age" name="row-45-age" value="61">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-45-position" name="row-45-position" value="Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-45-office" name="row-45-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>
                                                                <input type="text" id="row-46-age" name="row-46-age" value="47">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-46-position" name="row-46-position" value="Support Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-46-office" name="row-46-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>
                                                                <input type="text" id="row-47-age" name="row-47-age" value="64">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-47-position" name="row-47-position" value="Data Coordinator">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-47-office" name="row-47-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>
                                                                <input type="text" id="row-48-age" name="row-48-age" value="63">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-48-position" name="row-48-position" value="Software Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-48-office" name="row-48-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>
                                                                <input type="text" id="row-49-age" name="row-49-age" value="56">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-49-position" name="row-49-position" value="Software Engineer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-49-office" name="row-49-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>
                                                                <input type="text" id="row-50-age" name="row-50-age" value="43">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-50-position" name="row-50-position" value="Junior Javascript Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-50-office" name="row-50-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>
                                                                <input type="text" id="row-51-age" name="row-51-age" value="46">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-51-position" name="row-51-position" value="Sales Assistant">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-51-office" name="row-51-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>
                                                                <input type="text" id="row-52-age" name="row-52-age" value="47">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-52-position" name="row-52-position" value="Regional Director">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-52-office" name="row-52-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>
                                                                <input type="text" id="row-53-age" name="row-53-age" value="21">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-53-position" name="row-53-position" value="Systems Administrator">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-53-office" name="row-53-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London" selected="selected">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>
                                                                <input type="text" id="row-54-age" name="row-54-age" value="30">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-54-position" name="row-54-position" value="Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-54-office" name="row-54-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco" selected="selected">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>
                                                                <input type="text" id="row-55-age" name="row-55-age" value="51">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-55-position" name="row-55-position" value="Regional Director">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-55-office" name="row-55-office">
                                                                    <option value="Edinburgh" selected="selected">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>
                                                                <input type="text" id="row-56-age" name="row-56-age" value="29">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-56-position" name="row-56-position" value="Javascript Developer">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-56-office" name="row-56-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>
                                                                <input type="text" id="row-57-age" name="row-57-age" value="27">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="row-57-position" name="row-57-position" value="Customer Support">
                                                            </td>
                                                            <td>
                                                                <select size="1" id="row-57-office" name="row-57-office">
                                                                    <option value="Edinburgh">
                                                                        Edinburgh
                                                                    </option>
                                                                    <option value="London">
                                                                        London
                                                                    </option>
                                                                    <option value="New York" selected="selected">
                                                                        New York
                                                                    </option>
                                                                    <option value="San Francisco">
                                                                        San Francisco
                                                                    </option>
                                                                    <option value="Tokyo">
                                                                        Tokyo
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row selection & deletion -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Row selection and deletion (single row)</h4>
                                            <h6 class="card-subtitle">This example modifies the multiple row selection example by only allowing the selection of a single row. This is done by checking to see if the row already has a selected class, and if so removing it, but if not then the class is removed from all other rows in the table and then applied to the row being selected.</h6>
                                            <button id="delete-row" class="btn btn-primary mr-1"><i class="ti-trash"></i> Delete selected row</button>
                                            <div class="table-responsive m-t-15">
                                                <table id="sing_row_del" class="table table-striped table-bordered display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End PAge Content -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Right sidebar -->
                            <!-- ============================================================== -->
                            <!-- .right-sidebar -->
                            <!-- ============================================================== -->
                            <!-- End Right sidebar -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Container fluid  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- footer -->
                        <!-- ============================================================== -->
                        <footer class="footer text-center">
                            All Rights Reserved by AdminBite admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
                <aside class="customizer">
                    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
                    <div class="customizer-body">
                        <ul class="nav customizer-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Tab 1 -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="p-15 border-bottom">
                                    <!-- Sidebar -->
                                    <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                                    <div class="custom-control custom-checkbox m-t-10">
                                        <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                                        <label class="custom-control-label" for="theme-view">Dark Theme</label>
                                    </div>
                                    <div class="custom-control custom-checkbox m-t-10">
                                        <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                                        <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                                    </div>
                                    <div class="custom-control custom-checkbox m-t-10">
                                        <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                                        <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                                    </div>
                                    <div class="custom-control custom-checkbox m-t-10">
                                        <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                                        <label class="custom-control-label" for="header-position">Fixed Header</label>
                                    </div>
                                    <div class="custom-control custom-checkbox m-t-10">
                                        <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                                        <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                                    </div>
                                </div>
                                <div class="p-15 border-bottom">
                                    <!-- Logo BG -->
                                    <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                                    <ul class="theme-color">
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                                    </ul>
                                    <!-- Logo BG -->
                                </div>
                                <div class="p-15 border-bottom">
                                    <!-- Navbar BG -->
                                    <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                                    <ul class="theme-color">
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                                    </ul>
                                    <!-- Navbar BG -->
                                </div>
                                <div class="p-15 border-bottom">
                                    <!-- Logo BG -->
                                    <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                                    <ul class="theme-color">
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                                    </ul>
                                    <!-- Logo BG -->
                                </div>
                            </div>
                            <!-- End Tab 1 -->
                            <!-- Tab 2 -->
                            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <ul class="mailbox list-style-none m-t-20">
                                    <li>
                                        <div class="message-center chat-scroll">
                                            <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                                <span class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </span>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                                    <span class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </span>
                                                    </a>
                                                    <!-- Message -->
                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                                        <span class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                                        <span class="mail-contnet">
                                                            <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </span>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                                            <span class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                            <span class="mail-contnet">
                                                                <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <!-- Message -->
                                                            <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                                                <span class="user-img"> <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                                <span class="mail-contnet">
                                                                    <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                                </a>
                                                                <!-- Message -->
                                                                <!-- Message -->
                                                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                                                    <span class="user-img"> <img src="../assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                                    <span class="mail-contnet">
                                                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                                                        <span class="user-img"> <img src="../assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                                        <span class="mail-contnet">
                                                                            <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                                        </a>
                                                                        <!-- Message -->
                                                                        <!-- Message -->
                                                                        <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                                                            <span class="user-img"> <img src="../assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                                            <span class="mail-contnet">
                                                                                <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                                            </a>
                                                                            <!-- Message -->
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- End Tab 2 -->
                                                            <!-- Tab 3 -->
                                                            <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                                <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                                                                <div class="steamline">
                                                                    <div class="sl-item">
                                                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                                            <div class="desc">you can write anything </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Send documents to Clark</div>
                                                                            <div class="desc">Lorem Ipsum is simply </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/2.jpg"> </div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                                            <div class="desc">Contrary to popular belief</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/1.jpg"> </div>
                                                                        <div class="sl-right">
                                                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                                            <div class="desc">Approve meeting with tiger</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                                            <div class="desc">you can write anything </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Send documents to Clark</div>
                                                                            <div class="desc">Lorem Ipsum is simply </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/4.jpg"> </div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                                            <div class="desc">Contrary to popular belief</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/6.jpg"> </div>
                                                                        <div class="sl-right">
                                                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                                            <div class="desc">Approve meeting with tiger</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Tab 3 -->
                                                        </div>
                                                    </div>
                                                </aside>
                                                <div class="chat-windows"></div>
                                                <!-- ============================================================== -->
                                                <!-- All Jquery -->
                                                <!-- ============================================================== -->
                                                <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
                                                <!-- Bootstrap tether Core JavaScript -->
                                                <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
                                                <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                                                <!-- apps -->
                                                <script src="../dist/js/app.min.js"></script>
                                                <script src="../dist/js/app.init.js"></script>
                                                <script src="../dist/js/app-style-switcher.js"></script>
                                                <!-- slimscrollbar scrollbar JavaScript -->
                                                <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                                                <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
                                                <!--Wave Effects -->
                                                <script src="../dist/js/waves.js"></script>
                                                <!--Menu sidebar -->
                                                <script src="../dist/js/sidebarmenu.js"></script>
                                                <!--Custom JavaScript -->
                                                <script src="../dist/js/custom.min.js"></script>
                                                <!--This page plugins -->
                                                <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
                                                <script src="../dist/js/pages/datatable/datatable-api.init.js"></script>
                                            </body>
                                        </html>