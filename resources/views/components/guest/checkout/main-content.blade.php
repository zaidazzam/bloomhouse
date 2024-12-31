    <!-- Main Section-->
    <section class="mt-5 container ">
        <!-- Page Content Goes Here -->

        <h1 class="mb-4 display-5 fw-bold text-center">Checkout Securely</h1>
        <p class="text-center mx-auto">Please fill in the details below to complete your order. Already registered?
            <a href="#">Login here.</a>
        </p>

        <div class="row g-md-8 mt-4">
            <!-- Checkout Panel Left -->
            <div class="col-12 col-lg-6 col-xl-7">
                <!-- Checkout Panel Contact -->
                <div class="checkout-panel">
                    <h5 class="title-checkout">Contact Information</h5>
                    <div class="row">

                        <!-- Email-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    placeholder="you@example.com">
                            </div>

                            <!-- Mailing List Signup-->
                            <div class="form-group form-check m-0">
                                <input type="checkbox" class="form-check-input" id="add-mailinglist" checked>
                                <label class="form-check-label" for="add-mailinglist">Keep me updated with your latest
                                    news and offers</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Checkout Shipping Address --> <!-- Checkout Billing Address-->
                <div class="billing-address checkout-panel">
                    <h5 class="title-checkout">Billing Address</h5>
                    <div class="row">
                        <!-- Country-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bill_country" class="form-label">Country</label>
                                <select name="bill_data_country" class="form-select" id="bill_country" required>
                                    <option value="" disabled selected>Please Select...</option>
                                    <option value="ID">Indonesia</option> <!-- Menambahkan opsi untuk Indonesia -->
                                </select>
                            </div>
                        </div>

                        <!-- First Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bill_firstName" class="form-label">First name</label>
                                <input name="bill_data_firstname" type="text" class="form-control"
                                    id="bill_firstName" placeholder="" value="" required="">
                            </div>
                        </div>

                        <!-- Last Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bill_lastName" class="form-label">Last name</label>
                                <input name="bill_data_lastname" type="text" class="form-control" id="bill_lastName"
                                    placeholder="" value="" required="">
                            </div>
                        </div>

                        <!-- phonenumber-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bill_phoneNumber" class="form-label">Phone Number</label>
                                <input name="bill_data_phone" type="number" class="form-control" id="bill_phoneNumber"
                                    placeholder="" required="">
                            </div>
                        </div>

                        <!-- Company-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bill_company" class="form-label">Company <span class="text-muted"
                                        style="font-size: 0.85em;">(optional)</span></label>
                                <input name="bill_data_company" type="text" class="form-control" id="bill_company"
                                    placeholder="" required="">
                            </div>
                        </div>

                        <!-- Address-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bill_address" class="form-label">Address</label>
                                <input name="bill_data_address" type="text" class="form-control" id="bill_address"
                                    placeholder="123 Some Street Somewhere" required="">
                            </div>
                        </div>
                        <!-- Province -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bill_province" class="form-label">Province</label>
                                <select name="bill_data_province" class="form-select" id="bill_province" required="">
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>

                        <!-- City (Regency) -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bill_city" class="form-label">City</label>
                                <select name="bill_data_city" class="form-select" id="bill_city" required="">
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>

                        <!-- Subdistrict and Postal Code (Kelurahan) -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bill_subdistrict" class="form-label">Subdistrict/Postal Code</label>
                                <select name="bill_data_subdistrict" class="form-select" id="bill_subdistrict"
                                    required="">
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- / Checkout Billing Address--> <!-- Checkout Shipping Method-->
                <div class="checkout-panel">
                    <h5 class="title-checkout">Delivery</h5>

                    <!-- Date delivery-->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_firstName" class="form-label">First Name</label>
                            <input name="delivery_firstName" type="text" class="form-control"
                                id="delivery_firstName" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_lastName" class="form-label">Last Name</label>
                            <input name="delivery_lastName" type="text" class="form-control"
                                id="delivery_lastName" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_phone" class="form-label">WhatsApp Number</label>
                            <input name="delivery_phone" type="number" class="form-control" id="delivery_phone"
                                required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery-date" class="form-label">Delivery Date</label>
                            <input name="deliv_date" type="date" class="form-control" id="delivery-date"
                                min="<?= date('Y-m-d') ?>" required>
                        </div>
                    </div>
                    <!-- Date delivery-->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_address" class="form-label">Delivery Addrress</label>
                            <textarea class="form-control" id="delivery_address" rows="4" placeholder="Write your detail address here..."
                                required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="address-selection" class="form-label">Delivery Address (Postage_Rule)</label>
                            <select name="deliv_schedule_address" class="form-select" id="delivery-schedule-address"
                                required>
                                <option value="null" disabled selected>Select an Delivery Address</option>
                                @foreach ($addressPostageRules as $rule)
                                    <option value="{{ $rule->price }}">{{ $rule->postage_rule }} - Rp
                                        {{ number_format($rule->price, 0, ',', '.') }}</option>
                                @endforeach
                            </select>
                            <div id="delivery-schedule-error" class="text-danger mt-2"></div>
                        </div>
                    </div>
                    <!-- Date delivery-->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery-schedule" class="form-label">Delivery Schedule (Time Slot)</label>
                            <select name="deliv_schedule" class="form-select" id="delivery-schedule" required>
                                <option value="null" disabled selected>Select a Delivery Schedule</option>
                                @foreach ($timePostageRules as $rule)
                                    <option value="{{ $rule->price }}">{{ $rule->postage_rule }} - Rp
                                        {{ number_format($rule->price, 0, ',', '.') }}</option>
                                @endforeach
                            </select>
                            <div id="delivery-schedule-error" class="text-danger mt-2"></div>
                        </div>
                    </div>
                    <!-- Date delivery-->
                    <!-- Delivery Note Section -->
                    <label for="delivery-note" class="form-label mb-3">Delivery Note</label>
                    <p class="text-muted fst-italic">
                        Please provide a personalized message for the recipient. For example:
                    <ul>
                        <li>"Happy Birthday, [Recipient's Name]! Wishing you a wonderful year ahead filled with joy and
                            success."</li>
                        <li>"Congratulations on your special day, [Recipient's Name]! May your day be as beautiful as
                            these flowers."</li>
                        <li>"Thank you for everything, [Recipient's Name]. You truly deserve this little surprise."</li>
                    </ul>
                    </p>

                    <!-- Delivery Notes -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="delivery-note-textarea" class="form-label">
                                <span class="small fw-bolder">* Free Personalized Note</span>
                            </label>
                            <textarea class="form-control" id="delivery-note-textarea" rows="4" placeholder="Write your message here..."
                                required></textarea>
                        </div>
                    </div>

                </div>
                <!-- /Checkout Shipping Method --> <!-- Checkout Payment Method-->
                <div class="checkout-panel">
                    <h5 class="title-checkout">Payment Method</h5>

                    <div class="row">
                        <!-- Payment Option-->
                        <div class="col-12">
                            <div class="form-check form-group form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentStripe" checked>
                                <label class="form-check-label" for="checkoutPaymentStripe">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">Credit Card (Stripe)</span>
                                        </span>
                                        <i class="ri-bank-card-line"></i>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Payment Option for Transfer Bank BCA -->
                        <div class="col-12">
                            <div class="form-check form-group form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentTransferBank">
                                <label class="form-check-label" for="checkoutPaymentTransferBank">
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span class="me-3">
                                            <span class="mb-0 fw-bolder d-block">Transfer Bank BCA</span>
                                        </span>
                                        <!-- Gambar kecil di sebelah kanan teks -->
                                        <img src="./assets/images/logos/logo-bca.jpg" alt="Logo BCA"
                                            style="width: 24px; height: auto;">
                                    </span>
                                </label>
                            </div>
                        </div>


                        <!-- Payment Option for Virtual Account -->
                        <div class="col-12">
                            <div class="form-check form-group form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentVirtualAccount">
                                <label class="form-check-label" for="checkoutPaymentVirtualAccount">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span class="mb-0 fw-bolder d-block">Virtual Account</span>
                                        <img src="./assets/images/logos/logo-bca.jpg" alt="Logo BCA"
                                            style="width: 24px; height: auto;"> </span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <!-- Transfer Bank Info -->
                    <div class="transfer-bank bg-light p-4 d-none mt-3 fw-bolder">
                        Please click on complete order. You will then be transferred to <strong>Bank BCA</strong> to
                        enter your payment details via <strong>Virtual Account</strong>.
                    </div>

                    <!-- Virtual Account Info -->
                    <div class="virtual-bank bg-light p-4 d-none mt-3 fw-bolder">
                        Please click on complete order. You will then be transferred to <strong>Bank BCA</strong> to
                        enter your payment details via <strong>Virtual Account</strong>.
                    </div>



                    <!-- Payment Details-->
                    <div class="card-details">
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cc-name" class="form-label">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder=""
                                        required="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cc-number" class="form-label">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder=""
                                        required="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cc-expiration" class="form-label">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                        required="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <label for="cc-cvv"
                                            class="form-label d-flex w-100 justify-content-between align-items-center">Security
                                            Code</label>
                                        <button type="button" class="btn btn-link p-0 fw-bolder fs-xs text-nowrap"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="A CVV is a number on your credit card or debit card that's in addition to your credit card number and expiration date">
                                            What's this?
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder=""
                                        required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Payment Details-->


                </div>
                <!-- /Checkout Payment Method-->
            </div>
            <!-- / Checkout Panel Left -->

            <!-- Checkout Panel Summary -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="bg-light p-4 sticky-md-top top-5">
                    <div class="border-bottom pb-3">
                        <!-- Cart Item-->
                        <?php $tot = 0; ?>
                        @foreach ($cart as $c)
                            <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                                <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                    <div class="position-relative f-w-20 border p-2 me-4">
                                        <span class="checkout-item-qty">{{ $c['quantity'] }}</span>
                                        <img src="{{ asset('storage/' . $c['product_pict']) }}" alt=""
                                            class="rounded img-fluid">
                                    </div>
                                    <div>
                                        <p class="mb-1 fs-6 fw-bolder">{{ $c['product_name'] }}</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 fw-bolder">
                                    <span>Rp.{{ number_format($c['product_price'] * $c['quantity'], 0, ',', '.') }}</span>
                                </div>
                            </div>
                            <?php $tot = $tot + $c['product_price'] * $c['quantity']; ?>
                        @endforeach
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 fw-bolder fs-6">Subtotal</p>
                            <p class="m-0 fs-6 fw-bolder" id="subtot" data-subtot="{{ $tot }}">
                                Rp.{{ number_format($tot, 0, ',', '.') }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center ">
                            <p class="m-0 fw-bolder fs-6">Shipping</p>
                            <p class="m-0 fs-6 fw-bolder" id="tot_shipping">postage + time slot</p>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 fw-bold fs-5">Grand Total</p>
                                {{-- <span class="text-muted small">Inc $45.89 sales tax</span> --}}
                            </div>
                            <input type="hidden" id="gtotal" value="{{ $tot }}">
                            <p class="m-0 fs-5 fw-bold" id="grand_tot">Rp.{{ number_format($tot, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="Enter your coupon code">
                            <button class="btn btn-dark btn-sm px-4">Apply</button>
                        </div>
                    </div>
                    <!-- Accept Terms Checkbox-->
                    <div class="form-group form-check my-4">
                        <input type="checkbox" class="form-check-input" id="accept-terms" checked>
                        <label class="form-check-label fw-bolder" for="accept-terms">I agree to Alpine's <a
                                href="#">terms & conditions</a></label>
                    </div>
                    <a href="#" class="btn btn-dark w-100" data-cart='@json($cart)'
                        id="checkout" role="button">Complete Order</a>
                </div>
            </div>
            <!-- /Checkout Panel Summary -->
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const provinceSelect = document.getElementById('province');
            const citySelect = document.getElementById('city');

            // Manually defined provinces and cities data
            const data = {
                "Aceh": ["Banda Aceh", "Lhokseumawe", "Langsa"],
                "Bali": ["Denpasar", "Badung", "Gianyar"],
                "Jakarta": ["Central Jakarta", "West Jakarta", "South Jakarta"],
                "West Java": ["Bandung", "Bekasi", "Bogor", "Cirebon"], // Added Bandung here
                "East Java": ["Surabaya", "Malang", "Madiun"],
                "Yogyakarta": ["Yogyakarta", "Sleman", "Bantul"]
            };

            // Populate provinces
            Object.keys(data).forEach(province => {
                const option = document.createElement('option');
                option.value = province; // Province name as value
                option.textContent = province; // Display province name
                provinceSelect.appendChild(option);
            });

            // Fetch cities based on the selected province
            provinceSelect.addEventListener('change', function() {
                const selectedProvince = provinceSelect.value;

                // Clear previous city options
                citySelect.innerHTML = '<option value="" disabled selected>Please Select...</option>';

                // Check if the selected province has cities
                if (selectedProvince && data[selectedProvince]) {
                    data[selectedProvince].forEach(city => {
                        const option = document.createElement('option');
                        option.value = city; // City name as value
                        option.textContent = city; // Display city name
                        citySelect.appendChild(option);
                    });
                }
            });
        });


        // document.addEventListener("DOMContentLoaded", function() {
        //     const countrySelect = document.getElementById('bill_country');

        //     // Fetch countries from API
        //     fetch('https://restcountries.com/v3.1/all')
        //         .then(response => response.json())
        //         .then(data => {
        //             // Loop through the countries and add them to the dropdown
        //             data.forEach(country => {
        //                 const option = document.createElement('option');
        //                 option.value = country.name
        //                     .common; // or any other property you want to use as value
        //                 option.textContent = country.name.common; // or you can use the native name
        //                 countrySelect.appendChild(option);
        //             });
        //         })
        //         .catch(error => {
        //             console.error('Error fetching countries:', error);
        //         });
        // });
        $(document).ready(function() {
            // Inisialisasi Select2 pada elemen #delivery-schedule
            $('#delivery-schedule').select2();
        });
    </script>
<script>
    // URL API
    const API_BASE_URL = 'https://www.emsifa.com/api-wilayah-indonesia/api';

    // Helper function untuk mengisi dropdown
    function populateDropdown(elementId, data, defaultOptionText) {
        const dropdown = document.getElementById(elementId);
        dropdown.innerHTML = `<option value="" disabled selected>${defaultOptionText}</option>`; // Reset dropdown
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.id;
            option.textContent = item.name;
            dropdown.appendChild(option);
        });
    }

    // Fetch data provinsi
    function fetchProvinces() {
        fetch(`${API_BASE_URL}/provinces.json`)
            .then(response => response.json())
            .then(data => {
                populateDropdown('bill_province', data, 'Please Select Province...');
            })
            .catch(error => console.error('Error fetching provinces:', error));
    }

    // Fetch data kota/kabupaten berdasarkan provinsi
    function fetchRegencies(provinceId) {
        fetch(`${API_BASE_URL}/regencies/${provinceId}.json`)
            .then(response => response.json())
            .then(data => {
                populateDropdown('bill_city', data, 'Please Select City...');
            })
            .catch(error => console.error('Error fetching regencies:', error));
    }

    // Fetch data kecamatan/kelurahan berdasarkan kota/kabupaten
    function fetchDistricts(regencyId) {
        fetch(`${API_BASE_URL}/districts/${regencyId}.json`)
            .then(response => response.json())
            .then(data => {
                populateDropdown('bill_subdistrict', data, 'Please Select Subdistrict...');
            })
            .catch(error => console.error('Error fetching districts:', error));
    }

    // Event listener untuk perubahan pada dropdown provinsi
    document.getElementById('bill_province').addEventListener('change', function() {
        const provinceId = this.value;
        if (provinceId) {
            fetchRegencies(provinceId);
            document.getElementById('bill_city').innerHTML =
                '<option value="" disabled selected>Loading...</option>';
            document.getElementById('bill_subdistrict').innerHTML =
                '<option value="" disabled selected>Please Select Subdistrict...</option>';
        }
    });

    // Event listener untuk perubahan pada dropdown kota
    document.getElementById('bill_city').addEventListener('change', function() {
        const regencyId = this.value;
        if (regencyId) {
            fetchDistricts(regencyId);
        }
    });

    // Fetch provinces on page load
    fetchProvinces();
</script>

    <script>
        document.getElementById('delivery-schedule').addEventListener('change', function() {
            const deliv_schedule = parseFloat(this.value);
            const deliv_schedule_address = parseFloat(document.getElementById('delivery-schedule-address').value)
            const tot_shipping = document.getElementById('tot_shipping')
            const grand_tot = document.getElementById('grand_tot')
            const gtotal = document.getElementById('gtotal')
            const subtot = parseFloat(document.getElementById('subtot').getAttribute('data-subtot'));
            let ongkir = 0

            if (deliv_schedule_address == "null") {
                alert('Delivery address is required')
                location.reload()
            } else {
                ongkir = deliv_schedule_address + deliv_schedule

                tot_shipping.innerHTML = "Rp." + new Intl.NumberFormat('id-ID').format(ongkir);

                grandto_tot = subtot + ongkir
                gtotal.value = grandto_tot
                grand_tot.innerHTML = "Rp." + new Intl.NumberFormat('id-ID').format(grandto_tot);
            }
        });

        document.getElementById('checkout').addEventListener('click', async function() {
            let email = document.getElementById('email').value
            let bill_country = document.getElementById('bill_country').value
            let bill_firstName = document.getElementById('bill_firstName').value
            let bill_lastName = document.getElementById('bill_lastName').value
            let bill_phoneNumber = document.getElementById('bill_phoneNumber').value
            let bill_address = document.getElementById('bill_address').value
            let bill_province = document.getElementById('bill_province').value
            let bill_city = document.getElementById('bill_city').value
            let bill_company = document.getElementById('bill_company').value
            let bill_subdistrict = document.getElementById('bill_subdistrict').value
            let delivery_date = document.getElementById('delivery-date').value
            let delivery_schedule_address = document.getElementById('delivery-schedule-address').value
            let delivery_schedule = document.getElementById('delivery-schedule').value
            let delivery_note_textarea = document.getElementById('delivery-note-textarea').value
            let delivery_address = document.getElementById('delivery_address').value
            let gtotal = document.getElementById('gtotal').value
            let delivery_firstName = document.getElementById('delivery_firstName').value
            let delivery_lastName = document.getElementById('delivery_lastName').value
            let delivery_phone = document.getElementById('delivery_phone').value

            const cartData = this.getAttribute('data-cart');
            const cart = JSON.parse(cartData);

            await fetch("{{ route('transaction.add') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        products: cart,
                        total_amount: gtotal,
                        email: email,
                        bill_country: bill_country,
                        bill_company: bill_company,
                        bill_firstName: bill_firstName,
                        bill_lastName: bill_lastName,
                        bill_phoneNumber: bill_phoneNumber,
                        bill_address: bill_address,
                        bill_province: bill_province,
                        bill_city: bill_city,
                        delivery_firstName: delivery_firstName,
                        delivery_lastName: delivery_lastName,
                        delivery_phone: delivery_phone,
                        bill_subdistrict: bill_subdistrict,
                        delivery_address: delivery_address,
                        delivery_date: delivery_date,
                        delivery_schedule_address: delivery_schedule_address,
                        delivery_schedule: delivery_schedule,
                        delivery_note_textarea: delivery_note_textarea,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    window.snap.pay(data.token)
                });
        });
    </script>
