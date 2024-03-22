@extends('backend.layouts.app')
@section('title', 'Dahsboard')

@push('css')
    <link href="{{ asset('backend/assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush

{{-- page header --}}
@section('page-header')
    @include('backend.components.global.page-header', [
        'title' => 'Category',
        'subtitle' => 'Category Create',
    ])
@endsection
{{-- page content --}}
@section('content')
    <!-- update form -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card px-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Category</h5>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body border-top">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Name:</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                    value="{{ $category->name }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Parent Category</label>
                            <div class="col-md-9">
                                <select class="select2 form-control aiz-selectpicker" name="parent_id" data-toggle="select2"
                                    data-placeholder="Choose ..." data-live-search="true">
                                    <option value="0">No Parent</option>
                                    @foreach ($categories as $cat)
                                        @if ($category->id != $cat->id)
                                            <option value="{{ $cat->id }}"
                                                {{ $category->parent_id == $cat->id ? 'selected' : '' }}>
                                                {{ $cat->name }}
                                            </option>
                                            @if ($cat->childrenCategories->count() > 0)
                                                @foreach ($cat->childrenCategories as $subCat)
                                                    <option value="{{ $subCat->id }}"
                                                        {{ $category->parent_id == $subCat->id ? 'selected' : '' }}>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;{{ $subCat->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Ordering Number:</label>
                            <div class="col-md-9">
                                <input type="text" name="order_level" class="form-control" id="order_level"
                                    placeholder="Order Leve" value="{{ $category->order_level }}">
                                <small>Higher number has high priority</small>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Category Image:</label>
                            <div class="col-md-9">
                                @if ($category->image)
                                    <div class="mt-3">
                                        <img src="{{ asset('uploads/images/categories/' . $category->image) }}"
                                            alt="Category Image" class="img-fluid rounded" style="max-height: 200px;">
                                    </div>
                                @else
                                    <div class="mt-3">
                                        <span class="text-muted">No image uploaded</span>
                                    </div>
                                @endif
                                <div class="custom-file">
                                    <!-- Category Image uploader -->
                                    <input type="file" name="image" id="image" class="file-input">
                                    <!-- /Category Image uploader -->
                                    <small class="text-muted">Recommended size: 360x360 pixels</small>

                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label for="meta_title" class="col-md-3 col-form-label">Meta Title</label>
                            <div class="col-md-9">
                                <input type="text" id="meta_title" class="form-control" name="meta_title"
                                    placeholder="Meta Title" value="{{ $category->meta_title }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="meta_description" class="col-md-3 col-form-label">Meta Description</label>
                            <div class="col-md-9">
                                <textarea id="meta_description" name="meta_description" rows="5" class="form-control">{{ $category->meta_description }}</textarea>
                            </div>
                        </div>

                        <div class="text-end mt-5">
                            <button type="submit" class="btn btn-success">Submit <i
                                    class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /update form -->


@endsection



@push('js')
    <script src="{{ asset('backend/assets/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/demo/pages/uploader_bootstrap.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
    <script src="{{ asset('backend/assets/demo/demo_configurator.js') }}"></script>
@endpush
