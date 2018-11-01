@extends('layouts.user')

@section('title','Settings')

@push('css')


@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-title"></h4>
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <form action="{{route('user.settings.update',$user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Image</label>
                                <img src="{{asset(Config::get('load.user.image'))}}" class="d-block img-thumbnail" width="100px">
                                <input type="file" class="form-control form-control-file" id="image" name="image">
                            </div>


                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{Config::get('load.user.phone')}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{Config::get('load.user.address')}}">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" id="password" name="password_confirmation">
                            </div>

                            <input type="submit" class="btn btn-success" name="submit" value="SUBMIT">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')

@endpush
