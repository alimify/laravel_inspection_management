@extends('layouts.admin')

@section('title','Mail Template Setting')

@push('css')


@endpush


@section('content')
    <form action="{{route('admin.system.setting.mail.update')}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Client Request</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="client_request_title">Title</label>
                                <input type="text" class="form-control" id="" name="client_request_title" value="{{$client_request->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="">Body</label>
                                <textarea class="form-control" name="client_request_body" id="">{{$client_request->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Client Request Accept</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="client_request_accept_title">Title</label>
                                <input type="text" class="form-control" id="client_request_accept_title" name="client_request_accept_title" value="{{$client_request_accept->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="client_request_accept_body">Body</label>
                                <textarea class="form-control" name="client_request_accept_body" id="client_request_accept_body">{{$client_request_accept->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Client Request Decline</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="client_request_decline_title">Title</label>
                                <input type="text" class="form-control" id="client_request_decline_title" name="client_request_decline_title" value="{{$client_request_decline->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="client_request_decline_body">Body</label>
                                <textarea class="form-control" name="client_request_decline_body" id="client_request_decline_body">{{$client_request_decline->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Staff Task Assign</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="staff_task_assign_notification_title">Title</label>
                                <input type="text" class="form-control" id="staff_task_assign_notification_title" name="staff_task_assign_notification_title" value="{{$staff_assign_task->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="staff_task_assign_notification_body">Body</label>
                                <textarea class="form-control" name="staff_task_assign_notification_body" id="staff_task_assign_notification_body">{{$staff_assign_task->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Staff Task Update</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="staff_task_update_notification_title">Title</label>
                                <input type="text" class="form-control" id="staff_task_update_notification_title" name="staff_task_update_notification_title" value="{{$staff_update_task->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="staff_task_update_notification_body">Body</label>
                                <textarea class="form-control" name="staff_task_update_notification_body" id="staff_task_update_notification_body">{{$staff_update_task->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Client Confirm Task</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="client_task_send_title">Title</label>
                                <input type="text" class="form-control" id="client_task_send_title" name="client_task_send_title" value="{{$client_task_confirm->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="client_task_send_body">Body</label>
                                <textarea class="form-control" name="client_task_send_body" id="client_task_send_body">{{$client_task_confirm->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">User Account Info</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="user_accountinfo_title">Title</label>
                                <input type="text" class="form-control" id="user_accountinfo_title" name="user_accountinfo_title" value="{{$user_accountinfo->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="user_accountinfo_body">Body</label>
                                <textarea class="form-control" name="user_accountinfo_body" id="user_accountinfo_body">{{$user_accountinfo->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Staff Task Submit to Admin</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="tasktoadmin_title">Title</label>
                                <input type="text" class="form-control" id="tasktoadmin_title" name="tasktoadmin_title" value="{{$client_task_admin->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="tasktoadmin_body">Body</label>
                                <textarea class="form-control" name="tasktoadmin_body" id="tasktoadmin_body">{{$client_task_admin->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Request Mail To Admin</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="request_to_admin_title">Title</label>
                                <input type="text" class="form-control" id="request_to_admin_title" name="request_to_admin_title" value="{{$request_to_admin->title??''}}">
                            </div>
                            <div class="form-group">
                                <label for="request_to_admin_body">Body</label>
                                <textarea class="form-control" name="request_to_admin_body" id="request_to_admin_body">{{$request_to_admin->body??''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="text-center">
        <input type="submit" class="btn btn-success col-4" name="submit" value="Submit">
        </div>

    </form>
@endsection


@push('script')

@endpush
