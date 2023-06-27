<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;


class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Education::all();
        return view("admin.education.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $data = new Education;
        $data->name=$request->name;
        $data->address=$request->address;
        $data->dateFrom=$request->dateFrom;
        $data->dateto=$request->dateto;
        $data->text=$request->text;
        $data->save();

        return redirect()->back();
    }

    public function edit_education($id)
    {
        $data=Education::find($id);
        return view("admin.education.edit",compact("data"));
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
        $data = Education::find($id);
        $data->name=$request->name;
        $data->address=$request->address;
        $data->dateFrom=$request->dateFrom;
        $data->dateto=$request->dateto;
        $data->text=$request->text;
        $data->save();

        return redirect()->to(url('/education'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $dat=Education::find($id);
        $dat->delete();
        return redirect()->to(url('/education'));
    }
}
