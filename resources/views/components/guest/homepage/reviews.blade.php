<section>
    <div class="container" data-aos="fade-in">
        <h2 class="fs-1 fw-bold mb-3 text-center mb-5">Latest Blog</h2>
        <div class="row g-3">
            @foreach ($blogs as $blog)
                <div class="col-12 col-lg-4" data-aos="fade-left">
                    <div class="new-box-detail p-4 d-flex h-100 justify-content-start flex-column rounded">
                        <img class="img-responsive mb-3 rounded" src="{{ asset('storage/' . $blog->image) }}"
                            alt="{{ $blog->title }}" />
                        <p class="fw-bolder lead mb-0">{{ $blog->title }}</p>
                        <small class="text-muted d-block mb-2 fw-bolder mb-2 mt-2">
                            {{ $blog->created_at->format('d M Y') }}
                        </small>
                        <p class="mb-3 truncated-content">
                            {{ Str::words(strip_tags($blog->content), 25, '...') }}
                        </p>
<<<<<<< HEAD
                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary new ">Read More</a>
=======
                        <a href="{{ route('detail-blog', $blog->id) }}" class="btn btn-primary new ">Read More</a>
>>>>>>> ead80ec2c38dcc0a22f95a1ee9bdcdb71f680aeb
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
