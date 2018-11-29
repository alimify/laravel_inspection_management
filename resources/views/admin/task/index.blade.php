@extends('layouts.admin')

@section('title','Task')

@push('css')
    <link href="{{asset('backend/'.'assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">


@endpush


@section('content')
    <a href="{{route('admin.task.create')}}" class="btn btn-primary btn-success">Add Task</a>
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
                                <th>Staff</th>
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
                                    <td>{{$task->User->name??''}}</td>
                                    <td>{{$task->address}}</td>
                                    <td class="text-center"><span class="{{$task->Status->class??''}}">{{$task->Status->title??''}}</span></td>
                                    <td>{{$task->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.task.show',$task->id)}}"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('admin.task.edit',$task->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="delete-item" data-id="{{$task->id}}"><i class="fa fa-trash"></i> </a>
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

            $("#datatable").DataTable({
                "order": [[ 6, "desc" ]],
                "columnDefs": [
                    { "searchable": false, "targets": 6 }
                ]
            })
        })
    </script>
@endpush
