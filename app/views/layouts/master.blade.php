<!-- view -->
<!DOCTYPE html>
<html id="landing">
    <head>
        <meta charset="utf-8">
        <title>programmerPrep</title>
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="./css/fonts.css">
        <!-- normalize CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
        <!-- skeleton CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
        <!--  external landing css-->
        <link rel="stylesheet" type="text/css" href="./css/login.css">
        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!-- jQuery Validation CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
        <!-- frontEndValidation -->
        <script src="js/frontEndValidation.js"></script>
        <!-- external dashboard css -->
        <link rel="stylesheet" type="text/css" href="./css/dashboard.css">
        <!-- Nav Bar -->
        <link rel="stylesheet" type="text/css" href="./css/navbar.css">
        {{-- AboutUs css --}}
        <link rel="stylesheet" type="text/css" href="./css/aboutUs.css">
        @yield('top-script')
    </head>
    
        <main class="container">
            @yield('content')
        </main>      
</html>
