@extends('layouts.admin')

@section('title','Edit User')

@push('css')


@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-title">Update User</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{route('admin.user.update',$user->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="select2 form-control" name="role">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" {{$role->id == $user->role_id ? 'selected' : ''}}>{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="phone">Password</label>
                                <input type="password" class="form-control" id="phone" name="password">
                            </div>
                            <div class="form-group">
                                <label for="address">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirmation">
                            </div>

                            <button type="submit" class="btn btn-success m-r-10">Submit</button>
                            <a href="{{route('admin.user.index')}}" class="btn btn-dark">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')

@endpush
