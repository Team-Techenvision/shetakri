<?php include '../include/header.php'; ?>
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
    <?php include '../include/topbar.php'; ?>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php include '../include/sidebar.php'; ?>
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
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="card-group">
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="m-r-10">
                                <span class="btn btn-circle btn-lg bg-danger">
                                    <i class="ti-clipboard text-white"></i>
                                </span>
                            </div>
                            <div>
                                New projects
                            </div>
                            <div class="ml-auto">
                                <h2 class="m-b-0 font-light">23</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="m-r-10">
                                <span class="btn btn-circle btn-lg btn-info">
                                    <i class="ti-wallet text-white"></i>
                                </span>
                            </div>
                            <div>
                                Total Earnings

                            </div>
                            <div class="ml-auto">
                                <h2 class="m-b-0 font-light">113</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="m-r-10">
                                <span class="btn btn-circle btn-lg bg-success">
                                    <i class="ti-shopping-cart text-white"></i>
                                </span>
                            </div>
                            <div>
                                Total Sales

                            </div>
                            <div class="ml-auto">
                                <h2 class="m-b-0 font-light">43</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="m-r-10">
                                <span class="btn btn-circle btn-lg bg-warning">
                                    <i class="mdi mdi-currency-usd text-white"></i>
                                </span>
                            </div>
                            <div>
                                Profit

                            </div>
                            <div class="ml-auto">
                                <h2 class="m-b-0 font-light">63</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <!-- Column -->


            </div>
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Product Sales</h4>
                                    <h5 class="card-subtitle">Overview of Latest Month</h5>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12 dl m-r-10">
                                        <li class="list-inline-item">
                                            <i class="fas fa-dot-circle text-info"></i> Ipad
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fas fa-dot-circle text-danger"></i> Iphone</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="product-sales" style="height:305px"></div>
                        </div>
                    </div>

                </div>
                <!-- Column -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-light-info">
                            <div class="d-flex align-items-center m-t-10 m-b-20">
                                <div class="m-r-10">
                                    <i class="icon-Cloud-Sun display-5"></i>
                                </div>
                                <div>
                                    <h1 class="m-b-0 font-light">35
                                        <sup>o</sup>
                                    </h1>
                                    <h5 class="font-light">Clear and sunny</h5>
                                </div>
                            </div>
                            <div id="ct-weather" style="height: 170px"></div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">

                                <div>
                                    <span class="btn-circle btn-lg btn btn-outline-secondary">
                                        <i class="wi wi-day-sunny"></i>
                                    </span>
                                </div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">Monday</h4>
                                    <h6 class="font-light m-b-0">March 2019</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-light-warning text-white">
                            <div id="weeksales-bar" class="position-relative" style="height: 270px"></div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">

                                <div>
                                    <span class="btn-circle btn-lg btn btn-outline-secondary">
                                        <i class="ti-shopping-cart"></i>
                                    </span>
                                </div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">Sales</h4>
                                    <h6 class="font-light m-b-0">March 2019</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Top Selliing Products -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- title -->
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Top Selling Products</h4>
                                    <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                                </div>
                                <div class="ml-auto">
                                    <div class="dl">
                                        <select class="custom-select">
                                            <option value="0" selected="">Monthly</option>
                                            <option value="1">Daily</option>
                                            <option value="2">Weekly</option>
                                            <option value="3">Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- title -->
                        </div>
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="border-top-0">Products</th>
                                        <th class="border-top-0">License</th>
                                        <th class="border-top-0">Support Agent</th>
                                        <th class="border-top-0">Technology</th>
                                        <th class="border-top-0">Tickets</th>
                                        <th class="border-top-0">Sales</th>
                                        <th class="border-top-0">Earnings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a class="btn btn-circle btn-danger text-white">EA</a>
                                                </div>
                                                <div class="">
                                                    <h4 class="m-b-0 font-16">Elite Admin</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Single Use</td>
                                        <td>John Doe</td>
                                        <td>
                                            <label class="label label-danger">Angular</label>
                                        </td>
                                        <td>46</td>
                                        <td>356</td>
                                        <td>
                                            <h5 class="m-b-0">$2850.06</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a class="btn btn-circle btn-info text-white">MA</a>
                                                </div>
                                                <div class="">
                                                    <h4 class="m-b-0 font-16">Monster Admin</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Single Use</td>
                                        <td>Venessa Fern</td>
                                        <td>
                                            <label class="label label-info">Vue Js</label>
                                        </td>
                                        <td>46</td>
                                        <td>356</td>
                                        <td>
                                            <h5 class="m-b-0">$2850.06</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a class="btn btn-circle btn-success text-white">MP</a>
                                                </div>
                                                <div class="">
                                                    <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Single Use</td>
                                        <td>John Doe</td>
                                        <td>
                                            <label class="label label-success">Bootstrap</label>
                                        </td>
                                        <td>46</td>
                                        <td>356</td>
                                        <td>
                                            <h5 class="m-b-0">$2850.06</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a class="btn btn-circle btn-purple text-white">AA</a>
                                                </div>
                                                <div class="">
                                                    <h4 class="m-b-0 font-16">Ample Admin</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Single Use</td>
                                        <td>John Doe</td>
                                        <td>
                                            <label class="label label-purple">React</label>
                                        </td>
                                        <td>46</td>
                                        <td>356</td>
                                        <td>
                                            <h5 class="m-b-0">$2850.06</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Top Selliing Products -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card bg-light-info no-card-border">
                                <div class="card-body">
                                    <h5 class="card-title">Sales Difference</h5>
                                    <div class="d-flex no-block">
                                        <div class="align-self-center no-shrink">
                                            <h2 class="m-b-0">$2842</h2>
                                            <h6 class="text-muted">(160-165 Sales)</h6>
                                        </div>
                                        <div class="ml-auto">
                                            <div id="sales" class="" style=" width:150px; height:140px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card bg-light-success no-card-border">
                                <div class="card-body">
                                    <h5 class="card-title">Sales Prediction</h5>
                                    <div class="d-flex no-block">
                                        <div class="align-self-end no-shrink">
                                            <h2 class="m-b-0">$6528</h2>
                                            <h6 class="text-muted">(160-165 Sales)</h6>
                                        </div>
                                        <div class="ml-auto">
                                            <div id="prediction"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="card o-income">
                        <div class="card-body">
                            <div class="d-flex m-b-30 no-block">
                                <h5 class="card-title m-b-0 align-self-center">Our Income</h5>
                                <div class="ml-auto">
                                    <select class="custom-select b-0">
                                        <option selected="">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                            </div>
                            <div id="income" style="height:250px; width:100%;"></div>
                            <ul class="list-inline m-t-30 text-center font-12">
                                <li class="list-inline-item">
                                    <i class="fa fa-circle text-success"></i> Growth</li>
                                <li class="list-inline-item">
                                    <i class="fa fa-circle text-info"></i> Net</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Comments</h4>
                        </div>
                        <div class="comment-widgets scrollable" style="height:560px;">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2">
                                    <img src="../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle">
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
                                    <img src="../assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
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
                                    <img src="../assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle">
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
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2">
                                    <img src="../assets/images/users/6.jpg" alt="user" width="50" class="rounded-circle">
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
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2">
                                    <img src="../assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle">
                                </div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
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
                        </div>
                    </div>
                </div>
                <!-- column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Chats</h4>
                            <div class="chat-box scrollable position-relative" style="height:475px;">
                                <!--chat Row -->
                                <ul class="chat-list">
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img">
                                            <img src="../assets/images/users/1.jpg" alt="user">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">James Anderson</h6>
                                            <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                        </div>
                                        <div class="chat-time">10:56 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">Bianca Doe</h6>
                                            <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-time">10:57 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd chat-item">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">I would love to join the team.</div>
                                            <br>
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd chat-item">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time">10:59 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img">
                                            <img src="../assets/images/users/3.jpg" alt="user">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">Angelina Rhodes</h6>
                                            <div class="box bg-light-info">Well we have good budget for the project</div>
                                        </div>
                                        <div class="chat-time">11:00 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <!-- <div id="someDiv"></div> -->
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-9">
                                    <div class="input-field m-t-0 m-b-0">
                                        <input type="text" id="textarea1" placeholder="Type and enter" class="form-control
                                border-0">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <a class="btn-circle btn-lg btn-cyan float-right text-white" href="javascript:void(0)">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
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
            All Rights Reserved by AdminBite admin. Designed and Developed by
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
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle">
        <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab
                               " aria-controls="pills-home" aria-selected="true">
                    <i class="mdi mdi-wrench font-20"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab
                               " aria-controls="chat" aria-selected="false">
                    <i class="mdi mdi-message-reply font-20"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab
                               " aria-controls="pills-contact" aria-selected="false">
                    <i class="mdi mdi-star-circle font-20"></i>
                </a>
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
                        <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar
                               " id="collapssidebar">
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
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                        </li>
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
                            <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
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
                            <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
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
                            <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                <span class="user-img">
                                    <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                    <span class="profile-status offline pull-right"></span>
                                </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Nirav Joshi</h5>
                                    <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                <span class="user-img">
                                    <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle">
                                    <span class="profile-status offline pull-right"></span>
                                </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Sunil Joshi</h5>
                                    <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                <span class="user-img">
                                    <img src="../assets/images/users/6.jpg" alt="user" class="rounded-circle">
                                    <span class="profile-status offline pull-right"></span>
                                </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Akshay Kumar</h5>
                                    <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                <span class="user-img">
                                    <img src="../assets/images/users/7.jpg" alt="user" class="rounded-circle">
                                    <span class="profile-status offline pull-right"></span>
                                </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Pavan kumar</h5>
                                    <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                <span class="user-img">
                                    <img src="../assets/images/users/8.jpg" alt="user" class="rounded-circle">
                                    <span class="profile-status offline pull-right"></span>
                                </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Varun Dhavan</h5>
                                    <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span>
                                </div>
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
                        <div class="sl-left bg-success">
                            <i class="ti-user"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-medium">Meeting today
                                <span class="sl-date"> 5pm</span>
                            </div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../assets/images/users/2.jpg"> </div>
                        <div class="sl-right">
                            <div class="font-medium">Go to the Doctor
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../assets/images/users/1.jpg"> </div>
                        <div class="sl-right">
                            <div>
                                <a href="javascript:void(0)">Stephen</a>
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-primary">
                            <i class="ti-user"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-medium">Meeting today
                                <span class="sl-date"> 5pm</span>
                            </div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../assets/images/users/4.jpg"> </div>
                        <div class="sl-right">
                            <div class="font-medium">Go to the Doctor
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../assets/images/users/6.jpg"> </div>
                        <div class="sl-right">
                            <div>
                                <a href="javascript:void(0)">Stephen</a>
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab 3 -->
        </div>
    </div>
</aside>

<?php include '../include/footer.php'; ?>