    <!-- Main Section-->
    <section class="mb-9 mt-5 container " >
        <!-- Page Content Goes Here -->



        <div class="row g-md-8 mt-4">
            <h1 class="mb-4 display-5 fw-bold text-center">Checkout Your Flower Order Securely</h1>
            <p class="text-center mx-auto">Please provide the details below to complete your flower order.
            </p>
            <!-- Checkout Panel Left -->
            <div class="col-12 col-lg-6 col-xl-7">
                <!-- Checkout Panel Contact -->
                <div class="checkout-panel-checkout">
                    <h5 class="title-checkout">Contact Information</h5>
                    <div class="row">

                        <!-- Email-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    value="ujangwahyudi@gmail.com" placeholder="you@example.com" required>
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
                                    <option value="ID" selected>Indonesia</option>
                                    <!-- Indonesia is now the default option -->
                                </select>
                            </div>
                        </div>

                        <!-- First Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bill_firstName" class="form-label">First name</label>
                                <input name="bill_data_firstname" type="text" class="form-control" value="Ujang"
                                    id="bill_firstName" placeholder="John" required>
                                <div class="invalid-feedback">Please enter your first name.</div>
                            </div>
                        </div>

                        <!-- Last Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bill_lastName" class="form-label">Last name</label>
                                <input name="bill_data_lastname" type="text" class="form-control" id="bill_lastName"
                                    value="Wahyudi" placeholder="Doe" required>
                                <div class="invalid-feedback">Please enter your last name.</div>
                            </div>
                        </div>

                        <!-- Phone Number-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bill_phoneNumber" class="form-label">Phone Number</label>
                                <input name="bill_data_phone" type="number" class="form-control" id="bill_phoneNumber"
                                    value="085776703145" placeholder="+628123456789" required>
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>
                        </div>

                        <!-- Company-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bill_company" class="form-label">Company <span class="text-muted"
                                        style="font-size: 0.85em;">(optional)</span></label>
                                <input name="bill_data_company" type="text" class="form-control" id="bill_company"
                                    value="PT. Sarana Digital Ritel" placeholder="Your Company Name">
                            </div>
                        </div>

                        <!-- Address-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bill_address" class="form-label">Address</label>
                                <input name="bill_data_address" type="text" class="form-control" id="bill_address"
                                    value="Karawang" placeholder="123 Some Street Somewhere" required>
                                <div class="invalid-feedback">Please enter your address.</div>
                            </div>
                        </div>

                        <!-- Province -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bill_province" class="form-label">Province</label>
                                <select name="bill_data_province" class="form-select" id="bill_province" required>
                                    <option value="" disabled selected>Please Select a Province...</option>
                                </select>
                                <div class="invalid-feedback">Please select a province.</div>
                            </div>
                        </div>

                        <!-- City (Regency) -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bill_city" class="form-label">City</label>
                                <select name="bill_data_city" class="form-select" id="bill_city" required>
                                    <option value="" disabled selected>Please Select a City...</option>
                                </select>
                                <div class="invalid-feedback">Please select a city.</div>
                            </div>
                        </div>

                        <!-- Subdistrict and Postal Code (Kelurahan) -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bill_subdistrict" class="form-label">Subdistrict/Postal Code</label>
                                <select name="bill_data_subdistrict" class="form-select" id="bill_subdistrict"
                                    required>
                                    <option value="" disabled selected>Please Select a Subdistrict...</option>
                                </select>
                                <div class="invalid-feedback">Please select a subdistrict or postal code.</div>
                            </div>
                        </div>

                        <!-- Hidden inputs to store the names -->
                        <input type="hidden" id="bill_province_name" name="bill_data_province_name">
                        <input type="hidden" id="bill_city_name" name="bill_data_city_name">
                        <input type="hidden" id="bill_subdistrict_name" name="bill_data_subdistrict_name">


                    </div>
                </div> <!-- / Checkout Billing Address--> <!-- Checkout Shipping Method-->
                <div class="checkout-panel">
                    <h5 class="title-checkout">Delivery</h5>

                    <!-- Date delivery-->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_firstName" class="form-label">First Name</label>
                            <input name="delivery_firstName" type="text" class="form-control" value="Syifa"
                                id="delivery_firstName" placeholder="Enter your first name" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_lastName" class="form-label">Last Name</label>
                            <input name="delivery_lastName" type="text" class="form-control" value="Hadju"
                                id="delivery_lastName" placeholder="Enter your last name" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_phone" class="form-label">WhatsApp Number</label>
                            <input name="delivery_phone" type="number" class="form-control" id="delivery_phone"
                                value="085776773241" placeholder="Enter your WhatsApp number" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery-date" class="form-label">Delivery Date</label>
                            <input name="deliv_date" type="date" class="form-control" id="delivery-date"
                                placeholder="Select a delivery date" min="<?= date('Y-m-d') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery_address" class="form-label">Delivery Address</label>
                            <textarea class="form-control" id="delivery_address" rows="4" aria-valuetext="Jakarta"
                                placeholder="Write your detailed address here..." required></textarea>
                        </div>
                    </div>


                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="address-selection" class="form-label">Delivery Address (Postage_Rule)</label>
                            <select name="deliv_schedule_address" class="form-select" id="delivery-schedule-address"
                                required>
                                <option id="delivery-schedule-address" value="null" disabled selected>Select an
                                    Delivery Address</option>
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
                                <option id="delivery-schedule" value="null" disabled selected>Select a Delivery
                                    Schedule</option>
                                @foreach ($timePostageRules as $rule)
                                    <option id="delivery-schedule" value="{{ $rule }}">
                                        {{ $rule->postage_rule }} - Rp
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
                                aria-valuetext="I love you"></textarea>
                        </div>
                    </div>

                </div>
                <!-- /Checkout Shipping Method --> <!-- Checkout Payment Method-->
                <div class="checkout-panel">
                    <h5 class="title-checkout">Payment Method</h5>

                    <div class="row">

                        <!-- Payment Option for Virtual Account -->
                        <div class="col-12">
                            <div class="form-check form-group form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentVirtualAccount" value="bank_transfer">
                                <label class="form-check-label" for="checkoutPaymentVirtualAccount">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span class="mb-0 fw-bolder d-block">Virtual Account</span>
                                        <i class="ri-bank-card-line"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Payment Option for Credit Card -->
                        <div class="col-12">
                            <div class="form-check form-group form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentCreditCard" value="credit_card">
                                <label class="form-check-label" for="ccheckoutPaymentCreditCard">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span class="mb-0 fw-bolder d-block">Credit Card</span>
                                        <i class="ri-bank-card-line"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <!-- Payment Option-->
                        {{-- <div class="col-12">
                            <div class="form-check form-group form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentStripe" value="credit_card">
                                <label class="form-check-label" for="checkoutPaymentStripe">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">Credit Card (Stripe)</span>
                                        </span>
                                        <i class="ri-bank-card-line"></i>
                                    </span>
                                </label>
                            </div>
                        </div> --}}

                        <!-- Payment Option for Transfer Bank BCA -->
                        {{-- <div class="col-12">
                            <div class="form-check form-group form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod"
                                    id="checkoutPaymentTransferBank" value="paypal">
                                <label class="form-check-label" for="checkoutPaymentTransferBank">
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span class="me-3">
                                            <span class="mb-0 fw-bolder d-block">Paypal</span>
                                        </span>
                                        <i class="ri-bank-card-line"></i>
                                    </span>
                                </label>
                            </div>
                        </div> --}}

                    </div>

                    <!-- Transfer Bank Info -->
                    <div class="transfer-bank bg-light p-4 d-none mt-3 fw-bolder">
                        Please click on complete order. You will then be transferred to
                        enter your payment details via <strong>Paypal</strong>.
                    </div>

                    <!-- Virtual Account Info -->
                    <div class="virtual-bank bg-light p-4 d-none mt-3 fw-bolder">
                        Please click on complete order. You will then be transferredto
                        enter your payment details via <strong>Virtual Account</strong>.
                    </div>
                    
                    <!-- Credit Card Info -->
                    <div class="credit-card bg-light p-4 d-none mt-3 fw-bolder">
                        Please click on complete order. You will then be transferredto
                        enter your payment details via <strong>Credit Card</strong>.
                    </div>

                    <!-- Payment Details-->
                    <div class="card-details d-none" id="card-details">
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
                            <p class="m-0 fw-bolder fs-6">Delivery</p>
                            <input type="hidden" id="scost">
                            <p class="m-0 fs-6 fw-bolder" id="tot_shipping">shipping + time slot</p>
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
                    {{-- <div class="py-3 border-bottom">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="Enter your coupon code">
                            <button class="btn btn-dark btn-sm px-4">Apply</button>
                        </div>
                    </div> --}}
                    <!-- Accept Terms Checkbox-->
                    <div class="form-group form-check my-4">
                        <input type="checkbox" class="form-check-input" id="accept-terms" checked>
                        <label class="form-check-label fw-bolder" for="accept-terms">I agree to Bloomhouse's <a
                                href="#">terms & conditions</a></label>
                    </div>
                    <a href="#" class="btn btn-dark w-100" data-cart='@json($cart)'
                        id="checkout" role="button">Complete Order</a>

                    {{-- button paypal --}}
                    {{-- <a href="{{ route('paypal.createPayment') }}" class="btn btn-danger w-100" data-cart='@json($cart)'
                         role="button">Complete Order via Paypal</a> --}}
                </div>
            </div>
            <!-- /Checkout Panel Summary -->
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
    <!-- Add JavaScript to handle the display -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentRadioButtons = document.querySelectorAll('input[name="checkoutPaymentMethod"]');
            const cardDetails = document.getElementById('card-details');

            paymentRadioButtons.forEach(button => {
                button.addEventListener('change', function() {
                    if (this.id === 'checkoutPaymentStripe' && this.checked) {
                        cardDetails.classList.remove('d-none');
                    } else {
                        cardDetails.classList.add('d-none');
                    }
                });
            });
        });
    </script>

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
                option.value = item.id; // Tetap gunakan ID sebagai value
                option.setAttribute('data-name', item.name); // Tambahkan atribut data-name untuk nama
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
                const provinceName = this.options[this.selectedIndex].getAttribute(
                    'data-name'); // Ambil nama provinsi
                document.getElementById('bill_province_name').value =
                    provinceName; // Setkan nama provinsi ke input hidden
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
                const cityName = this.options[this.selectedIndex].getAttribute('data-name'); // Ambil nama kota
                document.getElementById('bill_city_name').value = cityName; // Setkan nama kota ke input hidden
                fetchDistricts(regencyId);
            }
        });

        // Event listener untuk perubahan pada dropdown kecamatan
        document.getElementById('bill_subdistrict').addEventListener('change', function() {
            const subdistrictId = this.value;
            if (subdistrictId) {
                const subdistrictName = this.options[this.selectedIndex].getAttribute(
                    'data-name'); // Ambil nama subdistrict
                document.getElementById('bill_subdistrict_name').value =
                    subdistrictName; // Setkan nama subdistrict ke input hidden
            }
        });

        // Fetch provinces on page load
        fetchProvinces();
    </script>


    <script>
        document.getElementById('delivery-schedule').addEventListener('change', function() {

            const deliv_schedule = JSON.parse(this.value);
            const deliv_price = deliv_schedule.price;
            const deliv_schedule_address = parseFloat(document.getElementById('delivery-schedule-address').value)
            const tot_shipping = document.getElementById('tot_shipping')
            const grand_tot = document.getElementById('grand_tot')
            const gtotal = document.getElementById('gtotal')
            const scost = document.getElementById('scost')
            const subtot = parseFloat(document.getElementById('subtot').getAttribute('data-subtot'));
            let ongkir = 0

            if (deliv_schedule_address == "null") {
                alert('Delivery address is required')
                location.reload()
            } else {
                ongkir = deliv_schedule_address + parseFloat(deliv_price)

                scost.value = ongkir

                tot_shipping.innerHTML = "Rp." + new Intl.NumberFormat('id-ID').format(ongkir);

                grandto_tot = subtot + ongkir
                gtotal.value = grandto_tot
                grand_tot.innerHTML = "Rp." + new Intl.NumberFormat('id-ID').format(grandto_tot);
            }
        });

        document.getElementById('checkout').addEventListener('click', async function(e) {
            e.preventDefault();

            const button = this;
            const email = document.getElementById('email').value;
            const scost = document.getElementById('scost').value;
            const bill_country = document.getElementById('bill_country').value;
            const bill_firstName = document.getElementById('bill_firstName').value;
            const bill_lastName = document.getElementById('bill_lastName').value;
            const bill_phoneNumber = document.getElementById('bill_phoneNumber').value;
            const bill_address = document.getElementById('bill_address').value;
            const bill_province = document.getElementById('bill_province').selectedOptions[0].getAttribute(
                'data-name');
            const bill_city = document.getElementById('bill_city').selectedOptions[0].getAttribute('data-name');
            const bill_company = document.getElementById('bill_company').value;
            const bill_subdistrict = document.getElementById('bill_subdistrict').selectedOptions[0]
                .getAttribute('data-name');
            const delivery_date = document.getElementById('delivery-date').value;
            const delivery_schedule_address = document.getElementById('delivery-schedule-address').value;
            const delivery_value = document.getElementById('delivery-schedule').value;
            const delivery_note_textarea = document.getElementById('delivery-note-textarea').value;
            const delivery_address = document.getElementById('delivery_address').value;
            const gtotal = document.getElementById('gtotal').value;
            const delivery_firstName = document.getElementById('delivery_firstName').value;
            const delivery_lastName = document.getElementById('delivery_lastName').value;
            const delivery_phone = document.getElementById('delivery_phone').value;
            const payment_methode = document.querySelector('input[name="checkoutPaymentMethod"]:checked').value;
            let url = "";
            if (payment_methode == 'bank_transfer') {
                url = "{{ route('transaction.add') }}";
            } else if (payment_methode == 'paypal') {
                url = "{{ route('paypal.createPayment') }}";
            } else {
                url = "{{ route('transaction.add') }}";
            }


            const cartData = this.getAttribute('data-cart');
            const cart = JSON.parse(cartData);

            const delivery_schedule_data = JSON.parse(delivery_value)
            const deliv_rule_price = delivery_schedule_data.price;
            const deliv_postage_rule = delivery_schedule_data.postage_rule;

            // SweetAlert2 Konfirmasi
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to complete the order?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, order it!',
                cancelButtonText: 'Cancel'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    // Jika pengguna memilih "Yes", tampilkan loading
                    Swal.fire({
                        title: 'Processing your order...',
                        text: 'Please wait while we process your payment.',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        willOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Proses Fetch
                    await fetch(url, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                products: cart,
                                total_amount: gtotal,
                                shipping_cost: scost,
                                payment_methode: payment_methode,
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
                                delivery_schedule: deliv_rule_price,
                                deliv_postage_rule: deliv_postage_rule,
                                delivery_note_textarea: delivery_note_textarea,
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            Swal.close(); // Tutup loading
                            Swal.fire(
                                'Success!',
                                'Your order has been processed successfully.',
                                'success'
                            ).then(() => {
                                // Kosongkan tampilan cart
                                document.querySelector('#offcanvasCart .offcanvas-body')
                                    .innerHTML = `
            <div class="text-center mt-5">
                <h5>Your cart is empty</h5>
                <p>Add some items to get started!</p>
            </div>
        `;
                                if (data.url) {
                                    window.location.href = data.url;
                                } else {
                                    // Redirect ke Snap payment
                                    window.snap.pay(data.token);
                                }
                            });
                        })
                        .catch(error => {
                            console.log(error);
                            Swal.close(); // Tutup loading
                            Swal.fire(
                                'Error!',
                                'Something went wrong. Please try again.',
                                'error'
                            );
                        });
                } else {
                    // Jika pengguna memilih "Cancel"
                    Swal.fire(
                        'Cancelled',
                        'Your order has not been placed.',
                        'info'
                    );
                }
            });
        });
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            // Cek apakah semua input required sudah diisi
            const requiredFields = document.querySelectorAll(
                'input[required], select[required], textarea[required]');
            let isFormValid = true;

            requiredFields.forEach(function(field) {
                if (!field.value) {
                    isFormValid = false;
                    field.classList.add(
                    'is-invalid'); // Menambahkan class is-invalid untuk menandai field yang belum diisi
                    if (field.closest('.form-group').querySelector('.invalid-feedback') === null) {
                        const errorMessage = document.createElement('div');
                        errorMessage.classList.add('invalid-feedback');
                        errorMessage.textContent = "This field is required.";
                        field.closest('.form-group').appendChild(errorMessage);
                    }
                } else {
                    field.classList.remove(
                    'is-invalid'); // Menghapus class is-invalid jika field sudah diisi
                }
            });

            if (!isFormValid) {
                event.preventDefault(); // Mencegah form submit jika ada field yang belum diisi
                alert('Please fill in all required fields.'); // Menampilkan alert jika ada field yang kosong
            }
        });
    </script>
    <script>
        document.getElementById('checkout').addEventListener('click', function(event) {
            // Reset all input fields to default (no error state)
            const inputs = document.querySelectorAll('input, textarea, select');
            inputs.forEach(input => input.classList.remove('is-invalid'));

            // Flag for overall form validity
            let isValid = true;

            // Required fields validation
            const requiredFields = [{
                    id: 'email',
                    message: 'Please fill out your email.'
                },
                {
                    id: 'bill_firstName',
                    message: 'Please fill out your first name.'
                },
                {
                    id: 'bill_lastName',
                    message: 'Please fill out your last name.'
                },
                {
                    id: 'bill_phoneNumber',
                    message: 'Please fill out your phone number.'
                },
                {
                    id: 'bill_address',
                    message: 'Please fill out your address.'
                },
                {
                    id: 'bill_province',
                    message: 'Please select your province.'
                },
                {
                    id: 'bill_city',
                    message: 'Please select your city.'
                },
                {
                    id: 'bill_subdistrict',
                    message: 'Please select your subdistrict.'
                },
                {
                    id: 'delivery_firstName',
                    message: 'Please fill out the delivery first name.'
                },
                {
                    id: 'delivery_lastName',
                    message: 'Please fill out the delivery last name.'
                },
                {
                    id: 'delivery_phone',
                    message: 'Please fill out the delivery phone number.'
                },
                {
                    id: 'delivery-date',
                    message: 'Please select a delivery date.'
                },
                {
                    id: 'delivery_address',
                    message: 'Please fill out the delivery address.'
                },
                {
                    id: 'delivery-schedule-address',
                    message: 'Please select a delivery address.'
                },
                {
                    id: 'delivery-schedule-address',
                    message: 'Please select a delivery address (postage rule).'
                },
                {
                    id: 'delivery-schedule',
                    message: 'Please select a delivery schedule (time slot).'
                },
            ];

            // Loop through required fields and check if they are filled
            for (let field of requiredFields) {
                const element = document.getElementById(field.id);
                if (!element || !element.value.trim() || element.value === 'null') {
                    element.classList.add('is-invalid'); // Add 'is-invalid' class for invalid fields
                    isValid = false;

                    // Display custom error message in associated error div
                    const errorDiv = document.getElementById(field.id + '-error');
                    if (errorDiv) {
                        errorDiv.textContent = field.message;
                    }
                } else {
                    // Clear error message if the field is valid
                    const errorDiv = document.getElementById(field.id + '-error');
                    if (errorDiv) {
                        errorDiv.textContent = '';
                    }
                }
            }

            // Payment method validation
            const paymentMethod = document.querySelector('input[name="checkoutPaymentMethod"]:checked');
            if (!paymentMethod) {
                isValid = false;
                document.getElementById('payment-method-error').textContent = 'Please select a payment method.';
            } else {
                document.getElementById('payment-method-error').textContent = '';
            }

            // Check if credit card details are required and filled
            const paymentMethodValue = paymentMethod ? paymentMethod.value : '';
            if (paymentMethodValue === 'credit_card') {
                const ccName = document.getElementById('cc-name');
                const ccNumber = document.getElementById('cc-number');
                const ccExpiration = document.getElementById('cc-expiration');
                const ccCvv = document.getElementById('cc-cvv');

                // Validate credit card details
                if (!ccName.value.trim()) {
                    isValid = false;
                    ccName.classList.add('is-invalid');
                    document.getElementById('cc-name-error').textContent = 'Name on card is required.';
                } else {
                    document.getElementById('cc-name-error').textContent = '';
                }

                if (!ccNumber.value.trim()) {
                    isValid = false;
                    ccNumber.classList.add('is-invalid');
                    document.getElementById('cc-number-error').textContent = 'Credit card number is required.';
                } else {
                    document.getElementById('cc-number-error').textContent = '';
                }

                if (!ccExpiration.value.trim()) {
                    isValid = false;
                    ccExpiration.classList.add('is-invalid');
                    document.getElementById('cc-expiration-error').textContent = 'Expiration date is required.';
                } else {
                    document.getElementById('cc-expiration-error').textContent = '';
                }

                if (!ccCvv.value.trim()) {
                    isValid = false;
                    ccCvv.classList.add('is-invalid');
                    document.getElementById('cc-cvv-error').textContent = 'Security code is required.';
                } else {
                    document.getElementById('cc-cvv-error').textContent = '';
                }
            }

            // If not valid, prevent form submission
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>

    <style>
        .is-invalid {
            border: 2px solid red;
            /* Red border for invalid fields */
            background-color: #f8d7da;
            /* Light red background */
        }

        .is-invalid:focus {
            border-color: #dc3545;
            /* Darker red on focus */
        }

        .text-danger {
            color: red;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
