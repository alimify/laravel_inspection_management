@extends('layouts.admin')

@section('title','Add Task')

@push('css')


@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-title">New Task</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{route('admin.task.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="address">Property Address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" rows="2" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="client">Client</label>
                                <select class="form-control select2-dropdown" name="client">
                                    @foreach($clients as $client)
                                        <option value="{{$client->id}}">{{$client->name}}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="staff">Staff</label>
                                <select class="form-control select2-dropdown" name="staff">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success m-r-10">Submit</button>
                            <a href="{{route('admin.task.index')}}" class="btn btn-dark">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('script')

@endpush
