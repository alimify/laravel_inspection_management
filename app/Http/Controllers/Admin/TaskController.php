<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Client;
use App\Models\Notification;
use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return response()->view('admin.task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $users    = User::where('role_id',2)->get();
        $categories = Category::all();

      return response()->view('admin.task.create',compact('clients','users','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'client'      => 'required',
            'staff'       => 'required',
            'category'    => 'required'
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->note     = $request->note;
        $task->client_id = $request->client;
        $task->category_id = $request->category;
        $task->user_id   = $request->staff;
        $task->save();



        $this->sendToStaff('admin_task_send',$task->user_id,'<a href="'.route('staff.task.show',$task->id).'">New Task : '.$request->title.'</a>');

        return redirect()->route('admin.task.index')->with('status','Task Successfully Submitted..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        $inspection   = json_decode($task->Inspection->data??'');

        return response()->view('admin.task.show',compact('task','inspection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('role_id',2)->get();
        $clients = Client::all();
        $task = Task::find($id);
        $categories = Category::all();

      return response()->view('admin.task.edit',compact('users','clients','task','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'client'      => 'required',
            'staff'       => 'required',
            'category'    => 'required'
        ]);

        $task = Task::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->note   = $request->note;
        $task->client_id = $request->client;
        $task->user_id   = $request->staff;
        $task->category_id = $request->category;
        $task->save();


if($task->status_id  == 1) {
    $this->sendToStaff('admin_task_update',$task->user_id,'<a href="' . route('staff.task.show', $task->id) . '">Task Updated: ' . $request->title . '</a>');
}

        return redirect()->back()->with('status','Task Successfully Updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function sendToStaff($type,$staff,$data){
        $notification = new Notification();
        $notification->type = $type;
        $notification->user_id = $staff;
        $notification->data = $data;
        $notification->save();
    }
}
