   <!-- Main Section-->
   <div class="container">
    <div class="w-md-50 mb-5">
        <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Gifts & Flower</p>
        <h2 class="display-5 fw-bold mb-3">Fresh Flowers, True Love
        </h2>
        <p class="lead">Trusted Online Flower Shop
        </p>
    </div>
       <div class="row">

           <!-- Category Aside/Sidebar -->
           <div class="d-none d-lg-flex col-lg-3">
               <div class="pe-4">
                   <!-- Category Aside -->
                   <aside>
                       <!-- Filter Category -->
                       <div class="py-4 widget-filter border-top">
                           <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                               data-bs-toggle="collapse" href="#filter-flowers" role="button" aria-expanded="true"
                               aria-controls="filter-flowers">
                               Categories Flower
                           </a>
                           <div id="filter-flowers" class="collapse show">
                               <div class="input-group my-3 py-1 d-flex">
                                   <input type="text" class="form-control py-2 filter-search rounded"
                                       id="search-input" placeholder="Search" aria-label="Search">
                                   <div class="border-top">
                                       <button class="btn btn-dark hover-lift-sm hover-boxshadow" id="search-button">
                                           <i class="ri-search-2-line text-muted"></i>
                                       </button>
                                   </div>
                               </div>
                               <div class="simplebar-wrapper">
                                   <div class="filter-options" data-pixr-simplebar>
                                       @foreach ($categories as $category)
                                           @if ($category)
                                               <!-- Ensure category exists -->
                                               <div class="form-group form-check mb-0">
                                                   <input type="checkbox" class="form-check-input category-checkbox"
                                                       id="category-{{ $category->category_id }}"
                                                       data-category-id="{{ $category->category_id }}">
                                                   <label
                                                       class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                                                       for="category-{{ $category->category_id }}">
                                                       {{ $category->category_name }} <span
                                                           class="text-muted">({{ $category->product_count }})</span>
                                                   </label>
                                               </div>
                                           @endif
                                       @endforeach
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Price Filter -->
                       <div class="py-4 widget-filter widget-filter-price border-top">
                           {{-- <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                            data-bs-toggle="collapse" href="#filter-price" role="button" aria-expanded="true"
                            aria-controls="filter-price">
                            Harga
                        </a>
                        <div id="filter-price" class="collapse show">
                            <div class="filter-price mt-6"></div>
                            <div class="d-flex justify-content-between align-items-center mt-7">
                                <div class="input-group mb-0 me-2 border">
                                    <span
                                        class="input-group-text bg-transparent fs-7 p-1 text-muted border-0">Rp</span>
                                    <input type="number" min="50000" max="2000000" step="1000"
                                        class="filter-min form-control-sm border flex-grow-1 text-muted border-0"
                                        id="price-min">
                                </div>
                                <div class="input-group mb-0 ms-2 border">
                                    <span
                                        class="input-group-text bg-transparent fs-7 p-1 text-muted border-0">Rp</span>
                                    <input type="number" min="50000" max="2000000" step="100"
                                        class="filter-max form-control-sm flex-grow-1 text-muted border-0"
                                        id="price-max">
                                </div>
                            </div>
                        </div> --}}
                       </div>
                       <!-- / Price Filter -->
                   </aside>
                   <!-- / Category Aside-->
               </div>
           </div>
           <!-- / Category Aside/Sidebar -->

           <!-- Category Products-->
           <div class="col-12 col-lg-9">

               <!-- Top Toolbar-->
               <div class="mb-4 d-md-flex justify-content-between align-items-center">
                   {{-- <div class="d-flex justify-content-start align-items-center flex-grow-1 mb-4 mb-md-0">
                    <small class="d-inline-block fw-bolder">Filtered by:</small>
                    <ul class="list-unstyled d-inline-block mb-0 ms-2" id="active-filters">
                        <!-- Active filters will be added here dynamically -->
                    </ul>
                    <span id="clear-all"
                        class="fw-bolder text-muted-hover text-decoration-underline ms-2 cursor-pointer small">Clear
                        All</span>
                </div> --}}
                   <div class="d-flex align-items-center flex-column flex-md-row">
                       <!-- Filter Trigger-->
                       <button
                           class="btn bg-light p-3 d-flex d-lg-none align-items-center fs-xs fw-bold text-uppercase w-100 mb-2 mb-md-0 w-md-auto"
                           type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
                           aria-controls="offcanvasFilters">
                           <i class="ri-equalizer-line me-2"></i> Filters
                       </button>
                       <!-- / Filter Trigger-->
                       {{-- <div class="dropdown ms-md-2 lh-1 p-3 bg-light w-100 mb-2 mb-md-0 w-md-auto">
                           <p class="fs-xs fw-bold text-uppercase text-muted-hover p-0 m-0" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">Sort By <i
                                   class="ri-arrow-drop-down-line ri-lg align-bottom"></i></p>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                       href="#">Price: Hi Low</a></li>
                               <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                       href="#">Price: Low Hi</a></li>
                               <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                       href="#">Name</a></li>
                           </ul>
                       </div> --}}
                   </div>
               </div>


               <!-- Products-->
               <div class="row g-4 mb-5" id="product-container">
                   <div class="d-none d-md-flex col-md-8">
                       <div class="w-100 h-100 position-relative">
                           <div class="position-absolute w-50 h-100 start-0 bottom-0 top-0 bg-pos-center-center bg-img-cover"
                               style="background-image: url(./assets/images/products/bunga2.jpg);">
                           </div>
                           <div
                               class="position-absolute w-50 h-100 bg-light end-0 top-0 bottom-0 d-flex justify-content-center align-items-center">
                               <div class="px-4 text-center">
                                   <h4 class="fs-4 fw-bold mb-4">Flowers</h4>
                                   <p class="mb-4">Each flower has a special meaning, making the perfect gift for
                                       many special occasions.</p>
                                   <a href="#" class="text-link-border border-2 pb-1 fw-bolder">Shop Now</a>
                               </div>
                           </div>
                       </div>
                   </div>


               </div>
               <!-- / Products-->
               <!-- Pagination -->
               <nav class="border-top mt-5 pt-5 d-flex justify-content-center align-items-center"
                   aria-label="Category Pagination" id="pagination-container">
                   <div class="text-center px-5" data-current-page=""  data-last-page="" id="loadmore-container">
                    <button href="" class="btn btn-primary new py-3 px-3">Load more </button>
                </div>
               </nav> 
           </div>
       </div>
   </div>

   <!-- / Main Section-->
   <!-- Filters Offcanvas-->
   <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasFilters">
       <div class="offcanvas-header d-flex align-items-center">
           <h5 class="offcanvas-title" id="offcanvasFiltersLabel">Category Filters</h5>
           <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
               aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
           <div class="d-flex flex-column justify-content-between w-100 h-100">

               <!-- Filters-->
               <div>
                   <!-- Brands Filter -->
                   <div class="py-4 widget-filter border-top">
                       <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                           data-bs-toggle="collapse" href="#filter-modal-brands" role="button"
                           aria-expanded="false" aria-controls="filter-modal-brands">
                           Categories Flower
                       </a>
                       <div id="filter-modal-brands" class="collapse">
                           <div class="input-group my-3 py-1">
                               <input type="text" class="form-control py-2 filter-search rounded"
                                   placeholder="Search" aria-label="Search">
                               <span
                                   class="input-group-text bg-transparent p-2 position-absolute top-2 end-0 border-0 z-index-20"><i
                                       class="ri-search-2-line text-muted"></i></span>
                           </div>
                           <div class="simplebar-wrapper">
                               <div class="filter-options" data-pixr-simplebar>
                                   @foreach ($categories as $category)
                                       <div class="form-group form-check mb-0">
                                           <input type="checkbox" class="form-check-input"
                                               id="category-{{ $category->category_id }}">
                                           <label
                                               class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                                               for="category-{{ $category->category_id }}">
                                               {{ $category->category_name }}
                                               <span class="text-muted">({{ $category->product_count }})</span>
                                           </label>
                                       </div>
                                   @endforeach
                               </div>
                           </div>


                       </div>
                   </div>
                   <!-- / Brands Filter -->
                   <!-- Price Filter -->
                   <div class="py-4 widget-filter widget-filter-price border-top">
                       <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                           data-bs-toggle="collapse" href="#filter-modal-price" role="button" aria-expanded="false"
                           aria-controls="filter-modal-price">
                           Price
                       </a>
                       <div id="filter-modal-price" class="collapse">
                           <div class="filter-price mt-6"></div>
                           <div class="d-flex justify-content-between align-items-center mt-7">
                               <div class="input-group mb-0 me-2 border">
                                   <span class="input-group-text bg-transparent fs-7 p-1 text-muted border-0">Rp</span>
                                   <input type="number" min="50000" max="2000000" step="1000"
                                       class="filter-min form-control-sm border flex-grow-1 text-muted border-0">

                               </div>
                               <div class="input-group mb-0 ms-2 border">
                                   <span class="input-group-text bg-transparent fs-7 p-1 text-muted border-0">Rp</span>
                                   <input type="number" min="50000" max="2000000" step="1000"
                                       class="filter-max form-control-sm border flex-grow-1 text-muted border-0">
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- / Price Filter -->
               </div>
               <!-- / Filters-->

               <!-- Filter Button-->
               <div class="border-top pt-3">
                   <a href="#" class="btn btn-dark mt-2 d-block hover-lift-sm hover-boxshadow">Done</a>
               </div>
               <!-- /Filter Button-->
           </div>
       </div>
   </div>
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
</script>