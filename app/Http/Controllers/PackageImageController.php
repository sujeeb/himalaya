<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package_image;
use Image;

class PackageImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['imagedata'] = Package_image::all();
        return view('packageImage/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packageImage/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->file('image_name') as $key => $value) {
            $savedata = new Package_image();
            if ($request->hasfile('image_name')) 
            {
              $image = $value;     // name of input file is image so image is written here
              $filename = time(). $image->getClientOriginalName();
              $location = public_path('images/') . $filename;

              Image::make($image)->save($location);
            }
              $savedata->image_title = $request->image_title[$key];
              $savedata->image_name = $filename;
              $savedata->image_status = $request->image_status[$key];
              $savedata->package_id = 1;
              $savedata->save();
        }

        return redirect('/packageImage');
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
