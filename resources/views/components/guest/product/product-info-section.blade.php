<div class="col-12 col-lg-5">
    <div class="pb-3">
        <!-- Product Name, Review, Brand, Price-->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p class="small fw-bolder text-uppercase tracking-wider text-muted mb-0 lh-1">{{ $product->category->first()->name ?? 'No Category' }}</p>
            <div class="d-flex justify-content-start align-items-center">
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
                <small class="text-muted d-inline-block ms-2 fs-bolder">({{ $product->reviews->count() }})</small>
            </div>
        </div>
        <h1 class="mb-2 fs-2 fw-bold">{{ $product->name }}</h1>
        <div class="d-flex justify-content-start align-items-center">
            <p class="lead fw-bolder m-0 fs-3 lh-1 text-danger me-2">Rp.{{ number_format($product->product_price, 0, ',', '.') }}</p>
            <s class="lh-1 me-2"><span class="fw-bolder m-0">Rp.{{ number_format($product->discounted_price ?? $product->product_price, 0, ',', '.') }}</span></s>
            <p class="lead fw-bolder m-0 fs-6 lh-1 text-success">Save Rp {{ number_format($product->product_price - ($product->discounted_price ?? $product->product_price), 0, ',', '.') }}</p>
        </div>
        <!-- /Product Name, Review, Brand, Price-->

        <!-- Product Views-->
        <div class="d-flex justify-content-start mt-3">
            <div class="alert bg-light rounded py-1 px-2 d-table m-0">
                <div class="d-flex justify-content-start align-items-center">
                    <i class="ri-fire-fill lh-1 text-orange"></i>
                    <div class="ms-2">
                        <small class="opacity-75 fw-bolder lh-1">{{ $product->views ?? 0 }} Dilihat</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product Views-->

        <!-- Product Options-->
        <div class="border-top mt-4 mb-3">
            <div class="product-option">
                <small class="text-uppercase d-block fw-bolder mb-2">
                    Ukuran : <span class="selected-option fw-bold"></span>
                </small>
                <div class="form-group">
                    <select name="selectSize" class="form-control" data-choices>
                        <option value="">Pilih Ukuran</option>
                        <option value="Extra Small">XS</option>
                        <option value="Medium">M</option>
                        <option value="Large">L</option>
                        <option value="Extra Large">XL</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /Product Options-->

        <!-- Add To Cart-->
        <div class="d-flex justify-content-between mt-3">
            <button class="btn btn-blue flex-grow-1 me-2 text-white"><i class="ri-shopping-cart-line"></i> Masukkan
                Keranjang</button>
            <button class="btn btn-danger"><i class="ri-heart-line"></i></button>
        </div>
        <!-- /Add To Cart-->

        <!-- Socials-->
        <div class="my-4">
            <div class="d-flex justify-content-start align-items-center">
                <p class="fw-bolder lh-1 mb-0 me-3">Bagikan</p>
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

        <!-- Special Offers-->
        <div class="bg-light rounded py-2 px-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex border-0 px-0 bg-transparent">
                    <i class="ri-truck-line"></i>
                    <span class="fs-6 ms-3">Pengiriman standar gratis untuk pesanan di atas $99. Pengiriman keesokan
                        hari Rp.9.999.</span>
                </li>
            </ul>
        </div>
    </div>
</div>
