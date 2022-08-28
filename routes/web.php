<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\userRegistration;
use App\Models\Customer;
use Illuminate\Http\Request;

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
// Route::get('/',[DemoController::class,'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');

// php artisan make:controller <controller-name>  --invokable
Route::get('/courses',SingleActionController::class);

// php artisan make:controller <controller-name>  --resource
Route::resource('/photo',PhotoController::class);


Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register'])->name('register.form');

Route::get('/customer',function(){
    $customers =  Customer::all();
    echo "<pre>";
    print_r($customers);
    // print_r($customers->toArray());
});
Route::get('/',[userRegistration::class,'home']);
Route::get('/registeruser',[userRegistration::class,'index'])->name('register.data');
Route::get('/registeruser/delete/{id}',[userRegistration::class,'delete'])->name('customer.delete');
Route::get('/registeruser/edit/{id}',[userRegistration::class,'edit'])->name('customer.edit');
Route::post('/registeruser/update/{id}',[userRegistration::class,'update'])->name('customer.update');
Route::post('/registeruser',[userRegistration::class,'store']);
Route::get('/registeruser/registeruser_view',[userRegistration::class,'view']);



Route::get('/get-all-session',function(){
    $session = session()->all();
    p($session);
});

Route::get('/set-session',function(Request $request){
$request->session()->put('user_id','123');
$request->session()->put('user_name','AnilYadav');
$request->session()->flash('status','success');
return redirect('/registeruser/registeruser_view');
});

Route::get('/destroy-session',function(){
session()->forget("user_id");
return redirect('get-all-session');
});