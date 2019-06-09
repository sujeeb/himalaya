<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', 'FrontendController@logout');


Route::group(['middleware' => ['role:admin']], function () {
   //Route::get('/', 'FrontendController@index')->name('himalaya');

Route::get('/package/create', 'PackageController@create')->name('package.create');
Route::post('/package/store', 'PackageController@store')->name('package.store');
Route::get('/package/index', 'PackageController@index')->name('package.index');
Route::get('/package/edit/{id}', 'PackageController@edit')->name('package.edit');
Route::delete('/package/destroy/{id}', 'PackageController@destroy')->name('package.destroy');
Route::post('/package/updatePackageDetails/{id}', 'PackageController@update')->name('package.update');

Route::resource('packageSummary', 'PackageSummaryController');
Route::resource('packageIncludeExclude', 'PackageIncludeExcludeController');
Route::resource('packageImage', 'PackageImageController');
Route::get('/summarydiv', function(){
	return view('packageSummary/summaryDiv');
});

Route::get('/includeExcludeDiv', function(){
	return view('packageIncludeExclude/includeExcludeDiv');
});

Route::get('/imagediv', function(){
	return view('packageImage/imagediv');
});
Route::post('/package/update/{id}', 'PackageController@update')->name('package.update');
Route::get('/updateimagediv', function(){
	return view('packageImage/updateimagediv');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
});


Route::group(['middleware' => ['role:user']], function () {
   //Route::get('/', 'FrontendController@index')->name('himalaya');
});

 Route::get('/', 'FrontendController@index')->name('himalaya');

Route::get('/addToCart', 'FrontendController@addToCart');
Route::get('/removePackage', 'FrontendController@removePackage');
Route::get('/cartlist', 'FrontendController@cartlist');

Route::get('/packageDetail/{id}', 'FrontendController@packageDetail');












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
