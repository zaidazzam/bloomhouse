<!-- Bordered Table -->
<style>
    .main-container {
        width: 795px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="card shadow-lg border-0 mb-4" style="background: linear-gradient(135deg, #007bff, #6610f2); color: white;">
    <div class="card-body d-flex align-items-center">
        <div class="me-4">
            <!-- Icon -->
            <div class="icon-container bg-white rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px; height: 60px;">
                <i class="bx bxl-blogger text-primary" style="font-size: 30px;"></i>
            </div>
        </div>
        <div>
            <!-- Title -->
            <h5 class="card-title fw-bold text-dark">Total Blog</h5>
            <!-- Content -->
            <p class="card-text mb-0">
                Total number of blogs available:
            </p>
            <p class="card-text fs-4 mt-2">
                <span class="badge bg-light text-primary p-2 px-3" style="font-size: 1.2rem;">
                    <strong>{{ $countBlogs }}</strong>
                </span>
            </p>
        </div>
    </div>
</div>
<div class="card">
    <div class="d-flex justify-content-between w-100">

        <h5 class="card-header">Blog SEO</h5>

        <div class="d-flex align-items-center">
            <!-- Input Search -->

            <!-- Add Product Button -->
            <button type="button" class="btn btn-primary btn-add-product table-dark1" data-bs-toggle="modal"
                data-bs-target="#addBlogModal">Add Blog</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive table-responsive text-wrap">
            <table id="maintable" class="display cell-border text-nowrap table table-bordered table-striped table-hover"
                cellspacing="0" width="100%">
                <thead class="table-dark1">
                    <tr class="text-center">
                        <th class="text-white">No.</th>
                        <th class="text-white">Title</th>
                        <th class="text-white">Description</th>
                        <th class="text-white">Photo</th>
                        <th class="text-white">Tag</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>

                <tbody id="blog-list">
                    @foreach ($blogs as $blog)
                        <tr class="">
                            <td data-id="{{ $blog->id }}">{{ $loop->iteration }}</td>
                            <td data-title="{{ $blog->title }}">{{ $blog->title }}</td>
                            <td data-content="{{ $blog->content }}">
                                {{ \Illuminate\Support\Str::words($blog->content, 15, '...') }}</td>
                            <td>
                                <img src='{{ asset('/storage/' . $blog->image) }}' class='rounded' width='50' />
                            </td>
                            <td data-tags="{{ $blog->tags }}">
                                <ul>
                                    @foreach ($blog->tags as $tag)
                                        <li>{{ $tag->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <div class='dropdown'>
                                    <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                        data-bs-toggle='dropdown'>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item btn-edit-blog' href='javascript:void(0);'
                                            data-bs-toggle='modal' data-url="{{ route('blogs.update', $blog->id) }}"
                                            data-bs-target='#editBlogModal'>
                                            <i class='bx bx-edit-alt me-1'></i> Edit
                                        </a>
                                        <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button class='dropdown-item' type="submit">
                                                <i class='bx bx-trash me-1'></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
                    <tr>
                        <th class="text-white">No.</th>
                        <th class="text-white">Title</th>
                        <th class="text-white">Description</th>
                        <th class="text-white">Photo</th>
                        <th class="text-white">Tag</th>
                        <th class="text-white">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Modal Add Blog -->
<div class="modal fade" id="addBlogModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="addBlogForm" method="POST" action="{{ route('blogs.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="addBlogModalTitle">Add Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12 mb-2">
                        <label for="blogTitle" class="form-label">Title</label>
                        <input type="text" name="title" id="blogTitle" class="form-control"
                            placeholder="Enter Blog Title" required />
                    </div>
                    <div class="col-12 mb-2">
                        {{-- <label for="blogDescription" class="form-label">Description</label>
                        <textarea id="blogDescription" name="content" class="form-control " rows="3" placeholder="Enter Blog Description"></textarea> --}}

                        {{-- CKEDITOR --}}
                        <label for="editor" class="form-label">Content</label>
                        <textarea id="editor" name="content" class="form-control " rows="3" placeholder="Enter Blog Content"></textarea>

                    </div>
                    <div class="col-12 mb-2">
                        <label for="blogPhoto" class="form-label">Photo</label>
                        <input type="file" name="image" id="blogPhoto" class="form-control" accept="image/*"
                            required />
                    </div>
                    <label for="blogPhoto" class="form-label">Photo</label>
                    <div class=" col-12 mb-2 dropdown">

                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCheckbox"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Tags
                        </button>
                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownCheckbox">
                            @foreach ($tags as $tag)
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" name="tags[]" type="checkbox"
                                            value="{{ $tag->id }}" id="check1" />
                                        <label class="form-check-label" for="check1">{{ $tag->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Blog -->
<div class="modal fade" id="editBlogModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="editBlogForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="editBlogModalTitle">Edit Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="editBlogTitle" class="form-label">Title</label>
                        <input type="text" id="editBlogTitle" name="title" class="form-control"
                            placeholder="Enter Blog Title" required />
                    </div>

                    <div class="col-12">
                        <label for="editBlogDescription" class="form-label">Description</label>
                        <textarea id="editor" name="content" class="form-control" rows="3" placeholder="Enter Blog Description"></textarea>

                    </div>
                    <div class="col-12 mb-2">
                        <label for="editBlogPhoto" class="form-label">Photo</label>
                        <input type="file" id="editBlogPhoto" name="image" class="form-control"
                            accept="image/*" />
                    </div>
                    <div class=" col-12 dropdown">

                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownCheckbox"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Tags
                        </button>
                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownCheckbox">
                            @foreach ($tags as $tag)
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" name="tags[]" type="checkbox"
                                            value="{{ $tag->id }}" id="check1" />
                                        <label class="form-check-label" for="check1">{{ $tag->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit"
                    class="btn btn-outline-secondary text-white btn-add-product table-dark1">Save</button>
            </div>
        </form>
    </div>
</div>

<!--/ Bordered Table -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editButtons = document.querySelectorAll('.btn-edit-blog');
        const editForm = document.getElementById('editBlogForm');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const url = row.querySelector('[data-url]').getAttribute('data-url');
                editForm.setAttribute('action', url);

                // Ambil data dari atribut data-content
                const title = row.querySelector('[data-title]').getAttribute('data-title');
                const content = row.querySelector('[data-content]').getAttribute(
                    'data-content');
                const listTags = row.querySelector('[data-tags]').getAttribute('data-tags');

                // Set nilai input judul
                document.getElementById('editBlogTitle').value = title;

                // Set nilai editor Froala atau textarea
                if (typeof editorInstance !== 'undefined' && editorInstance !== null) {
                    editorInstance.html.set(content); // Jika menggunakan Froala
                } else {
                    document.getElementById('editor').value =
                        content; // Jika textarea biasa
                }

                // Mengatur checkbox tag sesuai dengan data tags dari baris
                let tags = [];
                try {
                    tags = JSON.parse(listTags);
                } catch (error) {
                    console.error("Failed to parse list_tags:", error);
                }

                const tagCheckboxes = document.querySelectorAll('input[name="tags[]"]');
                tagCheckboxes.forEach(checkbox => {
                    checkbox.checked =
                        false; // Reset semua checkbox sebelum menandai yang sesuai
                    if (tags.some(tag => tag.id == checkbox.value)) { // Cocokkan ID tag
                        checkbox.checked = true;
                    }
                });
            });
        });
    });



    // JavaScript for adding automatic numbering to the "No." column
    const rows = document.querySelectorAll("#blog-list tr");
    rows.forEach((row, index) => {
        const noCell = row.querySelector("td:first-child");
        noCell.textContent = index + 1; // Assign the row number (1-based index)
    });
</script>
<script>
    const {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph
    } = CKEDITOR;
    const {
        FormatPainter
    } = CKEDITOR_PREMIUM_FEATURES;

    ClassicEditor
        .create(document.getElementById('editor'), {
            licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3Mzk1Nzc1OTksImp0aSI6ImRlNTU2ZTkyLWNjYWUtNDViYy05NWY4LTUxZjBhOGZhOGVhNiIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6ImJiZmNmN2RhIn0.cttA7qsNVEqvLX2mi6ICjz-1lmqQvQ3ZKgt8gUpKolIW6ljphBtjo_Bp1yu8xq9x6UBPnXkQqm84fgZde-N8iQ',
            plugins: [Essentials, Bold, Italic, Font, Paragraph, FormatPainter],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                'formatPainter'
            ]
        })
        .then( /* ... */ )
        .catch( /* ... */ );
</script>
