<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();
        return view("admin.service.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $data = new Service;
        $data->title=$request->title;
        $data->icon=$request->icon;
        $data->text=$request->text;
        $data->save();

        return redirect()->back();
    }

    public function edit_service($id)
    {
        $data=Service::find($id);
        return view("admin.service.edit",compact("data"));
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
        $data = Service::find($id);
        $data->title=$request->title;
        $data->icon=$request->icon;
        $data->text=$request->text;
        $data->save();

        return redirect()->to(url('/service'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data=Service::find($id);
        $data->delete();
        return redirect()->to(url('/service'));
    }
}
