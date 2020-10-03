<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutOrderController extends Controller {

    public function index() {
    	$total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        if (config('global.device') != 'pc') {
            return view('mobile/home/checkout_order');
        } else {
            return view('frontend/home/checkout_order')->with('total',$total);
        }
    }

}
