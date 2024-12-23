<section class="py-5" data-aos="fade-in">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-md-7" data-aos="fade-right">
                <div class="m-0">
                    <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Fresh Flowers, True Love
                    </p>
                    <h2 class="display-5 fw-bold mb-6">Trusted Online Flower Shop</h2>
                    <div class="px-8 position-relative">

                        <!-- Swiper-->
                        <div class="swiper-container swiper-linked-carousel-small">

                            <!-- Add Pagination -->
                            <div class="swiper-pagination-blocks mb-4">
                                <div class="swiper-pagination-custom"></div>
                            </div>

                            <div class="swiper-wrapper">
                                @foreach ([$tulipProduct, $roseProduct, $romanceProduct] as $product)
                                <!-- Swiper Slide-->
                                    <div class="swiper-slide overflow-hidden">
                                        <!-- Card-->
                                        <div class="card position-relative h-100 card-listing hover-trigger">
                                            <div class="card-header">
                                                <picture class="position-relative overflow-hidden d-block bg-light">
                                                    <img class="w-100 img-fluid position-relative z-index-10"
                                                        title="{{ $product->name }}"
                                                        src="{{ asset('storage/' . $product->main_picture) }}"
                                                        alt="{{ $product->name }}">
                                                </picture>
                                                <div class="card-actions">
                                                    <span
                                                        class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick
                                                        Add</span>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 text-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                    <!-- Review Stars Small-->
                                                    <div class="rating position-relative d-table">
                                                        <div class="position-absolute stars"
                                                            style="width: {{ $product->reviews->avg('rating') * 20 }}%">
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
                                                    <span class="small fw-bolder ms-2 text-muted">
                                                        ({{ $product->reviews->count() }})
                                                    </span>
                                                </div>
                                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                    href="{{ route('product1.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                <p class="fw-bolder m-0 mt-2">
                                                    Rp. {{ number_format($product->product_price, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <!--/ Card Product-->
                                    </div>
                                    <!-- / Swiper Slide-->
                                @endforeach
                            </div>
                        </div> <!-- /Swiper-->

                        <!-- Swiper Arrows -->
                        <div
                            class="swiper-prev-linked position-absolute top-50 start-0 mt-n8 cursor-pointer transition-all opacity-50-hover">
                            <i class="ri-arrow-left-s-line ri-2x"></i>
                        </div>
                        <div
                            class="swiper-next-linked position-absolute top-50 end-0 me-3 mt-n8 cursor-pointer transition-all opacity-50-hover">
                            <i class="ri-arrow-right-s-line ri-2x"></i>
                        </div>
                        <!-- / Swiper Arrows-->

                    </div>
                </div>
            </div>
            <div class="col-md-5 d-none d-md-flex" data-aos="fade-left">
                <div class="w-100 h-100">

                    <!-- Swiper-->
                    <div class="swiper-container h-100 swiper-linked-carousel-large">

                        <div class="swiper-wrapper h-100">
                            @foreach ([$tulipProduct4] as $product)
                                <!-- Swiper Slide-->
                                <div class="swiper-slide">
                                    <div class="row g-3">
                                        <div class="col-12 col-md-6">
                                            <!-- Card Product-->
                                            <div class="card position-relative h-100 card-listing hover-trigger">
                                                <div class="card-header">
                                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                                        <img class="w-100 img-fluid position-relative z-index-10"
                                                             title="{{ $product->name }}"
                                                             src="{{ asset('storage/' . $product->main_picture) }}"
                                                             alt="{{ $product->name }}">
                                                    </picture>

                                                    <div class="card-actions">
                                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 text-center">
                                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                        <!-- Review Stars Small-->
                                                        <div class="rating position-relative d-table">
                                                            <div class="position-absolute stars" style="width: {{ $product->reviews->avg('rating') * 20 }}%">
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
                                                        <span class="small fw-bolder ms-2 text-muted">
                                                            {{ $product->reviews->count() }} reviews
                                                        </span>
                                                    </div>
                                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                       href="{{ route('product1.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                    <p class="fw-bolder m-0 mt-2">
                                                        Rp. {{ number_format($product->product_price, 0, ',', '.') }}</p>
                                                </div>
                                            </div>
                                            <!--/ Card Product-->
                                        </div>
                                    </div>
                                </div>
                        @endforeach


                        </div>
                    </div> <!-- / Swiper-->

                </div>
            </div>
        </div>
    </div>
</section>
