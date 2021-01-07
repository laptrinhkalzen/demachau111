<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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
        return view('frontend/checkout/checkout',compact('total','city','district'));
        
    }

}
