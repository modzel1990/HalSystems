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

Route::get('/', function () {
    $post = App\Post::all();
    $testimony = App\Testimonial::all();
    $accreditation = App\Accreditation::all();
    $newpage = App\Newpage::all();
    $slider = App\Slider::all();
    return view('welcome', compact('post', 'testimony', 'accreditation', 'newpage', 'slider'));
});

Route::get('about', function () {
    $accreditation = App\Accreditation::all();
    $newpage = App\Newpage::all();
    $slider = App\Slider::all();
    return view('pages.about', compact('accreditation', 'newpage', 'slider'));
});

Route::get('services', function () {
    $post = App\Post::all();
    $accreditation = App\Accreditation::all();
    $slider = App\Slider::all();
    return view('pages.services', compact('post', 'accreditation', 'slider'));
});

Route::get('contact', function () {
    $accreditation = App\Accreditation::all();
    $slider = App\Slider::all();
    return view('pages.contact', compact('accreditation', 'slider'));
});

Route::get('servicetemp/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    $accreditation = App\Accreditation::all();
    $slider = App\Slider::all();
	return view('services.servicetemp', compact('post', 'accreditation', 'slider'));
});

Route::get('/Resources/LESS', 'HalSystems\ResourceController@Less');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
