<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MailSender;
use App\Laraption;
use App\Models\Client;
use App\Models\Inspection;
use App\Models\Task;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InspectionController extends Controller
{

    /* Edit */
    public function edit($id){

        $task                                        = Task::find($id);

        $inspection                                  = json_decode($task->Inspection->data??'');

        return response()->view('admin.inspection.edit',compact('task','inspection'));
    }

    public function sendToClient($id){

        $task                                        = Task::find($id);

        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('PDF.taskToClient',['task' => $task,'inspection' => json_decode($task->Inspection->data??'')])->save('storage/pdf/report'.$task->id.'.pdf');

        //Send Email Notification
        $user                                        = User::find($task->user_id);

        $client                                      = Client::find($task->client_id);

        $mailb                                       = Laraption::where('key','=','to.client.task.confirm.request')
                                                                  ->first()
        ;

        $mailb                                       = json_decode($mailb ? $mailb->value : null);

        $mailRarray                                  =
            [
              '#taskLink#'                           =>  route('confirmTask',
                  [
                   'task'                            => $task->id, 'client' => $task->client_id
                  ]),

            '#taskTitle#'                            => $task->title,
            '#staff#'                                => $user->name,
            '#client#'                               => $client->name,
            '#propertyaddress#'                      => $task->address,
            '#inspectiondate#'                       => $task->Inspection->created_at??'',
            '#attachmentLink#'                       => asset('storage/pdf/report'.$task->id.'.pdf')
        ];

        $mailbody                                    = $mailb ? str_replace(array_keys($mailRarray),$mailRarray,$mailb->body) : '';
        $mailtitle                                   = $mailb? $mailb->title : 'Your have received new notification.';

        $data                                        = [
                                                         'to'          =>   $client->email,
                                                         'name'        => $client->name,
                                                         'subject'     => $mailtitle,
                                                         'body'        => $mailbody,
                                                         'file'        => 'storage/pdf/report'.$task->id.'.pdf'
                                                        ];

        MailSender::send('mail.task',$data);

        return redirect()->back()
                          ->with('status','Mail Sent To Client Successfully')
        ;
    }

    public function update(Request $request,$id){

        $task                                        = Task::find($id);
        $form                                        = $task->Category->form??'defaultForm';
        $result                                      = $this->$form($request,$task);

        return $result ? redirect()->back()
                                    ->with('status','Form Updated Successfully.') : redirect()->back()
        ;

    }



    /*form*/
    public function defaultForm($request,$task){
        $inspection                                  = Inspection::firstOrNew([
                                                        'task_id'         => $task->id
        ]);

        $data =  [
            'status'                                 => $request->status == 1 ? true : false,
            'comment'                                => $request->comment
        ];

        $inspection->data                            = json_encode($data);
        $inspection->save();

        $task->inspection_id                         = $inspection->id;
        $task->status_id                             = 2;
        $task->save();

        return redirect()->back()
                          ->with('status','Form Submitted Successfully')
        ;
    }

    public function formOne($request,$task){

        $inspection                                  = Inspection::firstOrNew([
                                                         'task_id'        => $task->id
        ]);


        $data = [
            'ceiling'                                => $request->ceiling == 1 ? true : false,
            'ceiling_text'                           => $request->ceiling_text,
            'walls'                                  => $request->walls == 1 ? true : false,
            'walls_text'                             => $request->walls_text,
            'floors'                                 => $request->floors == 1 ? true : false,
            'floors_text'                            => $request->floors_text,
            'baseboard'                              => $request->baseboard == 1 ? true : false,
            'baseboard_text'                         => $request->baseboard_text,
            'windows_damaged'                        => $request->windows_damaged == 1 ? true : false,
            'windows_damaged_text'                   => $request->windows_damaged_text,
            'windows_secured'                        => $request->windows_secured == 1 ? true : false,
            'windows_secured_text'                   => $request->windows_secured_text,
            'windows_evidence'                       => $request->windows_evidence == 1 ? true : false,
            'windows_evidence_text'                  => $request->windows_evidence_text,
            'toilets_leak'                           => $request->toilets_leak == 1 ? true : false,
            'toilets_leak_text'                      => $request->toilets_leak_text,
            'faucets_dripping_water'                 => $request->faucets_dripping_water == 1 ? true : false,
            'faucets_dripping_water_text'            => $request->faucets_dripping_water_text,
            'evidence_leak_under_sink'               => $request->evidence_leak_under_sink == 1 ? true : false,
            'evidence_leak_under_sink_text'          => $request->evidence_leak_under_sink_text,
            'unit_operational'                       => $request->unit_operational == 1 ? true : false,
            'unit_operational_text'                  => $request->unit_operational_text,
            'hvac_evidence'                          => $request->hvac_evidence == 1 ? true : false,
            'hvac_evidence_text'                     => $request->hvac_evidence_text,
            'hvac_filter_change_need'                => $request->hvac_filter_change_need == 1 ? true : false,
            'hvac_filter_change_need_text'           => $request->hvac_filter_change_need_text,
            'thermostat_degree_reading'              => $request->thermostat_degree_reading,
            'electrical_light_switch'                => $request->electrical_light_switch == 1 ? true : false,
            'electrical_light_switch_text'           => $request->electrical_light_switch_text,
            'smoke_detector'                         => $request->smoke_detector,
            'major_refigerator'                      => $request->major_refigerator,
            'major_stove'                            => $request->major_stove,
            'major_washer'                           => $request->major_washer,
            'major_baseboard'                        => $request->major_baseboard,
            'pest_treatment'                         => $request->pest_treatment == 1 ? true : false,
            'pest_treatment_text'                    => $request->pest_treatment_text,
            'observation'                            => $request->observation
        ];

        $inspection->data                            = json_encode($data);
        $inspection->save();

        $task->inspection_id                         = $inspection->id;
        $task->status_id                             = 2;
        $task->save();


        return redirect()->back()
                          ->with('status','Form Submitted Successfully.')
        ;
    }


    /*PDF*/

}
