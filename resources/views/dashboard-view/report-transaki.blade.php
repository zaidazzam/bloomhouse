@extends('layout.admin.app')

@section('title')
    Report Transaction
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Dashboard Here -->
        <!-- Bordered Table -->
        <div class="card">
            <div class="d-flex justify-content-between w-100">

                <h5 class="card-header">Tag Blog</h5>

                <div class="d-flex align-items-center">
                    <!-- Input Search -->
                    <div class="input-group input-group-merge me-3">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                            aria-describedby="basic-addon-search31" />
                    </div>

                    <!-- Add Product Button -->
                    <button type="button" class="btn btn-primary btn-add-product table-dark1" data-bs-toggle="modal"
                        data-bs-target="#addTag">Add Tag</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table table-responsive text-nowrap">
                    <table class="table table-bordered table-striped table-hover text-center">
                        <thead class="table-dark1">
                            <tr>
                                <th class="text-white">No.</th>
                                <th class="text-white">Tag Name</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>

                        <tbody id="product-list">
                            @foreach ($tags as $tag)
                                <tr>
                                    <td data-id="{{ $tag->id }}">{{ $loop->iteration }}</td>
                                    <td data-name="{{ $tag->name }}">{{ $tag->name }}</td>
                                    <td>
                                        <div class='dropdown'>
                                            <button type='button' class='btn p-0 dropdown-toggle hide-arrow'
                                                data-bs-toggle='dropdown'>
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </button>
                                            <div class='dropdown-menu'>
                                                <a class='dropdown-item btn-edit-tag' href='javascript:void(0);'
                                                    data-url="{{ route('tags.update', $tag->id) }}" data-bs-toggle='modal'
                                                    data-bs-target='#editCategoryModal'>
                                                    <i class='bx bx-edit-alt me-1'></i> Edit
                                                </a>
                                                <form method="POST" action="{{ route('tags.destroy', $tag->id) }}">
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


                    </table>
                </div>
            </div>
            <div class="demo-inline-spacing">
                <!-- Basic Pagination -->
                <nav aria-label="Page navigation" class="d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item first">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                        </li>
                        <li class="page-item prev">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">5</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                        </li>
                        <li class="page-item last">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                        </li>
                    </ul>
                </nav>
                <!--/ Basic Pagination -->
            </div>

        </div>

    </section>
@endsection
