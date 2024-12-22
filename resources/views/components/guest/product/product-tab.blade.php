        <section>

            <!-- Product Tabs-->
            <div class="mt-7 pt-5 border-top">
                <div class="container">
                    <!-- Tab Nav-->
                    <ul class="nav justify-content-center nav-tabs nav-tabs-border mb-4" id="myTab" role="tablist">
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0 active" id="details-tab"
                                data-bs-toggle="tab" href="#details" role="tab" aria-controls="details"
                                aria-selected="true">Details</a>
                        </li>
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="reviews-tab"
                                data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                aria-selected="false">Review</a>
                        </li>
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="delivery-tab"
                                data-bs-toggle="tab" href="#delivery" role="tab" aria-controls="delivery"
                                aria-selected="false">Delivery</a>
                        </li>
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="returns-tab"
                                data-bs-toggle="tab" href="#returns" role="tab" aria-controls="returns"
                                aria-selected="false">Return</a>
                        </li>
                    </ul>
                    <!-- / Tab Nav-->

                    <!-- Tab Content-->
                    <div class="tab-content" id="myTabContent">

                        <!-- Tab Details Content -->
                        <div class="tab-pane fade show active py-5" id="details" role="tabpanel"
                            aria-labelledby="details-tab">
                            <div class="col-12 col-lg-10 mx-auto">
                                <div class="row g-5">
                                    <!-- Product Description -->
                                    <div class="col-12 col-md-6">
                                        <p style="text-align: justify;">
                                            {{ $product->product_description ?? 'No description available for this product.' }}
                                        </p>

                                    </div>
                                    <!-- Consist Of -->
                                    <div class="col-12 col-md-6">
                                        <ul>
                                            @if (!empty($product->consist_of))
                                                @foreach (explode(',', $product->consist_of) as $item)
                                                    <li>{{ trim($item) }}</li>
                                                @endforeach
                                            @else
                                                <li>No additional information available.</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Details Content-->

                        <!-- Review Tab Content-->
                        <div class="tab-pane fade py-5" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <!-- Customer Reviews-->
                            <section class="reviews">
                                <div class="col-lg-12 text-center pb-5">

                                    <h2 class="fs-1 fw-bold d-flex align-items-center justify-content-center">
                                        {{ number_format($averageRating, 2) }}
                                        <small class="text-muted fw-bolder ms-3 fw-bolder fs-6">({{ $reviewCount }}
                                            ulasan)</small>
                                    </h2>
                                    <div class="d-flex justify-content-center">
                                        <!-- Review Stars Medium-->
                                        <div class="rating position-relative d-table">
                                            <div class="position-absolute stars" style="width: {{ $product->reviews->avg('rating') * 20 }}%">
                                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                            </div>
                                            <div class="stars">
                                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review Modal-->
                                    <button type="button"
                                        class="btn btn-dark mt-4 hover-lift-sm hover-boxshadow disable-child-pointer"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasReview"
                                        aria-controls="offcanvasReview">
                                        Create a Review<i class="ri-discuss-line align-bottom ms-1"></i>
                                    </button>
                                    <!-- / Review Modal Button-->

                                </div>

                                <!-- Single Review-->
                                <!-- Reviews Section -->
                                @if ($product->reviews->count() > 0)
                                    @foreach ($product->reviews as $review)
                                        <!-- Single Review -->
                                        <article class="py-5 border-bottom border-top">
                                            <div class="row">
                                                <!-- Reviewer Info -->
                                                <div class="col-12 col-md-4">
                                                    <small class="text-muted fw-bolder">
                                                        {{ \Carbon\Carbon::parse($review->created_at)->format('d/m/Y') }}
                                                    </small>
                                                    <p class="fw-bolder">
                                                        {{ $review->customer_name ?? 'Anonymous' }},
                                                        Indonesia
                                                    </p>
                                                    <span
                                                        class="bg-success-faded fs-xs fw-bolder text-uppercase p-2">Verified
                                                        Customer</span>
                                                </div>
                                                <!-- Review Content -->
                                                <div class="col-12 col-md-8 mt-4 mt-md-0">
                                                    <!-- Review Stars -->
                                                    <div class="rating position-relative d-table">
                                                        <div class="position-absolute stars"
                                                            style="width: {{ ($review->rating / 5) * 100 }}%">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                            @endfor
                                                        </div>
                                                        <div class="stars">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <!-- Review Title & Text -->
                                                    <p class="fw-bolder mt-4">
                                                        {{ $review->review_title ?? 'Great Product' }}</p>
                                                    <p>{{ $review->review }}</p>

                                                    <!-- Recommendation -->
                                                    <small class="fw-bolder bg-light d-table rounded py-1 px-2">
                                                        'Yes, I would recommend the product'
                                                    </small>

                                                    <!-- Review Actions -->
                                                    <div
                                                        class="d-block d-md-flex mt-3 justify-content-between align-items-center">
                                                        {{-- <a href="#" class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start">
                                                        <small>Was this review helpful?
                                                            <i class="ri-thumb-up-line ms-4"></i> {{ $review->likes ?? 0 }}
                                                            <i class="ri-thumb-down-line ms-2"></i> {{ $review->dislikes ?? 0 }}
                                                        </small>
                                                    </a> --}}
                                                        <a href="#"
                                                            class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start mt-3 mt-md-0">
                                                            <small>Flag as inappropriate <i
                                                                    class="ri-flag-2-line ms-2"></i></small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- /Single Review -->
                                    @endforeach
                                @else
                                    <p class="text-center py-5">No reviews yet. Be the first to write one!</p>
                                @endif

                                <!-- /Single Review-->


                                <a href="#"
                                    class="btn btn-dark d-table mx-auto mt-6 mb-3 hover-lift-sm hover-boxshadow"
                                    title="">Load More
                                    Reviews</a>
                                <p class="text-muted text-center fw-bolder">Showing 3 of 1234</p>

                            </section>
                        </div>
                        <!-- / Review Tab Content-->

                        <!-- Delivery Tab Content-->
                        <div class="tab-pane fade py-5" id="delivery" role="tabpanel"
                            aria-labelledby="delivery-tab">
                            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                                <p>We are now offering contact-free delivery so that you can still receive your parcels
                                    safely without requiring a
                                    signature. Please see below for the available delivery methods, costs and
                                    timescales.</p>
                                <ul class="list-group list-group-flush mb-4">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center px-0 py-4 bg-transparent">
                                        <div>
                                            <span class="fw-bolder d-block">Standard Delivery</span>
                                            <span class="text-muted">Delivery within 5 days of placing your
                                                order.</span>
                                        </div>
                                        <p class="m-0 lh-1 fw-bolder">$12.99</p>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center px-0 py-4 bg-transparent">
                                        <div>
                                            <span class="fw-bolder d-block">Priority Delivery</span>
                                            <span class="text-muted">Delivery within 2 days of placing your
                                                order.</span>
                                        </div>
                                        <p class="m-0 lh-1 fw-bolder">$17.99</p>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center px-0 py-4 bg-transparent">
                                        <div>
                                            <span class="fw-bolder d-block">Next Day Delivery</span>
                                            <span class="text-muted">Delivery within 24 hours of placing your
                                                order.</span>
                                        </div>
                                        <p class="m-0 lh-1 fw-bolder">$33.99</p>
                                    </li>
                                </ul>
                                <div class="bg-light rounded p-3">
                                    <p class="fs-6">Form more information, please see our delivery FAQs <a
                                            href="#">here</a></p>
                                    <p class="m-0 fs-6">If you do not find the answer to your query, please contact our
                                        customer support team on
                                        <b>0800 123 456</b> or email us at <b>support@domain.com</b>. We aim to respond
                                        within 48 hours to queries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- / Delivery Tab Content-->

                        <!-- Returns Tab Content-->
                        <div class="tab-pane fade py-5" id="returns" role="tabpanel"
                            aria-labelledby="returns-tab">
                            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                                <p>We believe you will completely happy with your item, however if you aren't, there's
                                    no need to worry. We've
                                    listed below the ways you can return your item to us.</p>
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item px-0 py-4 bg-transparent">
                                        <p class="fw-bolder">Return via post</p>
                                        <p class="fs-6">To return your items for free through the postal system,
                                            please complete the returns form that
                                            comes with your order. You'll find a label at the bottom of the form. Simply
                                            peel the label and head to your
                                            nearest post office.</p>
                                    </li>
                                    <li class="list-group-item px-0 py-4 bg-transparent">
                                        <p class="fw-bolder">Return in person</p>
                                        <p class="fs-6">To return your items for free in person, simply stop into any
                                            one of our locations and speak
                                            to a member of our in-store team.</p>
                                    </li>
                                </ul>
                                <div class="bg-light rounded p-3">
                                    <p class="fs-6">Form more information, please see our returns FAQs <a
                                            href="#">here</a></p>
                                    <p class="m-0 fs-6">If you do not find the answer to your query, please contact our
                                        customer support team on
                                        <b>0800 123 456</b> or email us at <b>support@domain.com</b>. We aim to respond
                                        within 48 hours to queries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- / Returns Tab Content-->

                    </div>
                    <!-- / Tab Content-->
                </div>
            </div>
            <!-- / Product Tabs-->

        </section>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasReview">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasReviewLabel">Leave A Review</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Flash Message -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Review Form -->
                <form action="{{ route('product_reviews.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_product_id" value="{{ $product->id }}">

                    <!-- Review Title Input -->
                    <div class="form-group mb-3">
                        <label class="form-label" for="review_title">Review Title</label>
                        <input type="text" class="form-control @error('review_title') is-invalid @enderror" name="review_title" id="review_title" placeholder="Enter review title" value="{{ old('review_title') }}" required>
                        @error('review_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Customer Name Input -->
                    <div class="form-group mb-3">
                        <label class="form-label" for="customer_name">Your Name</label>
                        <input type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" id="customer_name" placeholder="Enter your name" value="{{ old('customer_name') }}" =>
                        @error('customer_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Rating Input -->
                    <div class="form-group mb-3">
                        <label class="form-label" for="rating">Rating</label>
                        <select class="form-control @error('rating') is-invalid @enderror" name="rating" id="rating" required>
                            <option value="">Select Rating</option>
                            <option value="1" @if(old('rating') == 1) selected @endif>1 Star</option>
                            <option value="2" @if(old('rating') == 2) selected @endif>2 Stars</option>
                            <option value="3" @if(old('rating') == 3) selected @endif>3 Stars</option>
                            <option value="4" @if(old('rating') == 4) selected @endif>4 Stars</option>
                            <option value="5" @if(old('rating') == 5) selected @endif>5 Stars</option>
                        </select>
                        @error('rating')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Review Input -->
                    <div class="form-group mb-3">
                        <label class="form-label" for="review">Your Review</label>
                        <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="review" rows="5" placeholder="Write your review here" required>{{ old('review') }}</textarea>
                        @error('review')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark">Submit Review</button>
                </form>
            </div>
        </div>
