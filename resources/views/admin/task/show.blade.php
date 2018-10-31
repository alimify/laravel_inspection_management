@extends('layouts.admin')

@section('title','View Task')

@push('css')


@endpush


@section('content')
    <a href="{{route('admin.task.edit',$task->id)}}" class="btn btn-primary btn-success">Edit</a>
    <a href="{{route('admin.task.index')}}" class="btn btn-primary btn-dark">Back</a>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Task</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="r-separator">
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">ID : </span> {{$task->id}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Title : </span> {{$task->title}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Description : </span> {{$task->description}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Client : </span> {{$task->Client->name??''}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Staff : </span> {{$task->User->name??''}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Status : </span> <span class="{{$task->Status->class??''}}">{{$task->Status->title??''}}</span></div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Note : </span> {{$task->note}}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @if($inspection)

        @include('admin.inspection.show.'.$task->category_id)

    @endif

@endsection


@push('script')

@endpush
