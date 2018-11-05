<?php

namespace App\Http\Controllers\Admin;

use App\Models\RequestCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestCategoryController extends Controller
{
    /*Service Type Index */
    public function index()
    {
        $services                                                 = RequestCategory::all();

        return response()->view('admin.requestservice.index',compact('services'));
    }

    /*Service Type Create */
    public function create()
    {
        return response()->view('admin.requestservice.create');
    }

    /*Store Service Type*/
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        $service                                                   = new RequestCategory();
        $service->title                                            = $request->title;
        $service->save();

        return redirect()->route('admin.requestCategory.index')
                          ->with('status','Service Type Successfully Created,')
        ;
    }

    /*Show*/
    public function show($id)
    {
        //
    }

    /*Edit*/
    public function edit($id)
    {
        $service = RequestCategory::find($id);

        return response()->view('admin.requestservice.edit',compact('service'));
    }


    /*Update*/
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title' => 'required'
        ]);


        $service                                                       = RequestCategory::find($id);
        $service->title                                                = $request->title;
        $service->save();

        return redirect()->back()
                          ->with('status','Service Type Successfully Updated..')
        ;
    }

    /*Delete*/
    public function destroy($id)
    {
        $service = RequestCategory::find($id)->delete();

        return redirect()->back()
                          ->with('status','Service Type Successfully Deleted.')
         ;
    }
}
