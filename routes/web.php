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
Route::get('blog-single', function () {
    return view('blog-single')->with('title', 'Blog Detail > Blog | AH Contractors');
});
Route::get('industries', function(){
    return 'Industries page will be loaded here...';
});
Route::get('help', function(){
    return 'Help page will be loaded here...';
});
Route::get('privacy-policy', function(){
    return 'Privacy policy page will be loaded here...';
});
Route::get('terms-of-use', function(){
    return 'Terms of use page will be loaded here...';
});
Route::get('customer-service', function(){
    return 'Customer service page will be loaded here...';
});
Route::get('prompt-delivery', function(){
    return 'Prompt delivery page will be loaded here...';
});
Route::get('reliable-equipment', function(){
    return 'Reliable Equipment page will be loaded here...';
});
Route::get('new-heavy-equipment', function(){
    return 'New heavy equipment page will be loaded here...';
});
Route::post('/request-quote', 'HomeController@book_now');

Route::get('site', function(){
    return view('welcome');
});