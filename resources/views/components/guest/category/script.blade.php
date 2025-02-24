<script>
    // save scroll position
    // get dom content loaded
    window.addEventListener('DOMContentLoaded', (event) => {
        window.scrollTo(0, sessionStorage.getItem("scroll")); +
        fetchProductsCategories();
    });

    window.onscroll = function() {
        sessionStorage.setItem("scroll", window.scrollY);
    }

    // set scroll position without smooth
    window.onload = function() {
        window.scrollTo(0, sessionStorage.getItem("scroll"));
    }

    const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
    const productListContainer = document.getElementById('product-list');
    const filter_category = document.querySelectorAll('.filter-options');
    const productContainer = document.getElementById("product-container");
    const loadmoreContainer = document.getElementById('loadmore-container');
    // const current_page = loadmoreContainer.getAttribute('data-current-page');
    // const last_page = loadmoreContainer.getAttribute('data-last-page');
    let current = 1;
    let lastPage = 1;

    // const paginationContainer = document.getElementById("pagination-container");

    categoryCheckboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            fetchProductsCategories();
        });
    });

    let selectedCategories = []; // Array to store selected category IDs

    // Function to handle checkbox changes
    document.addEventListener('change', (event) => {
        if (event.target.classList.contains('category-checkbox')) {
            const categoryId = parseInt(event.target.dataset.categoryId, 10);

            if (event.target.checked) {
                // Add to selectedCategories if checked
                if (!selectedCategories.includes(categoryId)) {
                    selectedCategories.push(categoryId);
                }
            } else {
                // Remove from selectedCategories if unchecked
                selectedCategories = selectedCategories.filter(id => id !== categoryId);
            }
        }
    });

    // Function to update checkboxes after fetching
    const updateCheckboxes = () => {
        document.querySelectorAll('.category-checkbox').forEach(checkbox => {
            const categoryId = parseInt(checkbox.dataset.categoryId, 10);
            checkbox.checked = selectedCategories.includes(categoryId); // Check if the category is selected
        });
    };

    updateCheckboxes();

    // Function to fetch products
    const fetchProductsCategories = (page = 1, loadmore=false) => {

        const selectedCategories = Array.from(categoryCheckboxes)
            .filter((checkbox) => checkbox.checked)
            .map((checkbox) => checkbox.dataset.categoryId);

        
        const params = new URLSearchParams({
            page: page,
            categories: selectedCategories.join(
                ","), // Pass selected categories as a comma-separated string
        });
        fetch(`/category-filtered?${params.toString()}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                return response.json();
            })
            .then(response => {
                // Render pagination
                renderProducts(response.products.data, loadmore, response.products.current_page, response.products.last_page);
                // console.log(response.products.data);
                loadmoreContainer.setAttribute('data-current-page', response.products.current_page);
                loadmoreContainer.setAttribute('data-last-page', response.products.last_page);
                // renderPagination(response.products);
                // // Replace with logic to update product display
                updateCheckboxes(); // Ensure checkboxes are updated
            })
            .catch(error => console.error(error));
    };


    function fetchProducts() {
        const selectedCategories = Array.from(categoryCheckboxes)
            .filter((checkbox) => checkbox.checked)
            .map((checkbox) => checkbox.dataset.categoryId);

        fetch("{{ route('filterProduct') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    categories: selectedCategories,
                }),
            })
            .then((response) => response.json())
            .then((data) => {
                renderProducts(data.products.data, false); // Tampilkan produk
                // renderPagination(data.products);
            })
            .catch((error) => console.error('Error fetching products:', error));
    }

    function renderProducts(products, loadmore, current_page, last_page) {

        if (loadmore == false) {
            productContainer.innerHTML = "";
        }
        products.forEach(product => {
            const productCard = `
    <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="card position-relative h-100 card-listing hover-trigger">
            <div class="card-header">                            
                <a href="/product/${product.id}" class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center">
                    <picture class="position-relative overflow-hidden d-block bg-light">
                        <img class="w-100 img-fluid position-relative z-index-10"
                            title="${product.name}"
                            src="${product.main_picture ? '/storage/' + product.main_picture : ''}"
                            alt="${product.name}">
                    </picture>
                    <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                        ${product.pictures && product.pictures[0] ? 
                            `<img class="w-100 img-fluid" title="${product.name}" src="/storage/${product.pictures[0].picture_path}" alt="${product.name}">` :
                            `<img class="w-100 img-fluid" title="${product.name}" src="/storage/${product.main_picture}" alt="${product.name}">`}
                    </picture>
                </a>
            </div>
            <div class="card-body px-0 text-center">
                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                    <!-- Rating -->
                    <div class="rating position-relative d-table">
                        <div class="position-absolute stars" style="width: ${product.rating * 20}%;">
                            ${'<i class="ri-star-fill text-dark mr-1"></i>'.repeat(5)}
                        </div>
                        <div class="stars">
                            ${'<i class="ri-star-fill mr-1 text-muted opacity-25"></i>'.repeat(5)}
                        </div>
                    </div>
                    <span class="small fw-bolder ms-2 text-muted">
                        (${product.reviews_count || 0})
                    </span>
                </div>
                <a href="/product/${product.id}" class="mb-0 mx-2 mx-md-4 fs-p text-decoration-none d-block text-center">
                    ${product.name}
                </a>
                <p class="fw-bolder m-0 mt-2">
                    Rp.${new Intl.NumberFormat('id-ID').format(product.product_price)}
                </p>
            </div>
<div class="card-footer justify-content-center mt-3">
                                <button class="btn btn-primary btn-sm fw-bold w-100 text-white quick-cart-btn"
                    id="quick-cart-${product.id}" data-id="${product.id}"
                    data-name="${product.name}"
                    data-price="${product.discounted_price || product.product_price}"
                    data-token="${document.querySelector("meta[name='csrf_token']").getAttribute("content")}" data-picture="${product.main_picture}">
                    Quick Add!
                </button>
    <button class="btn btn-danger btn-sm fw-bold w-100 mt-2 paynow-btn"
        id="paynow-${product.id}" data-id="${product.id}"
        data-name="${product.name}"
        data-price="${product.discounted_price || product.product_price}"
        data-token="${document.querySelector("meta[name='csrf_token']").getAttribute("content")}" 
        data-picture="${product.main_picture}">
        <i class='bx bxs-cart-download'></i> Buy Now!
    </button>
            </div>
        </div>
    </div>
`;

            productContainer.innerHTML += productCard; // Tambahkan produk ke dalam container
        });
        // const current_page = loadmoreContainer.getAttribute('data-current-page');
        // const last_page = loadmoreContainer.getAttribute('data-last-page');
        console.log(current_page);
        console.log(last_page);
        if ((parseInt(current_page)) <= (parseInt(last_page))) {
            loadmoreContainer.style.display = 'block';
        } else {
            loadmoreContainer.style.display = 'none';
        }

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
        
        document.querySelectorAll('.paynow-btn').forEach(button => {
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
                        window.location.href = "{{ route('checkout') }}";
                    } else {
                        alert('Failed to add to cart: ' + data.message);
                    }
                });
            });
        });

    }


    // function renderPagination(meta) {
    //     paginationContainer.innerHTML = ""; // Bersihkan pagination sebelumnya

    //     current = meta.current_page;
    //     lastPage = meta.last_page;
    //     // Tombol Prev
    //     // if (meta.current_page > 1) {
    //     //     const prevButton = document.createElement("ul");
    //     //     prevButton.className = "page-item";
    //     //     prevButton.innerHTML = `<a class="page-link" href="#" data-page="${meta.current_page - 1}">Prev</a>`;
    //     //     paginationContainer.appendChild(prevButton);
    //     // }

    //     // Tombol halaman
    //     const link = meta.links;
    //     for (let i = 0; i < meta.links.length; i++) {
    //         const pageButton = document.createElement("ul");
    //         pageButton.className = `page-item ${link[i].active ? 'active' : ''}`;
    //         pageButton.innerHTML =
    //             `<a class="page-link" data-current="${meta.current_page}" data-last="${meta.last_page}" data-page="${i}">${link[i].label}</a>`;
    //         paginationContainer.appendChild(pageButton);
    //     }

    //     // Tombol Next
    //     // if (meta.current_page < meta.last_page) {
    //     //     const nextButton = document.createElement("ul");
    //     //     nextButton.className = "page-item";
    //     //     nextButton.innerHTML = `<a class="page-link" href="#" data-page="${meta.current_page + 1}">Next</a>`;
    //     //     paginationContainer.appendChild(nextButton);
    //     // }

    //     // Tambahkan event listener untuk pagination
    //     const links = paginationContainer.querySelectorAll(".page-link");
    //     links.forEach(link => {
    //         link.addEventListener("click", function(e) {
    //             e.preventDefault();
    //             let page = this.getAttribute("data-page");


    //             if (page == 0 && current > 1) {
    //                 if (current != 1) {
    //                     fetchProductsCategories(current - 1);
    //                 }
    //             } else if (page == (lastPage + 1) && current < lastPage) {
    //                 if (current != lastPage) {
    //                     fetchProductsCategories(current + 1);
    //                 }
    //             } else if (page > 0 && page <= lastPage) {
    //                 fetchProductsCategories(page);
    //             }
    //         });
    //     });
    // }

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(number);
    }



    loadmoreContainer.addEventListener('click', function() {
        const current_page = this.getAttribute('data-current-page');
        const last_page = this.getAttribute('data-last-page');
        fetchProductsCategories(parseInt(current_page) + 1, true);
    });
</script>
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