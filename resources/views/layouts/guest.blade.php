<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}} | {{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Foris Labs is a virtual 3d Laboratory designed to eliminate the -probem if">
    <meta name="keywords" content="foris labs laboratory 3d virtual offline">
    <!-- Website Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    @include('layouts.guest.navigation')
    <div class="font-sans text-ash-900 antialiased">
        {{ $slot }}
        <section class="text-ash-400 bg-ash-800 body-font">
            <div class="container px-5 py-16 mx-auto flex flex-wrap items-center">
                <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                    <h1 class="title-font font-medium text-3xl text-white">Interested in marketing for us?</h1>
                    <p class="leading-relaxed mt-4">Get a 5% commision for every user that signs up to use Foris Labs with your PROMO code.</p>
                </div>
                <div class="lg:w-2/6 md:w-1/2 bg-ash-700 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                    <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
                    <div class="relative mb-4">
                        <label for="full-name" class="leading-7 text-sm text-ash-400">Full Name</label>
                        <input type="text" id="full-name" name="full-name" class="w-full bg-ash-600 bg-opacity-20 focus:bg-transparent focus:ring-1 focus:ring-orange-600 rounded border border-ash-600 focus:border-orange-200 text-base outline-none text-ash-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-ash-400">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-ash-600 bg-opacity-20 focus:bg-transparent focus:ring-1 focus:ring-orange-600 rounded border border-ash-600 focus:border-orange-200 text-base outline-none text-ash-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button class="text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg">Sign Up</button>
                    <p class="text-xs mt-3">We will get back to you on further instructions</p>
                </div>
            </div>
        </section>
        @include('layouts.guest.footer')
    </div>
</body>

</html>