<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front'.'/main.css')}}">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="icon" href="{{asset('front'.'/images/logo.png')}}" type="image/png">
    @yield('css')
</head>
<body>

<!-- header -->
<header class="header" id="header">
    <div class="head-top">
        <div class="site-name">
            <span>E-GUIDE</span>
        </div>
        <div class="site-nav">
            <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
        </div>
    </div>
@yield('header')
</header>
<!-- end of header -->

<!-- side navbar -->
<div class="sidenav" id="sidenav">
            <span class="cancel-btn" id="cancel-btn">
                <i class="fas fa-times"></i>
            </span>

    <ul class="navbar">
        <li><a href="#header">home</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#rooms">rooms</a></li>
    </ul>
    <button class="btn sign-up">sign up</button>
    <button class="btn log-in">log in</button>
</div>
<!-- end of side navbar -->

<!-- fullscreen modal -->
<div id="modal"></div>
<!-- end of fullscreen modal -->
@yield('content')
<!-- body content  -->


<!-- end of body content -->

<!-- footer -->
<footer class="footer">
    <div class="footer-container">
        <div>
            <h2>About Us </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident?
                Eos quisquam aliquid vel dolorum, impedit culpa.</p>
            <ul class="social-icons">
                <li class="flex">
                    <i class="fa fa-twitter fa-2x"></i>
                </li>
                <li class="flex">
                    <i class="fa fa-facebook fa-2x"></i>
                </li>
                <li class="flex">
                    <i class="fa fa-instagram fa-2x"></i>
                </li>
            </ul>
        </div>

        <div>
            <h2>Useful Links</h2>
            <a href="#">Blog</a>
            <a href="#">Rooms</a>
            <a href="#">Subscription</a>
            <a href="#">Gift Card</a>
        </div>

        <div>
            <h2>Privacy</h2>
            <a href="#">Career</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Services</a>
        </div>

        <div>
            <h2>Have A Question</h2>
            <div class="contact-item">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                <span>
                            203 Fake St.Mountain View, San Francisco, California, USA
                        </span>
            </div>
            <div class="contact-item">
                        <span>
                            <i class="fas fa-phone-alt"></i>
                        </span>
                <span>
                            +84545 37534 48
                        </span>
            </div>
            <div class="contact-item">
                        <span>
                            <i class="fas fa-envelope"></i>
                        </span>
                <span>info@domain.com</span>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->

<script src="{{asset('front/'.'script.js')}}"></script>
</body>
</html>
