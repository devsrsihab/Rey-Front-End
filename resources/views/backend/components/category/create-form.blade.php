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
    <!-- create form -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card px-4">
                <div class="card-header">
                    <h5 class="mb-0">Create Category</h5>
                </div>

                <div class="card-body border-top">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Name:</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>

                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Parent Category</label>
                            <div class="col-md-9">
                                <select class="select2 form-control aiz-selectpicker" name="parent_id" data-toggle="select2"
                                    data-placeholder="Choose ..." data-live-search="true">
                                    <option value="0">No Parent</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}

                                        </option>
                                        @foreach ($category->childrenCategories as $childCategory)
                                            @include('backend.components.category.child-category', [
                                                'child_category' => $childCategory,
                                            ])
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Ordering Number:</label>
                            <div class="col-md-9">
                                <input type="text" name="order_level" class="form-control" id="order_level"
                                    placeholder="Order Leve">
                                <small>Higher number has high priority</small>

                            </div>

                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="image">Category Image:
                                <br />
                                <small>360x360</small></label>
                            <div class="col-md-9">
                                <!-- Category Image uploader -->
                                <input type="file" name="image" id="image" class="file-input">
                                <!-- /Category Image uploader -->
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="meta_title" class="col-md-3 col-form-label">Meta Title</label>
                            <div class="col-md-9">
                                <input type="text" id="meta_title" class="form-control" name="meta_title"
                                    placeholder="Meta Title">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="meta_description" class="col-md-3 col-form-label">{Meta Description</label>
                            <div class="col-md-9">
                                <textarea id="meta_description" name="meta_description" rows="5" class="form-control"></textarea>
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
    <!-- /create form -->
@endsection



@push('js')
    <script src="{{ asset('backend/assets/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/demo/pages/uploader_bootstrap.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
    <script src="{{ asset('backend/assets/demo/demo_configurator.js') }}"></script>

    {{-- <script>
        // Select all elements with the class 'deleteBtn' as a NodeList
        const deleteBtns = document.querySelectorAll('.deleteBtn');

        // Iterate over the NodeList with .forEach
        deleteBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                console.log('clicked');

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            icon: "error"
                        });
                    }
                });
            });
        });
    </script> --}}
@endpush
