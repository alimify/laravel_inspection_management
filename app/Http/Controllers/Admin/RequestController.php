<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MailSender;
use App\Laraption;
use App\Models\Client;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Newsletter;

class RequestController extends Controller
{
    /*Request Index*/
    public function index()
    {
        $requests                                            = \App\Models\Request::all();
        return response()->view('admin.request.index',compact('requests'));
    }

    /*Create*/
    public function create()
    {
        //
    }

    /*Store*/
    public function store(Request $request)
    {
        //
    }

    /*Show*/
    public function show($id)
    {
        $request                                               = \App\Models\Request::find($id);

        return response()->view('admin.request.show',compact('request'));
    }

    /*Edit*/
    public function edit($id)
    {
        //
    }

    /*Update*/
    public function update(Request $request, $id)
    {
        //
    }

    /*Destroy*/
    public function destroy($id)
    {
        //
    }

    public function status($id,$states){
        $request                                                = \App\Models\Request::find($id);
        $request->status                                        = $states;
        $request->save();

        $mailRarray                                             = [
                                                                    '#client#'    => $request->name,
                                                                    '#service#'  => $request->Type->title??''
                                                                  ];


        if($request->status == 3){

            $client                                             = Client::firstOrNew([
                'email'                                         => $request->email
            ]);
            $client->name                                       = $request->name;
            //$client->email                                      = $request->email;
            $client->phone                                      = $request->phone;
            $client->address                                    = $request->address;
            $client->descriptions                               = $request->message;
            $client->save();

            $this->addToTask($request,$client);

            Newsletter::subscribeOrUpdate($client->email,[ 'NAME' => $client->name ]);



            $mailb                                              = Laraption::where('key','=','to.client.request.response.accept')
                                                                             ->first()
            ;
            $mailb                                              = json_decode($mailb ? $mailb->value : null);
            $mailbody                                           = $mailb ? str_replace(array_keys($mailRarray),$mailRarray,$mailb->body) : '';

            $mailtitle                                          = $mailb ? $mailb->title : 'Your request Response.';

            $data                                               = [
                                                                    'to'         => $client->email,
                                                                    'name'       => $client->name,
                                                                    'subject'    => $mailtitle,
                                                                    'body'       => $mailbody,
                                                                    'file'       => false
                                                                  ]
            ;

            MailSender::send('mail.request',$data);

            return redirect()->route('admin.client.edit',$client->id)
                              ->with('status','Client Successfully Added..')
             ;

        }elseif ($request->status == 2){


            $mailb                                                = Laraption::where('key','=','to.client.request.response.decline')
                                                                               ->first()
            ;
            $mailb                                                = json_decode($mailb ? $mailb->value : null);

            $mailbody                                             = $mailb ? str_replace(array_keys($mailRarray),$mailRarray,$mailb->body) : '';

            $mailtitle                                            = $mailb ? $mailb->title : 'Your request Response.';


            $data                                                 = [
                                                                       'to'                => $request->email,
                                                                       'name'              => $request->name,
                                                                       'subject'           => $mailtitle,
                                                                       'body'              => $mailbody,
                                                                       'file'  => false
                                                                      ]
            ;

            MailSender::send('mail.request',$data);
        }

        return redirect()->back()
                          ->with('status','Action Successfully .')
        ;
    }


    public function addToTask($data,$client){

        $task = new Task();
        $task->title = 'New Inspection For '.$data->name;
        $task->description = $data->message;
        $task->note     = '';
        $task->address = $data->address;
        $task->client_id = $client->id;
        $task->category_id = 1;
        $task->user_id   = 0;
        $task->save();

    }

}
