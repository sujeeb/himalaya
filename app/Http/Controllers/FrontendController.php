<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Package_image;
use App\Package_summary;
use App\Package_include_exclude;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;


class FrontendController extends Controller
{
    //
    public function index(){
    	$bestPackage = Package::where('status', 1)
                       ->where('package_type', 'Best')
                       ->limit(3)->get();
                              
    	$data['bestPackage'] = $bestPackage;

    	$topPackage = Package::where('status', 1)
                    ->where('package_type', 'Top')
                    ->limit(6)->get();

    	$data['topPackage'] = $topPackage;

        $featuredPackage = Package::where('status',1)
                                   ->where('package_type', 'Featured')
    	                           ->limit(6)->get();
        $data['featuredPackage'] = $featuredPackage;
    	return view('welcome', $data);
    }
    public function packageDetail($id){
        $package['details'] = Package::find($id);
        $package['images'] = Package_image::where('package_id', $id)
                                            ->where('image_status', 1)->get();
        $package['allsummary'] = Package_summary::where('package_id', $id)
                                            ->where('summary_status', 1)->get();
        $package['includes'] = Package_include_exclude::where('package_id', $id)
                                            ->where('include_status', 1)->get();
        $package['excludes'] = Package_include_exclude::where('package_id', $id)
                                            ->where('include_status', 0)->get();
        return view('packageDetail', $package);
    }
    public function addToCart(Request $request){
        $package_id = $_GET['package'];
        //$_SESSION['hello'] = $package_id;
        if($request->session()->get('cart')){
            $request->session()->push('cart', $package_id);
            var_dump($request->session()->get('cart'));
        }
        else{
            echo 2;
        }
        $list = [$package_id];
        $request->session()->put('cart',$list);
        

    }
}
