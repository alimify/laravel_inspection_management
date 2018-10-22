@extends('layouts.admin')

@section('title','Task')

@push('css')


@endpush


@section('content')
    <a href="{{route('admin.task.create')}}" class="btn btn-primary btn-success">Add Task</a>
@endsection


@push('script')

@endpush
