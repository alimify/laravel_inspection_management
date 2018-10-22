<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    public function index(){
        return response()->view('admin.main.systemsetting');
    }

    public function update(Request $request){

    }

}
