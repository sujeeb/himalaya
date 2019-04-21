<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use Image;
use App\Package_summary;
use App\Package_include_exclude;
use DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['packagedata'] = Package::all();
        return view('package/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('package/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'package_title' => 'required',
            'package_description' => 'required',
            'package_price' => 'required | numeric',
            'package_title_image' => 'required',
            'package_type' => 'required'
        ]);
        $savedata = new Package();
        if ($request->hasfile('package_title_image')) {
          $image = $request->file('package_title_image');      // name of input file is image so image is written here
          $filename = time(). $image->getClientOriginalName();
          $location = public_path('images/') . $filename;

          Image::make($image)->save($location);
       }
       
        $savedata->package_title = $request->input('package_title');
        $savedata->package_description = $request->input('package_description');
        $savedata->package_price = $request->input('package_price');
        $savedata->status = $request->input('status');
        $savedata->package_title_image = $filename;
        $savedata->package_type = $request->input('package_type');
        $packagedetail = $savedata->save();
        $package_id = DB::getPdo()->lastInsertId();
        //save multiple summary
            foreach($request->input('summary_title') as $key =>$value)
        {
        $savedatasummary = new Package_summary();
        $savedatasummary->package_id = $package_id;
        $savedatasummary->summary_title = $value;
        $savedatasummary->summary_location = $request->summary_location[$key];
        $savedatasummary->summary_status = $request->summary_status[$key];
        $savedatasummary->summary_detail = $request->summary_detail[$key];
        $savedatasummary->save();
        } 
        //end multiple summary
        //save multiple includeExclude
        foreach($request->input('include_detail') as $key=>$value){
            $savedatainclude = new Package_include_exclude();
            $savedatainclude->package_id = $package_id;
            $savedatainclude->include_detail = $value;
            $savedatainclude->include_status = $request->include_status[$key];
            $savedatainclude->save();


        }
        //end multiple includeExclude
        return redirect('/package/index');

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
        $data['postdata'] = Package::find($id);
        return view('package.updatePackageDetails', $data);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'package_titlle' => 'required',
            'package_description' => 'required',
            'package_price' => 'required | numeric',
            'package_title_image' => 'required',
            'package_type' => 'required'
        ]);

        $savedata = Package::find($id);
         $savedata->package_title = $request->input('package_title');
        $savedata->package_description = $request->input('package_description');
        $savedata->package_price = $request->input('package_price');
        $savedata->status = $request->input('status');
        $savedata->package_title_image = $request->input('package_title_image');
        $savedata->package_type = $request->input('package_type');
        $savedata->save();
      return redirect('/package/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::destroy($id);
        return redirect('/package/index');
    }
}
