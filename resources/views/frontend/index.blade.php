<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Carbid</title>

    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/all.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/animate.css">
    <link rel="stylesheet" href="/frontend/assets/css/nice-select.css">
    <link rel="stylesheet" href="/frontend/assets/css/owl.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/aos.css">
    <link rel="stylesheet" href="/frontend/assets/css/main.css">

    <link rel="shortcut icon" href="/frontend/assets/images/favicon.png" type="image/x-icon">
</head>
<style>
    .auction-item-2 {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .auction-thumb h6.title {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .auction-content ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .auction-content ul li {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .custom-button {
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    .amount-content {
        margin-top: 20px;
    }

    .slider-container {
        position: relative;
        max-width: 100%;
    }


    #prev {
        left: 10px;
    }

    #next {
        right: 10px;
    }


    .vehicle-container {
        display: none;
    }
</style>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li class="cmn-support-text">
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span
                                    class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li>

                    </ul>
                    <ul class="cart-button-area">
                        <li>
                            <a href="../sign-in" class="user-button"><i class="flaticon-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="/">
                            <img src="/frontend/assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="#0">Home</a>
                        </li>
                        <li>
                            <a href="./product.html">Inventory</a>
                        </li>
                        <li>
                            <a href="#0">Auction</a>
                        </li>
                        <li>
                            <a href="#0">Service & Support</a>
                        </li>

                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="index.html" class="logo">
                <img src="/frontend/assets/images/logo/logo2.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop01.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop02.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop03.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop04.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop05.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Comics Book</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="#0" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!--============= Cart Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="/frontend/assets/images/banner/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate" data-aos="fade-down" data-aos-duration="1000">Next Generation Auction</h5>
                        <h1 class="title" data-aos="zoom-out-up" data-aos-duration="1200"><span class="d-xl-block">Find
                                Your</span> Next Deal!</h1>
                        <p class="pras" data-aos="zoom-out-down" data-aos-duration="1300">
                            Online Auction is where everyone goes to shop, sell,and give, while discovering variety and
                            affordability.
                        </p>
                        <a href="#0" class="custom-button yellow btn-large" data-aos="zoom-out-up"
                            data-aos-duration="1500">Get Started</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    <div class="banner-thumb-2">
                        <img src="/frontend/assets/images/banner/banner-1.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="/frontend/assets/css/img/banner-shape.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <div class="browse-section ash-bg">
        <!--============= Hightlight Slider Section Starts Here =============-->
        <!-- <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <div class="left" data-aos="flip-up" data-aos-duration="1500">
                        <h6 class="title pl-0 w-100">Browse the highlights</h6>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        <a href="#0" class="browse-item">
                            <img src="/frontend/assets/images/auction/01.png" alt="auction">
                            <span class="info">Vehicles</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="/frontend/assets/images/auction/02.png" alt="auction">
                            <span class="info">Jewelry</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="/frontend/assets/images/auction/03.png" alt="auction">
                            <span class="info">Watches</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="/frontend/assets/images/auction/04.png" alt="auction">
                            <span class="info">Electronics</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="/frontend/assets/images/auction/05.png" alt="auction">
                            <span class="info">Sports</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="/frontend/assets/images/auction/06.png" alt="auction">
                            <span class="info">Real Estate</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============= Hightlight Slider Section Ends Here =============-->
        <br>
        <!--============= Car Auction Section Starts Here =============-->
        @php
            $chunks = $vehicles->chunk(3); // Divide vehicles into chunks of 3
            $totalContainers = $chunks->count();
        @endphp

        <div class="slider-container">
            <!-- Left Arrow -->
            <button id="prev" class="slider-arrow" style="display: none;">&#10094;</button>

            <div class="all-containers">
                @foreach($chunks as $index => $vehicleChunk)
                    <section class="vehicle-container" id="container-{{ $index }}"
                        style="display: {{ $index == 0 ? 'block' : 'none' }};">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                                @foreach($vehicleChunk as $vehicle)
                                    <div class="col-sm-10 col-md-6 col-lg-4">
                                        <div class="auction-item-2">
                                            <div class="auction-thumb">
                                                <a href="{{ route('frontend.vehicle-detail', ['id' => $vehicle->id]) }}"><img
                                                        src="/frontend/assets/images/auction/car/auction-1.jpg" alt="car"></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="{{ route('frontend.vehicle-detail', ['id' => $vehicle->id]) }}">{{ $vehicle->vehicle_year }}
                                                        {{ $vehicle->vehicle_make }} {{ $vehicle->vehicle_model }}</a>
                                                </h6>
                                                <div class="bid-amount">
                                                    <div class="amount-content">
                                                        <div class="current">Retail Value</div>
                                                        <div class="amount">{{ $vehicle->vehicle_retail_value }}</div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <a href="{{ route('frontend.vehicle-detail', ['id' => $vehicle->id]) }}" class="custom-button">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
            <script>
                let currentContainer = 0;
                const totalContainers = {{ $totalContainers }};

                document.getElementById('next').addEventListener('click', function () {
                    if (currentContainer < totalContainers - 1) {
                        document.getElementById('container-' + currentContainer).style.display = 'none';
                        currentContainer++;
                        document.getElementById('container-' + currentContainer).style.display = 'block';
                        checkButtons();
                    }
                });

                document.getElementById('prev').addEventListener('click', function () {
                    if (currentContainer > 0) {
                        document.getElementById('container-' + currentContainer).style.display = 'none';
                        currentContainer--;
                        document.getElementById('container-' + currentContainer).style.display = 'block';
                        checkButtons();
                    }
                });

                function checkButtons() {
                    document.getElementById('prev').style.display = currentContainer === 0 ? 'none' : 'block';
                    document.getElementById('next').style.display = currentContainer === totalContainers - 1 ? 'none' : 'block';
                }

                checkButtons(); // Initial check to hide/show arrows on page load
            </script>

            <!--============= Car Auction Section Ends Here =============-->
        </div>
        <!--============= Watches Auction Section Starts Here =============-->
        <section class="watches-auction-section padding-bottom padding-top">
            <div class="container">
                <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="left">
                        <div class="title-area">
                            <h2 class="title">Membership</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <!-- Guest Free Membership -->
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1600">
                            <div class="auction-thumb">
                                <h6 class="title">Guest Free</h6>
                            </div>
                            <div class="auction-content">
                                <p>As a guest, you can:</p>
                                <ul>
                                    <li>✔ View Auctions</li>
                                    <li>✔ Add to Bid</li>
                                    <li>✔ Limited Bidding Access</li>
                                    <li>✔ Basic Customer Support</li>
                                </ul>
                            </div>
                            <div class="amount-content text-center">
                                <a href=",/sign-in"> <span class="custom-button"
                                        style="background-color: blue; color: white; padding: 10px 20px; font-size: 18px;">Free</span></a>

                            </div>
                        </div>
                    </div>

                    <!-- Basic Membership -->
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1700">
                            <div class="auction-thumb">
                                <h6 class="title">Basic</h6>
                            </div>
                            <div class="auction-content">
                                <p>As a Basic member, you get:</p>
                                <ul>
                                    <li>✔ View Auctions</li>
                                    <li>✔ Add to Bid</li>
                                    <li>✔ Access to Limited Auctions</li>
                                    <li>✔ Priority Customer Support</li>
                                    <li>✔ Monthly Auction Summary</li>
                                </ul>
                            </div>
                            <div class="amount-content text-center">
                                <a href="./sign-in"><span class="custom-button"
                                        style="background-color: blue; color: white; padding: 10px 20px; font-size: 18px;">$99/month</span></a>

                            </div>
                        </div>
                    </div>

                    <!-- Premium Membership -->
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1800">
                            <div class="auction-thumb">
                                <h6 class="title">Premium</h6>
                            </div>
                            <div class="auction-content">
                                <p>As a Premium member, you get:</p>
                                <ul>
                                    <li>✔ View All Auctions</li>
                                    <li>✔ Add to Bid</li>
                                    <li>✔ Access to Exclusive Auctions</li>
                                    <li>✔ Priority Customer Support</li>
                                    <li>✔ Personalized Auction Alerts</li>
                                    <li>✔ Access to Auction Archives</li>
                                    <li>✔ Early Access to New Features</li>
                                </ul>
                            </div>
                            <div class="amount-content text-center">
                                <a href="./sign-in"> <span class="custom-button"
                                        style="background-color: blue; color: white; padding: 10px 20px; font-size: 18px;">$120/month</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--============= Watches Auction Section Ends Here =============-->

        <!--============= Footer Section Starts Here =============-->
        <footer class="bg_img padding-top oh" data-background="/frontend/assets/images/footer/footer-bg.jpg">
            <div class="footer-top-shape">
                <img src="/frontend/assets/css/img/footer-top-shape.png" alt="css">
            </div>
            <div class="anime-wrapper">
                <div class="anime-1 plus-anime">
                    <img src="/frontend/assets/images/footer/p1.png" alt="footer">
                </div>
                <div class="anime-2 plus-anime">
                    <img src="/frontend/assets/images/footer/p2.png" alt="footer">
                </div>
                <div class="anime-3 plus-anime">
                    <img src="/frontend/assets/images/footer/p3.png" alt="footer">
                </div>
                <div class="anime-5 zigzag">
                    <img src="/frontend/assets/images/footer/c2.png" alt="footer">
                </div>
                <div class="anime-6 zigzag">
                    <img src="/frontend/assets/images/footer/c3.png" alt="footer">
                </div>
                <div class="anime-7 zigzag">
                    <img src="/frontend/assets/images/footer/c4.png" alt="footer">
                </div>
            </div>
            <div class="newslater-wrapper">
                <div class="container">
                    <div class="newslater-area">
                        <div class="newslater-thumb">
                            <img src="/frontend/assets/images/footer/newslater.png" alt="footer">
                        </div>
                        <div class="newslater-content">
                            <div class="section-header left-style mb-low" data-aos="fade-down" data-aos-duration="1100">
                                <h5 class="cate">Subscribe to Sbidu</h5>
                                <h3 class="title">To Get Exclusive Benefits</h3>
                            </div>
                            <form class="subscribe-form">
                                <input type="text" placeholder="Enter Your Email" name="email">
                                <button type="submit" class="custom-button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top padding-bottom padding-top">
                <div class="container">
                    <div class="row mb--60">
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1000">
                            <div class="footer-widget widget-links">
                                <h5 class="title">Auction Categories</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">Ending Now</a>
                                    </li>
                                    <li>
                                        <a href="#0">Vehicles</a>
                                    </li>
                                    <li>
                                        <a href="#0">Watches</a>
                                    </li>
                                    <li>
                                        <a href="#0">Electronics</a>
                                    </li>
                                    <li>
                                        <a href="#0">Real Estate</a>
                                    </li>
                                    <li>
                                        <a href="#0">Jewelry</a>
                                    </li>
                                    <li>
                                        <a href="#0">Art</a>
                                    </li>
                                    <li>
                                        <a href="#0">Sports & Outdoor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1300">
                            <div class="footer-widget widget-links">
                                <h5 class="title">About Us</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">About Sbidu</a>
                                    </li>
                                    <li>
                                        <a href="#0">Help</a>
                                    </li>
                                    <li>
                                        <a href="#0">Affiliates</a>
                                    </li>
                                    <li>
                                        <a href="#0">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#0">Press</a>
                                    </li>
                                    <li>
                                        <a href="#0">Our blog</a>
                                    </li>
                                    <li>
                                        <a href="#0">Collectors' portal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1600">
                            <div class="footer-widget widget-links">
                                <h5 class="title">We're Here to Help</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="#0">Safe and Secure</a>
                                    </li>
                                    <li>
                                        <a href="#0">Shipping Information</a>
                                    </li>
                                    <li>
                                        <a href="#0">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#0">Help & FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1800">
                            <div class="footer-widget widget-follow">
                                <h5 class="title">Follow Us</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0"><i class="fas fa-phone-alt"></i>(646) 663-4575</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-blender-phone"></i>(646) 968-0608</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-envelope-open-text"></i>help@engotheme.com</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-location-arrow"></i>1201 Broadway Suite</a>
                                    </li>
                                </ul>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright-area">
                        <div class="footer-bottom-wrapper">
                            <div class="logo">
                                <a href="index.html"><img src="/frontend/assets/images/logo/footer-logo.png"
                                        alt="logo"></a>
                            </div>

                            <div class="copyright">
                                <p>&copy; Copyright 2024 | <a href="#0">CarBit</a> By <a href="#0">Developer</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--============= Footer Section Ends Here =============-->



        <script src="/frontend/assets/js/jquery-3.3.1.min.js"></script>
        <script src="/frontend/assets/js/modernizr-3.6.0.min.js"></script>
        <script src="/frontend/assets/js/plugins.js"></script>
        <script src="/frontend/assets/js/bootstrap.min.js"></script>
        <script src="/frontend/assets/js/isotope.pkgd.min.js"></script>
        <script src="/frontend/assets/js/aos.js"></script>
        <script src="/frontend/assets/js/wow.min.js"></script>
        <script src="/frontend/assets/js/waypoints.js"></script>
        <script src="/frontend/assets/js/nice-select.js"></script>
        <script src="/frontend/assets/js/counterup.min.js"></script>
        <script src="/frontend/assets/js/owl.min.js"></script>
        <script src="/frontend/assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/yscountdown.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="/frontend/assets/js/main.js"></script>
</body>

</html>