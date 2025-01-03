<!-- Cart Offcanvas-->
<div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Your Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
            <div>

                <div class="mt-4 mb-5">
                    <p class="mb-2 fs-6"><i class="ri-truck-line align-bottom me-2"></i> <span
                            class="fw-bolder">Go</span>
                        from delivery</p>
                    <div class="progress f-h-1">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <?php $tot = 0; ?>
                @foreach ($cart as $c)
                    <!-- Cart Product-->
                    <div class="row mx-0 pb-4 mb-4 border-bottom">
                        <div class="col-3">
                            <picture class="d-block bg-light">
                                @if (!empty($c['product_pict']) && file_exists(public_path('storage/' . $c['product_pict'])))
                                    <img class="img-fluid" src="{{ asset('storage/' . $c['product_pict']) }}"
                                        alt="Product Image">
                                @else
                                    <img class="img-fluid mx-auto d-table"
                                        src="{{ asset('assets/images/logos/imagenotfound.png') }}" alt="Image not found"
                                        style="border: 2px solid #808080;">
                                @endif
                            </picture>
                        </div>
                        <div class="col-9">
                            <div>
                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                    {{ $c['product_name'] }}
                                    <i class="ri-close-line delete_cart" data-product-id="{{ $c['product_id'] }}"></i>
                                </h6>
                                <div class="d-flex">
                                    <label for="qty" class="text-muted-cart fw-bolder">Qty:</label>
                                    <div class="d-flex align-items-center">
                                        <button type="button" class=" btn-outline-secondary btn-sm-cart"
                                            onclick="changeQty({{ $c['product_id'] }}, -1)">-</button>
                                        <input type="number" onchange="updateQty(this)" data-id="{{ $c['product_id'] }}"
                                            style="width: 50px; height:30px; border:none; text-align: center;"
                                            value="{{ $c['quantity'] }}" />
                                        <button type="button" class=" btn-outline-secondary  btn-sm-cart"
                                            onclick="changeQty({{ $c['product_id'] }}, 1)">+</button>
                                    </div>
                                </div>

                            </div>
                            <p class="fw-bolder text-end m-0">
                                Rp.{{ number_format($c['product_price'] * $c['quantity'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <?php $tot = $tot + $c['product_price'] * $c['quantity']; ?>
                @endforeach


            </div>
            <div class="border-top pt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fw-bolder">Subtotal</p>
                    <p class="m-0 fw-bolder">Rp.{{ number_format($tot, 0, ',', '.') }}</p>
                </div>
                <a href="{{ url('checkout') }}"
                    class="btn btn-orange btn-orange-chunky mt-5 mb-2 d-block text-center">Checkout</a>
                <a href="{{ url('cart') }}"
                    class="btn btn-dark fw-bolder d-block text-center transition-all opacity-50-hover">View Cart</a>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete_cart').forEach(function(button) {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                fetch('/cart/delete', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            product_id: productId
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Item berhasil dihapus!');
                            location.reload();
                        } else {
                            alert('Gagal menghapus item: ' + data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>

<script>
    function changeQty(productId, change) {
        const input = document.querySelector(`input[data-id="${productId}"]`);
        let newQty = parseInt(input.value) + change;

        if (newQty < 1) {
            alert('Quantity cannot be less than 1');
            newQty = 1;
        }

        input.value = newQty; // Update the input value
        updateQty(input); // Call the update function to send the new quantity to the server
    }

    function updateQty(input) {
        const productId = input.getAttribute('data-id');
        const newQty = input.value;

        if (newQty < 1) {
            alert('Quantity cannot be less than 1');
            input.value = 1;
            return;
        }

        fetch('/cart/update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    product_id: productId,
                    qty: newQty,
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Quantity updated successfully!');
                    location.reload()
                } else {
                    alert('Failed to update quantity: ' + data.message);
                }
            })
            .catch(error => console.error('Error:', error));
    }
</script>
