<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Fact;
use App\Models\About;
use App\Models\Testimonial;
use App\Models\Res_summary;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('abouts')->orderBy('id', 'desc')->limit(1)->get();
        $about1 = DB::table('abouts')->orderBy('id', 'desc')->limit(1)->get();
        $summary = DB::table('res_summaries')->orderBy('id', 'desc')->limit(1)->get();
        $education = Education::all();
        $experience = Experience::all();
        // $skill = skill::all();
        $fact = Fact::all();
        $testimonial = testimonial::all();
        $service = Service::all();
        return view("frontend.home", compact('fact', 'testimonial', 'about' , 'about1', 'service', 'summary', 'education', 'experience'));
    }
    public function a()
    {
        $about = DB::table('abouts')->orderBy('id', 'desc')->limit(1)->get();
        $about1 = DB::table('abouts')->orderBy('id', 'desc')->limit(1)->get();
        $summary = DB::table('res_summaries')->orderBy('id', 'desc')->limit(1)->get();
        $education = Education::all();
        $experience = Experience::all();
        $skill = skill::all();
        $fact = Fact::all();
        $testimonial = testimonial::all();
        $service = Service::all();
        return view("frontend.test", compact('skill', 'fact', 'testimonial', 'about' , 'about1', 'service', 'summary', 'education', 'experience'));
    }
    
    
    public function upload_contact(Request $request)
    {
        $data = new Contact;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->text=$request->text;
        $data->save();

        return redirect()->back()->with('message', 'Your message has been sent. Thank you!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
