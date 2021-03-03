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
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/prism/prism.css">
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
                        <h4 class="page-title">Buttons</h4>
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
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">General Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;button-group&quot;&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-primary&quot;&gt;Primary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-success&quot;&gt;Success&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-info&quot;&gt;Info&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-warning&quot;&gt;Warning&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-danger&quot;&gt;Danger&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-light&quot;&gt;Light&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-dark&quot;&gt;Dark&lt;/button&gt;
                                &lt;/div&gt;                               
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Tags</h4>
                                <h6 class="card-subtitle">The <code>.btn</code>  classes are designed to be used with the <code>.&lt;button&gt;</code> element.</h6>
                                <a class="btn btn-primary" href="#" role="button">Link</a>
                                <button class="btn btn-primary" type="submit">Button</button>
                                <input class="btn btn-primary" type="button" value="Input">
                                <input class="btn btn-primary" type="submit" value="Submit">
                                <input class="btn btn-primary" type="reset" value="Reset">
                                <pre class="language-html scrollable">
                            <code>
                                &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt;
                                &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;reset&quot; value=&quot;Reset&quot;&gt;                          
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with outline</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-outline-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;button-group&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                             &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                              &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                        &lt;/div&gt;                             
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;button-group&quot;&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-primary&quot;&gt;Primary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-success&quot;&gt;Success&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-info&quot;&gt;Info&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-warning&quot;&gt;Warning&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-danger&quot;&gt;Danger&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-light&quot;&gt;Light&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-dark&quot;&gt;Dark&lt;/button&gt;
                                &lt;/div&gt;                            
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded outlined Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-dark">Dark</button>
                                    <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;button-group&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                                 &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                                  &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;                            
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-lg btn-primary">Large .btn-lg </button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Normal .btn</button>
                                    <button type="button" class="btn waves-effect waves-light btn-sm btn-success">Small .btn-sm</button>
                                    <button type="button" class="btn waves-effect waves-light btn-xs btn-info">Tiny .btn-xs</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;button-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-lg btn-primary&quot;&gt;Large .btn-lg &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-secondary&quot;&gt;Normal .btn&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-sm btn-success&quot;&gt;Small .btn-sm&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-xs btn-info&quot;&gt;Tiny .btn-xs&lt;/button&gt;
                                    &lt;/div&gt;                           
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes with rounded</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-rounded btn-success</code> to create a btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">Large .btn-lg </button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary">Normal .btn</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-sm btn-success">Small .btn-sm</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-xs btn-info">Tiny .btn-xs</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;button-group&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-lg btn-rounded btn-primary&quot;&gt;Large .btn-lg &lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-secondary&quot;&gt;Normal .btn&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-sm btn-success&quot;&gt;Small .btn-sm&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-xs btn-info&quot;&gt;Tiny .btn-xs&lt;/button&gt;
                                        &lt;/div&gt;                            
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                       
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rounded Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                             &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                             &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;     
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Block outline buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;row button-group&quot;&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                    
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rounded outline Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                  
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Large Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-lg btn-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-secondary">Second</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-secondary&quot;&gt;Second&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                 
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with icon</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> &amp; <code>i class ="fa fa-heart"</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-secondary"><i class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-info"><i class="far fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-warning"><i class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-danger"><i class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-light"><i class="far fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-dark"><i class="far fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-secondary waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Check</button>
                                        <button class="btn btn-info waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-light waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-heart"></i></span> Heart</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button class=&quot;btn btn-primary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-secondary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;Check&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-info waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-warning waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-envelope-o&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-danger waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-light waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-dark waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-primary btn-rounded"><i class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-secondary btn-rounded"> <i class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-success btn-rounded"><i class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-info btn-rounded"><i class="far fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-warning btn-rounded"><i class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-danger btn-rounded"><i class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-light btn-rounded"><i class="far fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-dark btn-rounded"><i class="far fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-outline-secondary"><i class="fa fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-outline-light"><i class="fa fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-outline-dark"><i class="fa fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-rounded&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-warning btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-dark btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-outline-secondary waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-check"></i></span> Check</button>
                                        <button class="btn btn-outline-info waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-outline-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-outline-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-outline-light waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-outline-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-outline-primary btn-rounded"><i class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-rounded"><i class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-rounded"><i class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-outline-info btn-rounded"><i class="fas fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-outline-warning btn-rounded"><i class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-rounded"><i class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-outline-light btn-rounded"><i class="fas fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-outline-dark btn-rounded"><i class="fas fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                 &lt;button class=&quot;btn btn-outline-primary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-secondary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;Check&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-info waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-warning waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-danger waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-light waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-dark waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary btn-rounded&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mt-4">
                                        <h4 class="card-title">Button with Dropdown</h4>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mt-4 no-button-group">
                                        <h4 class="card-title">Split-button-dropdowns</h4>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">Action</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Action</button>
                                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">Action</button>
                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light">Action</button>
                                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark">Action</button>
                                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Action
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                                  
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Action&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                             
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 mt-4 no-button-group">
                                        <h4 class="card-title">Large button dropdowns</h4>
                                        <h6 class="card-subtitle">Use a classes to create instant button</h6>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button class=&quot;btn btn-secondary btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Large button
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button class=&quot;btn btn-secondary btn-lg&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Large button
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                               
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-xlg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Drop downs</h4>
                                <h6 class="card-subtitle">Give class to the button <code>animated flipInX, flipInY, lightSpeedIn, slideInUp </code> use any animations class</h6>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInX">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated lightSpeedIn">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated slideInUp">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated bounce">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;btn-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                            Action
                                        &lt;/button&gt;
                                        &lt;div class=&quot;dropdown-menu animated flipInX&quot;&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xlg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Drop downs with icon</h4>
                                <h6 class="card-subtitle">Give class to the button <code>animated flipInX, flipInY, lightSpeedIn, slideInUp </code> use any animations class</h6>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu animated flipInX">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-trash"></i>
                                    </button>
                                    <div class="dropdown-menu animated flipInY">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <div class="dropdown-menu animated lightSpeedIn">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <div class="dropdown-menu animated slideInUp">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <div class="dropdown-menu animated bounce">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;btn-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                            &lt;i class=&quot;ti-trash&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;div class=&quot;dropdown-menu animated flipInY&quot;&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row mt-4">
                    <div class="col-lg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Circle buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-success</code> to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i> </button>
                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">Circle Large buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-lg btn-success</code> to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle btn-lg"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i> </button>
                                <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">Circle xtra Large buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-xl btn-success</code> to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle btn-xl"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i> </button>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle btn-lg&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle btn-xl&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;                   
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Social buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-facebook</code> to quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect waves-light" type="button"> <i class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect waves-light" type="button"> <i class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect waves-light" type="button"> <i class="fab fa-youtube"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">With Circle buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-success</code> to quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect btn-circle waves-light" type="button"> <i class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect btn-circle waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect btn-circle waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect btn-circle waves-light" type="button"> <i class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect btn-circle waves-light" type="button"> <i class="fab fa-youtube"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">with rounded buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-success</code> to quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-youtube"></i> </button>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;button class=&quot;btn btn-facebook waves-effect waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;  
                                    &lt;button class=&quot;btn btn-facebook waves-effect btn-circle waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button class=&quot;btn btn-facebook waves-effect btn-rounded waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;                 
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-justify"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-backward"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-play"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-forward"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button toolbar pagination</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary disabled">1</button>
                                                <button type="button" class="btn btn-info">2</button>
                                                <button type="button" class="btn btn-secondary">3</button>
                                                <button type="button" class="btn btn-secondary">4</button>
                                            </div>
                                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-secondary">5</button>
                                                <button type="button" class="btn btn-secondary">6</button>
                                                <button type="button" class="btn btn-secondary">7</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-secondary">8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-left&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-justify&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-right&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-backward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-play&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-forward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;                                            
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
                                                &lt;div class=&quot;btn-group mr-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary disabled&quot;&gt;1&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;2&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;3&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;4&lt;/button&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;btn-group mr-2&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;5&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;6&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;7&lt;/button&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;8&lt;/button&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button Toolbar with Input Group</h4>
                                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                          <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-secondary"><i class="ti-move"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="ti-fullscreen"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="ti-target"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="ti-trash"></i></button>
                                          </div>
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text" id="btnGroupAddon"><i class="ti-email"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Subscribe Now" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button Toolbar with Jutify Content Input Group</h4>
                                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-secondary"><i class="ti-move"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="ti-fullscreen"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="ti-target"></i></button>
                                            <button type="button" class="btn btn-secondary"><i class="ti-trash"></i></button>
                                          </div>
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text" id="btnGroupAddon2"><i class="ti-email"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Subscribe Now" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-toolbar mb-3&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
                                                  &lt;div class=&quot;btn-group mr-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-move&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-fullscreen&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-target&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-trash&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                  &lt;/div&gt;
                                                  &lt;div class=&quot;input-group&quot;&gt;
                                                    &lt;div class=&quot;input-group-prepend&quot;&gt;
                                                      &lt;div class=&quot;input-group-text&quot; id=&quot;btnGroupAddon&quot;&gt;&lt;i class=&quot;ti-email&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Subscribe Now&quot; aria-label=&quot;Input group example&quot; aria-describedby=&quot;btnGroupAddon&quot;&gt;
                                                  &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-toolbar justify-content-between&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
                                                  &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-move&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-fullscreen&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-target&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;&lt;i class=&quot;ti-trash&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                  &lt;/div&gt;
                                                  &lt;div class=&quot;input-group&quot;&gt;
                                                    &lt;div class=&quot;input-group-prepend&quot;&gt;
                                                      &lt;div class=&quot;input-group-text&quot; id=&quot;btnGroupAddon2&quot;&gt;&lt;i class=&quot;ti-email&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Subscribe Now&quot; aria-label=&quot;Input group example&quot; aria-describedby=&quot;btnGroupAddon2&quot;&gt;
                                                  &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons sizing</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-justify"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-backward"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-play"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-forward"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Nesting</h4>
                                        <h6 class="card-subtitle">creat with below code </h6>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary">1</button>
                                            <button type="button" class="btn btn-secondary">2</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;btn-group btn-group-lg&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-left&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-justify&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-right&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-backward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-play&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-forward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;                                           
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                             &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Button group with nested dropdown&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;1&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;2&lt;/button&gt;
                                                &lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
                                                    &lt;button id=&quot;btnGroupDrop1&quot; type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Dropdown
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupDrop1&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Dropdown link&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Dropdown link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Vertical buttons</h4>
                                        <h6 class="card-subtitle">creat vertical button with class of <code>.btn-group-vertical</code> </h6>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                        </div>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Button with js elements</h4>
                                        <h6 class="card-subtitle">There are a few easy ways to quickly get started with Bootstrap, each one ... </h6>
                                        <button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false">
                                            <i class="ti-settings text" aria-hidden="true"></i>
                                            <span class="text">Upload</span>
                                            <i class="ti-check text-active" aria-hidden="true"></i>
                                            <span class="text-active">Success</span>
                                        </button>
                                        <button type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                            <i class="ti-plus text" aria-hidden="true"></i>
                                            <i class="ti-minus text-active" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-toggle="button" aria-pressed="true">
                                            <i class="fa fa-heart text" aria-hidden="true"></i>
                                            <i class="fa fa-heart text-active text-danger" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-toggle="button" aria-pressed="true">
                                            <i class="fa fa-thumbs-o-up text" aria-hidden="true"> 20</i>
                                            <i class="fa fa-thumbs-o-up text-active text-danger" aria-hidden="true"> 21</i>
                                        </button>
                                        <div class="btn-group mt-3" data-toggle="buttons" role="group">
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="options" value="male" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1"> <i class="ti-check text-active" aria-hidden="true"></i> Male</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="options" value="female" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2"> <i class="ti-check text-active" aria-hidden="true"></i> Female</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="options" value="n/a" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio3"> <i class="ti-check text-active" aria-hidden="true"></i> N/A</label>
                                                </div>
                                            </label>
                                        </div>
                                        <br/>
                                        <br/>
                                        <h4 class="card-title">Button with checkbox</h4>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-info active">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox0" checked>
                                                    <label class="custom-control-label" for="checkbox0">Checked</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-info">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                                    <label class="custom-control-label" for="checkbox1">Checkbox 2</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-info">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                                                    <label class="custom-control-label" for="checkbox2">Checkbox 3</label>
                                                </div>
                                            </label>
                                        </div>
                                        <br/>
                                        <br/>
                                        <h4 class="card-title">Button with Radiobutton</h4>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" checked>
                                                    <label class="custom-control-label" for="customRadio4">Selected</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio5">Radio 2</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio6">Radio 3</label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Direction of the Dropdown</h4>
                                <h5 class="card-subtitle">Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</h5>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdowm Right Side</h5>
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">
                                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropright
                                          </button>
                                          <div class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <!-- Split dropright button -->
                                        <div class="btn-group dropright">
                                          <button type="button" class="btn btn-secondary">
                                            Split dropright
                                          </button>
                                          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropright</span>
                                          </button>
                                          <div class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdown Up Side</h5>
                                        <!-- Default dropup button -->
                                        <div class="btn-group dropup">
                                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropup
                                          </button>
                                          <div class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <!-- Split dropup button -->
                                        <div class="btn-group dropup">
                                          <button type="button" class="btn btn-secondary">
                                            Split dropup
                                          </button>
                                          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <div class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdowm Left Side</h5>
                                        <!-- Default dropleft button -->
                                        <div class="btn-group dropleft">
                                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropleft
                                          </button>
                                          <div class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <!-- Split dropleft button -->
                                        <div class="btn-group">
                                          <div class="btn-group dropleft" role="group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <span class="sr-only">Toggle Dropleft</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                          </div>
                                          <button type="button" class="btn btn-secondary">
                                            Split dropleft
                                          </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Menu Alignment</h4>
                                <h5 class="card-subtitle">Add <code>.dropdown-menu-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</h5>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Right-aligned menu
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                  </div>
                                </div>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Left-aligned menu
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-left">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Responsive Alignment</h4>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                    Left-aligned but right aligned when large screen
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-lg-right">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                  </div>
                                </div>
                                <div class="btn-group mt-2">
                                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                    Right-aligned but left aligned when large screen
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Different Menu Content</h4>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Drodown with Header
                                    </button>
                                    <div class="dropdown-menu">
                                      <h6 class="dropdown-header">Dropdown header</h6>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown with Divider
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown with Text
                                    </button>
                                    <div class="dropdown-menu p-4 text-muted" style="max-width: 400px;">
                                      <p>
                                        Some example text that's free-flowing within the dropdown menu.
                                      </p>
                                      <p class="mb-0">
                                        And this is more example text.
                                      </p>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown with Form
                                    </button>
                                    <div class="dropdown-menu">
                                      <form class="px-4 py-3">
                                        <div class="form-group">
                                          <label for="exampleDropdownFormEmail1">Email address</label>
                                          <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleDropdownFormPassword1">Password</label>
                                          <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-indigo" />
                                            <label for="md_checkbox_21">Remeber Me</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                      </form>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">New around here? Sign up</a>
                                      <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                                <h4 class="card-title mt-4">Dropdown Options</h4>
                                <div class="d-flex">
                                  <div class="dropdown mr-1">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                      Offset
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-secondary">Reference</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                               <h4 class="card-title">Toggle States [Button Plugin]</h4> 
                               <h5 class="card-subtitle">Add <code>data-toggle="button"</code> to toggle a button’s <code>active </code> state. If you’re pre-toggling a button, you must manually add the <code>.active</code> class and <code>aria-pressed="true"</code> to the <code>button.</code> </h5>
                               <div class="mt-3">
                                   <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                      Single toggle
                                    </button>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                               <h4 class="card-title">Checkbox buttons with Click[Checked] event</h4>
                               <h5 class="card-subtitle">Note that pre-checked buttons require you to manually add the <code>.active</code> class to the input's <code>label.</code></h5> 
                               <div class="btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-secondary active">
                                    <input type="checkbox" checked autocomplete="off"> Checked
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                               <h4 class="card-title">Radio buttons with Click[Checked] event</h4>
                               <h5 class="card-subtitle">Note that pre-checked buttons require you to manually add the <code>.active</code> class to the input's <code>label.</code></h5> 
                               <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-secondary active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                                  </label>
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                                  </label>
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
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
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img"> <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img"> <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img"> <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img"> <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img"> <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img"> <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img"> <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
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
    <!-- This Page JS -->
    <script src="../../assets/extra-libs/prism/prism.js"></script>
</body>

</html>