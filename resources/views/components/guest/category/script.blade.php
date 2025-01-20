<script>
    const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
    const productListContainer = document.getElementById('product-list');
    const filter_category = document.querySelectorAll('.filter-options');

    categoryCheckboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            fetchProducts();
        });
    });


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
                renderProducts(data.products.data); // Tampilkan produk
                renderPagination(data.products.meta);
            })
            .catch((error) => console.error('Error fetching products:', error));
    }

    function renderProducts(products) {
        const productContainer = document.getElementById("product-container"); 
        productContainer.innerHTML = ""; 

        products.forEach(product => {
            const productCard = `
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card position-relative h-100 card-listing hover-trigger">
                        <div class="card-header">
                            <picture class="position-relative overflow-hidden d-block bg-light">
                                <img class="w-100 img-fluid position-relative z-index-10"
                                    title="${product.name}"
                                    src="/storage/${product.main_picture}"
                                    alt="${product.name}">
                            </picture>
                            <div class="card-actions">
                                <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">
                                    Quick Add
                                </span>
                            </div>
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
                            <a href="/product/${product.id}" class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center">
                                ${product.name}
                            </a>
                            <p class="fw-bolder m-0 mt-2">
                                Rp.${new Intl.NumberFormat('id-ID').format(product.product_price)}
                            </p>
                        </div>
                    </div>
                </div>
            `;
            productContainer.innerHTML += productCard; // Tambahkan produk ke dalam container
        });
    }

    function renderPagination(meta) {
        const paginationContainer = document.getElementById("pagination-container");
        paginationContainer.innerHTML = ""; // Bersihkan pagination sebelumnya

        // Tombol Prev
        if (meta.current_page > 1) {
            const prevButton = document.createElement("li");
            prevButton.className = "page-item";
            prevButton.innerHTML = `<a class="page-link" href="#" data-page="${meta.current_page - 1}">Prev</a>`;
            paginationContainer.appendChild(prevButton);
        }

        // Tombol halaman
        for (let i = 1; i <= meta.last_page; i++) {
            const pageButton = document.createElement("li");
            pageButton.className = `page-item ${meta.current_page === i ? 'active' : ''}`;
            pageButton.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
            paginationContainer.appendChild(pageButton);
        }

        // Tombol Next
        if (meta.current_page < meta.last_page) {
            const nextButton = document.createElement("li");
            nextButton.className = "page-item";
            nextButton.innerHTML = `<a class="page-link" href="#" data-page="${meta.current_page + 1}">Next</a>`;
            paginationContainer.appendChild(nextButton);
        }

        // Tambahkan event listener untuk pagination
        const links = paginationContainer.querySelectorAll(".page-link");
        links.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const page = this.getAttribute("data-page");
                fetchProducts(page); // Ambil produk berdasarkan halaman
            });
        });
    }

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(number);
    }

</script>