<style>
    /* Efek animasi klik pada tombol */
    .btn:active {
        transform: scale(0.95);
        transition: transform 0.2s ease-in-out;
    }

    /* Efek ketika tombol diklik, memberi perubahan warna */
    .btn-clicked {
        background-color: #28a745 !important;
        /* Ganti dengan warna pilihan */
        transition: background-color 0.3s ease-in-out;
    }

    /* Transisi saat hover */
    .btn:hover {
        background-color: #007bff;
        transition: background-color 0.3s ease-in-out;
    }

    .swiper-slide-active {
        width: 174px;
        margin-right: 10px;
    }

    @media (max-width: 576px) {
        .swiper-container2 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .swiper-wrapper2 {
            display: flex;
            flex-wrap: wrap;
            gap: 70px;
        }

        flex: 0 0 calc(50% - 10px);
        /* 2 kolom */
        max-width: calc(50% - 10px);

        .swiper-slide2 {
            width: 120px;
            margin-right: 10px;
        }

        .btn-sm {
            padding: 2px 2px !important;
        }
        .btn-group-sm > .btn, .btn-sm {
    padding: 2px ;
    /* font-size: 0.875rem; */
    border-radius: 0;
}
    }
</style>
<section class="mb-9 mt-5" data-aos="fade-up">
    <div class="container">
        <div class="w-md-50 mb-5">
            <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Gifts & Flower</p>
            <h2 class="display-5 fw-bold mb-3">Populer This Week</h2>
            <p class="lead">Explore our curated collection of gift boxes at Flower Chimp, designed to make every
                occasion special.</p>
        </div>
        <!-- Swiper Latest -->
        <div class="swiper-container swiper-container2 overflow-visible" data-swiper
            data-options='{
                    "spaceBetween": 10,
                    "cssMode": false,
                    "roundLengths": false,
                    "scrollbar": {
                      "el": ".swiper-scrollbar",
                      "hide": false,
                      "draggable": false
                    },
                    "navigation": {
                      "nextEl": ".swiper-next",
                      "prevEl": ".swiper-prev"
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 3
                        },
                                            "375": {
                            "slidesPerView": 3
                        },
                        "350": {
                            "slidesPerView": 3
                        },
                      "576": {
                        "slidesPerView": 4
                      },
                      "768": {
                        "slidesPerView": 4
                      },
                      "992": {
                        "slidesPerView": 4
                      },
                      "1200": {
                        "slidesPerView": 4
                      }
                    }
                  }'>
            <div class="swiper-wrapper swiper-wrapper2 pb-5 pe-1">
                @foreach ($products->take(4) as $product)
                    <div class="swiper-slide swiper-slide2 d-flex h-auto swiper-slide-active">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            @if ($product->discount)
                                <span class="badge card-badge bg-secondary">-{{ $product->discount }}%</span>
                            @endif

                            <div class="card-header">
                                <a class="mb-0 mx-2 mx-md-4 fs-p text-decoration-none d-block text-center"
                                    href="{{ route('product1.show', ['id' => $product->id]) }}">
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
                                </a>
                            </div>

                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">

                                        <div class="position-absolute stars" style="width: 100%">
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
                                    <span class="small fw-bolder ms-2 text-muted">
                                        ({{ $product->reviews->count() }})</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p text-decoration-none d-block text-center"
                                    href="{{ route('product1.show', ['id' => $product->id]) }}">{{ $product->name }}</a>

                                <p class="fw-bolder m-0 mt-2">
                                    Rp.{{ number_format($product->product_price, 0, ',', '.') }}</p>
                            </div>
                            <div class="card-footer justify-content-center mt-3">
                                <button
                                    class="btn btn-primary btn-sm fw-bold w-100 text-white quick-cart-btn quick-populer"
                                    id="quick-cart-{{ $product->id }}" data-id="{{ $product->id }}"
                                    data-name="{{ $product->name }}"
                                    data-price="{{ $product->discounted_price ?? $product->product_price }}"
                                    data-token="{{ csrf_token() }}" data-picture="{{ $product->main_picture }}">
                                    </i> Quick Add!
                                </button>
                                <button data-id="{{ $product->id }}" data-name="{{ $product->name }}"
                                    data-price="{{ $product->discounted_price ?? $product->product_price }}"
                                    data-token="{{ csrf_token() }}" data-picture="{{ $product->main_picture }}"
                                    id="paynow-{{ $product->id }}"
                                    class="btn btn-danger btn-sm paynow-btn fw-bold w-100 mt-2">
                                    <i class='bx bxs-cart-download'></i> Buy Now!
                                </button>
                            </div>
                        </div>

                        <!--/ Card Product-->
                    </div>
                @endforeach

                <!-- See All Button -->
            </div>


        </div>
        <!-- / Swiper Latest-->
    </div>
</section>
<script>
    // Tangkap tombol 'Masukkan Keranjang' dan beri efek saat diklik
    // document.querySelectorAll('.btn').forEach(button => {
    //     button.addEventListener('click', function() {
    //         // Menambahkan efek klik pada tombol
    //         this.classList.add('btn-clicked');

    //         // Menghapus kelas 'btn-clicked' setelah 1 detik
    //         setTimeout(() => {
    //             this.classList.remove('btn-clicked');
    //         }, 1000);  // Durasi efek 1 detik

    //         // Jika ingin tombol "Masukkan Keranjang" mengarah ke halaman atau melakukan aksi lain
    //         if (this.id === 'add-to-cart') {
    //             // Ambil data yang diperlukan untuk keranjang
    //             let productId = this.getAttribute('data-id');
    //             let productName = this.getAttribute('data-name');
    //             let productPrice = this.getAttribute('data-price');
    //             let productPicture = this.getAttribute('data-pict');
    //             let csrfToken = this.getAttribute('token');

    //             // Kirim permintaan AJAX untuk menambah produk ke keranjang atau lakukan aksi lain
    //             fetch('/add-to-cart', {
    //                 method: 'POST',
    //                 headers: {
    //                     'Content-Type': 'application/json',
    //                     'X-CSRF-TOKEN': csrfToken
    //                 },
    //                 body: JSON.stringify({
    //                     id: productId,
    //                     name: productName,
    //                     price: productPrice,
    //                     picture: productPicture
    //                 })
    //             })
    //             .then(response => response.json())
    //             .then(data => {
    //                 // Berikan feedback atau animasi lainnya jika berhasil
    //                 console.log('Produk berhasil dimasukkan ke keranjang');
    //                 // Kamu bisa mengarahkan pengguna ke halaman keranjang atau memperbarui tampilan keranjang
    //             })
    //             .catch(error => {
    //                 console.error('Ada kesalahan saat menambah produk ke keranjang', error);
    //             });
    //         }

    //         // Tambahkan sedikit delay sebelum berpindah halaman
    //     });
    // });
    // document.getElementById('paynow').addEventListener('click', () => {
    //     const productId = document.getElementById('paynow').getAttribute('data-id');
    //     const token = document.getElementById('paynow').getAttribute('token');
    //     const productName = document.getElementById('paynow').getAttribute('data-name');
    //     const productPrice = document.getElementById('paynow').getAttribute('data-price');
    //     const productPict = document.getElementById('paynow').getAttribute('data-pict');
    //     const selectedAddOns = Array.from(document.querySelectorAll('.addon-card.selected'))
    //         .map(card => card.getAttribute('data-id'));
    //     fetch("{{ route('cart.add') }}", {
    //             method: 'POST',
    //             headers: {
    //                 'X-CSRF-TOKEN': token,
    //                 'Content-Type': 'application/json',
    //             },
    //             body: JSON.stringify({
    //                 product_id: productId,
    //                 product_name: productName,
    //                 product_price: productPrice,
    //                 product_pict: productPict,
    //                 addons: selectedAddOns,
    //             }),
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             if (data.success) {
    //                 window.location.href = "{{ url('checkout') }}";
    //             } else {
    //                 alert('Failed to add to cart: ' + data.message);
    //             }
    //         });
    // });
</script>
