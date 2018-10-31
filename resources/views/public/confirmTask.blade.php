@extends('layouts.appentry')

@section('title','Thank You')

@push('css')


@endpush


@section('content')

    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <h5 class="font-medium m-b-20">Thank You</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        Dear {{$client->name}},
                        Thank you for confirm the work we have done.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')

@endpush
