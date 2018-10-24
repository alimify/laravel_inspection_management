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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::check() && Auth::user()->role_id == 1){

            $redirectto ='admin.dashboard.index';

        }elseif(Auth::check() && Auth::user()->role_id == 2){

            $redirectto = 'staff.dashboard.index';

        }else{

            $redirectto = 'index';

        }

        return redirect()->route($redirectto);
    }
}
