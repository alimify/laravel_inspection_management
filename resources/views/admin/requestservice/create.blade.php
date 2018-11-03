@extends('layouts.admin')

@section('title','Create Request Category')

@push('css')


@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-title">New Request Category</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{route('admin.requestCategory.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <button type="submit" class="btn btn-success m-r-10">Submit</button>
                            <a href="{{route('admin.requestCategory.index')}}" class="btn btn-dark">Back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')

@endpush
