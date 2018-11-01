<?php

namespace App\Http\Controllers\Staff;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $completeds = Task::select('id','created_at')
            ->whereYear('created_at',Carbon::now()->year)
            ->where('status_id',4)
            ->where('user_id',Auth::id())
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


        return response()->view('staff.main.dashboard',compact('completed'));
    }
}
