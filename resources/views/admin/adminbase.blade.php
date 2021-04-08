<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="CATKIN Admin Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link type="text/css" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/vendor/notyf/notyf.min.css') }}vendor/notyf/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/volt.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container-fluid bg-soft">
        <div class="row">
            <div class="col-12">
                <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
                    <div class="sidebar-inner px-4 pt-3">
                        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                            <div class="d-flex align-items-center">
                                <div class="user-avatar lg-avatar mr-4">
                                     <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                                </div>
                                <div class="d-block">
                                    <h2 class="h6">Hi, Jane</h2>
                                        <a href="../../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                                </div>
                            </div>
                            <div class="collapse-close d-md-none">
                                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                                aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item  active ">
                                <a href="{{ route('dashboard') }}" class="nav-link">
                                <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                                <span>Overview</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('addcourse') }}" class="nav-link">
                                    <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
                                    <span>Add New Course</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('resourse') }}" class="nav-link">
                                    <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
                                    <span>Add Resource</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('deleteCourse') }}" class="nav-link">
                                    <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
                                    <span>Delete Course</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('addblog') }}" class="nav-link">
                                    <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                                    <span>Add Blogs</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('detail') }}" class="nav-link">
                                    <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                                    <span>All Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>


<script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Vendor JS -->
<script src="{{ asset('assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

<!-- Slider -->
<script src="{{ asset('assets/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

<!-- Jarallax -->
<script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>

<!-- Smooth scroll -->
<script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

<!-- Count up -->
<script src="{{ asset('assets/vendor/countup.js/dist/countUp.umd.js') }}"></script>

<!-- Notyf -->
<script src="{{ asset('assets/vendor/notyf/notyf.min.js') }}"></script>

{{-- <!-- Charts -->
<script src="{{ asset('assets/vendor/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

<!-- Datepicker -->
<script src="{{ asset('assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

<!-- Simplebar -->
<script src="{{ asset('assets/vendor/simplebar/dist/simplebar.min.js') }}"></script> --}}

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{ asset('assets/js/volt.js') }}"></script>


</body>

</html>


