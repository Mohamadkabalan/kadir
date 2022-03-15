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

Route::get('/', function () {
    return view('home.index');
});

Route::get('locale/{locale}',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
})->name('switchLan');  //add name to router


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/about', function () {
    return view('about.index');
});



Route::get('/team', 'App\Http\Controllers\TeamController@index')
    ->name('team.index');

Route::get('/services', 'App\Http\Controllers\ServicesController@index')
    ->name('services.index');
Route::get('/services/fetch_data', 'App\Http\Controllers\ServicesController@fetch_data')
    ->name('services.fetch-data');
Route::get('/service-details/{id}', 'App\Http\Controllers\ServicesController@serviceDetails')
    ->name('services.service-details');


Route::get('/blogs', 'App\Http\Controllers\BlogsController@index')
    ->name('blogs.index');
Route::get('/blogs/fetch_data', 'App\Http\Controllers\BlogsController@fetchData')
    ->name('blogs.fetch-data');
Route::get('/blog-details/{id}', 'App\Http\Controllers\BlogsController@blogDetails')
    ->name('blogs.blog-details');


Route::post('/newsletter/create', 'App\Http\Controllers\NewsLetterController@store')
    ->name('contact.store');

Route::get('/contact-us', function () {
    return view('contact-us.index');
});

Route::post('/contact/create', 'App\Http\Controllers\ContactController@store')
    ->name('contact.store');

Route::get('/clear-cache', function() {
    $output = [];
    \Artisan::call('cache:clear', $output);
    dd($output);
});
Route::get('/storage-link', function() {
    $output = [];
    \Artisan::call('storage:link', $output);
    dd($output);
});
Route::get('/migrate', function() {
    $output = [];
    \Artisan::call('migrate', $output);
    dd($output);
});