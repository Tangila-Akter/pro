<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FactController extends Controller
{
    // -----------------------------------start facts-----------------------------------

    public function fact()
    {
        $data = fact::all();
        return view("admin.fact.index", compact('data'));
    }
    public function upload(Request $request)
    {
        $data = new fact;
        $data->paragraph=$request->paragraph;
        $data->purecounter=$request->purecounter;
        $data->header=$request->header;
        $data->text=$request->text;
        $data->save();

        return redirect()->back();
    }
    public function edit($id)
    {
        $data=Fact::find($id);
        //  dd($data);
        return view("admin.fact.edit",compact("data"));
        
    }
    public function edit_fact(Request $request,$id)
    {
        $data=Fact::find($id);
        $data->paragraph=$request->paragraph;
        $data->purecounter=$request->purecounter;
        $data->header=$request->header;
        $data->text=$request->text;
        $data->save();

        return redirect()->to(url('/fact'));
        
    }
    public function delete($id){
        $data=Fact::find($id);
        $data->delete();
        return redirect()->to(url('/fact'));
    }
}
