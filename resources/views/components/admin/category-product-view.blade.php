<!-- Bordered Table -->
<div class="card">
    <div class="d-flex justify-content-between w-100">

        <h5 class="card-header">Category Product</h5>

        <div class="d-flex align-items-center">
            <!-- Input Search -->
            <div class="input-group input-group-merge me-3">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                    aria-describedby="basic-addon-search31" />
            </div>

            <!-- Add Product Button -->
            <button type="button" class="btn btn-primary btn-add-product table-dark1" data-bs-toggle="modal"
                data-bs-target="#addCategoryModal">Add Category</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table text-nowrap">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="table-dark1">
                    <tr>
                        <th class="text-white">No.</th>
                        <th class="text-white">Category</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>

                <tbody id="product-list">
                    <tr>
                        <td></td>
                        <td>Category 1</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#editCategoryModal"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Category 2</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item edit-category-btn" href="javascript:void(0);"
                                        data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <a class="dropdown-item delete-category-btn" href="javascript:void(0);">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </a>
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


<!-- Modal Add Category -->
<div class="modal fade" id="addCategoryModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="addCategoryForm">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalTitle">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" id="categoryName" class="form-control"
                            placeholder="Enter Category Name" required />
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


<!-- Modal Edit Category -->
<div class="modal fade" id="editCategoryModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="editCategoryForm">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalTitle">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="editCategoryName" class="form-label">Category Name</label>
                        <input type="text" id="editCategoryName" class="form-control"
                            placeholder="Enter Category Name" required />
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
