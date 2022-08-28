<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class userRegistration extends Controller
{


    public function home(){
        return view('home');
    }
    public function index(){ 
        $url = url('/registeruser');
        $title= "Register User";
        $data = compact('url','title');
        return view('registration')->with($data);
    }
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request)->all();

        // p($request->all());
        // die;

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
        return redirect("registeruser/registeruser_view");
     }

     public function view(){
        $customer = Customer::all();
        $data = compact('customer');
        // echo "<pre>";
        // print_r("$customer");
        // print_r("$customer->toArray");
        // return view("registeruser_view");
        return view("registeruser_view")->with($data);
     }
     public function view_trash(){
        $customer = Customer::onlyTrashed()->get();
        $data = compact('customer'); 
        return view("registeruser_view_trash")->with($data);
     }

     public function delete($id){
            // echo $id;
            // die;
            // $customer = Customer::find($id)->delete();
            $customer = Customer::find($id);

            if(!is_null($customer)){
                $customer->delete();
            }
            // return redirect()->back();
            return redirect('/registeruser/registeruser_view');
            // echo "<pre>";
            // print_r($customer);
     }

     public function forcedelete($id){
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forcedelete();
        }
        // return redirect()->back();
        return redirect('/registeruser/registeruser_view_trash');
     }
     public function restore($id){
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        // return redirect()->back();
        return redirect('/registeruser/registeruser_view');
     }
     public function edit($id){
        $customer = customer::find($id);
        if(is_null($customer)){
            return redirect('/registeruser/registeruser_view');
        }else{
            $url = url('/registeruser/update')."/".$id;
            $title = "Update User Details";
            $data = compact('customer','url','title');
            // echo"<pre>";
            // print_r($data);
            return view('registration')->with($data);
        }
     }


     public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->country=$request['country'];
        $customer->state=$request['state'];
        $customer->dob=$request['dob'];
        // $customer->password=md5($request['password']);
        $customer->save();
        return redirect('/registeruser/registeruser_view');

     }


}
