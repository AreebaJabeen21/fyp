<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Give2Share-building community through giving</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="images/title_icon.png"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- donate index css -->
        <link rel="stylesheet" type="text/css" href="css/donateStyle.css">
        <!-- productFilter page css -->
        <link rel="stylesheet" type="text/css" href="css/productFilter.css">
    </head>
    <body class="goto-here">
        <div>
            @yield('header')
            
            <!-- <div class="py-1 bg-primary">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                        <div class="col-lg-12 d-block">
                            <div class="row d-flex">
                                <div class="col-md pr-4 d-flex topper align-items-center">
                                    <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                    <span class="text">+ 1235 2355 98</span>
                                </div>
                                <div class="col-md pr-4 d-flex topper align-items-center">
                                    <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                    <span class="text">youremail@email.com</span>
                                </div>
                                <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                                    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="images/vertical_g2slogo.png" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
                            {{--       <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="product">Clothes</a>
                                    <a class="dropdown-item" href="#">FootWare</a>
                                    <a class="dropdown-item" href="#">Books</a>
                                    <a class="dropdown-item" href="#">Animals</a>
                                    <a class="dropdown-item" href="#">Medicine</a>
                                    <a class="dropdown-item" href="#">Mobiles</a>
                                    <a class="dropdown-item" href="#">Furniture</a>
                                    <a class="dropdown-item" href="#">Home Appliances</a>
                                </div>
                            </li> --}}
                            <li class="nav-item"><a href="donate" class="nav-link">Donate</a></li>
                            <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                            
                            <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                            {{--
                            <li class="nav-item cta cta-colored"><a href="{{route('login')}}" class="nav-link">Want something</a></li>
                            --}}
                            <!-- <li class="nav-item "><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                            -->
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Claim') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END nav -->
        </div>
        <div>
            @yield('footer')
            <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
                <div class="container py-4">
                    <div class="row d-flex justify-content-center py-5">
                        <div class="col-md-6">
                            <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                            <span>Get e-mail updates about products availability!</span>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="ftco-footer ftco-section">
                <div class="container">
                    <div class="row">
                        <div class="mouse">
                            <a href="#" class="mouse-icon">
                                <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Give2Share</h2>
                                <p>Give2Share will spread the attitude of sharing and giving what we owe to others.</p>
                                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ftco-footer-widget mb-4 ml-md-5">
                                <h2 class="ftco-heading-2">Menu</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Products</a></li>
                                    <li><a href="#" class="py-2 d-block">About</a></li>
                                    <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Help</h2>
                                <div class="d-flex">
                                    <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                        <li><a href="#" class="py-2 d-block">Process of Work</a></li>
                                        <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                        <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                                    </ul>
                                    <!--    <ul class="list-unstyled">
                                        <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                        <li><a href="#" class="py-2 d-block">Contact</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Have a Questions?</h2>
                                <div class="block-23 mb-3">
                                    <ul>
                                        <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                        <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                        <li><a href="#"><span class="icon icon-envelope"></span><span class="text">givetoshare1@gmail.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <p>
                                &copy;<script>document.write(new Date().getFullYear());</script>
                                <a href="index.php" target="_blank">Give2Share</a>
                                | All rights reserved
                            </p>
                        </div>
                        <div class="col-md-4 text-center"></div>
                        <div class="col-md-4 text-center">
                            <p>
                                <a href="#">Privacy Policy | </a>
                                <a href="#">Terms of Use</a>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            
            
            <!-- loader -->
            <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="js/jquery-migrate-3.0.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="js/jquery.easing.1.3.js"></script>
            <script src="js/jquery.waypoints.min.js"></script>
            <script src="js/jquery.stellar.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/aos.js"></script>
            <script type="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery.animateNumber.min.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="js/scrollax.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
            <script src="js/google-map.js"></script>
            <script src="js/main.js"></script>
            <script src="js/product_filter.js"></script>
            <script>
            $(document).ready(function(){
            var quantitiy=0;
            $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
            
            $('#quantity').val(quantity + 1);
            
            // Increment
            
            });
            $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
            
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
            });
            
            });
            </script>
            {{-- cardvalidator --}}
            <script src="jquery-creditcardvalidator/jquery.creditCardValidator.js"></script>
        </body>
    </html>
</div>