<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Res_summary;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Res_summary::all();
        return view("admin.summary.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $data = new Res_summary;
        $data->name=$request->name;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->text=$request->text;
        $data->save();

        return redirect()->back();
    }

    public function edit_summary($id)
    {
        $data=Res_summary::find($id);
        return view("admin.summary.edit",compact("data"));
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
        $data = Res_summary::find($id);
        $data->name=$request->name;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->text=$request->text;
        $data->save();

        return redirect()->to(url('/summary'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $dat=Res_summary::find($id);
        $dat->delete();
        return redirect()->to(url('/summary'));
    }
}
