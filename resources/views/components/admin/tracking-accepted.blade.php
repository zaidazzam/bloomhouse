<!-- Bordered Table -->
<div class="card shadow-lg border-0 mb-4" style="background: linear-gradient(135deg, #007bff, #6610f2); color: white;">
    <div class="card-body d-flex align-items-center">
        <div class="me-4">
            <!-- Icon -->
            <div class="icon-container bg-white rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px; height: 60px;">
                <i class="bx bxs-truck text-primary" style="font-size: 30px;"></i>
            </div>
        </div>
        <div>
            <!-- Title -->
            <h5 class="card-title fw-bold text-white mb-1">Total Delivery tracking</h5>
            <!-- Content -->
            <p class="card-text mb-1 text-white">
                Total number of Delivery Tracking available:
            </p>
            <div class="mt-2">
                <span class="badge bg-light text-primary p-2 px-3 me-3">
                    Accepted : {{ $acceptedStatusTotal }}
                </span>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="d-flex justify-content-between w-100">

        <h5 class="card-header">Delivery Tracking</h5>

        <div class="d-flex align-items-center">
            <!-- Input Search -->

        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table id="maintable" class="display cell-border table table-bordered table-striped table-hover"
                cellspacing="0" width="100%">
                <thead class="table-dark1">
                    <tr>
                        {{-- <th class="text-white">No.</th> --}}
                        <th class="text-white">No.Receipt</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Address</th>
                        <th class="text-white">Delivery Date</th>
                        <th class="text-white">Timeslot</th>
                        {{-- <th class="text-white">Courier Name</th> --}}
                    </tr>
                </thead>

                <tbody id="product-list">
                    @foreach ($data_tracking as $item)
                        <tr>
                            {{-- <td class="text-black">{{ $loop->iteration }}</td> --}}
                            <td class="text-black">{{ $item->transaction->midtrans_order_id }}</td>
                            <td>
                                <span class="badge bg-success text-dark">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td class="text-black">{{ $item->transaction->shipping_data_address }}</td>
                            <td class="text-black">{{ $item->transaction->deliv_date }}</td>
                            <td class="text-black">{{ $item->transaction->deliv_postage_rule }}</td>
                            {{-- <td class="text-black">{{ $item->courier_name ?? '' }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
                <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
                    <tr>
                        {{-- <th class="text-white">No.</th> --}}
                        <th class="text-white">No.Receipt</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Address</th>
                        <th class="text-white">Delivery Date</th>
                        <th class="text-white">Timeslot</th>
                        {{-- <th class="text-white">Courier Name</th> --}}
                    </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>

<script>
    function updateTracking(id, oldValue) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to update the status of this delivery tracking?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('update_tracking_delivery_' + id).submit();
            } else {
                document.getElementById('status_delivery_' + id).value = oldValue;
            }
        })
    }
</script>

{{-- 
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
</script> --}}
