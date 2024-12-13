<!-- Bordered Table -->
<div class="card">
    <div class="d-flex justify-content-between w-100">

        <h5 class="card-header">Blog SEO</h5>

        <div class="d-flex align-items-center">
            <!-- Input Search -->
            <div class="input-group input-group-merge me-3">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                    aria-describedby="basic-addon-search31" />
            </div>

            <!-- Add Product Button -->
            <button type="button" class="btn btn-primary btn-add-product table-dark1" data-bs-toggle="modal"
                data-bs-target="#addBlogModal">Add Blog</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table text-nowrap">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="table-dark1">
                    <tr>
                        <th class="text-white">No.</th>
                        <th class="text-white">Title</th>
                        <th class="text-white">Description</th>
                        <th class="text-white">Photo</th>
                        <th class="text-white">Tag</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>

                <tbody id="blog-list">
                    <tr>
                        <td>1</td>
                        <td>Flowers 1</td>
                        <td>This is a description for Flowers 1.</td>
                        <td>
                            <img src='/assets/images/logos/Bloom-House-02.png' alt='Flowers Photo' class='rounded'
                                width='50' />
                        </td>
                        <td>Tag 1</td>
                        <td>
                            <div class='dropdown'>
                                <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                    data-bs-toggle='dropdown'>
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='javascript:void(0);' data-bs-toggle='modal'
                                        data-bs-target='#editProductModal'>
                                        <i class='bx bx-edit-alt me-1'></i> Edit
                                    </a>
                                    <a class='dropdown-item' href='javascript:void(0);'>
                                        <i class='bx bx-trash me-1'></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Flowers 2</td>
                        <td>This is a description for Flowers 2.</td>
                        <td>
                            <img src='/assets/images/logos/Bloom-House-02.png' alt='Flowers Photo' class='rounded'
                                width='50' />
                        </td>
                        <td>Tag 2</td>
                        <td>
                            <div class='dropdown'>
                                <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                    data-bs-toggle='dropdown'>
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='javascript:void(0);' data-bs-toggle='modal'
                                        data-bs-target='#editProductModal'>
                                        <i class='bx bx-edit-alt me-1'></i> Edit
                                    </a>
                                    <a class='dropdown-item' href='javascript:void(0);'>
                                        <i class='bx bx-trash me-1'></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Flowers 3</td>
                        <td>This is a description for Flowers 3.</td>
                        <td>
                            <img src='/assets/images/logos/Bloom-House-02.png' alt='Flowers Photo' class='rounded'
                                width='50' />
                        </td>
                        <td>Tag 3</td>
                        <td>
                            <div class='dropdown'>
                                <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                    data-bs-toggle='dropdown'>
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='javascript:void(0);' data-bs-toggle='modal'
                                        data-bs-target='#editProductModal'>
                                        <i class='bx bx-edit-alt me-1'></i> Edit
                                    </a>
                                    <a class='dropdown-item' href='javascript:void(0);'>
                                        <i class='bx bx-trash me-1'></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Flowers 4</td>
                        <td>This is a description for Flowers 4.</td>
                        <td>
                            <img src='/assets/images/logos/Bloom-House-02.png' alt='Flowers Photo' class='rounded'
                                width='50' />
                        </td>
                        <td>Tag 4</td>
                        <td>
                            <div class='dropdown'>
                                <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                    data-bs-toggle='dropdown'>
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='javascript:void(0);' data-bs-toggle='modal'
                                        data-bs-target='#editProductModal'>
                                        <i class='bx bx-edit-alt me-1'></i> Edit
                                    </a>
                                    <a class='dropdown-item' href='javascript:void(0);'>
                                        <i class='bx bx-trash me-1'></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Flowers 5</td>
                        <td>This is a description for Flowers 5.</td>
                        <td>
                            <img src='/assets/images/logos/Bloom-House-02.png' alt='Flowers Photo' class='rounded'
                                width='50' />
                        </td>
                        <td>Tag 5</td>
                        <td>
                            <div class='dropdown'>
                                <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                    data-bs-toggle='dropdown'>
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='javascript:void(0);' data-bs-toggle='modal'
                                        data-bs-target='#editProductModal'>
                                        <i class='bx bx-edit-alt me-1'></i> Edit
                                    </a>
                                    <a class='dropdown-item' href='javascript:void(0);'>
                                        <i class='bx bx-trash me-1'></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
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

<!-- Modal Add Blog -->
<div class="modal fade" id="addBlogModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="addBlogForm">
            <div class="modal-header">
                <h5 class="modal-title" id="addBlogModalTitle">Add Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12 mb-2">
                        <label for="blogTitle" class="form-label">Title</label>
                        <input type="text" id="blogTitle" class="form-control" placeholder="Enter Blog Title"
                            required />
                    </div>
                    <div class="col-12 mb-2">
                        <label for="blogDescription" class="form-label">Description</label>
                        <textarea id="blogDescription" class="form-control" rows="3" placeholder="Enter Blog Description" required></textarea>
                    </div>
                    <div class="col-12 mb-2">
                        <label for="blogPhoto" class="form-label">Photo</label>
                        <input type="file" id="blogPhoto" class="form-control" accept="image/*" required />
                    </div>
                    <label for="blogPhoto" class="form-label">Photo</label>
                    <div class=" col-12 mb-2 dropdown">

                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCheckbox"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Tags
                        </button>
                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownCheckbox">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="check1" />
                                    <label class="form-check-label" for="check1">Tag 1</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2" id="check2" />
                                    <label class="form-check-label" for="check2">Tag 2</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3" id="check3" />
                                    <label class="form-check-label" for="check3">Tag 3</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Blog -->
<div class="modal fade" id="editBlogModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="editBlogForm">
            <div class="modal-header">
                <h5 class="modal-title" id="editBlogModalTitle">Edit Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editBlogTitle" class="form-label">Title</label>
                        <input type="text" id="editBlogTitle" class="form-control" placeholder="Enter Blog Title"
                            required />
                    </div>
                    <div class="col-12">
                        <label for="editBlogDescription" class="form-label">Description</label>
                        <textarea id="editBlogDescription" class="form-control" rows="3" placeholder="Enter Blog Description"
                            required></textarea>
                    </div>
                    <div class="col-12">
                        <label for="editBlogPhoto" class="form-label">Photo</label>
                        <input type="file" id="editBlogPhoto" class="form-control" accept="image/*" />
                    </div>
                    <div class="col-12">
                        <label for="editBlogTag" class="form-label">Tag</label>
                        <input type="text" id="editBlogTag" class="form-control" placeholder="Enter Tag"
                            required />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>
    </div>
</div>

<!--/ Bordered Table -->
<script>
    // JavaScript for adding automatic numbering to the "No." column
    const rows = document.querySelectorAll("#blog-list tr");
    rows.forEach((row, index) => {
        const noCell = row.querySelector("td:first-child");
        noCell.textContent = index + 1; // Assign the row number (1-based index)
    });
</script>
