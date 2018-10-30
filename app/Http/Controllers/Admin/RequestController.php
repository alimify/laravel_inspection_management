<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MailSender;
use App\Laraption;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests  = \App\Models\Request::all();
        return response()->view('admin.request.index',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request = \App\Models\Request::find($id);

        return response()->view('admin.request.show',compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function status($id,$states){
        $request = \App\Models\Request::find($id);
        $request->status = $states;
        $request->save();

        $mailRarray = [
            '#userName#' => $request->name
        ];


        if($request->status == 3){
            $client = new Client();
            $client->name = $request->name;
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->address = $request->address;
            $client->descriptions = $request->message;
            $client->save();

            $mailb = Laraption::where('key','=','to.client.request.response.accept')->first();
            $mailb = json_decode($mailb ? $mailb->value : null);
            $mailbody = $mailb ? strtr($mailb->body,$mailRarray) : '';

            $mailtitle = $mailb ? $mailb->title : 'Your request Response.';

            $data = [
                'to' => $client->email,
                'name' => $client->name,
                'subject' => $mailtitle,
                'body' => $mailbody,
                'from'   => 'test@phafex.xyz',
                'fromname' => "Phafex",
                'file'  => false
            ];

            MailSender::send('mail.request',$data);


            return redirect()->route('admin.client.edit',$client->id)
                              ->with('status','Client Successfully Added..');
        }elseif ($request->status == 2){


            $mailb = Laraption::where('key','=','to.client.request.response.decline')->first();
            $mailb = json_decode($mailb ? $mailb->value : null);

            $mailbody = $mailb ? strtr($mailb->body,$mailRarray) : '';

            $mailtitle = $mailb ? $mailb->title : 'Your request Response.';


            $data = [
                'to' => $request->email,
                'name' => $request->name,
                'subject' => $mailtitle,
                'body' => $mailbody,
                'from'   => 'test@phafex.xyz',
                'fromname' => "Phafex",
                'file'  => false
            ];

            MailSender::send('mail.request',$data);
        }

        return redirect()->back()->with('status','Action Successfully .');
    }


}
