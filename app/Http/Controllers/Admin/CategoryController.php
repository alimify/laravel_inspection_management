<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{


    /*Service Type Index */
    public function index()
    {
        $services                                                 = Category::all();

        return response()->view('admin.category.index',compact('services'));
    }



    /*Service Type Create */
    public function create()
    {
        return response()->view('admin.category.create');
    }



    /*Store Service Type*/
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        $service                                                   = new Category();
        $service->title                                            = $request->title;
        $service->save();

        return redirect()->route('admin.category.index')
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
        $service = Category::find($id);

        return response()->view('admin.category.edit',compact('service'));
    }


    /*Update*/
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title' => 'required'
        ]);


        $service                                                       = Category::find($id);
        $service->title                                                = $request->title;
        $service->save();

        return redirect()->back()
            ->with('status','Service Type Successfully Updated..')
            ;
    }



    /*Delete*/
    public function destroy($id)
    {
        $service = Category::find($id)->delete();

        return redirect()->back()
            ->with('status','Service Type Successfully Deleted.')
            ;
    }


}
