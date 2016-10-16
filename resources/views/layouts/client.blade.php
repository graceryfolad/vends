<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="We're better than Quickteller people, use us.">
        <meta name="keywords" content="Buy Airtime, Pay Bills">
        <meta name="author" content="EyeCity">

        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="/css/metro.css" rel="stylesheet">
        <link href="/css/metro-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/metro-responsive.css" rel="stylesheet">
        <!--<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->

        <!--<link href="/css/metro-bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/css/iconFont.css" rel="stylesheet" type="text/css"/>-->
        <!--<link href="/css/modern-business.css" rel="stylesheet">-->
        <link href="/css/style.css" rel="stylesheet">




        <!-- Scripts -->
        <script>
//            window.Laravel = <?php
//echo json_encode([
//    'csrfToken' => csrf_token(),
//]);
?>
        </script>
    </head>
    <body style="background-color: #A599B5; background-image: url('/img/4.jpg'); background-repeat: no-repeat; background-size: cover; background-position: fixed;">
        <div class="header">
            <div class="app-bar">
                <a class="app-bar-element" href="/client">Home</a>
                <span class="app-bar-divider"></span>
                <ul class="app-bar-menu">
                    <li><a href="/client">Home</a></li>
                    <li>
                        <a href="" class="dropdown-toggle">Products</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="">Windows 10</a></li>
                            <li><a href="">Spartan</a></li>
                            <li><a href="">Outlook</a></li>
                            <li><a href="">Office 2015</a></li>
                            <li class="divider"></li>
                            <li><a href="" class="dropdown-toggle">Other Products</a>
                                <ul class="d-menu" data-role="dropdown">
                                    <li><a href="">Internet Explorer 10</a></li>
                                    <li><a href="">Skype</a></li>
                                    <li><a href="">Surface</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Help</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="flex-grid">
                <div class="row cells2">
                    <div class="cell colspan8">
                        @yield('content')
                    </div>
                    <div class="cell colspan4">
                        <div class="tile-container">
                                    <div class="tile-wide" data-role="tile" data-effect="slideLeft">
                                        <div class="tile-content">
                                            <a href="#" class="live-slide"><img src="/img/3x.jpg" data-role="fitImage" data-format="fill"></a>
                                            <a href="#" class="live-slide"><img src="/img/5x.jpg" data-role="fitImage" data-format="fill"></a>
                                            <a href="#" class="live-slide"><img src="/img/4x.jpg" data-role="fitImage" data-format="fill"></a>
                                        </div>
                                    </div>

                                    <a href="/cussupport" class="tile bg-lighterBlue fg-white" data-role="tile">
                                        <div class="tile-content iconic">
                                            <span class="icon mif-help"></span>
                                        </div>
                                        <span class="tile-label">Support</span>
                                    </a>

                                    <a href="/cusfaq" class="tile bg-yellow fg-white" data-role="tile">
                                        <div class="tile-content iconic">
                                            <span class="icon mif-question"></span>
                                        </div>
                                        <span class="tile-label">FAQ</span>
                                    </a>

                                    <a href="/cusprofile" class="tile bg-teal fg-white" data-role="tile">
                                        <div class="tile-content iconic">
                                            <span class="icon mif-user"></span>
                                        </div>
                                        <span class="tile-label">Account Settings</span>
                                    </a>

                                    <a href="/logout" class="tile bg-lighterBlue fg-white" data-role="tile">
                                        <div class="tile-content iconic">
                                            <span class="icon mif-user-minus"></span>
                                        </div>
                                        <span class="tile-label">Log Out</span>
                                    </a>    
                                    <a href="/wallet" class="tile bg-black fg-white" data-role="tile">
                                        <div class="tile-content iconic">
                                            <span class="icon mif-credit-card"></span>
                                        </div>
                                        <span class="tile-label">eWallet</span>
                                    </a>

                                    <a href="/history" class="tile bg-cobalt fg-white" data-role="tile">
                                        <div class="tile-content iconic">
                                            <span class="icon mif-chart-bars"></span>
                                        </div>
                                        <span class="tile-label">History</span>
                                    </a>
                                </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="/js/jquery-2.1.3.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
