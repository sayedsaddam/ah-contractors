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
    return view('home')->with('title', 'Home | AH Contractors');
});
Route::get('about', function () {
    return view('about')->with('title', 'About | AH Contractors');
});
Route::get('services', function () {
    return view('services')->with('title', 'Services | AH Contractors');
});
Route::get('projects', function () {
    return view('projects')->with('title', 'Projects | AH Contractors');
});
Route::get('blog', function(){
    return view('blog')->with('title', 'Blog | AH Contractors');
});
Route::get('contact', function () {
    return view('contact')->with('title', 'Contact us | AH Contractors');
});

Route::get('site', function(){
    return view('welcome');
});