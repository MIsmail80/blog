<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">
    <title>Fantom Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="logo_part">
            <div class="container">
                <a class="logo" href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
            </div>
        </div>

        @include('website.nav.main-menu')

    </header>
    <!--================Header Menu Area =================-->

    @yield('banner')

    <!--================Blog Area =================-->
    <section class="blog_area p_120">
        <div class="container">
            <div class="row">
                <!--================ Main Content =================-->
                <div class="col-lg-8">                    
                    <div class="blog_left_sidebar">
                        @yield('content')
                    </div>
                </div>
                <!--================ End Main Content =================-->

                <!--================ Sidebar =================-->
                @yield('sidebar')
                <!--================ Sidebar =================-->

            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Us</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>Stay updated with our latest trends</p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">Instagram Feed</h6>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="{{asset('img/instagram/Image-01.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/instagram/Image-02.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/instagram/Image-03.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/instagram/Image-04.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/instagram/Image-05.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/instagram/Image-06.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/instagram/Image-07.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/instagram/Image-08.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget f_social_wd">
                        <h6 class="footer_title">Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="f_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-12 footer-text text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/stellar.js')}}"></script>
    <script src="{{asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(function(){
            $(".flatpicker").flatpickr();
        });
    </script>
</body>

</html>