<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="/loggo.ico" />
    <link rel="stylesheet" href="asset2/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="asset2/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset2/css/templatemo-xtra-blog.css" rel="stylesheet">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>

<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">Xtra Blog</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="/"
                            class="tm-nav-link">
                            <i class="fas fa-home"></i>
                            Blog Home
                        </a></li>
                    {{-- <li class="tm-nav-item"><a href="post.html" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Single Post
                        </a></li> --}}
                    <li class="tm-nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"
                            class="tm-nav-link">
                            <i class="fas fa-users"></i>
                            About Xtra
                        </a></li>
                    <li class="tm-nav-item {{ Request::is('contact') ? 'active' : '' }}"><a
                            href="{{ route('contact') }}" class="tm-nav-link">
                            <i class="far fa-comments"></i>
                            Contact Us
                        </a></li>
                    <li class="tm-nav-item"><a href="{{ route('login') }}" class="tm-nav-link">
                            <i class="far fa-user"></i>
                            Login
                        </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar.
                Right side content will scroll up and down.
            </p>
        </div>
    </header>

    @yield('content')

    <script src="asset2/js/jquery.min.js"></script>
    <script src="asset2/js/templatemo-script.js"></script>
</body>

</html>
