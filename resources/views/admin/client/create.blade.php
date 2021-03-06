@extends('layouts.admin')

@section('title','Add Client')

@push('css')


@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-title">New Client</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{route('admin.client.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" rows="1" name="address"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="address">Description</label>
                                <textarea class="form-control" rows="2" name="descriptions"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success m-r-10">Submit</button>
                            <a href="{{route('admin.client.index')}}" class="btn btn-dark">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('script')

@endpush
