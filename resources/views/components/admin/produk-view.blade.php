<!-- Bordered Table -->
<div class="card">
    <div class="d-flex justify-content-between w-100">

        <h5 class="card-header">List Product</h5>

        <div class="d-flex align-items-center">
            <!-- Input Search -->
            <div class="input-group input-group-merge me-3">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                    aria-describedby="basic-addon-search31" />
            </div>

            <!-- Add Product Button -->
            <button type="button" class="btn btn-primary btn-add-product table-dark1" data-bs-toggle="modal"
                data-bs-target="#productModal">Add Product</button>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark1">
                    <tr>
                        <th class="text-white">No.</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Category</th>
                        <th class="text-white">Description</th>
                        <th class="text-white">Stock</th>
                        <th class="text-white">Rating</th>
                        <th class="text-white">Address</th>
                        <th class="text-white">Price</th>
                        <th class="text-white">Discount</th>
                        <th class="text-white">Price After Discount</th>
                        <th class="text-white">Consist Of</th>
                        <th class="text-white">Photo</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>

                <tbody id="product-list">
                    <tr>
                        <td></td>
                        <td><strong>Product 1</strong></td>
                        <td>Electronics</td>
                        <td>This is a description of product 1.</td>
                        <td>150</td>
                        <td>Bintang 5</td>
                        <td>123 Main St, City</td>
                        <td>Rp. 150.000</td>
                        <td>12%</td>
                        <td>Rp. 120.000</td>
                        <td>Material A, Material B</td>
                        <td><img src="/assets/images/logos/Bloom-House-02.png" alt="Product Photo" class="rounded"
                                width="50" /></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>Product 2</strong></td>
                        <td>Apparel</td>
                        <td>This is a description of product 2.</td>
                        <td>200</td>
                        <td>Bintang 5</td>
                        <td>456 Another St, City</td>
                        <td>Rp. 150.000</td>
                        <td>12%</td>
                        <td>Rp. 120.000</td>
                        <td>Material C, Material D</td>
                        <td><img src="/assets/images/logos/Bloom-House-02.png" alt="Product Photo" class="rounded"
                                width="50" /></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>

            </table>
        </div>
    </div>
    <div class="demo-inline-spacing">
        <!-- Basic Pagination -->
        <nav aria-label="Page navigation" class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item first">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                </li>
                <li class="page-item prev">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">2</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0);">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">5</a>
                </li>
                <li class="page-item next">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                </li>
                <li class="page-item last">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                </li>
            </ul>
        </nav>
        <!--/ Basic Pagination -->
    </div>

</div>

<!-- Add Modal -->
<div class="modal fade" id="productModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalTitle">Add/Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productName" class="form-label">Name</label>
                        <input type="text" id="productName" class="form-control"
                            placeholder="Enter Product Name" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productCategory" class="form-label">Category</label>
                        <input type="text" id="productCategory" class="form-control"
                            placeholder="Enter Category" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productDescription" class="form-label">Description</label>
                        <textarea id="productDescription" class="form-control" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="productStock" class="form-label">Stock</label>
                        <input type="number" id="productStock" class="form-control" placeholder="Enter Stock" />
                    </div>
                    <div class="col-6">
                        <label for="productAddress" class="form-label">Address</label>
                        <input type="text" id="productAddress" class="form-control"
                            placeholder="Enter Address" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="number" id="productPrice" class="form-control" placeholder="Enter Price" />
                    </div>
                    <div class="col-6">
                        <label for="editPriceBeforeDisc" class="form-label">Discount</label>
                        <input type="number" id="editPriceBeforeDisc" class="form-control"
                            placeholder="Enter Discount Price" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productConsistOf" class="form-label">Consist Of</label>
                        <textarea id="productConsistOf" class="form-control" placeholder="Enter Materials"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productPhoto" class="form-label">Photo</label>
                        <input type="file" id="productPhoto" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="editProductForm">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalTitle">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductName" class="form-label">Name</label>
                        <input type="text" id="editProductName" class="form-control"
                            placeholder="Enter Product Name" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductCategory" class="form-label">Category</label>
                        <input type="text" id="editProductCategory" class="form-control"
                            placeholder="Enter Category" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductDescription" class="form-label">Description</label>
                        <textarea id="editProductDescription" class="form-control" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="editProductStock" class="form-label">Stock</label>
                        <input type="number" id="editProductStock" class="form-control"
                            placeholder="Enter Stock" />
                    </div>
                    <div class="col-6">
                        <label for="editProductAddress" class="form-label">Address</label>
                        <input type="text" id="editProductAddress" class="form-control"
                            placeholder="Enter Address" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="editProductPrice" class="form-label">Price</label>
                        <input type="number" id="editProductPrice" class="form-control"
                            placeholder="Enter Price" />
                    </div>
                    <div class="col-6">
                        <label for="editPriceBeforeDisc" class="form-label">Discount</label>
                        <input type="number" id="editPriceBeforeDisc" class="form-control"
                            placeholder="Enter Discount Price" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductConsistOf" class="form-label">Consist Of</label>
                        <textarea id="editProductConsistOf" class="form-control" placeholder="Enter Materials"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductPhoto" class="form-label">Photo</label>
                        <input type="file" id="editProductPhoto" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>
    </div>
</div>


<!--/ Bordered Table -->
<script>
    // JavaScript for adding automatic numbering to the "No." column
    const rows = document.querySelectorAll("#product-list tr");
    rows.forEach((row, index) => {
        const noCell = row.querySelector("td:first-child");
        noCell.textContent = index + 1; // Assign the row number (1-based index)
    });
</script>
