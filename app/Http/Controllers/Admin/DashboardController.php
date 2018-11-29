<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Task;
use App\Role;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /*Dashboard index */
    public function index()
    {
        $tasks                                 = Task::where('status_id','!=',4)
                                                       ->get()
        ;


        $requests                              = \App\Models\Request::where('status',1)
                                                                     ->get()
        ;


        $clients                               = Client::all();

        $staffs                                = Role::find(2)->Users;


        $completeds                            = Task::select('id','created_at')
                                                       ->whereYear('created_at',Carbon::now()->year)
                                                       ->where('status_id',4)
                                                       ->get()
                                                       ->groupBy(function($date){
                                                           return Carbon::parse($date->created_at)->format('m');
                                                       })
        ;

        $completes                             = [];
        $completed                             = [];

        foreach ($completeds as $key => $value){
            $completes[$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            $completed[$i] = empty($completes[$i]) ? 0 : $completes[$i];
        }


        return response()->view('admin.main.dashboard',compact('tasks','requests','clients','staffs','completed'));
    }

    /* Create */
    public function create()
    {
        //
    }

    /* Store */
    public function store(Request $request)
    {
        //
    }

    /* Show */
    public function show($id)
    {
        //
    }

    /* Edit */
    public function edit($id)
    {
        //
    }

    /* Update */
    public function update(Request $request, $id)
    {
        //
    }

    /* Destroy */
    public function destroy($id)
    {
        //
    }
}
