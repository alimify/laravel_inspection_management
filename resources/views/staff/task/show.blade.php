@extends('layouts.staff')

@section('title','View Task')

@push('css')

@endpush


@section('content')
    <a href="" class="btn btn-primary btn-success"></a>
    <a href="{{route('staff.task.index')}}" class="btn btn-primary btn-dark">Back</a>

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
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Phone : </span> {{$task->Client->phone??''}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Status : </span> <span class="{{$task->Status->class??''}}">{{$task->Status->title??''}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @includeIf('staff.inspection.form.'.$task->category_id)
    @includeWhen(!View::exists('staff.inspection.form.'.$task->category_id),'staff.inspection.form.default')

@endsection


@push('script')
    @include('public.gallery')
@endpush
