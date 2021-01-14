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
        return view('backend/flashsale/create')->with('products',$products);
    }

   
    public function store(Request $request) {
        $product = $request->product;
        $discount_type = $request->discount_type;
        $discount_value = $request->discount_value;
        $price_decrease = $request->price_decrease;
        $data = array();
        $data['name'] = $request->name;
        $data['note'] = $request->note;
        $data['order'] = $request->order;
        $data['start'] = $request->start;
        $data['end'] = $request->end;
       $input1 = DB::table('flashsale')->insertGetId($data);

         for($count=0;$count<count($product);$count++){
                $import_product=array(
                'flash_sale_id'=>$input1, 
                'product_id'=>$product[$count],
                'discount_type'=>$discount_type[$count],
                'discount_value'=>$discount_value[$count],
                'price_decrease'=>$price_decrease[$count]
                );
                $insert_data[]=$import_product;
                $input=DB::table('flash_sale_product')->insert($insert_data);
            }
        
             if ($input) {
            return redirect()->route('admin.flashsale.index')->with('success', 'Tạo thành công');
        } else {
            return redirect()->route('admin.flashsale.index')->with('error', 'Tạo thất bại');
        }
    }
     public function edit($id){
        $flashsale=DB::table('flashsale')->where('id',$id)->first();
        return view('backend/flashsale/update',compact('flashsale'));
    }

    public function update(Request $request,$id){
           $data = array();
            $data['name'] = $request->name;
            $data['note'] = $request->note;
            $data['order'] = $request->order;
            $data['start'] = $request->start;
            $data['end'] = $request->end;
            $input = DB::table('flashsale')->where('id',$id)->update($data);

            if($input){

        return redirect()->route('admin.flashsale.index')->with('success','Cập nhật th công');
      }else
      {
        return redirect()->route('admin.flashsale.index')->with('success','Cập nhật thất bại');
      }
    }

    public function destroy($id) {
        DB::table('flashsale')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
    


}
