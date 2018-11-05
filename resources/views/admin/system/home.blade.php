@extends('layouts.admin')

@section('title','Homepage HTML')

@push('css')


@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-title">EDIT HOMEPAGE HTML</h4>
                <form action="{{route('admin.homeHTMLUpdate')}}" method="post">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <textarea class="form-control" cols="80" id="html" name="html" rows="10" data-sample="1" data-sample-short="">{{$html??''}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-success mr-2">
                    <a href="{{route('index')}}" class="btn btn-dark">BACK</a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('script')

@endpush
