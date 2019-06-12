<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Package_image;
use App\Package_summary;
use App\Package_include_exclude;
use App\Http\Controllers\Controller;
use Session;



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

        Session::push('cart', $package_id);
        return 1;

    }

    public function cartlist(){

        $sessionData = Session::get('cart');
        $cartListData['packages'] = Package::whereIn('id', $sessionData)->get();


        return view('cartlist',$cartListData);
    }

    public function removePackage(){
        $package_id = $_GET['package_id'];
        $cartall = Session::get('cart');

       Session::forget('cart');
        foreach ($cartall as $value) {
            if($value != $package_id) {
                Session::push('cart', $value);
            }
        }


        $sessionData = Session::get('cart');
        if($sessionData != null)
        $cartListData['packages'] = Package::whereIn('id', $sessionData)->get();
    else
        $cartListData = [];
                return view('cartlist',$cartListData);
    }


        public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

   public function payment(){
        $sessionData = Session::get('cart');
        $cartListData['packages'] = Package::whereIn('id', $sessionData)->get();


        return view('payment',$cartListData);
   } 

}
