<?php

use Illuminate\Support\Facades\Route;

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
//frontend
Route::get('/','FrontendController@home');
Route::get('/contact','FrontendController@contact');
Route::get('/safety','FrontendController@safety');
Route::get('/color','FrontendController@colorContact');
Route::get('/power','FrontendController@powerContact');
Route::get('/daily','FrontendController@dailyContact');
Route::get('/eye_accessories','FrontendController@accessories');
Route::get('/eye_accessories','FrontendController@accessories');
Route::get('/eye_mask','FrontendController@eyeMask');
Route::get('/eye_care','FrontendController@eyeCare');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//backend
Route::group(['middleware' => ['auth']],function (){
    Route::resource('len_categories','LenCategoryController');
    Route::resource('len_items','LenItemController');    
    Route::resource('eye_masks','EyeMaskController');
    Route::resource('accessory_categories','AccessoryCategoryController');
    Route::resource('accessories','AccessoryController');
});


//user profile
Route::get('/profile','Auth\UserController@profile');
Route::post('/update_profile','Auth\UserController@updateProfile');

Route::get('test',function(){
    return view('test');
});


Route::get('image-gallery', 'MultipleImageController@index');
Route::post('image-gallery', 'MultipleImageController@upload');
Route::delete('image-gallery/{id}', 'MultipleImageController@destroy');
Route::get('/deleteImage','AccessoryController@deleteImage');



