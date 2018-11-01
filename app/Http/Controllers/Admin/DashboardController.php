<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Task;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('status_id','!=',4)->get();
        $requests = \App\Models\Request::where('status',1)
                                         ->get();
        $clients = Client::all();
        $staffs = Role::find(2)->Users;

        $completeds = Task::select('id','created_at')
                           ->whereYear('created_at',Carbon::now()->year)
                           ->where('status_id',4)
                           ->get()
                           ->groupBy(function($date){
                               return Carbon::parse($date->created_at)->format('m');
                           })
        ;

        $completes = [];
        $completed = [];
        foreach ($completeds as $key => $value){
            $completes[$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            $completed[$i] = empty($completes[$i]) ? 0 : $completes[$i];
        }


        return response()->view('admin.main.dashboard',compact('tasks','requests','clients','staffs','completed'));
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
}
