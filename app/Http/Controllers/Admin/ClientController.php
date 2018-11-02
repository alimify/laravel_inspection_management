<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Newsletter;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return response()->view('admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.client.create');
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
            'name'                    => 'required|max:50',
            'email'                   => 'email',
            'descriptions'            => 'max:500'
        ]);

        $client = new Client();
        $client->name                 = $request->name;
        $client->phone                = $request->phone;
        $client->email                = $request->email;
        $client->address              = $request->address;
        $client->descriptions         = $request->descriptions;
        $client->save();

        Newsletter::subscribeOrUpdate($client->email,[ 'NAME' => $client->name ]);


        return redirect()->route('admin.client.index')->with('status','New Client Added..');
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
        $client = Client::find($id);

      return response()->view('admin.client.edit',compact('client'));
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
            'name'                   => 'required|max:50',
            'email'                  => 'email',
            'descriptions'           => 'max:500'
        ]);

        $client = Client::find($id);
        $client->name               = $request->name;
        $client->email              = $request->email;
        $client->phone              = $request->phone;
        $client->address            = $request->address;
        $client->descriptions       = $request->descriptions;
        $client->save();

        Newsletter::subscribeOrUpdate($client->email,[ 'NAME' => $client->name ]);

        return redirect()->back()->with('status','Client Data Successfully Updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->back()->with('status','Client Successfully Deleted.');
    }
}
