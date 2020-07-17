<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>MyHouse - Advanced Real Estate HTML Template by ThemeStarz</title>

</head>

<body>
<div class="ts-page-wrapper ts-has-bokeh-bg" id="page-top">
    <header id="ts-header" class="fixed-top">

        <!-- SECONDARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-secondary-navigation" class="navbar p-0">
            <div class="container justify-content-end justify-content-sm-between">

                <!--Left Side-->
                <div class="navbar-nav d-none d-sm-block">
                    <!--Phone-->
                    <span class="mr-4">
                            <i class="fa fa-phone-square mr-1"></i>
                            +1 123 456 789
                        </span>
                    <!--Email-->
                    <a href="#">
                        <i class="fa fa-envelope mr-1"></i>
                        hello@example.com
                    </a>
                </div>

                <!--Right Side-->
                <div class="navbar-nav flex-row">

                    <!--Search Input-->
                    <input type="text" class="form-control p-2 border-left bg-transparent w-auto" placeholder="Search">

                    <!--Currency Select-->
                    <select class="custom-select bg-transparent ts-text-small border-left" id="currency" name="currency">
                        <option value="1">GBP</option>
                        <option value="2">USD</option>
                        <option value="3">EUR</option>
                    </select>

                    <!--Language Select-->
                    <select class="custom-select bg-transparent ts-text-small border-left border-right" id="language" name="language">
                        <option value="1">EN</option>
                        <option value="2">FR</option>
                        <option value="3">DE</option>
                    </select>

                </div>
                <!--end navbar-nav-->
            </div>
            <!--end container-->
        </nav>

        <!--PRIMARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <!--Brand Logo-->
                <a class="navbar-brand" href="index-map-leaflet-fullscreen.html">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <!--Responsive Collapse Button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Collapsing Navigation-->
                <div class="collapse navbar-collapse" id="navbarPrimary">

                    <!--LEFT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav">

                        <!--HOME (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link active" href="#">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- MAP (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Map</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <!-- OPENSTREETMAP (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">OpenStreetMap</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end OpenStreetMap-->

                                        <!-- MAPBOX (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">MapBox</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end MapBox-->

                                        <!-- GOOGLE (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Google</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-google-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Google-->

                                        <!-- HERE (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Here</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-here-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Here-->

                                        <!-- BING (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Bing</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-bing-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Bing-->

                                    </ul>
                                    <!--end List (2nd level)-->

                                </li>
                                <!--end MAP (1st level)-->

                                <!-- SLIDER (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Slider</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="index-slider.html" class="nav-link">Slider Default</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-fullscreen.html" class="nav-link">Full Screen</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-form-vertical.html" class="nav-link">Vertical Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-form-horizontal.html" class="nav-link">Horizontal Form</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end SLIDER (1st level)-->

                                <!-- IMAGE (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Image</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="index-image-form-horizontal-dark.html" class="nav-link">Horizontal Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-image-form-vertical-light.html" class="nav-link">Vertical Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-image-fullscreen.html" class="nav-link">Full Screen</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-video-background.html" class="nav-link">Video Background</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end SLIDER (1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end HOME nav-item-->

                        <!--LISTING (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Listing</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- CATEGORY ICONS (1st level)
                                =====================================================================================-->
                                <li class="nav-item">

                                    <a href="listing-category-icons.html" class="nav-link">Category Icons</a>

                                </li>
                                <!--end CATEGORY ICONS (1st level)-->

                                <!-- GRID (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Grid</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="listing-grid-3-columns.html" class="nav-link">Grid 3 Columns</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-4-columns.html" class="nav-link">Grid 4 Columns</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-mixed.html" class="nav-link">Mixed</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-sidebar-left.html" class="nav-link">Sidebar Left</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-sidebar-right.html" class="nav-link">Sidebar Right</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end GRID (1st level)-->

                                <!-- LIST (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">List</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="listing-list-sidebar-left.html" class="nav-link">Sidebar Left</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-list-sidebar-right.html" class="nav-link">Sidebar Right</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-list-compact-sidebar.html" class="nav-link">Compact with Sidebar</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end LIST (1st level)-->

                                <!-- PROPERTY (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Property</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="detail-01.html" class="nav-link">Property Detail v1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="detail-02.html" class="nav-link">Property Detail v2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="detail-03.html" class="nav-link">Property Detail v3</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end PROPERTY (1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end LISTING nav-item-->

                        <!--PAGES (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Pages</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- AGENCY (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Agency</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="agencies-list.html" class="nav-link">Agencies List</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agency-detail.html" class="nav-link">Agency Detail</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end AGENCY (1st level)-->

                                <!-- AGENTS (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Agents</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="agencies-list.html" class="nav-link">Agents List</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agent-detail-01.html" class="nav-link">Agent Detail v1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agent-detail-02.html" class="nav-link">Agent Detail v2</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end LIST (1st level)-->

                                <!-- EDIT PROPERTY (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="edit-property.html" class="nav-link">Edit Property</a>
                                </li>
                                <!--end EDIT PROPERTY (1st level)-->

                                <!-- FAQ (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <!--end FAQ (1st level)-->

                                <!-- LOGIN (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">Login</a>
                                </li>
                                <!--end LOGIN (1st level)-->

                                <!-- PRICING (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <!--end PRICING (1st level)-->

                                <!-- REGISTER (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link">Register</a>
                                </li>
                                <!--end REGISTER (1st level)-->

                                <!-- SUBMIT (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="submit.html" class="nav-link">Submit Property</a>
                                </li>
                                <!--end SUBMIT (1st level)-->

                                <!-- SUBMIT PREVIEW (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="preview.html" class="nav-link">Submit Preview</a>
                                </li>
                                <!--end SUBMIT PREVIEW (1st level)-->

                                <!-- SUBMITTED (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="submitted.html" class="nav-link">Submitted</a>
                                </li>
                                <!--end SUBMITTED(1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end PAGES nav-item-->

                        <!--ABOUT US (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About Us</a>
                        </li>
                        <!--end ABOUT US nav-item-->

                        <!--CONTACT (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="contact.html">Contact</a>
                        </li>
                        <!--end CONTACT nav-item-->

                    </ul>
                    <!--end Left navigation main level-->

                    <!--RIGHT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav ml-auto">

                        <!--LOGIN (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>

                        <!--REGISTER (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="register.html">Register</a>
                        </li>

                        <!--SUBMIT (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="btn btn-outline-primary btn-sm m-1 px-3" href="submit.html">
                                <i class="fa fa-plus small mr-2"></i>
                                Add Property
                            </a>
                        </li>

                    </ul>
                    <!--end Right navigation-->

                </div>
                <!--end navbar-collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end #ts-primary-navigation.navbar-->

    </header>
    <main id="ts-main">
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section id="page-title">
            <div class="container">
                <div class="ts-title">
                    <h1>Register</h1>
                </div>
            </div>
        </section>

        <section id="login-register">
            <div class="container">
                <div class="row">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                        <ul class="nav nav-tabs" id="login-register-tabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
                                    <h3>Login</h3>
                                </a>
                            </li>

                            <!--Register tab-->
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">
                                    <h3>Register</h3>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane" id="login" role="tabpanel" aria-labelledby="login-tab">

                                <form class="ts-form" id="form-login">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="login-email" placeholder="Email" required>
                                    </div>
                                    <div class="input-group ts-has-password-toggle">
                                        <input type="password" class="form-control border-right-0" placeholder="Password" value="Sercet_123" required>
                                        <div class="input-group-append">
                                            <a href="#" class="input-group-text bg-white border-left-0 ts-password-toggle">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!--Checkbox and Submit button-->
                                    <div class="ts-center__vertical justify-content-between">

                                        <!--Remember checkbox-->
                                        <div class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input" id="login-check">
                                            <label class="custom-control-label" for="login-check">Remember Me</label>
                                        </div>

                                        <!--Submit button-->
                                        <button type="submit" class="btn btn-primary">Login</button>

                                    </div>

                                    <hr>

                                    <!--Forgot password link-->
                                    <a href="#" class="ts-text-small">
                                        <i class="fa fa-sync-alt ts-text-color-primary mr-2"></i>
                                        <span class="ts-text-color-light">I have forgot my password</span>
                                    </a>

                                </form>

                            </div>

                            <div class="tab-pane active" id="register" role="tabpanel" aria-labelledby="register-tab">

                                <form class="ts-form" id="form-register" method="get" action="/store">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="register-name" placeholder="Username" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="register-email" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="input-group ts-has-password-toggle">
                                        <input type="password" class="form-control border-right-0" placeholder="Password" name="password" required>
                                        <div class="input-group-append">
                                            <a href="#" class="input-group-text bg-white border-left-0 ts-password-toggle">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="input-group ts-has-password-toggle">
                                        <input type="password" class="form-control border-right-0" placeholder="Repeat Password" name="password_confirmation" required>
                                        <div class="input-group-append">
                                            <a href="#" class="input-group-text bg-white border-left-0 ts-password-toggle">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!--Checkbox-->
                                    <div class="custom-control custom-checkbox mb-4">
                                        <input type="checkbox" class="custom-control-input" id="register-check" required>
                                        <label class="custom-control-label" for="register-check">I Agree With <a href="#" class="btn-link">Terms and Conditions</a></label>
                                    </div>

                                    <!--Submit button-->
                                    <button type="submit" class="btn btn-primary">Register</button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>
    <footer id="ts-footer">
        <section id="ts-footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="brand">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat tempor sapien.
                            In lobortis posuere tincidunt. Curabitur malesuada tempus ligula nec maximus. Nam tortor
                            arcu,
                            tincidunt quis molestie non, sagittis dignissim ligula. Fusce est ipsum, pharetra in felis
                            ac,
                            lobortis volutpat diam.
                        </p>
                        <a href="#" class="btn btn-outline-dark mb-4">Contact Us</a>
                    </div>

                    <!--Navigation-->
                    <div class="col-md-2">
                        <h4>Navigation</h4>
                        <nav class="nav flex-row flex-md-column mb-4">
                            <a href="#" class="nav-link">Home</a>
                            <a href="#" class="nav-link">Listing</a>
                            <a href="#" class="nav-link">About Us</a>
                            <a href="#" class="nav-link">Sign In</a>
                            <a href="#" class="nav-link">Register</a>
                            <a href="#" class="nav-link">Submit Property</a>
                        </nav>
                    </div>

                    <!--Contact Info-->
                    <div class="col-md-4">
                        <h4>Contact</h4>
                        <address class="ts-text-color-light">
                            2590 Rocky Road
                            <br>
                            Philadelphia, PA 19108
                            <br>
                            <strong>Email: </strong>
                            <a href="#" class="btn-link">office@example.com</a>
                            <br>
                            <strong>Phone:</strong>
                            +1 215-606-0391
                            <br>
                            <strong>Skype: </strong>
                            real.estate1
                        </address>
                    </div>

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-main-->

        <!--SECONDARY FOOTER CONTENT
            =========================================================================================================-->
        <section id="ts-footer-secondary">
            <div class="container">

                <!--Copyright-->
                <div class="ts-copyright">(C) 2018 ThemeStarz, All rights reserved</div>

                <!--Social Icons-->
                <div class="ts-footer-nav">
                    <nav class="nav">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </nav>
                </div>
                <!--end ts-footer-nav-->

            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-secondary-->

    </footer>
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
