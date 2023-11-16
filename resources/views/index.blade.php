<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/133d03ba7a.js" crossorigin="anonymous"></script>

        @livewireStyles

    </head>
    <body>
        <div class="floating-parent">
            <a href="https://www.m.me/printcraffiti" class="" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-messenger text-primary fs-1 m-2"></i></a> 
        </div>
        <header class="container-fluid">
            
            <nav class="navbar navbar-expand-lg navbar-dark">
                @include('partials.nav-menu')
            </nav>
        </header>
        <!-- START SECTION -->
            @yield('content')
        <!-- END SECTION -->
        @include('partials.footer')
        
        @include('partials.modals.how-to-order')
        @include('partials.modals.sign-up')
        @include('partials.modals.login')
        <!-- Bootstrap JS -->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
