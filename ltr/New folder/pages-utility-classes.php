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
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/extra-libs/prism/prism.css">
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
                        <h4 class="page-title">Helper Classes</h4>
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
                        <h4 class="card-title">Custom Classes</h4>
                        <div class="card">
                            <div class="card-body">
                                <!-- .row -->
                                <div class="row">
                                    <!-- .col -->
                                    <div class="col-12">
                                        <h4 class="card-title">Text Color Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-muted</code> </td>
                                                    <td class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-primary</code> </td>
                                                    <td class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-success</code> </td>
                                                    <td class="text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-info</code> </td>
                                                    <td class="text-info">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-warning</code> </td>
                                                    <td class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-danger</code> </td>
                                                    <td class="text-danger">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-dark</code> </td>
                                                    <td class="text-dark">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr/> </div>
                                    <!-- .col -->
                                    <div class="col-12">
                                        <h4 class="card-title">Font Weight</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-light</code> </td>
                                                    <td>Font weight will be light (300).</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-normal</code> </td>
                                                    <td>Font weight will be normal</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-bold </code> </td>
                                                    <td>Font weight will be bold (700)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr/> </div>
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-0</code> </td>
                                                    <td>Padding will be 0px from all side.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-10</code> </td>
                                                    <td>Padding will be 10px from all side.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-20</code> </td>
                                                    <td>Padding will be 20px from all side</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding Left Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-0</code> </td>
                                                    <td>Only Padding Left will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-10 </code> </td>
                                                    <td>Only Padding Left will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-20</code> </td>
                                                    <td>Only Padding Left will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding right Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-0</code> </td>
                                                    <td>Only Padding right will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-10 </code> </td>
                                                    <td>Only Padding right will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-20</code> </td>
                                                    <td>Only Padding right will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding top Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-0</code> </td>
                                                    <td>Only Padding top will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-10 </code> </td>
                                                    <td>Only Padding top will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-20</code> </td>
                                                    <td>Only Padding top will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr/> </div>
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin top Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-5</code> </td>
                                                    <td>Only Margin top will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-10 </code> </td>
                                                    <td>Only Margin top will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-15 </code> </td>
                                                    <td>Only Margin top will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-20</code> </td>
                                                    <td>Only Margin top will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-30</code> </td>
                                                    <td>Only Margin top will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                                    <td>Only Margin top will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin Bottom Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-5</code> </td>
                                                    <td>Only Margin Bottom will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-10 </code> </td>
                                                    <td>Only Margin Bottom will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-15 </code> </td>
                                                    <td>Only Margin Bottom will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-20</code> </td>
                                                    <td>Only Margin Bottom will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-30</code> </td>
                                                    <td>Only Margin Bottom will be 30px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin Right Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-5</code> </td>
                                                    <td>Only Margin Right will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-10 </code> </td>
                                                    <td>Only Margin Right will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-15 </code> </td>
                                                    <td>Only Margin Right will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-20</code> </td>
                                                    <td>Only Margin Right will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-30</code> </td>
                                                    <td>Only Margin Right will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-40</code> </td>
                                                    <td>Only Margin Right will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin Left Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-5</code> </td>
                                                    <td>Only Margin Left will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-10 </code> </td>
                                                    <td>Only Margin Left will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-15 </code> </td>
                                                    <td>Only Margin Left will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-20</code> </td>
                                                    <td>Only Margin Left will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-30</code> </td>
                                                    <td>Only Margin Left will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-40</code> </td>
                                                    <td>Only Margin Left will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-12 m-t-40 m-b-40">
                                        <hr> </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <h4 class="card-title">Background Colors</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-primary</code> </td>
                                                    <td>For Primary background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-success</code> </td>
                                                    <td>For Success (green) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-info</code> </td>
                                                    <td>For info (Blue) background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <h4 class="card-title">&nbsp;</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-warning</code> </td>
                                                    <td>For Warning (yellow) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-danger</code> </td>
                                                    <td>For Danger (red) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-theme</code> </td>
                                                    <td>For Theme background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <h4 class="card-title">&nbsp;</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-theme-dark</code> </td>
                                                    <td>For theme dark background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-inverse </code> </td>
                                                    <td>For inverse (dark) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-purple</code> </td>
                                                    <td>For Purple background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <h4 class="card-title m-t-40">Bootstrap Classes</h4>
                <!-- Borders -->
                <div class="card">
                    <!--Add borders-->
                    <div class="card-body">
                        <h4 class="card-title">Borders</h4>
                        <h6 class="card-subtitle">Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.</h6>
                        <h4 class="card-title m-t-30">Additive border</h4>
                        <h6 class="card-subtitle">Use of below classes as per your requiements, which side you want border.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.border</code></td>
                                    <td>Use to add solid border of 1px on every side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-top</code></td>
                                    <td>Use to add solid border top of 1px on obejct.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-bottom</code></td>
                                    <td>Use to add solid border bottom of 1px on object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-left</code></td>
                                    <td>Use to add solid border left of 1px on object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-right</code></td>
                                    <td>Use to add solid border right of 1px on object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Add borders-->
                    <!--Remove borders-->
                    <div class="card-body">
                        <div class="card-text my-1">
                            <h4 class="card-title">Subtractive border</h4>
                            <h6 class="card-subtitle">Use of below classes as per your requiements, which side you don't want to add border.</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.no-border</code></td>
                                    <td>Use when remove border from all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-top-0</code></td>
                                    <td>Use when remove border from the top side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-bottom-0</code></td>
                                    <td>Use when remove border from the bottom side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-left-0</code></td>
                                    <td>Use when remove border from the left side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-right-0</code></td>
                                    <td>Use when remove border from the right side of the object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Remove borders-->
                    <!--Border color-->
                    <div class="card-body">
                        <h4 class="card-title">Border color</h4>
                        <h6 class="card-subtitle">When you want add color in the border you can choose any of the below classes.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.border border-primary</code></td>
                                    <td>Use when add primary color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-secondary</code></td>
                                    <td>Use when add secondary color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-success</code></td>
                                    <td>Use when add success color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-danger</code></td>
                                    <td>Use when add danger color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-warning</code></td>
                                    <td>Use when add warning color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-info</code></td>
                                    <td>Use when add info color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-light</code></td>
                                    <td>Use when add light color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-dark</code></td>
                                    <td>Use when add dark color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-white</code></td>
                                    <td>Use when add white color border to all side of the object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Border color-->
                    <!--Border-radius-->
                    <div class="card-body">
                        <h4 class="card-title">Border-radius</h4>
                        <h6 class="card-subtitle">Use to give rounded corner to the object.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.rounded</code></td>
                                    <td>Add round corners border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-top</code></td>
                                    <td>Add round corners border to top side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-bottom</code></td>
                                    <td>Add round corners border to bottom side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-left</code></td>
                                    <td>Add round corners border to left side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-right</code></td>
                                    <td>Add round corners border to right side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-circle</code></td>
                                    <td>Create round circle border of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-0</code></td>
                                    <td>Remove border corder from the all side of the object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Border-radius-->
                </div>
                <!--/ Borders-->
                <!--Clearfix-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Clearfix</h4>
                        <h6 class="card-subtitle">Quickly and easily clear floated content within a container by adding a clearfix utility.</h6>
                        <span>Easily clear <code>float</code>s by adding <code>.clearfix</code> <strong>to the parent element</strong>. Can also be used as a mixin.</span>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="clearfix"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                        <pre class="language-html scrollable">
                                <code>
                                    // Mixin itself
                                    @mixin clearfix() {
                                      &::after {
                                        display: block;
                                        content: "";
                                        clear: both;
                                      }
                                    }
                                    
                                    // Usage as a mixin
                                    .element {
                                      @include clearfix;
                                    };
                                </code>
                            </pre>
                        <p class="py-1">The following example shows how the clearfix can be used. Without the clearfix the wrapping div would not span around the buttons which would cause a broken layout.</p>
                        <div class="bd-example my-3">
                            <div class="bg-cyan clearfix">
                                <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
                                <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="bg-cyan clearfix"&gt;
                                  &lt;button type="button" class="btn btn-secondary float-left"&gt;Example Button floated left&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-secondary float-right"&gt;Example Button floated right&lt;/button&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Clearfix-->
                <!--Close icon-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Close icon</h4>
                        <h6 class="card-subtitle">Use a generic close icon for dismissing content like modals and alerts.</h6>
                        <span><strong>Be sure to include text for screen readers</strong>, as we’ve done with <code>aria-label</code>.</span>
                        <div class="bd-example d-flex">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;button type="button" class="close" aria-label="Close"&gt;
                                  &lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
                                &lt;/button&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Close icon-->
                <!-- Display property -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Display property</h4>
                        <h6 class="card-subtitle">Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.</h6>
                        <h4 class="card-title m-t-30">Basic display values</h4>
                        <h6 class="card-subtitle">The <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/display"><code>display</code> property</a> accepts a handful of values and we support many of them with utility classes. We purposefully don’t provide every value as a utility, so here’s what we support:</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.d-none</code></td>
                                    <td>Used for object to hide on all viewports.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-inline</code></td>
                                    <td>Used for object to behave like an inline object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-inline-block</code></td>
                                    <td>Used for object to behave like an inline-block object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-block</code></td>
                                    <td>Used for object to behave like an block object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-table</code></td>
                                    <td>Used for object to behave like <code>&lt;table&gt;</code> object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-table-cell</code></td>
                                    <td>Used for object to behave like <code>&lt;td&gt;</code> object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-flex</code></td>
                                    <td>Used for object as a block-level flex container.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-inline-flex</code></td>
                                    <td>Used for object as an inline-level flex container.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <p>Use above classes as per your requirements. For example, here’s how you could use the inline, block, or inline-block utilities.</p>
                        <div class="bd-example my-3">
                            <div class="d-inline bg-info p-1 text-white">d-inline</div>
                            <div class="d-inline bg-info  p-1 text-white">d-inline</div>
                        </div>
                        <pre class="language-markup">
                                <code>
                                    &lt;div class="d-inline bg-info"&gt;d-inline&lt;/div&gt;
                                    &lt;div class="d-inline bg-info"&gt;d-inline&lt;/div&gt;
                                </code>
                            </pre>
                        <div class="bd-example my-3">
                            <span class="d-block bg-info p-1 text-white">d-block</span>
                        </div>
                        <pre><code class="language-markup">
                                &lt;span class="d-block bg-info"&gt;d-block&lt;/span&gt;
                                </code></pre>
                        <div class="bd-example my-3">
                            <div class="d-inline-block bg-info p-1 text-white">d-inline-block</div>
                            <div class="d-inline-block bg-info p-1 text-white">d-inline-block</div>
                        </div>
                        <pre><code class="language-markup">
                            &lt;div class="d-inline-block bg-info"&gt;d-inline-block&lt;/div&gt;
                            &lt;div class="d-inline-block bg-info"&gt;d-inline-block&lt;/div&gt;
                            </code></pre>
                        <p>Responsive variations also exist for every single utility mentioned above.
                        </p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline-flex</code></li>
                        </ul>
                        <h4 class="card-title m-t-30">Hiding Elements</h4>
                        <p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide element responsively for each screen size.</p>
                        <p>To hide elements simply use the <code>.d-none</code> class or one of the <code>.d-{sm,md,lg,xl}-none</code> classes for any responsive screen variation.</p>
                        <p>To show an element only on a given interval of screen sizes you can combine one <code>.d-*-none</code> class with a <code>.d-*-*</code> class, for example <code>.d-none.d-md-block.d-xl-none</code> will hide the element for all screen sizes except on medium and large devices.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Screen Size</th>
                                    <th>Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hidden on all</td>
                                    <td><code>d-none</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on xs</td>
                                    <td><code>d-none d-sm-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on sm</td>
                                    <td><code>d-sm-none d-md-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on md</td>
                                    <td><code>d-md-none d-lg-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on lg</td>
                                    <td><code>d-lg-none d-xl-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on xl</td>
                                    <td><code>d-xl-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible on all</td>
                                    <td><code>d-block</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on xs</td>
                                    <td><code>d-block d-sm-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on sm</td>
                                    <td><code>d-none d-sm-block d-md-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on md</td>
                                    <td><code>d-none d-md-block d-lg-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on lg</td>
                                    <td><code>d-none d-lg-block d-xl-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on xl</td>
                                    <td><code>d-none d-xl-block</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Display in print</h4>
                        <h6 class="card-subtitle">Change the <code>display</code> value of elements when printing with our print display utilities.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Class</th>
                                    <th>Print style</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.d-print-none</code></td>
                                    <td>Applies <code>display: none</code> to the element when printing</td>
                                </tr>
                                <tr>
                                    <td><code>.d-print-inline</code></td>
                                    <td>Applies <code>display: inline</code> to the element when printing</td>
                                </tr>
                                <tr>
                                    <td><code>.d-print-inline-block</code></td>
                                    <td>Applies <code>display: inline-block</code> to the element when printing</td>
                                </tr>
                                <tr>
                                    <td><code>.d-print-block</code></td>
                                    <td>Applies <code>display: block</code> to the element when printing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Display-->
                </div>
                <!--Embeds-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Embed</h4>
                        <h6 class="card-subtitle">Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic ratio that scales on any device.</h6>
                        <p>Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <code>.embed-responsive-item</code> when you want to match the styling for other attributes.</p>
                        <p><strong>Pro-Tip!</strong> You don’t need to include <code>frameborder="0"</code> in your <code>&lt;iframe&gt;</code>s as we override that for you.</p>
                        <h4 class="card-title m-t-30">Example</h4>
                        <h6 class="card-subtitle">Wrap any embed like an <code>&lt;iframe&gt;</code> in a parent element with <code>.embed-responsive</code> and an aspect ratio. The <code>.embed-responsive-item</code> isn’t strictly required, but we encourage it.</h6>
                        <div class="bd-example">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DDwbjWCgxVM?" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                                  &lt;iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <h4 class="card-title m-t-30">Aspect ratios</h4>
                        <h6 class="card-subtitle">Aspect ratios can be customized with modifier classes.</h6>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;!-- 21:9 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-21by9"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                                
                                &lt;!-- 16:9 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                                
                                &lt;!-- 4:3 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-4by3"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                                
                                &lt;!-- 1:1 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-1by1"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Embeds-->
                <!--Flex-->
                <div class="card">
                    <!--Enable flex behaviors-->
                    <div class="card-body">
                        <h4 class="card-title">Flex</h4>
                        <h6 class="card-subtitle">Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.</h6>
                        <h4 class="card-title m-t-30">Enable flex behaviors</h4>
                        <h6 class="card-subtitle">Apply <code>display</code> utilities to create a flexbox container and transform <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified further with additional flex properties.</h6>
                        <div class="bd-example">
                            <div class="d-flex p-2 bg-cyan text-white">I'm a flexbox container!</div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex p-2"&gt;I'm a flexbox container!&lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-inline-flex p-2 bg-cyan text-white">I'm an inline flexbox container!</div>
                        </div>
                        <pre>
                            <code class="language-markup">
                                &lt;div class="d-inline-flex p-2"&gt;I'm an inline flexbox container!&lt;/div&gt;
                            </code>
                        </pre>
                        <p>Responsive variations also exist for <code>.d-flex</code> and <code>.d-inline-flex</code>.</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline-flex</code></li>
                        </ul>
                    </div>
                    <!--Direction-->
                    <div class="card-body">
                        <h4 class="card-title">Direction</h4>
                        <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is <code>row</code>. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).</p>
                        <p>Use <code>.flex-row</code> to set a horizontal direction (the browser default), or <code>.flex-row-reverse</code> to start the horizontal direction from the opposite side.</p>
                        <div class="bd-example">
                            <div class="d-flex flex-row bg-info text-white mb-3">
                                <div class="p-2 bg-info border-right">Flex item 1</div>
                                <div class="p-2 bg-info border-right">Flex item 2</div>
                                <div class="p-2 bg-info border-right">Flex item 3</div>
                            </div>
                            <div class="d-flex flex-row-reverse bg-info text-white">
                                <div class="p-2 bg-info border-left">Flex item 1</div>
                                <div class="p-2 bg-info border-left">Flex item 2</div>
                                <div class="p-2 bg-info border-left">Flex item 3</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex flex-row"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex flex-row-reverse"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <p>Use <code>.flex-column</code> to set a vertical direction, or <code>.flex-column-reverse</code> to start the vertical direction from the opposite side.</p>
                        <div class="bd-example">
                            <div class="d-flex flex-column bg-info text-white mb-3">
                                <div class="p-2 bg-info border-bottom">Flex item 1</div>
                                <div class="p-2 bg-info border-bottom">Flex item 2</div>
                                <div class="p-2 bg-info">Flex item 3</div>
                            </div>
                            <div class="d-flex flex-column-reverse bg-info text-white">
                                <div class="p-2 bg-info">Flex item 1</div>
                                <div class="p-2 bg-info border-bottom">Flex item 2</div>
                                <div class="p-2 bg-info border-bottom">Flex item 3</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex flex-column"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex flex-column-reverse"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>flex-direction</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-column-reverse</code></li>
                        </ul>
                    </div>
                    <!--Justify content-->
                    <div class="card-body">
                        <div class="card-text">
                            <h4 class="card-title">Justify content</h4>
                            <h6 class="card-subtitle">Use <code>justify-content</code> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <code>flex-direction: column</code>). Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>,
                                <code>between</code>, or <code>around</code>.</h6>
                            <div class="bd-example">
                                <div class="d-flex justify-content-start bg-light mb-3 text-white">
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-end bg-light mb-3 text-white">
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-center bg-light mb-3 text-white">
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-between bg-light mb-3 text-white">
                                    <div class="p-2 bg-info border-right">Flex item</div>
                                    <div class="p-2 bg-info border-left border-right">Flex item</div>
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-around bg-light text-white">
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                </div>
                            </div>
                            <pre class="language-markup scrollable">
                                <code>
                                    &lt;div class="d-flex justify-content-start"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-end"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-center"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-between"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-around"&gt;...&lt;/div&gt;
                                </code>
                            </pre>
                            <span>Responsive variations also exist for <code>justify-content</code>.</span>
                            <ul class="list-style-none">
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-around</code></li>
                            </ul>
                        </div>
                    </div>
                    <!--Align items-->
                    <div class="card-body">
                        <h4 class="card-title">Align items</h4>
                        <h6 class="card-subtitle">Use <code>align-items</code> utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</h6>
                        <div class="bd-example">
                            <div class="d-flex align-items-start bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-end bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-center bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-baseline bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-stretch bg-light text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex align-items-start"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-end"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-center"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-baseline"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-stretch"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>align-items</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-stretch</code></li>
                        </ul>
                    </div>
                    <!--Align self-->
                    <div class="card-body">
                        <h4 class="card-title">Align self</h4>
                        <h6 class="card-subtitle">Use <code>align-self</code> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from the same options as <code>align-items</code>: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</h6>
                        <div class="bd-example">
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="align-self-start p-2 bg-info border-right">Aligned flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="align-self-end p-2 bg-cyan border-right">Aligned flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="align-self-center p-2 bg-info border-right">Aligned flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="align-self-baseline p-2 bg-cyan border-right">Aligned flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="align-self-stretch p-2 bg-info border-right">Aligned flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="align-self-start"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-end"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-center"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-baseline"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-stretch"&gt;Aligned flex item&lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>align-self</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-stretch</code></li>
                        </ul>
                    </div>
                    <!--Auto margins-->
                    <div class="card-body">
                        <h4 class="card-title">Auto margins</h4>
                        <h6 class="card-subtitle">Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the right (<code>.mr-auto</code>), and pushing two items to the left (<code>.ml-auto</code>).</h6>
                        <span><strong>Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a non-default <code>justify-content</code> value.</strong> <a href="https://stackoverflow.com/a/37535548">See this StackOverflow answer</a> for more details.</span>
                        <div class="bd-example m-t-15">
                            <div class="d-flex bg-light text-white mb-3">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3">
                                <div class="mr-auto p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-left">Flex item</div>
                                <div class="p-2 bg-cyan border-left">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="ml-auto p-2 bg-info border-left">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex"&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                                
                                &lt;div class="d-flex"&gt;
                                  &lt;div class="mr-auto p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                                
                                &lt;div class="d-flex"&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="ml-auto p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <!--With align-items-->
                    <div class="card-body">
                        <h4 class="card-title">With align-items</h4>
                        <h6 class="card-subtitle">Vertically move one flex item to the top or bottom of a container by mixing <code>align-items</code>, <code>flex-direction: column</code>, and <code>margin-top: auto</code> or <code>margin-bottom: auto</code>.</h6>
                        <div class="bd-example">
                            <div class="d-flex align-items-start flex-column bg-light text-white mb-3" style="height: 200px;">
                                <div class="mb-auto p-2 bg-cyan">Flex item</div>
                                <div class="p-2 bg-cyan border-bottom">Flex item</div>
                                <div class="p-2 bg-cyan">Flex item</div>
                            </div>
                            <div class="d-flex align-items-end flex-column bg-light text-white mb-3" style="height: 200px;">
                                <div class="p-2 bg-info border-bottom">Flex item</div>
                                <div class="p-2 bg-info">Flex item</div>
                                <div class="mt-auto p-2 bg-info">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex align-items-start flex-column" style="height: 200px;"&gt;
                                  &lt;div class="mb-auto p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                                
                                &lt;div class="d-flex align-items-end flex-column" style="height: 200px;"&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="mt-auto p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <!--Wrap-->
                    <div class="card-body">
                        <h4 class="card-title">Wrap</h4>
                        <h6 class="card-subtitle">Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with <code>.flex-nowrap</code>, wrapping with <code>.flex-wrap</code>, or reverse wrapping with <code>.flex-wrap-reverse</code>.</h6>
                        <div class="bd-example">
                            <div class="d-flex flex-nowrap bg-light">
                                <div class="p-2 bg-cyan text-white">Flex item</div>
                                <div class="p-2 bg-cyan text-white">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex flex-nowrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex flex-wrap bg-light text-white">
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right border-top bg-cyan">Flex item</div>
                                <div class="p-2 border-right border-top bg-cyan">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex flex-wrap-reverse bg-light text-white">
                                <div class="p-2 bg-cyan border-bottom border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex flex-wrap-reverse"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>flex-wrap</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-wrap-reverse</code></li>
                        </ul>
                    </div>
                    <!--Order-->
                    <div class="card-body">
                        <h4 class="card-title">Order</h4>
                        <h6 class="card-subtitle">Change the <em>visual</em> order of specific flex items with a handful of <code>order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <code>order</code> takes any integer value (e.g., <code>5</code>), add custom CSS for any additional values needed.</h6>
                        <div class="bd-example">
                            <div class="d-flex flex-nowrap bg-light text-white">
                                <div class="order-3 p-2 bg-info border-right">First flex item</div>
                                <div class="order-2 p-2 bg-info border-right">Second flex item</div>
                                <div class="order-1 p-2 bg-info border-right">Third flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex flex-nowrap"&gt;
                                  &lt;div class="order-3 p-2"&gt;First flex item&lt;/div&gt;
                                  &lt;div class="order-2 p-2"&gt;Second flex item&lt;/div&gt;
                                  &lt;div class="order-1 p-2"&gt;Third flex item&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>order</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-12</code></li>
                        </ul>
                    </div>
                    <!--Align content-->
                    <div class="card-body">
                        <h4 class="card-title">Align content</h4>
                        <h6 class="card-subtitle">Use <code>align-content</code> utilities on flexbox containers to align flex items <em>together</em> on the cross axis. Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or <code>stretch</code>. To demonstrate these utilities, we’ve enforced <code>flex-wrap: wrap</code> and increased the number of flex items.</h6>
                        <span><strong>Heads up!</strong> This property has no effect on single rows of flex items.</span>
                        <div class="bd-example">
                            <div class="d-flex align-content-start flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-start flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-end flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-end flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-center flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-center flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-between flex-wrap bg-light text-white mb-3" style="height: 200px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-between flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-around flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-around flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-stretch flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-stretch flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>align-content</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-stretch</code></li>
                        </ul>
                    </div>
                </div>
                <!--/Flex-->
                <!--Float-->
                <div class="card">
                    <!--Overview-->
                    <div class="card-body">
                        <h4 class="card-title">Float</h4>
                        <h6 class="card-subtitle">Toggle floats on any element, across any breakpoint, using our responsive float utilities.</h6>
                        <span>These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/float">CSS <code>float</code> property</a>.
                        <code>!important</code> is included to avoid specificity issues. These use the same viewport breakpoints as our grid system.</span>
                        <span>Toggle a float with a class:</span>
                        <div class="bd-example bg-light m-t-15">
                            <div class="float-left">Float left on all viewport sizes</div>
                            <br>
                            <div class="float-right">Float right on all viewport sizes</div>
                            <br>
                            <div class="float-none">Don't float on all viewport sizes</div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="float-left"&gt;Float left on all viewport sizes&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-right"&gt;Float right on all viewport sizes&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-none"&gt;Don't float on all viewport sizes&lt;/div&gt;
                            </code>
                        </pre>
                        <h4 class="card-title m-t-30">Responsive</h4>
                        <h6 class="card-subtitle">Responsive variations also exist for each <code>float</code> value.</h6>
                        <div class="bd-example bg-light">
                            <div class="float-sm-left">Float left on viewports sized SM (small) or wider</div>
                            <br>
                            <div class="float-md-left">Float left on viewports sized MD (medium) or wider</div>
                            <br>
                            <div class="float-lg-left">Float left on viewports sized LG (large) or wider</div>
                            <br>
                            <div class="float-xl-left">Float left on viewports sized XL (extra-large) or wider</div>
                            <br>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="float-sm-left"&gt;Float left on viewports sized SM (small) or wider&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-md-left"&gt;Float left on viewports sized MD (medium) or wider&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-lg-left"&gt;Float left on viewports sized LG (large) or wider&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-xl-left"&gt;Float left on viewports sized XL (extra-large) or wider&lt;/div&gt;&lt;br&gt;
                            </code>
                        </pre>
                        <span>Here are all the support classes;</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-sm-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-sm-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-sm-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-md-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-md-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-md-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-lg-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-lg-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-lg-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-xl-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-xl-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-xl-none</code></li>
                        </ul>
                    </div>
                </div>
                <!--Image replacement-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Image replacement</h4>
                        <h6 class="card-subtitle">Swap text for background images with the image replacement class.</h6>
                        <span>Utilize the <code>.text-hide</code> class or mixin to help replace an element’s text content with a background image.</span>
                        <pre>
                            <code class="language-markup">
                                &lt;h1 class="text-hide"&gt;Custom heading&lt;/h1&gt;
                            </code>
                        </pre>
                        <span>Use the <code>.text-hide</code> class to maintain the accessibility and SEO benefits of heading tags, but want to utilize a <code>background-image</code> instead of text.</span>
                        <div class="bd-example">
                            <h1 class="text-hide my-2" style="background-image: url('../assets/images/logo-icon.png'); width: 30px; height: 26px;">Bootstrap</h1>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;h1 class="text-hide my-2" style="background-image: url('../assets/images/logo-icon.png'); width: 30px; height: 26px;"&gt;Bootstrap&lt;/h1&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Image replacement-->
                <!--position-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Position</h4>
                        <h6 class="card-subtitle">Use these shorthand utilities for quickly configuring the position of an element.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.position-fixed</code></td>
                                    <td>Changes object's position to fixed.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-relative</code></td>
                                    <td>Changes object's position to relative.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-absolute</code></td>
                                    <td>Changes object's position to absolute.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-static</code></td>
                                    <td>Changes object's position to static.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-sticky</code></td>
                                    <td>Changes object's position to static.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Fixed top</h4>
                        <h6 class="card-subtitle">Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add aditional CSS.</h6>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="fixed-top"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Fixed bottom</h4>
                        <h6 class="card-subtitle">Position an element at the bottom of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add aditional CSS.</h6>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="fixed-bottom"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Sticky top</h4>
                        <h6 class="card-subtitle">Position an element at the top of the viewport, from edge to edge, but only after you scroll past it. The <code>.sticky-top</code> utility uses CSS’s <code>position: sticky</code>, which isn’t fully supported in all browsers.</h6>
                        <span><strong>Microsoft Edge and IE11 will render <code>position: sticky</code> as <code>position: relative</code>.</strong> As such, we wrap the styles in a <code>@supports</code> query, limiting the stickiness to only browsers that properly can render it.</span>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="sticky-top"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/position-->
                <!--Screenreaders-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Screenreaders</h4>
                        <h6 class="card-subtitle">Use screenreader utilities to hide elements on all devices except screen readers.</h6>
                        <span>Hide an element to all devices <strong>except screen readers</strong> with <code>.sr-only</code>. Combine <code>.sr-only</code> with <code>.sr-only-focusable</code> to show the element again when it’s focused (e.g. by a keyboard-only user). Can also be used as mixins.</span>
                        <pre class="language-markup">
                            <code>
                                &lt;a class="sr-only sr-only-focusable" href="#content"&gt;Skip to main content&lt;/a&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/ Screenreaders-->
                <!--Sizing-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sizing</h4>
                        <h6 class="card-subtitle">Easily make an element as wide or as tall (relative to its parent) with our width and height utilities.</h6>
                        <span>Width and height utilities are generated from the <code>$sizes</code> Sass map in <code>_variables.scss</code>. Includes support for <code>25%</code>,<code>50%</code>, <code>75%</code>, and <code>100%</code> by default. Modify those values as you need to generate different utilities here.</span>
                        <div class="bd-example m-t-30">
                            <div class="w-25 p-3" style="background-color: #eee;">Width 25%</div>
                            <div class="w-50 p-3" style="background-color: #eee;">Width 50%</div>
                            <div class="w-75 p-3" style="background-color: #eee;">Width 75%</div>
                            <div class="w-100 p-3" style="background-color: #eee;">Width 100%</div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="w-25 p-3" style="background-color: #eee;"&gt;Width 25%&lt;/div&gt;
                                &lt;div class="w-50 p-3" style="background-color: #eee;"&gt;Width 50%&lt;/div&gt;
                                &lt;div class="w-75 p-3" style="background-color: #eee;"&gt;Width 75%&lt;/div&gt;
                                &lt;div class="w-100 p-3" style="background-color: #eee;"&gt;Width 100%&lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example m-t-30">
                            <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                <div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 25%</div>
                                <div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 50%</div>
                                <div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 75%</div>
                                <div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 100%</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                                  &lt;div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 25%&lt;/div&gt;
                                  &lt;div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 50%&lt;/div&gt;
                                  &lt;div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 75%&lt;/div&gt;
                                  &lt;div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 100%&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>You can also use <code>max-width: 100%;</code> and <code>max-height: 100%;</code> utilities as needed.</span>
                        <div class="bd-example m-t-30">
                            <!-- <img class="mw-100" data-src="holder.js/1000px100?text=Max-width%20%3D%20100%25" alt="Max-width = 100% [1000%x100]" style="height: 100px; width: 1000%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22782%22%20height%3D%22100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20782%20100%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15fc00274c0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15fc00274c0%22%3E%3Crect%20width%3D%22782%22%20height%3D%22100%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22176.3984375%22%20y%3D%2267.4%22%3EMax-width%20%3D%20100%25%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> -->
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;img class="mw-100" src="..." alt="Max-width 100%"&gt;
                            </code>
                        </pre>
                        <div class="bd-example m-t-30">
                            <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                <div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);">Max-height 100%</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                                  &lt;div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);"&gt;Max-height 100%&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <!--Fixed Width-->
                    <div class="card-body">
                        <h4 class="card-title">Fixed Width</h4>
                        <h6 class="card-subtitle">Add one of these to class to set fixed width of the content.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.width-{size}</code></td>
                                    <td>Set content fixed width in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.width-50</code></td>
                                </tr>
                                <tr>
                                    <td><code>.width-{size}-per</code></td>
                                    <td>Set content fixed width in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.width-5-per</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Fixed Width-->
                    <!--Fixed Height-->
                    <div class="card-body">
                        <h4 class="card-title">Fixed Height</h4>
                        <h6 class="card-subtitle">Add one of these to class to set fixed height of the content.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.height-{size}</code></td>
                                    <td>Set content fixed height in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.height-50</code></td>
                                </tr>
                                <tr>
                                    <td><code>.height-{size}-per</code></td>
                                    <td>Set content fixed height in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.height-5-per</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Fixed Height-->
                </div>
                <!--/Sizing-->
                <!-- Spacing -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Spacing</h4>
                        <h6 class="card-subtitle">Bootstrap includes a wide range of shorthand responsive margin and padding utility classes to modify an element's appearance.</h6>
                        <h4 class="card-title m-t-30">How it works</h4>
                        <p>Assign responsive-friendly <code>margin</code> or <code>padding</code> values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from <code>.25rem</code> to <code>3rem</code>.</p>
                        <h4 class="card-title m-t-30">Notation</h4>
                        <span>Spacing utilities that apply to all breakpoints, from <code>xs</code> to <code>xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code>min-width: 0</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</span>
                        <span>The classes are named using the format <code>{property}{sides}-{size}</code> for <code>xs</code> and <code>{property}{sides}-{breakpoint}-{size}</code> for <code>sm</code>, <code>md</code>, <code>lg</code>, and <code>xl</code>.</span>
                        <p class="m-t-20 m-b-0">Where <em>property</em> is one of:</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>m</code> - for classes that set
                                <code>margin</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>p</code> - for classes that set
                                <code>padding</code></li>
                        </ul>
                        <p class="m-t-20 m-b-0">Where<em>sides</em> is one of:</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>t</code> - for classes that set
                                <code>margin-top</code> or <code>padding-top</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>b</code> - for classes that set
                                <code>margin-bottom</code> or
                                <code>padding-bottom</code>
                            </li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>l</code> - for classes that set
                                <code>margin-left</code> or <code>padding-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>r</code> - for classes that set
                                <code>margin-right</code> or
                                <code>padding-right</code>
                            </li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>x</code> - for classes that set both <code>*-left</code> and
                                <code>*-right</code>
                            </li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>y</code> - for classes that set both <code>*-top</code> and <code>*-bottom</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i>blank - for classes that set a <code>margin</code> or <code>padding</code> on all 4 sides of the element</li>
                        </ul>
                        <p class="m-t-20 m-b-0">Where <em>size</em> is one of:</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>0</code> - for classes that eliminate the <code>margin</code> or <code>padding</code> by setting it to <code>0</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>1</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * .25</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>2</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * .5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>3</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>4</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * 1.5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>5</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * 3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>auto</code> - for classes that set the <code>margin</code> to auto</li>
                        </ul>
                        <p class="m-t-20 m-b-0">(You can add more sizes by adding entries to the <code>$spacers</code> Sass map variable.)</p>
                        <h4 class="card-title m-t-30">Horizontal centering</h4>
                        <h6 class="card-subtitle">Additionally, Bootstrap also includes an <code>.mx-auto</code> class for horizontally centering fixed-width block level content—that is, content that has <code>display: block</code> and a <code>width</code> set—by setting the horizontal margins to <code>auto</code>.</h6>
                        <div class="bd-example my-2">
                            <div class="mx-auto" style="width: 200px; background-color: rgba(86,61,124,.15);">
                                Centered element
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="mx-auto" style="width: 200px;"&gt;
                                    Centered element
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/ Spacing -->
                <!--vertical alignment-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Vertical alignment</h4>
                        <h6 class="card-subtitle">Easily change the vertical alignment of inline, inline-block, inline-table, and table cell elements.</h6>
                        <p>Change the alignment of elements with the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/vertical-align"><code>vertical-alignment</code></a> utilities. Please note that vertical-align only affects inline, inline-block, inline-table, and table cell elements.</p>
                        <p>Choose from <code>.align-baseline</code>, <code>.align-top</code>, <code>.align-middle</code>, <code>.align-bottom</code>, <code>.align-text-bottom</code>, and <code>.align-text-top</code> as needed.</p>
                        <div class="bd-example">
                            <span class="align-baseline">baseline</span>
                            <span class="align-top">top</span>
                            <span class="align-middle">middle</span>
                            <span class="align-bottom">bottom</span>
                            <span class="align-text-top">text-top</span>
                            <span class="align-text-bottom">text-bottom</span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.align-top</code></td>
                                    <td>Changes element's vertical alignment to top.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-middle</code></td>
                                    <td>Changes element's vertical alignment to middle.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-bottom</code></td>
                                    <td>Changes element's vertical alignment to bottom.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-baseline</code></td>
                                    <td>Changes element's vertical alignment to baseline.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-text-top</code></td>
                                    <td>Top of the element is aligned with the top of the parent element's font.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>.align-text-bottom</code></td>
                                    <td>The bottom of the element is aligned with the bottom of the parent element's font.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p>With table cells:</p>
                            <div class="bd-example">
                                <table class="bg-light" style="height: 100px;">
                                    <tbody>
                                        <tr>
                                            <td class="align-baseline">baseline</td>
                                            <td class="align-top">top</td>
                                            <td class="align-middle">middle</td>
                                            <td class="align-bottom">bottom</td>
                                            <td class="align-text-top">text-top</td>
                                            <td class="align-text-bottom">text-bottom</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <pre class="language-markup scrollable">
                                <code>
                                    &lt;table style="height: 100px;"&gt;
                                      &lt;tbody&gt;
                                        &lt;tr&gt;
                                          &lt;td class="align-baseline"&gt;baseline&lt;/td&gt;
                                          &lt;td class="align-top"&gt;top&lt;/td&gt;
                                          &lt;td class="align-middle"&gt;middle&lt;/td&gt;
                                          &lt;td class="align-bottom"&gt;bottom&lt;/td&gt;
                                          &lt;td class="align-text-top"&gt;text-top&lt;/td&gt;
                                          &lt;td class="align-text-bottom"&gt;text-bottom&lt;/td&gt;
                                        &lt;/tr&gt;
                                      &lt;/tbody&gt;
                                    &lt;/table&gt;
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
                <!--/vertical alignment-->
                <!--Visibility-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visibility</h4>
                        <h6 class="card-subtitle">Control the visibility, without modifying the display, of elements with visibility utilities.</h6>
                        <p>Set the <code>visibility</code> of elements with our visibility utilities. These do not modify the <code>display</code> value at all and are helpful for hiding content from most users, but still keeping them for screen readers.</p>
                        <p>Apply <code>.visible</code> or <code>.invisible</code> as needed.</p>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="visible"&gt;...&lt;/div&gt;
                                &lt;div class="invisible"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/ visibility-->
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
        <footer class="footer">
            © 2018 AdminX by themedesigner.in
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
    <!-- This Page JS -->
    <script src="../assets/extra-libs/prism/prism.js"></script>
</body>

</html>