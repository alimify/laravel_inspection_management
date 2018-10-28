<?php

namespace App\Http\Controllers;

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

       /* if(Auth::check() && Auth::user()->role_id == 1){

            $redirectto ='admin.dashboard.index';

        }elseif(Auth::check() && Auth::user()->role_id == 2){

            $redirectto = 'staff.dashboard.index';

        }else{

            $redirectto = 'index';

        }*/

        return response()->view('public.reform');

       // return redirect()->route($redirectto);
    }


    public function frontForm(){
        return response()->view('public.reform');
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
       $rquest->status = 1;
       $rquest->save();

       $data = [
           'to' => $rquest->email,
           'name' => $rquest->name,
           'subject' => 'Your request successfully received.',
           'message' => 'We have received your request , soon we will response. Thank you.',
           'from'   => 'test@phafex.xyz',
           'fromname' => "Phafex",
           'file'  => false
       ];

       MailSender::send('mail.request',$data);


       return redirect()->back()->with('status','Request successfully received');
    }
}
