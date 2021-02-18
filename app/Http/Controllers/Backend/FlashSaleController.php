<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class FlashSaleController extends Controller {
    

    public function index() {
        $flashsale = DB::table('flashsale')->get();
        return view('backend/flashsale/index', compact('flashsale'));
    }

   
    public function create() {
        $products=DB::table('product')->orderBy('created_at', 'desc')->get();
        $list_flashsale=DB::table('flashsale')->where('status',1)->where('end','>=',Carbon::now('Asia/Ho_Chi_Minh'))->orderBy('end','desc')->limit(1)->first();
        //dd($list_flashsale);
        return view('backend/flashsale/create')->with('products',$products);
    }

   
    public function store(Request $request) {
        $this->validate($request,
        [

            'start' => 'bail|required|after_or_equal:today',
            'end' => 'bail|required||after_or_equal:start',

        ],

        [
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min',
            'max' => ':attribute không được lớn hơn :max',

        ],

        [

            'start' => 'Thời gian bắt đầu',
            'end' => 'Thời gian kết thúc',
            'today' => 'hôm nay',

        ]

    );
        $product = $request->product;
        $discount_type = $request->discount_type;
        $discount_value = $request->discount_value;
        $price_decrease = $request->price_decrease;
        $quantity = $request->quantity;
       
        $data = array();
        $data['name'] = $request->name;
        $data['note'] = $request->note;
        //$data['order'] = $request->order;

        if(isset($request->status)){
            $data['status'] = 1;
            }
            else{
            $data['status'] = null;  
            }
                    $data['start'] = $request->start;
        $data['end'] = $request->end;
       $input1 = DB::table('flashsale')->insertGetId($data);

         for($count=0;$count<count($product);$count++){
                $import_product=array(
                'flash_sale_id'=>$input1, 
                'product_id'=>$product[$count],
                'product_name' => DB::table('product')->where('id',$product[$count])->pluck('title')->first(),
                'discount_type'=>$discount_type[$count],
                'discount_value'=>$discount_value[$count],
                'quantity'=>$quantity[$count],
                'price_decrease'=>$price_decrease[$count]
                );
                $insert_data[]=$import_product;
                
            }

            $input=DB::table('flash_sale_product')->insert($insert_data);
            $this_flash_sale=DB::table('flashsale')->where('id',$input1)->first();
            if($this_flash_sale->status==1 && $this_flash_sale->start<Carbon::now('Asia/Ho_Chi_Minh') && $this_flash_sale->end>Carbon::now('Asia/Ho_Chi_Minh')){
             $product_sales=DB::table('flash_sale_product')->where('id',$input1)->get();
             foreach ($product_sales as $key => $product_sale) {
                  DB::table('product')->where('id',$product_sale->product_id)->update(['sale_prcie'=>$product_price->price_decrease]);
                }
            }
            
             if ($input) {
            return redirect()->route('admin.flashsale.index')->with('success', 'Tạo thành công');
        } else {
            return redirect()->route('admin.flashsale.index')->with('error', 'Tạo thất bại');
        }
    }
     public function edit($id){
        $products=DB::table('product')->orderBy('created_at', 'desc')->get();
        $flash_sale_product = DB::table('flash_sale_product')->join('product','product.id','=','flash_sale_product.product_id')->where('flash_sale_id',$id)->get();
        //dd($flash_sale_product);
        $flashsales =DB::table('flashsale')->where('id',$id )->first();
        return view('backend/flashsale/update',compact('products','flashsales','flash_sale_product'));
    }

    public function update(Request $request, $id){
        
        $product = $request->product;
        $discount_type = $request->discount_type;
        $discount_value = $request->discount_value;
        $price_decrease = $request->price_decrease;
        $quantity = $request->quantity;

            $data = array();
            $data['name'] = $request->name;
            $data['note'] = $request->note;
            //$data['order'] = $request->order;
            if(isset($request->status)){
            $data['status'] = 1;
            }
            else{
            $data['status'] = null;  
            }
            $data['start'] = $request->start;
            $data['end'] = $request->end;
            $input1 = DB::table('flashsale')->where('id',$id)->update($data);

             DB::table('flash_sale_product')->where('flash_sale_id',$id)->delete();
            for($count=0;$count<count($product);$count++){
                $import_product=array(
                'flash_sale_id'=>$id, 
                'product_id'=>$product[$count],
                'product_name' => DB::table('product')->where('id',$product[$count])->pluck('title')->first(),
                'discount_type'=>$discount_type[$count],
                'discount_value'=>$discount_value[$count],
                'quantity'=>$quantity[$count],
                'price_decrease'=>$price_decrease[$count]
                
                );
                $insert_data[]=$import_product;   
            }
            $input=DB::table('flash_sale_product')->insert($insert_data);

            if($input){

        return redirect()->route('admin.flashsale.index')->with('success','Cập nhật thành công');
      }else
      {
        return redirect()->route('admin.flashsale.index')->with('success','Cập nhật thất bại');
      }
    }
    public function remove(Request $request){
        $product_id=$request->product_id;
        $flashsale_id=$request->flashsale_id;
        $delete=DB::table('flash_sale_product')->where('flash_sale_id',$flashsale_id)->where('product_id',$product_id)->delete();
        if ($delete) {
            return response()->json(['success'=>1]);    
        }

        
    }

    public function destroy($id) {
        DB::table('flashsale')->where('id',$id)->delete();
        DB::table('flash_sale_product')->where('flash_sale_id',$id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
    


}
