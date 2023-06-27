<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    // -----------------------------------start testimonial-----------------------------------
    public function admin_testimonial()
    {
        $data = testimonial::all();
        return view("admin.testimonial.index",compact("data"));
    }
    public function upload(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'image' => 'required|image',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } 
        
        if (!empty($_FILES['image']['name'])) {
            $image_name = 'image_' . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION); // createing a random name of file
            $Image = Storage::disk('public')->putFileAs('testimonial', $request->file('image'), $image_name); // putting the new file on folder
        }
        Testimonial::create([
            'name' => $request->input('name'),
            'image' => $Image,  // here updating the name on database
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            
        ]);
        
        return redirect()->back();
    }
    public function edit($id)
    {
         $data=testimonial::find($id);
        //  dd($data);
        return view("admin.testimonial.edit",compact("data"));
        
    }
    public function edit_testimonial(Request $request,$id)
    {
        //  $data=testimonial::find($id);
        //  $data->name=$request->name;
        //  $data->title=$request->title;
        //  $image=$request->image;
        //  $imagename=time().'.'.$image->getClientOriginalExtension();
        //  $request->image->move('testimonial',$imagename);
        //  $data->image=$imagename;
        //  $data->text=$request->text;
        //  $data->save();

        //  return redirect()->to(url('/testimonial'));
        $validator = Validator::make(request()->all(), [
            'image' => 'required|image',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } 
        $data=testimonial::find($id);

        if (!empty($_FILES['image']['name'])) {
            $image_name = 'image_' . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION); // createing a random name of file
            Storage::disk('public')->delete($data->image); // deleting the previous file from folder
            $Image = Storage::disk('public')->putFileAs('testimonial', $request->file('image'), $image_name); // putting the new file on folder
        } else {
            $Image = $data->image; // if not changed, the previous name will grab and pass only. no other change
        }


        $data->update([
            'name' => $request->input('name'),
            'image' => $Image,  // here updating the name on database
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            
        ]);
        return redirect()->back();
        
    }

    // image e ki problem hoche ?hae. ai way te ami kisu miss korsi mone hocche. ekhon add or edit korte gele error ase. error page e jan 

    

    public function delete($id){
        $data=testimonial::find($id);
        $data->delete();
        return redirect()->to(url('/admin_testimonial'));
    }
}
