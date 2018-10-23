@extends('layouts.admin')

@section('title','Clients')

@push('css')

    <link href="{{asset('backend/'.'assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

@endpush


@section('content')
    <a href="{{route('admin.client.create')}}" class="btn btn-primary btn-success">Add Client</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Clients</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <!--<th>Description</th>-->
                            <th>Added ON</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                @foreach($clients as $client)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->phone}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->address}}</td>
                            <!--<td>{{$client->descriptions}}</td>-->
                            <td>{{$client->created_at}}</td>
                            <td>
                                <a href="{{route('admin.client.edit',$client->id)}}"><i class="fas fa-edit"></i></a>
                                <a href="javascript:void(0)" class="delete-item" data-id="{{$client->id}}"><i class="fa fa-trash"></i> </a>
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
            currentURL = `{{route('admin.client.destroy','deleteid')}}`,
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
