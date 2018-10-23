@extends('layouts.admin')

@section('title','Task')

@push('css')


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
                                <th>Title</th>
                                <th>Client</th>
                                <th>Staff</th>
                                <th>Inspected</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->title}}</td>
                                    <td>{{$task->Client->name??''}}</td>
                                    <td>{{$task->User->name??''}}</td>
                                    <td class="text-center">@if($task->inspection_id) <i class="fa fa-check text-success"></i> @else <i class="fa fa-times text-danger"></i>@endif</td>
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

@endpush
