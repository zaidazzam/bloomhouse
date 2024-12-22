<!-- Images Section-->
<div class="col-12 col-lg-7">
    <div class="row g-1">
        <div class="swiper-container gallery-thumbs-vertical col-2 pb-4">
            <div class="swiper-wrapper">
                <!-- Gambar tambahan produk -->
                @forelse ($product->pictures as $picture)
                    <div class="swiper-slide bg-light bg-light h-auto">
                        <picture>
                            <img class="img-fluid mx-auto d-table" src="{{ asset('storage/' . $picture->picture_path) }}"
                                alt="{{ $product->name }}">
                        </picture>
                    </div>
                @empty
                <img class="img-fluid mx-auto d-table"
                src="{{ asset('assets/images/logos/imagenotfound.png') }}"
                alt="images not found"
                style="border: 2px solid #808080;">

                 @endforelse
            </div>
        </div>
        <div class="swiper-container gallery-top-vertical col-10">
            <div class="swiper-wrapper">
                <!-- Gambar utama produk -->
                <div class="swiper-slide bg-white h-auto">
                    <picture>
                        <img class="img-fluid d-table mx-auto"
                             src="{{ asset('storage/' . $product->main_picture) }}" alt="{{ $product->name }}"
                             data-zoomable>
                    </picture>
                </div>
                <!-- Gambar tambahan produk yang muncul di galeri atas -->
                @forelse ($product->pictures as $picture)
                    <div class="swiper-slide bg-white h-auto">
                        <picture>
                            <img class="img-fluid d-table mx-auto"
                                 src="{{ asset('storage/' . $picture->picture_path) }}" alt="{{ $product->name }}"
                                 data-zoomable>
                        </picture>
                    </div>
                @empty
                    <p>No additional images available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- /Images Section-->
