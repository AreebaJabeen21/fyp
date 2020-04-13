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
              <li class="nav-item"><a href="product" class="nav-link">Items</a></li>
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
                                   
                                    <a href="#" class="dropdown-item" ><i class="fa fa-user pr-2"></i>Profile</a>
                                        <div class="dropdown-divider"></div>

                                    <a href="#" class="dropdown-item" ><i class="fa fa-user pr-2"></i>My Request</a>
                                        <div class="dropdown-divider"></div>

                                    <a href="#" class="dropdown-item" ><i class="fa fa-bell pr-2"></i>Notifications</a>
                                        <div class="dropdown-divider"></div>



                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>
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