<div class="col-12 col-lg-5">
    <div class="pb-3">
        {{-- @dd($cart) --}}
        <!-- Product Name, Review, Brand, Price-->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p class="small fw-bolder text-uppercase tracking-wider text-muted mb-0 lh-1">
                @foreach ($product->category->take(8) as $category)
                    {{ $category->name }}{{ !$loop->last ? ' / ' : '' }}
                @endforeach
            </p>
            <div class="d-flex justify-content-start align-items-center">
                <!-- Review Stars Small-->
                <div class="rating position-relative d-table">
                    <div class="position-absolute stars" style="width: {{ $product->reviews->avg('rating') * 20 }}%">
                        {{-- <div class="position-absolute stars" style="width: {{ 3 * 20 }}%"> --}}
                        <i class="ri-star-fill text-dark mr-1"></i>
                        <i class="ri-star-fill text-dark mr-1"></i>
                        <i class="ri-star-fill text-dark mr-1"></i>
                        <i class="ri-star-fill text-dark mr-1"></i>
                        <i class="ri-star-fill text-dark mr-1"></i>
                    </div>
                    <div class="stars">
                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    </div>
                </div>
                <small class="text-muted d-inline-block ms-2 fs-bolder">({{ $product->reviews->count() }})</small>
                {{-- <small class="text-muted d-inline-block ms-2 fs-bolder">({{ 287 }})</small> --}}
            </div>
        </div>
        <h1 class="mb-2 fs-2 fw-bold">{{ $product->name }}</h1>
        <div class="d-flex justify-content-start align-items-center">
            <!-- Harga Total -->
            <p id="total-price" class="lead fw-bolder m-0 fs-3 lh-1 text-danger me-2">
                Rp.{{ number_format($product->discounted_price ?? $product->product_price, 0, ',', '.') }}
            </p>


            <!-- Harga Diskon -->
            @if ($product->discounted_price)
                <s class="lh-1 me-2">
                    <span class="fw-bolder m-0">Rp.{{ number_format($product->product_price, 0, ',', '.') }}</span>
                </s>
            @endif

            <!-- Penghematan -->
            @if ($product->discounted_price)
                <p class="lead fw-bolder m-0 fs-6 lh-1 text-success">
                    Save Rp {{ number_format($product->product_price - $product->discounted_price, 0, ',', '.') }}
                </p>
            @endif
        </div>

        <!-- /Product Name, Review, Brand, Price-->

        <!-- Product Views-->
        <div class="d-flex justify-content-start mt-3">
            <div class="alert bg-light rounded py-1 px-2 d-table m-0">
                <div class="d-flex justify-content-start align-items-center">
                    <i class="ri-fire-fill lh-1 text-orange"></i>
                    <div class="ms-2">
                        <small class="opacity-75 fw-bolder lh-1 views-count">{{ $product->views ?? 143 }}
                            Dilihat</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- /Product Views-->

        <!-- Add To Cart-->
        <div class="d-flex justify-content-between mt-3">
            <button data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-price="{{ $product->discounted_price ?? $product->product_price }}" token="{{ csrf_token() }}"  data-pict="{{ $product->main_picture }}" id="add-to-cart" class="btn btn-blue flex-grow-1 me-2 text-white"><i class="ri-shopping-cart-line"></i> Masukkan
                Keranjang</button>
            <button class="btn btn-danger"><i class="ri-heart-line"></i></button>
        </div>

        <!-- /Add To Cart-->

        <!-- Socials-->
        <div class="my-4">
            <div class="d-flex justify-content-start align-items-center">
                <p class="fw-bolder lh-1 mb-0 me-3">Share</p>
                <ul class="list-unstyled p-0 m-0 d-flex justify-content-start lh-1 align-items-center mt-1">
                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i
                                class="ri-facebook-box-fill"></i></a></li>
                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i
                                class="ri-instagram-fill"></i></a></li>
                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i
                                class="ri-pinterest-fill"></i></a></li>
                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i
                                class="ri-twitter-fill"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Socials-->
        <!-- add on Products-->
        <div class="container">
            <h5 class="fw-bold mb-2 text-center">Add On Gift
            </h5>
            <!--  add on Swiper Latest -->
            <div class="swiper-container overflow-visible" data-swiper
                data-options='{
                    "spaceBetween": 25,
                    "cssMode": true,
                    "roundLengths": true,
                    "scrollbar": {
                      "el": ".swiper-scrollbar",
                      "hide": false,
                      "draggable": true
                    },
                    "navigation": {
                      "nextEl": ".swiper-next",
                      "prevEl": ".swiper-prev"
                    },
                    "breakpoints": {
                      "576": {
                        "slidesPerView": 1
                      },
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      },
                      "1200": {
                        "slidesPerView": 4
                      }
                    }
                  }'>
                  <div class="swiper-wrapper pe-1">
                    @foreach ($productAddOns as $productAddon)
                        <div class="swiper-slide d-flex h-auto" >
                            <!-- Card Product -->
                            <div class="card-addon position-relative h-100 card-listing hover-trigger addon-card" data-id="{{ $productAddon->id }}"
                                data-price="{{ $productAddon->product_price }}">
                                <!-- Badge Diskon -->
                                @if ($productAddon->discount)
                                    <span class="badge card-badge bg-secondary">-{{ $productAddon->discount }}%</span>
                                @endif

                                <!-- Gambar Produk -->
                                <div class="card-header">
                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                        <img class="w-100 img-fluid position-relative z-index-10"
                                            title="{{ $productAddon->name }}"
                                            src="{{ asset('storage/' . $productAddon->main_picture) }}"
                                            alt="{{ $productAddon->name }}">
                                    </picture>
                                </div>

                                <!-- Konten Produk -->
                                <div class="card-body px-3 py-2 text-center">
                                    <!-- Nama Produk -->
                                    <p class="mb-1 link-cover text-decoration-none text-center">
                                        {{ $productAddon->name }}
                                    </p>

                                    <!-- Harga Produk -->
                                    <p class="fw-bolder m-0 p-addon">
                                        Rp.{{ number_format($productAddon->discounted_price ?? $productAddon->product_price, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                            <!-- /Card Product -->
                        </div>
                    @endforeach
                </div>



                <!-- Buttons-->
                <div
                    class="swiper-btn swiper-disabled-hide swiper-prev swiper-btn-side btn-icon bg-dark text-white ms-3 shadow-lg mt-n5 ms-n4">
                    <i class="ri-arrow-left-s-line ri-lg"></i>
                </div>
                <div
                    class="swiper-btn swiper-disabled-hide swiper-next swiper-btn-side swiper-btn-side-right btn-icon bg-dark text-white me-n4 shadow-lg mt-n5">
                    <i class="ri-arrow-right-s-line ri-lg"></i>
                </div>

                <!-- Add Scrollbar -->
                <div class="swiper-scrollbar"></div>

            </div>
            <!-- /add on Swiper Latest-->
        </div>
        <!--/ add on  Products-->
        <!-- Special Offers-->
        <div class="bg-light rounded py-2 px-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex border-0 px-0 bg-transparent">
                    <i class="ri-truck-line"></i>
                    <span class="fs-6 ms-3">Free standard shipping on orders over Rp.9,999 Next day shipping Rp.9,999
                    </span>
                </li>
            </ul>
        </div>

    </div>
</div>
<script>
   document.getElementById('add-to-cart').addEventListener('click', () => {
        const productId = document.getElementById('add-to-cart').getAttribute('data-id');
        const token = document.getElementById('add-to-cart').getAttribute('token');
        const productName = document.getElementById('add-to-cart').getAttribute('data-name');
        const productPrice = document.getElementById('add-to-cart').getAttribute('data-price');
        const productPict = document.getElementById('add-to-cart').getAttribute('data-pict');
        const size = document.querySelector('[name="selectSize"]').value;
        const selectedAddOns = Array.from(document.querySelectorAll('.addon-card.selected'))
            .map(card => card.getAttribute('data-id'));

        if (!size) {
            alert('Silakan pilih ukuran terlebih dahulu!');
            return;
        }

        console.log(productId,size,selectedAddOns);
        fetch("{{ route('cart.add') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                product_id: productId,
                product_name: productName,
                product_price: productPrice,
                product_pict: productPict,
                size: size,
                addons: selectedAddOns,
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

     document.querySelectorAll('.addon-card').forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('selected');
        });
    });
</script>
