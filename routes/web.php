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
    // $data = compact('name');

    return view('layout/home');
});
// Route::get('/demo/{name}/{id?}',function($name,$id=null){
    // echo " Hello World";
    // return view('demo');
    // echo $name. " ";
    // echo  $id;

    // $data = compact('name','id');
    // print_r($data);
    // return view('demo')->with($data);
// });
