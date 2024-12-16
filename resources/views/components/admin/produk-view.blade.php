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
                    @foreach ($products as $product)
                        <tr>
                            <td data-id="{{ $product->id }}">{{ $loop->iteration }}</td>
                            <td data-name="{{ $product->name }}"><strong>{{ $product->name }}</strong></td>
                            <td data-category="{{ $product->category->pluck('id')->implode(', ') }}">
                                @foreach ($product->category as $category)
                                    <span class="badge bg-primary">{{ $category->name }}</span>
                                @endforeach
                            </td>
                            <td data-desc="{{ $product->product_description }}">{{ $product->product_description }}</td>
                            <td data-stock="{{ $product->product_stock }}">{{ $product->product_stock }}</td>
                            <td>Bintang 5</td>
                            <td data-address="{{ $product->address }}">{{ $product->address }}</td>
                            <td data-price="{{ $product->product_price }}">{{ $product->product_price }}</td>
                            <td data-disc="{{ $product->discount }}">{{ $product->discount }}%</td>
                            <td>{{ $product->product_price - ($product->product_price * ($product->discount / 100)) }}</td>
                            <td data-consist="{{ $product->consist_of }}">{{ $product->consist_of }}</td>
                            <td>
                                <button type='button' class='btn btn-photo btn-primary btn-add-product table-dark1'
                                    data-photo-url ='{{ route('product_pictures.store') }}'
                                    main-photo='{{ asset('storage/' . $product->main_picture) }}'
                                    list-pict='{{ $product->pictures }}' data-csrf='{{ csrf_token() }}'
                                    data-bs-toggle='modal' data-bs-target='#photoModal'>
                                    Photo
                                </button>
                            </td>
                            <td>
                                <div class='dropdown'>
                                    <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                        data-bs-toggle='dropdown'>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item btn btn-edit' data-bs-toggle='modal'
                                            data-url='{{ route('product_products.update', $product->id) }}'
                                            data-bs-target='#editProductModal'>
                                            <i class='bx bx-edit-alt me-1'></i> Edit
                                        </a>
                                        <form method="POST"
                                            action="{{ route('product_products.destroy', $product->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button class='dropdown-item' type="submit">
                                                <i class='bx bx-trash me-1'></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
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
        <form class="modal-content" method="POST" action="{{ route('product_products.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="productModalTitle">Add/Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productName" class="form-label">Name</label>
                        <input type="text" name="name" id="productName" class="form-control"
                            placeholder="Enter Product Name" />
                    </div>
                </div>
                <label for="productName" class="form-label">Category</label>
                <div class="row mb-3">
                    <div class="col-12 ">

                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCheckbox"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Category
                        </button>
                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownCheckbox">
                            @foreach ($categories as $category)
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" name="category_id[]" type="checkbox"
                                            value="{{ $category->id }}" id="check1" />
                                        <label class="form-check-label" for="check1">{{ $category->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        {{-- <label for="productCategory" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id"
                            id="productCategory">
                            <option value="null" aria-readonly="true" selected>Pilih Kategori Produk....</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productDescription" class="form-label">Description</label>
                        <textarea id="productDescription" name="product_description" class="form-control" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="productStock" class="form-label">Stock</label>
                        <input type="number" name="product_stock" id="productStock" class="form-control"
                            placeholder="Enter Stock" />
                    </div>
                    <div class="col-4">
                        <label for="productAddress" class="form-label">Address</label>
                        <input type="text" id="productAddress" name="address" class="form-control"
                            placeholder="Enter Address" />
                    </div>
                    <div class="col-4">
                        <label for="productSize" class="form-label">Size</label>
                        <input type="text" name="size" id="productSize" class="form-control"
                            placeholder="Enter Size" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="number" name="product_price" id="productPrice" class="form-control"
                            placeholder="Enter Price" />
                    </div>
                    <div class="col-6">
                        <label for="editPriceBeforeDisc" class="form-label">Discount</label>
                        <input type="number" name="discount" id="editPriceBeforeDisc" class="form-control"
                            placeholder="Enter Discount Price" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productConsistOf" class="form-label">Consist Of</label>
                        <textarea id="productConsistOf" name="consist_of" class="form-control" placeholder="Enter Materials"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="productPhoto" class="form-label">Photo (thumbnail)</label>
                        <input type="file" id="productPhoto" name="main_picture" class="form-control" />
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

<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="editProductForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalTitle">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @csrf
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductName" class="form-label">Name</label>
                        <input type="text" id="editProductName" name="name" class="form-control"
                            placeholder="Enter Product Name" />
                    </div>
                </div>
                <label for="productName" class="form-label">Category</label>
                <div class="row mb-3">
                    <div class="col-12 ">

                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCheckbox"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Category
                        </button>
                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownCheckbox">
                            @foreach ($categories as $category)
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" name="category_id[]" type="checkbox"
                                            value="{{ $category->id }}" id="category_{{ $category->id }}" />
                                        <label class="form-check-label" for="category_{{ $category->id }}">{{ $category->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        {{-- <label for="productCategory" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id"
                            id="productCategory">
                            <option value="null" aria-readonly="true" selected>Pilih Kategori Produk....</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductDescription" class="form-label">Description</label>
                        <textarea name="product_description" id="editProductDescription" class="form-control"
                            placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="editProductStock" class="form-label">Stock</label>
                        <input type="number" name="product_stock" id="editProductStock" class="form-control"
                            placeholder="Enter Stock" />
                    </div>
                    <div class="col-4">
                        <label for="editProductAddress" class="form-label">Address</label>
                        <input type="text" name="address" id="editProductAddress" class="form-control"
                            placeholder="Enter Address" />
                    </div>
                    <div class="col-4">
                        <label for="editProductSize" class="form-label">Size</label>
                        <input type="text" name="size" id="editProductSize" class="form-control"
                            placeholder="Enter Size" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="editProductPrice" class="form-label">Price</label>
                        <input type="number" name="product_price" id="editProductPrice" class="form-control"
                            placeholder="Enter Price" />
                    </div>
                    <div class="col-6">
                        <label for="editPriceBeforeDisc" class="form-label">Discount</label>
                        <input type="number" name="discount" id="editProductDisc" class="form-control"
                            placeholder="Enter Discount Price" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductConsistOf" class="form-label">Consist Of</label>
                        <textarea id="editProductConsistOf" name="consist_of" class="form-control" placeholder="Enter Materials"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductPhoto" class="form-label">Photo(thumbnail)</label>
                        <input type="file" id="editProductPhoto" name="main_picture" class="form-control" />
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
<!-- Edit Product Modal -->
<div class="modal fade" id="photoModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="photoForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h5 class="modal-title" id="photoModal-title">Add Photo</h5>
                <div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-header">
                <div class="row me-3">
                    <img id="main-picture" alt='Product Photo'class='rounded' style="width: 300px;" />
                </div>
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead class="table-dark1">
                        <tr>
                            <th class="text-white">Photo</th>
                            <th class="text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody id="picture-list">
                        {{-- <tr>
                                <td><img src='/assets/images/logos/Bloom-House-02.png' alt='Product Photo'
                                    class='rounded' width='100' /></td>
                                    <td>
                                        <button type='button' class='btn btn-outline-danger'>
                                            Delete
                                            </button>
                                            </td>
                                            </tr>"; --}}
                    </tbody>

                </table>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="hidden" name="productId" id="productId" />
                        <input type="hidden" id="token" value="{{ csrf_token() }}" />
                        <input class="form-control" type="file" name="picture" id="formFile" />
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
    document.addEventListener('DOMContentLoaded', () => {
        const photoButtons = document.querySelectorAll('.btn-photo');
        const editButtons = document.querySelectorAll('.btn-edit');
        const editForm = document.getElementById('editProductForm');
        const photoForm = document.getElementById('photoForm');
        const main_picture = document.getElementById('main-picture');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const url = row.querySelector('[data-url]').getAttribute('data-url');
                editForm.setAttribute('action', url);


                const product_name = row.querySelector('[data-name]').getAttribute('data-name');
                const product_desc = row.querySelector('[data-desc]').getAttribute('data-desc');
                const product_stock = row.querySelector('[data-stock]').getAttribute(
                    'data-stock');
                const product_address = row.querySelector('[data-address]').getAttribute(
                    'data-address');
                const product_price = row.querySelector('[data-price]').getAttribute(
                    'data-price');
                const product_disc = row.querySelector('[data-disc]').getAttribute('data-disc');
                const product_consist = row.querySelector('[data-consist]').getAttribute(
                    'data-consist');

                document.getElementById('editProductName').value = product_name;
                document.getElementById('editProductDescription').value = product_desc;
                document.getElementById('editProductStock').value = product_stock;
                document.getElementById('editProductAddress').value = product_address;
                document.getElementById('editProductPrice').value = product_price;
                document.getElementById('editProductDisc').value = product_disc;
                document.getElementById('editProductConsistOf').value = product_consist;

                const product_categories = row.querySelector('[data-categories]').getAttribute('data-categories').split(',');

                const categoryCheckboxes = document.querySelectorAll('.form-check-input[name="category_id[]"]');
            categoryCheckboxes.forEach(checkbox => {
                checkbox.checked = product_categories.includes(checkbox.value);
            });


            });
        });

        photoButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const url = row.querySelector('[data-photo-url]').getAttribute(
                    'data-photo-url');
                photoForm.setAttribute('action', url);
                const productId = row.querySelector('[data-id]').getAttribute('data-id');
                const main_photo = row.querySelector('[main-photo]').getAttribute('main-photo');
                document.getElementById('productId').value = productId;
                main_picture.setAttribute('src', main_photo);
                const tbody = document.getElementById('picture-list');

                const list_photo_raw = row.querySelector('[list-pict]').getAttribute(
                    'list-pict');
                let list_photo = [];
                try {
                    list_photo = JSON.parse(list_photo_raw);
                } catch (error) {
                    console.error("Failed to parse list_photo:", error);
                }

                list_photo.forEach(photo => {
                    const row = document.createElement('tr');
                    const pictureCell = document.createElement('td');
                    pictureCell.innerHTML = `
                        <img src="/storage/${photo.picture_path}" alt="Product Photo" class="rounded" width="100">`;

                    const actionCell = document.createElement('td');
                    actionCell.innerHTML = `
                        <button type="button" class="btn btn-outline-danger" onclick="deletePicture('${photo.id}')">
                            Delete
                        </button>
                        `;

                    row.appendChild(pictureCell);
                    row.appendChild(actionCell);

                    tbody.appendChild(row);
                });
            });
        });


    });

    function deletePicture(id) {
        const csrf = document.getElementById('token').value;
        if (confirm("Are you sure you want to delete this picture?")) {
            fetch(`/product_pictures/${id}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": csrf
                    }
                })
                .then(response => {
                    location.reload()
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred");
                });
        }
    }
    // JavaScript for adding automatic numbering to the "No." column
    const rows = document.querySelectorAll("#product-list tr");
    rows.forEach((row, index) => {
        const noCell = row.querySelector("td:first-child");
        noCell.textContent = index + 1; // Assign the row number (1-based index)
    });
</script>
