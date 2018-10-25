<?php

namespace App\Http\Controllers\Staff;

use App\Models\Inspection;
use App\Models\Notification;
use App\Models\Task;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InspectionController extends Controller
{



    public function submitForm(Request $request,Task $task){
        if($task->category_id == 1){
        $result      =    $this->formOne($request,$task->id);
        }elseif ($task->category_id == 2){
         $result     =   $this->formTwo($request,$task->id);
        }elseif ($task->category_id == 3){
        $result      =   $this->formThree($request,$task->id);
        }

        return $result ? redirect()->back()->with('status','Form Submitted Successfully.') : redirect()->back();
    }

    public function formOne(Request $request,Task $task){

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

        $this->sentToAdmin('staff_task_submitted','<a href="'.route('staff.task.show',$task->id).'">Task Submitted : '.$request->title.'</a>');

        return redirect()->back()->with('status','Form Submitted Successfully.');
    }

    private function formTwo(Request $request,Task $task){

    }

    private function formThree(Request $request,Task $task){

    }


    public function sentToAdmin($type,$data){

        foreach (Role::find(1)->Users as $user){

            $notification = new Notification();
            $notification->type = $type;
            $notification->user_id = $user->id;
            $notification->data = $data;
            $notification->save();
        }
     }

}
