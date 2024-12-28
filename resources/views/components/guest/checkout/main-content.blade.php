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
                        <form class="formCheckOut" method="POST">
                            @csrf
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
<<<<<<< HEAD
                <!-- /Checkout Panel Contact --> <!-- Checkout Shipping Address -->
                <div class="checkout-panel">
                    <h5 class="title-checkout">Shipping Address</h5>
                    <div class="row">

                        <!-- Country-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country" class="form-label">Country</label>
<<<<<<< HEAD
                                <select name="country" class="form-select" id="sa_country" required="">
=======
                                <select class="form-select" name="shipping_country" id="country" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>


                        <!-- First Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="sa_firstName" class="form-label">First name</label>
                                <input type="text" name="firstName" class="form-control" id="sa_firstName" placeholder="" value=""
=======
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" name="shipping_first_name" class="form-control" id="firstName" placeholder="" value=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    required="">
                            </div>
                        </div>

                        <!-- Last Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="sa_lastName" class="form-label">Last name</label>
                                <input type="text" name="lastName" class="form-control" id="sa_lastName" placeholder="" value=""
=======
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" name="shipping_last_name" class="form-control" id="lastName" placeholder="" value=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    required="">
                            </div>
                        </div>

                        <!-- phonenumber-->
                        <div class="col-12">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="sa_phone" class="form-label">Phone Number</label>
                                <input type="number" name="phone_number" class="form-control" id="sa_phone" placeholder="" required="">
=======
                                <label for="address" class="form-label">Phone Number</label>
                                <input type="number" name="shipping_phone_number" class="form-control" id="number" placeholder="" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                            </div>
                        </div>

                        <!-- Company-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="sa_company" class="form-label">Company <span class="text-muted"
                                        style="font-size: 0.85em;">(optional)</span></label>
<<<<<<< HEAD
                                <input type="text" name="company_name" class="form-control" id="sa_company" placeholder="" required="">
=======
                                <input type="text" name="shipping_data_company" class="form-control" id="address" placeholder="" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                            </div>
                        </div>

                        <!-- Address-->
                        <div class="col-12">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="sa_address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="sa_address"
=======
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="shipping_data_address" class="form-control" id="address"
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    placeholder="123 Some Street Somewhere" required="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="sa_province" class="form-label">Province</label>
                                <select name="provinsi" class="form-select" id="sa_province" required="">
=======
                                <label for="province" class="form-label">Province</label>
                                <select name="shipping_data_provinsi" class="form-select" id="province" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    <option value="" disabled selected>Please Select...</option>
                                    <!-- Provinces will be populated here -->
                                </select>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-md-4">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="sa_city" class="form-label">City</label>
                                <select name="city" class="form-select" id="sa_city" required="">
=======
                                <label for="city" class="form-label">City</label>
                                <select class="form-select" name="shipping_data_city" id="city" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>

                        <!-- Postal Code (State/Territory) -->
                        <div class="col-md-4">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="sa_zip" class="form-label">Postal Code</label>
                                <input type="text" name="pos_code" class="form-control" id="sa_zip" placeholder=""
=======
                                <label for="zip" class="form-label">Postal Code</label>
                                <input type="text" name="shipping_data_zip" class="form-control" id="zip" placeholder=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    required="">
                            </div>
                        </div>


                    </div>

                    <div class="pt-4 mt-4 border-top d-flex justify-content-between align-items-center">
                        <!-- Shipping Same Checkbox-->
                        <div class="form-group form-check m-0">
<<<<<<< HEAD
                            <input type="checkbox" name="use_for_bill" class="form-check-input" id="same-address" checked>
=======
                            <input name="use_for_billing_address" type="checkbox" class="form-check-input" id="same-address" checked>
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                            <label class="form-check-label" for="same-address">Use for billing address</label>
                        </div>
                    </div>
                </div>
=======
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                <!-- /Checkout Shipping Address --> <!-- Checkout Billing Address-->
                <div class="billing-address checkout-panel">
                    <h5 class="title-checkout">Billing Address</h5>
                    <div class="row">

                        <!-- Country-->
                        <div class="col-md-12">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="bill_country" class="form-label">Country</label>
                                <select class="form-select" name="country_bill" id="bill_country" required="">
=======
                                <label for="country" class="form-label">Country</label>
                                <select name="bill_data_country" class="form-select" id="country" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>


                        <!-- First Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="bill_firstName" class="form-label">First name</label>
                                <input type="text" name="firstName_bill" class="form-control" id="bill_firstName" placeholder=""
=======
                                <label for="firstName" class="form-label">First name</label>
<<<<<<< HEAD
                                <input name="bill_data_firstname" type="text" class="form-control" id="firstName" placeholder=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    value="" required="">
=======
                                <input name="bill_data_firstname" type="text" class="form-control" id="firstName"
                                    placeholder="" value="" required="">
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                            </div>
                        </div>

                        <!-- Last Name-->
                        <div class="col-sm-6">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="bill_lastName" class="form-label">Last name</label>
                                <input type="text" name="lastName_bill" class="form-control" id="bill_lastName" placeholder=""
=======
                                <label for="lastName" class="form-label">Last name</label>
<<<<<<< HEAD
                                <input name="bill_data_lastname" type="text" class="form-control" id="lastName" placeholder=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    value="" required="">
=======
                                <input name="bill_data_lastname" type="text" class="form-control" id="lastName"
                                    placeholder="" value="" required="">
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                            </div>
                        </div>

                        <!-- phonenumber-->
                        <div class="col-12">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="bill_phone" class="form-label">Phone Number</label>
                                <input type="number" name="phone_bill" class="form-control" id="bill_phone" placeholder=""
=======
                                <label for="address" class="form-label">Phone Number</label>
<<<<<<< HEAD
                                <input name="bill_data_phone" type="number" class="form-control" id="number" placeholder=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    required="">
=======
                                <input name="bill_data_phone" type="number" class="form-control" id="number"
                                    placeholder="" required="">
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                            </div>
                        </div>

                        <!-- Company-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bill_company" class="form-label">Company <span class="text-muted"
                                        style="font-size: 0.85em;">(optional)</span></label>
<<<<<<< HEAD
<<<<<<< HEAD
                                <input type="text" name="company_bill" class="form-control" id="bill_company" placeholder=""
=======
                                <input name="bill_data_company" type="text" class="form-control" id="address" placeholder=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    required="">
=======
                                <input name="bill_data_company" type="text" class="form-control" id="address"
                                    placeholder="" required="">
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                            </div>
                        </div>

                        <!-- Address-->
                        <div class="col-12">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="bill_address" class="form-label">Address</label>
                                <input type="text" name="address_bill" class="form-control" id="bill_address"
=======
                                <label for="address" class="form-label">Address</label>
                                <input name="bill_data_address" type="text" class="form-control" id="address"
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    placeholder="123 Some Street Somewhere" required="">
                            </div>
                        </div>
                        <!-- Province -->
                        <div class="col-md-4">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="bill_province" class="form-label">Province</label>
                                <select class="form-select" name="provinsi_bill" id="bill_province" required="">
=======
                                <label for="province" class="form-label">Province</label>
<<<<<<< HEAD
                                <select name="bill_data_provinsi" class="form-select" id="province" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                    <option value="" disabled selected>Please Select...</option>
                                    <!-- Provinces will be populated here -->
                                </select>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-md-4">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="bill_city" class="form-label">City</label>
                                <select class="form-select" name="city_bill" id="bill_city" required="">
=======
                                <label for="city" class="form-label">City</label>
                                <select name="bill_data_city" class="form-select" id="city" required="">
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
=======
                                <select name="bill_data_province" class="form-select" id="province" required="">
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>

                        <!-- City (Regency) -->
                        <div class="col-md-4">
                            <div class="form-group">
<<<<<<< HEAD
<<<<<<< HEAD
                                <label for="bill_zip" class="form-label">Postal Code</label>
                                <input type="text" name="pos_bill" class="form-control" id="bill_zip" placeholder=""
=======
                                <label for="zip" class="form-label">Postal Code</label>
                                <input type="text" name="bill_data_zip" class="form-control" id="zip" placeholder=""
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
=======
                                <label for="zip" class="form-label">City</label>
                                <select name="bill_data_city" class="form-select" id="City" required="">
                                    <option value="" disabled selected>Please Select...</option>
                                </select>
                            </div>
                        </div>

                        <!-- Subdistrict and Postal Code (Kelurahan) -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subdistrict" class="form-label">Subdistrict/Postal Code</label>
                                <select name="bill_data_subdistrict" class="form-select" id="subdistrict"
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
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
                            <label for="delivery-date" class="form-label">Delivery Date</label>
<<<<<<< HEAD
<<<<<<< HEAD
                            <input type="date" name="date_deliv"  class="form-control" id="delivery-date" min="<?= date('Y-m-d') ?>"
=======
                            <input name="deliv_date" type="date" class="form-control" id="delivery-date" min="<?= date('Y-m-d') ?>"
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                required>
=======
                            <input name="deliv_date" type="date" class="form-control" id="delivery-date"
                                min="<?= date('Y-m-d') ?>" required>
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
<<<<<<< HEAD
                            <label for="delivery-schedule" class="form-label">Delivery Schedule</label>
<<<<<<< HEAD
                            <select class="form-select" name="schedule_deliv" id="delivery-schedule" required>
=======
                            <select name="deliv_schedule" class="form-select" id="delivery-schedule" required>
>>>>>>> 79502cff4af5aa1da6a5c4ad4de7ad6abee5aa61
                                <option value="" disabled selected>Select a Delivery Schedule</option>
                                <option value="slot1">Time Slot 1: 9:00 AM - 12:00 PM</option>
                                <option value="slot2">Time Slot 2: 1:00 PM - 5:00 PM</option>
                                <option value="slot3">Time Slot 3: 6:00 PM - 10:00 PM (IDR 50,000)</option>
                                <option value="slot4">Midnight Slot: 10:00 PM - 12:00 AM (IDR 100,000)</option>
                                <option value="slot5">Early Morning: 1:00 AM - 5:00 AM (IDR 200,000)</option>
                                <option value="valentine">Valentine's Delivery: 8:00 AM - 7:00 PM</option>
                                <option value="testing">Testing Slot: 10:00 AM - 12:00 PM (IDR 5,000)</option>
=======
                            <label for="address-selection" class="form-label">Delivery Address  (Postage_Rule)</label>
                            <select name="deliv_schedule_address" class="form-select" id="delivery-schedule-address"
                                required>
                                <option value="" disabled selected>Select an Delivery Address</option>
                                @foreach ($addressPostageRules as $rule)
                                    <option value="{{ $rule->id }}">{{ $rule->postage_rule }} - Rp
                                        {{ number_format($rule->price, 0, ',', '.') }}</option>
                                @endforeach
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
                            </select>
                            <div id="delivery-schedule-error" class="text-danger mt-2"></div>
                        </div>
                    </div>
                    <!-- Date delivery-->
<<<<<<< HEAD
                    <label for="delivery-note" class="form-label mb-3">Delivery Note</label>

                    <!-- Delivery Notes-->
                    <div class="form-check form-group form-radio-custom mb-3 ">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodOne" checked>
                        <label class="form-check-label" for="checkoutShippingMethodOne">
                            <span class="d-flex justify-content-between align-items-start w-100">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Contact the recipient before delivery </span>
                                </span>
                            </span>
                        </label>
                    </div>

                    <!-- Delivery Notes-->
                    <div class="form-check form-group form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodTwo">
                        <label class="form-check-label" for="checkoutShippingMethodTwo">
                            <span class="d-flex justify-content-between align-items-start">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Do not contact the recipient. If the recipient
                                        is not there</span>
                                </span>
                            </span>
                        </label>
                    </div>

                    <!-- Delivery Notes-->
                    <div class="form-check form-group  form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodThree">
                        <label class="form-check-label" for="checkoutShippingMethodThree">
                            <span class="d-flex justify-content-between align-items-start">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Just hit the door if it doesn't open</span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <!-- Delivery Notes-->
                    <div class="form-check form-group  form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodFour">
                        <label class="form-check-label" for="checkoutShippingMethodFour">
                            <span class="d-flex justify-content-between align-items-start">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Leave it at the door, a neighbor or an
                                        officer</span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <!-- Delivery Notes-->

                    <div class="form-check form-group form-radio-custom mb-3">
                        <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                            id="checkoutShippingMethodFive">
                        <label class="form-check-label" for="checkoutShippingMethodFive">
                            <span class="d-flex justify-content-between align-items-center">
                                <span>
                                    <span class="mb-0 fw-bolder d-block">Free Notes</span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <!-- Delivery Notes-->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="deliv-note" class="form-label"> <span
                                    class="small fw-bolder">*Note</span></label>
                            <input name="note_deliv" type="text" class="form-control" id="deliv-note" placeholder="" required>
=======
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="delivery-schedule" class="form-label">Delivery Schedule (Time Slot)</label>
                            <select name="deliv_schedule" class="form-select" id="delivery-schedule" required>
                                <option value="" disabled selected>Select a Delivery Schedule</option>
                                @foreach ($timePostageRules as $rule)
                                    <option value="{{ $rule->id }}">{{ $rule->postage_rule }} - Rp
                                        {{ number_format($rule->price, 0, ',', '.') }}</option>
                                @endforeach
                            </select>
                            <div id="delivery-schedule-error" class="text-danger mt-2"></div>
>>>>>>> 3939e3c28df238a27fa876fa28a509093dadacf5
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
                        <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                            <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                <div class="position-relative f-w-20 border p-2 me-4">
                                    <span class="checkout-item-qty">1</span>
                                    <img src="./assets/images/products/product-1.jpg" alt=""
                                        class="rounded img-fluid">
                                </div>
                                <div>
                                    <p class="mb-1 fs-6 fw-bolder">Mens StormBreaker Jacket</p>
                                    <span class="fs-xs text-uppercase fw-bolder text-muted">Mens / Blue / Medium</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 fw-bolder">
                                <span>$1129.99</span>
                            </div>
                        </div>
                        <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                            <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                <div class="position-relative f-w-20 border p-2 me-4">
                                    <span class="checkout-item-qty">2</span>
                                    <img src="./assets/images/products/product-2.jpg" alt=""
                                        class="rounded img-fluid">
                                </div>
                                <div>
                                    <p class="mb-1 fs-6 fw-bolder">North Face Jacket</p>
                                    <span class="fs-xs text-uppercase fw-bolder text-muted">Mens / Blue / Large</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 fw-bolder">
                                <span>$999.98</span>
                            </div>
                        </div>
                        <div class="d-none d-md-flex justify-content-between align-items-start py-2">
                            <div class="d-flex flex-grow-1 justify-content-start align-items-start">
                                <div class="position-relative f-w-20 border p-2 me-4">
                                    <span class="checkout-item-qty">1</span>
                                    <img src="./assets/images/products/product-4.jpg" alt=""
                                        class="rounded img-fluid">
                                </div>
                                <div>
                                    <p class="mb-1 fs-6 fw-bolder">Womens Adidas Hoodie</p>
                                    <span class="fs-xs text-uppercase fw-bolder text-muted">Womens / Red /
                                        Medium</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 fw-bolder">
                                <span>$59.99</span>
                            </div>
                        </div>
                        <!-- / Cart Item-->
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 fw-bolder fs-6">Subtotal</p>
                            <p class="m-0 fs-6 fw-bolder">$422.99</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center ">
                            <p class="m-0 fw-bolder fs-6">Shipping</p>
                            <p class="m-0 fs-6 fw-bolder">postage + time slot</p>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 fw-bold fs-5">Grand Total</p>
                                <span class="text-muted small">Inc $45.89 sales tax</span>
                            </div>
                            <p class="m-0 fs-5 fw-bold">$422.99</p>
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
                    <a href="#" id="checkoutButton" class="btn btn-dark w-100" role="button">Complete Order</a>
                </form>
                </div>
            </div>
            <!-- /Checkout Panel Summary -->
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <script>
        const checkoutButton = document.querySelector('#checkoutButton');
        const formCheckOut = document.querySelector('#formCheckOut');
        checkoutButton.disabled = true;

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


        document.addEventListener("DOMContentLoaded", function() {
            const countrySelect = document.getElementById('country');

            // Fetch countries from API
            fetch('https://restcountries.com/v3.1/all')
                .then(response => response.json())
                .then(data => {
                    // Loop through the countries and add them to the dropdown
                    data.forEach(country => {
                        const option = document.createElement('option');
                        option.value = country.name
                            .common; // or any other property you want to use as value
                        option.textContent = country.name.common; // or you can use the native name
                        countrySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching countries:', error);
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
                    populateDropdown('province', data, 'Please Select Province...');
                })
                .catch(error => console.error('Error fetching provinces:', error));
        }

        // Fetch data kota/kabupaten berdasarkan provinsi
        function fetchRegencies(provinceId) {
            fetch(`${API_BASE_URL}/regencies/${provinceId}.json`)
                .then(response => response.json())
                .then(data => {
                    populateDropdown('City', data, 'Please Select City...');
                })
                .catch(error => console.error('Error fetching regencies:', error));
        }

        // Fetch data kecamatan/kelurahan berdasarkan kota/kabupaten
        function fetchDistricts(regencyId) {
            fetch(`${API_BASE_URL}/districts/${regencyId}.json`)
                .then(response => response.json())
                .then(data => {
                    populateDropdown('subdistrict', data, 'Please Select Subdistrict...');
                })
                .catch(error => console.error('Error fetching districts:', error));
        }

        // Event listener untuk perubahan pada dropdown provinsi
        document.getElementById('province').addEventListener('change', function() {
            const provinceId = this.value;
            if (provinceId) {
                fetchRegencies(provinceId);
                document.getElementById('City').innerHTML =
                    '<option value="" disabled selected>Loading...</option>';
                document.getElementById('subdistrict').innerHTML =
                    '<option value="" disabled selected>Please Select Subdistrict...</option>';
            }
        });

        // Event listener untuk perubahan pada dropdown kota/kabupaten
        document.getElementById('City').addEventListener('change', function() {
            const regencyId = this.value;
            if (regencyId) {
                fetchDistricts(regencyId);
                document.getElementById('subdistrict').innerHTML =
                    '<option value="" disabled selected>Loading...</option>';
            }
        });

        // Inisialisasi: fetch data provinsi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', fetchProvinces);
    </script>
