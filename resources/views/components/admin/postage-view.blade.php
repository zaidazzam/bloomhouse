<!-- Bordered Table -->
<div class="card">
    <div class="d-flex justify-content-between w-100">

        <h5 class="card-header">Delivery Rule</h5>

        <div class="d-flex align-items-center">
            <!-- Input Search -->
            <div class="input-group input-group-merge me-3">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                    aria-describedby="basic-addon-search31" />
            </div>

            <!-- Add Product Button -->
            <button type="button" class="btn btn-primary btn-add-product table-dark1" data-bs-toggle="modal"
                data-bs-target="#addCategoryModal">Add Delivery Rule</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table text-nowrap">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="table-dark1">
                    <tr>
                        <th class="text-white">No.</th>
                        <th class="text-white">Delivery Rule</th>
                        <th class="text-white">Category</th>
                        <th class="text-white">Price</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>

                <tbody id="product-list">
                    @foreach ($postages as $postage)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td data-name="{{ $postage->postage_rule }}">{{ $postage->postage_rule }}</td>
                            <td data-name="{{ $postage->category }}">{{ $postage->category }}</td>
                            <td data-name="{{ $postage->price }}">
                                Rp {{ number_format($postage->price, 0, ',', '.') }}
                            </td>
                            <td>
                                <div class='dropdown'>
                                    <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                        data-bs-toggle='dropdown'>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item btn btn-edit' href='javascript:void(0);'
                                            data-bs-toggle='modal'
                                            data-url="{{ route('postages.update', $postage->id) }}"
                                            data-bs-target='#editCategoryModal'>
                                            <i class='bx bx-edit-alt me-1'></i> Edit
                                        </a>
                                        <form method="POST" action="{{ route('postages.destroy', $postage->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class='dropdown-item btn'>
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


<!-- Modal Add Category -->
<!-- Modal Add Category -->
<div class="modal fade" id="addCategoryModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="addCategoryForm" method="POST" action="{{ route('postages.store') }}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalTitle">Add Delivery Rule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-2">
                        <label for="deliveryRule" class="form-label">Delivery Rule</label>
                        <input type="text" id="deliveryRule" name="postage_rule"
                            class="form-control @error('postage_rule') is-invalid @enderror"
                            placeholder="Enter Delivery Rule" required />
                        @error('postage_rule')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label for="categoryName" class="form-label">Category</label>
                        <select id="categoryName" name="category"
                            class="form-select @error('category') is-invalid @enderror" required>
                            <option value="" disabled selected>Select Category</option>
                            <option value="Time">Time</option>
                            <option value="Addres">Addres</option>
                            <!-- Tambahkan kategori lain di sini jika diperlukan -->
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" id="rupiahInput" name="price"
                            class="form-control @error('price') is-invalid @enderror" placeholder="Enter Price"
                            required />
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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


<!-- Modal Edit Category -->
<div class="modal fade" id="editCategoryModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="editCategoryForm" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalTitle">Edit Delivery Rule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-2">
                        <label for="editDeliveryRule" class="form-label">Delivery Rule</label>
                        <input type="text" id="editDeliveryRule" name="postage_rule" class="form-control"
                            placeholder="Enter Delivery Rule" required />
                        @error('postage_rule')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label for="editCategoryName" class="form-label">Category</label>
                        <select id="editCategoryName" name="category"
                            class="form-select @error('category') is-invalid @enderror" required>
                            <option value="" disabled selected>Select Category</option>
                            <option value="Time">Time</option>
                            <option value="Addres">Addres</option>
                            <!-- Tambahkan kategori lain di sini jika diperlukan -->
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label for="editPrice" class="form-label">Price</label>
                        <input type="number" id="editPrice" name="price" class="form-control"
                            placeholder="Enter Price" required />
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>
    </div>
</div>

<!--/ Bordered Table -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editButtons = document.querySelectorAll('.btn-edit');
        const editForm = document.getElementById('editCategoryForm');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const url = row.querySelector('[data-url]').getAttribute('data-url');
                editForm.setAttribute('action', url);

                const delivery_rule = row.querySelector(' [data-name]').getAttribute(
                    'data-name');
                const category = row.querySelector('td:nth-child(3)').getAttribute('data-name');
                const price = row.querySelector('td:nth-child(4)').getAttribute('data-name')
                    .replace('Rp ', '').replace(/\./g, '');

                document.getElementById('editDeliveryRule').value = delivery_rule;
                document.getElementById('editCategoryName').value = category;
                document.getElementById('editPrice').value = price;
            });
        });
    });
</script>
