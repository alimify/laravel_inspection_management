<?php

namespace App\Http\Controllers\Admin;

use App\Laraption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    public function index(){
        return response()->view('admin.main.systemsetting');
    }

    public function update(Request $request){

    }



    public function mailTemplate(){
        $client_request = Laraption::where('key','=','to.client.request.entry')->first();
        $client_request = $client_request ? json_decode($client_request->value) : '';

        $client_request_accept = Laraption::where('key','=','to.client.request.response.accept')->first();
        $client_request_accept = $client_request_accept ? json_decode($client_request_accept->value) : '';


        $client_request_decline = Laraption::where('key','=','to.client.request.response.decline')->first();
        $client_request_decline = $client_request_decline ? json_decode($client_request_decline->value) : '';


        $staff_assign_task = Laraption::where('key','=','to.staff.task.assign.notification')->first();
        $staff_assign_task = $staff_assign_task ? json_decode($staff_assign_task->value) : '';


        $staff_update_task = Laraption::where('key','=','to.staff.task.update.notification')->first();
        $staff_update_task = $staff_update_task ? json_decode($staff_update_task->value) : '';


        return response()->view('admin.system.mail',compact('client_request','client_request_accept',
          'client_request_decline','staff_assign_task','staff_update_task'));
    }

    public function mailTemplateUpdate(Request $request){



        $client_request = Laraption::firstOrNew([
            'key' => 'to.client.request.entry'
        ]);
        $client_request->value = json_encode([
            'title' => $request->client_request_title,
            'body' => $request->client_request_body
        ]);

        $client_request->save();





        $client_request_accept = Laraption::firstOrNew([
            'key' => 'to.client.request.response.accept'
        ]);
        $client_request_accept->value = json_encode([
            'title' => $request->client_request_accept_title,
            'body'  => $request->client_request_accept_body
        ]);

        $client_request_accept->save();





        $client_request_decline = Laraption::firstOrNew([
            'key' => 'to.client.request.response.decline'
        ]);
        $client_request_decline->value = json_encode([
            'title' => $request->client_request_decline_title,
            'body'  => $request->client_request_decline_body
        ]);

        $client_request_decline->save();


        $staff_task_assign_notification = Laraption::firstOrNew([
            'key' => 'to.staff.task.assign.notification'
        ]);
        $staff_task_assign_notification->value = json_encode([
            'title' => $request->staff_task_assign_notification_title,
            'body'  => $request->staff_task_assign_notification_body
        ]);

        $staff_task_assign_notification->save();




        $staff_task_update_notification = Laraption::firstOrNew([
            'key' => 'to.staff.task.update.notification'
        ]);
        $staff_task_update_notification->value = json_encode([
            'title' => $request->staff_task_update_notification_title,
            'body'  => $request->staff_task_update_notification_body
        ]);

        $staff_task_update_notification->save();


        return redirect()->back()->with('status','Mail Template Updated..');
    }

}
