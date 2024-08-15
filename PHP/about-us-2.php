<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['profile_pic'])) {
    // Redirect to login page if not logged in

}

// Get username and profile picture from session
$username = $_SESSION['username'];
$profile_pic = $_SESSION['profile_pic'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Apna Services</title>

    <link rel="shortcut icon" href="assets/img/logos\favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/slider.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH">
    <style>
        .profile-container {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #f0f0f0;

        }

        .profile-pic {
            width: 10%;
            /* Adjust size as needed */
            max-width: 100px;
            /* Maximum width */
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 50%;
            /* Makes the image round */
            margin-right: 5px;
            /* Add space to the right of the image */
        }

        .username {
            font-size: 1.2em;
            /* Adjust font size */
        }

        @media screen and (max-width: 768px) {
            .profile-pic {
                width: 20%;
                /* Adjust size for smaller screens */
                max-width: 80px;
                /* Maximum width */
            }
        }

        @media screen and (max-width: 480px) {
            .profile-container {
                flex-direction: column;
                align-items: center;
            }

            .profile-pic {
                margin-right: 0;
                /* Remove margin for smaller screens */
                margin-bottom: 10px;
                /* Add space below the image */
            }
        }

        @media only screen and (max-width: 575.98px) {
            .header-navbar-rht {
                margin-bottom: 50px;
            }
        }
    </style>


</head>

<body>

    <div class="main-wrapper">

        <header class="header header-two">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">

                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index-3.php" class="navbar-brand logo">
                            <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a href="index-3.php" class="navbar-brand logo-small">
                            <img src="assets/img/logos/favicon.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>

                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index-3.php" class="menu-logo">
                                <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                    class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="index-3.php">Home </i></a>
                                <ul class="submenu mega-submenu">

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Services <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="cleaner-2.php">Cleaning</a></li>
                                    <li><a href="electrician-2.php">Electrical</a></li>
                                    <li><a href="car washer-2.php">Car Wash</a></li>
                                    <li><a href="chef-2.php">Catering</a></li>
                                    <li><a href="bueatician-2.php">beautician</a></li>
                                    <li><a href="mechanic-2.php">Appliance</a></li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="providers-2.php">Providers </a>

                            </li>
                            <li class="has-submenu">
                                <a href="about-us-2.php">about us </a>

                            </li class="has-submenu">

                            <li><a href="contact-us-2.php">Contact us</a></li>
                            <!-- <li class="login-link">
                                <a href="logout.php">Book Service</a>
                            </li> -->
                            <li class="login-link">
                                <a href="logout.php">Logout</a>
                            </li>

                        </ul>

                    </div>
                    <ul class="nav header-navbar-rht" id="profile-container">
                        <div class="nav header-navbar-rht">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="profileDropdownLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- Adjust the size of the profile picture -->
                                    <img class="profile-pic" src="<?php echo $profile_pic; ?>" alt="Profile Picture"
                                        style="width: 40px; height: 40px; border-radius: 50%;">
                                    <span
                                        style="text-transform: capitalize; color: midnightblue; font-weight: bold;"><?php echo $username; ?></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdownLink">
                                    <li><a class="dropdown-item" href="pprofile.php"
                                            style="background-color: deeppink;">Profile</a>
                                    </li>
                                    <!-- Add more dropdown items here if needed -->
                                    <li>
                                        <!-- <hr class="dropdown-divider"> -->
                                    </li>
                                    <li><a class="dropdown-item" href="pbookings.php"
                                            style="background-color: deeppink;">My Bookings</a></li>
                                            <li><a class="dropdown-item" href="logout.php"
                                            style="background-color: deeppink;">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                    <!-- <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login"
                                href="book.php"><i
                                    class="feather-user"></i>
                                Book Service</a>
                        </li>
                    </ul> -->
                    <!-- <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="logout.php"><i class="feather-user"></i>
                                Logout</a>
                        </li>
                    </ul> -->
                </nav>

            </div>

        </header>

        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">About Us</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="content p-0">

            <div class="about-sec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <div class="about-exp">
                                    <span>12+ years of experiences</span>
                                </div>
                                <div class="abt-img">
                                    <img src="img/about3.jpg" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h6>ABOUT OUR COMPANY</h6>
                                <h2>Best Solution For Home Services</h2>
                                <p style="color: black;">Apna Service is a technology platform offering a variety of services at home.
                                    Customers use our platform to book services such as beauty treatments, haircuts,
                                    massage therapy, cleaning, plumbing, carpentry, Appliance repair, painting etc.
                                    These services are delivered in the comfort of their home and at a time of their
                                    choosing. We promise our customers a high quality, standardised and reliable service
                                    experience. To fulfill this promise, we work closely with our hand-picked service
                                    partners, enabling them with technology, training, products, tools, financing,
                                    insurance and brand, helping them succeed and deliver on this promise.
                                </p>
                                <h2>Our Vision</h2>
                                <p style="color: black;">Empower millions of professionals worldwide to deliver services at home like never
                                    experienced before.
                                </p>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li>At vero et accusamus iusto dignissimos</li>
                                            <li>At vero et accusamus iusto dignissimos</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Nam libero tempore, cum soluta nobis</li>
                                            <li>Nam libero tempore, cum soluta nobis</li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="work-section work-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-heading">
                                <h2>How It Works</h2>
                                <!-- <p>Aliquam lorem ante, dapibus in, viverra quis</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="work-box">
                                <div class="work-icon">
                                    <span>
                                        <img src="assets/img/icons/work-icon.svg" alt="img">
                                    </span>
                                </div>
                                <h5>Choose What To Do</h5>
                                <!-- <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.
                                </p> -->
                                <h4>01</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="work-box">
                                <div class="work-icon">
                                    <span>
                                        <img src="assets/img/icons/find-icon.svg" alt="img">
                                    </span>
                                </div>
                                <h5>Find What You Want</h5>
                                <!-- <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.
                                </p> -->
                                <h4>02</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="work-box">
                                <div class="work-icon">
                                    <span>
                                        <img src="assets/img/icons/place-icon.svg" alt="img">
                                    </span>
                                </div>
                                <h5>Amazing Places</h5>
                                <!-- <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.
                                </p> -->
                                <h4>03</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="chooseus-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="choose-content">
                                <h2>Why Choose Us</h2>
                                <p style="color: black;">Apna Service provides a platform that allows skilled and experienced professionals
                                    to connect with users looking for specific services. Once on the platform, our
                                    match-making algorithm identifies professionals who are closest to the users’
                                    requirements and available at the requested time and date.</p>
                                <div class="support-card">
                                    <h4 class="support-title">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#aboutone"
                                            aria-expanded="true">24/7 Supports</a>
                                    </h4>
                                    <!-- <div id="aboutone" class="card-collapse collapse">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div> -->
                                </div>
                                <div class="support-card">
                                    <h4 class="support-title">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#abouttwo"
                                            aria-expanded="false">Client’s reviews</a>
                                    </h4>
                                    <!-- <div id="abouttwo" class="card-collapse collapse">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div> -->
                                </div>
                                <div class="support-card">
                                    <h4 class="support-title">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#about3"
                                            aria-expanded="false">Professional Team</a>
                                    </h4>
                                    <!-- <div id="about3" class="card-collapse collapse">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div> -->
                                </div>
                                <div class="support-card">
                                    <h4 class="support-title">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#about4"
                                            aria-expanded="false">Best Services</a>
                                    </h4>
                                    <!-- <div id="about4" class="card-collapse collapse">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chooseus-img">
                                <img src="assets/img/about-01.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="choose-icon">
                                <img src="assets/img/icons/choose-icon.svg" class="img-fluid" alt="img">
                                <div class="choose-info">
                                    <h5>283+</h5>
                                    <p style="color: black;">Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="choose-icon">
                                <img src="assets/img/icons/choose-icon-01.svg" class="img-fluid" alt="img">
                                <div class="choose-info">
                                    <h5>120+</h5>
                                    <p style="color: black;">Expert Team</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="choose-icon">
                                <img src="assets/img/icons/choose-icon.png" class="img-fluid" alt="img">
                                <div class="choose-info">
                                    <h5>250+</h5>
                                    <p style="color: black;">Project Completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="choose-icon border-0">
                                <img src="assets/img/icons/choose-icon-03.svg" class="img-fluid" alt="img">
                                <div class="choose-info">
                                    <h5>12+</h5>
                                    <p style="color: black;">Years of experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="providers-section-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 aos" data-aos="fade-up">
                            <div class="section-heading-two white-text">
                                <h2>Top Providers</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                            <a href="providers.html" class="btn btn-pink btn-viewall">View All<i
                                    class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="row  aos" data-aos="fade-up">
                        <div class="col-lg-3 col-sm-6">
                            <div class="providerset provider-box">
                                <div class="providerset-img">
                                    <a href="providers.html">
                                        <img src="assets/img/expert/krish.png" alt="img">
                                    </a>
                                </div>
                                <div class="providerset-content">
                                    <div class="providerset-price">
                                        <div class="providerset-name">
                                            <h4><a href="providers.html">Krish</a><i class="fa fa-check-circle"
                                                    aria-hidden="true"></i></h4>
                                            <span>Chef</span>
                                        </div>
                                        <div class="providerset-prices">
                                            <h6>Rs.200<span>/hr</span></h6>
                                        </div>
                                    </div>
                                    <div class="provider-rating">
                                        <div class="rate">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <a href="providers.html" class="btn btn-pink">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="providerset provider-box">
                                <div class="providerset-img">
                                    <a href="providers.html">
                                        <img src="assets/img/expert/ankit.png" alt="img">
                                    </a>
                                </div>
                                <div class="providerset-content">
                                    <div class="providerset-price">
                                        <div class="providerset-name">
                                            <h4><a href="providers.html">Ankit</a><i class="fa fa-check-circle"
                                                    aria-hidden="true"></i></h4>
                                            <span>Electrician</span>
                                        </div>
                                        <div class="providerset-prices">
                                            <h6>Rs.200<span>/hr</span></h6>
                                        </div>
                                    </div>
                                    <div class="provider-rating">
                                        <div class="rate">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <a href="providers.html" class="btn btn-pink">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="providerset provider-box">
                                <div class="providerset-img">
                                    <a href="providers.html">
                                        <img src="assets/img/expert/parth.png" alt="img">
                                    </a>
                                </div>
                                <div class="providerset-content">
                                    <div class="providerset-price">
                                        <div class="providerset-name">
                                            <h4><a href="providers.html">Parth</a><i class="fa fa-check-circle"
                                                    aria-hidden="true"></i></h4>
                                            <span>Cleaner</span>
                                        </div>
                                        <div class="providerset-prices">
                                            <h6>Rs.200<span>/hr</span></h6>
                                        </div>
                                    </div>
                                    <div class="provider-rating">
                                        <div class="rate">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <a href="providers.html" class="btn btn-pink">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="providerset provider-box">
                                <div class="providerset-img">
                                    <a href="providers.html">
                                        <img src="assets/img/expert/tanishk.png" alt="img">
                                    </a>
                                </div>
                                <div class="providerset-content">
                                    <div class="providerset-price">
                                        <div class="providerset-name">
                                            <h4><a href="providers.html">Tanishk</a><i class="fa fa-check-circle"
                                                    aria-hidden="true"></i></h4>
                                            <span>Mechanic</span>
                                        </div>
                                        <div class="providerset-prices">
                                            <h6>Rs.200<span>/hr</span></h6>
                                        </div>
                                    </div>
                                    <div class="provider-rating">
                                        <div class="rate">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <a href="providers.html" class="btn btn-pink">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="client-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-heading">
                                <h2>What our client says</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel testimonial-slider">
                                <div class="client-widget">
                                    <div class="client-img">
                                        <a href="#">
                                            <img class="img-fluid" alt="Image" src="assets/img/profiles/avatar-01.jpg">
                                        </a>
                                    </div>
                                    <div class="client-content">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                        <p>Our fully-insured, uniformed professionals guarantee timely arrival with the necessary tools to complete any home maintenance or repair job. You can rely on us for a hassle-free, one-call solution.</p>
                                        <h5>Mike Hussy</h5>
                                        <h6>Director</h6>
                                    </div>
                                </div>
                                <div class="client-widget">
                                    <div class="client-img">
                                        <a href="#">
                                            <img class="img-fluid" alt="Image" src="assets/img/profiles/avatar-02.jpg">
                                        </a>
                                    </div>
                                    <div class="client-content">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi </p>
                                        <h5>Mike Hussy</h5>
                                        <h6>Director</h6>
                                    </div>
                                </div>
                                <div class="client-widget">
                                    <div class="client-img">
                                        <a href="#">
                                            <img class="img-fluid" alt="Image" src="assets/img/profiles/avatar-03.jpg">
                                        </a>
                                    </div>
                                    <div class="client-content">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi </p>
                                        <h5>Mike Hussy</h5>
                                        <h6>Director</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <div class="service-offer">
                <div class="container">
                    <div class="col-md-12">
                        <div class="offer-paths about-offer">
                            <div class="offer-path-content">
                                <h3>Looking for the Best Service Finder & Bookings</h3>
                                <p>Our fully-insured, uniformed professionals guarantee timely arrival with the necessary tools to complete any home maintenance or repair job. You can rely on us for a hassle-free, one-call solution.</p>
                                <a href="service-grid.html" class="btn btn-primary btn-views">Get Started<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                            <div class="offer-pathimg">
                                <img src="assets/img/service-img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <footer class="footer footer-two">

            <div class="footer-top aos" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logos/logo.png" alt="logo"></a>
                                </div>

                                <div class="footer-widget footer-contact">
                                    <div class="footer-contact-info">
                                        <div class="footer-address">
                                            <span><i class="feather-phone-call"></i></span>
                                            <div>
                                                <h6>Tel</h6>
                                                <p>8989687305</p>
                                            </div>
                                        </div>
                                        <div class="footer-address">
                                            <a href="mailto:apnaservicecontact@gmail.com"><span><i
                                                        class="feather-mail"></i></span>
                                                <div>
                                                    <h6>Email Address</h6>
                                                    <p>apnaservicecontact@gmail.com</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="footer-address">
                                            <a href="https://maps.app.goo.gl/Aa6N4wfwP3G5wRpR8" target="_blank">
                                                <span><i class="feather-map-pin"></i></span>
                                                <div>
                                                    <h6>Address</h6>
                                                    <p>Mandsaur, Madhya Pradesh, India</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Company</h2>
                                <ul>
                                    <li>
                                        <a href="about-us-2.php">About Us</a>
                                    </li>

                                    <a href="#">Gallery</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Quick Links</h2>
                                <ul>
                                    <li>
                                        <a href="contact-us-2.php">Contact us</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">



                        </div>
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget">
                                <h2 class="footer-title">Instagram Feed</h2>
                                <ul class="row insta-row">
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-01.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-02.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-03.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-04.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-05.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-06.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-07.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-08.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-09.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container">

                    <div class="copyright">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="payment-image">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-01.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-02.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-03.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-04.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-05.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-06.png"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">

                                <div class="copyright-text">
                                    <p class="mb-0">Copyright &copy; 2024. All Rights Reserved.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>


        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/owl.carousel.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/plugins/aos/aos.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/slick.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/backToTop.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/script.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="1271a8878c82b706c8b95fbf-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 11:35:33 GMT -->
<!-- ankit -->
</html>