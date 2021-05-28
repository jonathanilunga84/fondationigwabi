<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" -->
        
        <!-- Vendor CSS Files -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

        <!-- Style Css -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
        <title>@yield('title')</title>
        <style>
           
        </style>        
    </head>
    <body>
        <div class="container-fluid">
            @include('layout.navigation')
        </div>

        <div id="imgHead" class="container-fluid">
            @yield('contenu')
        </div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('js/main.js')}}"></script>

        <div class="container-fluid">
            @include('layout.footer')
        </div>
    </body>
</html>