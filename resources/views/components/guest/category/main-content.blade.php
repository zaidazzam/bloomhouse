   <!-- Main Section-->
   <div class="container">

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
                                                       id="category-{{ $category->id }}"
                                                       data-category-id="{{ $category->id }}">
                                                   <label
                                                       class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                                                       for="category-{{ $category->id }}">
                                                       {{ $category->name }} <span
                                                           class="text-muted">({{ $category->products->count() }})</span>
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
                           <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
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
                           </div>
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
                   <div class="d-flex justify-content-start align-items-center flex-grow-1 mb-4 mb-md-0">
                       <small class="d-inline-block fw-bolder">Filtered by:</small>
                       <ul class="list-unstyled d-inline-block mb-0 ms-2" id="active-filters">
                           <!-- Active filters will be added here dynamically -->
                       </ul>
                       <span id="clear-all"
                           class="fw-bolder text-muted-hover text-decoration-underline ms-2 cursor-pointer small">Clear
                           All</span>
                   </div>
                   <div class="d-flex align-items-center flex-column flex-md-row">
                       <!-- Filter Trigger-->
                       <button
                           class="btn bg-light p-3 d-flex d-lg-none align-items-center fs-xs fw-bold text-uppercase w-100 mb-2 mb-md-0 w-md-auto"
                           type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
                           aria-controls="offcanvasFilters">
                           <i class="ri-equalizer-line me-2"></i> Filters
                       </button>
                       <!-- / Filter Trigger-->
                       <div class="dropdown ms-md-2 lh-1 p-3 bg-light w-100 mb-2 mb-md-0 w-md-auto">
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
                       </div>
                   </div>
               </div>


               <!-- Products-->
               <div class="row g-4 mb-5">
                   @foreach ($products->take(4) as $product)
                       <div class="col-12 col-sm-6 col-md-4 mb-4">
                           <!-- Card Product-->
                           <div class="card position-relative h-100 card-listing hover-trigger">
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
                                   <div class="card-actions">
                                       <span
                                           class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick
                                           Add</span>
                                   </div>
                               </div>
                               <div class="card-body px-0 text-center">
                                   <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                       <!-- Review Stars Small-->
                                       <div class="rating position-relative d-table">
                                           <div class="position-absolute stars"
                                               style="width: {{ $product->rating * 20 }}%">
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
                                   <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                       href="{{ route('product1.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                   <p class="fw-bolder m-0 mt-2">
                                       Rp.{{ number_format($product->product_price, 0, ',', '.') }}</p>
                                   </p>
                               </div>
                           </div>
                       </div>
                   @endforeach
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

                   <!--/ Card Product-->
                   @foreach ($products->reverse()->take(6) as $product)
                       <div class="col-12 col-sm-6 col-md-4 mb-4">
                           <!-- Card Product-->
                           <div class="card position-relative h-100 card-listing hover-trigger">
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
                                   <div class="card-actions">
                                       <span
                                           class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick
                                           Add</span>
                                   </div>
                               </div>
                               <div class="card-body px-0 text-center">
                                   <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                       <!-- Review Stars Small-->
                                       <div class="rating position-relative d-table">
                                           <div class="position-absolute stars"
                                               style="width: {{ $product->rating * 20 }}%">
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
                                   <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                       href="{{ route('product1.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                   <p class="fw-bolder m-0 mt-2">
                                       Rp.{{ number_format($product->product_price, 0, ',', '.') }}</p>
                                   </p>
                               </div>
                           </div>
                       </div>
                   @endforeach

               </div>
               <!-- / Products-->
               <!-- Pagination -->
               <nav class="border-top mt-5 pt-5 d-flex justify-content-between align-items-center"
                   aria-label="Category Pagination">
                   <ul class="pagination">
                       @if ($products->onFirstPage())
                           <li class="page-item disabled"><a class="page-link" href="#"><i
                                       class="ri-arrow-left-line align-bottom"></i> Prev</a></li>
                       @else
                           <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}"><i
                                       class="ri-arrow-left-line align-bottom"></i> Prev</a></li>
                       @endif
                   </ul>
                   <ul class="pagination">
                       @for ($i = 1; $i <= $products->lastPage(); $i++)
                           <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }} mx-1">
                               <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                           </li>
                       @endfor
                   </ul>
                   <ul class="pagination">
                       @if ($products->hasMorePages())
                           <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}">Next <i
                                       class="ri-arrow-right-line align-bottom"></i></a></li>
                       @else
                           <li class="page-item disabled"><a class="page-link" href="#">Next <i
                                       class="ri-arrow-right-line align-bottom"></i></a></li>
                       @endif
                   </ul>
               </nav> <!-- / Pagination-->

               <!-- Related Categories -->
               <div class="border-top mt-5 pt-5">
                   <p class="lead fw-bolder">Related Categories</p>
                   <div class="d-flex flex-wrap justify-content-start align-items-center">
                       @foreach ($categories->take(5) as $category)
                           <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                               href="{{ $category->link }}">
                               {{ $category->name }}
                           </a>
                       @endforeach
                   </div>
               </div>

               <!-- Related Categories-->

           </div>
           <!-- / Category Products-->

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
                                               id="category-{{ $category->id }}">
                                           <label
                                               class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                                               for="category-{{ $category->id }}">
                                               {{ $category->name }}
                                               <span class="text-muted">({{ $category->products->count() }})</span>
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
       document.addEventListener('DOMContentLoaded', function() {
           const activeFiltersList = document.getElementById('active-filters');
           const clearAllButton = document.getElementById('clear-all');

           // Add event listener to "Done" button for filtering
           document.getElementById('done-button').addEventListener('click', function(e) {
               e.preventDefault(); // Prevent default behavior

               // Get selected categories
               let selectedCategories = [];
               document.querySelectorAll('.category-checkbox:checked').forEach(function(checkbox) {
                   selectedCategories.push(checkbox.dataset.categoryId);
               });

               // Get price range
               let minPrice = document.getElementById('price-min').value || 0;
               let maxPrice = document.getElementById('price-max').value || 2000000;

               // Get search term
               let searchTerm = document.getElementById('search-input').value.toLowerCase();

               // Prepare the filter parameters
               let filterParams = {
                   categories: selectedCategories,
                   minPrice: minPrice,
                   maxPrice: maxPrice,
                   search: searchTerm
               };

               // Update active filters
               updateActiveFilters(filterParams);

               // Fetch the filtered products (AJAX request)
               fetch('/products/filter', {
                       method: 'GET',
                       headers: {
                           'Content-Type': 'application/json',
                       },
                       body: JSON.stringify(filterParams) // Send the filter parameters to the server
                   })
                   .then(response => response.json())
                   .then(data => {
                       if (data.success) {
                           let productList = document.getElementById('product-list');
                           productList.innerHTML = ''; // Clear current products

                           // Loop through and display filtered products
                           data.products.forEach(product => {
                               let productCard = `
                        <div class="col-12 col-sm-6 col-md-4 mb-4 product-card">
                            <div class="card position-relative h-100 card-listing hover-trigger">
                                <div class="card-header">
                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                        <img class="w-100 img-fluid position-relative z-index-10" title="${product.name}"
                                             src="${product.main_picture}" alt="${product.name}">
                                    </picture>
                                </div>
                                <div class="card-body px-0 text-center">
                                    <a href="/product1/show/${product.id}">${product.name}</a>
                                    <p class="fw-bolder m-0 mt-2">Rp.${product.product_price}</p>
                                </div>
                            </div>
                        </div>
                    `;
                               productList.innerHTML += productCard;
                           });
                       }
                   })
                   .catch(error => console.error('Error:', error));
           });

           // Function to update the active filters section
           function updateActiveFilters(filters) {
               activeFiltersList.innerHTML = ''; // Clear existing filters

               // Handle category filters
               if (filters.categories && filters.categories.length > 0) {
                   filters.categories.forEach(categoryId => {
                       let categoryLabel = document.querySelector(`label[for="category-${categoryId}"]`);
                       let filterItem = document.createElement('li');
                       filterItem.classList.add('bg-light', 'py-1', 'fw-bolder', 'px-2', 'cursor-pointer',
                           'd-inline-block', 'me-1', 'small');
                       filterItem.innerHTML =
                           `Type: ${categoryLabel.textContent.trim()} <i class="ri-close-circle-line align-bottom ms-1" data-filter="category-${categoryId}"></i>`;
                       activeFiltersList.appendChild(filterItem);
                   });
               }

               // Handle price filters
               if (filters.minPrice && filters.maxPrice) {
                   let priceFilter = document.createElement('li');
                   priceFilter.classList.add('bg-light', 'py-1', 'fw-bolder', 'px-2', 'cursor-pointer',
                       'd-inline-block', 'me-1', 'small');
                   priceFilter.innerHTML =
                       `Price: Rp.${filters.minPrice} - Rp.${filters.maxPrice} <i class="ri-close-circle-line align-bottom ms-1" data-filter="price"></i>`;
                   activeFiltersList.appendChild(priceFilter);
               }

               // Add event listeners to close icons
               document.querySelectorAll('.ri-close-circle-line').forEach(function(closeIcon) {
                   closeIcon.addEventListener('click', function() {
                       let filterType = this.dataset.filter;

                       // Remove the corresponding filter from the active filters list
                       if (filterType === 'category') {
                           // Remove the selected category filter
                           let checkbox = document.querySelector(
                               `#category-${filterType.split('-')[1]}`);
                           checkbox.checked = false;
                       } else if (filterType === 'price') {
                           // Reset price filter
                           document.getElementById('price-min').value = '';
                           document.getElementById('price-max').value = '';
                       }

                       // Re-trigger the "Done" button functionality to update products
                       document.getElementById('done-button').click();
                   });
               });
           }

           // Clear All Filters
           clearAllButton.addEventListener('click', function() {
               // Reset all inputs and remove all active filters
               document.querySelectorAll('.category-checkbox').forEach(function(checkbox) {
                   checkbox.checked = false;
               });
               document.getElementById('price-min').value = '';
               document.getElementById('price-max').value = '';
               document.getElementById('search-input').value = '';

               // Clear the active filters list
               activeFiltersList.innerHTML = '';

               // Re-trigger the "Done" button functionality to reset products
               document.getElementById('done-button').click();
           });
       });
   </script>
