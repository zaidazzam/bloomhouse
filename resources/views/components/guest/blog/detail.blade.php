<!-- Main Section -->
<div class="container">
    <div class="row">
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ftco-animate blog-detail">
                        <h1 style="font-size: 36px; font-weight: 500">{{ $blogs2->title }}</h1>
                        <span style="font-size: 16px; font-weight: 200">{{ $blogs2->created_at->format('d M Y') }}</span>
                        <center class="my-4">
                            <img class="img-fluid centered-image" src="{{ asset('storage/' . $blogs2->image) }}"
                                alt="{{ $blogs2->title }}" title="{{ $blogs2->title }}">
                        </center>
                        <p>{!! $blogs2->content !!}</p>
                    </div>

                    <div class="col-lg-4 sidebar ftco-animate">
                        <div class="sidebar-box ftco-animate mt-4">
                            <h3 class="heading">Tag Cloud</h3>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="col-lg-12">
            <!-- Blog Comments -->
            <div class="container" data-aos="fade-in">
                <h2 class="fs-1 fw-bold mb-3 text-center mb-5">Other Blog</h2>
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
                                <a href="{{ route('detail-blog', ['id' => $blog->id]) }}" class="btn btn-primary new ">Read
                                    more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <center>
                <div class="btn-semua">
                    <a href="/blog">Semua Artikel</a>
                </div>
            </center>
        </div>
    </div>
</div>
