@extends('layouts.admin')

@section('title','Users')

@push('css')


@endpush


@section('content')
    <a href="{{route('admin.user.create')}}" class="btn btn-primary btn-success">Add User</a>

@endsection


@push('script')

@endpush
