<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/media/logo/favicon.ico" type="image/x-icon">
    <title>Presto.it</title>
    
    {{-- CDN GoogleFonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> {{--Font Montserrat--}}
    
    {{-- CDN Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    @vite (['resources/css/app.css' , 'resources/js/app.js'])
    
    @if(Route::is('show_announcements'))
    @vite (['resources/css/app.css' , 'resources/js/show_announcements.js'])
    @endif
    
    @if(Route::is('welcome'))
    @vite (['resources/css/app.css' , 'resources/js/main.js'])
    @endif
    
    @if(Route::is('register'))
    @vite (['resources/css/app.css' , 'resources/js/form.js'])
    @endif
    
    @if(Route::is('login'))
    @vite (['resources/css/app.css' , 'resources/js/login.js'])
    @endif
    
    @if(Route::is('show_revisor'))
    @vite (['resources/css/app.css' , 'resources/js/show_announcements.js'])
    @endif
    
</head>
<body>
    <x-navbar></x-navbar>
    
    {{$slot}}
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>