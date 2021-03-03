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
        <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
        <!-- This page plugin CSS -->
        <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../../dist/css/style.min.css" rel="stylesheet">
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
                                                            <img class="d-block img-fluid" src="../../assets/images/big/img1.jpg" alt="First slide">
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="container p-0">
                                                            <img class="d-block img-fluid" src="../../assets/images/big/img2.jpg" alt="Second slide">
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="container p-0">
                                                            <img class="d-block img-fluid" src="../../assets/images/big/img3.jpg" alt="Third slide">
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
                                                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
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
                                                                <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
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
                                                                <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
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
                                                                <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle">
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
                                            <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                            <span class="with-arrow">
                                                <span class="bg-primary"></span>
                                            </span>
                                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                                <div class="">
                                                    <img src="../../assets/images/users/1.jpg" alt="user" class="img-circle" width="60">
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
                                                <img src="../../assets/images/users/1.jpg" alt="users" class="rounded-circle img-fluid" />
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
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../docs/documentation.php
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
                                    <h4 class="page-title">Basic Initialisation</h4>
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
                            <!-- basic table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Zero Configuration</h4>
                                            <h6 class="card-subtitle">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code> $().DataTable();</code>. You can refer full documentation from here <a href="https://datatables.net/">Datatables</a></h6>
                                            <div class="table-responsive">
                                                <table id="zero_config" class="table table-striped table-bordered">
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
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Default Ordering</h4>
                                            <h6 class="card-subtitle">With DataTables you can alter the ordering characteristics of the table at initialisation time. Using the<code> order | option</code> order initialisation parameter, you can set the table to display the data in exactly the order that you want.</h6>
                                            <div class="table-responsive">
                                                <table id="default_order" class="table table-striped table-bordered display" style="width:100%">
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
                            <!-- multi-column ordering -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Multi-column ordering</h4>
                                            <h6 class="card-subtitle">On a per-column basis (i.e. order by a specific column and then a secondary column if the data in the first column is identical), through the <code> columns.orderData</code> option.</h6>
                                            <div class="table-responsive">
                                                <table id="multi_col_order" class="table table-striped table-bordered display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>First name</th>
                                                            <th>Last name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett</td>
                                                            <td>Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton</td>
                                                            <td>Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric</td>
                                                            <td>Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi</td>
                                                            <td>Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle</td>
                                                            <td>Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod</td>
                                                            <td>Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona</td>
                                                            <td>Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen</td>
                                                            <td>Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya</td>
                                                            <td>Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena</td>
                                                            <td>Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn</td>
                                                            <td>Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde</td>
                                                            <td>Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley</td>
                                                            <td>Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana</td>
                                                            <td>Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael</td>
                                                            <td>Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul</td>
                                                            <td>Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria</td>
                                                            <td>Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley</td>
                                                            <td>Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai</td>
                                                            <td>Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette</td>
                                                            <td>Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri</td>
                                                            <td>Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar</td>
                                                            <td>Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris</td>
                                                            <td>Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica</td>
                                                            <td>Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin</td>
                                                            <td>Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer</td>
                                                            <td>Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden</td>
                                                            <td>Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona</td>
                                                            <td>Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou</td>
                                                            <td>Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle</td>
                                                            <td>House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki</td>
                                                            <td>Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott</td>
                                                            <td>Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin</td>
                                                            <td>Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena</td>
                                                            <td>Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity</td>
                                                            <td>Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard</td>
                                                            <td>Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope</td>
                                                            <td>Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian</td>
                                                            <td>Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy</td>
                                                            <td>Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson</td>
                                                            <td>Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia</td>
                                                            <td>Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno</td>
                                                            <td>Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura</td>
                                                            <td>Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor</td>
                                                            <td>Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn</td>
                                                            <td>Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge</td>
                                                            <td>Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida</td>
                                                            <td>Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita</td>
                                                            <td>Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer</td>
                                                            <td>Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara</td>
                                                            <td>Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione</td>
                                                            <td>Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael</td>
                                                            <td>Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas</td>
                                                            <td>Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad</td>
                                                            <td>Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael</td>
                                                            <td>Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna</td>
                                                            <td>Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- complex headers -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Complex headers (rowspan and colspan)</h4>
                                            <h6 class="card-subtitle">When using tables to display data, you will often wish to display column information in groups. DataTables fully supports <code> colspan</code> and <code> rowspan</code> in the table's header, assigning the required order listeners to the TH element suitable for that column.</h6>
                                            <div class="table-responsive">
                                                <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Name</th>
                                                            <th colspan="2">HR Information</th>
                                                            <th colspan="3">Contact</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                            <th>Office</th>
                                                            <th>Extn.</th>
                                                            <th>E-mail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>$320,800</td>
                                                            <td>Edinburgh</td>
                                                            <td>5421</td>
                                                            <td>t.nixon@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>$170,750</td>
                                                            <td>Tokyo</td>
                                                            <td>8422</td>
                                                            <td>g.winters@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$86,000</td>
                                                            <td>San Francisco</td>
                                                            <td>1562</td>
                                                            <td>a.cox@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$433,060</td>
                                                            <td>Edinburgh</td>
                                                            <td>6224</td>
                                                            <td>c.kelly@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>$162,700</td>
                                                            <td>Tokyo</td>
                                                            <td>5407</td>
                                                            <td>a.satou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>$372,000</td>
                                                            <td>New York</td>
                                                            <td>4804</td>
                                                            <td>b.williamson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>$137,500</td>
                                                            <td>San Francisco</td>
                                                            <td>9608</td>
                                                            <td>h.chandler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>$327,900</td>
                                                            <td>Tokyo</td>
                                                            <td>6200</td>
                                                            <td>r.davidson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>$205,500</td>
                                                            <td>San Francisco</td>
                                                            <td>2360</td>
                                                            <td>c.hurst@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>$103,600</td>
                                                            <td>Edinburgh</td>
                                                            <td>1667</td>
                                                            <td>s.frost@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>$90,560</td>
                                                            <td>London</td>
                                                            <td>3814</td>
                                                            <td>j.gaines@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>$342,000</td>
                                                            <td>Edinburgh</td>
                                                            <td>9497</td>
                                                            <td>q.flynn@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>$470,600</td>
                                                            <td>San Francisco</td>
                                                            <td>6741</td>
                                                            <td>c.marshall@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>$313,500</td>
                                                            <td>London</td>
                                                            <td>3597</td>
                                                            <td>h.kennedy@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>$385,750</td>
                                                            <td>London</td>
                                                            <td>1965</td>
                                                            <td>t.fitzpatrick@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>$198,500</td>
                                                            <td>London</td>
                                                            <td>1581</td>
                                                            <td>m.silva@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>$725,000</td>
                                                            <td>New York</td>
                                                            <td>3059</td>
                                                            <td>p.byrd@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>$237,500</td>
                                                            <td>New York</td>
                                                            <td>1721</td>
                                                            <td>g.little@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>$132,000</td>
                                                            <td>London</td>
                                                            <td>2558</td>
                                                            <td>b.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>$217,500</td>
                                                            <td>Edinburgh</td>
                                                            <td>2290</td>
                                                            <td>d.rios@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>$345,000</td>
                                                            <td>New York</td>
                                                            <td>1937</td>
                                                            <td>j.caldwell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>$675,000</td>
                                                            <td>New York</td>
                                                            <td>6154</td>
                                                            <td>y.berry@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>$106,450</td>
                                                            <td>New York</td>
                                                            <td>8330</td>
                                                            <td>c.vance@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>$85,600</td>
                                                            <td>Sidney</td>
                                                            <td>3023</td>
                                                            <td>d.wilder@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>$1,200,000</td>
                                                            <td>London</td>
                                                            <td>5797</td>
                                                            <td>a.ramos@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>$92,575</td>
                                                            <td>Edinburgh</td>
                                                            <td>8822</td>
                                                            <td>g.joyce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>$357,650</td>
                                                            <td>Singapore</td>
                                                            <td>9239</td>
                                                            <td>j.chang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>$206,850</td>
                                                            <td>San Francisco</td>
                                                            <td>1314</td>
                                                            <td>b.wagner@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>$850,000</td>
                                                            <td>San Francisco</td>
                                                            <td>2947</td>
                                                            <td>f.green@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>$163,000</td>
                                                            <td>Tokyo</td>
                                                            <td>8899</td>
                                                            <td>s.itou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>$95,400</td>
                                                            <td>Sidney</td>
                                                            <td>2769</td>
                                                            <td>m.house@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>$114,500</td>
                                                            <td>London</td>
                                                            <td>6832</td>
                                                            <td>s.burks@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>$145,000</td>
                                                            <td>London</td>
                                                            <td>3606</td>
                                                            <td>p.bartlett@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>$235,500</td>
                                                            <td>San Francisco</td>
                                                            <td>2860</td>
                                                            <td>g.cortez@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>$324,050</td>
                                                            <td>Edinburgh</td>
                                                            <td>8240</td>
                                                            <td>m.mccray@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>$85,675</td>
                                                            <td>San Francisco</td>
                                                            <td>5384</td>
                                                            <td>u.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>$164,500</td>
                                                            <td>San Francisco</td>
                                                            <td>7031</td>
                                                            <td>h.hatfield@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>$109,850</td>
                                                            <td>San Francisco</td>
                                                            <td>6318</td>
                                                            <td>h.fuentes@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>$452,500</td>
                                                            <td>San Francisco</td>
                                                            <td>9422</td>
                                                            <td>v.harrell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>$136,200</td>
                                                            <td>London</td>
                                                            <td>7580</td>
                                                            <td>t.mooney@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>$645,750</td>
                                                            <td>New York</td>
                                                            <td>1042</td>
                                                            <td>j.bradshaw@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>$234,500</td>
                                                            <td>Singapore</td>
                                                            <td>2120</td>
                                                            <td>o.liang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>$163,500</td>
                                                            <td>London</td>
                                                            <td>6222</td>
                                                            <td>b.nash@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>$139,575</td>
                                                            <td>Tokyo</td>
                                                            <td>9383</td>
                                                            <td>s.yamamoto@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>$98,540</td>
                                                            <td>New York</td>
                                                            <td>8327</td>
                                                            <td>t.walton@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>$87,500</td>
                                                            <td>San Francisco</td>
                                                            <td>2927</td>
                                                            <td>f.camacho@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>$138,575</td>
                                                            <td>Singapore</td>
                                                            <td>8352</td>
                                                            <td>s.baldwin@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>$125,250</td>
                                                            <td>New York</td>
                                                            <td>7439</td>
                                                            <td>z.frank@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>$115,000</td>
                                                            <td>San Francisco</td>
                                                            <td>4389</td>
                                                            <td>z.serrano@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>$75,650</td>
                                                            <td>Edinburgh</td>
                                                            <td>3431</td>
                                                            <td>j.acosta@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>$145,600</td>
                                                            <td>New York</td>
                                                            <td>3990</td>
                                                            <td>c.stevens@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>$356,250</td>
                                                            <td>London</td>
                                                            <td>1016</td>
                                                            <td>h.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>$103,500</td>
                                                            <td>London</td>
                                                            <td>6733</td>
                                                            <td>l.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>$86,500</td>
                                                            <td>San Francisco</td>
                                                            <td>8196</td>
                                                            <td>j.alexander@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>$183,000</td>
                                                            <td>Edinburgh</td>
                                                            <td>6373</td>
                                                            <td>s.decker@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>$183,000</td>
                                                            <td>Singapore</td>
                                                            <td>5384</td>
                                                            <td>m.bruce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>$112,000</td>
                                                            <td>New York</td>
                                                            <td>4226</td>
                                                            <td>d.snider@datatables.net</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                        <th>Office</th>
                                                        <th>Extn.</th>
                                                        <th>E-mail</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- DOM Positioning -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">DOM Positioning</h4>
                                            <h6 class="card-subtitle">When customising DataTables for your own usage, you might find that the default position of the feature elements (filter input etc) is not quite to your liking. To address this issue DataTables takes inspiration from the CSS 3 Advanced Layout Module and provides the <code> dom</code> initialisation parameter which can be set to indicate where you wish particular features to appear in the DOM. You can also specify div wrapping containers (with an id and / or class) to provide complete layout flexibility.</h6>
                                            <div class="table-responsive">
                                                <table id="DOM_pos" class="table table-striped table-bordered display" style="width:100%">
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
                            <!-- alternative pagination -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Alternative Pagination</h4>
                                            <h6 class="card-subtitle">The default page control presented by DataTables (forward and backward buttons with up to 7 page numbers in-between) is fine for most situations, but there are cases where you may wish to customise the options presented to the end user. This is done through DataTables' extensible pagination mechanism, the <code> pagingType</code> option.</h6>
                                            <div class="table-responsive">
                                                <table id="alt_pagination" class="table table-striped table-bordered display" style="width:100%">
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
                            <!-- scroll-vertical -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Scroll - Vertical</h4>
                                            <h6 class="card-subtitle">This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as such pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled as well!).</h6>
                                            <div class="table-responsive">
                                                <table id="scroll_ver" class="table table-striped table-bordered display" style="width:100%">
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
                            <!-- scroll-vetical-dynamic height -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Scroll - Vertical, Dynamic Height</h4>
                                            <h6 class="card-subtitle">This example shows a vertically scrolling DataTable that makes use of the CSS3 <code> vh</code> unit in order to dynamically resize the viewport based on the browser window height. The vh unit is effectively a percentage of the browser window height. So the <code> 50vh</code> used in this example is 50% of the window height. The viewport size will update dynamically as the window is resized.</h6>
                                            <div class="table-responsive">
                                                <table id="scroll_ver_dynamic_hei" class="table table-striped table-bordered display" style="width:100%">
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
                            <!-- scroll horizontal -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Scroll - Horizontal</h4>
                                            <h6 class="card-subtitle">DataTables has the ability to show tables with horizontal scrolling, which is very useful for when you have a wide table, but want to constrain it to a limited horizontal display area. To enable x-scrolling simply set the <code> scrollX</code> parameter to be whatever you want the container wrapper's width to be (this should be 100% in almost all cases with the width being constrained by the container element).</h6>
                                            <div class="table-responsive">
                                                <table id="scroll_hor" class="table table-striped table-bordered display nowrap" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>First name</th>
                                                            <th>Last name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                            <th>Extn.</th>
                                                            <th>E-mail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                            <td>5421</td>
                                                            <td>t.nixon@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett</td>
                                                            <td>Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                            <td>8422</td>
                                                            <td>g.winters@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton</td>
                                                            <td>Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                            <td>1562</td>
                                                            <td>a.cox@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric</td>
                                                            <td>Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                            <td>6224</td>
                                                            <td>c.kelly@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi</td>
                                                            <td>Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                            <td>5407</td>
                                                            <td>a.satou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle</td>
                                                            <td>Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                            <td>4804</td>
                                                            <td>b.williamson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod</td>
                                                            <td>Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                            <td>9608</td>
                                                            <td>h.chandler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona</td>
                                                            <td>Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                            <td>6200</td>
                                                            <td>r.davidson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen</td>
                                                            <td>Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                            <td>2360</td>
                                                            <td>c.hurst@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya</td>
                                                            <td>Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                            <td>1667</td>
                                                            <td>s.frost@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena</td>
                                                            <td>Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                            <td>3814</td>
                                                            <td>j.gaines@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn</td>
                                                            <td>Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                            <td>9497</td>
                                                            <td>q.flynn@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde</td>
                                                            <td>Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                            <td>6741</td>
                                                            <td>c.marshall@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley</td>
                                                            <td>Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                            <td>3597</td>
                                                            <td>h.kennedy@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana</td>
                                                            <td>Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                            <td>1965</td>
                                                            <td>t.fitzpatrick@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael</td>
                                                            <td>Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                            <td>1581</td>
                                                            <td>m.silva@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul</td>
                                                            <td>Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                            <td>3059</td>
                                                            <td>p.byrd@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria</td>
                                                            <td>Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                            <td>1721</td>
                                                            <td>g.little@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley</td>
                                                            <td>Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                            <td>2558</td>
                                                            <td>b.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai</td>
                                                            <td>Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                            <td>2290</td>
                                                            <td>d.rios@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette</td>
                                                            <td>Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                            <td>1937</td>
                                                            <td>j.caldwell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri</td>
                                                            <td>Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                            <td>6154</td>
                                                            <td>y.berry@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar</td>
                                                            <td>Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                            <td>8330</td>
                                                            <td>c.vance@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris</td>
                                                            <td>Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                            <td>3023</td>
                                                            <td>d.wilder@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica</td>
                                                            <td>Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                            <td>5797</td>
                                                            <td>a.ramos@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin</td>
                                                            <td>Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                            <td>8822</td>
                                                            <td>g.joyce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer</td>
                                                            <td>Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                            <td>9239</td>
                                                            <td>j.chang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden</td>
                                                            <td>Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                            <td>1314</td>
                                                            <td>b.wagner@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona</td>
                                                            <td>Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                            <td>2947</td>
                                                            <td>f.green@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou</td>
                                                            <td>Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                            <td>8899</td>
                                                            <td>s.itou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle</td>
                                                            <td>House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                            <td>2769</td>
                                                            <td>m.house@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki</td>
                                                            <td>Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                            <td>6832</td>
                                                            <td>s.burks@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott</td>
                                                            <td>Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                            <td>3606</td>
                                                            <td>p.bartlett@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin</td>
                                                            <td>Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                            <td>2860</td>
                                                            <td>g.cortez@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena</td>
                                                            <td>Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                            <td>8240</td>
                                                            <td>m.mccray@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity</td>
                                                            <td>Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                            <td>5384</td>
                                                            <td>u.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard</td>
                                                            <td>Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                            <td>7031</td>
                                                            <td>h.hatfield@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope</td>
                                                            <td>Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                            <td>6318</td>
                                                            <td>h.fuentes@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian</td>
                                                            <td>Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                            <td>9422</td>
                                                            <td>v.harrell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy</td>
                                                            <td>Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                            <td>7580</td>
                                                            <td>t.mooney@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson</td>
                                                            <td>Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                            <td>1042</td>
                                                            <td>j.bradshaw@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia</td>
                                                            <td>Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                            <td>2120</td>
                                                            <td>o.liang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno</td>
                                                            <td>Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                            <td>6222</td>
                                                            <td>b.nash@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura</td>
                                                            <td>Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                            <td>9383</td>
                                                            <td>s.yamamoto@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor</td>
                                                            <td>Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                            <td>8327</td>
                                                            <td>t.walton@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn</td>
                                                            <td>Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                            <td>2927</td>
                                                            <td>f.camacho@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge</td>
                                                            <td>Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                            <td>8352</td>
                                                            <td>s.baldwin@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida</td>
                                                            <td>Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                            <td>7439</td>
                                                            <td>z.frank@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita</td>
                                                            <td>Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                            <td>4389</td>
                                                            <td>z.serrano@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer</td>
                                                            <td>Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                            <td>3431</td>
                                                            <td>j.acosta@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara</td>
                                                            <td>Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                            <td>3990</td>
                                                            <td>c.stevens@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione</td>
                                                            <td>Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                            <td>1016</td>
                                                            <td>h.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael</td>
                                                            <td>Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                            <td>6733</td>
                                                            <td>l.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas</td>
                                                            <td>Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                            <td>8196</td>
                                                            <td>j.alexander@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad</td>
                                                            <td>Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                            <td>6373</td>
                                                            <td>s.decker@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael</td>
                                                            <td>Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                            <td>5384</td>
                                                            <td>m.bruce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna</td>
                                                            <td>Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                            <td>4226</td>
                                                            <td>d.snider@datatables.net</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- scroll horizontal & vertical -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Scroll - Vertical &amp; Horizontal</h4>
                                            <h6 class="card-subtitle">In this example you can see DataTables doing both horizontal and vertical scrolling at the same time. Note also that pagination is enabled in this example, and the scrolling accounts for this.</h6>
                                            <div class="table-responsive">
                                                <table id="scroll_ver_hor" class="table table-striped table-bordered display nowrap" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>First name</th>
                                                            <th>Last name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                            <th>Extn.</th>
                                                            <th>E-mail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                            <td>5421</td>
                                                            <td>t.nixon@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett</td>
                                                            <td>Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                            <td>8422</td>
                                                            <td>g.winters@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton</td>
                                                            <td>Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                            <td>1562</td>
                                                            <td>a.cox@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric</td>
                                                            <td>Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                            <td>6224</td>
                                                            <td>c.kelly@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi</td>
                                                            <td>Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                            <td>5407</td>
                                                            <td>a.satou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle</td>
                                                            <td>Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                            <td>4804</td>
                                                            <td>b.williamson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod</td>
                                                            <td>Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                            <td>9608</td>
                                                            <td>h.chandler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona</td>
                                                            <td>Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                            <td>6200</td>
                                                            <td>r.davidson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen</td>
                                                            <td>Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                            <td>2360</td>
                                                            <td>c.hurst@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya</td>
                                                            <td>Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                            <td>1667</td>
                                                            <td>s.frost@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena</td>
                                                            <td>Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                            <td>3814</td>
                                                            <td>j.gaines@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn</td>
                                                            <td>Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                            <td>9497</td>
                                                            <td>q.flynn@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde</td>
                                                            <td>Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                            <td>6741</td>
                                                            <td>c.marshall@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley</td>
                                                            <td>Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                            <td>3597</td>
                                                            <td>h.kennedy@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana</td>
                                                            <td>Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                            <td>1965</td>
                                                            <td>t.fitzpatrick@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael</td>
                                                            <td>Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                            <td>1581</td>
                                                            <td>m.silva@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul</td>
                                                            <td>Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                            <td>3059</td>
                                                            <td>p.byrd@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria</td>
                                                            <td>Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                            <td>1721</td>
                                                            <td>g.little@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley</td>
                                                            <td>Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                            <td>2558</td>
                                                            <td>b.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai</td>
                                                            <td>Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                            <td>2290</td>
                                                            <td>d.rios@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette</td>
                                                            <td>Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                            <td>1937</td>
                                                            <td>j.caldwell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri</td>
                                                            <td>Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                            <td>6154</td>
                                                            <td>y.berry@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar</td>
                                                            <td>Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                            <td>8330</td>
                                                            <td>c.vance@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris</td>
                                                            <td>Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                            <td>3023</td>
                                                            <td>d.wilder@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica</td>
                                                            <td>Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                            <td>5797</td>
                                                            <td>a.ramos@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin</td>
                                                            <td>Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                            <td>8822</td>
                                                            <td>g.joyce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer</td>
                                                            <td>Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                            <td>9239</td>
                                                            <td>j.chang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden</td>
                                                            <td>Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                            <td>1314</td>
                                                            <td>b.wagner@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona</td>
                                                            <td>Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                            <td>2947</td>
                                                            <td>f.green@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou</td>
                                                            <td>Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                            <td>8899</td>
                                                            <td>s.itou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle</td>
                                                            <td>House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                            <td>2769</td>
                                                            <td>m.house@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki</td>
                                                            <td>Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                            <td>6832</td>
                                                            <td>s.burks@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott</td>
                                                            <td>Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                            <td>3606</td>
                                                            <td>p.bartlett@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin</td>
                                                            <td>Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                            <td>2860</td>
                                                            <td>g.cortez@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena</td>
                                                            <td>Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                            <td>8240</td>
                                                            <td>m.mccray@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity</td>
                                                            <td>Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                            <td>5384</td>
                                                            <td>u.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard</td>
                                                            <td>Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                            <td>7031</td>
                                                            <td>h.hatfield@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope</td>
                                                            <td>Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                            <td>6318</td>
                                                            <td>h.fuentes@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian</td>
                                                            <td>Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                            <td>9422</td>
                                                            <td>v.harrell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy</td>
                                                            <td>Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                            <td>7580</td>
                                                            <td>t.mooney@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson</td>
                                                            <td>Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                            <td>1042</td>
                                                            <td>j.bradshaw@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia</td>
                                                            <td>Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                            <td>2120</td>
                                                            <td>o.liang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno</td>
                                                            <td>Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                            <td>6222</td>
                                                            <td>b.nash@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura</td>
                                                            <td>Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                            <td>9383</td>
                                                            <td>s.yamamoto@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor</td>
                                                            <td>Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                            <td>8327</td>
                                                            <td>t.walton@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn</td>
                                                            <td>Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                            <td>2927</td>
                                                            <td>f.camacho@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge</td>
                                                            <td>Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                            <td>8352</td>
                                                            <td>s.baldwin@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida</td>
                                                            <td>Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                            <td>7439</td>
                                                            <td>z.frank@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita</td>
                                                            <td>Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                            <td>4389</td>
                                                            <td>z.serrano@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer</td>
                                                            <td>Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                            <td>3431</td>
                                                            <td>j.acosta@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara</td>
                                                            <td>Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                            <td>3990</td>
                                                            <td>c.stevens@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione</td>
                                                            <td>Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                            <td>1016</td>
                                                            <td>h.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael</td>
                                                            <td>Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                            <td>6733</td>
                                                            <td>l.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas</td>
                                                            <td>Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                            <td>8196</td>
                                                            <td>j.alexander@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad</td>
                                                            <td>Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                            <td>6373</td>
                                                            <td>s.decker@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael</td>
                                                            <td>Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                            <td>5384</td>
                                                            <td>m.bruce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna</td>
                                                            <td>Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                            <td>4226</td>
                                                            <td>d.snider@datatables.net</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Language - Comma decimal place  -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Language - Comma decimal place</h4>
                                            <h6 class="card-subtitle">A dot (.) is used to mark the decimal place in Javascript, however, many parts of the world use a comma (,) and other characters such as the Unicode decimal separator (⎖) or a dash (-) are often used to show the decimal place in a displayed number.</h6>
                                            <div class="table-responsive">
                                                <table id="lang_comma_deci" class="table table-striped table-bordered display" style="width:100%">
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
                                                            <td>$320.800,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170.750,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433.060,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162.700,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327.900,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103.600,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90.560,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470.600,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385.750,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106.450,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85.600,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1.200.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92.575,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357.650,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206.850,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95.400,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324.050,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85.675,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109.850,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136.200,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645.750,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139.575,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98.540,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138.575,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125.250,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75.650,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145.600,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356.250,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86.500,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112.000,00</td>
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
                            <!-- language options -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Language Options</h4>
                                            <h6 class="card-subtitle">Changing the language information displayed by DataTables is as simple as passing in a <code> language</code> object to the DataTable constructor.</h6>
                                            <div class="table-responsive">
                                                <table id="lang_opt" class="table table-striped table-bordered display" style="width:100%">
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
                                                <span class="user-img"> <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </span>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                                    <span class="user-img"> <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </span>
                                                    </a>
                                                    <!-- Message -->
                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                                        <span class="user-img"> <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                                        <span class="mail-contnet">
                                                            <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </span>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                                            <span class="user-img"> <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                            <span class="mail-contnet">
                                                                <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <!-- Message -->
                                                            <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                                                <span class="user-img"> <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                                <span class="mail-contnet">
                                                                    <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                                </a>
                                                                <!-- Message -->
                                                                <!-- Message -->
                                                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                                                    <span class="user-img"> <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                                    <span class="mail-contnet">
                                                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                                                        <span class="user-img"> <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                                        <span class="mail-contnet">
                                                                            <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                                                        </a>
                                                                        <!-- Message -->
                                                                        <!-- Message -->
                                                                        <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                                                            <span class="user-img"> <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
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
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg"> </div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                                            <div class="desc">Contrary to popular belief</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg"> </div>
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
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg"> </div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                                            <div class="desc">Contrary to popular belief</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg"> </div>
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
                                                <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
                                                <!-- Bootstrap tether Core JavaScript -->
                                                <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
                                                <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                                                <!-- apps -->
                                                <script src="../../dist/js/app.min.js"></script>
                                                <script src="../../dist/js/app.init.js"></script>
                                                <script src="../../dist/js/app-style-switcher.js"></script>
                                                <!-- slimscrollbar scrollbar JavaScript -->
                                                <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                                                <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
                                                <!--Wave Effects -->
                                                <script src="../../dist/js/waves.js"></script>
                                                <!--Menu sidebar -->
                                                <script src="../../dist/js/sidebarmenu.js"></script>
                                                <!--Custom JavaScript -->
                                                <script src="../../dist/js/custom.min.js"></script>
                                                <!--This page plugins -->
                                                <script src="../../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
                                                <script src="../../dist/js/pages/datatable/datatable-basic.init.js"></script>
                                            </body>
                                        </html>