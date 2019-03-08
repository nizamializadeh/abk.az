<!--
Developer:

Nizami Alizade    nizamializade85@gmail.com



-->


<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <title>Abk.az</title>

    <meta name="description" content="">

    <meta name="image" content="{{ asset('frontend/img/amazon.png') }}">

    <meta property="og:url" content="http://abk.az/">
    <meta property="og:title" content="Amazonbizneskurslaris">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('frontend/img/amazon.png') }}">
    <meta property="og:site_name" content="Amazonbizneskurslari">


    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="http://abk.az/">
    <meta name="twitter:title" content="Amazonbizneskurslaris">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="Amazonbizneskurslari">
    <meta name="twitter:image:src" content="{{ asset('frontend/img/amazon.png') }}">
    <meta name="twitter:domain" content="http://abk.az/">
    <meta name="keywords" content="abk.az abk amazon kurslari amazon derlseri amazon nedir amazonda satis">

    {{--<link rel="shortcut icon" href="frontend/img/favicon.png" type="image/x-icon" />--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=HelveticaNeue&text=%21%22%23%24%25%26%27%28%29%30+,-./0123456789:;%3C=%3E%3F@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`%E2%82%AC„‘’“”™©®°µ±÷abcdefghijklmnopqrstuvwxyz{|}~%C3%9C%C3%96%C4%9E%C4%B0%C6%8F%C3%87%C5%9E%C3%BC%C3%B6%C4%9F%C4%B1%C9%99%C3%A7%C5%9F">

    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
    {{--<link href="{{asset('frontend/HelveticaNeue/HelveticaNeue-Black.otf')}}" rel="stylesheet">--}}

    <link href="{{asset('frontend/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/theme-elements.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/theme-blog.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/theme-shop.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/rs-plugin/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/rs-plugin/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/rs-plugin/css/navigation.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/skins/skin-corporate-4.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/rs-plugin/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/rs-plugin/css/navigation.css')}}" rel="stylesheet">
    <script src="{{asset('frontend/master/style-switcher/style.switcher.localstorage.js')}}"></script>
    <script src="{{asset('frontend/vendor/modernizr/modernizr.min.js')}}"></script>



    <style>
        @font-face{
            font-family: test;
            src:url('/frontend/HelveticaNeue/HelveticaNeue-Black.otf');
        }
        .helvetica{
            font-family: test;
        }
        .register{
            background: -webkit-linear-gradient(left, #000000, #536a70);
            margin-top: 2%;
            background-image: url("frontend/img/web6.jpg");
            background-size: cover;
            /*background-color: rgba(14, 10, 120, 0.3);}*/
            opacity: 0.8;


        }
        .dropdown {
            font-size: 17px;
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 1%;
            width: 23%;
            margin-top: 12%;
            margin-bottom: 3%;
            cursor: pointer;
            background: #F28F00;
            color: #fff;
            font-weight: 600;
        }
        .register-right{
            /*background: #f8f9fa;*/

        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
</head>
<body>

<div class="body">
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color:#36434e;width: 85%">
                <div class="modal-header" style="border: none;">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="table" style="    padding: 0px 46px;">
                            <div class="row" >
                                <div class="cell" style="color: white;font-family: arial;"><label for="call_fullname">Ad Soyad</label></div>
                                <div class="cel" style="padding-left: 76px"><input type="text" name="name"  class="form-control"></div>
                            </div>

                            <div class="row" >
                                <div class="cell" style="color: white;font-family: arial;"><label for="call_fullname">Telefon nömrəsi</label></div>
                                <div class="cel" style="padding-left: 38px"><input type="text" name="phone"  class="form-control"></div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button style="background-color: #F28F00" type="button" class="btn btn-secondary" data-dismiss="modal">
                        Zənginizi gözləyirəm
                    </button>
                </div>
            </div>
        </div>
    </div>

    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Porto" width="145" height="82" data-sticky-width="82" data-sticky-height="40" src="{{asset('frontend/img/amazon.png')}}" alt="Banner">



                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-stripe order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">

                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{ url('/') }}">ANA SӘHIFӘ</a>																																</li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{ url('about') }}">	HAQQIMIZDA</a>																																</li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{ url('fag') }}">FAQ</a>																																</li>
                                            <li  class="dropdown" data-toggle="modal" data-target="#exampleModalCenter">
                                                <a class="dropdown-item dropdown-toggle ">
                                                    SizӘ zӘng edӘk
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>





@yield('content')






<footer id="footer" class="mt-0">
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Contact Details</h5>
                <p class="text-4 mb-0">123 Porto Blvd, Suite 100</p>
                <p class="text-4 mb-0">New York, NY</p>
                <p class="text-4 mb-0">Phone: (800) 123 4567</p>
                <p class="text-4 mb-0">Email: <a href="mailto:mail@example.com" class="text-color-primary">mail@example.com</a></p>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
                <ul class="list list-icons list-icons-sm">
                    <!-- <li><i class="fas fa-angle-right"></i><a href="page-services.html" class="link-hover-style-1 ml-1"> Our Services</a></li> -->
                    <li><i class="fas fa-angle-right"></i><a href="{{ url('about') }}" class="link-hover-style-1 ml-1"> Haqqimizda</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="{{ url('fag') }}" class="link-hover-style-1 ml-1"> Fag</a></li>

                    <!-- <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li> -->
                    <!-- <li><i class="fas fa-angle-right"></i> <a class="dropdown-item dropdown-toggle active">Size zeng edek?	</a></li> -->


                </ul>

            </div>

            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Social</h5>
                <ul class="list list-icons list-icons-sm">
                    <li><i class="fab fa-facebook-f"></i><a target="_blank" href="https://www.facebook.com/Amazon-Biznes-Kurslar%C4%B1-991316544395841/?__tn__=%2Cd%2CP-R&eid=ARAjKIrMCHweZKZX6b4mFBtf3Al0u5AfsHwPCpZ7wFB3XxZ4xhgZVa7DpvRlgAN4SLgXefcEHrufOZDg" class="link-hover-style-1 ml-1">Facebook</a></li>

                    <li><i class="fab fa-instagram"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col mb-4 mb-lg-0">
                    <p>© {{ now()->year }}</p>
                    <!-- 	<p>Site by <a target="_blank" href="https://www.facebook.com/Nizamializadah">Nizami Alizade</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <div style="position: fixed;font-size: 50px;right: 18px;
    bottom: 54px;color: green" class="fixed-bottoms"><a style="color: green"" href="https://wa.me/994502664021">
        <i  class="fab fa-whatsapp"></i>
        </a></div>
    </div>

    <!-- Vendor -->
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
<script src="{{asset('frontend/master/style-switcher/style.switcher.js')}}"></script>
<script src="{{asset('frontend/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/vendor/common/common.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('frontend/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/vendor/vide/jquery.vide.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('frontend/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('frontend/js/theme.init.js')}}"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-42715764-5', 'auto');
        ga('send', 'pageview');
    </script>
<script src="{{asset('frontend/master/analytics/analytics.js')}}"></script>


</body>

<!-- Mirrored from preview.oklerthemes.com/porto/7.0.0/index-corporate-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 08:28:37 GMT -->
</html>

