<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from duruthemes.com/demo/html/cappa/apartment/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jan 2025 20:59:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>The Cappa Apartments</title>
    <link rel="shortcut icon" href="{{asset('/frontgeshotels/img/favicon.png')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="{{asset('/frontgeshotels/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{asset('/frontgeshotels/css/style.css')}}" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Sidebar Section -->
    <a href="#" class="js-cappa-nav-toggle cappa-nav-toggle"><i></i></a>
    <aside id="cappa-aside">
        <!-- Logo -->
        <div class="cappa-logo">
            <a href="index.html">
                <!-- <img src="img/logo.png" class="logo-img" alt=""> -->
                <h2>Hôtel<span>Management</span></h2>
            </a>
        </div>
        <!-- Menu -->
        <nav class="cappa-main-menu">
            <ul>
                <li class='cappa-sub active'><a href='#'>Home <i class="ti-angle-down"></i></a>
                    <ul>
                        <li class="active"><a href="index.html">Home Layout 1</a></li>
                        <li><a href="index2.html">Home Layout 2</a></li>

                        <li><a href="index3.html">Home Layout 3</a></li>
                    </ul>
                </li>
                <li><a href='about.html'>About</a></li>
                <li class='cappa-sub'><a href='#'> Rooms <i class="ti-angle-down"></i></a>
                    <ul>
                        <li><a href='rooms.html'>Rooms 1</a></li>
                        <li><a href='rooms2.html'>Rooms 2</a></li>
                        <li><a href='room-details.html'>Room Details</a></li>
                    </ul>
                </li>
                <li><a href="restaurant.html">Restaurant</a></li>
                <li class="cappa-sub"><a href='#'>Pages <i class="ti-angle-down"></i></a>
                    <ul>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="facilities.html">Facilites</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="404.html">404 Page</a></li>
                    </ul>
                </li>
                <li><a href='news.html'>News</a></li>
                <li><a href='contact.html'>Contact</a></li>
            </ul>
        </nav>
        <!-- Sidebar Footer -->
        <div class="cappa-footer">
            <div class="text">Contact Us</div>
            <div class="social-list">
                <a href="tel:8551004444"><span class="flaticon-call"></span></a>
                <a href="mailto:info@apartments.com"><span class="flaticon-envelope"></span></a>
                <a href="https://www.google.com/maps" target="_blank"><span class="ti-location-pin"></span></a>
            </div>
        </div>
    </aside>
    <!-- Main -->
    <div id="cappa-main">
        <!--chargement du contenu*/ -->
@yield("content")


        <!-- Footer -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-column footer-about">
                                <h3 class="footer-title">About Hotel</h3>
                                <p class="footer-about-text">Welcome to the best three-star apart hotel in New York. Hotel elementum sesue the aucan aliquam nusto in sapien rutrum volutpat.</p>
                                <div class="footer-language"> <i class="lni ti-world"></i>
                                    <select onchange="location = this.value;">
                                        <option value="http://duruthemes.com/">English</option>
                                        <option value="http://duruthemes.com/">German</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <div class="footer-column footer-explore clearfix">
                                <h3 class="footer-title">Explore</h3>
                                <ul class="footer-explore-list list-unstyled">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="rooms.html">Rooms & Suites</a></li>
                                    <li><a href="restaurant.html">Restaurant</a></li>
                                    <li><a href="spa-wellness.html">Spa & Wellness</a></li>
                                    <li><a href="about.html">About Hotel</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-column footer-contact">
                                <h3 class="footer-title">Contact</h3>
                                <p class="footer-contact-text">1616 Broadway NY, New York 10001
                                    <br>United States of America
                                </p>
                                <div class="footer-contact-info">
                                    <p class="footer-contact-phone"><span class="flaticon-call"></span> 855 100 4444</p>
                                    <p class="footer-contact-mail">info@apartments.com</p>
                                </div>
                                <div class="footer-about-social-list"> <a href="#"><i class="ti-instagram"></i></a> <a href="#"><i class="ti-twitter"></i></a> <a href="#"><i class="ti-youtube"></i></a> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-pinterest"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-bottom-inner">
                                <p class="footer-bottom-copy-right">© Copyright 2024 by <a href="#">DuruThemes.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <script src="{{asset('/frontgeshotels/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/jquery.isotope.v3.0.2.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/pace.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/popper.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/scrollIt.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/YouTubePopUp.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/select2.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/datepicker.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('/frontgeshotels/js/custom.js')}}"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/cappa/apartment/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jan 2025 20:59:50 GMT -->
</html>
