<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

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
        $savedata = new Package();
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
