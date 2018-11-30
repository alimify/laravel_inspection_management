@extends('layouts.admin')

@section('title','View Request')

@push('css')


@endpush


@section('content')

    @if($request->status == 1)
    <a href="{{route('admin.request.status',['id' => $request->id,'status' => 3])}}" class="btn btn-primary btn-success">Approve</a>
    <a href="{{route('admin.request.status',['id' => $request->id,'status' => 2])}}" class="btn btn-primary btn-danger">Decline</a>
    @endif

    <a href="{{route('admin.request.index')}}" class="btn btn-primary btn-dark">Back</a>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Request</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="r-separator">
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Name : </span> {{$request->name}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Email : </span> {{$request->email}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Phone : </span> {{$request->phone}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Address : </span> {{$request->address}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Status : </span>

                            @if($request->status == 1)
                                <span class="btn btn-warning">Waiting</span>
                            @elseif($request->status == 2)
                                <span class="btn btn-danger">Decline</span>
                            @elseif($request->status == 3)
                                <span class="btn btn-success">Approved</span>
                            @endif

                        </div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Message : </span> {{$request->message}}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('script')

@endpush
