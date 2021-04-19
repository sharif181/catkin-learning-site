    @extends('base')


    @section('title')
        <title> CSSF | Catkin Software Solution Farm </title>
        <!--          CSS Link         -->
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @endsection

    @section('content')

    <!--===================================Carousel__Section ================================-->
    <carousel__section>

        <div class="cursol__animation">
            <div id="defs" class="defilee-visually-hidden">
                <svg width="0" height="0" viewBox="0 0 600 600" id="axure-svg">
        <defs>
            <clipPath id="path-1" transform="translate(300,300)">
            <path data-morph-to="M 107.4 -157.9 C 144.8 -143 184.7 -122.8 213.5 -89 C 242.2 -55.1 259.7 -7.6 254.7 37.6 C 249.8 82.9 222.4 125.9 184.7 148.4 C 147.1 170.8 99.2 172.7 57.4 176.2 C 15.6 179.7 -20.1 184.9 -53.3 177.1 C -86.6 169.4 -117.3 148.9 -148.6 123.1 C -179.9 97.2 -211.7 66.1 -218.4 30.4 C -225.1 -5.3 -206.7 -45.7 -193.1 -93.4 C -179.4 -141.2 -170.5 -196.4 -139.2 -214 C -107.8 -231.7 -53.9 -211.8 -9.5 -197.1 C 35 -182.4 69.9 -172.8 107.4 -157.9 Z" class="anime" d="M 109 -171.3 C 151 -142.7 201.5 -128.9 229 -96.4 C 256.4 -64 260.8 -12.9 242 26.3 C 223.2 65.6 181.1 93 149 127.8 C 116.8 162.5 94.6 204.6 61.7 217.7 C 28.7 230.9 -14.9 215.2 -54.3 197.8 C -93.7 180.4 -128.9 161.3 -151.4 132.6 C -174 104 -184 66 -196.4 24.1 C -208.8 -17.7 -223.6 -63.3 -217 -108 C -210.4 -152.8 -182.5 -196.7 -142.8 -226.4 C -103.1 -256.1 -51.5 -271.5 -9 -257.5 C 33.5 -243.5 67 -200 109 -171.3 Z" />
            </clipPath>
            <clipPath id="path-2" transform="translate(300,300)">
            <path data-morph-to="M 133.3 -193.4 C 174.7 -180.8 211.5 -147.1 204.2 -109.1 C 196.9 -71.1 145.5 -28.8 122.8 6.4 C 100.2 41.5 106.4 69.6 102 105.5 C 97.5 141.5 82.4 185.4 59.2 184.3 C 36 183.3 4.6 137.2 -23.2 113.4 C -51.1 89.6 -75.4 88 -92.7 76 C -110.1 63.9 -120.4 41.3 -145.1 8 C -169.9 -25.3 -209.1 -69.3 -205.3 -100.4 C -201.4 -131.4 -154.5 -149.4 -113.1 -162 C -71.7 -174.6 -35.9 -181.8 5 -189.7 C 46 -197.5 91.9 -206 133.3 -193.4 Z" class="anime" d="M 87.5 -116.1 C 125.2 -111.9 175.9 -107.7 182.7 -85.5 C 189.6 -63.4 152.7 -23.4 138.5 14.3 C 124.3 51.9 132.8 87.2 125.4 124.9 C 118 162.6 94.6 202.7 65.6 200.8 C 36.6 198.9 2 155.1 -31.7 133.5 C -65.4 112 -98.1 112.6 -132 99.7 C -166 86.9 -201.3 60.4 -194.4 34.8 C -187.4 9.1 -138.3 -15.8 -107.4 -34.8 C -76.5 -53.8 -64 -66.8 -49.1 -81.6 C -34.2 -96.3 -17.1 -112.6 3.9 -118.7 C 24.9 -124.7 49.7 -120.4 87.5 -116.1 Z" />
            </clipPath>
            <clipPath id="path-3" transform="translate(300,300)">
            <path data-morph-to="M 179.9 -148.8 C 223.3 -89.1 241.8 -14.8 227.9 54.3 C 213.9 123.4 167.5 187.4 106.5 214 C 45.6 240.6 -29.9 229.7 -95 198.1 C -160 166.4 -214.5 113.9 -230.4 50.7 C -246.4 -12.5 -223.6 -86.4 -178.8 -146.4 C -134 -206.5 -67 -252.7 0.7 -253.3 C 68.3 -253.8 136.6 -208.6 179.9 -148.8 Z" class="anime" d="M 166.3 -136.4 C 201.2 -88.8 205.4 -20.5 190.1 42 C 174.7 104.6 139.9 161.3 88.4 187.6 C 37 213.8 -31 209.6 -92.6 183.4 C -154.3 157.1 -209.8 108.8 -224.3 49.9 C -238.8 -9.1 -212.4 -78.8 -168.2 -128.5 C -124.1 -178.3 -62 -208.1 1.8 -209.6 C 65.7 -211 131.3 -184.1 166.3 -136.4 Z" />
            </clipPath>
            <clipPath id="path-4" transform="translate(300,300)">
            <path data-morph-to="M 70.5 -74.2 C 95.7 -24.7 123.4 4.9 128.3 47.6 C 133.1 90.3 115.2 146 69.9 181.9 C 24.7 217.7 -47.7 233.7 -111.4 210.8 C -175 188 -229.8 126.5 -220.6 76.3 C -211.4 26.1 -138.2 -12.8 -90.7 -67.5 C -43.3 -122.2 -21.6 -192.6 0.5 -193 C 22.7 -193.4 45.3 -123.8 70.5 -74.2 Z" class="anime" d="M 167.9 -131.9 C 201.9 -91.3 202.8 -22.4 181 28.5 C 159.1 79.4 114.5 112.2 66.4 133.7 C 18.4 155.3 -33.1 165.5 -75.5 148.3 C -117.8 131.1 -151 86.6 -154.3 43.5 C -157.5 0.4 -130.7 -41.3 -100 -81.1 C -69.3 -120.9 -34.7 -159 16.2 -171.9 C 67 -184.7 134 -172.5 167.9 -131.9 Z" />
            </clipPath>
            <clipPath id="path-5" transform="translate(300,300)">
            <path data-morph-to="M 58.3 -47 C 72.3 -29 78 -4.9 69.3 8.7 C 60.5 22.4 37.2 25.6 13 43.6 C -11.1 61.6 -36.2 94.3 -65 95.5 C -93.8 96.8 -126.3 66.5 -133.3 31.6 C -140.3 -3.3 -121.8 -42.8 -95.3 -63.7 C -68.8 -84.5 -34.4 -86.8 -6.1 -81.9 C 22.2 -77 44.3 -65 58.3 -47 Z" class="anime" d="M 78.3 -67.6 C 102.3 -32.3 123.3 0.3 122.6 37.9 C 121.9 75.4 99.6 117.9 70.7 122.5 C 41.8 127 6.4 93.7 -41.3 74.9 C -88.9 56.1 -148.8 51.9 -160.4 28.7 C -171.9 5.6 -135.2 -36.5 -100.4 -74.3 C -65.7 -112 -32.8 -145.5 -2.9 -143.2 C 27.1 -140.9 54.2 -102.9 78.3 -67.6 Z" />
            </clipPath>
            <clipPath id="path-6" transform="translate(300,300)">
            <path data-morph-to="M 53.9 -49.2 C 67.2 -40.5 73.6 -20.3 72.4 -1.2 C 71.2 17.9 62.5 35.8 49.2 83.8 C 35.8 131.8 17.9 209.9 -7.4 217.3 C -32.8 224.8 -65.5 161.5 -107.7 113.5 C -149.9 65.5 -201.4 32.8 -188.8 12.6 C -176.2 -7.5 -99.4 -15.1 -57.3 -23.8 C -15.1 -32.4 -7.5 -42.2 6.4 -48.6 C 20.3 -54.9 40.5 -57.9 53.9 -49.2 Z" class="anime" d="M 124.8 -128.3 C 130.8 -118.8 83.4 -59.4 56.8 -26.6 C 30.1 6.1 24.3 12.3 18.3 54.9 C 12.3 97.6 6.1 176.8 -7 183.7 C -20 190.7 -40.1 125.4 -63.6 82.7 C -87.1 40.1 -114 20 -122.8 -8.7 C -131.5 -37.5 -122 -75 -98.5 -84.5 C -75 -94 -37.5 -75.5 11 -86.4 C 59.4 -97.4 118.8 -137.8 124.8 -128.3 Z" />
            </clipPath>
            <clipPath id="path-7" transform="translate(300,300)">
            <path data-morph-to="M 124.8 -128.3 C 130.8 -118.8 83.4 -59.4 56.8 -26.6 C 30.1 6.1 24.3 12.3 18.3 54.9 C 12.3 97.6 6.1 176.8 -7 183.7 C -20 190.7 -40.1 125.4 -63.6 82.7 C -87.1 40.1 -114 20 -122.8 -8.7 C -131.5 -37.5 -122 -75 -98.5 -84.5 C -75 -94 -37.5 -75.5 11 -86.4 C 59.4 -97.4 118.8 -137.8 124.8 -128.3 Z" class="anime" d="M 42.7 -33.9 C 61.9 -23.6 88.5 -11.8 113.6 25.1 C 138.7 62 162.3 124 143.1 129.8 C 124 135.6 62 85.3 16.7 68.6 C -28.5 51.9 -57 68.7 -90 62.9 C -123 57 -160.5 28.5 -151 9.5 C -141.4 -9.4 -84.9 -18.9 -51.9 -29.2 C -18.9 -39.5 -9.4 -50.8 1.2 -51.9 C 11.8 -53.1 23.6 -44.2 42.7 -33.9 Z" />
            </clipPath>
        </defs>
</svg>
            </div>
            <div class="defilee__outer">
                <section id="defilee" class="defilee__ctnr">
                    <h1>Catkin Software Solution Farm
                        <hr> Work Hard To Get Success...</h1>


                    <div class="defilee__div defilee__div ">
                        <svg class="item__svg" width="800px" height="800px" viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice">
                <g clip-path="url(#path-1)">
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/0/5616/3744.jpg?hmac=3GAAioiQziMGEtLbfrdbcoenXoWAW-zlyEAMkfEdBzQ "x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>

                    <div class="defilee__div defilee__div--special">
                        <svg class="item__svg" width="500px" height="500px" viewBox="0 0 600 600">
                <g clip-path="url(#path-2)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/1/5616/3744.jpg?hmac=kKHwwU8s46oNettHKwJ24qOlIAsWN9d2TtsXDoCWWsQ" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div--special1 ">
                        <svg class="item__svg" width="500px" height="500px" viewBox="0 0 600 600">
                <g clip-path="url(#path-3)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/180/2400/1600.jpg?hmac=Ig-CXcpNdmh51k3kXpNqNqcDYTwXCIaonYiBOnLXBb8" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div--special3 ">
                        <svg class="item__svg" width="400px" height="400px" viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice">
                <g clip-path="url(#path-4)">
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/201/5184/3456.jpg?hmac=3SX-1t9hHlAmc653Ox-EmJonZBCaCSK5b9FayvY4sbI"x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div--special4">
                        <svg class="item__svg" width="500px" height="500px" viewBox="0 0 600 600">
                <g clip-path="url(#path-5)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/3/5616/3744.jpg?hmac=QSuBxtSpEv3Qm3iStn2b_Ikzj2EVD0jzn99m1n6JD9I" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div--special1 ">
                        <svg class="item__svg" width="500px" height="500px" viewBox="0 0 600 600">
                <g clip-path="url(#path-6)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/366/4000/3000.jpg?hmac=zphhHOH9ofToN2jNHd8z-nc98NrBd8y2okWXEXetLDg" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div--special--special3 ">
                        <svg class="item__svg" width="400px" height="400px" viewBox="0 0 600 600">
                <g clip-path="url(#path-7)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/370/4928/3264.jpg?hmac=UGe0txSnG4hhV-fAoi7e3mTnvQFhYYNcPJJbYFePh5Q" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div">
                        <svg class="item__svg" width="400px" height="400px" viewBox="0 0 600 600">
                <g clip-path="url(#path-1)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/48/5184/3456.jpg?hmac=CqGbzLpjn6uemZM1G8hAgGDefnyntx41HEPKtlK4CDA" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>

                    <div class="defilee__div--special2">
                        <svg class="item__svg" width="400px" height="400px" viewBox="0 0 600 600">
                <g clip-path="url(#path-2)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/504/5184/3456.jpg?hmac=cyKOfzRMk9smYojxrZfWiDJ94ZNySW1QSzrVNvHK_40" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>

                    <div class="defilee__div defilee__div ">
                        <svg class="item__svg" width="400px" height="400px" viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice">
                <g clip-path="url(#path-4)">
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/532/3820/2762.jpg?hmac=XaQFIsc53McPShHjMLyMhQzmY6Ip1omZzp7fdHjQxjA "x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div--special">
                        <svg class="item__svg" width="400px" height="400px" viewBox="0 0 600 600">
                <g clip-path="url(#path-6)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/6/5616/3744.jpg?hmac=OfsNapDl2Ndsw_54oKgnNRNYAMLv8mLZuHgEJUZ3O_I" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div--special4 ">
                        <svg class="item__svg" width="500px" height="500px" viewBox="0 0 600 600">
                <g clip-path="url(#path-3)" >
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/60/1920/1200.jpg?hmac=fAMNjl4E_sG_WNUjdU39Kald5QAHQMh-_-TsIbbeDNI" x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                    <div class="defilee__div defilee__div ">
                        <svg class="item__svg" width="400px" height="400px" viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice">
                <g clip-path="url(#path-7)">
                    <!-- <image class="item__img" xlink:href="https://i.picsum.photos/id/668/4133/2745.jpg?hmac=n2-nIVXnrSE_pCjAmI-nlhBicoySz1xq-KUFMr9ERrM "x="0" y="0" width="100%" height="100%" /> -->
                </g>
            </svg>
                    </div>
                </section>
            </div>
        </div>
    </carousel__section>
    <!--============================================cssf-story__section================================-->

    <cssf-story__section>
        <div class="container">

            <div class="history__one">

                <button type="button" class="collapsible"><h3>C S S F &nbsp; STORY</h3></button>
                <div class="content">

                    <h4>Powered by innovation, guided by integrity, deliver quality solutions to build The Digital Delta</h4>
                    <p>Moving forward with more than 10 years of experience in the IT Enabled Services space, KITC has 1500+ employees across offices in Bangladesh and the US providing 24/7 services helping business owners and companies complete a wide variety
                        of tasks such as asset management, legal services, administrative duties, ecommerce integration, reporting and research in the US banking sector and real estate industry. KITC is currently the largest US based IT Enabled Service
                        (ITeS) Multinational Corporation (MNC) in Bangladesh and is aligned with the government’s goals of a Digital Bangladesh. We are a part of a global IT/ITeS industry that is projecting to spend USD 550 billion by the year 2020. By
                        attracting a portion of this business into Bangladesh, not only will KITC enable Bangladesh reach its goals of 4IR sustainability, it will continue to bring in foreign currency revenue for Bangladesh. KITC nurtures and develops
                        its talent to deliver its moto of “Ultimate Customer Service” through an entrepreneurial and fun work culture in an innovation & learning focused environment. KITC’s mission is to make Bangladesh’s IT/ITeS industry a better place
                        to build careers and to make the lives of a million people better through modern technology.<br><br> <a href="#catkin">Read More</a><br><br></p>
                </div>
            </div>

            <div class="history__two">
                <img class="img-thumbnail" src=" {{ asset('assets/images/catkin3.png') }}" alt="#catkin ">
            </div>
        </div>
    </cssf-story__section>


    <!--============================================parallax__section================================-->

    <parallax__section>
        <div class="parallax__scroll">
            <div class="parallax"></div>
        </div>
    </parallax__section>


    <!--============================================flip-card__section================================-->

    {{-- add info from database --}}
    <flip-card__section>
        <div class="flip">
            <span><h1>Management Team</h1></span>


            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/images/SharifKhan.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h2>Sharif Khan</h2>
                        <p>Co-Founder, CEO & Head of Course Instructor</p>
                        <div class="flip__box ">
                            <a href="# " class="flip__social ">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-twitter'></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/images/Masidul.jpg') }}" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h2>Md. Masidul Hasan</h2>
                        <p>Co-Founder, CEO & Head of Android App Developer</p>
                        <div class="flip__box ">
                            <a href="# " class="flip__social ">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-twitter'></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/images/Forhad.jpeg') }}" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h2>Forhad</h2>
                        <p>Co-Founder & Head of Front-End Developer</p>
                        <div class="flip__box ">
                            <a href="# " class="flip__social ">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-twitter'></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/images/commonImage.png') }}" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h2>Anika Akram</h2>
                        <p>Co-Founder & Head of Front-End Developer</p>
                        <div class="flip__box ">
                            <a href="# " class="flip__social ">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-twitter'></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/images/Rumman.jpeg') }}" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h2>Rumman Ahmed</h2>
                        <p>Co-Founder & Head of Front-End Developer</p>
                        <div class="flip__box ">
                            <a href="# " class="flip__social ">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-twitter'></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/images/Rubina.jpeg') }}" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h2>Rubina</h2>
                        <p>Co-Founder & Head of Front-End Developer</p>
                        <div class="flip__box ">
                            <a href="# " class="flip__social ">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>

                            <a href="# " class="flip__social ">
                                <i class='bx bxl-twitter'></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </flip-card__section>



    {{-- ceo message video from online --}}
    <!--============================================ceo-message__section================================-->
    <ceo-message__section>

        <div class="ceo__message">
            <div class="video">
                <span><h1><br>Message from CEO</h1></span>
                <video class="show__video" controls>
                    <source src="{{ asset('assets/images/CEO-message.jpg') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </ceo-message__section>



    <!--============================================news__section================================-->
    <news__section>
        <div class="news__section">
            <h1>News Section</h1>

            <div class="news__container">
                <div class="card-carousel">
                    <div class="card" id="1">
                        <div class="image-container"></div>
                        <h5>February 16, 2020 </h5>
                        <h3>Catkin Software Solution Farm Reunion 2020</h3>
                        <p> Thank you for making Catkin Software Solution Farm Reunion 2020 a huge success! Over 350 Catkinians assembled on Saturday, 15 February at Neocampers to celebrate their journey with CSSF. It was a wonderful opportunity to reconnect
                            with former colleagues and reminisce about how CSSF grew into the powerhouse it is today. Participants enjoyed touring Neocampers located in the […]</p>
                    </div>

                    <div class="card" id="2">
                        <div class="image-container"></div>
                        <h5>January 11, 2020</h5>
                        <h3>First client of Smart Enterprise for the New Year </h3>
                        <p> We are proud to inform you that Catkin Software Solution Farm has signed with Integrated Development Foundation (IDF) to integrate Smart Enterprise ERP Solutions for their organization. The organization is thrilled with our World
                            class ERP and has picked the Human Resource Information System (HRIS), Payroll Management and Fixed Asset Management modules. Mr. Zahirul Alam, Executive Director, Integrated […]</p>
                    </div>

                    <div class="card" id="3">
                        <div class="image-container"></div>
                        <h5>January 8, 2020 </h5>
                        <h3>Catkin Software Solution Farm signs an agreement with DISA for Microcredit Branch Automation</h3>
                        <p> The New Year starts with a success for Catkin Software Solution Farm in the Fintech Industry. “DISA” a medium size lending organization working relentlessly in various social activities including health, dairy and education beside
                            loan assistance. At present, the organization operates their loan activities through 103 branches located in various areas across the country. “Catkin Software Solution Farm” and “Development Initiative […]</p>
                    </div>

                    <div class="card" id="4">
                        <div class="image-container"></div>
                        <h5>November 19, 2019</h5>
                        <h3>Partners’ Meet, 2019 and Launching of MicroFin360 Next </h3>
                        <p> On 19th November at a convention hall of the capital, an event held by Catkin Software Solution Farm for launching its flagship portfolio MicroFin360 as a new chapter “MicroFin360 NEXT” in the presence of all leading MFIs, MicroFin360
                            Partners and the Board of Directors of the company. Mr. Mahboob Zaman-Managing Director, Mr. Hasan Imam- Director Finance, Mr. Azad […]</p>
                    </div>

                    <div class="card" id="5">
                        <div class="image-container"></div>
                        <h5>November 2, 2019</h5>
                        <h3>Sajida Foundation signed a contract with Catkin Software Solution Farm </h3>
                        <p> Sajida Foundation and Catkin Software Solution Farm, signed a contract to work jointly in the Microcredit Branch Automation process. MicroFin360 is a cloud-ready, dash-board driven Micro-Finance Management software specially developed
                            for the Microfinance Institutes to automate their work-flow. The solution comes with an immense capability of synchronizing real-time data, management level monitoring, and centralized financial report consolidation. By […]</p>
                    </div>
                </div>
            </div>
        </div>
    </news__section>

    <!--============================================Course section================================-->
    <course__section>
        <div class="courses">
            <h1><br>Courses Section</h1>

            <div class="content-width">
                <div class="slideshow">
                    <!-- Slideshow Items -->
                    <div class="slideshow-items">
                        <div class="item">
                            <div class="item-image-container">
                                <img class="item-image" src="{{ asset('assets/images/android.png') }}" />
                            </div>
                            <!-- Staggered Header Elements -->
                            <div class="item-header">
                                <span class="vertical-part"><b>Android</b></span>
                                <br><span class="vertical-part"><b>Development</b></span>


                            </div>
                            <!-- Staggered Description Elements -->


                            <div class="item-description">
                                <span class="vertical-part">

                                    <b>The Complete Android Oreo Developer Course - Build 23 Apps!</b>

                            </span>
                                <span class="vertical-part">

                        <b>Learn Android O App Development using Java & Kotlin - build real apps including Super Mario Run, Whatsapp and Instagram!</b>
                        </span>


                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image-container">
                                <img class="item-image" src="{{ asset('assets/images/web.png') }}" />
                            </div>
                            <!-- Staggered Header Elements -->
                            <div class="item-header">
                                <span class="vertical-part"><b>Web</b></span>
                                <br><span class="vertical-part"><b>Development</b></span>

                            </div>
                            <!-- Staggered Description Elements -->
                            <div class="item-description">
                                <span class="vertical-part">

                                    <b>The Web Developer Bootcamp 2021 </b>
                                    </span>
                                <span class="vertical-part">

                        <b>JUST COMPLETELY REDONE - The only course you need to learn web development - HTML, CSS, JS, Node, and More! </b>
                        </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image-container">
                                <img class="item-image" src="{{ asset('assets/images/programming.png') }}" />
                            </div>
                            <!-- Staggered Header Elements -->
                            <div class="item-header">
                                <span class="vertical-part"><b>Programming</b></span>

                            </div>
                            <!-- Staggered Description Elements -->
                            <div class="item-description">
                                <span class="vertical-part">

                                    <b>Programming Languages For Beginners to Master </b>
                                    </span>
                                <span class="vertical-part">

                        <b>This Java, Python, C Programming For Beginners Course Includes Java, Python, C Programming Basics And Core Java, Python Skills Training To Make You A Software Developer Fast</b>
                        </span>

                            </div>
                        </div>


                        <div class="item">
                            <div class="item-image-container">
                                <img class="item-image" src="{{ asset('assets/images/graphics1.png') }}" />
                            </div>
                            <!-- Staggered Header Elements -->
                            <div class="item-header">
                                <span class="vertical-part"><b>Graphics</b></span>

                            </div>
                            <!-- Staggered Description Elements -->
                            <div class="item-description">
                                <span class="vertical-part">

                                    <b>Graphic Design Bootcamp: Photoshop, Illustrator, InDesign</b>
                                    </span>
                                <span class="vertical-part">

                        <b>The Course of Adobe Premiere Pro CC and Adobe Photoshop CC for Learning Video Editing and Graphics Design. Become a Motion Graphics designer in After Effects. Learn top techniques to start your career as a Motion Graphic artist</b>
                        </span>

                            </div>
                        </div>
                    </div>
                    <div class="controls">
                        <ul>
                            <li class="control" data-index="0"></li>
                            <li class="control" data-index="1"></li>
                            <li class="control" data-index="2"></li>
                            <li class="control" data-index="3"></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </course__section>




    <!--============================================blog__section================================-->
    <blog__section>
        <div class="blog__section">
            <h1><br>Recent Blog Posts</h1>
            <div class="Card1">
                <div class="photo " id="photo__blog1"></div>
                <ul class="details">
                    <h4>Digital Corporate Banking in South Asia</h4>
                    <li>------------------</li>
                    <li>Fahmiza Ramina Hossain</li>
                    <li>---------------</li>
                    <li>December 14, 2020</li>
                </ul>
                <div class="description">
                    <div class="line">
                        <h1 class="product_name">Digital Corporate Banking in South Asia</h1>
                    </div>
                    <p class="summary">With online retail banking on the rise in South Asia, now digital corporate banking applications is bringing new innovations to the business sector of the region.</p>
                    <a href="//s.codepen.io/ImagineAlex">Read More</a>
                </div>
            </div>
        </div>
    </blog__section>


    <!--============================================Client & Patners section================================-->
    <clint__section>
        <div class="client">
            <h1><br>Clients & Partners</h1>
            <div class="client__img">
                <div class="client__img1">
                    <img class="img__parter" src="{{ asset('assets/images/partner1.jpg') }}" alt="">
                    <img class="img__parter" src="{{ asset('assets/images/partner2.jpg') }}" alt="">
                    <img class="img__parter" src="{{ asset('assets/images/partner3.jpg') }}" alt="">
                </div>
                {{-- <div class="client__img2">


                </div> --}}
            </div>
        </div>
    </clint__section>


    <!--============================================Subscribe section================================-->
    <subscribe__section>
        <div class="subscribe">
            <div class="card__subs">
                <h2 class="title">SUBSCRIBE</h2><br>
                <p class="text">to our newsletter. Please enter your email and press enter</p>
                <svg class="line__subs" viewBox="0 0 340 110">
                  <path d="m 20,62 h 300 c 5.07319,0 8,1.670904 8,7 0,5.329096 -2.73823,7 -8,7 -24.40669,0 -93.75,-28.499714 -145,-28.499714 -13.29554,0 -24.13778,10.98399 -24.13778,24.285714 0,13.301723 10.44743,24.237614 23.78064,24.285714 13.33321,0.0481 24.42131,-10.813044 24.42131,-24.071428 0,-13.258384 -10.82413,-24.5 -24.06417,-24.5 -46.6329,0 -128.373847,2.554751 -134.142712,-0.714429 -6.526479,-3.774256 26.308057,-20.255082 34.999996,-9.643143 4.903867,7.581481 -24.727058,37.748285 -20.714286,41.071429 5.780539,4.585834 41.58559,-45.698305 42.857143,-44.285714 1.788869,2.052458 -26.042394,35.843635 -22.946429,38.125 1.087036,0.763507 10.593224,-22.190977 18.660715,-15.982143 2.161943,1.842808 -9.534575,14.127851 -5.357143,17.5 1.588146,1.140006 10.876171,-3.735915 12.142856,-6.785715 4.42342,-9.489522 20.62535,-12.439397 19.28571,-14.285714 -2.58964,-1.846317 -18.17185,8.21922 -19.64285,13.571429 -0.667432,2.762923 0.003,7.475416 2.94643,8.214285 8.14685,2.711358 14.2347,-20.563532 17.03825,-18.181019 1.15308,0.952082 -9.13954,14.501641 -5.34183,17.823876 2.19057,1.447235 9.43338,-3.42711 12.5,-6.785714 3.06662,-3.090747 5.78766,-12.398459 8.21429,-10.714286 1.47961,1.226912 -10.72645,15.162377 -8.83929,16.964286 1.05558,0.891874 7.64823,-23.58045 18.69629,-17.321714 3.66503,2.357086 -9.07288,14.177268 -5.57129,17.143143 1.5373,1.537304 5.32487,0.597632 11.78572,-4.910715 6.46085,-5.508346 21.19805,-33.351382 23.30357,-32.053571 1.48053,1.208524 -25.5179,35.835564 -23.92858,37.589286 1.58933,1.843006 16.25079,-25.121326 22.76786,-19.107143 7.23135,7.353468 -15.77045,11.573353 -15.71428,13.839286 0.0562,2.53379 4.17316,5.462985 7.67857,5.803571 3.50541,0.340586 2.8953,-2.53583 9.82143,-6.517857 6.92613,-3.982027 30.53313,-16.352772 32.5,-14.642857 0.97719,0.939557 -22.54277,16.133127 -9.28571,18.928571 4.90102,0.88702 18.14747,-15.862165 19.28571,-15 1.11657,0.829669 -20.39244,29.235854 -16.42857,32.142857 1.05257,0.88407 8.21065,-16.928914 15.99374,-23.200825 7.7831,-6.271911 19.42199,-11.35048 18.64912,-12.51346 -1.83981,-2.419325 -12.6417,6.752679 -13.57143,11.428571 -0.92973,4.675892 0.64137,9.149855 5,9.642857 4.35863,0.493002 7.78601,-9.507611 8.76532,-12.843682 0.97931,-3.336071 3.34127,-6.934435 1.21487,-7.266498 -1.76926,-0.242777 -3.15302,6.045268 -2.95091,8.311776 0.20211,2.266508 0.10348,6.38561 3.43432,6.756934 2.88441,0.371324 11.99135,-16.657801 14.89354,-14.95853 1.31485,0.967808 -14.93493,13.219228 -8.21429,17.678572 6.72064,4.459344 20.01106,-20.369503 21.25,-19.196429 2.81731,2.873219 -15.21778,16.979645 -9.46428,20.803571 9.94993,6.770354 35.49608,-39.767387 37.85714,-37.5 3.2143,2.809447 -16.97303,19.144321 -16.42857,24.642858 0.54446,5.498537 2.14464,-0.117739 2.5,2.5 0.35536,2.617739 -3.91382,11.36668 -6.07143,10.714285 -2.06832,-0.384538 -0.81191,-3.639808 -0.0893,-4.910715 0.72263,-1.270907 1.69643,3.571429 1.69643,3.571429" />
                </svg>
                <svg class="line2" viewBox="0 0 50 52">
                  <path style="fill:none;stroke:#000000;stroke-width:2" d="m 38.391765,17.110953 -16.66751,16.667516 -7.81073,-7.201053 c -2.56639,-2.366065 -3.80148,-3.574166 -6.56097,-5.722314 l -4.6426304,-1.736535"/>
                </svg>
                <form class="form" action="">
                    <input class="input" type="email">
                </form>
            </div>

        </div>
    </subscribe__section>




    @endsection

    @section('javascript')
    <!--===================================JS Link Section================================-->
    <script src="{{ asset('assets/js/home.js') }} "></script>
    <script src="{{ asset('assets/js/homeSub.js') }}"></script>
    @endsection
