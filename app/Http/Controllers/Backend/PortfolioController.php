<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioImage;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("admin.portfolio.index");
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
        // $validate= $this->validate($request, [
        //     'title' => 'nullable|min:2|max:100',
        //     'name' => 'require|image|mimes:jpeg,jpg,png',
        //     'category_id' => 'nullable',
        //     'client' => 'nullable',
        //     'project_date' => 'nullable',
        //     'project_url' => 'nullable',
        //     'text' => 'nullable',
        // ]);
        // dd('ok');

        $portfolio =new Portfolio;
        $portfolio->category_id = 4;
        $portfolio->client = 4;
        $portfolio->project_date = '2023-06-16';
        $portfolio->project_url = '';
        $portfolio->title = '';
        $portfolio->text = '';
        $portfolio->save();
        

        if($images =$request->file('name')){

        
        foreach($images as $image)
        {
            
            
            $name = time().'.'.$image->extension();
            
            $image->move(public_path().'/portfolio/', $name);
            
            
             $portfolio_image = new PortfolioImage;
             $portfolio_image->portfolio_id = $portfolio->id;
             $portfolio_image->image = $name;

             $portfolio_image->save();

        }
    
    }

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
