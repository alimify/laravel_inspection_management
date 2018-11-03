@extends('layouts.admin')

@section('title','Request')

@push('css')

    <link href="{{asset('backend/'.'assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Requests</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($requests as $request)
                                <tr>
                                    <td>{{$request->name}}</td>
                                    <td>{{$request->phone}}</td>
                                    <td>{{$request->email}}</td>
                                    <td>{{$request->address}}</td>
                                    <td>{{$request->Type->title??''}}</td>
                                    <td>
                                        @if($request->status == 1)
                                            <span class="btn btn-warning">Waiting</span>
                                        @elseif($request->status == 2)
                                            <span class="btn btn-danger">Decline</span>
                                        @elseif($request->status == 3)
                                            <span class="btn btn-success">Approved</span>
                                        @endif

                                    </td>
                                    <td>{{$request->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.request.show',$request->id)}}"><i class="fas fa-eye"></i></a>
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
    })
</script>
@endpush
