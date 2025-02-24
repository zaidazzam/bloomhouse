@extends('layout.admin.app')

@section('title')
    Banner
@endsection

@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Banner & Categories</h4>

        {{-- <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Banner & Categories</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner-categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Banner Upload -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Banner 1</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner1" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Banner 2</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner2" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Banner 3</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner3" required />
                                </div>
                            </div>

                            <!-- Category Selection -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category 1</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category1" required>
                                        <option value="" disabled selected>Select a Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category 2</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category2" required>
                                        <option value="" disabled selected>Select a Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category 3</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category3" required>
                                        <option value="" disabled selected>Select a Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                </div>
                            </div>

                        </form>
                    </div> 
                </div>
            </div>
        </div> --}}

        <!-- Table to Display Stored Data -->
        <div class="row">
            <div class="col-xxl">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Stored Banner & Categories</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Banner 1</th>
                                    <th>Banner 2</th>
                                    <th>Banner 3</th>
                                    <th>Category 1</th>
                                    <th>Category 2</th>
                                    <th>Category 3</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $index => $banner)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><img src="{{ asset('storage/' . $banner->banner1) }}" width="100"></td>
                                        <td><img src="{{ asset('storage/' . $banner->banner2) }}" width="100"></td>
                                        <td><img src="{{ asset('storage/' . $banner->banner3) }}" width="100"></td>
                                        <td>{{ optional($categories->firstWhere('id', $banner->category1))->name }}</td>
                                        <td>{{ optional($categories->firstWhere('id', $banner->category2))->name }}</td>
                                        <td>{{ optional($categories->firstWhere('id', $banner->category3))->name }}</td>
                                        <td>
                                            <a href="{{ route('banner-categories.edit', $banner->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            {{-- <form action="{{ route('banner-categories.destroy', $banner->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
