<?php

namespace App\Http\Controllers\Admin;

use App\Laraption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SystemController extends Controller
{
    public function index(){
        return response()->view('admin.system.setting');
    }

    public function update(Request $request){

        $this->validate($request,[
            'logo' => 'mimes:jpg,jpeg,png,bmp,gif'
        ]);

        $logo = Laraption::firstOrNew([
            'key' => 'site.logo'
        ]);
        $logofile = $request->file('logo');
        $dir = 'site';
        $logoname = $logo->value;

        if(is_file($logofile)){

            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }

            if(Storage::disk('public')->exists(str_replace('storage/','',$logo->value))){
                Storage::disk('public')->delete(str_replace('storage/','',$logo->value));
            }

        $logoname = 'storage/'.$request->file('logo')->store($dir, 'public');

        }
       $logo->value = $logoname;
       $logo->save();

      $email =   Laraption::firstOrNew([
            'key' => 'site.email'
        ]);
      $email->value = $request->email;
       $email->save();


        $emailname =   Laraption::firstOrNew([
            'key' => 'site.emailname'
        ]);
        $emailname->value = $request->emailname;
        $emailname->save();


        $mailchimpapi =   Laraption::firstOrNew([
            'key' => 'newsletter.apiKey'
        ]);
        $mailchimpapi->value = $request->mailchimp_apikey;
        $mailchimpapi->save();



        $mailchim_listid =   Laraption::firstOrNew([
            'key' => 'newsletter.lists.subscribers.id'
        ]);
        $mailchim_listid->value = $request->mailchimp_listid;
        $mailchim_listid->save();



        return redirect()->back()->with('status','Setting Successfully Updated.');
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

        $client_task_confirm  = Laraption::where('key','=','to.client.task.confirm.request')->first();
        $client_task_confirm = $client_task_confirm ? json_decode($client_task_confirm->value) : '';


        $user_accountinfo = Laraption::where('key','=','to.user.accountinfo')->first();
        $user_accountinfo = $user_accountinfo ? json_decode($user_accountinfo->value) : '';

        $client_task_admin  = Laraption::where('key','=','to.admin.task.submit')->first();
        $client_task_admin = $client_task_admin ? json_decode($client_task_admin->value) : '';

        return response()->view('admin.system.mail',compact('client_request','client_request_accept',
          'client_request_decline','staff_assign_task','staff_update_task','client_task_confirm',
            'user_accountinfo','client_task_admin'));
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



        $client_task_send = Laraption::firstOrNew([
            'key' => 'to.client.task.confirm.request'
        ]);

        $client_task_send->value = json_encode([
            'title' => $request->client_task_send_title,
            'body'  => $request->client_task_send_body
        ]);

        $client_task_send->save();


        $client_task_thanks = Laraption::firstOrNew([
            'key' => 'to.client.task.confirm.thanks'
        ]);

        $client_task_thanks->value = json_encode([
            'title' => $request->client_task_thanks_title,
            'body'  => $request->client_task_thanks_body
        ]);

        $client_task_thanks->save();



        /*AccountInfo*/

        $user_accountinfo = Laraption::firstOrNew([
            'key' => 'to.user.accountinfo'
        ]);

        $user_accountinfo->value = json_encode([
            'title' => $request->user_accountinfo_title,
            'body'  => $request->user_accountinfo_body
        ]);

        $user_accountinfo->save();



        $tasktoadmin = Laraption::firstOrNew([
            'key' => 'to.admin.task.submit'
        ]);

        $tasktoadmin->value = json_encode([
            'title' => $request->tasktoadmin_title,
            'body'  => $request->tasktoadmin_body
        ]);

        $tasktoadmin->save();


        return redirect()->back()->with('status','Mail Template Updated..');
    }

}
