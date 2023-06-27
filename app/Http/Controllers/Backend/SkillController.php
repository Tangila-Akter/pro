<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    // -----------------------------------start skills-----------------------------------
    public function skill()
    {
        $data = skill::all();
        return view("admin.skill.index", compact('data'));
    }
    public function upload(Request $request)
    {
        $data = new skill;
        $data->paragraph=$request->paragraph;
        $data->name=$request->name;
        $data->percentage=$request->percentage;
        $data->save();

        return redirect()->back();
    }
    public function edit($id)
    {
         $data=skill::find($id);
        return view("admin.skill.edit",compact("data"));
    }

    
    public function edit_skill(Request $request,$id)
    {
         $data=skill::find($id);
         $data->paragraph=$request->paragraph;
         $data->name=$request->name;
         $data->percentage=$request->percentage;
        $data->save();

        return redirect()->to(url('/skill'));
    }
    public function delete($id)
    {
        $dat=skill::find($id);
        $dat->delete();
        return redirect()->to(url('/skill'));
    }
}
