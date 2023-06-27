<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // -----------------------------------start about-----------------------------------
    public function admin_about()
    {
        $data = about::all();
        return view("admin.about.index",compact("data"));
    }
    public function upload(Request $request)
    {
        $data = new about;
        $data->name=$request->name;
        $data->birthday=$request->birthday;
        $data->website=$request->website;
        $data->phone=$request->phone;
        $data->city=$request->city;
        $data->age=$request->age;
        $data->degree=$request->degree;
        $data->email=$request->email;
        $data->freelance=$request->freelance;
        $data->location=$request->location;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->instagram=$request->instagram;
        $data->skype=$request->skype;
        $data->linkedin=$request->linkedin;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('about',$imagename);
        $data->image=$imagename;
        $data->save();

        return redirect()->back();
    }
    public function edit($id)
    {
         $data=about::find($id);
        //  dd($data);
        return view("admin.about.edit",compact("data"));
        
    }
    public function about_edit(Request $request,$id)
    {
         $data=about::find($id);
         $data->name=$request->name;
        $data->birthday=$request->birthday;
        $data->website=$request->website;
        $data->phone=$request->phone;
        $data->city=$request->city;
        $data->age=$request->age;
        $data->degree=$request->degree;
        $data->email=$request->email;
        $data->freelance=$request->freelance;
        $data->location=$request->location;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->instagram=$request->instagram;
        $data->skype=$request->skype;
        $data->linkedin=$request->linkedin;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('about',$imagename);
        $data->image=$imagename;
         $data->save();
         

         return redirect()->to(url('/admin_about'));
        
    }

    

    public function delete($id){
        $data=about::find($id);
        $data->delete();
        return redirect()->to(url('/admin_about'));
    }









// SAMPLE IMAGE UPDATE FUNCTION STARTS

    
    public function update(Request $request, $id)
    {
        $validator = Validator::make(request()->all(), [
            'cat_name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // here end the validation section. if validation fails, it will return back with specific error input fields.

        $cat_info = Category::find($id);
        // here we initialize the data by ID

        // Image upload on storage folder starts
        if (!empty($_FILES['cat_banner']['name'])) {
            $cat_banner_name = 'cat_banner_' . time() . '.' . pathinfo($_FILES['cat_banner']['name'], PATHINFO_EXTENSION); // createing a random name of file
            Storage::disk('public')->delete($cat_info->cat_banner); // deleting the previous file from folder
            $catBannerImage = Storage::disk('public')->putFileAs('cat_photo/cat_banner', $request->file('cat_banner'), $cat_banner_name); // putting the new file on folder
        } else {
            $catBannerImage = $cat_info->cat_photo; // if not changed, the previous name will grab and pass only. no other change
        }
        // Image upload on storage folder ends



        $cat_info->update([
            'cat_name' => $request->input('cat_name'),
            'cat_slug' => strtolower($cat_slug),
            'cat_icon' => $request->input('cat_icon'),
            'cat_edited_by' => Auth::user()->id,
            'cat_photo' => $catImage,
            'cat_banner' => $catBannerImage,  // here updating the name on database
            'cat_order' => $request->input('cat_order'),
            'cat_desc' => $request->input('cat_desc'),
            'cat_status' => $request->input('cat_status'),
            'cat_is_featured' => $request->input('cat_is_featured'),
            'cat_meta_title' => $request->input('cat_meta_title'),
            'cat_meta_key' => $request->input('cat_meta_key'),
            'cat_meta_description' => $request->input('cat_meta_description')
        ]);
        return redirect()->route('categories.index')->with('success', 'Category Updated successfully');
    }

    // I'm keeping the file here for your overview. If you have any confusion, amake janaben.







}




