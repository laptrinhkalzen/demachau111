<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;

class CheckoutOrderController extends Controller {

    public function index() {
        $district=DB::table('district')->get();
        $city=DB::table('city')->get();
    	$total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        $product_options=DB::table('product_option')->get();
        $option_details=DB::table('option_detail')->get();
        return view('frontend/checkout/checkout',compact('total','city','district','product_options','$option_details'));
        
    }
    
     public function buy_now($id,Request $request) {
           $id=$id;
           $cart = session()->get('cart');
           $product=Product::find($id);
         if (isset($cart[$id]) && $cart[$id]['option_number']==$request->option_number) {
            $cart[$id]['quantity'] += $request->quantity;
            session()->put('cart', $cart);   
        } else {
            $cart[$id] = [
                "alias" =>$product->alias,
                "product_id"=>$id,
                "title" => $product->title,
                "quantity" => $request->quantity,
                "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                "image" => $product->getImage(),
                "url" => $product->alias,
                "option_number"=>$request->option_number
            ];
            session()->put('cart', $cart);
        }
       
           
        return Redirect()->route('checkout_order.index');
        
    }

    public function buy_now_alias($alias,Request $request) {
           $id=DB::table('product')->where('alias',$alias)->pluck('id')->first();
           $cart = session()->get('cart');
           $product=Product::find($id);
         if (isset($cart[$id]) && $cart[$id]['option_number']==$request->option_number) {
            $cart[$id]['quantity'] += $request->quantity;
            session()->put('cart', $cart);   
        } else {
            $cart[$id] = [
                "alias" =>$product->alias,
                "title" => $product->title,
                "product_id"=>$id,
                "quantity" => $request->quantity,
                "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                "image" => $product->getImage(),
                "url" => $product->alias,
                "option_number"=>$request->option_number
            ];
            session()->put('cart', $cart);
        }


       
           
        return Redirect()->route('checkout_order.index');
        
    }
}
