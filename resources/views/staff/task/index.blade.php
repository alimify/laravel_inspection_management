@extends('layouts.staff')

@section('title','Task')

@push('css')

    <link href="{{asset('backend/'.'assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Task</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Client</th>
                                <th>Property Address</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->id}}</td>
                                    <td>{{$task->title}}</td>
                                    <td>{{$task->Client->name??''}}</td>
                                    <td>{{$task->address}}</td>
                                    <td class="text-center"><span class="{{$task->Status->class??''}}">{{$task->Status->title??''}}</span></td>
                                    <td>{{$task->created_at}}</td>
                                    <td class="text-center">
                                        <a href="{{route('staff.task.show',$task->id)}}"><i class="fa fa-eye"></i></a>
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
