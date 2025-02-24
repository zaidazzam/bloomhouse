@extends('layout.admin.app')

@section('title')
    Edit Banner
@endsection

@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit/</span> Banner & Categories</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Banner & Categories</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner-categories.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Upload -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Banner 1</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner1" />
                                    <small>Current: {{ $banner->banner1 }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Banner 2</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner2" />
                                    <small>Current: {{ $banner->banner2 }}</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Banner 3</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner3" />
                                    <small>Current: {{ $banner->banner3 }}</small>
                                </div>
                            </div>

                            <!-- Category Selection -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category 1</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category1" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $banner->category1 == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category 2</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category2" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $banner->category2 == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category 3</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category3" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $banner->category3 == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </div>
                            </div>

                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
