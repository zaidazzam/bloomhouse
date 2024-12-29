 <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
     <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

         <!-- Logo-->
         <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="/">
             <!-- Start of Logo-->
             <div class="d-flex align-items-center">
                 <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                     <img class="img-fluid-logo" src="{{ asset('assets/images/logos/Bloom-House-02.png') }}"
                         alt="BloomHouse Logo">
                     <span class="fs-5">BloomHouse</span>
                 </div>
             </div>
             <!-- / Logo-->
         </a>

         <!-- / Logo-->

         <!-- Main Navigation-->
         <div class="ms-5 flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1"
             id="navbarNavDropdown">

             <!-- Mobile Nav Toggler-->
             <button
                 class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 position-absolute top-0 end-0 mt-3 me-2"
                 data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <i class="ri-close-circle-line ri-2x"></i>
             </button>
             <!-- / Mobile Nav Toggler-->

             <ul class="navbar-nav py-lg-2 mx-auto">
                 <li class="nav-item me-lg-4 dropdown position-static">
                     <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="/category" role="button"
                         data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Rose
                     </a>
                     <!-- Dropdown Menu -->
                     <div class="dropdown-menu dropdown-megamenu">
                         <div class="container">
                             <div class="row g-0">
                                 <!-- Dropdown Menu Links Section -->
                                 <div class="col-12 col-lg-7">
                                     <div class="row py-lg-5">
                                         <!-- Menu for Tulip category -->
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Tulip</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Tulip']) && count($categoryProducts['Tulip']) > 0)
                                                     @foreach ($categoryProducts['Tulip'] as $product)
                                                         <a class="dropdown-item"
                                                             href="{{ route('product1.show', ['id' => $product->id]) }}">
                                                             {{ $product->name }}
                                                         </a>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all" href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>

                                         </div>
                                         <!-- Menu for Rose category -->
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Rose</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Rose']) && count($categoryProducts['Rose']) > 0)
                                                     @foreach ($categoryProducts['Rose'] as $product)
                                                         <li class="dropdown-list-item">
                                                             <a class="dropdown-item"
                                                                 href="/product/{{ $product->id }}">
                                                                 {{ $product->name }}
                                                             </a>
                                                         </li>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all" href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Dropdown Menu Images Section -->
                                 <div class="d-none d-lg-block col-lg-5">
                                     <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute"
                                         style="background-image: url('{{ asset('assets/images/banners/banner-bunga.jpg') }}');">
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <!-- /Dropdown Menu -->
                 </li>

                 <li class="nav-item me-lg-4 dropdown position-static">
                     <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="/category" role="button"
                         data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Birthday Flowers
                     </a>
                     <div class="dropdown-menu dropdown-megamenu">
                         <div class="container">
                             <div class="row g-0">
                                 <div class="col-12 col-lg-7">
                                     <div class="row py-lg-5">
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Birthday Flowers</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Birthday Flowers']) && count($categoryProducts['Birthday Flowers']) > 0)
                                                     @foreach ($categoryProducts['Birthday Flowers'] as $product)
                                                         <li class="dropdown-list-item">
                                                             <a class="dropdown-item"
                                                                 href="/product/{{ $product->id }}">
                                                                 {{ $product->name }}
                                                             </a>
                                                         </li>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all" href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Get Well Soon</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Get Well Soon']) && count($categoryProducts['Get Well Soon']) > 0)
                                                     @foreach ($categoryProducts['Get Well Soon'] as $product)
                                                         <li class="dropdown-list-item">
                                                             <a class="dropdown-item"
                                                                 href="/product/{{ $product->id }}">
                                                                 {{ $product->name }}
                                                             </a>
                                                         </li>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all" href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="d-none d-lg-block col-lg-5">
                                     <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute"
                                         style="background-image: url('{{ asset('assets/images/banners/banner-bunga.jpg') }}');">
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </li>
                 <li class="nav-item me-lg-4 dropdown position-static">
                     <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="/category" role="button"
                         data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Graduation Wedding
                     </a>
                     <div class="dropdown-menu dropdown-megamenu">
                         <div class="container">
                             <div class="row g-0">
                                 <div class="col-12 col-lg-7">
                                     <div class="row py-lg-5">
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Graduation</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Graduation']) && count($categoryProducts['Graduation']) > 0)
                                                     @foreach ($categoryProducts['Graduation'] as $product)
                                                         <li class="dropdown-list-item">
                                                             <a class="dropdown-item"
                                                                 href="/product/{{ $product->id }}">
                                                                 {{ $product->name }}
                                                             </a>
                                                         </li>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all"
                                                         href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Thank You</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Thank You']) && count($categoryProducts['Thank You']) > 0)
                                                     @foreach ($categoryProducts['Thank You'] as $product)
                                                         <li class="dropdown-list-item">
                                                             <a class="dropdown-item"
                                                                 href="/product/{{ $product->id }}">
                                                                 {{ $product->name }}
                                                             </a>
                                                         </li>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all"
                                                         href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="d-none d-lg-block col-lg-5">
                                     <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute"
                                         style="background-image: url('{{ asset('assets/images/banners/banner-bunga.jpg') }}');">
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </li>


                 <li class="nav-item me-lg-4 dropdown position-static">
                     <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="/category" role="button"
                         data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Anniversary Flower
                     </a>
                     <div class="dropdown-menu dropdown-megamenu">
                         <div class="container">
                             <div class="row g-0">
                                 <div class="col-12 col-lg-7">
                                     <div class="row py-lg-5">
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Anniversary Flower</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Anniversary Flower']) && count($categoryProducts['Anniversary Flower']) > 0)
                                                     @foreach ($categoryProducts['Anniversary Flower'] as $product)
                                                         <li class="dropdown-list-item">
                                                             <a class="dropdown-item"
                                                                 href="/product/{{ $product->id }}">
                                                                 {{ $product->name }}
                                                             </a>
                                                         </li>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all"
                                                         href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="col col-lg-6 mb-5 mb-sm-0">
                                             <h6 class="dropdown-heading">Hydrangea</h6>
                                             <ul class="list-unstyled">
                                                 @if (isset($categoryProducts['Hydrangea']) && count($categoryProducts['Hydrangea']) > 0)
                                                     @foreach ($categoryProducts['Hydrangea'] as $product)
                                                         <li class="dropdown-list-item">
                                                             <a class="dropdown-item"
                                                                 href="/product/{{ $product->id }}">
                                                                 {{ $product->name }}
                                                             </a>
                                                         </li>
                                                     @endforeach
                                                 @else
                                                     <li class="dropdown-list-item text-muted">
                                                         No products available.
                                                     </li>
                                                 @endif
                                                 <li class="dropdown-list-item">
                                                     <a class="dropdown-item dropdown-link-all"
                                                         href="/category/tulip">
                                                         View All
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="d-none d-lg-block col-lg-5">
                                     <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute"
                                         style="background-image: url('{{ asset('assets/images/banners/banner-bunga.jpg') }}');">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
                 <li class="nav-item me-lg-4">
                     <a class="nav-link fw-bolder py-lg-4" href="#">
                         Mix Flower
                     </a>
                 </li>
                 <li class="nav-item me-lg-4">
                     <a class="nav-link fw-bolder py-lg-4" href="/blog">
                         Blog
                     </a>
                 </li>
                 {{-- <li class="nav-item dropdown me-lg-4">
                     <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button"
                         data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Demo Pages
                     </a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="./index.html">Homepage</a></li>
                         <li><a class="dropdown-item" href="./category.html">Category</a></li>
                         <li><a class="dropdown-item" href="./product.html">Product</a></li>
                         <li><a class="dropdown-item" href="./cart.html">Cart</a></li>
                         <li><a class="dropdown-item" href="./checkout.html">Checkout</a></li>
                     </ul>
                 </li> --}}
             </ul>
             <!-- / Main Navigation-->

             <!-- Navbar Icons-->
             <ul class="list-unstyled mb-0 d-flex align-items-center">

                 <!-- Navbar Toggle Icon-->
                 <li class="d-inline-block d-lg-none">
                     <button
                         class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 d-flex align-items-center"
                         data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                         aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <i class="ri-menu-line ri-lg align-middle"></i>
                     </button>
                 </li>
                 <!-- /Navbar Toggle Icon-->

                 <!-- Navbar Search-->
                 <li class="ms-1 d-inline-block">
                     <button class="btn btn-link px-2 text-decoration-none d-flex align-items-center" data-pr-search>
                         <i class="ri-search-2-line ri-lg align-middle"></i>
                     </button>
                 </li>
                 <!-- /Navbar Search-->

                 <!-- Navbar Wishlist-->
                 {{-- <li class="ms-1 d-none d-lg-inline-block">
             <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center" href="#">
                 <i class="ri-heart-line ri-lg align-middle"></i>
             </a>
         </li> --}}
                 <!-- /Navbar Wishlist-->

                 <!-- Navbar Login-->
                 <li class="ms-1 d-none d-lg-inline-block">
                     <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                         data-bs-toggle="modal" data-bs-target="#loginModal">
                         <i class="ri-user-line ri-lg align-middle"></i>
                     </a>
                 </li>

                 <!-- /Navbar Login-->

                 <!-- Navbar Cart-->
                 <li class="ms-1 d-inline-block position-relative">
                     <button
                         class="btn btn-link px-2 text-decoration-none d-flex align-items-center disable-child-pointer"
                         data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                         <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10"></i>
                         <span
                             class="fs-xs fw-bolder f-w-5 f-h-5 bg-orange rounded-lg d-block lh-1 pt-1 position-absolute top-0 end-0 z-index-20 mt-2 text-white">{{ count($cart) }}</span>
                     </button>
                 </li>
                 <!-- /Navbar Cart-->

             </ul>
             <!-- Navbar Icons-->

         </div>


     </div>
     <!-- Login Modal -->
     <div class="modal fade" id="loginModal" data-bs-backdrop="static" tabindex="-1">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                 <!-- Modal Header -->
                 <div class="modal-header">
                     <h5 class="modal-title" id="loginModalLabel">Login to your Account</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <!-- Modal Header -->

                 <!-- Modal Body -->
                 <div class="modal-body">
                     @if (session('error'))
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                             {{ session('error') }}
                         </div>
                     @endif
                     <form id="loginForm">
                         @csrf
                         <div class="input-group mb-4">
                             <input type="text" class="form-control" id="username" name="username"
                                 placeholder="Enter your username">
                         </div>
                         <div class="input-group mb-3">
                             <input name="password" type="password" value="" class="form-control"
                                 id="password" placeholder="Password" required>
                             <span class="input-group-text" onclick="togglePasswordVisibility();">
                                 <i class="bx bx-hide"></i>
                             </span>
                         </div>
                         {{-- <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                        </div> --}}
                         <button type="button" id="loginButton" class="btn btn-primary d-grid w-100">Login</button>
                     </form>
                     <div id="errorMessage" class="alert alert-danger d-none mt-3"></div>

                 </div>
                 <!-- Modal Body -->

                 <!-- Modal Footer -->
                 <div class="modal-footer">
                     <p class="small">Don't have an account? <a href="{{ route('register') }}"
                             class="text-primary">Register</a></p>
                     {{-- <p class="small"><a href="/forgot-password" class="text-primary">Forgot Password?</a></p> --}}
                 </div>
                 <!-- Modal Footer -->
             </div>
         </div>
     </div>

     <script>
         document.getElementById('loginButton').addEventListener('click', function() {
             const formData = new FormData(document.getElementById('loginForm'));

             fetch('{{ route('login') }}', {
                     method: 'POST',
                     headers: {
                         'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                     },
                     body: formData
                 })
                 .then(response => response.json())
                 .then(data => {
                     if (data.success) {
                         // Redirect to dashboard or reload the page
                         window.location.href = data.redirect || '/dashboard';
                     } else {
                         // Display error message
                         const errorMessage = document.getElementById('errorMessage');
                         errorMessage.textContent = data.message || 'Login failed. Please try again.';
                         errorMessage.classList.remove('d-none');
                     }
                 })
                 .catch(error => {
                     console.error('Error:', error);
                 });
         });

         function togglePasswordVisibility() {
             let passwordInput = document.getElementById('password');
             let showEye = document.getElementById('hide_eye');
             let hideEye = document.getElementById('hide_eye');
             if (passwordInput.type === 'password') {
                 passwordInput.type = 'text';
                 // showEye.classList.add('d-none');
                 // hideEye.classList.remove('d-none');
             } else {
                 passwordInput.type = 'password';
                 // showEye.classList.remove('d-none');
                 // hideEye.classList.add('d-none');
             }
         }
     </script>
