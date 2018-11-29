<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\MailSender;
use App\Laraption;
use App\Models\Inspection;
use App\Models\Notification;
use App\Models\Task;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InspectionController extends Controller
{

    private $task = false;


    public function submitForm(Request $request,Task $task){

        $form = $task->Category->form;
        $result  = $this->$form($request,$task);

        return $result ? redirect()->back()->with('status','Form Submitted Successfully.') : redirect()->back();
    }

    public function formOne($request,$task){

        $inspection = Inspection::firstOrNew([
            'task_id'  => $task->id
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

        $inspection->data = json_encode($data);
        $inspection->save();

        $task->inspection_id = $inspection->id;
        $task->status_id = 2;
        $task->save();

        $this->task = $task;
        $this->sentToAdmin('task',$task->id,route('admin.task.show',$task->id),'Task Submitted',$task->title);

        return redirect()->back()->with('status','Form Submitted Successfully.');
    }

    private function formTwo(Request $request,Task $task){

    }

    private function formThree(Request $request,Task $task){

    }


    public function sentToAdmin($type,$nof,$route,$title,$description){

        foreach (Role::find(1)->Users as $user){

            $notification = new Notification();
            $notification->type = $type;
            $notification->nof  = $nof;
            $notification->user_id = $user->id;
            $notification->route = $route;
            $notification->title = $title;
            $notification->description = $description;
            $notification->save();

            $this->emailToAdmin($user);
        }
     }



     private function emailToAdmin($user){

         $mailRarray = [
             '#admin#' => $user->name,
             '#taskTitle' => $this->task->title,
             '#taskLink'  => route('admin.task.show',$this->task->id)
         ];

         $mailb = Laraption::where('key','=','to.admin.task.submit')->first();
         $mailb = json_decode($mailb ? $mailb->value : null);
         $mailbody = $mailb ? str_replace(array_keys($mailRarray),$mailRarray,$mailb->body) : '';

         $mailtitle = $mailb ? $mailb->title : 'A Task has been submitted.';


         $data = [
             'to' => $user->email,
             'name' => $user->name,
             'subject' => $mailtitle,
             'body' => $mailbody,
             'file'  => false
         ];

         MailSender::send('mail.request',$data);

     }
}
