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
                            class="fw-bolder">$22</span> away
                        from free delivery</p>
                    <div class="progress f-h-1">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <?php $tot = 0?>
                @foreach ($cart as $c)
                <!-- Cart Product-->
                <div class="row mx-0 pb-4 mb-4 border-bottom">
                    <div class="col-3">
                        <picture class="d-block bg-light">
                            <img class="img-fluid" src="{{ asset('storage/' . $c['product_pict']) }}"
                            alt="Bootstrap 5 Template by Pixel Rocket">
                        </picture>
                    </div>
                    <div class="col-9">
                        <div>
                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                {{ $c['product_name'] }}
                                <i class="ri-close-line"></i>
                            </h6>
                            <small class="d-block text-muted fw-bolder">Size: {{ $c['size'] }}</small>
                            <small class="d-block text-muted fw-bolder">Qty: {{ $c['quantity'] }}</small>
                        </div>
                        <p class="fw-bolder text-end m-0">Rp.{{ number_format($c['product_price'] * $c['quantity'], 0, ',', '.') }}</p>
                    </div>
                </div>
                <?php $tot = $tot + $c['product_price'] * $c['quantity']?>
                @endforeach
                
                
            </div>
            <div class="border-top pt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fw-bolder">Subtotal</p>
                    <p class="m-0 fw-bolder">Rp.{{ number_format($tot,0,',','.') }}</p>
                </div>
                <a href="{{ url('checkout') }}"
                    class="btn btn-orange btn-orange-chunky mt-5 mb-2 d-block text-center">Checkout</a>
                <a href="{{ url('cart') }}"
                    class="btn btn-dark fw-bolder d-block text-center transition-all opacity-50-hover">View Cart</a>
            </div>
        </div>
    </div>
</div>
