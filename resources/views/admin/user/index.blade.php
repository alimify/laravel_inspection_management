@extends('layouts.admin')

@section('title','Users')

@push('css')

    <link href="{{asset('backend/'.'assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

@endpush


@section('content')
    <a href="{{route('admin.user.create')}}" class="btn btn-primary btn-success">Add User</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Users</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Added ON</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->Role->title}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.user.edit',$user->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="delete-item" data-id="{{$user->id}}"><i class="fa fa-trash"></i> </a>
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

@endsection


@push('script')
    <script src="{{asset('backend/'.'assets/extra-libs/DataTables/datatables.min.js')}}"></script>

    <script>
        $( document ).ready(function() {

            $("#datatable").DataTable()

            $(".delete-item").click(function () {

                let deleteForm = document.createElement('form'),
                    currentURL = `{{route('admin.user.destroy','deleteid')}}`,
                    deleteURL = currentURL.replace('deleteid',this.dataset.id),
                    csrfInput = document.createElement('input'),
                    methodInput = document.createElement('input')
                deleteForm.style.display = 'none';
                deleteForm.method = 'POST'
                deleteForm.action = deleteURL
                csrfInput.name = `_token`
                csrfInput.value = `{{csrf_token()}}`
                methodInput.name = `_method`
                methodInput.value = `DELETE`
                deleteForm.appendChild(csrfInput)
                deleteForm.appendChild(methodInput)
                document.body.appendChild(deleteForm)
                deleteForm.submit()

            })


        })
    </script>
@endpush
