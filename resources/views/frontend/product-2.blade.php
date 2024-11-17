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
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="/frontend/assets/css/owl.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/aos.css">
    <link rel="stylesheet" href="/frontend/assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/filters.js') }}"></script>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>
<style>
    /* Auction Card Styling */
    .auction-card {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Light shadow for the card */
        background-color: #fff;
        /* White background */
    }

    /* Image section */
    .auction-thumb img {
        border-radius: 8px;
        width: 100%;
    }

    /* Text and Info Sections */
    .lot-info,
    .vehicle-info,
    .condition-info,
    .sale-info,
    .bids-info {
        font-size: 14px;
        /* Adjust font size */
        margin: 0;
        padding: 10px 0;
    }

    .bids-info button {
        font-size: 12px;
        padding: 5px 10px;
    }

    /* Responsive Padding */
    @media (max-width: 768px) {
        .auction-card .col {
            padding-bottom: 20px;
        }
    }

    /* Ribbon Header */
    .ribbon-header {
        background-color: #1c1c1c;
        padding: 10px 0;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .ribbon-title {
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0;
        font-size: 14px;
        /* Adjusted font size */
    }

    .ribbon-header .col {
        border-right: 1px solid #333;
    }

    .ribbon-header .col:last-child {
        border-right: none;
    }

    /* Content Below Header */
    .row .col {
        padding: 10px;
    }

    .auction-thumb img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    /* Lot Info, Vehicle Info, Condition, Sale Info, Bids */
    .lot-info,
    .vehicle-info,
    .condition-info,
    .sale-info,
    .bids-info {
        font-size: 14px;
        /* Adjusted font size */
    }

    .bids-info button {
        font-size: 12px;
        /* Smaller button text */
        padding: 5px 10px;
        /* Adjusted button padding */
    }

    /* Filter Sidebar Styling */
    .filter-sidebar {
        width: 350px;
        /* Increased width */
    }

    .filter-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #007bff;
    }

    .filter-switch .form-check-label {
        font-size: 1rem;
    }

    .filter-switch {
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }

    .filter-dropdown {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .filter-dropdown .btn-link {
        color: #000;
        text-decoration: none;
    }

    .filter-dropdown .btn-link i {
        font-size: 14px;
    }

    .filter-dropdown .d-flex {
        justify-content: space-between;
        align-items: center;
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

        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="./">
                            <img src="/frontend/assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="/">Home</a>
                            <ul class="">

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
                        <input type="text" placeholder="Search for brand, model...." name="query">
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


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="/frontend/assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->
    <!--============= Product Auction Section Starts Here =============-->
    <div class="product-auction padding-bottom">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-4 mb-50">

                    <div class="filter-sidebar p-3 shadow bg-white">
                        <!-- Header with Title and Reset Button -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <h5 class="filter-title text-primary me-2">Search Filters</h5>
                            </div>
                            <a href="#" class="text-primary" id="reset-all">Reset All</a>
                        </div>

                        <!-- Switch Filters -->
                        <div class="filter-switch mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-check-label fw-bold">
                                    <i class="fas fa-check-circle text-primary"></i> Select Vehicles Only
                                </label>
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>

                        <div class="filter-switch mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-check-label">Newly Added Vehicles</label>
                                <select class="form-select form-select-sm w-auto">
                                    <option>Last 24 Hours</option>
                                    <option>Last 48 Hours</option>
                                    <option>Last 7 Days</option>
                                </select>
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>

                        <div class="filter-switch mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-check-label">Exclude Upcoming Auction Vehicles</label>
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>

                        <!-- Dropdown Filters -->
                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Sale Branch</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-salebranch" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-salebranches">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter10" class="collapse">
                                <div id="salebranch-list"></div>
                            </div>
                        </div>


                        <!-- Bootstrap Collapse Year Filter -->
                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Year</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-year" class="text-primary me-2"
                                        onclick="resetYears()">Reset</a>
                                    <button class="btn btn-link p-0" data-bs-toggle="collapse"
                                        data-bs-target="#filter-year" aria-expanded="false" aria-controls="filter-year">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="filter-year" class="collapse mt-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <label for="minYear" class="form-label">Min</label>
                                        <select id="minYear" class="form-select" aria-label="Min Year"></select>
                                    </div>
                                    <span class="mx-2">-</span>
                                    <div>
                                        <label for="maxYear" class="form-label">Max</label>
                                        <select id="maxYear" class="form-select" aria-label="Max Year"></select>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Make</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-make" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-makes">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter6" class="collapse">
                                <div id="make-list"></div> <!-- List to display the makes -->
                            </div>
                        </div>
                        <!-- Model Filter -->
                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Model</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-model" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-models">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter7" class="collapse">
                                <div id="model-list"></div> <!-- List to display the makes -->
                            </div>
                        </div>
                        <!-- Color Filter -->
                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Color</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-color" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-colors">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter8" class="collapse">
                                <div id="color-list"></div>
                            </div>
                        </div>

                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Body type</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-bodytype" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-bodytypes">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter9" class="collapse">
                                <div id="bodytype-list"></div>
                            </div>
                        </div>

                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Drive</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-drive" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-drives">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter11" class="collapse">
                                <div id="drive-list"></div>
                            </div>
                        </div>


                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Fuel</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-fuel" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-fuels">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter12" class="collapse">
                                <div id="fuel-list"></div>
                            </div>
                        </div>
                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Engine</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-engine" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-engines">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter13" class="collapse">
                                <div id="engine-list"></div>
                            </div>
                        </div>

                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Transmission</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-transmission" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-transmissions">
                                        <i class="fas fa-plus"></i> <!-- Icon to toggle between + and - -->
                                    </button>
                                </div>
                            </div>
                            <div id="filter14" class="collapse">
                                <div id="transmission-list"></div>
                            </div>
                        </div>

                        <!-- Auction
                        <div class="filter-dropdown mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Auction</span>
                                <div class="d-flex align-items-center">
                                    <a href="#" id="reset-auction" class="text-primary me-2">Reset</a>
                                    <button class="btn btn-link p-0" id="fetch-auctions">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="filter15" class="collapse">
                             <div id="auction-list"></div>
                            </div>
                        </div>
                        -->
                    </div>


                </div>
                <div class="col-lg-8 mb-50">
                    <div class="product-header mb-40 style-2">
                        <div class="product-header-item">
                            <div class="item">Sort By : </div>
                            <!-- <select name="sort-by" class="select-bar">
                                <option value="all">All</option>
                                <option value="name">Name</option>
                                <option value="date">Date</option>
                                <option value="type">Type</option>
                                <option value="car">Car</option>
                            </select> -->
                        </div>
                        <div class="product-header-item">
                            <div class="item">Show : </div>
                            <!-- <select name="sort-by" class="select-bar">
                                <option value="09">06</option>
                                <option value="21">09</option>
                                <option value="30">30</option>
                                <option value="39">39</option>
                                <option value="60">60</option>
                            </select> -->
                        </div>
                        <form class="product-search ml-auto">
                            <input type="text" placeholder="Item Name">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Ribbon Header -->
                    <div class="ribbon-header">
                        <div class="row text-center align-items-center">
                            <!-- Image Section -->
                            <div class="col">
                                <h6 class="ribbon-title">Image</h6>
                            </div>

                            <!-- Lot Info Section -->
                            <div class="col">
                                <h6 class="ribbon-title">Lot Info</h6>
                            </div>

                            <!-- Vehicle Info Section -->
                            <div class="col">
                                <h6 class="ribbon-title">Vehicle Info</h6>
                            </div>

                            <!-- Condition Section -->
                            <div class="col">
                                <h6 class="ribbon-title">Condition</h6>
                            </div>

                            <!-- Sale Info Section -->
                            <div class="col">
                                <h6 class="ribbon-title">Sale Info</h6>
                            </div>

                            <!-- Bids Section -->
                            <div class="col">
                                <h6 class="ribbon-title">Bids</h6>
                            </div>
                        </div>
                    </div>
                    <div id="car-list" class="row mb-30-none justify-content-center">
                        <div class="container auction-card shadow p-3 mb-4 bg-white rounded">
                            <div class="row text-center align-items-start">
                                <!-- Image Section -->
                                <div class="col">
                                    <div class="auction-thumb">
                                        <img src="https://via.placeholder.com/330x247" alt="product"
                                            class="product-image img-fluid">
                                    </div>
                                </div>

                                <!-- Lot Info Section -->
                                <div class="col">
                                    <div class="lot-info">

                                    </div>
                                </div>

                                <!-- Vehicle Info Section -->
                                <div class="col">
                                    <div class="vehicle-info">

                                    </div>
                                </div>

                                <!-- Condition Section -->
                                <div class="col">
                                    <div class="condition-info">

                                    </div>
                                </div>

                                <!-- Sale Info Section -->
                                <div class="col">
                                    <div class="engine-info">

                                    </div>
                                </div>

                                <!-- Bids Section -->
                                <div class="col">
                                    <div class="bids-info">
                                        <button class="btn btn-primary mb-2">Bid Now</button>
                                        <button class="btn btn-success">Buy It Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
        <ul class="pagination">
            <li>
                <a href="#0"><i class="flaticon-left-arrow"></i></a>
            </li>
            <li>
                <a href="#0">1</a>
            </li>
            <li>
                <a href="#0" class="active">2</a>
            </li>
            <li>
                <a href="#0">3</a>
            </li>
            <li>
                <a href="#0"><i class="flaticon-right-arrow"></i></a>
            </li>
        </ul>
    </div>
    </div>
    </div>
    </div>
    <!--============= Product Auction Section Ends Here =============-->


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
                            <a href="index.html"><img src="/frontend/assets/images/logo/footer-logo.png" alt="logo"></a>
                        </div>
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img src="/frontend/assets/images/footer/paypal.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="/frontend/assets/images/footer/visa.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="/frontend/assets/images/footer/discover.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="/frontend/assets/images/footer/mastercard.png" alt="footer"></a>
                            </li>
                        </ul>
                        <div class="copyright">
                            <p>&copy; Copyright 2024 | <a href="#0">Sbidu</a> By <a href="#0">Uiaxis</a></p>
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


    </script>
</body>

</html>