<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class FrontendController extends Controller
{
    //
    public function index(){
    	$bestPackage = Package::where('status', 1)
                        //->where('package_type', 'Best')
                       ->limit(3)->get();
                              
    	$data['bestPackage'] = $bestPackage;

    	$topPackage = Package::where('status', 1)
                    //->where('package_type', 'Top')
                    ->limit(6)->get();

    	$data['topPackage'] = $topPackage;

        $featuredPackage = Package::where('status',1)
                                    ->where('package_type', 'Featured')
    	                           ->limit(6)->get();
        $data['featuredPackage'] = $featuredPackage;
    	return view('welcome', $data);
    }
}
