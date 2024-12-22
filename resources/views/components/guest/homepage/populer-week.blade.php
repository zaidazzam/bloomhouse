<section class="mb-9 mt-5" data-aos="fade-up">
    <div class="container">
        <div class="w-md-50 mb-5">
            <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Gifts & Flower</p>
            <h2 class="display-5 fw-bold mb-3">Populer This Week</h2>
            <p class="lead">Explore our curated collection of gift boxes at Flower Chimp, designed to make every
                occasion special.</p>
        </div>
        <!-- Swiper Latest -->
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
            <div class="swiper-wrapper pb-5 pe-1">
                @foreach ($products as $product)
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            @if ($product->discount)
                                <span class="badge card-badge bg-secondary">-{{ $product->discount }}%</span>
                            @endif

                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10"
                                        title="{{ $product->name }}"
                                        src="{{ asset('storage/' . $product->main_picture) }}"
                                        alt="{{ $product->name }}">
                                </picture>
                                <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                    @if ($product->pictures->first())
                                        <img class="w-100 img-fluid" title="{{ $product->name }}"
                                            src="{{ asset('storage/' . $product->pictures->first()->picture_path) }}"
                                            alt="{{ $product->name }}">
                                    @else
                                        <img class="w-100 img-fluid" title="{{ $product->name }}"
                                            src="{{ asset('storage/' . $product->main_picture) }}"
                                            alt="{{ $product->name }}">
                                    @endif
                                </picture>

                                {{-- <div class="card-actions">
                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                        </div>
                                    </div> --}}
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        {{-- <div class="position-absolute stars" style="width: {{ $product->product_rating * 20 }}%"> --}}
                                        <div class="position-absolute stars"
                                            style="width: {{ 4* 20 }}%">

                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                            @endfor
                                        </div>
                                        <div class="stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    {{-- <span class="small fw-bolder ms-2 text-muted"> {{ $product->product_rating }}
                                        ({{ $product->product_reviews }})</span> --}}
                                    <span class="small fw-bolder ms-2 text-muted">
                                        (178)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                href="{{ route('product1.show', ['id' => $product->id]) }}">{{ $product->name }}</a>

                                <p class="fw-bolder m-0 mt-2">
                                    Rp.{{ number_format($product->product_price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                @endforeach

                <!-- See All Button -->
                <div class="swiper-slide d-flex h-auto justify-content-center align-items-center">
                    <a href="{{ route('category') }}"
                        class="d-flex text-decoration-none flex-column justify-content-center align-items-center">
                        <span class="btn btn-dark btn-icon mb-3"><i class="ri-arrow-right-line ri-lg lh-1"></i></span>
                        <span class="lead fw-bolder">See All</span>
                    </a>
                </div>
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
        <!-- / Swiper Latest-->
    </div>
</section>
