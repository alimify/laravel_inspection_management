@extends('layouts.admin')

@section('title','System > Setting')

@push('css')


@endpush


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-title"></h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{route('admin.system.setting.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Logo</label>
                                <img src="{{asset(Config::get('site.logo'))}}" width="100" class="img-thumbnail d-block" alt="">
                                <input type="file" class="form-control-file form-control col-md-10 col-lg-7" id="logo" name="logo">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control col-md-10 col-lg-7" id="email" name="email" value="{{Config::get('site.email')}}">
                            </div>

                            <div class="form-group">
                                <label for="emailname">Email name</label>
                                <input type="text" class="form-control col-md-10 col-lg-7" id="emailname" name="emailname" value="{{Config::get('site.emailname')}}">
                            </div>


                            <div class="form-group">
                                <label for="mailchimp_apikey">Mailchimp API KEY</label>
                                <input type="text" class="form-control col-md-10 col-lg-7" id="mailchimp_apikey" name="mailchimp_apikey" value="{{config('newsletter.apiKey')}}">
                            </div>

                            <div class="form-group">
                                <label for="mailchimp_listid">Mailchimp List ID</label>
                                <input type="text" class="form-control col-md-10 col-lg-7" id="mailchimp_listid" name="mailchimp_listid" value="{{config('newsletter.lists.subscribers.id')}}">
                            </div>

                            <input type="submit" name="submit" value="submit" class="text-center btn btn-success">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')

@endpush
