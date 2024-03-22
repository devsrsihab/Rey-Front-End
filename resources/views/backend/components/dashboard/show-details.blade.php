@extends('backend.layouts.app')
@section('title', 'Category Show Details')

{{-- page header --}}
@section('page-header')
    @include('backend.components.global.page-header', [
        'title' => 'Category',
        'subtitle' => 'Category Show Details',
    ])
@endsection
{{-- page content --}}
@section('content')
    <!-- category details -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card px-4">
                <div class="card-header">
                    <h5 class="mb-0">Show Category</h5>
                </div>
                <div class="card-body border-top">
                    <div>
                        <!-- Name -->
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Name:</label>
                            <div class="col-md-9">
                                <p>{{ $category->name }}</p>
                            </div>
                        </div>

                        <!-- Slug -->
                        <div class="form-group row mb-3">
                            <label for="slug" class="col-md-3 col-form-label">Slug</label>
                            <div class="col-md-9">
                                <p>{{ $category->slug }}</p>
                            </div>
                        </div>
                        
                        <!-- Parent Category -->
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Parent Category:</label>
                            <div class="col-md-9">
                                <p>
                                    @php
                                        $parent = \App\Models\Category::where('id', $category->parent_id)->first();
                                    @endphp
                                    @if ($parent != null)
                                        {{ $parent->name }}
                                    @else
                                        —
                                    @endif
                                </p>
                            </div>
                        </div>

                        <!-- Ordering Number -->
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Ordering Number:</label>
                            <div class="col-md-9">
                                <p>{{ $category->order_level }}</p>
                                <small>Higher number has high priority</small>
                            </div>
                        </div>

                        <!-- Category Image -->
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
                            </div>
                        </div>

                        <!-- Meta Title -->
                        <div class="form-group row mb-3">
                            <label for="meta_title" class="col-md-3 col-form-label">Meta Title</label>
                            <div class="col-md-9">
                                <p>{{ $category->meta_title }}</p>
                            </div>
                        </div>

                        <!-- Meta Description -->
                        <div class="form-group row mb-3">
                            <label for="meta_description" class="col-md-3 col-form-label">Meta Description</label>
                            <div class="col-md-9">
                                <p>{{ $category->meta_description }}</p>
                            </div>
                        </div>

                        <!-- Button to go back -->
                        <div class="text-end mt-5">
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /category details -->
@endsection
