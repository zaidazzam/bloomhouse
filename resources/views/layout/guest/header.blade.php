    <!-- Navbar -->
 <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
                <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="/">
                        <!-- Start of Logo-->
                        <div class="d-flex align-items-center">
                            <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                                <img class="img-fluid-logo" src="{{ asset('assets/images/logos/Bloom-House-02.png') }}"
                                alt="BloomHouse Logo">
                                <span class="fs-6">BloomHouse</span>
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
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-close-circle-line ri-2x"></i>
                        </button>
                        <!-- / Mobile Nav Toggler-->

                        <ul class="navbar-nav py-lg-2 mx-auto">
                            <li class="nav-item me-lg-4 dropdown position-static">
                                <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Rose
                                </a>
                                <!-- Menswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="container">
                                        <div class="row g-0">
                                            <!-- Dropdown Menu Links Section-->
                                            <div class="col-12 col-lg-7">
                                                <div class="row py-lg-5">

                                                    <!-- menu row-->
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
                                                                <a class="dropdown-item dropdown-link-all" href="/category">
                                                                    View All
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                    <!-- /menu row-->

                                                    <!-- menu row-->
                                                    <div class="col col-lg-6">
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
                                                                <a class="dropdown-item dropdown-link-all" href="/category">
                                                                    View All
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /menu row-->

                                                </div>
                                            </div>
                                            <!-- /Dropdown Menu Links Section-->

                                            <!-- Dropdown Menu Images Section-->
                                            <div class="d-none d-lg-block col-lg-5">
                                                <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute"
                                                    style="background-image: url('{{ asset('assets/images/banners/banner-bunga.jpg') }}');">
                                                </div>
                                            </div>
                                            <!-- Dropdown Menu Images Section-->
                                        </div>
                                    </div>
                                </div>
                                <!-- / Menswear dropdown menu-->
                            </li>
                            <li class="nav-item me-lg-4 dropdown position-static">
                                <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Birthday Flowers
                                </a>
                                <!-- Womenswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="container">
                                        <div class="row g-0">
                                            <!-- Dropdown Menu Links Section-->
                                            <div class="col-12 col-lg-7">
                                                <div class="row py-lg-5">

                                                    <!-- menu row-->
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
                                                                <a class="dropdown-item dropdown-link-all" href="/category">
                                                                    View All
                                                                </a>
                                                            </li>
                                                        </ul>

<<<<<<< HEAD
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
                     <a class="nav-link fw-bolder py-lg-4" href="/category">
                         Product
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
=======
                                                    </div>
                                                    <!-- /menu row-->
>>>>>>> ead80ec2c38dcc0a22f95a1ee9bdcdb71f680aeb

                                                    <!-- menu row-->
                                                    <div class="col col-lg-6">
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
                                                                <a class="dropdown-item dropdown-link-all" href="/category">
                                                                    View All
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /menu row-->

                                                </div>
                                            </div>
                                            <!-- /Dropdown Menu Links Section-->

                                            <!-- Dropdown Menu Images Section-->
                                            <div class="d-none d-lg-block col-lg-5">
                                                <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute"
                                                style="background-image: url('{{ asset('assets/images/banners/banner-bunga.jpg') }}');">
                                            </div>
                                            </div>
                                            <!-- Dropdown Menu Images Section-->
                                        </div>
                                    </div>
                                </div>
                                <!-- / Womenswear dropdown menu-->
                            </li>
                            <li class="nav-item me-lg-4 dropdown position-static">
                                <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Graduation Wedding
                                </a>
                                <!-- Womenswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="container">
                                        <div class="row g-0">
                                            <!-- Dropdown Menu Links Section-->
                                            <div class="col-12 col-lg-7">
                                                <div class="row py-lg-5">

                                                    <!-- menu row-->
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
                                                    <!-- /menu row-->

                                                    <!-- menu row-->
                                                    <div class="col col-lg-6">
                                                        <h6 class="dropdown-heading">Wedding</h6>
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
                                                    <!-- /menu row-->

                                                </div>
                                            </div>
                                            <!-- /Dropdown Menu Links Section-->

                                            <!-- Dropdown Menu Images Section-->
                                            <div class="d-none d-lg-block col-lg-5">
                                                <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute"
                                                style="background-image: url('{{ asset('assets/images/banners/banner-bunga.jpg') }}');">
                                            </div>
                                            </div>
                                            <!-- Dropdown Menu Images Section-->
                                        </div>
                                    </div>
                                </div>
                                <!-- / Womenswear dropdown menu-->
                            </li>
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="/category">
                                    Product
                                </a>
                            </li>
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="/blog">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- / Main Navigation-->

                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center">

                        <!-- Navbar Toggle Icon-->
                        <li class="d-inline-block d-lg-none">
                            <button
                                class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 d-flex align-items-center"
                                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Toggle Icon-->

                        <!-- Navbar Search-->
                        <li class="ms-1 d-inline-block">
                            <button class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                                data-pr-search>
                                <i class="ri-search-2-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Search-->

                        <!-- Navbar Wishlist-->
                        {{-- <li class="ms-1 d-none d-lg-inline-block">
                            <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center"
                                href="#">
                                <i class="ri-heart-line ri-lg align-middle"></i>
                            </a>
                        </li> --}}
                        <!-- /Navbar Wishlist-->

                        <!-- Navbar Login-->
                        <li class="ms-1 d-lg-inline-block">
                            <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                                href="/login">
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
        </nav>
        <!-- / Navbar-->
    </div>
    <!-- / Navbar-->
