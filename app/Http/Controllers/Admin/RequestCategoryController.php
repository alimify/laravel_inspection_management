<?php

namespace App\Http\Controllers\Admin;

use App\Models\RequestCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = RequestCategory::all();
        return response()->view('admin.requestservice.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.requestservice.create');
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
            'title' => 'required'
        ]);

        $service = new RequestCategory();
        $service->title = $request->title;
        $service->save();

        return redirect()->route('admin.requestCategory.index')
                          ->with('status','Service Type Successfully Created,');
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
        $service = RequestCategory::find($id);

        return response()->view('admin.requestservice.edit',compact('service'));
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
            'title' => 'required'
        ]);


        $service = RequestCategory::find($id);
        $service->title = $request->title;
        $service->save();

        return redirect()->back()
                          ->with('status','Service Type Successfully Updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = RequestCategory::find($id)->delete();
        return redirect()->back()
                          ->with('status','Service Type Successfully Deleted.');
    }
}
