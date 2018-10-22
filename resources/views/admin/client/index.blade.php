@extends('layouts.admin')

@section('title','Clients')

@push('css')


@endpush


@section('content')
<a href="{{route('admin.client.create')}}" class="btn btn-primary btn-success">Add Client</a>
@endsection


@push('script')

@endpush
