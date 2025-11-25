@extends('backend.layouts.app')
@section('title', 'User | ' . Helper::getSettings('application_name') ?? 'Livenza Group')
@section('content')
    <div class="bo-container">

        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="heading_button profile-heading">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="margin: 0;padding-top: 5px;    font-size: 18px;">Country List</h1>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#CreateModalOpen">Add New</button>
                </div>
            </div>
        </div>


        <div class="user-profile-details">
            <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
    @include('backend.pages.slider.modal');
    <script>
        $(document).ready(function() {

            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                //dom: 'Bfrtip',
                buttons: [
                    'print',
                    'copy',
                    'excel',
                    'csv',
                    'pdf'
                ],

                ajax: {
                    url: "{{ route('admin.slider.list') }}",
                    type: 'GET'
                },

                columns: [{
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

        });
    </script>

    <script src="{{ asset('/backend/js/') }}/action.js"></script>
@endsection
