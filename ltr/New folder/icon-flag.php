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
                        <h4 class="page-title">Flag Icon</h4>
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
                                <h4 class="card-title">flag icons</h4>
                                <h6 class="card-subtitle">You can use any icons with class <code>flag-icon flag-icon-us</code></h6>
                                <div class="icon-list-demo row">
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ad" title="ad" id="ad"></i> AD</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ae" title="ae" id="ae"></i> AE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-af" title="af" id="af"></i> AF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ag" title="ag" id="ag"></i> AG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ai" title="ai" id="ai"></i> AU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-al" title="al" id="al"></i> AL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-am" title="am" id="am"></i> AM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ao" title="ao" id="ao"></i> AO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-aq" title="aq" id="aq"></i> AQ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ar" title="ar" id="ar"></i> AR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-as" title="as" id="as"></i> AS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-at" title="at" id="at"></i> AT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-au" title="au" id="au"></i> AU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-aw" title="aw" id="aw"></i> AW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ax" title="ax" id="ax"></i> AX</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-az" title="az" id="az"></i> AZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ba" title="ba" id="ba"></i> BA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bb" title="bb" id="bb"></i> BB</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bd" title="bd" id="bd"></i> BD</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-be" title="be" id="be"></i> BE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bf" title="bf" id="bf"></i> BF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bg" title="bg" id="bg"></i> BG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bh" title="bh" id="bh"></i> BH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bi" title="bi" id="bi"></i> BI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bj" title="bj" id="bj"></i> BJ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bl" title="bl" id="bl"></i> BL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bm" title="bm" id="bm"></i> BM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bn" title="bn" id="bn"></i> BN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bo" title="bo" id="bo"></i> BO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bq" title="bq" id="bq"></i> BQ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-br" title="br" id="br"></i> BR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bs" title="bs" id="bs"></i> BS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bt" title="bt" id="bt"></i> BT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bv" title="bv" id="bv"></i> BV</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bw" title="bw" id="bw"></i> BW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-by" title="by" id="by"></i> BY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-bz" title="bz" id="bz"></i> BZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i> CA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cc" title="cc" id="cc"></i> CC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cd" title="cd" id="cd"></i> CD</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cf" title="cf" id="cf"></i> CF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cg" title="cg" id="cg"></i> CG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ch" title="ch" id="ch"></i> CH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ci" title="ci" id="ci"></i> CI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ck" title="ck" id="ck"></i> CK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cl" title="cl" id="cl"></i> CL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cm" title="cm" id="cm"></i> CM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cn" title="cn" id="cn"></i> CN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-co" title="co" id="co"></i> CO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cr" title="cr" id="cr"></i> CR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cu" title="cu" id="cu"></i> CU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cv" title="cv" id="cv"></i> CV</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cw" title="cw" id="cw"></i> CW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cx" title="cx" id="cx"></i> CX</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cy" title="cy" id="cy"></i> CY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-cz" title="cz" id="cz"></i> CZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-de" title="de" id="de"></i> DE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-dj" title="dj" id="dj"></i> DJ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-dk" title="dk" id="dk"></i> DK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-dm" title="dm" id="dm"></i> DM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-do" title="do" id="do"></i> DO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-dz" title="dz" id="dz"></i> DZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ec" title="ec" id="ec"></i> EC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ee" title="ee" id="ee"></i> EE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-eg" title="eg" id="eg"></i> EG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-eh" title="eh" id="eh"></i> EH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-er" title="er" id="er"></i> ER</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-es" title="es" id="es"></i> ES</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-et" title="et" id="et"></i> ET</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-fi" title="fi" id="fi"></i> FI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-fj" title="fj" id="fj"></i> FJ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-fk" title="fk" id="fk"></i> FK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-fm" title="fm" id="fm"></i> FM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-fo" title="fo" id="fo"></i> FO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> FR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ga" title="ga" id="ga"></i> GA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gb" title="gb" id="gb"></i> GB</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gd" title="gd" id="gd"></i> GD</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ge" title="ge" id="ge"></i> GE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gf" title="gf" id="gf"></i> GF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gg" title="gg" id="gg"></i> GG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gh" title="gh" id="gh"></i> GH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gi" title="gi" id="gi"></i> GI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gl" title="gl" id="gl"></i> GL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gm" title="gm" id="gm"></i> GM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gn" title="gn" id="gn"></i> GN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gp" title="gp" id="gp"></i> GP</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gq" title="gq" id="gq"></i> GQ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gr" title="gr" id="gr"></i> GR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gs" title="gs" id="gs"></i> GS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gt" title="gt" id="gt"></i> GT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gu" title="gu" id="gu"></i> GU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gw" title="gw" id="gw"></i> GW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-gy" title="gy" id="gy"></i> GY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-hk" title="hk" id="hk"></i> HK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-hm" title="hm" id="hm"></i> HM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-hn" title="hn" id="hn"></i> HN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-hr" title="hr" id="hr"></i> HR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ht" title="ht" id="ht"></i> HT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-hu" title="hu" id="hu"></i> HU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-id" title="id" id="id"></i> ID</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ie" title="ie" id="ie"></i> IE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-il" title="il" id="il"></i> IL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-im" title="im" id="im"></i> IM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-in" title="in" id="in"></i> IN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-io" title="io" id="io"></i> IO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-iq" title="iq" id="iq"></i> IQ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ir" title="ir" id="ir"></i> IR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-is" title="is" id="is"></i> IS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-it" title="it" id="it"></i> IT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-je" title="je" id="je"></i> JE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-jm" title="jm" id="jm"></i> JM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-jo" title="jo" id="jo"></i> JO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-jp" title="jp" id="jp"></i> JP</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ke" title="ke" id="ke"></i> KE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-kg" title="kg" id="kg"></i> KG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-kh" title="kh" id="kh"></i> KH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ki" title="ki" id="ki"></i> KI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-km" title="km" id="km"></i> KM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-kn" title="kn" id="kn"></i> KN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-kp" title="kp" id="kp"></i> KP</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-kr" title="kr" id="kr"></i> KR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-kw" title="kw" id="kw"></i> KW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ky" title="ky" id="ky"></i> KY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-kz" title="kz" id="kz"></i> KZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-la" title="la" id="la"></i> LA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-lb" title="lb" id="lb"></i> LB</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-lc" title="lc" id="lc"></i> LC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-li" title="li" id="li"></i> LI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-lk" title="lk" id="lk"></i> LK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-lr" title="lr" id="lr"></i> LR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ls" title="ls" id="ls"></i> LS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-lt" title="lt" id="lt"></i> LT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-lu" title="lu" id="lu"></i> LU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-lv" title="lv" id="lv"></i> LV</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ly" title="ly" id="ly"></i> LY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ma" title="ma" id="ma"></i> MA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mc" title="mc" id="mc"></i> MC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-md" title="md" id="md"></i> MD</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-me" title="me" id="me"></i> ME</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mf" title="mf" id="mf"></i> MF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mg" title="mg" id="mg"></i> MG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mh" title="mh" id="mh"></i> MH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mk" title="mk" id="mk"></i> MK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ml" title="ml" id="ml"></i> ML</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mm" title="mm" id="mm"></i> MM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mn" title="mn" id="mn"></i> MN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mo" title="mo" id="mo"></i> MO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mp" title="mp" id="mp"></i> MP</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mq" title="mq" id="mq"></i> MQ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mr" title="mr" id="mr"></i> MR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ms" title="ms" id="ms"></i> MS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mt" title="mt" id="mt"></i> MT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mu" title="mu" id="mu"></i> MU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mv" title="mv" id="mv"></i> MV</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mw" title="mw" id="mw"></i> MW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mx" title="mx" id="mx"></i> MX</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-my" title="my" id="my"></i> MY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-mz" title="mz" id="mz"></i> MZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-na" title="na" id="na"></i> NA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-nc" title="nc" id="nc"></i> NC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ne" title="ne" id="ne"></i> NE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-nf" title="nf" id="nf"></i> NF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ng" title="ng" id="ng"></i> NG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ni" title="ni" id="ni"></i> NI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-nl" title="nl" id="nl"></i> NL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-no" title="no" id="no"></i> NO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-np" title="np" id="np"></i> NP</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-nr" title="nr" id="nr"></i> NR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-nu" title="nu" id="nu"></i> NU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-nz" title="nz" id="nz"></i> NZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-om" title="om" id="om"></i> OM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pa" title="pa" id="pa"></i> PA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pe" title="pe" id="pe"></i> PE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pf" title="pf" id="pf"></i> PF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pg" title="pg" id="pg"></i> PG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ph" title="ph" id="ph"></i> PH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pk" title="pk" id="pk"></i> PK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pl" title="pl" id="pl"></i> PL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pm" title="pm" id="pm"></i> PM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pn" title="pn" id="pn"></i> PN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pr" title="pr" id="pr"></i> PR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ps" title="ps" id="ps"></i> PS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> PT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-pw" title="pw" id="pw"></i> PW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-py" title="py" id="py"></i> PY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-qa" title="qa" id="qa"></i> QA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-re" title="re" id="re"></i> RE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ro" title="ro" id="ro"></i> RO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-rs" title="rs" id="rs"></i> RS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i> RU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-rw" title="rw" id="rw"></i> RW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sa" title="sa" id="sa"></i> SA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sb" title="sb" id="sb"></i> SB</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sc" title="sc" id="sc"></i> SC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sd" title="sd" id="sd"></i> SD</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-se" title="se" id="se"></i> SE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sg" title="sg" id="sg"></i> SG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sh" title="sh" id="sh"></i> SH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-si" title="si" id="si"></i> SI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sj" title="sj" id="sj"></i> SJ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sk" title="sk" id="sk"></i> SK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sl" title="sl" id="sl"></i> SL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sm" title="sm" id="sm"></i> SM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sn" title="sn" id="sn"></i> SN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-so" title="so" id="so"></i> SO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sr" title="sr" id="sr"></i> SR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ss" title="ss" id="ss"></i> SS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-st" title="st" id="st"></i> ST</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sv" title="sv" id="sv"></i> SV</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sx" title="sx" id="sx"></i> SX</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sy" title="sy" id="sy"></i> SY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-sz" title="sz" id="sz"></i> SZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tc" title="tc" id="tc"></i> TC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-td" title="td" id="td"></i> TD</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tf" title="tf" id="tf"></i> TF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tg" title="tg" id="tg"></i> TG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-th" title="th" id="th"></i> TH</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tj" title="tj" id="tj"></i> TJ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tk" title="tk" id="tk"></i> TK</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tl" title="tl" id="tl"></i> TL</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tm" title="tm" id="tm"></i> TM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tn" title="tn" id="tn"></i> TN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-to" title="to" id="to"></i> TO</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tr" title="tr" id="tr"></i> TR</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tt" title="tt" id="tt"></i> TT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tv" title="tv" id="tv"></i> TV</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tw" title="tw" id="tw"></i> TW</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-tz" title="tz" id="tz"></i> TZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ua" title="ua" id="ua"></i> UA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ug" title="ug" id="ug"></i> UG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-um" title="um" id="um"></i> UM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-us" title="us" id="us"></i> US</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-uy" title="uy" id="uy"></i> UY</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-uz" title="uz" id="uz"></i> UZ</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-va" title="va" id="va"></i> VA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-vc" title="vc" id="vc"></i> VC</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ve" title="ve" id="ve"></i> VE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-vg" title="vg" id="vg"></i> VG</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-vi" title="vi" id="vi"></i> VI</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-vn" title="vn" id="vn"></i> VN</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-vu" title="vu" id="vu"></i> VU</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-wf" title="wf" id="wf"></i> WF</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ws" title="ws" id="ws"></i> WS</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-ye" title="ye" id="ye"></i> YE</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-yt" title="yt" id="yt"></i> YT</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-za" title="za" id="za"></i> ZA</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-zm" title="zm" id="zm"></i> ZM</div>
                                    <div class="col-3 if-icon"><i class="flag-icon flag-icon-zw" title="zw" id="zw"></i> ZW</div>
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
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img"> <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img"> <img src="../assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img"> <img src="../assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img"> <img src="../assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
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
</body>

</html>