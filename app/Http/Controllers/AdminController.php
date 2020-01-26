<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class admincontroller extends Controller
{

     public function dashboard(){
            return view('welcome');
    }

     public function admin_login(){
            return view('admin.admin_login');
    }

    public function allproducts_page1(){
            $all_products = DB::table('books')->offset(0)->limit(15)->get();
            return view('admin.all_products',['all_products'=>$all_products]);
    }

    public function allproducts_page2(){
            $all_products = DB::table('stock_data')->offset(15)->limit(15)->get();
            return view('admin.admin_all_products',['all_products'=>$all_products]);
    }
    public function allproducts_page3(){
            $all_products = DB::table('stock_data')->offset(30)->limit(15)->get();
            return view('admin.admin_all_products',['all_products'=>$all_products]);
    }
    public function allproducts_page4(){
            $all_products = DB::table('stock_data')->offset(45)->limit(5)->get();
            return view('admin.admin_all_products',['all_products'=>$all_products]);
    }



    public function delete_product($product_id){
            DB::table('products')->where('product_id',$product_id)->delete();
            return Redirect::to('/admin/allproducts');
    }

   public function edit_product($product_id){
            $product_info=DB::select('select * from products where product_id=?',[$product_id]);
            return view('admin.edit_product',['product_info'=>$product_info]);
    }

    public function update_product(Request $request,$product_id){
            $data=array();
            $data['ItemName']=$request->ItemName;
            $data['Type']=$request->Type;
            $data['Brand']=$request->Brand;
            $data['UnitPricePur']=$request->UnitPricePur;
            $data['StockAmount']=$request->StockAmount;
            $data['Balance']=$request->Balance;
            $data['UnitPriceSell']=$request->UnitPriceSell;
            $data['Image']=$request->Image;

     DB::table('products')->where('product_id',$product_id)->update($data);
     return Redirect::to('/admin/allproducts');
    }


    public function allusers_page1(){
        $all_products = DB::table('users')->offset(0)->limit(15)->get();
        return view('admin.all_users',['all_products'=>$all_products]);
    }

    public function admin_login_action(Request $request)
    {
        $admin_email=$request->admin_email;
        $admin_password=$request->admin_password;

        $result=DB::table('admin')->where('admin_email',$admin_email)
        ->where('admin_password',$admin_password)
        ->first();

        if ($result) {
            Session::put('admin_name',$result->admin_name);
            return Redirect::to('/admin/dashboard');
        }
        else {
            $message="Email or password is incorrect.";
            Session::put('message',$message);
                return Redirect::to('/admin_login');
        }
  }
}
