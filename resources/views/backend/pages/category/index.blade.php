@extends('backend.layouts.app')
@section('title', 'Dahsboard')

@push('css')
    <link href="{{ asset('backend/assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush

{{-- page header --}}
@section('page-header')
    @include('backend.components.global.page-header', [
        'title' => 'Product',
        'subtitle' => 'Product Categories',
    ])
@endsection
{{-- page content --}}
@section('content')

    @include('backend.components.category.data-table')
@endsection



@push('js')
    <script src="{{ asset('backend/assets/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/demo/pages/datatables_basic.js') }}"></script>
    <script>
        // Select all elements with the class 'deleteBtn' as a NodeList
        const deleteForm = document.querySelectorAll('.deleteForm');

        // Iterate over the NodeList with .forEach
        deleteForm.forEach((form) => {
            form.addEventListener('click', (e) => {
                // e.preventDefault();

                const deleteRoute = form.getAttribute('action');
                const csrfInput = form.querySelector('input[name="_token"]').value;


                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Handle success response
                        axios.post(deleteRoute, {
                                _token: csrfInput,
                                _method: 'DELETE'
                            })
                            .then(() => {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success"
                                });
                                // Reload the page
                                window.location.reload();
                            })
                            .catch(() => {
                                Swal.fire({
                                    title: "Failed!",
                                    text: "Failed to deleted.",
                                    icon: "error"
                                });
                            });


                    }
                });


            });
        });
    </script>
@endpush
