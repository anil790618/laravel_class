<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\userRegistration;
use App\Models\Customer;

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

// Route::get('/', function () {
    // $data = compact('name');

    // return view('layout/home');
// });
// Route::get('/demo/{name}/{id?}',function($name,$id=null){
    // echo " Hello World";
    // return view('demo');
    // echo $name. " ";
    // echo  $id;

    // $data = compact('name','id');
    // print_r($data);
    // return view('demo')->with($data);
// });
// php artisan make:controller basicController
Route::get('/',[DemoController::class,'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');

// php artisan make:controller <controller-name>  --invokable
Route::get('/courses',SingleActionController::class);

// php artisan make:controller <controller-name>  --resource
Route::resource('/photo',PhotoController::class);


Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

Route::get('/customer',function(){
    $customers =  Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});

Route::get('/registeruser',[userRegistration::class,'index']);
Route::post('/registeruser',[userRegistration::class,'store']);