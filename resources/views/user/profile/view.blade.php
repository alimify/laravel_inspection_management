@extends('layouts.user')

@section('title','View Profile')

@push('css')


@endpush


@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="m-t-30 text-center"> <img src="{{asset(Config::get('load.user.image'))}}" class="rounded-circle" width="150" />
                    <h4 class="card-title m-t-10">{{$user->name}}</h4>
                    <h6 class="card-subtitle">{{$user->Role->title}}</h6>
                    <!--<div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                    </div>-->
                </div>
            </div>
            <div>
                <hr> </div>
            <div class="card-body">
                <small class="text-muted">Email address </small>
                <h6>{{$user->email}}</h6>
                <small class="text-muted p-t-30 db">Phone</small>
                <h6>{{Config::get('load.user.phone')}}</h6>
                <small class="text-muted p-t-30 db">Address</small>
                <h6>{{Config::get('load.user.address')}}</h6>
                <div class="map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!--<small class="text-muted p-t-30 db">Social Profile</small>
                <br/>
                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>-->
            </div>
        </div>
    </div>
@endsection


@push('script')

@endpush
