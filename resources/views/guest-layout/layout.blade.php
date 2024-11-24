<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/logos/Bloom-House-02.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logos/Bloom-House-02.png">
    <link rel="mask-icon" href="./assets/images/logos/Bloom-House-02.png" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    <link rel="stylesheet" href="./assets/css/guest.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
      * Reinstate scrolling for non-JS clients
      */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    <title>
        @yield('title')
    </title>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    {{-- Header --}}
    @if (request()->is('/'))
        <!-- Cek apakah ini halaman homepage -->
        <div class="position-relative z-index-30">
            <nav
                class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column border-0 position-absolute w-100 z-index-30 bg-transparent navbar-dark navbar-transparent bg-white-hover transition-all">
                @include('guest-layout.header')
            </nav>
        </div>
    @else
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column border-0">
            @include('guest-layout.header')
        </nav>
    @endif

    {{-- Content --}}
    <main class="mt-0">
        @yield('content')

    </main>
    {{-- Header --}}
    @include('guest-layout.footer')

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

</body>

</html>
