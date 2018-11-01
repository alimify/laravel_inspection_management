<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MailSender;
use App\Laraption;
use App\Models\Category;
use App\Models\Client;
use App\Models\Notification;
use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            'category'    => 'required',
            'address'     => 'required'
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->note     = $request->note;
        $task->address = $request->address;
        $task->client_id = $request->client;
        $task->category_id = $request->category;
        $task->user_id   = $request->staff;
        $task->save();


        /*Send Notification*/
        $this->sendToStaff('task',$task->id,$task->user_id,route('staff.task.show',$task->id),'New Task',$task->title);


        /*Send Email Notification*/
        $user = User::find($task->user_id);
        $mailb = Laraption::where('key','=','to.staff.task.assign.notification')->first();
        $mailb = json_decode($mailb ? $mailb->value : null);

        $mailRarray = [
            '#taskLink#' => route('staff.task.show',$task->id),
            '#taskTitle#' => $task->title,
            '#staff#'  => $user->name
        ];

        $mailbody = $mailb ? strtr($mailb->body,$mailRarray) : '';
        $mailtitle = $mailb ? $mailb->title : 'You have new notification';

        $data = [
            'to' => $user->email,
            'name' => $user->name,
            'subject' => $mailtitle,
            'body' => $mailbody,
            'file'  => false
        ];
        MailSender::send('mail.task',$data);


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


        Notification::where('nof',$task->id)
            ->where('type','task')
            ->where('user_id',Auth::id())
            ->update([
                'read' => true
            ]);



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
            'category'    => 'required',
            'address'    => 'required'
        ]);

        $task = Task::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->note   = $request->note;
        $task->address = $request->address;
        $task->client_id = $request->client;
        $task->user_id   = $request->staff;
        $task->category_id = $request->category;
        $task->save();

        /*Send Notification*/
        if($task->status_id  == 1) {
            $this->sendToStaff('task',$task->id,$task->user_id,route('staff.task.show', $task->id),'Task Updated',$task->title);
        }


        /*Send Email Notification*/
        $user = User::find($task->user_id);
        $mailb = Laraption::where('key','=','to.staff.task.update.notification')->first();
        $mailb = json_decode($mailb ? $mailb->value : null);

        $mailRarray = [
            '#taskLink#' => route('staff.task.show',$task->id),
            '#taskTitle#' => $task->title,
            '#staff#'  => User::find($task->user_id)->name
        ];
        $mailbody = $mailb ? strtr($mailb->body,$mailRarray) : '';
        $mailtitle = $mailb? $mailb->title : 'Your have received new notification.';

        $data = [
            'to' => $user->email,
            'name' => $user->name,
            'subject' => $mailtitle,
            'body' => $mailbody,
            'file'  => false
        ];

        MailSender::send('mail.task',$data);

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


    private function sendToStaff($type,$nof,$staff,$route,$title,$description){
        $notification = new Notification();
        $notification->type = $type;
        $notification->nof = $nof;
        $notification->user_id = $staff;
        $notification->route = $route;
        $notification->title = $title;
        $notification->description = $description;
        $notification->save();
    }
}
