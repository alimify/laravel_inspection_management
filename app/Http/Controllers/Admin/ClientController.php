<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Newsletter;

class ClientController extends Controller
{


    /* Client Index */
    public function index()
    {
        $clients                                     = Client::all();


        return response()->view('admin.client.index',compact('clients'));
    }




    /* Create Client */
    public function create()
    {
        return response()->view('admin.client.create');
    }



    /* Store Client */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request,[
            'name'                                      => 'required|max:50',
            'email'                                     => 'email',
            'descriptions'                              => 'max:500'
        ]);

        //Store new client
        $client                                         = new Client();
        $client->name                                   = $request->name;
        $client->phone                                  = $request->phone;
        $client->email                                  = $request->email;
        $client->address                                = $request->address;
        $client->descriptions                           = $request->descriptions;
        $client->save();

        //MailChimp email store
        Newsletter::subscribeOrUpdate($client->email,[ 'NAME' => $client->name ]);


        return redirect()->route('admin.client.index')
                          ->with('status','New Client Added..')
        ;

    }



    /* Show Client */
    public function show($id)
    {
        //
    }




    /* Client Edit Page */
    public function edit($id)
    {
        $client                                          = Client::find($id);

      return response()->view('admin.client.edit',compact('client'));
    }




    /* Update Client Data */
    public function update(Request $request, $id)
    {
        //Validation
        $this->validate($request,[
            'name'                                           => 'required|max:50',
            'email'                                          => 'email',
            'descriptions'                                   => 'max:500'
        ]);

        //Save Client Data
        $client                                              = Client::find($id);
        $client->name                                        = $request->name;
        $client->email                                       = $request->email;
        $client->phone                                       = $request->phone;
        $client->address                                     = $request->address;
        $client->descriptions                                = $request->descriptions;
        $client->save();

        //Update MailChimp
        Newsletter::subscribeOrUpdate($client->email,[ 'NAME' => $client->name ]);

        return redirect()->back()
                          ->with('status','Client Data Successfully Updated..')
        ;
    }




    /* Delete Client */
    public function destroy($id)
    {
        $client                                               = Client::find($id);
        $client->delete();

        return redirect()->back()
                          ->with('status','Client Successfully Deleted.')
        ;
    }
}
