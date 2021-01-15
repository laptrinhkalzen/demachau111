<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;

class CheckoutOrderController extends Controller {

    public function index() {
       // dd(session('cart'));
        $district=DB::table('district')->get();
        $city=DB::table('city')->get();
    	$total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        $product_options=DB::table('product_option')->get();
        $option_details=DB::table('option_detail')->get()->groupBy('product_id');
        dd($option_details);
        return view('frontend/checkout/checkout',compact('total','city','district','product_options','$option_details'));
        
    }
    
     public function buy_now($id,Request $request) {
           $id=$id;
           $option_number=$request->option_number;
           $cart = session()->get('cart');
           $product=Product::find($id);
         if (isset($cart[$id.'_'.$option_number]) && $cart[$id.'_'.$option_number]['option_number']==$request->option_number) {
            $cart[$id.'_'.$option_number]['quantity'] += $request->quantity;
            session()->put('cart', $cart);   
        } else {
            $cart[$id.'_'.$option_number] = [
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
         if (isset($cart[$id.'_'.$option_number]) && $cart[$id.'_'.$option_number]['option_number']==$request->option_number) {
            $cart[$id.'_'.$option_number]['quantity'] += $request->quantity;
            session()->put('cart', $cart);   
        } else {
            $cart[$id.'_'.$option_number] = [
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

    public function checkout_payment(Request $request){
        $data=$request->all();
        dd($data);  
        if(Session('cart')){

        }
    }

    public function create_payment(Request $request)
    {
        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "UDOPNWS1"; //Mã website tại VNPAY 
        $vnp_HashSecret = "EBAHADUGCOEWYXCMYZRMTMLSHGKNRPBN"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://demachau.local";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 100000;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    public function return(Request $request)
{
    $url = session('url_prev','/');
    if($request->vnp_ResponseCode == "00") {
        $this->apSer->thanhtoanonline(session('cost_id'));
        return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
    }
    session()->forget('url_prev');
    return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
}


}
