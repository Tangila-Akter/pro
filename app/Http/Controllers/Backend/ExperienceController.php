<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;


class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Experience::all();
        return view("admin.experience.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $data = new Experience;
        $data->title=$request->title;
        $data->address=$request->address;
        $data->dateFrom=$request->dateFrom;
        $data->dateto=$request->dateto;
        $data->text=$request->text;
        $data->save();

        return redirect()->back();
    }

    public function edit_experience($id)
    {
        $data=Experience::find($id);
        return view("admin.experience.edit",compact("data"));
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
        $data = Experience::find($id);
        $data->title=$request->title;
        $data->address=$request->address;
        $data->dateFrom=$request->dateFrom;
        $data->dateto=$request->dateto;
        $data->text=$request->text;
        $data->save();

        return redirect()->to(url('/experience'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $dat=Experience::find($id);
        $dat->delete();
        return redirect()->to(url('/experience'));
    }
}
