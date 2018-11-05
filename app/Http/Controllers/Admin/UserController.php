<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MailSender;
use App\Laraption;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

     return response()->view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

     return response()->view('admin.user.create',compact('roles'));
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
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users,email',
            'role'  => 'required',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->role_id = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $this->emailinfo($request,$user);

        return redirect()->route('admin.user.index')->with('status','New User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);

     return response()->view('admin.user.edit',compact('roles','user'));
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
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users,email,'.$id,
            'role'  => 'required'
        ]);

        if($request->password){
            $this->validate($request,[
                'password' => 'string|min:6|confirmed'
            ]);
        }
        $user = User::find($id);
        $emailinfo = ($request->email != $user->email) || ($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        if($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        if($emailinfo){
            $this->emailinfo($request,$user);
        }

        return redirect()->back()->with('status','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('status','User Successfully Deleted.');
    }


    private function emailinfo($request,$user){
        $mailb = Laraption::where('key','=','to.user.accountinfo')->first();
        $mailb = json_decode($mailb ? $mailb->value : null);

        $mailRarray = [
            '#user#' => $user->name,
            '#email#' => $user->email,
            '#password#'  => $request->password??''
        ];

        $mailbody = $mailb ? str_replace(array_keys($mailRarray),$mailRarray,$mailb->body) : '';
        $mailtitle = $mailb? $mailb->title : 'Your account information.';

        $data = [
            'to' => $user->email,
            'name' => $user->name,
            'subject' => $mailtitle,
            'body' => $mailbody,
            'file'  => false
        ];

        MailSender::send('mail.task',$data);
    }
}
