<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class userRegistration extends Controller
{
    public function index(){
        return view('registration');
    }
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request)->all();

        $customer = new Customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->country=$request['country'];
        $customer->state=$request['state'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
        $customer->save();
     }
}
