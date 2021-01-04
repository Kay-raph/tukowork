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
    return view('index');
});

 // about page (app/views/about.blade.php)
 Route::get('about', function()
 {
     return view('about');
 });
 Route::get('findlogin', function()
 {
     return view('findlogin');
 });
 Route::get('findsignup', function()
 {
     return view('findsignup');
 });
 Route::get('policy', function()
 {
     return view('policy');
 });
 Route::get('postjoblogin', function()
 {
     return view('postjoblogin');
 });
 Route::get('postsignup', function()
 {
     return view('postsignup');
 });
