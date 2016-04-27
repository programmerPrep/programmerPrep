<!-- view -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> programmerPrep </title>
        <!-- normalize CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
        <!-- skeleton CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
        <!--  external css-->
        <link rel="stylesheet" type="text/css" href="./css/login.css">
        @yield('top-script')
    </head>
    <body>
 
        <main class="container">
            @yield('content')
        </main>
        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        @yield('bottom-script')
    </body>
</html>
