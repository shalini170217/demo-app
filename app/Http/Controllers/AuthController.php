<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
public function login(){
    return view("auth.login");
}
public function listUsers(){
    $users=User::get();
    return view("Welcome",compact("users"));
}
public function insertProducts(){
    return view("welcome");
}
public function insertProductsPost(Request $request){
    
    $request->validate([
        "p_name"=> "required",
        "p_slug"=>"required",
        "p_price"=>"required",
        
    ]);
    $product=new Products();
    $product->product_name=$request->p_name;
    $product->slug=$request->p_slug;
    $product->price=$request->p_price;
    if($product->save()){
        return "value inserted successfully";
    }
return "error occuredd";

}
}
