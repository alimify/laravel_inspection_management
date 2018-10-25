<?php

namespace App\Http\Controllers\Staff;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::where('user_id',Auth::id())
                        ->get();

        return response()->view('staff.task.index',compact('tasks'));
    }

    public function show(Task $task){
        $inspection   = json_decode($task->Inspection->data??'');

        return response()->view('staff.task.show',compact('task','inspection'));
    }
}
