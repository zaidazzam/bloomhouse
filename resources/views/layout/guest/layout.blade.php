<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logos/Bloom-House-02.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logos/Bloom-House-02.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logos/Bloom-House-02.png') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/logos/Bloom-House-02.png') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- text-edit ck --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js"></script>
    <!-- Add if you use premium features. -->
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5-premium-features/44.1.0/ckeditor5-premium-features.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5-premium-features/44.1.0/ckeditor5-premium-features.umd.js"></script>
    {{-- text-edit ck --}}

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/libs.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/guest.css') }}" />
    <link href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" rel="stylesheet">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    {{-- midtrans client prod --}}
    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    {{-- midtrans client sb --}}
    {{-- <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script> --}}
    {{-- paypal client --}}
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>


    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.bundle.css') }}" />

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
<script>
     let allCookies = document.cookie.split(';');

// The "expire" attribute of every cookie is 
// Set to "Thu, 01 Jan 1970 00:00:00 GMT"
for (let i = 0; i < allCookies.length; i++)
    document.cookie = allCookies[i] + "=;expires="
        + new Date(0).toUTCString();

displayCookies.innerHTML = document.cookie;
</script>

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
    <div class="position-relative z-index-30">
        @if (request()->is('/'))
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column border-0 position-fixed top-0 w-100 z-index-30 shadow-sm">
                @include('layout.guest.header')
            </nav>
        @else
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column border-0 position-fixed top-0 w-100 z-index-30 shadow-sm">
                @include('layout.guest.header')
            </nav>
        @endif
    </div>
    

    {{-- Content --}}
    <main class="mt-0">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layout.guest.footer')

    {{-- Filter --}}
    @include('layout.guest.filter')

    {{-- Cart --}}
    @include('layout.guest.cart')

    {{-- Search --}}
    @include('layout.guest.search')

    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendor.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.bundle.js') }}"></script>

    <script>
        document.querySelectorAll('.quick-cart-btn').forEach(button => {
            button.addEventListener('click', function() {
                let productId = this.dataset.id;
                let productName = this.dataset.name;
                let productPrice = this.dataset.price;
                let csrfToken = this.dataset.token;
                let productPicture = this.dataset.picture;
                
                fetch("{{ route('cart.add') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    product_id: productId,
                    product_name: productName,
                    product_price: productPrice,
                    product_pict: productPicture,
                }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload()
                    } else {
                        alert('Failed to add to cart: ' + data.message);
                    }
                });
            });
        });

        document.querySelectorAll('.paynow-btn').forEach(button => {
            button.addEventListener('click', function() {
                let productId = this.dataset.id;
                let productName = this.dataset.name;
                let productPrice = this.dataset.price;
                let csrfToken = this.dataset.token;
                let productPicture = this.dataset.picture;
                
                fetch("{{ route('cart.add') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    product_id: productId,
                    product_name: productName,
                    product_price: productPrice,
                    product_pict: productPicture,
                }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = "{{ route('checkout') }}";
                    } else {
                        alert('Failed to add to cart: ' + data.message);
                    }
                });
            });
        });
    </script>


    
</body>

</html>
