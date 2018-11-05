<?php

namespace App\Http\Controllers;

use App\Laraption;
use App\Models\Client;
use App\Models\RequestCategory;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redirectto = $this->redirecttodashboard();

        if($redirectto){
            return redirect()->route($redirectto);
        }
        return redirect()->route('index');
    }

    public function indexoriginal(){

        $html = Laraption::where('key','index.html')->first();
        $html = $html ? str_replace('#requestLink#',route('frontForm'),$html->value) : '';

        return response()->view('index',compact('html'));
    }


    public function frontForm(){
        $redirectto = $this->redirecttodashboard();

        if($redirectto){
            return redirect()->route($redirectto);
        }

       //var_dump(config('newsletter.lists.subscribers.id'));
        $services = RequestCategory::all();

        return response()->view('public.reqform',compact('services'));
    }

    public function frontFormSubmit(Request $request){
       $this->validate($request,[
           'name'  => 'required',
           'email'  => 'required|email',
           'phone'  => 'required',
           'address' => 'required',
           'message' => 'required'
       ]);


       $rquest = new \App\Models\Request();
       $rquest->name = $request->name;
       $rquest->email = $request->email;
       $rquest->phone = $request->phone;
       $rquest->address = $request->address;
       $rquest->message = $request->message;
       $rquest->request_category_id = $request->service_type;
       $rquest->status = 1;
       $rquest->save();


        $mailRarray = [
            '#client#' => $request->name
        ];



        $mailb = Laraption::where('key','=','to.client.request.entry')->first();
        $mailb = json_decode($mailb ? $mailb->value : null);
        $mailbody = $mailb ? str_replace(array_keys($mailRarray),$mailRarray,$mailb->body) : '';

        $mailtitle = $mailb ? $mailb->title : 'Your request successfully received.';


        $data = [
           'to' => $rquest->email,
           'name' => $rquest->name,
           'subject' => $mailtitle,
           'body' => $mailbody,
           'file'  => false
       ];

       MailSender::send('mail.request',$data);


       return redirect()->back()->with('status','Request successfully received');
    }



    public function confirmTask($task,$client){
        $task = Task::where('id',$task)
                      ->where('client_id',$client)
                      ->first()
        ;
        if(!$task){
            abort(404);
        }

        $task->status_id = 4;
        $task->save();

        $client = Client::find($client);

        return response()->view('public.confirmTask',compact('client'));
    }


    private function redirecttodashboard(){

        $redirectto = false;

        if(Auth::check() && Auth::user()->role_id == 1){

            $redirectto ='admin.dashboard.index';

        }elseif(Auth::check() && Auth::user()->role_id == 2){

            $redirectto = 'staff.dashboard.index';

        }

        return $redirectto;

    }
}
