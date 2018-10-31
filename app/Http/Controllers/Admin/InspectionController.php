<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MailSender;
use App\Laraption;
use App\Models\Client;
use App\Models\Inspection;
use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InspectionController extends Controller
{
    public function edit($id){
        $task = Task::find($id);
        $inspection   = json_decode($task->Inspection->data??'');

        return response()->view('admin.inspection.edit',compact('task','inspection'));
    }

    public function sendToClient($id){

        $task = Task::find($id);

        /*Send Email Notification*/
        $user  = User::find($task->user_id);
        $client = Client::find($task->client_id);
        $mailb = Laraption::where('key','=','to.client.task.confirm.request')->first();
        $mailb = json_decode($mailb ? $mailb->value : null);

        $mailRarray = [
            '#taskLink#' => route('confirmTask',[
                'task' => $task->id,
                'client' => $task->client_id
            ]),
            '#taskTitle#' => $task->title,
            '#staff#'  => $user->name,
            '#client#' => $client->name
        ];

        $mailbody = $mailb ? strtr($mailb->body,$mailRarray) : '';
        $mailtitle = $mailb? $mailb->title : 'Your have received new notification.';

        $data = [
            'to' =>   $client->email,
            'name' => $client->name,
            'subject' => $mailtitle,
            'body' => $mailbody,
            'from'   => 'test@phafex.xyz',
            'fromname' => "Phafex",
            'file'  => false
        ];

        MailSender::send('mail.task',$data);

        return redirect()->back()->with('status','Mail Sent To Client Successfully');
    }

    public function update(Request $request,$id){

        $task = Task::find($id);
        $form = $task->Category->form;
        $result  = $this->$form($request,$task);

        return $result ? redirect()->back()->with('status','Form Updated Successfully.') : redirect()->back();

    }


    public function formOne($request,$task){

        $inspection = Inspection::firstOrNew([
            'task_id'  => $task->id
        ]);


        $data = [
            'ceiling'                        => $request->ceiling == 1 ? true : false,
            'walls'                          => $request->walls == 1 ? true : false,
            'floors'                         => $request->floors == 1 ? true : false,
            'baseboard'                      => $request->baseboard == 1 ? true : false,
            'windows_damaged'                => $request->windows_damaged == 1 ? true : false,
            'windows_secured'                => $request->windows_secured == 1 ? true : false,
            'windows_evidence'               => $request->windows_evidence == 1 ? true : false,
            'toilets_leak'                   => $request->toilets_leak == 1 ? true : false,
            'faucets_dripping_water'         => $request->faucets_dripping_water == 1 ? true : false,
            'evidence_leak_under_sink'       => $request->evidence_leak_under_sink == 1 ? true : false,
            'unit_operational'               => $request->unit_operational == 1 ? true : false,
            'hvac_evidence'                  => $request->hvac_evidence == 1 ? true : false,
            'hvac_filter_change_need'        => $request->hvac_filter_change_need == 1 ? true : false,
            'thermostat_degree_reading'      => $request->thermostat_degree_reading,
            'electrical_light_switch'        => $request->electrical_light_switch == 1 ? true : false,
            'smoke_detector'                 => $request->smoke_detector,
            'major_refigerator'              => $request->major_refigerator,
            'major_stove'                    => $request->major_stove,
            'major_washer'                   => $request->major_washer,
            'major_baseboard'                => $request->major_baseboard,
            'pest_treatment'                 => $request->pest_treatment,
            'observation'                    => $request->observation
        ];

        $inspection->data = json_encode($data);
        $inspection->save();

        $task->inspection_id = $inspection->id;
        $task->status_id = 2;
        $task->save();


        return redirect()->back()->with('status','Form Submitted Successfully.');
    }

}
