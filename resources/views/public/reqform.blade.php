@extends('layouts.appentry')

@section('title','Make a Request')

@push('css')
<style>
    form {
        background:#fff;padding:20px;-webkit-box-shadow:1px 0 20px rgba(0,0,0,.08);box-shadow:1px 0 20px rgba(0,0,0,.08);max-width:400px;width:90%;margin:10% 0
    }
</style>

@endpush


@section('content')
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-5 mt-5">
            <h3 class="text-center">Make A Request</h3>
            <form method="post" action="{{route('frontFormSubmit')}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>


                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label name="service_type">Service Type</label>
                    <select name="service_type" class="form-control">
                        @foreach($services as $service)
                            <option value="{{$service->id}}">{{$service->title}}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group text-center">
                    <input type="submit" name="submit" class="btn btn-success col-md-4" id="name" value="Submit">
                </div>

            </form>
        </div>
    </div>
@endsection


@push('script')

@endpush
