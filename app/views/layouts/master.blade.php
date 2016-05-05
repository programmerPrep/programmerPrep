<!DOCTYPE html>
<html id="landing">
    <head>
        <meta charset="utf-8">
        <title>programmerPrep</title>
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- normalize CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
        <!-- skeleton CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
        <!--  landing css-->
        <link rel="stylesheet" type="text/css" href="/css/landing.css">        
        <!-- external dashboard css -->
        <link rel="stylesheet" type="text/css" href="/css/dashboard.css">
        <!-- NavBar -->
        <link rel="stylesheet" type="text/css" href="/css/navbar.css">
        {{-- Footer --}}
        <link rel="stylesheet" type="text/css" href="/css/footer.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="./css/fonts.css">
        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!-- jQuery Validation CDN -->
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>     --}}
        <!-- frontEndValidation -->
        {{-- // <script src="js/frontEndValidation.js"></script> --}}
        <!-- Nav Bar -->
        <link rel="stylesheet" type="text/css" href="./css/navbar.css">
        <!-- AboutUs css -->
        <link rel="stylesheet" type="text/css" href="./css/aboutUs.css">
        <!--  testedit.blade.php css -->
        <link rel="stylesheet" type="text/css" href="./css/edit.css">

        @yield('top-script')
    </head>
    <body>
 
        <main class="container">
            @yield('content')
        </main>

    </body>
    
        @yield('top-script')
    </head>
        <main class="container">
            @yield('content')
        </main>      
</html>
    {{-- graveyard --}}
    {{-- // <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
    {{-- // <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> --}}
    