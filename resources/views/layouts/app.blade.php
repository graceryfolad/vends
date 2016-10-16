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
    <link href="/css/metro-icons.css" rel="stylesheet">
    <link href="/css/metro-responsive.css" rel="stylesheet">
 
    
  <!--<link href="/css/modern-business.css" rel="stylesheet">-->
 <link href="/css/style.css" rel="stylesheet">
   
    
    
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="background-color: #A599B5; background-image: url('img/4.jpg'); background-repeat: no-repeat; background-size: cover; background-position: fixed;">
    <div class="container">
        <div class="header">
        <a href="/">
            <div class="tile-area-title">
                <img width="140px" height="140px" src="img/logo.png">
            </div>
        </a>
        </div>
       @yield('content')
       
       <div class="footer">
          <div class="copyright"> 2016 © AirVend. We Vend Things. </div>
       </div>
    </div>

    <!-- Scripts -->
     <script src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/metro.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
