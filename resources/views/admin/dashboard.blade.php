@extends('admin.adminbase')
@section('title')
    <title>CATKIN Admin Dashboard</title>
@endsection

@section('content')
<main class="content">
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
        <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex">
            <!-- Search form -->
            <form class="navbar-search form-inline" id="navbar-search-main">
                <div class="input-group input-group-merge search-bar">
                    <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                    <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                </div>
            </form>
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media d-flex align-items-center">
                    <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets/images/SharifKhan.jpg') }}">
                    <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                    <span class="mb-0 font-small font-weight-bold">Sharif Khan</span>
                    </div>
                </div>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="btn-toolbar dropdown">
            <button class="btn btn-primary btn-sm mr-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-plus mr-2"></span>Manage Course
            </button>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-left mt-2">
            <a class="dropdown-item font-weight-bold" href="{{ route('addcourse') }}"><span class="fas fa-tasks"></span>New Course</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('resourse') }}"><span class="fas fa-cloud-upload-alt"></span>Add Resourse</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('deleteCourse') }}"><span class="fas fa-user-shield"></span>Delete Courses</a>
        </div>
    </div>
    <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-primary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-primary">Export</button>
    </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fas fa-chart-line"></span></div>
                                <div class="d-sm-none">
                                    <h2 class="h5">Learners</h2>
                                    <h3 class="mb-1">{{ $learner }}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h5">Learners</h2>
                                    <h3 class="mb-1">{{ $learner }}</h3>
                                </div>
                                <small>Feb 1 - Apr 1,  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> WorldWide</small>
                                <div class="small mt-2">
                                    <span class="fas fa-angle-up text-success"></span>
                                    <span class="text-success font-weight-bold">18.2%</span> Since last month
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon icon-shape icon-md icon-shape-secondary rounded mr-4"><span class="fas fa-cash-register"></span></div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">Total Courses</h2>
                                        <h3 class="mb-1">{{$courses}}</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h5">Total Courses</h2>
                                        <h3 class="mb-1">{{$courses}}</h3>
                                    </div>
                                <small>Feb 1 - Apr 1,  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> Worldwide</small>
                                <div class="small mt-2">
                                    <span class="fas fa-angle-up text-success"></span>
                                    <span class="text-success font-weight-bold">28.2%</span> Since last month
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="ct-chart-traffic-share ct-golden-section ct-series-a">
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <h2 class="h5 mb-3">Course Catagory</h2>
                                <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-secondary mr-1"><span class="fas fa-desktop"></span></span> Android <a href="#" class="h6">{{$android}}%</a></h6>
                                <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-primary mr-1"><span class="fas fa-mobile-alt"></span></span> Web <a href="#" class="h6">{{$web}}%</a></h6>
                                <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-tertiary mr-1"><span class="fas fa-tablet-alt"></span></span> Others <a href="#" class="h6">{{$other}}%</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.table')
    </div>
    <footer class="footer section py-5">
        <div class="row">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <p class="mb-0 text-center text-xl-left">Copyright © 2021-<span class="current-year"></span> <a class="text-primary font-weight-normal" href="https://themesberg.com" target="_blank">CAKTKIN</a></p>
            </div>
        </div>
    </footer>
</main>
@endsection


