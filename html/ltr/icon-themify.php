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
                        <h4 class="page-title">Themify Icon</h4>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Arrows & Direction Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-up"></i> ti-arrow-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-right"></i> ti-arrow-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-left"></i> ti-arrow-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-down"></i> ti-arrow-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrows-vertical"></i> ti-arrows-vertical </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-up"></i> ti-angle-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-right"></i> ti-angle-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-left"></i> ti-angle-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-down"></i> ti-angle-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-double-up"></i> ti-angle-double-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-double-right"></i> ti-angle-double-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-double-left"></i> ti-angle-double-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-angle-double-down"></i> ti-angle-double-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-move"></i> ti-move </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-fullscreen"></i> ti-fullscreen </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-top-right"></i> ti-arrow-top-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-top-left"></i> ti-arrow-top-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-arrows-corner"></i> ti-arrows-corner </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-split-v"></i> ti-split-v </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-split-v-alt"></i> ti-split-v-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-split-h"></i> ti-split-h </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hand-point-up"></i> ti-hand-point-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hand-point-right"></i> ti-hand-point-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hand-point-left"></i> ti-hand-point-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hand-point-down"></i> ti-hand-point-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-back-right"></i> ti-back-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-back-left"></i> ti-back-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-exchange-vertical"></i> ti-exchange-vertical </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Web App Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-wand"></i> ti-wand </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-save"></i> ti-save </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-save-alt"></i> ti-save-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-direction"></i> ti-direction </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-direction-alt"></i> ti-direction-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-user"></i> ti-user </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-link"></i> ti-link </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-unlink"></i> ti-unlink </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-trash"></i> ti-trash </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-target"></i> ti-target </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-tag"></i> ti-tag </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-desktop"></i> ti-desktop </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-tablet"></i> ti-tablet </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-mobile"></i> ti-mobile </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-email"></i> ti-email </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-star"></i> ti-star </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-spray"></i> ti-spray </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-signal"></i> ti-signal </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shopping-cart"></i> ti-shopping-cart </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-settings"></i> ti-settings </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-search"></i> ti-search </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-zoom-in"></i> ti-zoom-in </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-zoom-out"></i> ti-zoom-out </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-cut"></i> ti-cut </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-ruler"></i> ti-ruler </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-ruler-pencil"></i> ti-ruler-pencil </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-ruler-alt"></i> ti-ruler-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bookmark"></i> ti-bookmark </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bookmark-alt"></i> ti-bookmark-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-reload"></i> ti-reload </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-plus"></i> ti-plus </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-minus"></i> ti-minus </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-close"></i> ti-close </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pin"></i> ti-pin </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pencil"></i> ti-pencil </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pencil-alt"></i> ti-pencil-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-paint-roller"></i> ti-paint-roller </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-paint-bucket"></i> ti-paint-bucket </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-na"></i> ti-na </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-medall"></i> ti-medall </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-medall-alt"></i> ti-medall-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-marker"></i> ti-marker </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-marker-alt"></i> ti-marker-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-lock"></i> ti-lock </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-unlock"></i> ti-unlock </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-location-arrow"></i> ti-location-arrow </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout"></i> ti-layout </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layers"></i> ti-layers </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layers-alt"></i> ti-layers-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-key"></i> ti-key </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-image"></i> ti-image </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-heart"></i> ti-heart </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-heart-broken"></i> ti-heart-broken </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hand-stop"></i> ti-hand-stop </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hand-open"></i> ti-hand-open </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hand-drag"></i> ti-hand-drag </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-flag"></i> ti-flag </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-flag-alt"></i> ti-flag-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-flag-alt-2"></i> ti-flag-alt-2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-eye"></i> ti-eye </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-import"></i> ti-import </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-export"></i> ti-export </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-cup"></i> ti-cup </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-crown"></i> ti-crown </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-comments"></i> ti-comments </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-comment"></i> ti-comment </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-comment-alt"></i> ti-comment-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-thought"></i> ti-thought </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-clip"></i> ti-clip </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-check"></i> ti-check </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-check-box"></i> ti-check-box </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-camera"></i> ti-camera </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-announcement"></i> ti-announcement </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-brush"></i> ti-brush </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-brush-alt"></i> ti-brush-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-palette"></i> ti-palette </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-briefcase"></i> ti-briefcase </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bolt"></i> ti-bolt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bolt-alt"></i> ti-bolt-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-blackboard"></i> ti-blackboard </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bag"></i> ti-bag </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-world"></i> ti-world </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-wheelchair"></i> ti-wheelchair </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-car"></i> ti-car </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-truck"></i> ti-truck </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-timer"></i> ti-timer </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-ticket"></i> ti-ticket </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-thumb-up"></i> ti-thumb-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-thumb-down"></i> ti-thumb-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-stats-up"></i> ti-stats-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-stats-down"></i> ti-stats-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shine"></i> ti-shine </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shift-right"></i> ti-shift-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shift-left"></i> ti-shift-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shift-right-alt"></i> ti-shift-right-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shift-left-alt"></i> ti-shift-left-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shield"></i> ti-shield </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-notepad"></i> ti-notepad </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-server"></i> ti-server </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pulse"></i> ti-pulse </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-printer"></i> ti-printer </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-power-off"></i> ti-power-off </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-plug"></i> ti-plug </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pie-chart"></i> ti-pie-chart </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-panel"></i> ti-panel </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-package"></i> ti-package </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-music"></i> ti-music </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-music-alt"></i> ti-music-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-mouse"></i> ti-mouse </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-mouse-alt"></i> ti-mouse-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-money"></i> ti-money </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-microphone"></i> ti-microphone </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-menu"></i> ti-menu </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-menu-alt"></i> ti-menu-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-map"></i> ti-map </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-map-alt"></i> ti-map-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-location-pin"></i> ti-location-pin </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-light-bulb"></i> ti-light-bulb </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-info"></i> ti-info </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-infinite"></i> ti-infinite </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-id-badge"></i> ti-id-badge </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-hummer"></i> ti-hummer </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-home"></i> ti-home </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-help"></i> ti-help </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-headphone"></i> ti-headphone </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-harddrives"></i> ti-harddrives </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-harddrive"></i> ti-harddrive </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-gift"></i> ti-gift </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-game"></i> ti-game </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-filter"></i> ti-filter </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-files"></i> ti-files </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-file"></i> ti-file </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-zip"></i> ti-zip </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-folder"></i> ti-folder </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-envelope"></i> ti-envelope </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-dashboard"></i> ti-dashboard </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-cloud"></i> ti-cloud </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-cloud-up"></i> ti-cloud-up </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-cloud-down"></i> ti-cloud-down </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-clipboard"></i> ti-clipboard </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-calendar"></i> ti-calendar </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-book"></i> ti-book </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bell"></i> ti-bell </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-basketball"></i> ti-basketball </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bar-chart"></i> ti-bar-chart </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-archive"></i> ti-archive </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-anchor"></i> ti-anchor </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-alert"></i> ti-alert </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-alarm-clock"></i> ti-alarm-clock </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-agenda"></i> ti-agenda </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-write"></i> ti-write </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-wallet"></i> ti-wallet </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-video-clapper"></i> ti-video-clapper </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-video-camera"></i> ti-video-camera </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-vector"></i> ti-vector </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-support"></i> ti-support </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-stamp"></i> ti-stamp </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-slice"></i> ti-slice </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-shortcode"></i> ti-shortcode </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-receipt"></i> ti-receipt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pin2"></i> ti-pin2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pin-alt"></i> ti-pin-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pencil-alt2"></i> ti-pencil-alt2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-eraser"></i> ti-eraser </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-more"></i> ti-more </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-more-alt"></i> ti-more-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-microphone-alt"></i> ti-microphone-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-magnet"></i> ti-magnet </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-line-double"></i> ti-line-double </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-line-dotted"></i> ti-line-dotted </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-line-dashed"></i> ti-line-dashed </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-ink-pen"></i> ti-ink-pen </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-info-alt"></i> ti-info-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-help-alt"></i> ti-help-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-headphone-alt"></i> ti-headphone-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-gallery"></i> ti-gallery </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-face-smile"></i> ti-face-smile </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-face-sad"></i> ti-face-sad </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-credit-card"></i> ti-credit-card </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-comments-smiley"></i> ti-comments-smiley </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-time"></i> ti-time </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-share"></i> ti-share </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-share-alt"></i> ti-share-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-rocket"></i> ti-rocket </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-new-window"></i> ti-new-window </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-rss"></i> ti-rss </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-rss-alt"></i> ti-rss-alt </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Control Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-stop"></i> ti-control-stop </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-shuffle"></i> ti-control-shuffle </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-play"></i> ti-control-play </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-pause"></i> ti-control-pause </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-forward"></i> ti-control-forward </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-backward"></i> ti-control-backward </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-volume"></i> ti-volume </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-skip-forward"></i> ti-control-skip-forward </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-skip-backward"></i> ti-control-skip-backward </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-record"></i> ti-control-record </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-control-eject"></i> ti-control-eject </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Text Editor Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-paragraph"></i> ti-paragraph </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-uppercase"></i> ti-uppercase </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-underline"></i> ti-underline </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-text"></i> ti-text </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-Italic"></i> ti-Italic </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-smallcap"></i> ti-smallcap </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-list"></i> ti-list </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-list-ol"></i> ti-list-ol </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-align-right"></i> ti-align-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-align-left"></i> ti-align-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-align-justify"></i> ti-align-justify </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-align-center"></i> ti-align-center </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-quote-right"></i> ti-quote-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-quote-left"></i> ti-quote-left </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Layout Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-width-full"></i> ti-layout-width-full </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-width-default"></i> ti-layout-width-default </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-width-default-alt"></i> ti-layout-width-default-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-tab"></i> ti-layout-tab </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-tab-window"></i> ti-layout-tab-window </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-tab-v"></i> ti-layout-tab-v </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-tab-min"></i> ti-layout-tab-min </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-slider"></i> ti-layout-slider </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-slider-alt"></i> ti-layout-slider-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-sidebar-right"></i> ti-layout-sidebar-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-sidebar-none"></i> ti-layout-sidebar-none </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-sidebar-left"></i> ti-layout-sidebar-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-placeholder"></i> ti-layout-placeholder </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-menu"></i> ti-layout-menu </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-menu-v"></i> ti-layout-menu-v </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-menu-separated"></i> ti-layout-menu-separated </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-menu-full"></i> ti-layout-menu-full </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-right"></i> ti-layout-media-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-right-alt"></i> ti-layout-media-right-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-overlay"></i> ti-layout-media-overlay </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-overlay-alt"></i> ti-layout-media-overlay-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-overlay-alt-2"></i> ti-layout-media-overlay-alt-2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-left"></i> ti-layout-media-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-left-alt"></i> ti-layout-media-left-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-center"></i> ti-layout-media-center </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-media-center-alt"></i> ti-layout-media-center-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-list-thumb"></i> ti-layout-list-thumb </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-list-thumb-alt"></i> ti-layout-list-thumb-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-list-post"></i> ti-layout-list-post </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-list-large-image"></i> ti-layout-list-large-image </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-line-solid"></i> ti-layout-line-solid </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-grid4"></i> ti-layout-grid4 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-grid3"></i> ti-layout-grid3 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-grid2"></i> ti-layout-grid2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-grid2-thumb"></i> ti-layout-grid2-thumb </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-cta-right"></i> ti-layout-cta-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-cta-left"></i> ti-layout-cta-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-cta-center"></i> ti-layout-cta-center </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-cta-btn-right"></i> ti-layout-cta-btn-right </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-cta-btn-left"></i> ti-layout-cta-btn-left </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-column4"></i> ti-layout-column4 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-column3"></i> ti-layout-column3 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-column2"></i> ti-layout-column2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-accordion-separated"></i> ti-layout-accordion-separated </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-accordion-merged"></i> ti-layout-accordion-merged </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-accordion-list"></i> ti-layout-accordion-list </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-widgetized"></i> ti-widgetized </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-widget"></i> ti-widget </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-widget-alt"></i> ti-widget-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-view-list"></i> ti-view-list </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-view-list-alt"></i> ti-view-list-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-view-grid"></i> ti-view-grid </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-upload"></i> ti-upload </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-download"></i> ti-download </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-loop"></i> ti-loop </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-sidebar-2"></i> ti-layout-sidebar-2 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-grid4-alt"></i> ti-layout-grid4-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-grid3-alt"></i> ti-layout-grid3-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-grid2-alt"></i> ti-layout-grid2-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-column4-alt"></i> ti-layout-column4-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-column3-alt"></i> ti-layout-column3-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-layout-column2-alt"></i> ti-layout-column2-alt </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Brand Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-flickr"></i> ti-flickr </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-flickr-alt"></i> ti-flickr-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-instagram"></i> ti-instagram </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-google"></i> ti-google </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-github"></i> ti-github </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-facebook"></i> ti-facebook </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-dropbox"></i> ti-dropbox </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-dropbox-alt"></i> ti-dropbox-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-dribbble"></i> ti-dribbble </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-apple"></i> ti-apple </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-android"></i> ti-android </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-yahoo"></i> ti-yahoo </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-trello"></i> ti-trello </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-stack-overflow"></i> ti-stack-overflow </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-soundcloud"></i> ti-soundcloud </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-sharethis"></i> ti-sharethis </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-sharethis-alt"></i> ti-sharethis-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-reddit"></i> ti-reddit </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-microsoft"></i> ti-microsoft </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-microsoft-alt"></i> ti-microsoft-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-linux"></i> ti-linux </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-jsfiddle"></i> ti-jsfiddle </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-joomla"></i> ti-joomla </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-html5"></i> ti-html5 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-css3"></i> ti-css3 </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-drupal"></i> ti-drupal </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-wordpress"></i> ti-wordpress </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-tumblr"></i> ti-tumblr </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-tumblr-alt"></i> ti-tumblr-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-skype"></i> ti-skype </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-youtube"></i> ti-youtube </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-vimeo"></i> ti-vimeo </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-vimeo-alt"></i> ti-vimeo-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-twitter"></i> ti-twitter </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-twitter-alt"></i> ti-twitter-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-linkedin"></i> ti-linkedin </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pinterest"></i> ti-pinterest </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-pinterest-alt"></i> ti-pinterest-alt </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-themify-logo"></i> ti-themify-logo </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-themify-favicon"></i> ti-themify-favicon </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 t-icon"> <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt </div>
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
</body>

</html>