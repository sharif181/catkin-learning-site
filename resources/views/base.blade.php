<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <!--        Favicon         -->
    <link rel="shortcut icon" href="{{ asset('assets/images/catkin1.png') }}" type="image/x-icon">

    <!--      BOX ICON       -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-----------ION ICONS------------->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</head>

<body>
    <!--===================================Header Section ================================-->
    <header class="header" id="navbar">
        <a href="#catkin" class="header__logo">Catkin Course</a>
        <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">
                <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                <div class="nav__profile">
                    <div class="nav__img">
                        <img class="img-fluid" src="{{ asset('assets/images/catkin1.png') }}" alt="">
                    </div>

                    <div>
                        <a href="{{ route('home') }}" class="nav__name">Catkin Course</a>
                        <span class="nav__moto">Work Hard Get Success...</span>
                    </div>
                </div>
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="{{ route('home') }}" class="nav__link active">Catkin</a></li>
                        @auth
                        <li class="nav__item dropdown ">
                            <a href="#" class="nav__link ">Course<i class='bx bxs-chevron-down dropdown__icon'></i></a>
                            <ul class="dropdown__menu">
                                <li class="dropdown__item"><a href="/courses/android" class="nav__link__drop">Android Development</a></li>
                                <li class="dropdown__item"><a href="/courses/web" class="nav__link__drop">Web-Development</a></li>
                                <li class="dropdown__item"><a href="/courses/programming" class="nav__link__drop">Programming</a></li>
                                <li class="dropdown__item"><a href="/courses/graphics" class="nav__link__drop">Graphics</a></li>

                            </ul>
                        </li>
                        @endauth
                        <li class="nav__item">
                            <a href="/blogs/all" class="nav__link">Blog</a>
                        </li>
                        <li class="nav__item"><a href="#" class="nav__link">Instruction</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
                        @guest
                            <li class="nav__item"><a href="{{ route('login') }}" class="nav__link">Sign In</a></li>
                            <li class="nav__item"><a href="{{ route('register') }}" class="nav__link">Sign Up</a></li>
                        @endguest
                        @auth
                            <li class="nav__item"><a href="{{ route('logout') }}" class="nav__link">Logout</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!--============================================footer section================================-->
    <footer class="footer section ">
        <div class="footer__container bd-grid ">
            <div class="footer__box ">
                <h3 class="footer__title ">C&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;F</h3>
                <p class="footer__deal ">Products Store</p>
                <a href="# "><img src="{{ asset('assets/images/footerstore1.png') }}" alt=" " class="footer__store "></a>
                <a href="# "><img src="{{ asset('assets/images/footerstore2.png') }} " alt=" " class="footer__store "></a>
            </div>

            <div class="footer__box ">
                <h3 class="footer__title ">EXPLORE</h3>
                <ul>
                    <li><a href="# " class="footer__link ">Catkin</a></li>
                    <li><a href="# " class="footer__link ">Course</a></li>
                    <li>
                        <a href="# " class="footer__link ">Blog</a>
                    </li>
                    <li><a href="# " class="footer__link ">Instruction</a></li>
                    <li><a href="# " class="footer__link ">Contact</a></li>
                </ul>
            </div>


            <div class="footer__box ">
                <h3 class="footer__title ">OUR HELP</h3>
                <ul>
                    <li><a href="# " class="footer__link ">Codinism</a></li>
                    <li><a href="# " class="footer__link ">Privacy Policy</a></li>
                    <li><a href="# " class="footer__link ">Terms of Use</a></li>

                </ul>
            </div>

            <div class="footer__box ">
                <h3 class="footer__title ">OUR LOCATION</h3>
                <ul>
                    <li><i class='bx bx-map footer__icon'></i><a href="# " class="footer__link footer__link1 ">KhaganBazar,Ashulia,Dhaka Bangladesh</a></li>
                    <li><i class='bx bx-mail-send footer__icon'></i><a href="# " class="footer__link footer__link1 ">catkin@softwaresoluionfarm.com</a></li>
                    <li><i class='bx bx-phone-call footer__icon'></i><a href="# " class="footer__link footer__link1 ">+8801736648866</a></li>

                </ul>
            </div>


            <div class="footer__box ">
                <h3 class="footer__title ">FOLLOW</h3>

                <a href="# " class="footer__social ">
                    <i class='bx bxl-linkedin-square'></i>
                </a>


                <a href="# " class="footer__social ">
                    <i class='bx bxl-facebook-circle'></i>
                </a>
                <a href="# " class="footer__social ">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="# " class="footer__social ">
                    <i class='bx bxl-youtube'></i>
                </a>
            </div>
        </div>
        <p class="footer__copy ">&#169; 2021 Copyright All Right Reserved @ CSSF | Catkin Software Solution Farm</p>
    </footer>

    @yield('javascript')
</body>
</html>
