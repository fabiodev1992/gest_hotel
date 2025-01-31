 @extends("frontgeshotel.layouts.app")
 @section("content")
 <!-- Parallax Image -->
 <div class="banner-header full-height section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{asset(path: '/frontgeshotels/img/slider/1.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 text-center">
                <h4>Unique Place to Relax & Enjoy</h4>
                <h1>Luxury City Centre Apartments</h1>
                <div class="butn-dark"> <a href="rooms.html"><span>View Rooms</span></a> </div>
            </div>
        </div>
    </div>
</div>
<!-- About -->
<section class="about section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="section-subtitle">About Us</div>
                <div class="section-title">Apart Hotel In The Heart Of The Mid Town</div>
                <p>Welcome to the best five-star deluxe hotel in New York. Hotel elementum suen theaucan vestibulum aliquam justo in sapien.</p>
                <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligulation. Orci varius natoque penatibus et magnis dis parturient monte naete ridiculus mus nellentesque habitant morbine.</p>
                <div class="butn-dark mt-30"> <a href="about.html"><span>Read More</span></a> </div>
            </div>
            <div class="col col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp"> <img src="{{asset('/frontgeshotels/img/about.jpg')}}" alt="" class="mt-90 mb-30"> </div>
            <div class="col col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp"> <img src="{{asset(path: '/frontgeshotels/img/about2.jpg')}}" alt=""> </div>
        </div>
    </div>
</section>
<!-- Rooms -->
<section class="room section-padding bg-lightblue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30">
                <div class="section-subtitle">Rooms & Suites</div>
                <div class="section-title">Best Apartments</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="rooms">
                        <figure><img src="{{asset(path: '/frontgeshotels/img/slider/1.jpg')}}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h4><a href="room-details.html">Junior Suite</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="price">150$ <span>/ Night</span></div>
                                <div class="butn-dark"> <a href="room-details.html"><span>Details</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms left">
                        <figure><img src="{{asset(path: '/frontgeshotels/img/slider/2.jpg')}}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h4><a href="room-details.html">Family Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="price">200$ <span>/ Night</span></div>
                                <div class="butn-dark"> <a href="room-details.html"><span>Details</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms">
                        <figure><img src="{{asset(path: '/frontgeshotels/img/slider/3.jpg')}}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h4><a href="room-details.html">Double Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-3 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="price">250$ <span>/ Night</span></div>
                                <div class="butn-dark"> <a href="room-details.html"><span>Details</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms left">
                        <figure><img src="{{asset(path: '/frontgeshotels/img/slider/4.jpg')}}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h4><a href="room-details.html">Deluxe Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-4 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="price">300$ <span>/ Night</span></div>
                                <div class="butn-dark"> <a href="room-details.html"><span>Details</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Promo Video -->
<section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="{{asset(path: '/frontgeshotels/img/slider/1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                <div class="section-subtitle"><span>Apartment Hotel</span></div>
                <div class="section-title"><span>Promotional Video</span></div>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-md-12">
                <a class="vid" href="{{asset(path: '/frontgeshotels/https://youtu.be/er2-6hpDWV0')}}">
                    <div class="vid-butn"> <span class="icon">
                            <i class="ti-control-play"></i>
                        </span> </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Services -->
<section class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30 text-center">
                <div class="section-subtitle"><span>What We Do</span></div>
                <div class="section-title">Our Services</div>
            </div>
        </div>
        <div class="row mb-30">
            <div class="col-lg-6 col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="services-page.html"><img src="{{asset(path: '/frontgeshotels/img/restaurant/3.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="date">
                        <h1>01</h1>
                    </div>
                    <div class="cont">
                        <h5>Restaurant & Bar</h5>
                        <p>Lorem arena nuam enim polen obortise esen the drana accumsan golden alsuame amet aucto miss done vitae vehicula risus duise nun drana sapien.</p>
                        <div class="butn-dark"> <a href="#"><span>Discover</span></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-30">
            <div class="col-lg-6 col-md-12 order2 valign animate-box" data-animate-effect="fadeInLeft">
                <div class="content">
                    <div class="date">
                        <h1>02</h1>
                    </div>
                    <div class="cont">
                        <h5>Spa & Wellness</h5>
                        <p>Lorem arena nuam enim polen obortise esen the drana accumsan golden alsuame amet aucto miss done vitae vehicula risus duise nun drana sapien.</p>
                        <div class="butn-dark"> <a href="#"><span>Discover</span></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order1 animate-box" data-animate-effect="fadeInRight">
                <div class="img left">
                    <a href="spa-wellness.html"><img src="{{asset(path: '/frontgeshotels/img/spa/2.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row mb-30">
            <div class="col-lg-6 col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="spa-wellness.html"><img src="img/spa/4.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="date">
                        <h1>03</h1>
                    </div>
                    <div class="cont">
                        <h5>Fitness & Yoga Services</h5>
                        <p>Lorem arena nuam enim polen obortise esen the drana accumsan golden alsuame amet aucto miss done vitae vehicula risus duise nun drana sapien.</p>
                        <div class="butn-dark"> <a href="#"><span>Discover</span></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testiominals -->
<section class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset(path: '/frontgeshotels/img/slider/1.jpg')}}" data-overlay-dark="5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 text-center">
                <div class="testimonials">
                    <div class="testimonials-box">
                        <div class="owl-carousel owl-theme">
                            <div class="item"> <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>Highly recommended!</h5>
                                <p>Lorem dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante viventa miss sapien silver on the duiman lorem ipsum amet silver miss rana duru at finibus viverra neca the sene on satien.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="{{asset(path: '/frontgeshotels/img/team/1.jpg')}}" alt=""> </div>
                                    <div class="cont">
                                        <h6>Andreas Brown</h6> <span>Customer review</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>A Unique Apartment Hotel!</h5>
                                <p>Lorem dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante viventa miss sapien silver on the duiman lorem ipsum amet silver miss rana duru at finibus viverra neca the sene on satien.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="{{asset(path: '/frontgeshotels/img/team/2.jpg')}}" alt=""> </div>
                                    <div class="cont">
                                        <h6>Emily White</h6> <span>Customer review</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>Highly recommended!</h5>
                                <p>Lorem dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante viventa miss sapien silver on the duiman lorem ipsum amet silver miss rana duru at finibus viverra neca the sene on satien.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="{{asset(path: '/frontgeshotels/img/team/3.jpg')}}" alt=""> </div>
                                    <div class="cont">
                                        <h6>Daniel Martin</h6> <span>Customer review</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Facilties -->
<section class="facilties section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Amenities</div>
                <div class="section-title">Make Your Stay Memorable</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp"> <span class="flaticon-world"></span>
                    <h5>Pick Up & Drop</h5>
                    <p>We’ll pick up from airport while you comfy on your ride mus habitan.</p>
                    <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp"> <span class="flaticon-car"></span>
                    <h5>Parking Space</h5>
                    <p>Fusce tincidunt nis ace park norttito sit amet space nellentes habitan.</p>
                    <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp"> <span class="flaticon-bed"></span>
                    <h5>Room Service</h5>
                    <p>Room tincidunt nis ace park norttito sit amet space nellentes habitan.</p>
                    <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp"> <span class="flaticon-swimming"></span>
                    <h5>Swimming Pool</h5>
                    <p>Swimming pool tincidunt nise ace park norttito sit space nellentes.</p>
                    <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp"> <span class="flaticon-wifi"></span>
                    <h5>Fibre Internet</h5>
                    <p>Wifi tincidunt nis ace park norttito sit amet space nellentes habitan.</p>
                    <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp"> <span class="flaticon-breakfast"></span>
                    <h5>Breakfast</h5>
                    <p>Eat tincidunt nisa ace park norttito sit amet space nellentes habitan.</p>
                    <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Price -->
<section class="price">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-0">
                <div class="img left"> <img src="{{asset(path: '/frontgeshotels/img/price.jpg')}}" alt=""> </div>
            </div>
            <div class="col-lg-7 col-md-12 p-0 valign">
                <div class="wrapper">
                    <div class="mb-30">
                        <div class="section-subtitle">Pricing Plan</div>
                        <div class="section-title">Extra Services</div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Room Cleaning</div>
                                <div class="money">$50</div>
                            </div>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Dring Included</div>
                                <div class="money">$35</div>
                            </div>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Room Breakfast</div>
                                <div class="money">$30</div>
                            </div>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Safe & Secure</div>
                                <div class="money">$25</div>
                            </div>
                            <div class="dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News -->
<section class="news section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30 text-center">
                <div class="section-subtitle"><span>Hotel Blog</span></div>
                <div class="section-title">Our News</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset(path: '/frontgeshotels/img/restaurant/3.jpg')}}" alt="">
                            <div class="date">
                                <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                            </div>
                        </div>
                        <div class="con"> <span class="category">
                                <a href="news.html">Restaurant</a>
                            </span>
                            <h5><a href="post.html">Historic restaurant renovated</a></h5>
                        </div>
                    </div>
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset(path: '/frontgeshotels/img/spa/3.jpg')}}" alt="">
                            <div class="date">
                                <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                            </div>
                        </div>
                        <div class="con"> <span class="category">
                                <a href="news.html">Spa</a>
                            </span>
                            <h5><a href="post.html">Benefits of Spa Treatments</a></h5>
                        </div>
                    </div>
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset(path: '/frontgeshotels/img/slider/2.jpg')}}" alt="">
                            <div class="date">
                                <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                            </div>
                        </div>
                        <div class="con"> <span class="category">
                                <a href="news.html">Bedroom</a>
                            </span>
                            <h5><a href="post.html">Hotel Bedroom Collections</a></h5>
                        </div>
                    </div>
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{asset(path: '/frontgeshotels/img/spa/2.jpg')}}" alt="">
                            <div class="date">
                                <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                            </div>
                        </div>
                        <div class="con"> <span class="category">
                                <a href="news.html">Health</a>
                            </span>
                            <h5><a href="post.html">Weight Loss with Fitness</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Reservation & Booking Form -->
<section class="reservation">
    <div class="background bg-img bg-fixed valign section-padding" data-background="{{asset(path: '/frontgeshotels/img/slider/1.jpg')}}" data-overlay-dark="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12">
                    <div class="booking-box">
                        <div class="head-box">
                            <h4>Booking Form</h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <form action="https://duruthemes.com/demo/html/cappa/apartment/services.html" class="form1 clearfix">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input1_wrapper">
                                            <label>Check in</label>
                                            <div class="input1_inner">
                                                <input type="text" class="form-control input datepicker" placeholder="Check in">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input1_wrapper">
                                            <label>Check out</label>
                                            <div class="input1_inner">
                                                <input type="text" class="form-control input datepicker" placeholder="Check out">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="select1_wrapper">
                                            <label>Adults</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="0">Adults</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="select1_wrapper">
                                            <label>Children</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="0">Children</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn-form1-submit mt-15">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
