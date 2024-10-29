<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sbidu - Bid And Auction HTML Template</title>

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
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .detail-table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
    }

    .detail-table th,
    .detail-table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .detail-table th {
        background-color: #4CAF50;
        color: white;
    }

    .detail-table tr:nth-child(even) {
        background-color: #f9f9f9;
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
                        <li class="customer-cupport-lang">
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="Bn">Bn</option>
                                <option value="Rs">Rs</option>
                                <option value="Us">Us</option>
                                <option value="Pk">Pk</option>
                                <option value="Arg">Arg</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="cart-button-area">
                        <li>
                            <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span
                                    class="amount">08</span></a>
                        </li>
                        <li>
                            <a href="sign-in.html" class="user-button"><i class="flaticon-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="/frontend/assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="#0">Home</a>
                            <ul class="submenu">
                                <li>
                                    <a href="./index.html">Home Page One</a>
                                </li>
                                <li>
                                    <a href="./index-2.html">Home Page Two</a>
                                </li>
                                <li>
                                    <a href="./index-3.html">Home Page Three</a>
                                </li>
                                <li>
                                    <a href="./index-4.html">Home Page Four</a>
                                </li>
                                <li>
                                    <a href="./index-5.html">Home Page Five</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./product.html">Auction</a>
                        </li>
                        <li>
                            <a href="#0">Pages</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#0">Product</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="./product.html">Product Page 1</a>
                                        </li>
                                        <li>
                                            <a href="./product-2.html">Product Page 2</a>
                                        </li>
                                        <li>
                                            <a href="./product-details.html">Product Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">My Account</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="./sign-up.html">Sign Up</a>
                                        </li>
                                        <li>
                                            <a href="./sign-in.html">Sign In</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Dashboard</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="./dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="./profile.html">Personal Profile</a>
                                        </li>
                                        <li>
                                            <a href="./my-bid.html">My Bids</a>
                                        </li>
                                        <li>
                                            <a href="./winning-bids.html">Winning Bids</a>
                                        </li>
                                        <li>
                                            <a href="./notifications.html">My Alert</a>
                                        </li>
                                        <li>
                                            <a href="./my-favorites.html">My Favorites</a>
                                        </li>
                                        <li>
                                            <a href="./referral.html">Referrals</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="./about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="./faqs.html">Faqs</a>
                                </li>
                                <li>
                                    <a href="./error.html">404 Error</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./contact.html">Contact</a>
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
                        <a href="#0"><img src="/frontend/assets/images/shop/shop01.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="/frontend/assets/images/shop/shop02.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="/frontend/assets/images/shop/shop03.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="/frontend/assets/images/shop/shop04.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="/frontend/assets/images/shop/shop05.jpg" alt="shop"></a>
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
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="./index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Vehicles</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Product Details Section Starts Here =============-->
    @foreach($vehicles as $vehicle)
        <section class="product-details padding-bottom mt--240 mt-lg--440">
            <div class="container">
                <div class="product-details-slider-top-wrapper">
                    <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                        <div class="slide-top-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/product1.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-top-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/product2.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-top-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/product3.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-top-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/product4.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-top-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/product5.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-top-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/product6.png" alt="product">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details-slider-wrapper">
                    <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">
                        <div class="slide-bottom-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/01.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-bottom-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/02.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-bottom-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/03.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-bottom-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/04.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-bottom-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/05.png" alt="product">
                            </div>
                        </div>
                        <div class="slide-bottom-item">
                            <div class="slide-inner">
                                <img src="/frontend/assets/images/product/06.png" alt="product">
                            </div>
                        </div>
                    </div>
                    <span class="det-prev det-nav">
                        <i class="fas fa-angle-left"></i>
                    </span>
                    <span class="det-next det-nav active">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </div>
                <div class="row mt-40-60-80">
                    <div class="col-lg-8">
                        <div class="product-details-content">
                            <div class="product-details-header">
                                <h2 class="title">The {{$vehicle->make}} {{$vehicle->_model}}</h2>
                                <ul>
                                    <li>Listing ID: {{$vehicle->lot_number}}</li>
                                    <li>Item #: {{$vehicle->item_number}}</li>
                                </ul>
                            </div>
                            <ul class="price-table mb-30">
                                <li class="header">
                                    <h5 class="current">Current Price</h5>
                                    <h3 class="price">{{$vehicle->vehicle_retail_value}}</h3>
                                </li>
                            </ul>
                            <table class="detail-table">
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                <tr>
                                    <td>vin</td>
                                    <td>{{$vehicle->vin}}</td>
                                </tr>
                                <tr>
                                    <td>country</td>
                                    <td>{{$vehicle->country}}</td>
                                </tr>
                                <tr>
                                    <td> Make</td>
                                    <td>{{$vehicle->make}}</td>
                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>{{$vehicle->model}}</td>
                                </tr>
                                <tr>
                                    <td>Body Type</td>
                                    <td>{{$vehicle->bodytype}}</td>
                                </tr>
                                <tr>
                                    <td>Drive</td>
                                    <td>{{$vehicle->drive}}</td>
                                </tr>
                                <tr>
                                    <td>Fuel</td>
                                    <td>{{$vehicle->fuel}}</td>
                                </tr>
                                <tr>
                                    <td>Engine</td>
                                    <td>{{$vehicle->engine}}</td>
                                </tr>
                                <tr>
                                    <td>transmission</td>
                                    <td>{{$vehicle->transmission}}</td>
                                </tr>
                                <tr>
                                    <td>Auction</td>
                                    <td>{{$vehicle->auction}}</td>
                                </tr>
                                <td>Sale Branch</td>
                                <td>{{$vehicle->sale_branch}}</td>
                                </tr>
                            
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="details">
                        <div class="tab-details-content">
                            <div class="header-area">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endforeach
    <!--============= Product Details Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="/assets/images/footer/footer-bg.jpg">
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

        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <a href="index.html"><img src="/frontend/assets/images/logo/footer-logo.png" alt="logo"></a>
                        </div>

                        <div class="copyright">
                            <p>&copy; Copyright 2024 | <a href="#0">CarBid</a> By <a href="#0"></a></p>
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
    <script src="/frontend/assets/js/yscountdown.min.js"></script>
    <script src="/frontend/assets/js/jquery-ui.min.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
</body>

</html>