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
                        <th class="text-white">Size</th>
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

                            {{-- <td data-category="{{ implode(',', $product->category->pluck('id')->toArray()) }}">
                                <ul>
                                    @foreach ($product->category as $category)
                                        <li>{{ $category->name }}</li>
                                    @endforeach
                                </ul>
                            </td> --}}
                            <td data-desc="{{ $product->product_description }}">{{ $product->product_description }}</td>
                            <td data-stock="{{ $product->product_stock }}">{{ $product->product_stock }}</td>
                            <td>Bintang 5</td>
                            <td data-address="{{ $product->address }}">{{ $product->address }}</td>
                            <td data-price="{{ $product->product_price }}">Rp
                                {{ number_format($product->product_price, 0, ' ,', '.') }}</td>
                            <td data-size="{{ $product->size }}">{{ $product->size }}</td>
                            <td data-disc="{{ $product->discount }}">{{ $product->discount }}%</td>
                            <td>
                                Rp
                                {{ number_format($product->product_price - $product->product_price * ($product->discount / 100), 0, ',', '.') }}
                            </td>
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
                            placeholder="Enter Product Name" required />
                    </div>
                </div>
                <label for="productName" class="form-label">Category</label>
                <div class="row mb-3">
                    <div class="col-12">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCheckbox"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Category
                        </button>
                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownCheckbox">
                            @foreach ($categories as $category)
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" name="category_id[]" type="checkbox"
                                            value="{{ $category->id }}" id="check{{ $category->id }}"
                                            {{ in_array($category->id, old('category_id', [])) ? 'checked' : '' }} />
                                        <label class="form-check-label"
                                            for="check{{ $category->id }}">{{ $category->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- Tampilkan pesan error jika validasi gagal -->
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                            placeholder="Enter Stock" required />
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
                        <label for="addProductPrice" class="form-label">Price</label>
                        <input type="text" name="product_price" id="addProductPrice2" class="form-control"
                            placeholder="Enter Price" required />
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
                        <input type="file" id="productPhoto" name="main_picture" class="form-control" required />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>

    </div>
</div>

<!-- Edit Product Modal -->
<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="editProductForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalTitle">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductName" class="form-label">Name</label>
                        <input type="text" id="editProductName" name="name" class="form-control"
                            placeholder="Enter Product Name" value="{{ old('name') }}" required />
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <label for="editProductCategory" class="form-label">Category</label>
                <div class="row mb-3">
                    <div class="col-12">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="editDropdownCheckbox"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Category
                        </button>
                        <ul class="dropdown-menu p-3" aria-labelledby="editDropdownCheckbox">
                            @foreach ($categories as $category)
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" name="category_id[]" type="checkbox"
                                            value="{{ $category->id }}" id="category_{{ $category->id }}" />
                                        <label class="form-check-label" for="category_{{ $category->id }}">
                                            {{ $category->name }}
                                        </label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        @error('category_id')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductDescription" class="form-label">Description</label>
                        <textarea name="product_description" id="editProductDescription" class="form-control"
                            placeholder="Enter Description">{{ old('product_description') }}</textarea>
                        @error('product_description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="editProductStock" class="form-label">Stock</label>
                        <input type="number" name="product_stock" id="editProductStock" class="form-control"
                            placeholder="Enter Stock" value="{{ old('product_stock') }}" required />
                        @error('product_stock')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="editProductAddress" class="form-label">Address</label>
                        <input type="text" name="address" id="editProductAddress" class="form-control"
                            placeholder="Enter Address" value="{{ old('address') }}" />
                        @error('address')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="editProductSize" class="form-label">Size</label>
                        <input type="text" name="size" id="editProductSize" class="form-control"
                            placeholder="Enter Size" value="{{ old('size') }}" />
                        @error('size')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="editProductPrice" class="form-label">Price</label>
                        <input type="text" name="product_price" id="editProductPrice" class="form-control"
                            placeholder="Enter Price" value="{{ old('product_price') }}" required />
                        @error('product_price')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="editProductDisc" class="form-label">Discount</label>
                        <input type="number" name="discount" id="editProductDisc" class="form-control"
                            placeholder="Enter Discount Price" value="{{ old('discount') }}" />
                        @error('discount')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editproductConsistOf" class="form-label">Consist Of</label>
                        <textarea id="editproductConsistOf" name="consist_of" class="form-control" placeholder="Enter Materials"
                            value="{{ old('consist_of') }}"></textarea>
                        @error('consist_of')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editProductMainPicture" class="form-label">Photo (thumbnail)</label>
                        <input type="file" name="main_picture" id="editProductMainPicture"
                            class="form-control" />
                        @error('main_picture')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
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


<!-- Photo Product Modal -->
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
                const product_size = row.querySelector('[data-size]').getAttribute(
                    'data-size');
                const product_disc = row.querySelector('[data-disc]').getAttribute('data-disc');
                const product_consist = row.querySelector('[data-consist]').getAttribute(
                    'data-consist');
                const product_category = row.getAttribute(
                'data-category'); // Get the data-category attribute


                document.getElementById('editProductName').value = product_name;
                document.getElementById('editProductDescription').value = product_desc;
                document.getElementById('editProductStock').value = product_stock;
                document.getElementById('editProductAddress').value = product_address;
                document.getElementById('editProductSize').value = product_size;
                document.getElementById('editProductPrice').value = product_price;
                document.getElementById('editProductDisc').value = product_disc;
                document.getElementById('editproductConsistOf').value = product_consist;
                document.getElementById('DropdownCheckbox').value = product_category;

                // let categs = [];
                // try {
                //     categs = JSON.parse(product_category);
                // } catch (error) {
                //     console.error("Failed to parse list_category:", error);
                // }
                // categs.forEach(categ => {
                //     // Atur checkbox tag sesuai dengan data tags dari baris
                //     const categCheckboxes = document.querySelectorAll(
                //         'input[name="tags[]"]');
                //     categCheckboxes.forEach(checkbox => {
                //         checkbox.checked =
                //             false; // Reset semua checkbox sebelum menandai yang sesuai
                //         if (categs.some(categ => categ.id == checkbox
                //                 .value)) { // Cocokkan ID tag
                //             checkbox.checked = true;
                //         }
                //     });
                // });
                // editorInstance.setData(content)
                // Update selected categories
                const selectedCategories = product_category.split(
                    ','); // Assuming categories are comma-separated
                const categCheckboxes = document.querySelectorAll(
                    'input[name="category_id[]"]');

                categCheckboxes.forEach(checkbox => {
                    checkbox.checked = selectedCategories.includes(checkbox
                        .value
                        ); // Check if the checkbox value is in selected categories
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

                // Dapatkan elemen tbody dan kosongkan terlebih dahulu
                const tbody = document.getElementById('picture-list');
                tbody.innerHTML = ""; // Kosongkan isi tabel sebelum menambahkan gambar baru

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
    document.getElementById('addProductPrice').addEventListener('input', function(e) {
        // Remove non-numeric characters
        let value = e.target.value.replace(/[^,\d]/g, '').toString();
        let price2 = document.getElementById('addProductPrice2').value = value;
        // Split the value into whole and decimal parts
        let parts = value.split(',');
        let wholePart = parts[0];
        let decimalPart = parts.length > 1 ? ',' + parts[1] : '';

        // Format the whole part with thousands separator
        wholePart = wholePart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Combine whole and decimal parts
        e.target.value = 'Rp ' + wholePart + decimalPart;
    });
    document.getElementById('editProductPrice').addEventListener('input', function(e) {
        // Remove non-numeric characters
        let value = e.target.value.replace(/[^,\d]/g, '').toString();
        let price2 = document.getElementById('editProductPrice2').value = value;
        // Split the value into whole and decimal parts
        let parts = value.split(',');
        let wholePart = parts[0];
        let decimalPart = parts.length > 1 ? ',' + parts[1] : '';

        // Format the whole part with thousands separator
        wholePart = wholePart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Combine whole and decimal parts
        e.target.value = 'Rp ' + wholePart + decimalPart;
    });


    document.getElementById('productForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah refresh halaman

        const formData = new FormData(this);
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = true; // Nonaktifkan tombol sementara

        fetch("{{ route('product_products.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    // Tampilkan pesan error
                    if (data.errors.category_id) {
                        document.getElementById('categoryError').textContent = data.errors.category_id[0];
                    } else {
                        document.getElementById('categoryError').textContent = '';
                    }
                } else {
                    // Jika berhasil, lakukan sesuatu (misalnya, refresh data tanpa reload halaman)
                    alert('Product saved successfully!');
                    // Optionally, you can reset the form
                    document.getElementById('productForm').reset();
                    document.getElementById('categoryError').textContent = '';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            })
            .finally(() => {
                submitButton.disabled = false; // Aktifkan kembali tombol
            });
    });
</script>
