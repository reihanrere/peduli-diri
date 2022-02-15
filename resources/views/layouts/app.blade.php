<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>PeduliDiri.com</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/swiper.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        
        <!-- Favicon  -->
        <link rel="icon" href="{{asset('assets/images/favicon.svg')}}">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
        @include('layouts.navbar')
        
        <!-- Header -->
        @yield('content')
        <!-- end of header -->

        @include('layouts.footer')

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="{{asset('assets/images/up-arrow.png')}}" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('assets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('assets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('assets/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('assets/js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>