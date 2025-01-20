<!-- Main Section-->
<div class="container">
    <div class="row">
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-lg-last ftco-animate">
                        <div class="row">
                            <!-- Blog 1 -->
                            @foreach ($blogs as $blog)
                                <div class="col-md-12 d-flex ftco-animate">
                                    <div class="blog-entry align-self-stretch d-md-flex content-blog">
                                        <a href="/detail-blog" class="block-20"
                                            style="background-image: url('{{ asset('storage/' . $blog->image) }}');"></a>
                                        <div class="text d-block pl-md-4 mx-4">
                                            <div class="meta mb-3 d-flex">
                                                <div class="me-2"><a href="#">
                                                        {{ $blog->created_at->format('d M Y') }}
                                                    </a></div>
                                                <div class="me-2"><a href="#">Admin</a></div>
                                            </div>
                                            <h3 class="heading title-blog"><a href="#">{{ $blog->title }}</a>
                                            </h3>
                                            <p class="sutitle-blog">
                                                {{ Str::words(strip_tags($blog->content), 25, '...') }}
                                            </p>
                                            <p><a href="{{ route('detail-blog', ['id' => $blog->id]) }}" class="btn btn-primary new py-2 px-3">Read
                                                    more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <div id="pagination-container" class="block-27">
                                    <!-- Pagination links will be dynamically generated here -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 sidebar ftco-animate">
                        <div class="sidebar-box ftco-animate">
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
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const blogs = @json($blogs); // Ambil semua data blog dari backend
        const blogsPerPage = 5; // Jumlah blog per halaman
        const blogContainer = document.getElementById("blog-container");
        const paginationContainer = document.getElementById("pagination-container");

        // Fungsi untuk merender blog pada halaman tertentu
        function renderBlogs(page) {
            const startIndex = (page - 1) * blogsPerPage;
            const endIndex = startIndex + blogsPerPage;
            const blogsToShow = blogs.slice(startIndex, endIndex);

            // Hapus konten lama
            blogContainer.innerHTML = "";

            // Render blog baru
            blogsToShow.forEach(blog => {
                const blogHTML = `
                    <div class="col-md-12 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex content-blog">
                            <a href="/detail-blog/${blog.id}" class="block-20"
                                style="background-image: url('/storage/${blog.image}');"></a>
                            <div class="text d-block pl-md-4 mx-4">
                                <div class="meta mb-3 d-flex">
                                    <div class="me-2"><a href="#">${new Date(blog.created_at).toLocaleDateString()}</a></div>
                                    <div class="me-2"><a href="#">Admin</a></div>
                                </div>
                                <h3 class="heading title-blog">
                                    <a href="/detail-blog/${blog.id}">${blog.title}</a>
                                </h3>
                                <p class="sutitle-blog">${truncateText(blog.content, 25)}</p>
                                <p>
                                    <a href="/detail-blog/${blog.id}" class="btn btn-primary new py-2 px-3">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                `;
                blogContainer.insertAdjacentHTML("beforeend", blogHTML);
            });
        }

        // Fungsi untuk merender pagination
        function renderPagination() {
            const totalPages = Math.ceil(blogs.length / blogsPerPage);

            paginationContainer.innerHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                const pageLink = document.createElement("a");
                pageLink.href = "#";
                pageLink.innerText = i;
                pageLink.classList.add("pagination-link");
                pageLink.dataset.page = i;

                // Tambahkan event listener untuk setiap link
                pageLink.addEventListener("click", function (e) {
                    e.preventDefault();
                    const page = parseInt(this.dataset.page);
                    renderBlogs(page);
                    setActivePage(page);
                });

                paginationContainer.appendChild(pageLink);
            }

            // Set halaman aktif pertama
            setActivePage(1);
        }

        // Fungsi untuk menyorot halaman aktif
        function setActivePage(page) {
            document.querySelectorAll(".pagination-link").forEach(link => {
                link.classList.remove("active");
            });
            document.querySelector(`.pagination-link[data-page="${page}"]`).classList.add("active");

            // Render ulang blogs
            renderBlogs(page);
        }

        // Fungsi untuk memotong teks (truncate)
        function truncateText(text, wordsLimit) {
            const words = text.split(" ");
            return words.length > wordsLimit ? words.slice(0, wordsLimit).join(" ") + "..." : text;
        }

        // Inisialisasi pertama
        renderPagination();
        renderBlogs(1);
    });
</script>
